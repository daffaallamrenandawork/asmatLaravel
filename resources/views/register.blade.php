@extends('layouts.main')
@section('content')
<div class="logreg">
    <div class="login-left">
        <div class="container">
            <img src="images/log-reg.png" alt="">
        </div>
    </div>
    <div class="login-right">
        <div class="logo">
            <img src="images/logo-footer.png" alt="">
            <h2>Mulai <br> mendaftar&excl;</h2>
        </div>   
        <div class="container-reg">
            <form action="{{ route('register-customer') }}" method="post">
                @csrf
                <div class="nama-depan">
                    <label for="">Nama depan</label> <br>
                    <input type="text" name="nama_depan" value="{{ old('nama_depan') }}">
                </div>
                <div class="nama-belakang">
                    <label for="">Nama Belakang</label> <br>
                    <input type="text" name="nama_belakang" value="{{ old('nama_belakang') }}">
                </div>
                <div class="reg-email">
                    <label for="">Email</label> <br>
                    <input type="text" name="email" value="{{ old('email') }}">
                </div>
                <div class="reg-tanggal-lahir">
                    <label for="">Telepon</label> <br>
                    <input type="text" name="telepon" value="{{ old('telepon') }}">
                </div>
                <div class="kata-sandi">
                    <label for="">Kata sandi</label> <br>
                    <input type="password" name="password">
                </div>
                <div class="konfirmasi-sandi">
                    <label for="">Konfirmasi kata sandi</label> <br>
                    <input type="password" name="password_confirmation">
                </div>
                @if (session('errors'))
                    <p class="error">{{ $errors->first() }}</p> 
                @endif
                <div class="exit">
                    <a href="{{ route('login-customer') }}"> <img src="images/arrow.svg" alt="" class="exit-arrow"><span class="underline">Batal</span></a> 
                    <input type="submit" class="cta-submit" value="Daftar"></div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
    