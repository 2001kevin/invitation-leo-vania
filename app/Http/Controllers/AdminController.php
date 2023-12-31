<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\rsvp;
use App\Models\wishes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\URL;

class AdminController extends Controller
{
    public function daftar_tamu() {
        $title = 'dt';

        $tamus = Invitation::where('deleted', 0)->orderBy('created_at', 'DESC')->get();

        $ivtCount = Invitation::where('deleted', 0)->count();
        $ivtSentCount = Invitation::where('deleted', 0)->where('status', 'Terkirim')->count();
        $ivtNotSentCount = Invitation::where('deleted', 0)->where('status', 'Belum Terkirim')->count();

        $waMessage = [];

        foreach ($tamus as $tamu) {
            $namaTamu = $tamu->nama;
            $phoneNumber = (string) $tamu->no_tlp;
            // $link = URL::to('to', $namaTamu);
            // return $link;
            $websiteUrl = url('/');
            $link = $websiteUrl."/undangan/" . $tamu->link;
            // return $link;

            $isiPesan = "Dear {$namaTamu},\n\nMari datang ke acara pernikahan Leonardo Da Vinci dan Vania Putri Mahkota, yang akan dilaksanakan pada :\nWaktu : Jumat, 31 Mei 2023\nTempat : Nusa Dua, Denpasar, Bali\n\nUntuk lebih lengkapnya bisa dicek melalui tautan {$link} ini, dan mohon berikan juga respon anda terkait kehadiran anda dalam perayaan suci ini.\n\nSalam hangat,\nLeo dan Vania";

            $encodePhoneNumber = urlencode($phoneNumber);
            $encodeMessage = urlencode($isiPesan);

            $waURL = "https://wa.me/{$encodePhoneNumber}?text={$encodeMessage}";

            $waMessage[] = $waURL;
        }

        return view('admin.daftar-tamu', compact(
            'title', 'tamus', 'ivtCount', 'ivtSentCount' , 'ivtNotSentCount', 'waMessage'
        ));
    }

    public function add_tamu(Request $req) {
        $req->validate([
            'nama' => 'required',
            'no_tlp' => '',
        ]);

        // Nomor Ponsel
        $stringPhoneNumber = (string) $req->no_tlp;
        $stringReplace = preg_replace('/^0/', '62', $stringPhoneNumber);
        $phoneNumber = (int) $stringReplace;

        // Link
        $currentDatetime = Carbon::now()->format('Y-m-d H:i:s');
        $hashedValue = Hash::make($currentDatetime);
        $trimmedHash = substr($hashedValue, 7, 8);

        $undangan = new Invitation();
        $undangan->nama = $req->nama;
        $undangan->no_tlp = $phoneNumber;
        $undangan->link = $trimmedHash;
        $success = $undangan->save();

        if ($success) {
            return redirect()->route('admin.daftar-tamu')->with('success', 'Berhasil menambah data tamu baru');
        }

        return redirect()->route('admin.daftar-tamu')->with('fail', 'Gagal menambah data');
    }

    public function delete_tamu($id) {
        $undangan = Invitation::find($id);
        $undangan->deleted = 1;
        $undangan->save();

        return redirect()->route('admin.daftar-tamu')->with('success', 'Berhasil menghapus data tamu');
    }

    public function delete_wish($id) {
        $undangan = wishes::find($id);
        $undangan->deleted = 1;
        $undangan->save();

        return redirect()->route('admin.wishes')->with('success', 'Berhasil menghapus data tamu');
    }

    public function sent_tamu($id) {
        $undangan = Invitation::find($id);
        $undangan->status = 1;
        $undangan->save();

        return redirect()->route('admin.daftar-tamu')->with('success', 'Berhasil mengubah status pengiriman undangan');
    }

    public function rsvp() {
        $title = 'rsvp';
        $jumlahHadir = rsvp::where('deleted', 0)->where('kehadiran', 'Attend')->count();
        $jumlahTidakHadir = rsvp::where('deleted', 0)->where('kehadiran', 'Not Attend')->count();
        $jumlahTamu = rsvp::where('deleted', 0)->get();
        return $jumlahTamu;
        $tamus = rsvp::where('deleted', 0)->orderBy('kehadiran', 'ASC')->get();

        return view('admin.rsvp', compact(
            'title', 'tamus', 'jumlahHadir', 'jumlahTidakHadir'
        ));
    }

    public function wishes() {
        $title = 'wishes';

        $tamus = wishes::where('deleted', 0)->get();

        return view('admin.wishes', compact(
            'title', 'tamus'
        ));
    }
}
