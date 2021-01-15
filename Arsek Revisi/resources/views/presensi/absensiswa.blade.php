@extends('layout.mainguru')
<!-- buat manggil navbar, title yg ada di file main.blade -->

@section('title', 'Absen Siswa')

<!--buat nama title webnya -->

    @section('content')



        <h3 class="text-center" style="margin-top:50px">Data Absen</h3>
    <br>
        <div class="row">
        <div class="col" style="margin-left:180px">
        <form action="/absen/cari" method="GET"class="d-flex col-4">
                <input type="text" name="cari" placeholder="Cari nis .." value="{{ old('cari') }}">
                <input type="submit" value="CARI">
            </form>
        </div>
        <div class="col">
            <a type="button" class="btn btn-success" style="margin-left:330px;" href="/absen/create">Tambah Data</a>
        </div>
    </div>
        <div class = "container">



                <table style= "text-align: center; margin-top:30px;" class="table table-striped">

                    <thead class="thead-dark">
                    <tr>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Tanggal</th>
                        <th>Mata Pelajaran</th>
                        <th>Absen</th>
                        <th>Action</th>

                        </tr>
                    </thead>

                    @foreach ($attedances as $attedance)
                    <tbody>
                        <td>{{$attedance->nis}}</td>
                        <td>{{$attedance->nama}}</td>
                        <td>{{$attedance->kelas}}</td>
                        <td>{{$attedance->tanggal}}</td>
                        <td>{{$attedance->mata_pelajaran}}</td>
                        <td>{{$attedance->absen}}</td>
                        <td><a href="/absen/edit/{{$attedance->id}}" class="btn btn-primary" style="width: 70px;">Edit</a>
                        <br><br>
                            <form action="/absen/delete/{{$attedance->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </td>
                    </tbody>
                    @endforeach
                </table>
        </div>

        @endsection
