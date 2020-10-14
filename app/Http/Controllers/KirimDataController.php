<?php

namespace App\Http\Controllers;
use DB;
use Excel;
use App\bps;
use Illuminate\Http\Request;

class KirimDataController extends Controller
{
    //
    public function index()
    {
        // $db = DB::update('update users set votes = 100 where name = ?', ['John']);
        return view('KirimData.index');
    }
    

}
