<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Register;

class FormController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name'=>'required|min:5|string',
                'age'=>'required|min:18|int',
                'email'=>'required|min:5|string',
                'id'=>'required|max:100|int',
                'password'=>'required|min:5|string'


            ]
           
        );
        if(isset($error)){
        $output.="Name : ".$request->name;
        return $output;
        }
        else{
            $usetable=new Register();
            $usetable->name=$request->name;
            $usetable->age=$request->age;
            $usetable->email=$request->email;
            $usetable->id=$request->id;
            $usetable->password=$request->password;
            $usetable->save();
            return view('register');

        }
    }
    
}
