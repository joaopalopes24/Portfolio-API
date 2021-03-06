<?php

namespace App\Models;

use App\Notifications\AdminResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Admin extends Authenticatable
{
    use HasRoles,HasFactory,Notifiable,LogsActivity;

    protected $fillable = ['full_name','cpf','email','password','birthday','provider','provider_id'];

    protected $hidden = ['password','remember_token'];
    
    protected $casts = ['email_verified_at' => 'datetime'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['full_name','email','cpf','birthday','provider','provider_id'])
        ->useLogName('Administrador');
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPassword($token));
    }
}