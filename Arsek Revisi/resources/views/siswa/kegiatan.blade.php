@extends('layout.mainsiswa')
<!-- buat manggil navbar, title yg ada di file main.blade -->

@section('title', 'Home Siswa')

<!--buat nama title webnya -->

@section('content')
<div class="container mt-3">

    <div class="row">
        <h2 class="mx-auto">Info Kegiatan Sekolah</h2>
    </div>
    @if(session()->has('empty'))
    <p class="text-seconday">{{session()->get('empty')}}</p>

    @else

    <div class="row mt-5" style="margin-left: 50px;">
        @foreach ($events as $event)
        <div class="card ml-4" style="width: 18rem;">
            <!-- <img src="{{ asset('img/' . $event->gambar)}}" class="card-img-top" alt="Event image">; -->


            <div class="card-body">
                <h5 class="card-title text-center">{{$event->nama}}</h5>
                <p class="card-text"><img src="{{asset('img/kalender.jpg')}}" alt="calendar" style="width: 15px; height: 15px;" class="my-auto"> {{$event->tanggal}}</p>
                <p class="card-text"><img src="{{asset('img/placeholder.png')}}" alt="tempat" style="width: 15px; height: 15px;" class="my-auto"> {{$event->tempat}}</p>
                <p class="card-text"><img src="{{asset('img/jam.png')}}" alt="waktu" style="width: 15px; height: 15px;" class="my-auto"> {{$event->jam_mulai}} - {{$event->jam_berakhir}}</p>
                <p class="card-text">Kategori : Event {{$event->kategori}}</p>
                <p class="card-text">Deskripsi : {{$event->deskripsi}}</p>

            </div>

            <ul class="list-group list-group-flush">
            <li class="list-group-item">
            <div class="row" style="margin-left: 80px">
                <div class="col" >
                    <a href="/peserta/create" type="button" class="btn btn-primary">Join</a>
                </div>
            </div>
            </li>
            </ul>

            </form>
        </div>
        @endforeach
    </div>

    @endif
</div>
@endsection
