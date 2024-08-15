<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class ViewController extends Controller
{

    public function dashboard(){
        $berita = Berita::all()->sortByDesc('created_at')->first();
        // dd($berita);
        return view('user.dashboard', ['title' => 'Dashboard', 'berita' => $berita]);
    }

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

    public function dashboardAdmin(){
        $berita = Berita::count();
        return view('admin.dashboardAdmin', ['title' =>  'Dashboard Admin'], compact('berita'));
    }
}
