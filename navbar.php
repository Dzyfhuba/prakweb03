<?php
$Route = explode('\\', getcwd());
$currentRoute = $Route[count($Route) - 1];

function isLoggedIn()
{
    if (isset($_SESSION["user"])) {
        return true;
    }
}
?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark p-0">
    <ul class="navbar-nav">
        <li class="nav-item <?php if ($currentRoute == "home") echo " active" ?>">
            <a class="nav-link" href="<?php if ($currentRoute != "home") echo "../home" ?>">Home</a>
        </li>
        <li class="nav-item <?php if ($currentRoute == "portofolio") echo " active" ?>">
            <a class="nav-link" href="<?php if ($currentRoute != "portofolio") echo "../portofolio" ?>">Portofolio</a>
        </li>
        <li class="nav-item <?php if ($currentRoute == "about") echo " active" ?>">
            <a class="nav-link" href="<?php if ($currentRoute != "about") echo "../about" ?>">About</a>
        </li>
        <?php if (!isLoggedIn()) { ?>
            <li class="nav-item <?php if ($currentRoute == "login") echo " active" ?>">
                <a class="nav-link" href="<?php if ($currentRoute != "login") echo "../login" ?>">Login</a>
            </li>
            <li class="nav-item <?php if ($currentRoute == "register") echo " active" ?>">
                <a class="nav-link" href="<?php if ($currentRoute != "register") echo "../register" ?>">Register</a>
            </li>
        <?php } else { ?>
            <li class="nav-item bg-danger <?php if ($currentRoute == "logout") echo " active" ?>">
                <a class="nav-link" href="<?php if ($currentRoute != "logout") echo "../logout.php" ?>">Logout</a>
            </li>
        <?php } ?>
    </ul>
</nav>