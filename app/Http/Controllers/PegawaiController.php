<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function datapengaduan(){
        return view('admin.datapengaduan');
    }
    public function datamasyarakat(){
        return view('admin.datamas');
    }
    public function datatanggapan(){
        return view('admin.datatanggapan');
    }
}
