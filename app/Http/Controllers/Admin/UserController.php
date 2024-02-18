<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.users.index', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.users.create', compact('roles'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|max:24',
            'email'=>'required|max:148|unique:users',
            'password'=>'required|min:8|max:24|confirmed'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $user->roles()->sync($request->roles);

        $request->session()->flash('success', 'You have create new user');
        return redirect(route('admin.users.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user =User::find($id);
        $roles = Role::all();
        return view('admin.users.view', compact('user','roles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        $roles = Role::all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        $validated = $request->validate([
            'name' => 'required|max:24',
            'email' => 'required|max:148|unique:users,email,'.$user->id,
            'password' => 'nullable|min:8|max:24|confirmed',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        if(isset($request->password)) {
            $user->password = Hash::make($request->password);
        }
        $user->update();

        $user->roles()->sync($request->roles);
        $request->session()->flash('success', 'You have update the user');

        return redirect(route('admin.users.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->roles()->detach();
        $user->delete();
        return back()->with('success', 'تم الحذف بنجاح .. تهانينا');
    }
}
