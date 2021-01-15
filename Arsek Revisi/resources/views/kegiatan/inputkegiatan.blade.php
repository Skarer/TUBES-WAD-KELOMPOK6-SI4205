@extends('layout.mainguru')
<!-- buat manggil navbar, title yg ada di file main.blade -->

@section('title', 'Input kegiatan')

<!--buat nama title webnya -->
           
    @section('content') 

    <div class="container mt-3 mw-100">

<div class="row ml-4">
    <h3 style="margin-left: 10px;">Buat Kegiatan</h3>
</div>

<div class="row mx-auto mt-3">

    <div class="col">
        <div class="card h-100">
            <div class="card-header bg-danger"></div>
            <div class="card-body">
                <form action="/homeguru/create/store" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="nama"><strong>Nama Kegiatan</strong></label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>

                    <div class="form-group">
                        <label for="Deskripsi"><strong>Deskripsi</strong></label>
                        <textarea class="form-control" id="Deskripsi" rows="3" name="deskripsi"></textarea>
                    </div>
<!-- 
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload Gambar</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
                    </div> -->

                    <div class="form-group">
                    <p><strong>Kategori</strong></p>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="online" class="custom-control-input" name="kategori" value="online">
                            <label class="custom-control-label" for="online">Online</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="offline" class="custom-control-input" name="kategori" value="offline">
                            <label class="custom-control-label" for="offline">Offline</label>
                        </div>
                    </div>

            </div>
        </div>
    </div>

    <div class="col">
        <div class="card">
            <div class="card-header bg-primary"></div>
            <div class="card-body">
                <div class="form-group">
                    <label for="example-date-input"><strong>Tanggal</strong></label>
                    <input class="form-control" type="date" id="example-date-input" name="tanggal">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="jam_mulai">Jam Mulai</label>
                        <input type="time" class="form-control" name="jam_mulai">
                    </div>
                    <div class="col-md-6">
                        <label for="jam_berakhir">Jam Berakhir</label>
                        <input type="time" class="form-control" name="jam_berakhir">
                    </div>
                </div>
                <div class="form-group">
                    <label for="tempat"><strong>Tempat</strong></label>
                    <input type="text" class="form-control" id="tempat" placeholder="Tempat" name="tempat">
                </div>
                <br>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
                    <a type="submit" class="btn btn-danger" name="cancel" href="/homeguru">Cancel</a>
                </div>
                </form>
            </div>
        </div>
    </div>

</div>

</div>


    @endsection