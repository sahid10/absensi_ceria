<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link text-white {{ Request::is('/') ? 'active bg-gradient-primary' : '' }}" href="{{url('/')}}">
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">dashboard</i>
      </div>
      <span class="nav-link-text ms-1">Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white {{ Request::is('projects') ? 'active bg-gradient-primary' : '' }}" href="{{url('projects')}}">
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">list</i>
      </div>
      <span class="nav-link-text ms-1">Projects</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white {{ Request::is('billing') ? 'active bg-gradient-primary' : '' }}" href="{{url('billing')}}">
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">receipt_long</i>
      </div>
      <span class="nav-link-text ms-1">Billing</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white {{ Request::is('view_in_ar') ? 'active bg-gradient-primary' : '' }}" href="{{url('view_in_ar')}}">
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">view_in_ar</i>
      </div>
      <span class="nav-link-text ms-1">Virtual Reality</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white {{ Request::is('rtl') ? 'active bg-gradient-primary' : '' }}" href="{{url('rtl')}}">
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
      </div>
      <span class="nav-link-text ms-1">RTL</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white {{ Request::is('notifications') ? 'active bg-gradient-primary' : '' }}" href="{{url('notifications')}}">
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">notifications</i>
      </div>
      <span class="nav-link-text ms-1">Notifications</span>
    </a>
  </li>
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
