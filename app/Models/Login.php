<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Login extends Model
{
    use HasFactory, Notifiable;
    // use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [];
}
