<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserInfo;
class saveData extends Controller
{

    //save data into database
    function save(Request $req){
        // print_r($req->input());
        
        $user=new UserInfo;
        $user->name=$req->uname;   
        $user->password=$req->pswd;   
        $user->save();
        // print_r($user);
    }

    //get data from database
    public function getMyData(){
        $usr=UserInfo::all()->toArray();
        return view('tabularData',compact('usr'));
        // print_r($usr);
    }
}
