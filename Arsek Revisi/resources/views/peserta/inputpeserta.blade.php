@extends('layout.mainsiswa')
<!-- buat manggil navbar, title yg ada di file main.blade -->

@section('title', 'Input kegiatan')

<!--buat nama title webnya -->

@section('content')

<div class="container mt-3 mw-100">

    <div class="row ml-4">
        <h3 style="margin-left: 10px;">Join Kegiatan</h3>
    </div>

    <div class="row mx-auto mt-3">

        <div class="col">
            <div class="card h-100">
                <div class="card-header bg-danger"></div>
                <div class="card-body">
                    <form action="/peserta/create/store" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama"><strong>Nama Peserta</strong></label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="nis"><strong>NIS</strong></label>
                            <input type="text" class="form-control" id="nama" name="nis">
                        </div>

                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-header bg-primary"></div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="kelas"><strong>Kelas</strong></label>
                        <input type="text" class="form-control" id="kelas" name="kelas">
                    </div>
                    <div class="form-group">
                        <label for="namaevent"><strong>Event</strong></label>
                        <input type="text" class="form-control" id="event"  name="namaevent">
                    </div>
                    <br>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        <a type="submit" class="btn btn-danger" name="cancel" href="/homesiswa">Cancel</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>


@endsection
