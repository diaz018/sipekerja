
<div class="container">
    
    <div class="row mt-3 justify-content-end">
    <div class="col-md-12">
            <div class="card mt-3" style="border-color: #abcfff;">
                <form class="card-body" action="" method="POST">

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
            <div class="col-12">
                <div class="card mt-3" style="border-color: #abcfff;">
                    <div class="card-header h-100 row justify-content-center gap-2 mb-2">
                        <a href="<?= base_url()?>Kegiatan/detail/<?= $data['id_kegiatan']?>" class="text-decoration-none text-dark">
                        <h5 class="fw-bold mt-2 text-uppercase pointer text-center">
                            <?= $data['nama']?>
                        </h5>
                        </a>
                        <div class="badge text-wrap col-auto" style="background-color: <?= ($data['jenis_kegiatan'] == 'Lapangan') ? '#D2691E' : (($data['jenis_kegiatan'] == 'Pengolahan')?'#5F9EA0': '#EE82EE'); ?>;" >
                            <?= $data['jenis_kegiatan']?>
                        </div>
                        <div class="badge text-wrap col-auto " style="background-color: <?= ($data['jenis_sampel'] == 'Rumah Tangga') ? '#008080' : (($data['jenis_sampel'] == 'Perusahaan') ? '#FF6347' : '#EE82EE'); ?>;"  >
                            <?= $data['jenis_sampel']?>
                        </div>
                        <div class="badge text-wrap col-auto <?= ($data['jenis_bidang'] == 'Pertanian') ? 'bg-success' : (($data['jenis_bidang'] == 'Ekonomi') ? 'bg-warning' : (($data['jenis_bidang'] == 'Sosial Kependudukan')?'bg-primary':'bg-lainnya')); ?>"  >
                            <?= $data['jenis_bidang']?>
                        </div>
                    </div>

                    <div class="card-body row justify-content-around">
                        <div class="col-lg-2 col-md-4 col-6 p-2">
                            <div class="card p-1 text-center fw-bold">
                                <svg class="pointer" data-bs-toggle="modal" data-bs-target="#kualitas_pekerjaan" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path style="fill: gold;" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>
                                Kualitas Pekerjaan
                                <div class="d-flex align-items-center justify-content-center gap-2 fw-bold fs-5">
                                    <svg xmlns="http://www.w3.org/2000/svg"  height="1.25em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path style="fill: #FFD700;" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    <?= $data['avg_kualitas_pekerjaan']?>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 p-2">
                            <div class="card p-1 text-center fw-bold">
                                <svg class="pointer" data-bs-toggle="modal" data-bs-target="#ketepatan_waktu" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path style="fill: gold;" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>
                                Ketepatan Waktu
                                <div class="d-flex align-items-center justify-content-center gap-2 fw-bold fs-5">
                                    <svg xmlns="http://www.w3.org/2000/svg"  height="1.25em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path style="fill: #FFD700;" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    <?= $data['avg_ketepatan_waktu']?>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 p-2">
                            <div class="card p-1 text-center fw-bold">
                                <svg class="pointer" data-bs-toggle="modal" data-bs-target="#etika" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path style="fill: gold;" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>
                                Etika
                                <div class="d-flex align-items-center justify-content-center gap-2 fw-bold fs-5">
                                    <svg xmlns="http://www.w3.org/2000/svg"  height="1.25em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path style="fill: #FFD700;" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    <?= $data['avg_etika']?>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 p-2">
                            <div class="card p-1 text-center fw-bold">
                                <svg class="pointer" data-bs-toggle="modal" data-bs-target="#komunikasi" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path style="fill: gold;" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>
                                Komunikasi
                                <div class="d-flex align-items-center justify-content-center gap-2 fw-bold fs-5">
                                    <svg xmlns="http://www.w3.org/2000/svg"  height="1.25em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path style="fill: #FFD700;" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    <?= $data['avg_komunikasi']?>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 p-2">
                            <div class="card p-1 text-center fw-bold">
                                <svg class="pointer" data-bs-toggle="modal" data-bs-target="#inisiatif" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path style="fill: gold;" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>
                                Inisiatif 
                                <div class="d-flex align-items-center justify-content-center gap-2 fw-bold fs-5">
                                    <svg xmlns="http://www.w3.org/2000/svg"  height="1.25em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path style="fill: #FFD700;" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    <?= $data['avg_inisiatif']?> 
                                </div>
                            </div>
                        </div>

                        <div class="col-12 p-2">
                            <div class="card p-1 text-center fw-bold">
                                Jumlah Mitra : <?= $data['jumlah_mitra']?> Mitra
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

        
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="kualitas_pekerjaan" tabindex="-1" aria-labelledby="kualitas_pekerjaanLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header fw-bold fs-4">
                Kualitas Pekerjaan
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body fs-5">
            Indikator ini menilai sejauh mana mitra mampu melakukan tugas dan tanggung jawab mereka dengan tingkat keahlian, akurasi, dan tingkat kepuasan atasan yang tinggi.
        </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ketepatan_waktu" tabindex="-1" aria-labelledby="ketepatan_waktuLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header fw-bold fs-4">
                Ketepatan Waktu
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body fs-5">
            Indikator ini mengacu pada kemampuan mitra untuk menyelesaikan tugas atau proyek dalam batas waktu yang ditetapkan.
        </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="etika" tabindex="-1" aria-labelledby="etikaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header fw-bold fs-4">
                Etika
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body fs-5">
            Indikator ini mencerminkan bagaimana mitra berperilaku dan berinteraksi dengan orang lain di tempat kerja.
        </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="komunikasi" tabindex="-1" aria-labelledby="komunikasiLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header fw-bold fs-4">
                Komunikasi
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body fs-5">
            Indikator ini mencerminkan kemampuan mitra dalam membangun hubungan yang baik dalam bekerjasama dengan sesama rekan kerja. Selain itu juga berhubungan dengan kemampuan mitra dalam berkomunikasi secara efektif.
        </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="inisiatif" tabindex="-1" aria-labelledby="inisiatifLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header fw-bold fs-4">
                Inisiatif
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body fs-5">
            Indikator ini mencerminkan kemampuan mitra untuk mengambil tindakan proaktif, mengidentifikasi peluang, dan melakukan langkah-langkah tambahan di luar tugas rutin mereka untuk mencapai hasil yang lebih baik. Contoh : Inisiatif membantu pemecahan masalah yang terjadi pada perusahaan, Inisiatif mengurangi konflik yang terjadi di lingkungan kerja, Inisiatif melakukan hal-hal baru yang berdampak positif bagi institusi/lembaga.
        </div>
        </div>
    </div>
</div>