<div class="container">

    <form action="<?= base_url()?>Penilaian/edit" method="POST">

        <div class="row mt-5 justify-content-center">
    
            <h5 class="fw-bold text-center fs-3 text-uppercase">
                <?= $kegiatan[0]['nama']?>
            </h5>

            <input type="text" class="hide" name="id_kegiatan" value="<?= $kegiatan[0]['id_kegiatan']?>">
            
            <?php foreach($penilaian as $data):?>
                <div class="col-md-12 my-3"> 
                    <div class="card justify-content-center" style="border-color: #abcfff;">
                        <div class="card-header">
                            <p class="text-center fw-bold fs-4 text-uppercase">
                                (<?= $data['id_sobat']?>) <?= $data['nama_mitra']?>
                            </p>
                        </div>
    
                        <div class="card-body row justify-content-center fs-5">
                            <div class="col-lg-6">
                                <div class="card mt-3">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center justify-content-center gap-2 fw-bold pointer" data-bs-toggle="modal" data-bs-target="#kualitas_pekerjaan" >
                                            Kualitas Pekerjaan
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex justify-content-evenly">
                                    <input type="radio" id="kualitas_pekerjaan_1_<?= $data['id_penilaian']?>" name="kualitas_pekerjaan_<?= $data['id_penilaian']?>" value="1" <?= $data['kualitas_pekerjaan']==1 ?'checked="checked"':''?>>
                                    <label for="kualitas_pekerjaan_1_<?= $data['id_penilaian']?>" id="bintang">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="pointer" style="fill: #A9A9A9;" height="2.2em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path  d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    </label>
                                     
                                    <input type="radio" id="kualitas_pekerjaan_2_<?= $data['id_penilaian']?>" name="kualitas_pekerjaan_<?= $data['id_penilaian']?>" value="2" <?= $data['kualitas_pekerjaan']==2 ?'checked="checked"':''?>>
                                    <label for="kualitas_pekerjaan_2_<?= $data['id_penilaian']?>" id="bintang">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="pointer" style="fill: #A9A9A9;" height="2.2em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    </label>
                                    
                                    <input type="radio" id="kualitas_pekerjaan_3_<?= $data['id_penilaian']?>" name="kualitas_pekerjaan_<?= $data['id_penilaian']?>" value="3" <?= $data['kualitas_pekerjaan']==3 ?'checked="checked"':''?>>
                                    <label for="kualitas_pekerjaan_3_<?= $data['id_penilaian']?>" id="bintang">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="pointer" style="fill: #A9A9A9;" height="2.2em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    </label>
    
                                    <input type="radio" id="kualitas_pekerjaan_4_<?= $data['id_penilaian']?>" name="kualitas_pekerjaan_<?= $data['id_penilaian']?>" value="4" <?= $data['kualitas_pekerjaan']==4 ?'checked="checked"':''?>>
                                    <label for="kualitas_pekerjaan_4_<?= $data['id_penilaian']?>" id="bintang">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="pointer" style="fill: #A9A9A9;" height="2.2em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-6">
                                <div class="card mt-3">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center justify-content-center gap-2 pointer fw-bold" data-bs-toggle="modal" data-bs-target="#ketepatan_waktu">
                                            Ketepatan Waktu
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex justify-content-evenly">
                                    <input type="radio" id="ketepatan_waktu_1_<?= $data['id_penilaian']?>" name="ketepatan_waktu_<?= $data['id_penilaian']?>" value="1" <?= $data['ketepatan_waktu']==1 ?'checked="checked"':''?>>
                                    <label for="ketepatan_waktu_1_<?= $data['id_penilaian']?>" id="bintang">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="pointer" style="fill: #A9A9A9;" height="2.2em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path  d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    </label>
                                      
                                    <input type="radio" id="ketepatan_waktu_2_<?= $data['id_penilaian']?>" name="ketepatan_waktu_<?= $data['id_penilaian']?>" value="2" <?= $data['ketepatan_waktu']==2 ?'checked="checked"':''?>>
                                     <label for="ketepatan_waktu_2_<?= $data['id_penilaian']?>" id="bintang">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="pointer" style="fill: #A9A9A9;" height="2.2em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    </label>
                                     
                                    <input type="radio" id="ketepatan_waktu_3_<?= $data['id_penilaian']?>" name="ketepatan_waktu_<?= $data['id_penilaian']?>" value="3" <?= $data['ketepatan_waktu']==3 ?'checked="checked"':''?>>
                                     <label for="ketepatan_waktu_3_<?= $data['id_penilaian']?>" id="bintang">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="pointer" style="fill: #A9A9A9;" height="2.2em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    </label>
    
                                    <input type="radio" id="ketepatan_waktu_4_<?= $data['id_penilaian']?>" name="ketepatan_waktu_<?= $data['id_penilaian']?>" value="4" <?= $data['ketepatan_waktu']==4 ?'checked="checked"':''?>>
                                     <label for="ketepatan_waktu_4_<?= $data['id_penilaian']?>" id="bintang">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="pointer" style="fill: #A9A9A9;" height="2.2em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-6">
                                <div class="card mt-3">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center justify-content-center gap-2 pointer fw-bold" data-bs-toggle="modal" data-bs-target="#etika">
                                            Etika
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex justify-content-evenly">
                                    <input type="radio" id="etika_1<?= $data['id_penilaian']?>" name="etika_<?= $data['id_penilaian']?>" value="1" <?= $data['etika']==1 ?'checked="checked"':''?>>
                                    <label for="etika_1<?= $data['id_penilaian']?>" id="bintang">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="pointer" style="fill: #A9A9A9;" height="2.2em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path  d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    </label>
                                      
                                    <input type="radio" id="etika_2_<?= $data['id_penilaian']?>" name="etika_<?= $data['id_penilaian']?>" value="2" <?= $data['etika']==2 ?'checked="checked"':''?>>
                                     <label for="etika_2_<?= $data['id_penilaian']?>" id="bintang">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="pointer" style="fill: #A9A9A9;" height="2.2em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    </label>
                                     
                                    <input type="radio" id="etika_3_<?= $data['id_penilaian']?>" name="etika_<?= $data['id_penilaian']?>" value="3" <?= $data['etika']==3 ?'checked="checked"':''?>>
                                     <label for="etika_3_<?= $data['id_penilaian']?>" id="bintang">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="pointer" style="fill: #A9A9A9;" height="2.2em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    </label>
    
                                    <input type="radio" id="etika_4_<?= $data['id_penilaian']?>" name="etika_<?= $data['id_penilaian']?>" value="4" <?= $data['etika']==4 ?'checked="checked"':''?>>
                                     <label for="etika_4_<?= $data['id_penilaian']?>" id="bintang">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="pointer" style="fill: #A9A9A9;" height="2.2em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-6">
                                <div class="card mt-3">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center justify-content-center gap-2 pointer fw-bold" data-bs-toggle="modal" data-bs-target="#komunikasi">
                                            Komunikasi
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex justify-content-evenly">
                                    <input type="radio" id="komunikasi_1<?= $data['id_penilaian']?>" name="komunikasi_<?= $data['id_penilaian']?>" value="1" <?= $data['komunikasi']==1 ?'checked="checked"':''?>>
                                    <label for="komunikasi_1<?= $data['id_penilaian']?>" id="bintang">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="pointer" style="fill: #A9A9A9;" height="2.2em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path  d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    </label>
                                      
                                    <input type="radio" id="komunikasi_2_<?= $data['id_penilaian']?>" name="komunikasi_<?= $data['id_penilaian']?>" value="2" <?= $data['komunikasi']==2 ?'checked="checked"':''?>>
                                     <label for="komunikasi_2_<?= $data['id_penilaian']?>" id="bintang">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="pointer" style="fill: #A9A9A9;" height="2.2em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    </label>
                                     
                                    <input type="radio" id="komunikasi_3_<?= $data['id_penilaian']?>" name="komunikasi_<?= $data['id_penilaian']?>" value="3" <?= $data['komunikasi']==3 ?'checked="checked"':''?>>
                                     <label for="komunikasi_3_<?= $data['id_penilaian']?>" id="bintang">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="pointer" style="fill: #A9A9A9;" height="2.2em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    </label>
    
                                    <input type="radio" id="komunikasi_4_<?= $data['id_penilaian']?>" name="komunikasi_<?= $data['id_penilaian']?>" value="4" <?= $data['komunikasi']==4 ?'checked="checked"':''?>>
                                     <label for="komunikasi_4_<?= $data['id_penilaian']?>" id="bintang">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="pointer" style="fill: #A9A9A9;" height="2.2em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-6">
                                <div class="card mt-3">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center justify-content-center gap-2 pointer fw-bold" data-bs-toggle="modal" data-bs-target="#inisiatif">
                                            Inisiatif   
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex justify-content-evenly">
                                    <input type="radio" id="inisiatif_1<?= $data['id_penilaian']?>" name="inisiatif_<?= $data['id_penilaian']?>" value="1" <?= $data['inisiatif']==1 ?'checked="checked"':''?>>
                                    <label for="inisiatif_1<?= $data['id_penilaian']?>" id="bintang">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="pointer" style="fill: #A9A9A9;" height="2.2em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path  d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    </label>
                                      
                                    <input type="radio" id="inisiatif_2_<?= $data['id_penilaian']?>" name="inisiatif_<?= $data['id_penilaian']?>" value="2" <?= $data['inisiatif']==2 ?'checked="checked"':''?>>
                                     <label for="inisiatif_2_<?= $data['id_penilaian']?>" id="bintang">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="pointer" style="fill: #A9A9A9;" height="2.2em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    </label>
                                     
                                    <input type="radio" id="inisiatif_3_<?= $data['id_penilaian']?>" name="inisiatif_<?= $data['id_penilaian']?>" value="3" <?= $data['inisiatif']==3 ?'checked="checked"':''?>>
                                     <label for="inisiatif_3_<?= $data['id_penilaian']?>" id="bintang">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="pointer" style="fill: #A9A9A9;" height="2.2em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    </label>
    
                                    <input type="radio" id="inisiatif_4_<?= $data['id_penilaian']?>" name="inisiatif_<?= $data['id_penilaian']?>" value="4" <?= $data['inisiatif']==4 ?'checked="checked"':''?>>
                                     <label for="inisiatif_4_<?= $data['id_penilaian']?>" id="bintang">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="pointer" style="fill: #A9A9A9;" height="2.2em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>            
                </div>
            <?php endforeach; ?>
               
        </div>
    
        <div class="row my-5 justify-content-center">
            <button type="submit" class="btn btn-success fw-bold" style="width: 20rem;">SIMPAN</button>
        </div>
    </form>

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

