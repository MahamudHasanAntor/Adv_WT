<?php

namespace App\Http\Controllers;
 use App\Models\Nuser;
use Illuminate\Http\Request;

class NuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
            //
            // $nusers = Nuser::all();
            // return view('nuser.list', compact('nusers','nusers'));

        $nusers =  Nuser::all();
        return [
            "NUsers" => $nusers
        ];
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('nuser.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'txtFirstName'=>'required',
        //     'txtLastName'=> 'required',
        //     'txtAddress' => 'required',
        //     'phone'=> 'required',
        //     'carid'=> 'required',
        //     'date'=> 'required',
        //     'time'=> 'required',
        // ]);

        // $nuser = new Nuser([
        //     'first_name' => $request->get('txtFirstName'),
        //     'last_name'=> $request->get('txtLastName'),
        //     'address'=> $request->get('txtAddress'),
        //     'phone'=> $request->get('phone'),
        //     'carid'=> $request->get('carid'),
        //     'date'=> $request->get('date'),
        //     'time'=> $request->get('time'),
        // ]);

        // $nuser->save();
        // return redirect('/nuser')->with('success', 'User has been added');
        // return $request->all();

        $nuser = Nuser::create($request->all());
        return [
            "nuser" => $nuser
        ];


    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nuser  $nuser
     * @return \Illuminate\Http\Response
     */
    public function show(Nuser $nuser)
    {
        return view('nuser.view',compact('nuser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nuser  $nuser
     * @return \Illuminate\Http\Response
     */
    public function edit(Nuser $nuser)
    {
        //
        return view('nuser.edit',compact('nuser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nuser  $nuser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'txtFirstName'=>'required',
            'txtLastName'=> 'required',
            'txtAddress' => 'required'
        ]);


        $nuser = Nuser::find($id);
        $nuser->first_name = $request->get('txtFirstName');
        $nuser->last_name = $request->get('txtLastName');
        $nuser->address = $request->get('txtAddress');

        $nuser->update();

        return redirect('/nuser')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nuser  $nuser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nuser $nuser)
    {
        //
        $nuser->delete();
        return redirect('/nuser')->with('success', 'user deleted successfully');
    }
}
