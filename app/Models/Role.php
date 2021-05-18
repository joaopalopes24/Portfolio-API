<?php

namespace App\Models;

use Spatie\Permission\Models\Role as Roles;
use Spatie\Activitylog\Traits\LogsActivity;

class Role extends Roles
{
    use LogsActivity;

    protected $fillable = ['name','guard_name'];

    protected static $logAttributes = ['name'];
    
    protected static $logName = 'Role';
}