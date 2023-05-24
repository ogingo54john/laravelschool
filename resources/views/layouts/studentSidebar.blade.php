

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route("dashboard") }}" class="brand-link">
      <img src="{{ asset("school/dist/img/user5-128x128.jpg") }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset("school/dist/img/user2-160x160.jpg") }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>

      </div>

<!--
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Users
              </p>
            </a>

          </li>


  {{-- # --}}
  @if(Auth::user()->role_as=='2')
  <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-chart-pie"></i>
      <p>
        Account
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>



    <ul class="nav nav-treeview">
@if (Auth::user()->student)
<li class="nav-item">
    <a href="{{url('/student/profile')}}" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
      <p>Profile</p>
    </a>
  </li>
@else
<li class="nav-item">
    <a href="{{url('/student/profile/create')}}" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
      <p>Create Profile</p>
    </a>
  </li>
@endif
        <li class="nav-item">
        <a href="{{url('/student/profile')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Profile</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Update Password</p>
        </a>

    </ul>

  </li>
  @endif
{{-- # --}}

          <li class="nav-item">
            <a href="#" class="nav-link bg-danger">
              <i class="nav-icon fas fa-power-off"></i>
              <p>Logout</p>
            </a>
          </li>



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
