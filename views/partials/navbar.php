<?php
$title = isset($title) ? $title : 'Home';
?>


<!------------ top part ------------>
<div class="nav-desktop__top poppins-light text--sm">
    <div class="top__first d-none d-lg-flex p-3">
        <div class="icono-cuchara mr-2">
            <img src="<?php echo __ROOT__; ?>/public/img/navbar/fork_spoon.png" alt="icono cuchara" class="nav-desktop__logo">
        </div>
        <div class="d-flex flex-column">
            <span>8:30 a.m. a 11:00 p.m. </span>
            <span>(722) 199 4440</span>
        </div>
    </div>
    <div class="top__second p-3">
        <img src="<?php echo __ROOT__; ?>/public/img/logo.png" alt="logo" width="166.97" height="74.07">
    </div>
    <div class="top__third d-none d-lg-flex p-3">
        <div class="d-flex flex-column">
            <span>Av Ignacio Comonfort #302, Colonia Santa Ana Tlapaltitlán, 50160, Toluca, Estado de Méx, México</span>
        </div>
        <div class="icono-cuchara ml-2">
            <img src="<?php echo __ROOT__; ?>/public/img/navbar/distance.png" alt="icono cuchara" class="nav-desktop__logo">
        </div>
    </div>
</div>

<!-------------- bottom part ----------->
<!-- Version desktop -->
<div class="nav-desktop__bottom d-none d-lg-block">
    <div class="menu">
        <a href="<?php echo __ROOT__ . '/'; ?>" class="menu-item <?php echo $title === 'Home' ? 'active' : ''; ?> " data-index="0">Home</a>
        <a href="<?php echo __ROOT__ . '/menu'; ?>" class="menu-item <?php echo $title === 'Menú' ? 'active' : ''; ?>" data-index="1">Menú</a>
        <a href="<?php echo __ROOT__ . '/'; ?>" class="menu-item <?php echo $title === 'Grupo Orraca' ? 'active' : ''; ?>" data-index="2">Grupo Orraca</a>
        <a href="<?php echo __ROOT__ . '/galeria'; ?>" class="menu-item <?php echo $title === 'Galería' ? 'active' : ''; ?>" data-index="3">Galería</a>
        <a href="<?php echo __ROOT__ . '/contacto'; ?>" class="menu-item <?php echo $title === 'Contacto' ? 'active' : ''; ?>" data-index="4">Contacto</a>
        <div class="hover-bar"></div>
    </div>
</div>

<!-- Version mobile -->
<nav class="navbar d-lg-none navbar-light bg-white">
    <a class="navbar-brand" href="#">
        <img src="<?php echo __ROOT__; ?>/public/img/logo.png" alt="logo" width="83.485" height="37.035">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav py-4">
            <a class="nav-link active text-uppercase poppins-light" href="<?php echo __ROOT__ . '/'; ?>">Home</a>
            <a class="nav-link active text-uppercase poppins-light" href="<?php echo __ROOT__ . '/menu'; ?>">Menú</a>
            <a class="nav-link active text-uppercase poppins-light" href="<?php echo __ROOT__ . '/'; ?>">Grupo Orraca</a>
            <a class="nav-link active text-uppercase poppins-light" href="<?php echo __ROOT__ . '/galeria'; ?>">Galería</a>
            <a class="nav-link active text-uppercase poppins-light" href="<?php echo __ROOT__ . '/contacto'; ?>">Contacto</a>
        </div>
    </div>
</nav>