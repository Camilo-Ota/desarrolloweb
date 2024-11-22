<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'username',  // Asegúrate de que el campo username está en el fillable
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    /**
     * Obtén el identificador único del usuario (debe devolver un valor único, generalmente el ID del usuario).
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        // Retorna el identificador único del usuario (generalmente el id)
        return $this->getKey();
    }

    /**
     * Obtén las claves personalizadas que serán incluidas en el payload del JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        // Puedes agregar más datos aquí si lo necesitas (por ejemplo roles o permisos)
        return [
            'username' => $this->username,
        ];
    }

    // Cambiar el identificador de autenticación para que use 'username' en lugar de 'id' (si es necesario)
    public function getAuthIdentifierName()
    {
        return 'username';
    }
}
