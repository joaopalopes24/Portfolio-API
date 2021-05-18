<?php

namespace App\Models;

use Spatie\Permission\Models\Permission as Permissions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Permission extends Permissions
{
    use LogsActivity;

    protected $fillable = ['name','full_name','description','guard_name'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['name','full_name','description'])
        ->useLogName('Permission');
    }
}