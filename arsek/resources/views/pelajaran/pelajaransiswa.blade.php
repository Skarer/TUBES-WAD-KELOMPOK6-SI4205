@extends('layout.mainguru')
<!-- buat manggil navbar, title yg ada di file main.blade -->

@section('title', 'Pelajaran Siswa')

<!--buat nama title webnya -->
           
    @section('content')   

        <h3 class="text-center" style="margin-top:50px">JADWAL PELAJARAN</h3>

        <br>
        <div class="row">
        <div class="col" style="margin-left:125px">
                <form action="/pelajaran/cari" method="GET">
                <input type="text" name="cari" placeholder="Cari kelas .." value="{{ old('cari') }}">
                <input type="submit" value="CARI">
                </form>  
        </div>   
        <div class="col">
            <a type="button" class="btn btn-success" style="margin-left:350px;" href="/pelajaran/create">Tambah Data</a>
        </div>
    </div>

        <div class = "container">
             
                <table style= "text-align: center; margin-top:30px;" class="table table-striped">
                   
                    <thead>
                    <tr>
                        <th>Kelas</th>
                        <th>Hari</th>
                        <th>Jam Mulai</th>
                        <th>Jam Selesai</th>
                        <th>Mata Pelajaran</th>
                        <th>Action</th>

                        </tr>
                    </thead>
                    
                    @foreach ($courses as $course)
                    <tbody>
                        <td>{{$course->kelas}}</td>
                        <td>{{$course->hari}}</td>
                        <td>{{$course->jam_mulai}}</td>
                        <td>{{$course->jam_selesai}}</td>
                        <td>{{$course->mata_pelajaran}}</td>
                        <td><a href="/pelajaran/edit/{{$course->id}}" class="btn btn-primary">Edit</a>
                            <form action="/pelajaran/delete/{{$course->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                   
                    </tbody>
                    @endforeach
                </table>
        </div>

        @endsection
