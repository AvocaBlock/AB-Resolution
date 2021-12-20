<aside class="main-sidebar sidebar-dark-primary elevation-4" style="dislpay:none">
    <!-- Sidebar -->
    <div class="sidebar sidebar-collapse">
        <div class="main-headear navbar navbar-expand">
            <a class="nav-link" data-widget="pushmenu" role="button" id="2" onclick="disappear()"><i class="fas fa-bars"></i></a>
            <a href="" class="nav-link">FAQ-NG</a>
        </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          {{-- LAYOUT OPTION --}}
          <li class="nav-item">
              <a href="" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
                <p>
                    Home
                    <span class="badge badge-info right"></span>  
                </p>
              </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
            <i class="nav-icon fas fa-question"></i>
              <p>
                  Faq
                  <span class="badge badge-info right"></span>  
              </p>
            </a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">
          <i class="nav-icon fas fa-headset"></i>
            <p>
                Hubungi Kami
                <span class="badge badge-info right"></span>  
            </p>
          </a>
      </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<script>
  function disappear(){
      console.log('disappear called');
      var gone = document.getElementById('1');
      if(gone.style.display === 'none'){
          gone.style.display = 'block';
      }
  }
</script>