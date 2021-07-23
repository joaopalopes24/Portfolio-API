<?php

namespace App\Models;

use Spatie\Activitylog\Models\Activity;

class ActivityLog extends Activity
{
    public static function readLogs($subject_id,$log_name,$causer_id,$description)
    {       
        $result = ActivityLog::select()
            ->when($subject_id, function ($query, $subject_id) {
                return $query->where('subject_id', $subject_id);
            })
            ->when($log_name, function ($query, $log_name) {
                return $query->where('log_name', 'like', '%'.$log_name.'%');
            })
            ->when($causer_id, function ($query, $causer_id) {
                return $query->where('causer_id', $causer_id);
            })
            ->when($description, function ($query, $description) {
                return $query->where('description', 'like', '%'.$description.'%');
            })
            ->orderBy('id');
        
        return $result;
    }
}