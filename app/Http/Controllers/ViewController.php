<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ViewController extends Controller
{

    public function dashboard()
    {
        $berita = Berita::all()->sortByDesc('created_at')->first();
        $news = Berita::all()->sortByDesc('created_at')->skip(1)->take(3);

        $artikel = Artikel::all()->sortByDesc('created_at')->take(3);

        // dd($news);
    
        // Check if $berita or $news is null
        if ($berita === null || $news === null) {
            // Handle the case where there are no records or only one record
            return view('user.dashboard', [
                'title' => 'Dashboard',
                'berita' => $berita,
                'news' => $news,
                'artikel' => $artikel
            ]);
        }
    
        return view('user.dashboard', [
            'title' => 'Dashboard',
            'berita' => $berita,
            'news' => $news,
            'artikel' => $artikel
        ]);
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
        $artikel = Artikel::count();
        $berita = Berita::count();
        return view('admin.dashboardAdmin', ['title' =>  'Dashboard Admin', 'berita' => $berita, 'artikel' => $artikel]);
    }
}
