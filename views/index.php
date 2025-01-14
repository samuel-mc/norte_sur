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
    <section class="mw--1440 row m-0">
        <div class="p-4 col-md-6 col-lg-4 align-content-center">
            <h3 class="poppins-bold text--lg mb-4 text-uppercase">Horarios de servicio</h3>
            <ul class="list-unstyled">
                <li class="poppins-regular text--md">Lunes - Viernes: 8:30 am - 11:00 pm</li>
                <li class="poppins-regular text--md">Sábados: 8:30 am - 11:00 pm</li>
                <li class="poppins-regular text--md">Domingos: 8:30 am - 7:00 pm</li>
            </ul>
        </div>
        <div class="horarios--right col-md-6 col-lg-8 p-lg-5">
            <div class="bg--black py-5 px-4 mw--600 mx-auto">
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
                    <button class="btn btn--white poppins-regular rounded-0 mt-4">
                        Reserva tu mesa
                    </button>
                </div>

                <button class="btn btn--white poppins-regular rounded-0" onclick="handleReservar()" id="btnReservar">
                    Reserva tu mesa
                </button>
            </div>
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