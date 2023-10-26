
<div class="container">
    
    <div class="row mt-3 justify-content-end">
        <div class="col-md-12">
            <div class="card mt-3" style="border-color: #abcfff;">
                <form class="card-body" action="" method="POST">
                    <h5 class="text-center fw-bold">DAFTAR PENILAIAN KINERJA MITRA</h5>
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

                    <!-- <div class="row justify-content-start mt-3">
                        <div class="col-auto">
                        <button class="btn btn-success" type="submit">
                            TAMPILKAN
                        </button>
                        </div>
                    </div> -->
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <?php foreach($kegiatan as $data):?>
            <div class="col-lg-4 col-md-6">
                <div class="card mt-3">
                    <div class="card-header h-100">
                        <div class="badge text-wrap col-auto" style="background-color: <?= ($data['jenis_kegiatan'] == 'Lapangan') ? '#D2691E' : (($data['jenis_kegiatan'] == 'Pengolahan')?'#5F9EA0': '#EE82EE'); ?>;" >
                            <?= $data['jenis_kegiatan']?>
                        </div>
                        <div class="badge text-wrap col-auto " style="background-color: <?= ($data['jenis_sampel'] == 'Rumah Tangga') ? '#008080' : (($data['jenis_sampel'] == 'Perusahaan') ? '#FF6347' : '#EE82EE'); ?>;"  >
                            <?= $data['jenis_sampel']?>
                        </div>
                        <div class="badge text-wrap col-auto <?= ($data['jenis_bidang'] == 'Pertanian') ? 'bg-success' : (($data['jenis_bidang'] == 'Ekonomi') ? 'bg-warning' : (($data['jenis_bidang'] == 'Sosial Kependudukan')?'bg-primary':'bg-lainnya')); ?>"  >
                            <?= $data['jenis_bidang']?>
                        </div>
                        
                        <a href="<?= base_url()?>Penilaian/detail/<?= $data['id_kegiatan']?>" class="text-decoration-none text-dark">
                        <h5 class="fw-bold mt-2 text-uppercase pointer">
                            <?= $data['nama']?>
                        </h5>
                        </a>
                    </div>
                    <div class="card-body d-flex flex-row-reverse gap-2">
                        <svg class="pointer" data-bs-toggle="modal" data-bs-target="#kegiatan<?= $data['id_kegiatan']?>" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path style="fill: gold;" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>
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

        <?php endforeach; ?>

        
    </div>
</div>