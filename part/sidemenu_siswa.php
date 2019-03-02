<style type="text/css">
    .menuuu{
        border-bottom: 1px solid #ffffff;
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
<ul class="nav navbar-nav" style="background-color:##696969; ">
                    <li>
                        <a href="<?php echo $siteurl; ?>/views/dashboard/siswa/index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon ti-user"></i>Profil</a>
                    </li>
                   

                    <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                    <li>
                        <a href="<?php echo $siteurl; ?>/views/beasiswa/siswa/index_siswa.php"><i class="menu-icon ti-user"></i>Beasiswa Karsa</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa ti-user"></i>E-Learning</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa ti-user"></i><a href="<?php echo $siteurl; ?>/views/e-learning/siswa/data-elearning.php">File E-Learning</a></li>
                            <li><i class="menu-icon fa ti-receipt"></i><a href="<?php echo $siteurl; ?>/views/ujian-online/siswa/data-ujian-online.php">Ujian Online</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa ti-user"></i>Data</a>
                        <ul class="sub-menu children dropdown-menu"><li><i class="menu-icon fa ti-id-badge"></i><a href="<?php echo $siteurl; ?>/views/nilai/index.php">Transkrip Nilai</a></li>
                        </ul>
                        <li>
                        <a href="<?php echo $siteurl;?>/views/siswa/dasbordjadwalsiswa.php"><i class="menu-icon fa ti-id-badge"></i>Jadwal</a>
                        <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa ti-bookmark-alt"></i>Prakerin</a>
                        <ul class="sub-menu children dropdown-menu" style="background-color: ##696969;">
                            <li><i class="menu-icon fa ti-id-badge"></i><a href="<?php echo $siteurl; ?>/views/beasiswa/siswa/siswa_detail_pengajuan_prakerin.php">Data Dunia Industri</a></li>
                            <li><i class="menu-icon fa ti-id-badge"></i><a href="<?php echo $siteurl; ?>/views/prakerin/data_daftar_prakerin.php">Pendaftaran Prakerin</a></li>
                            <li><i class="menu-icon fa ti-id-badge"></i><a href="#">Data Prakerin</a></li>
                            <li><i class="menu-icon fa ti-id-badge"></i><a href="<?php echo $siteurl; ?>/views/prakerin/data_jurnal.php">Jurnal Prakerin</a></li>
                            <li><i class="menu-icon fa ti-id-badge"></i><a href="#">Nilai Prakerin</a></li>
                        </ul>
                    </li>
                    </li>
                    </li>
                </ul>