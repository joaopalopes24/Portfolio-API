<?php

namespace App\Models;

use Spatie\Permission\Models\Role as Roles;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Role extends Roles
{
    use LogsActivity;

    protected $fillable = ['name','guard_name'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['name'])
        ->useLogName('Perfil');
    }
}