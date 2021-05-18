<?php

namespace App\Models;

use Spatie\Permission\Models\Permission as Permissions;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Support\Str;

class Permission extends Permissions
{
    use LogsActivity;

    protected $fillable = ['name','full_name','description','guard_name'];

    protected static $logAttributes = ['name','full_name','description'];
    
    protected static $logName = 'Permission';
}