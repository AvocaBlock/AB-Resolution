<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar sidebar-collapse">
        <div class="main-headear navbar navbar-expand">
            <a class="nav-link" data-widget="pushmenu" role="button" id="2" onclick="disappear()"><i
                    class="fas fa-bars"></i></a>
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
                    <a href="#" id="main" onclick="change_active(this.id)" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Main
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link" id="system" onclick="change_active(this.id)"> 
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    System
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link" id="buat-1" onclick="change_active(this.id)">
                                        <i class="fas fa-wifi-1 nav-icon"></i>
                                        <p>Buat</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" id="buat-2" onclick="change_active(this.id)">
                                        <i class="fas fa-wifi-1 nav-icon"></i>
                                        <p>Lihat / Ubah</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link" id="solution" onclick="change_active(this.id)">
                              <i class="far fa-circle nav-icon"></i>
                              <p>
                                  FAQ
                                  <i class="right fas fa-angle-left"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="/faq" class="nav-link" id="buat-2" onclick="change_active(this.id)">
                                      <i class="fas fa-wifi-1 nav-icon"></i>
                                      <p>Buat</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="#" class="nav-link" id="buat-3" onclick="change_active(this.id)">
                                      <i class="fas fa-wifi-1 nav-icon"></i>
                                      <p>Lihat / Ubah</p>
                                  </a>
                              </li>
                          </ul>
                      </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<script>
    function change_active(clicked_id){
        console.log(clicked_id);
        var test = document.getElementById(clicked_id);
        var name = test.className;
        let result = name.includes("active");
        if(result!=true){
            document.getElementById(clicked_id).classList.add('active');
        }
        else{
            document.getElementById(clicked_id).classList.remove('active')
        }
    }
</script>
<script>
    function disappear() {
        console.log('disappear called');
        var gone = document.getElementById('1');
        if (gone.style.display === 'none') {
            gone.style.display = 'block';
        }
    }
</script>
