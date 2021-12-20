

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item" id="1" onclick="coladi()">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/Admin" class="nav-link">Home</a>
        </li>
        {{-- <li class="nav-item d-none d-sm-inline-block">
            <form action="/Admin/System/create" method="get">
                <a href="/Admin/System/create" onclick="this.parentNode.submit()" class="nav-link">
                    Create System
                </a>
            </form>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <form action="/Admin/faq/create" method="get">
                <a href="/Admin/faq/create" onclick="this.parentNode.submit()" class="nav-link">
                    Create Solution
                </a>
            </form>
        </li> --}}
        <li class="nav-item d-none d-sm-inline-block">
            <form action="/Admin/System/" method="get">
                <a href="/Admin/System/" onclick="this.parentNode.submit()" class="nav-link">
                    System
                </a>
            </form>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <form action="/Admin/faq/" method="get">
                <a href="/Admin/faq/" onclick="this.parentNode.submit()" class="nav-link">
                    FAQ
                </a>
            </form>
        </li>
        
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <!-- Messages Dropdown Menu -->
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="logout">
            <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
            <a href="/logout" class="dropdown-item">Logout </a>
            </span>
        </div>
    </li>
    </ul>
</nav>

<script>
    function coladi(){
        var navbar = document.getElementById('1');
        if (navbar.style.display === 'none') {
            navbar.style.display = 'block';
        } else {
            navbar.style.display = 'none';
        }
        console.log(navbar);
    }
</script>