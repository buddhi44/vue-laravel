<?php

namespace App\Http\Controllers;
use App\Models\Role;
use Illuminate\Http\Request;

class roleController extends Controller
{
    public  function role(Request $request)
    {
        $request->validate([

            'role'=>['required'],
            
        ]);

        $role=new Role();
        

        $role->name=$request->name;
        $role->role=$request->role;
        $role->save();

       return response()->json(['message'=>$role],201);



    }
}
