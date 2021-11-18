@extends('layouts.app')
@section('content')
    <div class="section">
        <div class="section-header">
            <h1>Edit Lahan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('home')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Edit Lahan</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <form action="{{route('tanaman.update', ['tanaman' => $tanaman])}}" method="POST" >
                        @csrf
                        @method("PUT")
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Lahan</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="lokasi" class="col-sm-3 col-form-label">Lokasi</label>
                                    <div class="col-sm-9">
                                        <input name="lokasi" value="{{$tanaman->lokasi}}" type="text" class="form-control"
                                               id="lokasi"
                                               placeholder="Desa, Kecamatan, Kabupaten">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="dokumen" class="col-sm-3 col-form-label">Dokumen</label>
                                    <div class="col-sm-9">
                                        <input name="dokumen" value="{{$tanaman->dokumen}}" type="text" class="form-control"
                                               id="dokumen"
                                               placeholder="Dokumen">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lintang_selatan" class="col-sm-3 col-form-label">Lintang Selatan</label>
                                    <div class="col-sm-9">
                                        <input name="lintang_selatan" value="{{$tanaman->lintang_selatan}}" type="text" class="form-control "
                                               id="lintang_selatan"
                                               placeholder="Petani Penggarap">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="bujur_timur" class="col-sm-3 col-form-label">Bujur Timur</label>
                                    <div class="col-sm-9">
                                        <input name="bujur_timur" value="{{$tanaman->bujur_timur}}" type="text" class="form-control "
                                               id="bujur_timur"
                                               placeholder="Bujur Timur">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jenis_tanah" class="col-sm-3 col-form-label">Jenis Tanah</label>
                                    <div class="col-sm-9">
                                    <input name="jenis_tanah"  value="{{$tanaman->jenis_tanaman}}" type="text" class="form-control" 
                                            id="jenis_tanah" placeholder="Jenis Tanah">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jenis_tanaman" class="col-sm-3 col-form-label">Jenis Tanaman</label>
                                    <div class="col-sm-9">
                                        <input name="jenis_tanaman" value="{{$tanaman->jenis_tanaman}}" type="text" class="form-control "
                                               id="jenis_tanaman"
                                               placeholder="Jenis Tanaman">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pemilik_tanaman" class="col-sm-3 col-form-label">Pemilik Tanaman</label>
                                     <div class="col-sm-9">
                                    <input name="pemilik_tanaman" value="{{$tanaman->pemilik_tanaman}}" type="text" class="form-control" 
                                            id="pemilik_tanaman"
                                   placeholder="Pemilik Tanaman">
                                     </div>
                                </div>
                                <div class="form-group row">
                                    <label for="petani_penggarap" class="col-sm-3 col-form-label">Petani Penggarap</label>
                                    <div class="col-sm-9">
                                        <input name="petani_penggarap" value="{{$tanaman->petani_penggarap}}" type="text" class="form-control "
                                               id="petani_penggarap"
                                               placeholder="Petani Penggarap">
                                    </div>
                                </div>
                                
                                
                            <div  class="card-footer text-right">
                                <button class="btn btn-primary" type="submit">Simpan Data Lahan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection