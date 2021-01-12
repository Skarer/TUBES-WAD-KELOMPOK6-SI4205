@extends('layout.mainguru')
<!-- buat manggil navbar, title yg ada di file main.blade -->

@section('title', 'Input Nilai')

<!--buat nama title webnya -->
           
    @section('content') 

    <div class="row" style="margin-top:30px;">
                            <div class="col-sm-6">
                                <!-- <div class="card"> -->
                                <img src="{{asset ('img/nilaai.jpg') }}" class="card-image" alt="gambar" style="margin-top:30px; margin-left:50px; max-width:60rem">


                                <!-- </div> -->
                            </div>

                        <div class="col-sm-6" >
                             <div class="card border-light" style="margin-right:50px;" >
                                    <div class="card-header">
                                        <h4 class="text-center">Input Nilai</h4>
                                    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:#8FBC8F">
                                    <div class="container-fluid">
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" aria-current="page" href="#">Lihat</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Delete</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Update</a>
                                        </li>
                                        </ul>
                                    </div>
                                    </div>
                                </nav> -->
                                </div>
                                
                                <div class="card-body">
                                <form action="/create/store" method="POST" enctype="multipart/form-data">
                                    @CSRF 
                                    <div class="mb-2">
                                        <label for="nis" class="form-label">NIS</label>
                                        <input type="text" class="form-control" id="nis" name ="nis" required>
                                    </div>

                                    <div class="mb-2">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" required>
                                    </div>

                                    <div class="mb-2">
                                        <label for="mapel" class="form-label">Mata Pelajaran</label>
                                        <div class="mb-3">
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="mata_pelajaran">
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

                                    <div class="mb-2">
                                        <label for="uts" class="form-label">Nilai UTS</label>
                                        <input type="text" class="form-control" id="uts" name="nilai_uts" required>
                                    </div>

                                    <div class="mb-2">
                                        <label for="uas" class="form-label">Nilai UAS</label>
                                        <input type="text" class="form-control" id="uas" name="nilai_uas" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>
                                </div> 
                                </form>
                            </div>


    @endsection