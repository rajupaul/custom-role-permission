 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('admin.dashboard')}}" class="nav-link {{(Route::currentRouteName()=='admin.dashboard')?'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
            
          @if(auth()->user()->hasAnyPermission(['view-role','create-role','edit-role','delete-role','view-permission']))
          <li class="nav-item has-treeview {{(in_array(Route::currentRouteName(),['admin.roles','admin.roles.create','admin.roles.edit','admin.permissions']))?'menu-open':''}}">
            <a href="#" class="nav-link {{(in_array(Route::currentRouteName(),['admin.roles','admin.roles.create','admin.roles.edit','admin.permissions']))?'active':''}}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Role & Permission
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @if(auth()->user()->hasAnyPermission(['view-role','create-role','edit-role','delete-role']))
              <li class="nav-item">
                <a href="{{route('admin.roles')}}" class="nav-link {{(in_array(Route::currentRouteName(),['admin.roles','admin.roles.create','admin.roles.edit']))?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
              @endif
              @if(auth()->user()->hasAnyPermission(['view-permission']))
              <li class="nav-item">
                <a href="{{route('admin.permissions')}}" class="nav-link {{(in_array(Route::currentRouteName(),['admin.permissions']))?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permission</p>
                </a>
              </li>
              @endif
            </ul>
          </li>
          @endif
          <li class="nav-header"><b>User Management</b></li>
          <li class="nav-item">
            <a href="../calendar.html" class="nav-link">
              
              <i class="nav-icon fas fa-users"></i>
              <p>
                Frontend User
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../calendar.html" class="nav-link">
             
              <i class="nav-icon fas fa-users-cog"></i>
              <p>
                Backend User
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>