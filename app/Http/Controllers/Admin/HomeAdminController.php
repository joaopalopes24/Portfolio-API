<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeAdminController extends Controller
{
    public function __construct()
    {
        $this->values = [
            'name' => 'Home Page',
            'nameOther' => 'Personal Data',
        ];
        $this->middleware('permission:show-home')->only('index');
    }

    public function index()
    {
        return view('admin.home.index', $this->values); 
    }

    public function profile()
    {
        return view('admin.home.profile', $this->values); 
    }

    public function changePassword()
    {
        return view('admin.home.change-password', $this->values); 
    }

    public function changePasswordDo(ChangePasswordRequest $request)
    {
        $admin = Admin::find(Auth::user()->id);
        $admin->password = Hash::make($request->password);
        $admin->save();

        return redirect()->route('admin.home.index')->withErrors(['success' => trans('passwords.reset')]);
    }
}