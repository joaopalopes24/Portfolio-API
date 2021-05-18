<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PermissionRequest;
use App\Models\Permission;
use Illuminate\Support\Str;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->values = [
            'name' => 'Permission',
            'pluralName' => 'Permissions',
        ];
        $this->middleware('permission:show-permissions')->only(['index','show']);
        $this->middleware('permission:create-permissions')->only(['create','store']);
        $this->middleware('permission:edit-permissions')->only(['edit','update']);
        $this->middleware('permission:delete-permissions')->only('destroy');
    }

    public function index()
    {
        $this->values['permissions'] = Permission::paginate(20);

        return view('admin.permission.index', $this->values);
    }

    public function create()
    {
        return view('admin.permission.create', $this->values);
    }

    public function store(PermissionRequest $request)
    {
        $values = $request->validated();
        $values['name'] = Str::slug($values['full_name']);
        $values['guard_name'] = 'web';

        Permission::create($values);

        return redirect()->route('admin.permission.index')->withErrors(['success' => trans('auth.store',['name' => $this->values['name']])]);
    }

    public function show(Permission $permission)
    {
        $this->values['permission'] = $permission;

        return view('admin.permission.show', $this->values);
    }

    public function edit(Permission $permission)
    {
        $this->values['permission'] = $permission;

        return view('admin.permission.edit', $this->values);
    }

    public function update(PermissionRequest $request, Permission $permission)
    {
        $values = $request->validated();
        $values['name'] = Str::slug($values['full_name']);

        $permission->fill($values)->save();

        return redirect()->route('admin.permission.index')->withErrors(['success' => trans('auth.update',['name' => $this->values['name']])]);
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();

        return redirect()->route('admin.permission.index')->withErrors(['success' => trans('auth.destroy',['name' => $this->values['name']])]);
    }
}
