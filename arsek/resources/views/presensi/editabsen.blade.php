@extends('layout.mainguru')
<!-- buat manggil navbar, title yg ada di file main.blade -->

@section('title', 'Edit data absen')

<!--buat nama title webnya -->
           
    @section('content') 

    <div class="row" style="margin-top:30px;">
                            <div class="col-sm-6">
                                <!-- <div class="card"> -->
                                <img src="{{asset ('img/pelajaran.png') }}" class="card-image" alt="gambar" style="margin-top:30px; margin-left:150px; max-width:400px">


                                <!-- </div> -->
                            </div>

                        <div class="col-sm-5" >
                             <div class="card border-light" >
                                    <div class="card-header" style="background-color:#AFEEEE">
                                        <h4 class="text-center">Data Absen</h4>
                                </div>
                                
                                <div class="card-body" style="background-color:#F5FFFA">
                                <form action="/absen/edit/{{$attedance->id}}/update" method="POST" enctype="multipart/form-data">
                                    @method('patch')
                                    @CSRF 
                                    <div class="mb-3">
                                        <label for="nis" class="form-label">NIS</label>
                                        <input type="text" class="form-control" id="nis" name ="nis" value="{{$attedance->nis}}"required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="{{$attedance->nama}}" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="kelas" class="form-label">Kelas</label>
                                        <input type="text" class="form-control" id="kelas" name="kelas" placeholder="angkatan-kelas" value="{{$attedance->kelas}}"required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="tanggal" class="form-label">Tanggal Kehadiran</label>
                                        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="angkatan-kelas" value="{{$attedance->tanggal}}"required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="mata_pelajaran" class="form-label">Mata Pelajaran</label>
                                        <div class="mb-3">
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="mata_pelajaran" value="{{$attedance->mata_pelajaran}}">
                                        <option selected>Pilih</option>
                                        <option value="Matematika">Matematika</option>
                                        <option value="B.Indonesia">Bahasa Indonesia</option>
                                        <option value="B.Inggris">Bahasa Inggris</option>
                                        <option value="B.Sunda">Bahasa Sunda</option>
                                        <option value="Biologi">Biologi</option>
                                        <option value="Fisika">Fisika</option>
                                        <option value="Kimia">Kimia</option>
                                        <option value="Geografi">Geografi</option>
                                        <option value="Ekonomi">Ekonomi</option>
                                        <option value="Sejarah">Sejarah</option>
                                        <option value="Senbud">Senbud</option>
                                        <option value="Pkn">Pkn</option>
                                        </select>
                                        </div>
                                    </div>                                    

                                    <div class="mb-3">
                                       
                                            <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="absen" id="absen" value="Hadir" checked>
                                            <label class="form-check-label" for="absen">Hadir</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="absen" id="absen" value="Tidak Hadir" checked>
                                            <label class="form-check-label" for="absen">Tidak Hadir</label>
                                            </div>
                                        
                                    </div>
                                    

                                    <button type="submit" class="btn btn-primary" id="submit" name="submit" style="margin-left:14rem;">Edit data</button>
                                </div> 
                                </form>
                            </div>


    @endsection