<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ActivationCode;
use App\Helpers\Constants;
use App\Models\User;

class CodeController extends Controller
{

    public function index()
    {
        $codes = ActivationCode::all()->toArray();    

        return view('admin.codes', compact('codes'));

    }


    function save(Request $request){
    $activationCode = Constants::getUniqueId(new ActivationCode);

    $q = new ActivationCode;
    $q->activationCode = $activationCode;
    $q->save();

    return redirect()->route('admin.codes')->with('success', 'Code Generated');
    }

    

}