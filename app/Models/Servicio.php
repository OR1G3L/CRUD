<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Servicio extends Model
{
    use HasFactory;

    protected $table = 'servicios';

    protected $fillable = ['nombre','imagen'];

    public function users() {
        return $this->belongsToMany(User::class, 'user_servicio');
    }
}
