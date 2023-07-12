<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Permission extends Model
{


    use HasFactory;

    protected $fillable = [
        'objet',
        'motif',
        'dateDepart',
        'dateFin',
        'statut',
        'user_id',
        'heureDepart',
        'heureFin',
        'superviseur'

    ];
    protected $table = 'permissions';

    public function users()
    {
    return $this->belongsTo(User::class, 'user_id');
    }

    public $incrementing = false;
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Uuid::uuid4()->toString();
        });
    }


}
