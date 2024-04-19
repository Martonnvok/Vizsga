<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kategoriaController extends Controller
{
    public function show()
    {

        $kategoria = DB::table('kategoria')
        ->select('kategoria.*')
        ->get();
        return $kategoria;
    }
}
