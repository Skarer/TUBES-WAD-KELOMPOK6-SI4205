@extends('layout.mainguru')
<!-- buat manggil navbar, title yg ada di file main.blade -->

@section('title', 'Input Pelajaran')

<!--buat nama title webnya -->
           
    @section('content')            
                    
                    <div class="card" style="width:30rem; margin-left:30rem; margin-top:50px">
                        <div class="card-header text-center">
                            <h4>Edit Data Pelajaran</h4>
                        </div>
                    <div class="card-body">
                    <form class="row g-3" action="/pelajaran/edit/{{$course->id}}/update" method="POST" enctype="multipart/form-data">
                    @method('patch')
                    @CSRF 

                    <div class="col-md-6">
                        <label for="jam_mulai" class="form-label">Jam Mulai</label>
                        <input type="time" class="form-control" id="jam_mulai" name="jam_mulai"  value="{{$course->jam_mulai}}">
                    </div>

                    <div class="col-md-6">
                        <label for="jam_selesai" class="form-label">Jam Selesai</label>
                        <input type="time" class="form-control" id="akhir" name="jam_selesai"  value="{{$course->jam_selesai}}">
                    </div>

                    <div class="col-12">
                    <label for="hari" class="form-label">Hari</label>
                                        <div class="mb-3">
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="hari"  value="{{$course->hari}}">
                                        <option selected>Pilih</option>
                                        <option value="Senin">Senin        </option>
                                        <option value="Selasa">Selasa       </option>
                                        <option value="Rabu">Rabu         </option>
                                        <option value="Kamis">Kamis        </option>
                                        <option value="Jumat">Jumat             </option>
                                        </select>
                                        </div>
                    </div>

                    <div class="col-12">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" placeholder="angkatan-kelas"  value="{{$course->kelas}}">
                    </div>


                    <div class="col-12">
                    <label for="mata_pelajaran" class="form-label">Mata Pelajaran</label>
                                        <div class="mb-3">
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="mata_pelajaran"  value="{{$course->mata_pelajaran}}">
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
                        
                        </div>
                    <div class="card-footer">
                     <button type="submit" class="btn btn-primary text-center" style="width:10rem; margin-left:130px" id="submit" name="input">Edit Data</button>
                    </div>
                    </form>
                </div>

        @endsection