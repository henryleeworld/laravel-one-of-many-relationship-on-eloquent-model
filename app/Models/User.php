<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function logins(): HasMany
    {
        return $this->hasMany(Login::class);
    }

    public function latest_login(): HasOne
    {
        return $this->hasOne(Login::class)->ofMany()->orderByDesc('logins.id');
    }

    public function states(): HasMany
    {
        return $this->hasMany(State::class);
    }

    public function current_state(): HasOne
    {
        return $this->hasOne(State::class)->ofMany()->orderByDesc('states.id');
    }
}
