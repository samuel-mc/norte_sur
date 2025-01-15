<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main>

    <!-- Nuestro menú -->
    <?php include 'components/nuestro_menu.php'; ?>

    <!-- Nuestra filosofia -->
    <section class="mw--1440 row m-0 mx-auto bg--ivory py-5 px-2">
        <div class="col-3 d-none d-md-block p-0">
            <img src="<?php echo __ROOT__; ?>/public/img/menu/filosofia1.png" alt="concepto" class="h-100">
        </div>
        <div class="col-md-6 py-5 px-4 align-content-center">
            <div class="d-flex justify-content-center align-items-center">
                <span class="line--red"></span>
                <h3 class="text--md poppins-extralight text-uppercase mx-3 text-center">
                    Nuestro equipo
                </h3>
                <span class="line--red"></span>
            </div>
            <div class="my-3">
                <h2 class="text--lg poppins-regular text-center text-uppercase">Nuestra filosofía culinaria</h2>
            </div>
            <div>
                <p class="text--sm poppins-regular text-center">
                Sencillo y equilibrado. Combina sabores y especialidades para crear su propio mundo culinario, lleno de sorprendente arte.
                </p>
                <p class="text--sm poppins-regular text-center">
                Vemos a nuestros clientes como invitados a una fiesta y nosotros somos los anfitriones. Nuestro trabajo diario es mejorar un poco cada aspecto importante de la experiencia del cliente.
                </p>
            </div>
        </div>
        <div class="col-3 d-none d-md-block p-0">
            <img src="<?php echo __ROOT__; ?>/public/img/menu/filosofia2.png" alt="concepto" class="h-100">
        </div>
    </section>

    <?php include 'components/banner.php'; ?>


</main>

<?php include 'partials/footer.php'; ?>