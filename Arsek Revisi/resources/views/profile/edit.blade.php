@extends('layout.mainsiswa')
<!-- buat manggil navbar, title yg ada di file main.blade -->

@section('title', 'Profil Siswa')

<!--buat nama title webnya -->
           
    @section('content') 

    <div class="container" style="margin-top:50px">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">{{ __('Update Profile Siswa') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        
                        <!-- <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">User</label> -->
                        

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nama </label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nis" class="col-md-4 col-form-label text-md-right">NIS</label>

                            <div class="col-md-6">
                                <input id="nis" type="text" class="form-control @error('nis') is-invalid @enderror" name="nis" value="{{ $user->nis }}" required autocomplete="nis" autofocus>

                                @error('nis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ttl" class="col-md-4 col-form-label text-md-right">{{ __('TTL') }}</label>

                            <div class="col-md-6">
                                <input id="ttl" type="date" class="form-control @error('ttl') is-invalid @enderror" name="ttl" value="{{ $user->ttl }}" required autocomplete="ttl" autofocus>

                                @error('ttl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $user->alamat }}" required autocomplete="alamat" autofocus>

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection