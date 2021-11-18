<div class="section-body">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Lahan</h4>
                </div>
                <div class="card-body">
                    <!-- <div class="form-group row">
                        <label for="lokasi" class="col-sm-3 col-form-label">Lokasi</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="lokasi" type="text" class="form-control " id="lokasi"
                                   placeholder="Lokasi Lahan">
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <label for="lokasi" class="col-sm-3 col-form-label">Lokasi Lahan</label>
                        <div class="col-sm-9">
                            <textarea wire:model.lazy="lokasi" class="form-control" id="lokasi"
                                      placeholder="Desa, Kecamatan, Kabupaten" rows="3000"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dokumen" class="col-sm-3 col-form-label">dokumen</label>
                        <div class="col-sm-9">
                            <textarea wire:model.lazy="dokumen" class="form-control" id="dokumen"
                                      placeholder="Dokumen" rows="3000"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                                    <label for="lintang_selatan" class="col-sm-3 col-form-label">Lintang Selatan</label>
                                    <div class="col-sm-9">
                                    <input wire:model.lazy="lintang_selatan" type="text" class="form-control " id="lintang_selatan"
                                   placeholder="°">
                                    </div>
                    </div>
                    <div class="form-group row">
                                    <label for="bujur_timur" class="col-sm-3 col-form-label">Bujur Timur</label>
                                     <div class="col-sm-9">
                                    <input wire:model.lazy="bujur_timur" type="text" class="form-control " id="bujur_timur"
                                   placeholder="°">
                                     </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_tanah" class="col-sm-3 col-form-label">Jenis Tanah</label>
                        <div class="col-sm-9">
                        <select wire:model.lazy="jenis_tanah" class="form-control" id="jenis_tanah"
                                      placeholder="Jenis Tanah">
                                      <option value=" " ></option>
                                      <option value="-">-</option>s
                                      <option value="Darat">Darat</option>
                                      <option value="Tanah Kosong">Tanah Kosong</option>
                                    </select>
                        </div>
                    </div>
                    <div class="form-group row">
                                    <label for="jenis_tanaman" class="col-sm-3 col-form-label">Jenis Tanaman</label>
                                     <div class="col-sm-9">
                                    <input wire:model.lazy="jenis_tanaman" type="text" class="form-control " id="jenis_tanaman"
                                   placeholder="Jenis Tanaman">
                                     </div>
                                </div>
                    <div class="form-group row">
                        <label for="pemilik_tanaman" class="col-sm-3 col-form-label">Pemilik Tanaman</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="pemilik_tanaman" type="text" class="form-control " id="pemilik_tanaman"
                                   placeholder="Pemilik Tanaman">
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                        <label for="jenis_tanah" class="col-sm-3 col-form-label">Jenis Tanah</label>
                        <div class="col-sm-9">
                        <select wire:model.lazy="jenis_tanah" class="form-control" id="jenis_tanah"
                                      placeholder="Jenis Tanah">
                                      <option value=" " ></option>
                                      <option value="-">-</option>
                                      <option value="Darat">Darat</option>
                                      <option value="Tanah Kosong">Tanah Kosong</option>
                                    </select>
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <label for="petani_penggarap" class="col-sm-3 col-form-label">Petani Penggarap</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="petani_penggarap" type="text" class="form-control " id="petani_penggarap"
                                   placeholder="Petani Penggarap">
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
