<style type="text/css">
    .menuuu{
        border-bottom: 1px solid #4e4e52;
        color: #ffffff;
        clear: both;
        display: block;
        font-family: 'Open Sans';
        font-size: 14px;
        font-weight: 700;
        line-height: 50px;
        padding: 15px 0 0 0;
        text-transform: uppercase;
        width: 100%;
    }


</style>
<ul class="nav navbar-nav" style="background-color:#343a40; ">

                    <li>
                        <a href="<?php echo $siteurl; ?>/views/dashboard/admin/index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-gears"></i>Manajemen Akun </a>
                        <ul class="sub-menu children dropdown-menu" style="background-color:#343a40;">
                            <li><i class="menu-icon fa fa-users" ></i><a href="<?php echo $siteurl; ?>/views/login/akun/index.php">Akun</a></li>
                            <li><i class="menu-icon fa  fa-briefcase"></i><a href="<?php echo $siteurl; ?>/views/login/jabatan/index.php">Jabatan</a></li>
                            <li><i class="menu-icon fa fa-paper-plane" ></i><a href="<?php echo $siteurl; ?>/views/login/level/index.php">Hak Akses Akun</a></li>
                        </ul>
                    </li>
                   

                    <h3 class="menuuu" style="border-bottom:1px; border-bottom-style:solid; border-bottom-color:#f8f9f7;">Menu</h3>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa ti-bookmark-alt"></i>PSB & Daftar Ulang</a>
                        <ul class="sub-menu children dropdown-menu" style="background-color:#343a40;">
                            <li><i class="menu-icon fa ti-file"></i><a href="<?php echo $siteurl; ?>/views/kesiswaan/pendataan/index.php">List Pendaftaran</a></li>
                            <li><i class="menu-icon fa ti-files"></i><a href="<?php echo $siteurl; ?>/views/kesiswaan/seleksi/index.php">Seleksi</a></li>
                            <li><i class="menu-icon fa ti-reload"></i><a href="<?php echo $siteurl; ?>/views/kesiswaan/pendaftaran/index.php">Pendaftaran Ulang</a></li>
                            <li><i class="menu-icon fa ti-reload"></i><a href="<?php echo $siteurl; ?>/views/kesiswaan/daftarulang/index.php">Daftar Diterima</a></li>
                            <li><i class="menu-icon fa ti-reload"></i><a href="<?php echo $siteurl; ?>/views/kesiswaan/daftarulang/index1.php">Daftar Tidak Diterima</a></li> 
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa ti-bookmark-alt"></i>Siswa & Alumni</a>
                        <ul class="sub-menu children dropdown-menu" style="background-color:#343a40;">
                            <li><i class="menu-icon fa ti-reload"></i><a href="<?php echo $siteurl; ?>/views/siswa/biodata/index.php">Data Seluruh Siswa</a></li>
                            <li><i class="menu-icon fa ti-reload"></i><a href="<?php echo $siteurl; ?>/views/siswa/pindahan/index.php">Siswa Pindahan</a></li>
                            <li><i class="menu-icon fa ti-reload"></i><a href="<?php echo $siteurl; ?>/views/siswa/siswakeluar/index.php">Siswa Keluar / DO</a></li>
                            <li><i class="menu-icon fa ti-reload"></i><a href="<?php echo $siteurl; ?>/views/siswa/alumni/index.php">Alumni</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa ti-bookmark-alt"></i>Guru</a>
                        <ul class="sub-menu children dropdown-menu" style="background-color:#343a40;">
                            <li><i class="menu-icon fa ti-user"></i><a href="<?php echo $siteurl; ?>/views/admin/guru.php">Data guru</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa ti-bookmark-alt"></i>Manajemen Data</a>
                        <ul class="sub-menu children dropdown-menu" style="background-color:#343a40;">
                            <li><i class="menu-icon fa ti-receipt"></i><a href="<?php echo $siteurl; ?>/views/admin/mapel.php">Mata Pelajaran</a></li>
                            <li><i class="menu-icon ti-cup"></i><a href="<?php echo $siteurl; ?>/views/admin/Ruangan.php">Ruangan</a></li>
                            <li><i class="menu-icon ti-home"></i><a href="<?php echo $siteurl; ?>/views/admin/hari.php">Hari</a></li>
                            <li><i class="menu-icon ti-home"></i><a href="<?php echo $siteurl; ?>/views/admin/kelas.php">Kelas</a></li>
                            <li><i class="menu-icon fa ti-reload"></i><a href="<?php echo $siteurl; ?>/views/manage/kuota/index.php">Kuota Jurusan</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa ti-bookmark-alt"></i>Jadwal & Ruangan</a>
                        <ul class="sub-menu children dropdown-menu" style="background-color:#343a40;">
                            <li><i class="menu-icon ti-home"></i><a href="<?php echo $siteurl; ?>/views/admin/jadwaladmin.php">Jadwal Siswa</a></li>
                            <li><i class="menu-icon ti-home"></i><a href="<?php echo $siteurl; ?>/views/pembagian_kelas2.php">Pembagian Kelas</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa ti-bookmark-alt"></i>Beasiswa</a>
                        <ul class="sub-menu children dropdown-menu" style="background-color:#343a40;">
                            <li><i class="menu-icon fa ti-file"></i><a href="<?php echo $siteurl; ?>/views/beasiswa/siswa/beasiswa.php">Pengajuan</a></li>
                            <li><i class="menu-icon fa ti-files"></i><a href="<?php echo $siteurl; ?>/views/beasiswa/survey/index.php">Survey</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa ti-bookmark-alt"></i>Absensi Siswa</a>
                        <ul class="sub-menu children dropdown-menu" style="background-color:#343a40;">
                           <!--  <li><i class="menu-icon fa ti-files"></i><a href="<?php echo $siteurl; ?>/views/absensi/absensisiswa/absenmasuk.php">Absensi Masuk</a></li>
                            <li><i class="menu-icon fa ti-files"></i><a href="<?php echo $siteurl; ?>/views/absensi/absensisiswa/absenpulang.php">Absensi Pulang</a></li> -->
                            <li><i class="menu-icon fa ti-files"></i><a href="<?php echo $siteurl; ?>/views/absensi/absensisiswa/index.php">Absensi</a></li>
                            <li><i class="menu-icon fa ti-reload"></i><a href="<?php echo $siteurl; ?>/views/absensi/absensisiswa/rekap.php">Rekap Absensi</a></li>
                        </ul>

                    <li>
                        <a href="<?php echo $siteurl; ?>/views/jurnalkelas/jurnalkelas.php"> <i class="menu-icon fa ti-bookmark-alt"></i>Jurnal Harian Kelas</a>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa ti-bookmark-alt"></i>Laporan Nilai</a>
                        <ul class="sub-menu children dropdown-menu" style="background-color:#343a40;">
                            <!--<li><i class="menu-icon fa ti-id-badge"></i><a href="<?php echo $siteurl; ?>/views/laporannilai/nilaiharian/list_kelas.php">Nilai Harian</a></li>
                            <li><i class="menu-icon fa ti-id-badge"></i><a href="<?php echo $siteurl; ?>/views/laporannilai/nilaiuts_uas/list_kelas.php">NIlai UTS & UAS</a></li>-->
                            <li><i class="menu-icon fa ti-id-badge"></i><a href="<?php echo $siteurl; ?>/views/laporannilai/transkripnilai/list_kelas.php">Transkrip Nilai</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa ti-bookmark-alt"></i>Prakerin</a>
                        <ul class="sub-menu children dropdown-menu" style="background-color:#343a40;">
                            <li><i class="menu-icon fa ti-id-badge"></i><a href="<?php echo $siteurl; ?>/views/admin_staff/perusahaan.php">Data DUDI</a></li>
                            <li><i class="menu-icon fa ti-id-badge"></i><a href="<?php echo $siteurl; ?>/views/admin_Staff/pendaftaran_prakerin.php">Data Prakerin</a></li>
                            <li><i class="menu-icon fa ti-id-badge"></i><a href="<?php echo $siteurl; ?>/views/admin_Staff/jurnal_prakerin.php">Jurnal Prakerin</a></li>
                            <li><i class="menu-icon fa ti-id-badge"></i><a href="<?php echo $siteurl; ?>/views/admin_Staff/nilai_prakerin.php">Nilai Prakerin</a></li>
                        </ul>
                    </li>

</ul>