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
                        <a href="<?php echo $siteurl; ?>/views/dashboard/absensi/index.php"> <i class="menu-icon fa fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa ti-bookmark-alt"></i>Absensi Siswa</a>
                        <ul class="sub-menu children dropdown-menu" style="background-color:#343a40;">
                            <li><i class="menu-icon fa ti-files"></i><a href="<?php echo $siteurl; ?>/views/absensi/absensisiswa/absenmasuk.php">Absensi Masuk</a></li>
                            <li><i class="menu-icon fa ti-files"></i><a href="<?php echo $siteurl; ?>/views/absensi/absensisiswa/absenpulang.php">Absensi Pulang</a></li>
                        </ul>
                    </li>

</ul>