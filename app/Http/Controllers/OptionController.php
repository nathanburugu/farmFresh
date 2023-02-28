<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OptionController extends Controller
{
    //
    public function chooseOption(Request $request){
        // var_dump($request);
        // dd($request);
        if($request->option==="animal"){
        return redirect("/options/animal/create");

        }
        elseif ($request->option==="crop"){
            // redirect("/options/crops/index");
            return redirect("/options/crops/create");
        }
    }
}
