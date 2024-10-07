<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) 
    {
        $busqueda=trim($request->get('busqueda'));
        $users=DB::table('users')
            ->select('id','name','email', 'password', 'role')
            ->where('name','LIKE','%'.$busqueda.'%')
            ->orwhere('email', 'LIKE','%'.$busqueda.'%')
            ->orwhere('role', 'LIKE','%'.$busqueda.'%')
            ->orderBy('role','asc')
            ->paginate(5);
        return view('users', compact('users', 'busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $user = Usuarios::findOrFail($id);
        return view('editusers', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $user = Usuarios::findOrFail($id);
        $user->id=$request->input('id');
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password= Hash::make ($request->input('password'));
        $user->role=$request->input('role');
        $user-> save();
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user=Usuarios::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
