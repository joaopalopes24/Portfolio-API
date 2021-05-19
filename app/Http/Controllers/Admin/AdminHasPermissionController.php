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
            'name' => 'Permissões - Administrador',
            'nameOther' => 'Permissões',
        ];
        $this->middleware('permission:visualizar-e-alterar-permissoes-dos-administradores')->only(['index','store']);
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