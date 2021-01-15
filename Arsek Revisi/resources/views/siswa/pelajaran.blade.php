@extends('layout.mainsiswa')
<!-- buat manggil navbar, title yg ada di file main.blade -->

@section('title', 'Pelajaran Siswa')

<!--buat nama title webnya -->
           
    @section('content')   

        <h3 class="text-center" style="margin-top:50px">JADWAL PELAJARAN</h3>
        <div class = "container">
        <form action="/pelajaransiswa/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari kelas .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
        </form>       
                <table style= "text-align: center; margin-top:30px;" class="table table-striped">
                   
                    <thead>
                    <tr>
                        <th>Kelas</th>
                        <th>Hari</th>
                        <th>Jam Mulai</th>
                        <th>Jam Selesai</th>
                        <th>Mata Pelajaran</th>

                        </tr>
                    </thead>
                    
                    @foreach ($courses as $course)
                    <tbody>
                        <td>{{$course->kelas}}</td>
                        <td>{{$course->hari}}</td>
                        <td>{{$course->jam_mulai}}</td>
                        <td>{{$course->jam_selesai}}</td>
                        <td>{{$course->mata_pelajaran}}</td>
                   
                    </tbody>
                    @endforeach
                </table>
        </div>

        @endsection
