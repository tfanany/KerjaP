<!doctype html>

<?php
  $session = session();
  $name = $session->get('name');
  $email = $session->get('email');
  $id = $session->get('id');
  
?>
<html class="no-js" lang="zxx">

    <head>
       <meta charset="utf-8">
       <meta http-equiv="x-ua-compatible" content="ie=edge">
       <title>SEO HTML-5 Template </title>
       <meta name="description" content="">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta name="robots" content="noindex, follow">

       <!-- <link rel="manifest" href="site.webmanifest"> --> 
       <link rel="stylesheet" href="<?= base_url('css/regis.css') ?>">
       <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('img/favicon.ico') ?>">
       <!-- Place favicon.ico in the root directory -->

      <!-- CSS here -->
      <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
      <link rel="stylesheet" href="<?= base_url('css/owl.carousel.min.css') ?>">
      <link rel="stylesheet" href="<?= base_url('css/slicknav.css') ?>">
      <link rel="stylesheet" href="<?= base_url('css/animate.min.css') ?>">
      <link rel="stylesheet" href="<?= base_url('css/magnific-popup.css') ?>">
      <link rel="stylesheet" href="<?= base_url('css/fontawesome-all.min.css') ?>">
      <link rel="stylesheet" href="<?= base_url('css/themify-icons.css') ?>">
      <link rel="stylesheet" href="<?= base_url('css/slick.css') ?>">
      <link rel="stylesheet" href="<?= base_url('css/nice-select.css') ?>">
      <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
      <link rel="stylesheet" href="<?= base_url('css/responsive.css') ?>">
      <link rel="stylesheet" href="<?= base_url('css/multistep.css')?>">
      <link rel="stylesheet" href="<?= base_url('css/table.css') ?>">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    </head>

