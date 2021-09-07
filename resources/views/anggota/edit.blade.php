@extends('layouts.app')
@section('content')
    <div class="section">
        <div class="section-header">
            <h1>Edit Anggota</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('home')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Edit Anggota</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <form action="{{route('anggota.update', ['anggota' => $anggota])}}" method="POST" >
                        @csrf
                        @method("PUT")
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Anggota</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="sertifikat" class="col-sm-3 col-form-label">Nomor Sertifikat</label>
                                    <div class="col-sm-9">
                                        <input name="sertifikat" value="{{$anggota->sertifikat}}" type="text" class="form-control "
                                               id="sertifikat"
                                               placeholder="No Sertifikat">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kwitansi" class="col-sm-3 col-form-label">Kwitansi</label>
                                    <div class="col-sm-9">
                                        <input name="kwitansi" type="text" value="{{$anggota->kwitansi}}"
                                               class="form-control " id="kwitansi"
                                               placeholder="kwitansi">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="luas" class="col-sm-3 col-form-label">Luas Lahan</label>
                                    <div class="col-sm-9">
                                        <input name="luas" value="{{$anggota->luas}}" type="text" class="form-control "
                                               id="luas"
                                               placeholder="Luas Lahan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lokasi" class="col-sm-3 col-form-label">Lokasi Lahan</label>
                                    <div class="col-sm-9">
                            <textarea name="lokasi"  class="form-control" id="lokasi"
                                      placeholder="lokasi" rows="3000">{{$anggota->lokasi}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="status" class="col-sm-3 col-form-label">Status Lahan</label>
                                    <div class="col-sm-9">
                            <textarea name="status"  class="form-control" id="status"
                                      placeholder="status" rows="3000">{{$anggota->status}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div  class="card-footer text-right">
                                <button class="btn btn-primary" type="submit">Simpan Data Anggota</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection