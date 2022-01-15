<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4"style="background-color: #557C55;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/img/starbuck.jpg" alt="Starbuck" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/dashboard" class="nav-link {{ Request::is('dashboard')?'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/menu" class="nav-link {{ Request::is('dashboard/menu')?'active' : '' }}">
                <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Menu
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
