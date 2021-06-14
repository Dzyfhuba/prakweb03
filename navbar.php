<?php
$Route = explode('\\', getcwd());
$currentRoute = $Route[count($Route)-1];
?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark p-0">
    <ul class="navbar-nav">
        <li class="nav-item <?php if($currentRoute == "home") echo " active" ?>">
            <a class="nav-link" href="<?php if($currentRoute != "home") echo "../home" ?>">Home</a>
        </li>
        <li class="nav-item <?php if($currentRoute == "portofolio") echo " active" ?>">
            <a class="nav-link" href="<?php if($currentRoute != "portofolio") echo "../portofolio" ?>">Portofolio</a>
        </li>
        <li class="nav-item <?php if($currentRoute == "about") echo " active" ?>">
          <a class="nav-link" href="<?php if($currentRoute != "about") echo "../about" ?>">About</a>
      </li>
  </ul>
</nav>