<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function __construct()
    {
        $this->values = [
            'name' => 'Log do Sistema',
            'pluralName' => 'Logs do Sistema',
        ];
        $this->middleware('permission:visualizar-logs-do-sistema')->only(['index','show']);
    }

    public function index(Request $request)
    {
        $this->values['request'] = $request;
        
        $this->values['logs'] = ActivityLog::readLogs($request->subject_id,$request->log_name,$request->causer_id,$request->description)->paginate(20)->withQueryString();

        return view('admin.log.index', $this->values);
    }

    public function show(ActivityLog $log)
    {
        $this->values['log'] = $log;

        return view('admin.log.show', $this->values);
    }
}