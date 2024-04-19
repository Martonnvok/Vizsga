<?php

namespace App\Http\Controllers;

use App\Models\teszt as ModelsTeszt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tesztController extends Controller
{
    public function show()
    {

        $teszt = DB::table('teszts')
        ->select('teszts.*')
        ->get();
        return $teszt;
    }
}
