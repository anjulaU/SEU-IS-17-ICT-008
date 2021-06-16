<?php

namespace App\Http\Controllers;

use App\Models\Form;

use Illuminate\Http\Request;

class FormValidtionController extends Controller
{
    public function createUserForm(Request $request) {

        return view('form');
    }
      public function UserForm(Request $request) {
        $this->validate($request, [
            'name' =>'required',
            'username'  =>'required',
            'date_of_birth'=>'required',
            'email' => 'required|email',
            'teliphone-no'=>'required',
            'nic-no'=> 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'gender'=>'required',
            'password'=>'required',
            'reenter_password'=>'required'
        ]);

        Form::create($request->all());
        return back()->with('success', 'Your form has been submitted.');
    }

}


