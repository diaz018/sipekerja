
<div class="container">
    
    <div class="row mt-3 justify-content-end">
    
    <a class="col-auto" href="<?= base_url('Kegiatan');?>/tambahkan">
        <button type="button" class="btn btn-success fw-bold">
            + Tambah Kegaitan
        </button>
    </a>
    

        <div class="col-md-12">
            <div class="card mt-3" style="border-color: #abcfff;">
                <form class="card-body" action="" method="POST">
                    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
                    <!-- <div class="row">
                        <div class="col-6">
                            <h6>Provinsi</h6>
                            <select name="provinsi" id="lang">
                                <option value="">(75) Provinsi</option>
                            </select>
                        </div>

                        <div class="col-6">
                            <h6>Kabupaten</h6>
                            <select name="provinsi" id="lang">
                                <option value="71">(71) Kota Gorontalo</option>
                                <option value="02">(02) Kab. Gorontalo</option>
                                <option value="03">(03) Kab. Pohuwato</option>
                                <option value="04">(04) Kab. Bone Bolango</option>
                                <option value="05">(05) Kab. Boalemo</option>
                            </select>
                        </div>
                    </div> -->

                    <div class="row mt-3">
                        <div class="col-6">
                            <h6>Jenis Kegiatan</h6>
                            <select class="form-select " name="jenis_kegiatan" id="lang">
                                <option value="" <?= ($jenis_kegiatan == '')?'selected':''?>>Semua</option>
                                <option value="Lapangan" <?= ($jenis_kegiatan == 'Lapangan')?'selected':''?>>Lapangan</option>
                                <option value="Pengolahan" <?= ($jenis_kegiatan == 'Pengolahan')?'selected':''?>>Pengolahan</option>
                                <option value="Lainnya" <?= ($jenis_kegiatan == 'Lainnya')?'selected':''?>>Lainnya</option>

                            </select>
                        </div>

                        <div class="col-6">
                            <h6>Jenis Sampel</h6>
                            <select class="form-select" name="jenis_sampel" id="lang">
                                <option value="" <?= ($jenis_sampel == '')?'selected':''?>>Semua</option>
                                <option value="Rumah Tangga" <?= ($jenis_sampel == 'Rumah Tangga')?'selected':''?> >Rumah Tangga</option>
                                <option value="Perusahaan" <?= ($jenis_sampel == 'Perusahaan')?'selected':''?>>Perusahaan</option>
                                <option value="Lainnya" <?= ($jenis_sampel == 'Lainnya')?'selected':''?>>Lainnya</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mt-3 justify-content-start">
                        <div class="col-6">
                            <h6>Jenis Bidang</h6>
                            <select class="form-select" name="jenis_bidang" id="lang">
                                <option value="" <?= ($jenis_bidang == '')?'selected':''?>>Semua</option>
                                <option value="Sosial Kependudukan" <?= ($jenis_bidang == 'Sosial Kependudukan')?'selected':''?>>Sosial Kependudukan</option>
                                <option value="Pertanian" <?= ($jenis_bidang == 'Pertanian')?'selected':''?>>Pertanian</option>
                                <option value="Ekonomi" <?= ($jenis_bidang == 'Ekonomi')?'selected':''?>>Ekonomi</option>
                                <option value="Lainnya" <?= ($jenis_bidang == 'Lainnya')?'selected':''?>>Lainnya</option>
                            </select>
                        </div>

                    </div>

                    <div class="row justify-content-start mt-3">
                        <div class="col-auto">
                        <button class="btn btn-success" type="submit">
                            TAMPILKAN
                        </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <?php foreach($kegiatan as $data):?>
            <div class="col-lg-4 col-md-6">
                <div class="card mt-3">
                    <div class="card-header h-100">
                        <div class="badge text-wrap" style="background-color: <?= ($data['jenis_kegiatan'] == 'Lapangan') ? '#D2691E' : (($data['jenis_kegiatan'] == 'Pengolahan')?'#5F9EA0': '#EE82EE'); ?>;" >
                            <?= $data['jenis_kegiatan']?>
                        </div>
                        <div class="badge text-wrap " style="background-color: <?= ($data['jenis_sampel'] == 'Rumah Tangga') ? '#008080' : (($data['jenis_sampel'] == 'Perusahaan') ? '#FF6347' : '#EE82EE'); ?>;"  >
                            <?= $data['jenis_sampel']?>
                        </div>
                        <div class="badge text-wrap <?= ($data['jenis_bidang'] == 'Pertanian') ? 'bg-success' : (($data['jenis_bidang'] == 'Ekonomi') ? 'bg-warning' : (($data['jenis_bidang'] == 'Sosial Kependudukan')?'bg-primary':'bg-lainnya')); ?>"  >
                            <?= $data['jenis_bidang']?>
                        </div>
                        
                        <a href="<?= base_url()?>Kegiatan/detail/<?= $data['id_kegiatan']?>" class="text-decoration-none text-dark">
                        <h5 class="fw-bold mt-2 text-uppercase pointer">
                            <?= $data['nama']?>
                        </h5>
                        </a>
                    </div>
                    <div class="card-body d-flex flex-row-reverse gap-2">
                        <svg class="pointer" data-bs-toggle="modal" data-bs-target="#kegiatan<?= $data['id_kegiatan']?>" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path style="fill: yellow;" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>
                        <svg class="pointer" data-bs-toggle="modal" data-bs-target="#hapus<?= $data['id_kegiatan']?>" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path style="fill: red;" d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg>
                        <svg class="pointer <?= ($data['status'] == '0')?' hide':''?>" data-bs-toggle="modal" data-bs-target="#tutup<?= $data['id_kegiatan']?>" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path style="fill: orange;" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c-9.4 9.4-9.4 24.6 0 33.9l47 47-47 47c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l47-47 47 47c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-47-47 47-47c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-47 47-47-47c-9.4-9.4-24.6-9.4-33.9 0z"/></svg>    
                        <svg class="pointer <?= ($data['status'] == '1')?' hide':''?>" data-bs-toggle="modal" data-bs-target="#buka<?= $data['id_kegiatan']?>" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path style="fill: blue;" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/></svg>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="kegiatan<?= $data['id_kegiatan']?>" tabindex="-1" aria-labelledby="kegiatan<?= $data['id_kegiatan']?>Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="kegiatan<?= $data['id_kegiatan']?>"><?= $data['nama']?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="card-title fs-6"> Jenis Kegiatan : <?= $data['jenis_kegiatan']?></p>
                    <p class="card-title fs-6"> Jenis Sampel : <?= $data['jenis_sampel']?></p>
                    <p class="card-title fs-6"> Jenis Bidang : <?= $data['jenis_bidang']?></p>
                    <p class="card-title fs-6"> Periode Waktu : <?= $data['waktu_mulai']?> s.d <?= $data['waktu_selesai']?></p>
                </div>
                </div>
            </div>
            </div>

            <div class="modal fade" id="hapus<?= $data['id_kegiatan']?>" tabindex="-1" aria-labelledby="hapus<?= $data['id_kegiatan']?>Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <p class="card-title fs-5 fw-bold text-center"> Apakah Anda Yakin Ingin Menghapus Penilaian Kinerja Mitra?</p>
                    <form class="card-body d-flex justify-content-center gap-3 mt-4" action="<?= base_url('Kegiatan');?>/hapus" method="POST">
                    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
                        <input type="text" name="id" id="id" class="hide" value="<?= $data['id_kegiatan']?>">
                        <button type="submit" class="btn btn-success fw-bold"> Ya </button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </form>
                </div>
                </div>
            </div>
            </div>

            <div class="modal fade" id="tutup<?= $data['id_kegiatan']?>" tabindex="-1" aria-labelledby="tutup<?= $data['id_kegiatan']?>Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <p class="card-title fs-5 fw-bold text-center"> Apakah Anda Yakin Ingin Mengakhiri Penilaian Kinerja Mitra?</p>
                    <form class="card-body d-flex justify-content-center gap-3 mt-4" action="<?= base_url('Kegiatan');?>/ubah_status" method="POST">
                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
                        <input type="text" name="id" id="id" class="hide" value="<?= $data['id_kegiatan']?>">
                        <input type="text" name="status" status="id" class="hide" value="<?= $data['status']?>">
                        <button type="submit" class="btn btn-success fw-bold"> Ya </button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </form>
                </div>
                </div>
            </div>
            </div>

            <div class="modal fade" id="buka<?= $data['id_kegiatan']?>" tabindex="-1" aria-labelledby="buka<?= $data['id_kegiatan']?>Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <p class="card-title fs-5 fw-bold text-center"> Apakah Anda Yakin Ingin Membuka Penilaian Kinerja Mitra?</p>
                    <form class="card-body d-flex justify-content-center gap-3 mt-4" action="<?= base_url('Kegiatan');?>/ubah_status" method="POST">
                    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
                        <input type="text" name="id" id="id" class="hide" value="<?= $data['id_kegiatan']?>">
                        <input type="text" name="status" status="id" class="hide" value="<?= $data['status']?>">
                        <button type="submit" class="btn btn-success fw-bold"> Ya </button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </form>
                </div>
                </div>
            </div>
            </div>

            <?php endforeach; ?>

        
    </div>
</div>