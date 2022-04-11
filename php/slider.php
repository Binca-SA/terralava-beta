<?php $title="Slider";?>
    <section class="vh">
        <section class="contenedor-swiper">
            <h1 class="title-jewlery">Terralava</h1>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="./images/slider/s1.jpg" alt="hand with different types rings"></div>
                    <div class="swiper-slide"><img src="./images/slider/s2.jpg" alt="vase with necklace called lotus necklace"></div>
                    <div class="swiper-slide"><img src="./images/slider/s3.jpg" alt="model showing earrings called idril"></div>
                    <div class="swiper-slide"><img src="./images/slider/s4.jpg" alt="hand holding orange leaves with different types of rings on the fingers"></div>
                    <div class="swiper-slide"><img src="./images/slider/s5.jpg" alt="earring  called eara"></div>
                </div>
            </div>
            <h2 class="subtitle-jewlery">Jewels</h2>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>
        </section>
        <section class="intro-home">
            <h4 class="intro-home__title">JOYAS QUE RECARGAN TUS DÍAS CON LUZ, ENERGÍA Y PASIÓN</h4>
            <a class="intro-home__cta cta-buttoms" href="<?php echo $path; ?>tienda">
            <svg width="25" height="25" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_341_45)">
                <path d="M17.064 43.336C28.008 34.984 33.864 31.144 45.192 24.04C33.864 16.936 28.008 13.096 17.064 4.744L13.8 9.544C25.128 16.072 29.544 18.568 40.488 24.04C29.544 29.512 25.128 32.008 13.8 38.536L17.064 43.336Z" fill="#9D0B0B"/>
                </g>
                <defs>
                <clipPath id="clip0_341_45">
                <rect width="48" height="48" fill="white"/>
                </clipPath>
                </defs>
                <title>Arrow icon</title>
                <desc>arrow icon, points to view store button</desc>
            </svg>
            Ver Tienda </a>
        </section>
    </section>  
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script type="module" src="./js/sections/slider.js"></script>

