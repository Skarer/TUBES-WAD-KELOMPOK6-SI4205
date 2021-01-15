@extends('layout.mainsiswa')
<!-- buat manggil navbar, title yg ada di file main.blade -->

@section('title', 'Absen Siswa')

<!--buat nama title webnya -->
           
    @section('content')   


        <h3 class="text-center" style="margin-top:50px">Data Absen</h3>
        <div class = "container">
        <form action="/absensiswa/cari" method="GET"class="d-flex col-4">
        <input type="text" name="cari" placeholder="Cari nis .." value="{{ old('cari') }}">
        <input type="submit" value="CARI">
      </form> 
                <table style= "text-align: center; margin-top:30px;" class="table table-striped">
                   
                    <thead>
                    <tr>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Tanggal</th>
                        <th>Mata Pelajaran</th>
                        <th>Absen</th>

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
                    </tbody>
                    @endforeach
                </table>
        </div>

        @endsection