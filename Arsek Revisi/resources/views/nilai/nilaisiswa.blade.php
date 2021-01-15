@extends('layout.mainguru')
<!-- buat manggil navbar, title yg ada di file main.blade -->

@section('title', 'Nilai Siswa')

<!--buat nama title webnya -->

    @section('content')

        <h3 class="text-center" style="margin-top:50px">NILAI SISWA</h3>
        <br>
        <div class="row">
        <div class="col" style="margin-left:180px">
            <form action="/nilai/cari" method="GET">
            <input type="text" name="cari" placeholder="Cari nama .." value="{{ old('cari') }}">
            <input type="submit" value="CARI">
            </form>
        </div>
        <div class="col">
            <a type="button" class="btn btn-success" style="margin-left:330px;" href="/create">Tambah Data</a>
        </div>
    </div>
        <div class = "container">

                <table style= "text-align: center; margin-top:30px;" class="table table-striped">

                    <thead class="thead-dark">
                    <tr>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Mata Pelajaran</th>
                        <th>Nilai UTS</th>
                        <th>Nilai UAS</th>
                        <th>Action</th>

                        </tr>
                    </thead>

                    @foreach ($scores as $score)
                    <tbody>
                        <td>{{$score->nis}}</td>
                        <td>{{$score->nama}}</td>
                        <td>{{$score->mata_pelajaran}}</td>
                        <td>{{$score->nilai_uts}}</td>
                        <td>{{$score->nilai_uas}}</td>
                        <td><a href="/edit/{{$score->id}}" class="btn btn-primary" style="width: 70px;">Edit</a>
                            <form action="/delete/{{$score->id}}" method="POST">
                            <br>
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