<body>

   <!-- Preloader Start -->
   <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
               <div class="preloader-circle"></div>
               <div class="preloader-img pere-text">
                  <img src="<?= base_url('img/logo/logo_pmb.png') ?>" alt="">
               </div>
            </div>
      </div>
   </div>
   <!-- Preloader Start-->

    <header>
      <!-- Header Start -->
     <div class="header-area header-transparrent ">
          <div class="main-header header-sticky">
              <div class="container">
                  <div class="row align-items-center">
                      <!-- Logo -->
                      <div class="col-xl-2 col-lg-2 col-md-1">
                          <div class="logo">
                              <a href="index.html"><img src="<?= base_url('img/logo/logo_pmb.png') ?>" alt=""></a>
                          </div>
                      </div>
                      <div class="col-xl-8 col-lg-8 col-md-8">
                          <!-- Main-menu -->
                          <div class="main-menu f-right d-none d-lg-block">
                              <nav> 
                                  <ul id="navigation">    
                                      <li class="active">
                            <a href="index.php?view=home">
                                Beranda
                            </a>
                        </li>
                        <li class="dropdown ">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Informasi
                            </a>
                            <ul class="dropdown-menu">
                                <li ><a href="index.php?view=persyaratan">Persyaratan Pendaftaran</a></li>
                                <li ><a href="index.php?view=jadwal">Jadwal Pendaftaran</a></li>
                                <li ><a href="index.php?view=prosedur">Prosedur Pendaftaran</a></li>

                                <li><a href="index.php?view=download">Download Brosur</a></li>

                                <!-- One Page -->
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Informasi Umum</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.php?view=biaya">Biaya Pendidikan</a></li>
                                        <li><a href="index.php?view=beasiswa">Daftar Beasiswa</a></li>
                                        <li><a href="index.php?view=ukm">Daftar Unit Kegiatan Mahasiswa</a></li>
                                    </ul>
                                </li>
                                <!-- End One Page -->

                            
                            </ul>
                        </li>

                        <li class="dropdown ">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Jalur Pendaftaran
                            </a>
                            <ul class="dropdown-menu">
                                

                                
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Program Reguler</a>
                                    <ul class="dropdown-menu">
                                        <li><a target="_blank" href="index.php?view=reguler">- Jalur Reguler</a></li>
                                        <li><a target="_blank" href="index.php?view=reguler">- Jalur Prestasi</a></li>
                                        <li><a target="_blank" href="index.php?view=reguler">- Jalur KIP-K</a></li>
                                        <li><a target="_blank" href="index.php?view=reguler">- Jalur UTBK</a></li>
                                    </ul>
                                </li> 

                                <li ><a href="index.php?view=alih_pt">Program Alih Perguruan Tinggi</a></li>
                                <li ><a href="index.php?view=non_reguler">Program Non-reguler</a></li>
                                <li><a href="index.php?view=alih_jalur">Program Alih Jalur</a></li>
                                <!-- End One Page -->

                            
                            </ul>
                        </li>

                        

                        <li>
                            <a href="index.php?view=pengumuman">
                                Pengumuman
                            </a>
                        </li>



                        <li>
                            <a href="index.php?view=kontak_kami">
                                Kontak 
                            </a>
                        </li>
                                  </ul>
                              </nav>
                          </div>
                      </div>             
                      <div class="col-xl-2 col-lg-2 col-md-3">
                          <div class="header-right-btn f-right d-none d-lg-block">
                              <a href="/regist" class="btn header-btn">Daftar</a>
                          </div>
                      </div>
                      <!-- Mobile Menu -->
                      <div class="col-12">
                          <div class="mobile_menu d-block d-lg-none"></div>
                      </div>
                  </div>
              </div>
          </div>
     </div>
      <!-- Header End -->
  </header>


     <!-- Start Input Data -->
      
          <div class="container">
          <div class="row">
            <div class="profile-nav col-md-3">
                <div class="panel">
                    <div class="user-heading round">
                        <a href="#">
                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                        </a>
                        <h1><?php echo $name ?></h1>
                        <p><?php echo $email ?></p>
                    </div>

                    <ul class="nav nav-pills nav-stacked">
                      <li class="active"><a href="/dashboard"><i class="fa fa-bar-chart" aria-hidden="true"></i>Status</a></li>
                      <li><a href="/datauser"> <i class="fa fa-user"></i> Data Diri</a></li>
                      <li><a href="/datasekolah"> <i class="fa fa-list-ul" aria-hidden="true"></i> Data Sekolah</a></li>
                      <li><a href="/jalurdaftar"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Jalur Pendaftaran</a></li>
                      <li><a href="/prestasi"><i class="fa fa-trophy" aria-hidden="true"></i> Prestasi Yang diraih</a></li>
                      <li><a href="/informasi"><i class="fa fa-users" aria-hidden="true"></i> Informasi ITDA</a></li>
                      <li><a href="/upload"><i class="fa fa-file-image-o" aria-hidden="true"></i>Upload Berkas</a></li>
                      <li><a href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i></i>Logout</a></li>

                    </ul>
                </div>
            </div>
            <div class="profile-info col-md-9">
                <div class="panel">
                  <h3>Status </h3>
                    <p>Status data yang anda masukan </p>

                      <div class="container">
                      
                        <!-- <form action="upload" method="post" enctype="multipart/form-data"> -->
                            <table>
                                  <tr>
                                    <th style="width:50%">Keterangan Berkas</th>
                                    <th>Status</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                  </tr>
                                  <tr>
                                    <td>Kartu Identitas (WAJIB)</td>
                                    <?php
                                    $sql ="select * from uploadpict where id_user = ".$id." AND nama_file='Kartu Identitas'";
                                    $db      = \Config\Database::connect();
                                    $builder = $db->table('uploadpict');
                                    $builder->where('id_user', $id);
                                    $builder->where('nama_file', 'Kartu Identitas');
                                    $output = $builder->countAll();
                                    print_r($output,true);
                                    ?>
                                    <td><input class= "status" type="submit" name="status" value="Kosong" style="margin-top: 0px;  width: 100%; padding: 7px 10px;border: none;border-radius: 4px; cursor: pointer; background-color: #343a4094;margin-left: 0px;" /> </td>
                                    
                                    <td><img src="<=base_url('img/'[nama_file])?>" width="100"></td>
                                    <form action="upload/process" method="post" enctype="multipart/form-data">
                                      <td>
                                        <input class= "upload" type="file" name="file_upload" id= "upload" />
                                        <input type="hidden" name="id_user" value="<?php echo $id; ?>" />
                                        <input type="hidden" name="id_form" value="Kartu Identitas" />
                                        <input class= "uploadfile" type="submit" name="uploadfile" id= "uploadfile" value="Upload File" style="margin-top: 0px;  width: 70%; padding: 7px 10px;border: none;border-radius: 4px; cursor: pointer; background-color: #2082bb;margin-left: 25px;" />
                                      </td>
                                    </form>
                                  </tr>
                                  <tr>
                                    <td>Scan Raport Kelas X Semester </td>
                                    <td> <input class= "status" type="submit" name="status" value="Kosong" style="margin-top: 0px;  width: 100%; padding: 7px 10px ;border: none;border-radius: 4px; cursor: pointer; background-color: #343a4094;margin-left: 0px;" /> </td>
                                    
                                    <td><input class= "gambar" type="submit" name="gambar" value="Hapus" style="margin-top: 0px;  width: 100%; padding: 7px 10px ;border: none;border-radius: 4px; cursor: pointer; background-color: #ff4a4a;margin-left: 0px;"/></td>
                                    <form action="upload/process" method="post" enctype="multipart/form-data">
                                      <td>
                                        <input class= "upload" type="file" name="file_upload" id= "upload" />
                                        <input type="hidden" name="id_user" value="<?php echo $id; ?>" />
                                        <input type="hidden" name="id_form" value="Scan Raport Kelas X Semester" />
                                        <input class= "uploadfile" type="submit" name="uploadfile" id= "uploadfile" value="Upload File" style="margin-top: 0px;  width: 70%; padding: 7px 10px;border: none;border-radius: 4px; cursor: pointer; background-color: #2082bb;margin-left: 25px;" />
                                      </td>
                                    </form>
                                  </tr>
                                  <tr>
                                    <td>Scan Raport Kelas X Semester 2 (Wajib)</td>
                                    <td> <input class= "status" type="submit" name="status" value="Kosong" style="margin-top: 0px;  width: 100%; padding: 7px 10px ;border: none;border-radius: 4px; cursor: pointer; background-color: #343a4094;margin-left: 0px;" /> </td>
                                    
                                    <td><input class= "gambar" type="submit" name="gambar" value="Hapus" style="margin-top: 0px;  width: 100%; padding: 7px 10px ;border: none;border-radius: 4px; cursor: pointer; background-color: #ff4a4a;margin-left: 0px;"/></td>
                                    <form action="upload/process" method="post" enctype="multipart/form-data">
                                      <td>
                                        <input class= "upload" type="file" name="file_upload" id= "upload" />
                                        <input type="hidden" name="id_user" value="<?php echo $id; ?>" />
                                        <input type="hidden" name="id_form" value="Scan Raport Kelas X Semester 2" />
                                        <input class= "uploadfile" type="submit" name="uploadfile" id= "uploadfile" value="Upload File" style="margin-top: 0px;  width: 70%; padding: 7px 10px;border: none;border-radius: 4px; cursor: pointer; background-color: #2082bb;margin-left: 25px;" />
                                      </td>
                                    </form>
                               
                                    </tr>
                                  <tr>
                                    <td>Scan Raport Kelas XI Semester 1 (Wajib)</td>
                                    <td> <input class= "status" type="submit" name="status" value="Kosong" style="margin-top: 0px;  width: 100%; padding: 7px 10px ;border: none;border-radius: 4px; cursor: pointer; background-color: #343a4094;margin-left: 0px;" /> </td>
                                    
                                    <td><input class= "gambar" type="submit" name="gambar" value="Hapus" style="margin-top: 0px;  width: 100%; padding: 7px 10px ;border: none;border-radius: 4px; cursor: pointer; background-color: #ff4a4a;margin-left: 0px;"/></td>
                                    <form action="upload/process" method="post" enctype="multipart/form-data">
                                      <td>
                                        <input class= "upload" type="file" name="file_upload" id= "upload" />
                                        <input type="hidden" name="id_user" value="<?php echo $id; ?>" />
                                        <input type="hidden" name="id_form" value="Scan Raport Kelas XI Semester 1" />
                                        <input class= "uploadfile" type="submit" name="uploadfile" id= "uploadfile" value="Upload File" style="margin-top: 0px;  width: 70%; padding: 7px 10px;border: none;border-radius: 4px; cursor: pointer; background-color: #2082bb;margin-left: 25px;" />
                                      </td>
                                    </form>
                                  </tr>
                                  <tr>
                                    <td>Scan Raport Kelas XI Semester 2 (Wajib)</td>
                                    <td> <input class= "status" type="submit" name="status" value="Kosong" style="margin-top: 0px;  width: 100%; padding: 7px 10px ;border: none;border-radius: 4px; cursor: pointer; background-color: #343a4094;margin-left: 0px;" /> </td>
                                    
                                    <td><input class= "gambar" type="submit" name="gambar" value="Hapus" style="margin-top: 0px;  width: 100%; padding: 7px 10px ;border: none;border-radius: 4px; cursor: pointer; background-color: #ff4a4a;margin-left: 0px;"/></td>
                                    <form action="upload/process" method="post" enctype="multipart/form-data">
                                      <td>
                                        <input class= "upload" type="file" name="file_upload" id= "upload" />
                                        <input type="hidden" name="id_user" value="<?php echo $id; ?>" />
                                        <input type="hidden" name="id_form" value="Scan Raport Kelas XI Semester 2" />
                                        <input class= "uploadfile" type="submit" name="uploadfile" id= "uploadfile" value="Upload File" style="margin-top: 0px;  width: 70%; padding: 7px 10px;border: none;border-radius: 4px; cursor: pointer; background-color: #2082bb;margin-left: 25px;" />
                                      </td>
                                    </form>
                                  </tr>
                                  <tr>
                                    <td>Bukti Pembayaran Pendaftaran (Wajib)</td>
                                    <td> <input class= "status" type="submit" name="status" value="Kosong" style="margin-top: 0px;  width: 100%; padding: 7px 10px ;border: none;border-radius: 4px; cursor: pointer; background-color: #343a4094;margin-left: 0px;" /> </td>
                                    
                                    <td><input class= "gambar" type="submit" name="gambar" value="Hapus" style="margin-top: 0px;  width: 100%; padding: 7px 10px ;border: none;border-radius: 4px; cursor: pointer; background-color: #ff4a4a;margin-left: 0px;"/></td>
                                    <form action="upload/process" method="post" enctype="multipart/form-data">
                                      <td>
                                        <input class= "upload" type="file" name="file_upload" id= "upload" />
                                        <input type="hidden" name="id_user" value="<?php echo $id; ?>" />
                                        <input type="hidden" name="id_form" value="Bukti Pembayaran Pendaftaran" />
                                        <input class= "uploadfile" type="submit" name="uploadfile" id= "uploadfile" value="Upload File" style="margin-top: 0px;  width: 70%; padding: 7px 10px;border: none;border-radius: 4px; cursor: pointer; background-color: #2082bb;margin-left: 25px;" />
                                      </td>
                                    </form>
                                  </tr>
                                  <tr>
                                    <td>Akte Kelahiran (Wajib)</td>
                                    <td> <input class= "status" type="submit" name="status" value="Kosong" style="margin-top: 0px;  width: 100%; padding: 7px 10px ;border: none;border-radius: 4px; cursor: pointer; background-color: #343a4094;margin-left: 0px;" /> </td>
                                    
                                    <td><input class= "gambar" type="submit" name="gambar" value="Hapus" style="margin-top: 0px;  width: 100%; padding: 7px 10px ;border: none;border-radius: 4px; cursor: pointer; background-color: #ff4a4a;margin-left: 0px;"/></td>
                                    <form action="upload/process" method="post" enctype="multipart/form-data">
                                      <td>
                                        <input class= "upload" type="file" name="file_upload" id= "upload" />
                                        <input type="hidden" name="id_user" value="<?php echo $id; ?>" />
                                        <input type="hidden" name="id_form" value="Akte Kelahiran" />
                                        <input class= "uploadfile" type="submit" name="uploadfile" id= "uploadfile" value="Upload File" style="margin-top: 0px;  width: 70%; padding: 7px 10px;border: none;border-radius: 4px; cursor: pointer; background-color: #2082bb;margin-left: 25px;" />
                                      </td>
                                    </form>
                                  </tr>
                                  <tr>
                                    <td>Foto (Wajib)</td>
                                    <td> <input class= "status" type="submit" name="status" value="Kosong" style="margin-top: 0px;  width: 100%; padding: 7px 10px ;border: none;border-radius: 4px; cursor: pointer; background-color: #343a4094;margin-left: 0px;" /> </td>
                                    
                                    <td><input class= "gambar" type="submit" name="gambar" value="Hapus" style="margin-top: 0px;  width: 100%; padding: 7px 10px ;border: none;border-radius: 4px; cursor: pointer; background-color: #ff4a4a;margin-left: 0px;"/></td>
                                    <form action="upload/process" method="post" enctype="multipart/form-data">
                                      <td>
                                        <input class= "upload" type="file" name="file_upload" id= "upload" />
                                        <input type="hidden" name="id_user" value="<?php echo $id; ?>" />
                                        <input type="hidden" name="id_form" value="Foto" />
                                        <input class= "uploadfile" type="submit" name="uploadfile" id= "uploadfile" value="Upload File" style="margin-top: 0px;  width: 70%; padding: 7px 10px;border: none;border-radius: 4px; cursor: pointer; background-color: #2082bb;margin-left: 25px;" />
                                      </td>
                                    </form>
                                  </tr>
                                  <tr>
                                    <td>Scan Ijazah SMA atau SMP (Wajib)</td>
                                    <td> <input class= "status" type="submit" name="status" value="Kosong" style="margin-top: 0px;  width: 100%; padding: 7px 10px ;border: none;border-radius: 4px; cursor: pointer; background-color: #343a4094;margin-left: 0px;" /> </td>
                                    
                                    <td><input class= "gambar" type="submit" name="gambar" value="Hapus" style="margin-top: 0px;  width: 100%; padding: 7px 10px ;border: none;border-radius: 4px; cursor: pointer; background-color: #ff4a4a;margin-left: 0px;"/></td>
                                    <form action="upload/process" method="post" enctype="multipart/form-data">
                                      <td>
                                        <input class= "upload" type="file" name="file_upload" id= "upload" />
                                        <input type="hidden" name="id_user" value="<?php echo $id; ?>" />
                                        <input type="hidden" name="id_form" value="Scan Ijazah SMA atau SMP" />
                                        <input class= "uploadfile" type="submit" name="uploadfile" id= "uploadfile" value="Upload File" style="margin-top: 0px;  width: 70%; padding: 7px 10px;border: none;border-radius: 4px; cursor: pointer; background-color: #2082bb;margin-left: 25px;" />
                                      </td>
                                    </form>
                                  </tr>
                                  <tr>
                                    <td>Kartu Keluarga (Wajib)</td>
                                    <td> <input class= "status" type="submit" name="status" value="Kosong" style="margin-top: 0px;  width: 100%; padding: 7px 10px ;border: none;border-radius: 4px; cursor: pointer; background-color: #343a4094;margin-left: 0px;" /> </td>
                                    
                                    <td><input class= "gambar" type="submit" name="gambar" value="Hapus" style="margin-top: 0px;  width: 100%; padding: 7px 10px ;border: none;border-radius: 4px; cursor: pointer; background-color: #ff4a4a;margin-left: 0px;"/></td>
                                    <form action="upload/process" method="post" enctype="multipart/form-data">
                                      <td>
                                        <input class= "upload" type="file" name="file_upload" id= "upload" />
                                        <input type="hidden" name="id_user" value="<?php echo $id; ?>" />
                                        <input type="hidden" name="id_form" value="Kartu Keluarga" />
                                        <input class= "uploadfile" type="submit" name="uploadfile" id= "uploadfile" value="Upload File" style="margin-top: 0px;  width: 70%; padding: 7px 10px;border: none;border-radius: 4px; cursor: pointer; background-color: #2082bb;margin-left: 25px;" />
                                      </td>
                                    </form>
                                  </tr>
                                  <tr>
                                    <td>Scan Sertifikat UTBK (Wajib bagi pendaftar Jalur UTBK((TAMBAHAN)</td>
                                    <td> <input class= "status" type="submit" name="status" value="Kosong" style="margin-top: 0px;  width: 100%; padding: 7px 10px ;border: none;border-radius: 4px; cursor: pointer; background-color: #343a4094;margin-left: 0px;" /> </td>
                                    
                                    <td><input class= "gambar" type="submit" name="gambar" value="Hapus" style="margin-top: 0px;  width: 100%; padding: 7px 10px ;border: none;border-radius: 4px; cursor: pointer; background-color: #ff4a4a;margin-left: 0px;"/></td>
                                    <form action="upload/process" method="post" enctype="multipart/form-data">
                                      <td>
                                        <input class= "upload" type="file" name="file_upload" id= "upload" />
                                        <input type="hidden" name="id_user" value="<?php echo $id; ?>" />
                                        <input type="hidden" name="id_form" value="Scan Sertifikat UTBK" />
                                        <input class= "uploadfile" type="submit" name="uploadfile" id= "uploadfile" value="Upload File" style="margin-top: 0px;  width: 70%; padding: 7px 10px;border: none;border-radius: 4px; cursor: pointer; background-color: #2082bb;margin-left: 25px;" />
                                      </td>
                                    </form>
                                  </tr>
                                  <tr>
                                    <td>Scan Piagam Presentasi(jika ada)(TAMBAHAN)</td>
                                    <td> <input class= "status" type="submit" name="status" value="Kosong" style="margin-top: 0px;  width: 100%; padding: 7px 10px ;border: none;border-radius: 4px; cursor: pointer; background-color: #343a4094;margin-left: 0px;" /> </td>
                                    
                                    <td><input class= "gambar" type="submit" name="gambar" value="Hapus" style="margin-top: 0px;  width: 100%; padding: 7px 10px ;border: none;border-radius: 4px; cursor: pointer; background-color: #ff4a4a;margin-left: 0px;"/></td>
                                    <form action="upload/process" method="post" enctype="multipart/form-data">
                                      <td>
                                        <input class= "upload" type="file" name="file_upload" id= "upload" />
                                        <input type="hidden" name="id_user" value="<?php echo $id; ?>" />
                                        <input type="hidden" name="id_form" value="Scan Piagam Presentasi" />
                                        <input class= "uploadfile" type="submit" name="uploadfile" id= "uploadfile" value="Upload File" style="margin-top: 0px;  width: 70%; padding: 7px 10px;border: none;border-radius: 4px; cursor: pointer; background-color: #2082bb;margin-left: 25px;" />
                                      </td>
                                    </form>
                                  </tr>
                                </table>
                          
                      <!-- </form> -->
                    </div>
                  </div>
                </div>
 
          </div>
         </div>
     <!-- End Input Data -->

    <footer>

     <!-- Footer Start-->
<div class="footer-main" data-background="<?= base_url()?>template/front-end/assets/img/shape/footer_bg.png">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-3 col-md-4 col-sm-8">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                              <!-- logo -->
                             <div class="footer-logo">
                                 <a href="index.html"><img src="template/front-end/images/logo_pmb.png" alt="" height="60"></a>
                             </div>
                             <div class="footer-tittle">
                                 <div class="footer-pera">
                                     <p class="info1">Portal PMB ITDA ini merupakan portal yang digunakan sebagai media pendaftaran mahasiswa baru ITDA Yogyakarta.</p>
                                </div>
                             </div>
                             <div class="footer-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                            </div>
                         </div>
                       </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>PENGUNGUMAN</h4>
                                <ul>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="about.html">Features</a></li>
                                    <li><a href="single-blog.html">Pricing</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Support</h4>
                                <ul>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#"> Sitemap</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Report a bugb</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>kONTAK KAMI</h4>
                                <ul>
                                 <li><a href="#">Jalan Janti Blok-R Lanud Adisutjipto Yogyakarta, Indonesia</a></li>
                                 <li><a href="#">Phone : 0878-5866-7788 (TELP/SMS/WA)</a></li>
                                 <li><a href="#">Fax : (0274) 451 263</a></li>
                                 <li><a href="#">Email : pmb@itda.ac.id</a></li>
                             </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex align-items-center">
                         <div class="col-xl-12 ">
                             <div class="footer-copy-right text-center">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
      </div>
       <!-- Footer End-->

  </footer>
   
<!-- JS here -->
    
        <!-- All JS Custom Plugins Link Here here -->
        <script src="<?= base_url('js/vendor/modernizr-3.5.0.min.js') ?>"></script>
        
        <!-- Jquery, Popper, Bootstrap -->
        <script src="<?= base_url('js/vendor/jquery-1.12.4.min.js') ?>"></script>
        <script src="<?= base_url('js/popper.min.js') ?>"></script>
        <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
        <!-- Jquery Mobile Menu -->
        <script src="<?= base_url('js/jquery.slicknav.min.js') ?>"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="<?= base_url('js/owl.carousel.min.js') ?>"></script>
        <script src="<?= base_url('js/slick.min.js') ?>"></script>
        <!-- Date Picker -->
        <script src="<?= base_url('js/gijgo.min.js') ?>"></script>
        <!-- One Page, Animated-HeadLin -->
        <script src="<?= base_url('js/wow.min.js') ?>"></script>
        <script src="<?= base_url('js/animated.headline.js') ?>"></script>
        <script src="<?= base_url('js/jquery.magnific-popup.js') ?>"></script>

        <!-- Scrollup, nice-select, sticky -->
        <script src="<?= base_url('js/jquery.scrollUp.min.js') ?>"></script>
        <script src="<?= base_url('js/jquery.nice-select.min.js') ?>"></script>
        <script src="<?= base_url('js/jquery.sticky.js') ?>"></script>
        
        <!-- contact js -->
        <script src="<?= base_url('js/contact.js') ?>"></script>
        <script src="<?= base_url('js/jquery.form.js') ?>"></script>
        <script src="<?= base_url('js/jquery.validate.min.js') ?>"></script>
        <script src="<?= base_url('js/mail-script.js') ?>"></script>
        <script src="<?= base_url('js/jquery.ajaxchimp.min.js') ?>"></script>
        
        <!-- Jquery Plugins, main Jquery -->    
        <script src="<?= base_url('js/plugins.js') ?>"></script>
        <script src="<?= base_url('js/main.js') ?>"></script>

        <!-- Jquery Registrasi -->
        <script src="<?= base_url('js/vendor/jquery.min.js') ?>"></script>
        <script src="<?= base_url('js/regismain.js') ?>"></script>

        <!-- Jquery Multisteps -->

        <script src="<?= base_url('js/multi.js')?>"></script>
</body>

</html>