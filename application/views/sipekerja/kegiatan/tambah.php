
<div class="container">
    
    <div class="row mt-3 justify-content-end">

        <div class="col-md-12">
            <div class="card mt-3" style="border-color: #abcfff;">
                
                <h4 class="text-center fw-bold mt-3">PENDAFTARAN KEGIATAN</h4>

                <form class="row g-3 card-body" action="<?= base_url()?>Kegiatan/tambah" method="POST">
                    <div class="col-md-12">
                        <label for="nama" class="form-label">Nama Kegiatan</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>

                    <!-- <div class="col-md-12 hide">
                        <input type="text" class="form-control" id="status" value="1">
                    </div> -->

                    <div class="col-12">
                        <label for="nip_pegawai" class="form-label">Pegawai Penanggungjawab</label>
                        <select id="nip_pegawai" name="nip_pegawai" class="form-select">
                        <?php foreach($pegawai as $data):?>
                            <option value="<?= $data['nip_pegawai']?>" >(<?= $data['nip_pegawai']?>) <?= $data['nama']?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="jenis_kegiatan" class="form-label">Jenis Kegiatan</label>
                        <select id="jenis_kegiatan" name="jenis_kegiatan" class="form-select">
                        <option value="Lapangan" selected>Lapangan</option>
                        <option value="Pengolahan" >Pengolahan</option>
                        <option value="Lainnya" >Lainnya</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="jenis_sampel" class="form-label">Jenis Sampel</label>
                        <select id="jenis_sampel" name="jenis_sampel" class="form-select">
                        <option value="Rumah Tangga" selected>Rumah Tangga</option>
                        <option value="Perusahaan" >Perusahaan</option>
                        <option value="Lainnya" >Lainnya</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="jenis_bidang" class="form-label">Jenis bidang</label>
                        <select id="jenis_bidang" name="jenis_bidang" class="form-select">
                        <option value="Ekonomi" selected>Ekonomi</option>
                        <option value="Sosial Kependudukan" >Sosial Kependudukan</option>
                        <option value="Pertanian" >Pertanian</option>
                        <option value="Lainnya" >Lainnya</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="waktu_mulai" class="form-label">Waktu Mulai Kegiatan</label>
                        <input type="date" class="form-control" id="waktu_mulai" name="waktu_mulai">
                    </div>
                    <div class="col-md-6">
                        <label for="waktu_selesai" class="form-label">Waktu Selesai</label>
                        <input type="date" class="form-control" id="waktu_selesai" name="waktu_selesai" placeholder="1234 Main St">
                    </div>
                    <div class="mb-3">
                        <label for="file_struktur" class="form-label">Upload Struktur Penilaian</label>
                        <input class="form-control" type="file" id="file">
                    </div>

                    <div class="col-12 mt-3 ">
                        <div class="row justify-content-center">
                        <button class="col-auto btn btn-success" type="submit">
                            SIMPAN
                        </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>