@extends('admin.layout')

@section('heading')
    <h2>Daftar RSVP</h2>
@endsection

@section('content')
<div class="table-container">
    <div class="data-container">
        <div>
            <h3>Respon Hadir</h3>
            <p class="hijau"><b>{{ $jumlahHadir }}</b></p>
        </div>
        <div>
            <h3>Respon Tidak Hadir</h3>
            <p class="merah"><b>{{ $jumlahTidakHadir }}</b></p>
        </div>
    </div>
    <table id="listUndangan">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kehadiran</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tamus as $tamu)
                <tr>
                    <td>{{ $loop->iteration . "." }}</td>
                        <td>{{ $tamu->nama }} (<i class="fa-solid fa-venus female"></i>)</td>
                    @if ($tamu->kehadiran === 'Attend')
                        <td class="hadir">{{ $tamu->kehadiran }}</td>
                    @else
                        <td class="tidak-hadir">{{ $tamu->kehadiran }}</td>
                    @endif
                    <td>{{ $tamu->jumlah_hadir }} tamu</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
