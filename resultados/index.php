<?php $title="Resultado de Mi Joya Perfecta";?>
<?php $path="../";?>
<?php include($path .'php/head.php')?>
<?php include($path .'php/navigation.php')?>

<section class="sectionResults section-margin">
    <h5 class="exterior-margin header-results">Tus resultados medidos a tu gusto!</h5>
    <section class="resultsTest exterior-margin" id="main"></section>
    <button class=" margin-left-mob cta-buttoms">
        <a class="cta-buttoms" href="<?php echo $path; ?>tienda">
            <svg width="25" height="25" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_341_45)">
                <path d="M17.064 43.336C28.008 34.984 33.864 31.144 45.192 24.04C33.864 16.936 28.008 13.096 17.064 4.744L13.8 9.544C25.128 16.072 29.544 18.568 40.488 24.04C29.544 29.512 25.128 32.008 13.8 38.536L17.064 43.336Z" fill="#9D0B0B"/>
                </g>
                <defs>
                <clipPath id="clip0_341_45">
                <rect width="48" height="48" fill="white"/>
                </clipPath>
                </defs>
            </svg>
        Ver Todos Los Productos
        </a>
    </button>
</section>
<?php include($path . 'php/footer.php')?>
<script type="module" src="<?php echo $path; ?>js/sections/imagenes.js"></script>