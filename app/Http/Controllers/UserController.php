<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    protected $User;

    public function __construct(User $User)
    {
        $this->User = $User;
    }

    public function validateUser($data)
    {
        return $this->User->validateUser($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $Newpassword = $request->input('password');
        $this->User->changePassword($Newpassword);
        session()->forget('email');
        session()->flush();
        return redirect('/');
    }

}
