<ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo $siteurl; ?>/views/dashboard/admin/index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon ti-user"></i>Profil</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa ti-bookmark-alt"></i>Manajemen Akun</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa ti-file"></i><a href="<?php echo $siteurl; ?>/views/login/akun/index.php">Akun</a></li>
                            <li><i class="menu-icon fa ti-files"></i><a href="<?php echo $siteurl; ?>/views/login/jabatan/index.php">Jabatan</a></li>
                            <li><i class="menu-icon fa ti-reload"></i><a href="<?php echo $siteurl; ?>/views/login/level/index.php">Hak Akses Akun</a></li>
                        </ul>
                    </li>
                   

                    <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa ti-bookmark-alt"></i>PSB & Daftar Ulang</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa ti-file"></i><a href="<?php echo $siteurl; ?>/views/kesiswaan/pendataan/index.php">Pendataan</a></li>
                            <li><i class="menu-icon fa ti-files"></i><a href="<?php echo $siteurl; ?>/views/kesiswaan/pendaftaran/index.php">Pendaftaran</a></li>
                            <li><i class="menu-icon fa ti-reload"></i><a href="<?php echo $siteurl; ?>/views/kesiswaan/seleksi/index.php">Seleksi</a></li>
                            <li><i class="menu-icon fa ti-reload"></i><a href="<?php echo $siteurl; ?>/views/kesiswaan/daftarulang/index_tambah.php">Daftar Diterima</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa ti-bookmark-alt"></i>Pengelolaan Siswa</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa ti-reload"></i><a href="<?php echo $siteurl; ?>/views/siswa/biodata/index.php">Data Seluruh Siswa</a></li>
                            <li><i class="menu-icon fa ti-reload"></i><a href="<?php echo $siteurl; ?>/views/siswa/pindahan/index.php">Siswa Pindahan</a></li>
                            <li><i class="menu-icon fa ti-reload"></i><a href="<?php echo $siteurl; ?>/views/siswa/siswakeluar/index.php">Siswa Keluar/DO</a></li>
                            <li><i class="menu-icon fa ti-reload"></i><a href="<?php echo $siteurl; ?>/views/siswa/alumni/index.php">Alumni</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa ti-bookmark-alt"></i>Manage</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa ti-reload"></i><a href="<?php echo $siteurl; ?>/views/manage/kuota/index.php">Kuota Jurusan</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa ti-bookmark-alt"></i>Beasiswa</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa ti-file"></i><a href="<?php echo $siteurl; ?>/views/beasiswa/siswa/index.php">Pengajuan</a></li>
                            <li><i class="menu-icon fa ti-files"></i><a href="<?php echo $siteurl; ?>/views/beasiswa/survey/index.php">Survey</a></li>
                            <!-- <li><i class="menu-icon fa ti-reload"></i><a href="<?php echo $siteurl; ?>/views/kesiswaan/seleksi/index.php">Seleksi</a></li>
                            <li><i class="menu-icon fa ti-reload"></i><a href="<?php echo $siteurl; ?>/views/kesiswaan/daftarulang/index.php">Daftar Ulang</a></li> -->
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa ti-bookmark-alt"></i>Absensi Siswa</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa ti-files"></i><a href="<?php echo $siteurl; ?>/views/absensi/absensisiswa/index.php">Absensi</a></li>
                            <li><i class="menu-icon fa ti-reload"></i><a href="<?php echo $siteurl; ?>/views/absensi/absensisiswa/rekap.php">Rekap Absensi</a></li>
                        </ul>
                        
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa ti-user"></i>Siswa</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa ti-user"></i><a href="<?php echo $siteurl; ?>/views/admin/siswa.php">Data Siswa</a></li>
                            <li><i class="menu-icon fa ti-receipt"></i><a href="<?php echo $siteurl; ?>/views/admin/mapel.php">Mata Pelajaran</a></li>
                            <li><i class="menu-icon fa ti-id-badge"></i><a href="<?php echo $siteurl; ?>/views/nilai/index.php">Transkrip Nilai</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa ti-user"></i>guru</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa ti-user"></i><a href="<?php echo $siteurl; ?>/views/admin/guru.php">Data guru</a></li>
                            <li><i class="menu-icon fa ti-receipt"></i><a href="<?php echo $siteurl; ?>/views/admin/mapel.php">Mata Pelajaran</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo $siteurl; ?>/views/admin/Ruangan.php"> <i class="menu-icon ti-cup"></i>Ruangan </a>
                    </li>
                    <li>
                        <a href="<?php echo $siteurl; ?>/views/admin/kelas.php"> <i class="menu-icon ti-home"></i>Kelas</a>
                    </li>

                     <li>
                        <a href="<?php echo $siteurl; ?>/views/admin/hari.php"> <i class="menu-icon ti-home"></i>Hari</a>
                    </li>
                    
                    <li>
                        <a href="<?php echo $siteurl; ?>/views/pembagian_kelas2.php"> <i class="menu-icon ti-home"></i>Pembagian Kelas</a>
                    </li>
                     <li>
                        <a href="<?php echo $siteurl; ?>/views/pembagian_kelas2.php"> <i class="menu-icon ti-home"></i>Detail Pembagian Kelas</a>
                    </li>
                     <li>
                        <a href="<?php echo $siteurl; ?>/views/admin/jadwaladmin.php"> <i class="menu-icon ti-home"></i>Pembagian jadwal</a>
                    </li>
                    
                </ul>