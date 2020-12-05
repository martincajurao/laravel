<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $users = user::all();
        return view('users.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'Username' => 'required|unique:users|max:255',
            'Firstname' => 'required|min:5|max:10',
            'Lastname' => 'required',
            'MiddleName' => 'required',
            'Email' => 'required|email|unique:users',
            'Birthday' => 'required|date',
            'Status' => 'required',
            'Gender' => 'required',
            'Telephone' => 'required|digits:11',
            'Age' => 'required',
        ]);

        $user = new User();
        $user->Username = $request->Username;
        $user->Firstname = $request->Firstname;
        $user->Lastname = $request->Lastname;
        $user->MiddleName = $request->MiddleName;
        $user->email = $request->Email;
        $user->Telephone = $request->Telephone;
        $user->Gender = $request->Gender;
        $user->Birthday = $request->Birthday;
        $user->Status = $request->Status;
        $user->Age = $request->Age;

      
        $user->save();

        return redirect()->to('users')->send();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = user::find($id);
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = user::find($id);
        return view('users.update',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->Username = $request->Username;
        $user->Firstname = $request->Firstname;
        $user->Lastname = $request->Lastname;
        $user->MiddleName = $request->MiddleName;
        $user->email = $request->Email;
        $user->Telephone = $request->Telephone;
        $user->Gender = $request->Gender;
        $user->Birthday = $request->Birthday;
        $user->Status = $request->Status;
        $user->Age = $request->Age;
        $user->save();
         return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('users');
    }
}
