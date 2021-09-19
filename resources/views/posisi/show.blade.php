@extends('layouts.app')
@section('content')
    <div class="section">
        <div class="section-header">
            <h1>Data Posisi</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('home')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Posisi</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Detail Data Posisi</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="tanggal_pinjam" class="col-sm-3 col-form-label">Tanggal Entry Lahan</label>
                                <div class="col-sm-9">
                                    <input type="date" disabled value="{{$posisi->tanggal_pinjam}}"
                                           class="form-control "
                                           id="tanggal_pinjam">
                                </div>
                            </div>
                            <div class="form-group row" wire:ignore>
                                <label for="lahan_id" class="col-sm-3 col-form-label">Lahan</label>
                                <div class="col-sm-9">
                                    <input id="lahan_id" disabled class="form-control" value="{{$posisi->lahan->sertifikat}}"
                                           type="text"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="garis_lintang" class="col-sm-3 col-form-label">Jangka Waktu</label>
                                <div class="col-sm-9">
                                    <input value="{{$posisi->garis_lintang}}" placeholder="0" type="text"
                                           class="form-control "
                                           id="garis_lintang" disabled>
                                </div>
                            </div>
                            {{-- <div class="form-group row">
                                <label for="garis_litang" class="col-sm-3 col-form-label"> Pinjaman</label>
                                <div class="col-sm-9">
                                    <input value="{{$posisi->garis_litang}}" class="form-control" id="garis_litang"
                                           type="text" placeholder="0"/>
                                </div>
                            </div> --}}
                            
                            <div class="form-group row">
                                <label for="garis_bujur" class="col-sm-3 col-form-label">Diatas Permukaan</label>
                                <div class="col-sm-9">
                                    <input value="{{$posisi->mdpl}}" class="form-control" id="mdpl"
                                           type="text" placeholder="0"/>
                                </div>
                            </div>
                            {{-- <div class="form-group row">
                                <label for="jumlah_angsuran" class="col-sm-3 col-form-label">Jumlah Angsuran</label>
                                <div class="col-sm-9">
                                    <input disabled class="form-control" id="jumlah_angsuran"
                                           type="text" placeholder="0" value="($posisi->jumlah_ansuran)"/>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Status Lahan</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="tanggal_pinjam" class="col-sm-3 col-form-label">Status Validasi</label>
                                <div class="col-sm-9">
                                    <input type="text" disabled value="Belum Validasi"
                                           class="form-control "
                                           id="tanggal_pinjam">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggal_pinjam" class="col-sm-3 col-form-label">Status Otorisasi</label>
                                <div class="col-sm-9">
                                    <input type="text" disabled value="Belum Otorisasi"
                                           class="form-control "
                                           id="tanggal_pinjam">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection