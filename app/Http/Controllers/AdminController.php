<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function manageKonten()
    {
        return view('admin.managekonten');
    }

    public function kontenRooms()
    {
        return view('admin.kontenRooms');
    }

    public function kontentrans()
    {
        return view('admin.kontentrans');
    }
}
