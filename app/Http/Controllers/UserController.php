<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\Incident;
use App\Models\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Permutation;


class UserController extends Controller
{

    public function allPermutation()
    {
        $permutations = Permutation::with('users')->orderByDesc('id')->get();

        // $nom = $permutations->user->nom;
        // $prenom = $permutations->user->prenom;

        $permutationCount = Permutation::count();
        $permutationsCount = Permutation::where('statut', 'Accepté')->count();
        $permutationtCount = Permutation::where('statut', 'Refusé')->count();
        $permutationtsCount = Permutation::where('statut', 'en attente')->count();



        return view('users.allPermutation', compact('permutations'), [
            'permutationCount' => $permutationCount,
            'permutationsCount' => $permutationsCount,
            'permutationtCount' => $permutationtCount,
            'permutationtsCount' => $permutationtsCount,
            // 'nom' => $nom,
            // 'prenom' => $prenom,

        ]);
        // return view('home');
    }



    public function allPermission()
    {
        $permissions = Permission::with('users')->orderByDesc('id')->get();
        $permissionCount = Permission::count();
        $permissionsCount = Permission::where('statut', 'Accepté')->count();
        $permissiontCount = Permission::where('statut', 'Refusé')->count();
        $permissiontsCount = Permission::where('statut', 'en attente')->count();

        return view('users.allPermission', compact('permissions'), [
            'permissionCount' => $permissionCount,
            'permissionsCount' => $permissionsCount,
            'permissiontCount' => $permissiontCount,
            'permissiontsCount' => $permissiontsCount,


        ]);


    }
    public function index()
    {
        $users = User::all()->sortByDesc('id');

        $userCount = User::count();
        return view('users.index', compact('users'), ['userCount' => $userCount]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserRequest $request )
    {
        $user = User::create([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'address' => $request->input('address'),
            'telephone' => $request->input('telephone'),
            'statut' => $request->input('statut'),
            'role' => $request->input('role'),
            'nomUtilisateur' => $request->input('nomUtilisateur')
        ]);

        return redirect()->route('users.index')->with('success', 'Vous avez créer un nouvel utilisateur avec success ');
    }

    public function declarer()
    {
        $incidents = Incident::all()->sortByDesc('id');
        return view('users.declarer', compact('incidents'));
    }



    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));

    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return response()->json([
            'statut' => 200,
            'user' => $user,
        ]);
    }


    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'statut' => $request->input('statut'),
            'address' => $request->input('address'),
            'role' => $request->input('role'),
            'telephone' => $request->input('telephone'),
            'nomUtilisateur' => $request->input('nomUtilisateur'),
        ]);

        return redirect()->route('home')->with('success', ' Vos modifications ont bien été  effectué');
    }



    public function updatePassword( Request $request, $userId)
    {
        $userId = auth()->id();
        $user = User::findOrFail($userId);

        if ($request->input('new_password') !== $request->input('confirm_password')) {
            return redirect()->back()->withInput()->withErrors(['password' => 'Le nouveau mot de passe ne correspond pas à la confirmation.']);
        }

        if (!Hash::check($request->input('old_password'), $user->password)) {
            return redirect()->back()->withInput()->withErrors(['password' => 'L\'ancien mot de passe est incorrect.']);
        }
        $user->update([
            'password' => bcrypt($request->input('new_password')),
        ]);

        // Mettre à jour les autres informations de l'utilisateur si nécessaire
        // ...

        $user->first_login = false;
        $user->save();

        return redirect()->route('home')->with('Success', 'Votre mot de passe a bien été modifié ');

    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete($id);
        return redirect()->route('users.index')->with('Success', 'l\'ultisateur a bien été supprimé');
    }

    public function modification($userId){

        $userId = auth()->id();

        $user = User::findOrFail($userId);

        return view('users.modification', compact('user'));
    }


    public function voir($id)
    {
        $permutation = Permutation::findOrFail($id);
        return view('users.voir', compact('permutation'));
    }

    public function validation($id)
    {
        $permission = Permission::findOrFail($id);
        return view('users.validation', compact('permission'));
    }



}
