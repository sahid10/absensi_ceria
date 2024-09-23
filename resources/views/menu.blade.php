<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link text-white {{ Request::is('/') ? 'active bg-gradient-primary' : '' }}" href="{{url('/')}}">
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">dashboard</i>
      </div>
      <span class="nav-link-text ms-1">Dashboard</span>
    </a>
  </li>
  <li class="nav-item mt-3">
    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Absensi</h6>
  </li>

  <li class="nav-item">
    <a class="nav-link text-white {{ Request::is('absensi') ? 'active bg-gradient-primary' : '' }}" href="{{url('absensi')}}">
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">groups</i>
      </div>
      <span class="nav-link-text ms-1">Absensi</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link text-white {{ Request::is('karyawan') ? 'active bg-gradient-primary' : '' }}" href="{{url('karyawan')}}">
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">person_add</i>
      </div>
      <span class="nav-link-text ms-1">Karyawan</span>
    </a>
  </li>

  <li class="nav-item mt-3">
    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Project</h6>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white {{ Request::is('projects') ? 'active bg-gradient-primary' : '' }}" href="{{url('projects')}}">
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">construction</i>
      </div>
      <span class="nav-link-text ms-1">Projects</span>
    </a>
  </li>
  
  <li class="nav-item mt-3">
    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Inventory</h6>
  </li>

  <li class="nav-item">
    <a class="nav-link text-white {{ Request::is('inventory') ? 'active bg-gradient-primary' : '' }}" href="{{url('inventory')}}">
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">inventory</i>
      </div>
      <span class="nav-link-text ms-1">Inventory</span>
    </a>
  </li>
  
  <!-- <li class="nav-item">
    <a class="nav-link text-white {{ Request::is('notifications') ? 'active bg-gradient-primary' : '' }}" href="{{url('notifications')}}">
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">notifications</i>
      </div>
      <span class="nav-link-text ms-1">Notifications</span>
    </a>
  </li> -->
  <li class="nav-item mt-3">
    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white {{ Request::is('profile') ? 'active bg-gradient-primary' : '' }}" href="{{url('profile')}}">
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">person</i>
      </div>
      <span class="nav-link-text ms-1">Profile</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white {{ Request::is('signin') ? 'active bg-gradient-primary' : '' }}" href="{{url('signin')}}">
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">login</i>
      </div>
      <span class="nav-link-text ms-1">Sign In</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white {{ Request::is('signup') ? 'active bg-gradient-primary' : '' }}" href="{{url('signup')}}">
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">assignment</i>
      </div>
      <span class="nav-link-text ms-1">Sign Up</span>
    </a>
  </li>
</ul>
