<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title><?= $judul; ?></title>
    <style type="text/css">
      .bg-biru{
        background-color: #0b4899;
      }

      .bg-lainnya{
        background-color: #EE82EE;
      }

      .hide{
        display: none;
      }
      
      .pointer{
        cursor: pointer;
      }
    </style>

</head>
<body>

  <nav class="navbar navbar-expand-lg bg-biru" >
    <div class="container">
      <a class="navbar-brand text-white fw-bold" href="#">SIPEKERJA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-white " style="font-size: small;" aria-current="page" href="<?= base_url()?>Kegiatan/">Daftar Kegiatan</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link text-white" style="font-size: small;" href="<?= base_url()?>Penilaian/">Penilaian Kinerja</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link text-white" style="font-size: small;" href="<?= base_url()?>Mitra/">Daftar Mitra</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" style="font-size: small;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Rekap Kinerja
            </a>
            <ul class="dropdown-menu bg-biru">
              <li><a class="dropdown-item text-white" href="<?= base_url()?>Penilaian/rekap_mitra">Rekap Kinerja Mitra</a></li>
              <li><a class="dropdown-item text-white" href="<?= base_url()?>Penilaian/rekap_kegiatan">Rekap Kinerja Kegiatan</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  