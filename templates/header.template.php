<header>
    <div class="wrapper">
    <nav class="header-content">

        <h1 class="logo">POSTS.COM</h1>
        <ul class="burger-menu">
            <li><a href="/posts/new.php">New post</a></li>
            <li><a href="/">Overview</a></li>
<!--            --><?// if($_COOKIE['user']!='auth'): ?>
                <li><a href="#">Login</a></li>
<!--            --><?// endif;?>
            <li>
<!--                --><?// if($_COOKIE['user']=='auth'): ?>
                    <a href="#" class="button-login">Logout</a>
<!--                --><?// else:?>
                    <a href="#" class="button-login">Register</a>
<!--                --><?// endif;?>

            </li>
        </ul>
    </nav>
    </div>
</header>
