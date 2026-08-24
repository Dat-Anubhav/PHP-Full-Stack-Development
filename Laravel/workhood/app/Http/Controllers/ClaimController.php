<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClaimController extends Controller
{
    function index()
    {
        return view('claims.index');
    }
}
