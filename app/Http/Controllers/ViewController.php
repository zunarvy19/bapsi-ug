<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function tentang(){
        return view('user.tentang', ['title' =>  'Tentang']);
    }

    public function struktur(){
        return view('user.struktur', ['title' =>  'Struktur BAPSI']);
    }

    public function staffsite(){
        return view('user.staffsite', ['title' =>  'Staffsite']);
    }

    public function studentsite(){
        return view('user.studentsite', ['title' =>  'Studentsite']);
    }

    public function helpdesk(){
        return view('user.helpdesk', ['title' =>  'Helpdesk']);
    }

    public function sop(){
        return view('user.sop', ['title' =>  'SOP']);
    }

    public function fasilitas(){
        return view('user.fasilitas', ['title' =>  'Fasilitas TIK']);
    }

    public function infrastruktur(){
        return view('user.infrastruktur', ['title' =>  'Infrastruktur TIK']);
    }
}
