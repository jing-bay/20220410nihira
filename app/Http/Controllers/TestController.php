<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $item = [
        'content' => '建物です',
        ];
        return view('index', $item);
    }

    public function room($param)
    {
        $item = [
        'param' => $param
        ];
    return view('index', $item);
    }
}