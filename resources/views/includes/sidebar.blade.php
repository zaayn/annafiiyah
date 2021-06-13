<nav class="navbar-default navbar-static-side" role="navigation">
  <div class="sidebar-collapse">
    <ul class="nav metismenu" id="side-menu">
      <li class="nav-header">
        <div class="dropdown profile-element"> 
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
            <span class="clear"> 
              <span class="block m-t-xs"> <strong class="font-bold">{{ \Session::get('name') }}</strong></span>
            </span>
          </a>
        </div>
        <div class="logo-element">
          Hakiki
        </div>
      </li>
      <li class="active">
        <a href="http://localhost:8000/admin/home">
          <i class="fa fa-home"></i> <span class="nav-label">Home</span>
        </a>
      </li>
      <li class="">
        <a href="http://localhost:8000/admin/master_main_page">
          <i class="fa fa-tasks"></i> <span class="nav-label">Master</span>
        </a>
      </li>
      <li class="treeview">
        <a href="">
          <i class="fa fa-plus-circle"></i> 
          <span>Pendaftaran</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
          <ul class="treeview-menu">
            <li style="height: 30px; margin: auto;">
              <a href="#"><span style="color: white">SDTQ</span></a>
            </li>
            <li style="height: 30px; margin: auto;">
              <a href="#"><span style="color: white">SMK Putri</span></a>
            </li>
            <li style="height: 30px; margin: auto;">
              <a href="#"><span style="color: white">BLKK Anf</span></a>
            </li>
          </ul>
      </li>
      <li class="">
        <a href="http://localhost:8000/admin/tipe_pembayaran">
          <i class="fa fa-credit-card"></i> <span class="nav-label">Tipe Pembayaran</span>
        </a>
      </li>
      <li class="">
        <a href="http://localhost:8000/admin/santri">
          <i class="fa fa-group"></i> <span class="nav-label">Santri</span>
        </a>
      </li>
      <li class="">
        <a href="http://localhost:8000/admin/transaksi">
          <i class="fa fa-money"></i> <span class="nav-label">Transaksi</span>
        </a>
      </li>
      <li class="">
        <a href="http://localhost:8000/admin/laporan">
          <i class="fa fa-file-text-o"></i> <span class="nav-label">Laporan</span>
        </a>
      </li>
      <li class="">
        <a href="http://localhost:8000/admin/user">
          <i class="fa fa-users"></i> <span class="nav-label">User</span>
        </a>
      </li>
      <li class="">
        <a href="http://localhost:8000/admin/pesantrenprofile">
          <i class="fa fa-user"></i> <span class="nav-label">Profil</span>
        </a>
      </li>
    </ul>
  </div>
</nav>