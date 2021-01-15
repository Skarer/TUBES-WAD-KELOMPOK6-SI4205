@extends('layout.mainguru')
<!-- buat manggil navbar, title yg ada di file main.blade -->

@section('title', 'Data Peserta')

<!--buat nama title webnya -->

    @section('content')

    <h3 class="text-center" style="margin-top:50px">Daftar Peserta</h3>
        <div class = "container">
        <form action="/peserta/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari event .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
        </form>

                <table style= "text-align: center; margin-top:30px;" class="table table-">

                    <thead class="thead-dark">
                    <tr>
                        <th>Nama</th>
                        <th>NIS</th>
                        <th>Kelas</th>
                        <th>Nama Event</th>


                        </tr>
                    </thead>

                    @foreach ($peserta as $peserta)
                    <tbody>
                        <td class="table-primary">{{$peserta->nama}}</td>
                        <td class="table-info">{{$peserta->nis}}</td>
                        <td class="table-primary">{{$peserta->kelas}}</td>
                        <td class="table-info">{{$peserta->namaevent}}</td>

                    </tbody>
                    @endforeach
                </table>
        </div>

        @endsection
