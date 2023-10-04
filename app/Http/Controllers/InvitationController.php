<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\rsvp;
use App\Models\wishes;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function index() {
        return view('invitation.index');
    }

    public function check_code(Request $req) {
        $link = $req->code;
        $tamu = Invitation::where('link', $link)->first();

        if ($tamu) {
            return redirect()->route('undangan.tamu', $link);
        }

        return redirect()->route('undangan.index')->with('error', 'Kode yang anda masukan tidak terdaftar');
    }

    public function tamu($link) {
        $tamu = Invitation::where('link', $link)->first();
        $wishes = wishes::where('deleted', 0)->get();

        if ($tamu) {
            return view('invitation.undangan', compact('tamu','wishes'));
        }

        return redirect()->route('undangan.index')->with('error', 'Kode yang anda masukan tidak terdaftar');
    }

    public function storeRsvp(Request $req){

        $req->validate([
            'nama' => 'required',
            'kehadiran' => 'required',
        ]);
        $rsvp = new rsvp();

        $rsvp->nama = $req->nama;
        $rsvp->kehadiran = $req->kehadiran;
        $rsvp->jumlah_hadir = $req->attendance;
        $success = $rsvp->save();

        if($success){
            return back();
        }
    }

    public function storeWishes(Request $req){
        $req->validate([
            'nama' => 'required',
            'wishes' => 'required'
        ]);
        $wishes = new wishes();

        $wishes->nama = $req->nama;
        $wishes->wishes = $req->wishes;
        $success = $wishes->save();

        if($success){
            return back();
        }
    }
}
