@extends('admin.layout')

@section('heading')
    <h2>Daftar Ucapan/Doa</h2>
@endsection

@section('content')
<div class="table-container">
    <table id="listUndangan">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th class="table-wish-head">Ucapan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tamus as $tamu)
                <tr>
                    <td>{{ $loop->iteration . "." }}</td>
                        <td>{{ $tamu->nama }}</td>
                    <td class="table-wish-text">{{ substr($tamu->wishes, 0, 40) . '...' }}</td>
                    <td>
                        <div class="action-wrapper">
                            <button class="show-btn" type="button" onclick="openWishModal({{ $tamu->id }})"><i class="fa-solid fa-eye"></i></button>
                            <form id="{{ "delete-form" . $tamu->id }}" action="{{ route('admin.delete-wishes', $tamu->id) }}" method="post">
                                    @csrf
                                    <button class="del-btn" type="button" onclick="confirmDelete({{ $tamu->id }})"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>

                <dialog id="{{ "modal-" . $tamu->id }}" class="wish-modal">
                    @if ($tamu->id%2)
                        <div class="wish-card odd">
                    @else
                        <div class="wish-card even">
                    @endif
                        <div class="wish-img-container">
                            <img src="/img/wedding-img/1.jpg" alt="">
                            <span>Congratulations!</span>
                        </div>
                    </div>
                    <div class="wish-message">
                        <h3>Wedding Wish</h3>
                        <p>{{ $tamu->wishes }}</p>
                        <div>
                            <span>From: {{ $tamu->nama }}</span>
                            <button class="close-btn" type="button" onclick="closeWishModal({{ $tamu->id }})">Close</button>
                        </div>
                    </div>
                </dialog>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    function openWishModal(id) {
        let modalId = 'modal-' + id;
        document.getElementById(modalId).showModal();
    }

    function closeWishModal(id) {
        let modalId = 'modal-' + id;
        document.getElementById(modalId).close();
    }

    function confirmDelete(id) {
        if (confirm('Yakin ingin menghapus data Wishes ini?')) {
            let deleteFormId = 'delete-form' + id;
            document.getElementById(deleteFormId).submit();
        }
    }
</script>
@endsection
