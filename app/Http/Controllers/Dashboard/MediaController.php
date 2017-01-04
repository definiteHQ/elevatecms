<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class MediaController extends Controller
{

    public function index()
    {
        return view('dashboard.media.index');
    }
}
