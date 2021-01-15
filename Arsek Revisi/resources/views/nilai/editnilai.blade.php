@extends('layout.mainguru')
<!-- buat manggil navbar, title yg ada di file main.blade -->

@section('title', 'Edit Nilai')

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
                                        <h4 class="text-center">Edit Nilai</h4>
                                </div>
                                
                                <div class="card-body">
                                <form action="/edit/{{$score->id}}/update" method="POST">
                                    @method('patch')
                                    @CSRF 

                                    <div class="mb-2">
                                        <label for="nis" class="form-label">NIS</label>
                                        <input type="text" class="form-control" id="nis" name ="nis" value="{{$score->nis}}">
                                    </div>

                                    <div class="mb-2">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="{{$score->nama}}">
                                    </div>

                                    <div class="mb-2">
                                        <label for="mapel" class="form-label">Mata Pelajaran</label>
                                        <div class="mb-3">
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="mata_pelajaran" value="{{$score->mata_pelajaran}}">
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
                                        <input type="text" class="form-control" id="uts" name="nilai_uts" value="{{$score->nilai_uts}}">
                                    </div>

                                    <div class="mb-2">
                                        <label for="uas" class="form-label">Nilai UAS</label>
                                        <input type="text" class="form-control" id="uas" name="nilai_uas" value="{{$score->nilai_uas}}">
                                    </div>

                                    <button type="submit" class="btn btn-primary text-center" id="submit" name="edit">Edit</button>
                                </div> 
                                </form>
                            </div>


    @endsection