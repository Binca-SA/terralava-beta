<?php $title="Joyas Terralava";?>
<?php include('./php/head.php')?>
<?php include('./php/navigation.php')?>
<section class="grid-shop section-margin">
        <div class="container-filter">
            <nav  class="container-filter__filtro-tienda">
                <button id="btnFiltro" class="container-filter__btn-filtro">FILTRO  
                    <ul class="container-filter__despliegue-filtro" id="filtro">
                        <li id="collares" class="filtro__item"><a href="#" class="filtro__link">Collares</a></li>
                        <li class="filtro__item"><a href="#" class="filtro__link">Anillos</a></li>
                        <li class="filtro__item"><a href="#" class="filtro__link">Pulseras</a></li>
                        <li class="filtro__item"><a href="#" class="filtro__link">Pendientes</a></li>
                    </ul>  
                </button>   
            </nav>
        </div>
        <div id="list" class="list"></div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script type="module" src="./js/sections/shop.js"></script>