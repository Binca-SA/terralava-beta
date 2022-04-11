<?php $path="../";?>
<?php $title="Comprar";?>

<?php include($path . 'php/head.php')?>
<?php include($path . 'php/navigation.php')?>

<!-- This purchase section is created manually with the aim of showing how the web would work in its entirety. It is not a definitive operation. -->

<section class="comprar-container section-margin">
    <img class="comprar-container__img" src="../images/tienda/anillos/dian.webp" alt="silver ring with sphere in the center of moonstone ">
    <div class="comprar-container__container-text">
        <div class="comprar-container__titleYprice">
            <h1 class="comprar-container__titleYprice__title ppHatton">Anillo Dian</h1>
            <p class="comprar-container__titleYprice__price ppHatton">20.50 €</p>
        </div>
        <div class="comprar-container__descYcant">
            <div class="comprar-container__descYcant__btns">
                <button id="btn1" class="comprar-container__descYcant__btns__btn">-</button>
                <input id="text" class="comprar-container__descYcant__btns__input" type="text" value="1">
                <button id="btn2" class="comprar-container__descYcant__btns__btn">+</button>
            </div>
            <button class="comprar-container__descYcant__btn">COMPRAR</button>
        </div>
        <p class="comprar-container__descYcant__desc lineHeight exterior-margin">Anillo con piedra lunar. 
        La piera lunar nos ayuda a relajar la mente y el cuerpo, también ayuda a dominar las emociones para expresarte de manera correcta.</p>
    </div>
</section>



<?php include($path . 'php/footer.php')?>
<script type="module" src="<?php echo $path; ?>js/sections/quantity.js"></script>