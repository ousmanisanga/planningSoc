<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Permutation extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Uuid::uuid4()->toString();
        });
    }


    protected $fillable = ['objet', 'motif', 'superviseurRemplacant', 'datePermutation', 'statut','user_id', 'superviseur', 'heureDebut', 'heureFin'];
    protected $table = 'permutations';
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
