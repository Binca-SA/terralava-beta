<?php $title="Test Mi Joya Perfecta";?>
<?php include('./php/head.php')?>
<?php include('./php/navigation.php')?>
<form name="joya" action="">
    <div>
        <p>¿Te gusta ponerte joyas que destacan a simple vista?</p>
        <label for=" ">SI Me gusta que sea una de las cosas que más destacan de mi estilo. </label>
        <input name="primera" type="radio" value="1">
        <label for=" ">NO Prefiero destacar por otras cosas. </label>
        <input name="primera" type="radio" value="2">
    </div>

    <div>
        <p>¿El color es un elemento importante en tu día a día?</p>
        <label for=" ">SI Amante de los colores, me dan alegría. </label>
        <input name="segunda" type="radio" value="3">
        <label for=" ">NO Lo justo y necesario. </label>
        <input name="segunda" type="radio" value="4">
    </div>

    <div>
        <p>¿Te interesa el mundo de las piedras semipreciosas y sus beneficios y propiedades?</p>
        <label for=" ">SI Creo que me aportan equilibrio y fuerza en mi día a día.</label>
        <input name="tercera" type="radio" value="5">
        <label for=" ">NO Son bonitas, pero no creo en eso </label>
        <input name="tercera" type="radio" value="6">
    </div>
    
    <div>
        <p>¿Te gusta vestir elegante?</p>
        <label for=" ">SI Lo intento, aunque a veces me gusta no pensar demasiado en qué ponerme.</label>
        <input name="cuarta" type="radio" value="7">
        <label for=" ">NO No suelo complicarme mucho.</label>
        <input name="cuarta" type="radio" value="8">
    </div>

    <div>
        <p>¿Te cuesta decidirte por algo a la hora de elegir?</p>
        <label for=" ">SI La mayoría de las veces soy indecisa.</label>
        <input name="quinta" type="radio" value="9">
        <label for=" ">NO Normalmente suelo tener muy claro que quiero.</label>
        <input name="quinta" type="radio" value="10">
    </div>

    <div>
        <p>¿Te gusta probar cosas nuevas en tus looks?</p>
        <label for=" ">SI Me gusta arriesgarme.</label>
        <input name="sexta" type="radio" value="11">
        <label for=" ">NO Más vale prevenir que curar.</label>
        <input name="sexta" type="radio" value="12">
    </div>

    <div>
        <p>¿Sueles hacer escapadas a lugares naturales?</p>
        <label for=" ">SI Necesito desconectar del ajetreo de la ciudad.</label>
        <input name="septima" type="radio" value="13">
        <label for=" ">NO Me gusta la naturaleza pero no hago muchas escapadas .</label>
        <input name="septima" type="radio" value="14">
    </div>
</form>
<a href="./imagenes.html?images=${text}">Ver Resultados</a>
<button class="button">Resultados</button>
<script type="module" src="./js/sections/test.js"></script>