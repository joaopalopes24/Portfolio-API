<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Models\Role;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->values = [
            'name' => 'Role',
            'pluralName' => 'Roles',
        ];
        $this->middleware('permission:show-roles')->only(['index','show']);
        $this->middleware('permission:create-roles')->only(['create','store']);
        $this->middleware('permission:edit-roles')->only(['edit','update']);
        $this->middleware('permission:delete-roles')->only('destroy');
    }

    public function index()
    {
        $this->values['roles'] = Role::paginate(10);

        return view('admin.role.index', $this->values);
    }

    public function create()
    {
        return view('admin.role.create', $this->values);
    }

    public function store(RoleRequest $request)
    {
        $values = $request->validated();
        $values['guard_name'] = 'admin';

        Role::create($values);

        return redirect()->route('admin.role.index')->withErrors(['success' => trans('auth.store',['name' => $this->values['name']])]);
    }

    public function show(Role $role)
    {
        $this->values['role'] = $role;

        return view('admin.role.show', $this->values);
    }

    public function edit(Role $role)
    {
        $this->values['role'] = $role;

        return view('admin.role.edit', $this->values);
    }

    public function update(RoleRequest $request, Role $role)
    {
        $values = $request->validated();

        $role->fill($values)->save();

        return redirect()->route('admin.role.index')->withErrors(['success' => trans('auth.update',['name' => $this->values['name']])]);
    }

    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('admin.role.index')->withErrors(['success' => trans('auth.destroy',['name' => $this->values['name']])]);
    }
}
