@extends('layout.mainsiswa')
<!-- buat manggil navbar, title yg ada di file main.blade -->

@section('title', 'Nilai Siswa')

<!--buat nama title webnya -->
           
    @section('content')   

        <h3 class="text-center" style="margin-top:50px">NILAI SISWA</h3>
        <div class = "container">
        <form action="/nilaisiswa/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari nis .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
        </form>
 
                <table style= "text-align: center; margin-top:30px;" class="table table-striped">
                   
                    <thead>
                    <tr>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Mata Pelajaran</th>
                        <th>Nilai UTS</th>
                        <th>Nilai UAS</th>
                        </tr>
                    </thead>
                    
                    @foreach ($scores as $score)
                    <tbody>
                        <td>{{$score->nis}}</td>
                        <td>{{$score->nama}}</td>
                        <td>{{$score->mata_pelajaran}}</td>
                        <td>{{$score->nilai_uts}}</td>
                        <td>{{$score->nilai_uas}}</td>
                   
                    </tbody>
                    @endforeach
                </table>
        </div>

        @endsection
