

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item" id="1" onclick="coladi()">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link">Home</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

    <!-- Messages Dropdown Menu -->
    
    <li class="nav-item">
        <a class="nav-link" data-slide="true" href="login" role="button">Login</a>
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
    }
</script>