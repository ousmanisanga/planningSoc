<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Incident extends Model
{
    use HasFactory;


    protected $fillable = [
        'nomIncident',
        'heureIncident',
        'heureRetourNormal',
        'observation',
        'user_id',
        'dateIncident'
    ];

    protected $table = 'incidents';

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
