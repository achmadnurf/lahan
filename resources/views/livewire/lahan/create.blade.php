<div class="section-body">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Lahan</h4>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="sertifikat" class="col-sm-3 col-form-label">Nomor Sertifikat</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="sertifikat" type="text" class="form-control " id="sertifikat"
                                   placeholder="No Sertifikat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kwitansi" class="col-sm-3 col-form-label">Kwitansi</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="kwitansi" type="text" class="form-control " id="kwitansi"
                                   placeholder="kwitansi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="luas" class="col-sm-3 col-form-label">Luas Lahan</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="luas" type="text" class="form-control " id="luas"
                                   placeholder="Luas Lahan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lokasi" class="col-sm-3 col-form-label">Lokasi Lahan</label>
                        <div class="col-sm-9">
                            <textarea wire:model.lazy="lokasi" class="form-control" id="lokasi"
                                      placeholder="Desa, Kecamatan, Kabupaten" rows="3000"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">status Lahan</label>
                        <div class="col-sm-9">
                        <textarea wire:model.lazy="status" class="form-control" id="status"
                                      placeholder="Status" rows="3000"></textarea>
                        </div>
                    </div>
                </div>
                <div wire:click="simpan" class="card-footer text-right">
                    <button class="btn btn-primary">Simpan Data Lahan</button>
                </div>
            </div>
        </div>
    </div>
</div>
