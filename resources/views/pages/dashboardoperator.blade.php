@include('partials.headerdashboardoperator')

@extends('layouts.dashboard')

@section('content')
    <div class="rows">
        <div class="column" style="margin-right: -100px">
            <a href="/" class="card credentialing">
                <div class="overlay"></div>
                <div class="circle">
                    <img src="img/home-network.svg">
                </div>
                <p>Halaman Profil</p>
            </a>
        </div>
        <div class="column">
            <a href="/daftarpenyewa" class="card credentialing">
                <div class="overlay"></div>
                <div class="circle">
                    <img src="img/schedule-check.svg">
                </div>
                <p>Daftar Penjadwalan</p>
            </a>
        </div>
        <div class="column" style="margin-left: -100px">
            <a href="/tambahsewa" class="card credentialing">
                <div class="overlay"></div>
                <div class="circle">
                    <img src="img/schedule-add.svg">
                </div>
                <p>Tambah Sewa</p>
            </a>
        </div>
        
    </div>
@endsection
