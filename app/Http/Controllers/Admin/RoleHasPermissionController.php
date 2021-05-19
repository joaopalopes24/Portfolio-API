<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleHasPermissionRequest;
use App\Models\Permission;
use App\Models\Role;

class RoleHasPermissionController extends Controller
{
    public function __construct()
    {
        $this->values = [
            'name' => 'Permissões - Perfil',
            'nameOther' => 'Permissões',
        ];
        $this->middleware('permission:visualizar-e-alterar-permissoes-do-perfil')->only(['index','store']);
    }

    public function index(Role $role)
    {
        $this->values['role'] = $role;
        $this->values['permissions'] = Permission::orderBy('name')->get();

        return view('admin.role-has-permission.index', $this->values);
    }

    public function store(RoleHasPermissionRequest $request, Role $role)
    {
        $values = $request->validated();

        $role->syncPermissions($values['permissions']);

        return redirect()->route('admin.role.index')->withErrors(['success' => trans('auth.permission',['name' => $role->name])]);
    }
}