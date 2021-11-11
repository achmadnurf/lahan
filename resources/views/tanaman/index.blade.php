@extends('layouts.app')
@section('content')
    <div class="section">
        <div class="section-header">
            <h1>Daftar Lahan Berdasarkan Jenis Tanaman</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('home')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Data Lahan</div>
            </div>
        </div>
        @livewire('tanaman.index')
    </div>
@endsection