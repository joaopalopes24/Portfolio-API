<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Permission;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminHasPermissionRequest;

class AdminHasPermissionController extends Controller
{
    public function __construct()
    {
        $this->values = [
            'name' => 'Permissons - Administrator',
            'nameOther' => 'Permissons',
        ];
        $this->middleware('permission:show-and-edit-permissions-for-administrators')->only(['index','store']);
    }

    public function index(Admin $admin)
    {
        $this->values['admin'] = $admin;
        $this->values['permissions'] = Permission::orderBy('name')->get();

        return view('admin.admin-has-permission.index', $this->values);
    }

    public function store(AdminHasPermissionRequest $request, Admin $admin)
    {
        $values = $request->validated();

        $values ? $admin->syncPermissions($values['permissions']) : $admin->syncPermissions();

        return redirect()->route('admin.admin.index')->withErrors(['success' => trans('auth.permissionUser',['name' => $admin->full_name])]);
    }
}