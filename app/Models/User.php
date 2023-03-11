<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;


    protected $primaryKey = 'user_id';     //id will be replaced by user_id

    protected $fillable = ['name','name2','phone','email','date_of_birth','status']; //before inserting data or down one

    protected $guarded = [];     //before inserting data or up one

    // protected $guarded = [];

    protected $hidden = ['user_id']; //for hiding user id while fetching
}