<script type="text/javascript">
    
    const bintangs = document.querySelectorAll("[id='bintang']");
    
    if(<?= $penilaian[0]['kualitas_pekerjaan']?> != 0 ){
        
        penilaian = <?php echo json_encode($penilaian); ?>;
        param = 0;
        penilaian.forEach(function(penilaian) {
            
            for(i = param; i <= param + parseInt(penilaian.kualitas_pekerjaan)-1;i++){
                bintangs[i].children[0].style.fill = "#FFD700";
            }
            param = param +4;

            for(i = param; i <= param + parseInt(penilaian.ketepatan_waktu)-1;i++){
                bintangs[i].children[0].style.fill = "#FFD700";
            }
            param = param +4;
            
            for(i = param; i <= param + parseInt(penilaian.etika)-1;i++){
                bintangs[i].children[0].style.fill = "#FFD700";
            }
            param = param +4;
            
            for(i = param; i <= param + parseInt(penilaian.komunikasi)-1;i++){
                bintangs[i].children[0].style.fill = "#FFD700";
            }
            param = param +4;
            
            for(i = param; i <= param + parseInt(penilaian.inisiatif)-1;i++){
                bintangs[i].children[0].style.fill = "#FFD700";
            }
            param = param +4;
            
    
        });
    }
    

    bintangs.forEach((bintang, index1)=>{
        bintang.addEventListener("click", function () {
        // console.log(index1);
        
        batas_bawah = index1 - ((index1%4)+1);0
        batas_atas_abu = Math.ceil((index1+1)/4)*4;
        bintangs.forEach((bintang,index2)=>{
            (index1 >= index2) && (batas_bawah < index2)? bintang.children[0].style.fill = "#FFD700":'';
            // (((index1+1)%4) == 1 && ((index2+1)%4) == 1 ) && index1==index2 ? bintang.children[0].style.fill = "#FFD700":"";
            (index1 < index2) && (batas_atas_abu > index2)? bintang.children[0].style.fill = "#A9A9A9":'';
        });
    });
    });

</script>