<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use Spatie\Permission\Models\Role;
use App\Models\Admin;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->values = [
            'name' => 'Administrador',
            'pluralName' => 'Administradores',
        ];
        $this->middleware('permission:visualizar-administradores')->only(['index','show']);
        $this->middleware('permission:cadastrar-administradores')->only(['create','store']);
        $this->middleware('permission:editar-administradores')->only(['edit','update']);
        $this->middleware('permission:deletar-administradores')->only('destroy');
    }

    public function index()
    {
        $this->values['admins'] = Admin::paginate(15);

        return view('admin.admin.index', $this->values);
    }

    public function create()
    {
        $this->values['roles'] = Role::orderBy('name')->get();

        return view('admin.admin.create', $this->values);
    }

    public function store(AdminRequest $request)
    {
        $values = $request->validated();

        $admin = Admin::create($values);
        $admin->assignRole($values['roles']);

        return redirect()->route('admin.admin.index')->withErrors(['success' => trans('auth.store',['name' => $this->values['name']])]);
    }

    public function show(Admin $admin)
    {
        $this->values['admin'] = $admin;
        $this->values['roles'] = Role::orderBy('name')->get();

        return view('admin.admin.show', $this->values);
    }

    public function edit(Admin $admin)
    {
        $this->values['admin'] = $admin;
        $this->values['roles'] = Role::orderBy('name')->get();

        return view('admin.admin.edit', $this->values);
    }

    public function update(AdminRequest $request, Admin $admin)
    {
        $values = $request->validated();

        key_exists('password',$values) ? $values['password'] = NULL : false ;

        $admin->fill($values)->save();
        $admin->syncRoles($values['roles']);

        return redirect()->route('admin.admin.index')->withErrors(['success' => trans('auth.update',['name' => $this->values['name']])]);
    }

    public function destroy(Admin $admin)
    {
        $admin->delete();

        return redirect()->route('admin.admin.index')->withErrors(['success' => trans('auth.destroy',['name' => $this->values['name']])]);
    }
}
