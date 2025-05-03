<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


use Illuminate\Database\Eloquent\Casts\Attribute;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function name(): Attribute
    {
        return new Attribute (

            get: function ($value) {
                //convertir los caracteres en la primera letra mayuscula.

                return ucwords($value);
            },

            //capturar los valores ingresados en el campo (MUTADORES)

            set: function($value) {

                //convertir los caracteres a olo minusculas
                return strtolower($value);
           }
        );
    }


    //Mejoras de Codigo, Podemos disminuir líneas de código utilizando el método fn():


    //protected fuction name(): Attribute
    //return new Attribute( 
    // accsores -> convertir las caracteres en la primera letra mayuscula
    //get: fn($value) => ucwords($value),
    //mutadores -> convertir los caracteres a solo minusculas
    //set: fn($value) => strtolower($value),
    
}
