<?php

namespace App\Http\Controllers;

use App\Models\Tip;
use Illuminate\Http\Request;

class TipsController extends Controller
{
    public function index()
    {
        $tips = Tip::all();
        return view('home.tips', compact('tips'));
    }
}
