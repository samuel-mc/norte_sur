<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main>
    <!-- Hero -->
    <section class="mw--1440 hero">
        <img src="<?php echo __ROOT__; ?>/public/img/home/hero.png" alt="hero" class="w-100">
        <div class="hero__content align-content-center p-4">
            <h2 class="poppins-extralight text-uppercase text-white text--2xl text-center mw--720 mx-auto">La Revolución de la Cocina Mexicana</h2>
        </div>
    </section>

    <!-- Horario de servicio -->
    <section class="mw--1440 row m-0 mx-auto">
        <div class="p-4 col-md-6 col-lg-4 align-content-center">
            <h3 class="poppins-bold text--lg mb-4 text-uppercase">Horarios de servicio</h3>
            <ul class="list-unstyled">
                <li class="poppins-regular text--md">Lunes - Viernes: 8:30 am - 11:00 pm</li>
                <li class="poppins-regular text--md">Sábados: 8:30 am - 11:00 pm</li>
                <li class="poppins-regular text--md">Domingos: 8:30 am - 7:00 pm</li>
            </ul>
        </div>
        <div class="horarios--right col-md-6 col-lg-8 p-lg-5">
            <div class="bg--black py-5 px-4 mw--600 mx-auto my-5">
                <h3 class="poppins-semibold text--md mb-4 text-uppercase text-white text-center">Reserva tu mesa</h3>
                <p class="poppins-regular text--sm text--white text-center">
                    Después de reservar llamaremos al cliente para confirmar, así que por favor ingrese su nombre y número de teléfono es obligatorio, ¡gracias!
                </p>

                <div class="horarios--form dis mt-5" id="horariosForm">
                    <input type="text" class="horario--input" placeholder="Nombre*">
                    <div class="grid--2cols gap--24 my-4">
                        <input type="tel" class="horario--input" placeholder="Teléfono*">
                        <input type="time" class="horario--input" placeholder="Hora de llegada*">
                    </div>
                    <div class="grid--2cols gap--24">
                        <input type="number" class="horario--input" placeholder="Cantidad de personas">
                        <input type="date" class="horario--input" placeholder="Fecha*">
                    </div>
                    <button class="btn btn--white poppins-regular rounded-0 mt-4 w-100">
                        Reserva tu mesa
                    </button>
                </div>

                <button class="btn btn--white poppins-regular rounded-0 w-100" onclick="handleReservar()" id="btnReservar">
                    Reserva tu mesa
                </button>
            </div>
        </div>
    </section>

    <!-- Nuestro concepto -->
    <section class="mw--1440 row m-0 mx-auto bg--ivory">
        <div class="col-3 d-none d-md-block p-0 concepto__first">
            <img src="<?php echo __ROOT__; ?>/public/img/home/concepto1.png" alt="concepto" class="w-100">
        </div>
        <div class="col-md-6 py-5 px-4">
            <div class="d-flex justify-content-center align-items-center">
                <span class="line--red"></span>
                <h3 class="text--md poppins-extralight text-uppercase mx-3 text-center">
                    Nuestro concepto
                </h3>
                <span class="line--red"></span>
            </div>
            <div class="my-3">
                <h2 class="text--lg poppins-regular text-center text-uppercase">Disfruta de un viaje de Norte a Sur de la República Mexicana</h2>
            </div>
            <div>
                <p class="text--sm poppins-regular text-center">
                    NorteSur nace por la pasión y el amor a la gastronomía mexicana, por la gran variedad de tradiciones, colores, aromas y sabores que nos ofrece este hermoso país. Nuestra misión es traer a tu mesa los platillos más representativos de norte a sur de toda la república mexicana, reinventando siempre la cocina tradicional que tanto te gusta.
                </p>
            </div>
        </div>
        <div class="col-3 d-none d-md-block p-0 concepto__last">
            <img src="<?php echo __ROOT__; ?>/public/img/home/concepto2.png" alt="concepto" class="w-100">
        </div>
    </section>

    <section class="mw--1440 bg--ivory concepto__restaurantes py-5">
        <img src="<?php echo __ROOT__; ?>/public/img/home/r1.png" alt="restaurante 1" class="w-100">
        <img src="<?php echo __ROOT__; ?>/public/img/home/r2.png" alt="restaurante 2" class="w-100">
        <img src="<?php echo __ROOT__; ?>/public/img/home/r3.png" alt="restaurante 3" class="w-100">
    </section>

    <!-- Nuestro menú -->
    <?php include 'components/nuestro_menu.php'; ?>

    <!-- Seccion contamos ...  -->
    <section class="mw--1440 py-5 px-4">
        <div class="grid--2cols mw--1080">
            <div>
                <img src="<?php echo __ROOT__; ?>/public/img/home/contamos.png" alt="cta" class="w-100">
            </div>
            <div class="p-2 p-sm-5 align-content-center">
                <h2 class="text--secciones poppins-regular text-uppercase">Contamos con diferentes espacios para tus eventos privados</h2>
                <div>
                    <a href="#" class="btn btn--white text-uppercase poppins-light rounded-0 mt-4 px-5 py-3">
                        Contáctanos
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Seccion un restaurante ... -->
    <section class="mw--1440 py-5 px-4 row m-0 mx-auto">
        <div class="col-lg-7 align-content-center p-2 p-sm-5">
            <h2 class="text--secciones poppins-regular text-uppercase">Un restaurante 100% mexicano, donde se mezclan la riqueza y el valor de nuestras tradiciones, con la fuerza y juventud de nuestro México <span class="word-break">contemporáneo</span>.</h2>
        </div>
        <div class="col-lg-5">
            <img src="<?php echo __ROOT__; ?>/public/img/home/unres.png" alt="restaurante" class="w-100">
        </div>
    </section>

    <!-- Review -->
    <section class="mw--1440 row m-0 mx-auto">
        <div class="col-lg-5 p-0">
            <img src="<?php echo __ROOT__; ?>/public/img/home/review.png" alt="review" class="w-100 h-100 img--cover">
        </div>
        <div class="col-lg-7 p-4 p-sm-5 bg--black">
            <span class="quotes--red">"</span>
            <h2 class="text--secciones poppins-regular text-uppercase text--md text--white">
                Excelente lugar para ir a degustar buenos alimentos.
                Una calidad en sabor sazón con ingredientes de primera.
            </h2>
            <p class="text--sm poppins-extralight mt-4 text--white">
                Es un gran restaurante con comida muy rica y diferente. Hay un plato con chapulines. La atención del personal es maravillosa, tanto los meseros como el personal en la puerta y la señorita del área infantil es un encanto. Muy recomendable.
            </p>
            <p class="text--sm poppins-extralight mt-4 text--white">
            Edgar Roberto Dávila Jiménez
            </p>
    </section>

    <!-- Fotos -->
    <section class="mw--1440 py-5 px-4 section__fotos">
        <div class="fotos--first">
            <img src="<?php echo __ROOT__; ?>/public/img/home/res1.png" alt="foto" class="w-100 h-100 img--cover">
        </div>
        <div class="fotos--mid grid gap--24">
            <div class="grid--2cols gap--24">
                <img src="<?php echo __ROOT__; ?>/public/img/home/res2.png" alt="foto" class="w-100 h-100 img--cover">
                <img src="<?php echo __ROOT__; ?>/public/img/home/res3.png" alt="foto" class="w-100 h-100 img--cover">
            </div>
            <img src="<?php echo __ROOT__; ?>/public/img/home/res4.png" alt="foto" class="w-100 h-100 img--cover">
        </div>
        <div class="fotos--last">
            <img src="<?php echo __ROOT__; ?>/public/img/home/res5.png" alt="foto" class="w-100 h-100 img--cover">
        </div>
    </section>
</main>

<script>
    const handleReservar = () => {
        const form = document.getElementById('horariosForm');
        form.classList.toggle('dis');
        const btn = document.getElementById('btnReservar');
        btn.classList.toggle('dis');
    }
</script>
<?php include 'partials/footer.php'; ?>