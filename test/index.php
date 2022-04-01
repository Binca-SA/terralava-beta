<?php $title="Test Mi Joya Perfecta";?>
<?php $path="../";?>
<?php include($path . 'php/head.php')?>
<?php include($path . 'php/navigation.php')?>
<section class="form-section section-margin">
    <div class="container-header-test">
        <h1 class="container-header-test__title-test">Descúbre tu joya perfecta con nuestro test </h1>
        <a href="#1">
            <button id="startTest" class="container-header-test__start-test"> <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="23.5374" cy="23.6665" r="9.78935" stroke="#9D0B0B"/>
                <circle cx="24.0524" cy="24.181" r="3.60127" fill="#9D0B0B"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.38239 23.8691C7.65308 20.0306 12.9053 15.7023 19.4937 14.395C26.238 13.0567 34.4955 14.8625 43.6057 23.8597C40.4543 27.5345 35.0058 31.6932 28.2803 32.952C21.3823 34.2431 13.0581 32.4998 4.38239 23.8691ZM3.30953 23.5918C6.63606 19.569 12.1948 14.8238 19.2991 13.4141C26.6068 11.964 35.4305 14.0657 44.9884 23.8313L44.6916 24.1218C41.4871 28.0153 35.706 32.5795 28.4642 33.9349C21.0185 35.3286 12.1165 33.3133 3 23.8913L3.30953 23.5918Z" fill="#9D0B0B"/>
                </svg>
                <title>Icon Eye</title>
                </svg>COMENZAR 
            </button></a>
        <p  class="container-header-test__intro-text">Formado por 7 preguntas, elige la respuesta con la que más te identifiques</p>
        
    </div>
    
    <form class="test-form" name="joya" action="">
        <div id="1" class="test-form__question">
            <p class="number-question">1</p>
                <svg class="diamond-icon" width="40" height="40" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="diamond-icon" d="M23.1614 4.70788L4.07389 20.8207C3.49481 21.3096 3.45492 22.1881 3.98731 22.7274L23.0749 42.0628C23.5839 42.5784 24.4161 42.5784 24.9251 42.0628L44.0127 22.7274C44.5451 22.1881 44.5052 21.3096 43.9261 20.8207L24.8386 4.70788C24.3543 4.29906 23.6457 4.29906 23.1614 4.70788Z" fill="black"/>
                <title>icon-diamond</title>
                <desc> diamond icon for sthetic use </desc>
            </svg>
            <p class="test-form__question__text">¿Te gusta ponerte joyas que destacan a simple vista?</p>
            <div class="container-both-questions">
                <label for="primera__1" class="container-both-questions__container-inputs">
                    <a href="#2">Me gusta que sea una de las cosas que más destacan de mi estilo.</a>
                    <!-- <label class="test-form__question__yes" for="primera__1"> -->
                    <p>SI</p>                
                    <input class="inputTest" id="primera__1" name="primera" type="radio" value="1"> 
                </label>           
                <label for="dos" class="container-both-questions__container-inputs">
                    <a href="#2">Prefiero destacar por otras cosas.</a> 
                    <!-- <label class="test-form__question__yes" for="dos"> -->
                    <p>NO</p>
                    <input class="inputTest" id="dos"  name="primera" type="radio" value="2">
                </label>
            </div>
        </div>

        <div id="2" class="test-form__question">
            <p class="number-question">2</p>
            <svg class="diamond-icon" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.1614 4.70788L4.07389 20.8207C3.49481 21.3096 3.45492 22.1881 3.98731 22.7274L23.0749 42.0628C23.5839 42.5784 24.4161 42.5784 24.9251 42.0628L44.0127 22.7274C44.5451 22.1881 44.5052 21.3096 43.9261 20.8207L24.8386 4.70788C24.3543 4.29906 23.6457 4.29906 23.1614 4.70788Z" fill="black"/>
                <title>icon-diamond</title>
                <desc> diamond icon for sthetic use </desc>
            </svg>            
            <p class="test-form__question__text">¿El color es un elemento importante en tu día a día?</p>
            <div class="container-both-questions">
                <label  for="tres" class="container-both-questions__container-inputs">
                    <a href="#3">Amante de los colores, me dan alegría.
                    <!-- <label class="test-form__question__yes" for="tres"> -->
                    <p>SI</p>
                    <input class="inputTest" id="tres" name="segunda" type="radio" value="3"> 
                    </a>         
                </label>
                <label  for="cuatro"class="container-both-questions__container-inputs">
                    <a href="#3">Lo justo y necesario.
                    <!-- <label class="test-form__question__yes" for="cuatro"> -->
                    <p>NO</p>        
                    <input class="inputTest" id="cuatro"  name="segunda" type="radio" value="4">
                    </a>
                </label>
            </div>
        </div>

        <div id="3" class="test-form__question">
            <p class="number-question">3</p>
            <svg class="diamond-icon" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.1614 4.70788L4.07389 20.8207C3.49481 21.3096 3.45492 22.1881 3.98731 22.7274L23.0749 42.0628C23.5839 42.5784 24.4161 42.5784 24.9251 42.0628L44.0127 22.7274C44.5451 22.1881 44.5052 21.3096 43.9261 20.8207L24.8386 4.70788C24.3543 4.29906 23.6457 4.29906 23.1614 4.70788Z" fill="black"/>
                <title>icon-diamond</title>
                <desc> diamond icon for sthetic use </desc>
            </svg>            
            <p class="test-form__question__text">¿Te interesa el mundo de las piedras semipreciosas y sus beneficios y propiedades?</p>
            <div class="container-both-questions">
                <label for="cinco" class="container-both-questions__container-inputs">
                    <a href="#4">Creo que me aportan equilibrio y fuerza en mi día a día.</a>
                    <!-- <label class="test-form__question__yes" for="cinco"> -->
                    <p>SI</p>    
                    <input class="inputTest" id="cinco"  name="tercera" type="radio" value="5">      
                </label>
                <label  for="seis" class="container-both-questions__container-inputs">
                    <a href="#4">Son bonitas, pero no creo en eso.</a>
                    <!-- <label class="test-form__question__yes" for="seis"> -->
                    <p>NO</p>        
                    <input class="inputTest" id="seis" name="tercera" type="radio" value="6">        
                </label>
            </div>
        </div>
        
        <div id="4" class="test-form__question">
            <p class="number-question">4</p>
            <svg class="diamond-icon" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.1614 4.70788L4.07389 20.8207C3.49481 21.3096 3.45492 22.1881 3.98731 22.7274L23.0749 42.0628C23.5839 42.5784 24.4161 42.5784 24.9251 42.0628L44.0127 22.7274C44.5451 22.1881 44.5052 21.3096 43.9261 20.8207L24.8386 4.70788C24.3543 4.29906 23.6457 4.29906 23.1614 4.70788Z" fill="black"/>
                <title>icon-diamond</title>
                <desc> diamond icon for sthetic use </desc>
            </svg>            
            <p class="test-form__question__text">¿Te gusta vestir elegante?</p>
            <div class="container-both-questions">
                <label for="primera__7" class="container-both-questions__container-inputs">
                    <a href="#5">Lo intento, aunque a veces no me lo pienso demasiado.</a>
                    <!-- <label class="test-form__question__yes" for="primera__7"> -->
                    <p>SI</p>                  
                    <input class="inputTest" id="primera__7" name="cuarta" type="radio" value="7">    
                </label>
                <label for="primera__8" class="container-both-questions__container-inputs">
                <a href="5">No suelo complicarme mucho.</a>
                    <!-- <label class="test-form__question__yes" for="primera__8"> -->
                        <p>NO</p>                     
                    <input class="inputTest" id="primera__8" name="cuarta" type="radio" value="8">
                </label>
            </div>
        </div>

        <div id="5" class="test-form__question">
            <p class="number-question">5</p>
            <svg class="diamond-icon" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.1614 4.70788L4.07389 20.8207C3.49481 21.3096 3.45492 22.1881 3.98731 22.7274L23.0749 42.0628C23.5839 42.5784 24.4161 42.5784 24.9251 42.0628L44.0127 22.7274C44.5451 22.1881 44.5052 21.3096 43.9261 20.8207L24.8386 4.70788C24.3543 4.29906 23.6457 4.29906 23.1614 4.70788Z" fill="black"/>
                <title>icon-diamond</title>
                <desc> diamond icon for sthetic use </desc>
            </svg>            
            <p class="test-form__question__text">¿Te cuesta decidirte por algo a la hora de elegir?</p>
            <div class="container-both-questions">
                <label for="primera__9" class="container-both-questions__container-inputs">
                    <a href="#6">La mayoría de las veces soy indecisa.</a>
                    <!-- <label class="test-form__question__yes" for="primera__9"> -->
                    <p>SI</p>    
                    <input class="inputTest" id="primera__9" name="quinta" type="radio" value="9">
                </label>
                <label  for="primera__10" class="container-both-questions__container-inputs">
                    <a href="#6">Normalmente suelo tener muy claro que quiero.</a>
                    <!-- <label class="test-form__question__yes" for="primera__10"> -->
                    <p>NO</p>    
                    <input class="inputTest" id="primera__10" name="quinta" type="radio" value="10">
                </label>
            </div>
        </div>

        <div id="6" class="test-form__question">
            <p class="number-question">6</p>
            <svg class="diamond-icon" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.1614 4.70788L4.07389 20.8207C3.49481 21.3096 3.45492 22.1881 3.98731 22.7274L23.0749 42.0628C23.5839 42.5784 24.4161 42.5784 24.9251 42.0628L44.0127 22.7274C44.5451 22.1881 44.5052 21.3096 43.9261 20.8207L24.8386 4.70788C24.3543 4.29906 23.6457 4.29906 23.1614 4.70788Z" fill="black"/>
                <title>icon-diamond</title>
                <desc> diamond icon for sthetic use </desc>
            </svg>
            <p class="test-form__question__text">¿Te gusta probar cosas nuevas en tus looks?</p>
            <div class="container-both-questions">
                <label for="primera__11" class="container-both-questions__container-inputs">
                    <a href="#7">Me gusta arriesgarme.</a>
                    <!-- <label class="test-form__question__yes" for="primera__11"> -->
                    <p>SI</p>
                    <input class="inputTest" id="primera__11" name="sexta" type="radio" value="11">
                </label>
                <label for="primera__12" class="container-both-questions__container-inputs">
                    <a href="#7">Más vale prevenir que curar.</a>
                    <!-- <label class="test-form__question__yes" for="primera__12"> -->
                    <p>NO</p>
                    <input class="inputTest" id="primera__12" name="sexta" type="radio" value="12">
                </label>
            </div>
        </div>

        <div id="7" class="test-form__question">
            <p class="number-question">7</p>
            <svg class="diamond-icon" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.1614 4.70788L4.07389 20.8207C3.49481 21.3096 3.45492 22.1881 3.98731 22.7274L23.0749 42.0628C23.5839 42.5784 24.4161 42.5784 24.9251 42.0628L44.0127 22.7274C44.5451 22.1881 44.5052 21.3096 43.9261 20.8207L24.8386 4.70788C24.3543 4.29906 23.6457 4.29906 23.1614 4.70788Z" fill="black"/>
                <title>icon-diamond</title>
                <desc> diamond icon for sthetic use </desc>
            </svg>
            <p class="test-form__question__text">¿Sueles hacer escapadas a lugares naturales?</p>
            <div class="container-both-questions">
                <label for="primera__13" class="container-both-questions__container-inputs">
                    <a href="#resultsButton">Necesito desconectar del ajetreo de la ciudad.</a>
                    <!-- <label class="test-form__question__yes" for="primera__13"> -->
                        <p>SI</p> 
                        <input class="inputTest" id="primera__13" name="septima" type="radio" value="13">
                    </label>
                </label>
                
                <label for="primera__14" class="container-both-questions__container-inputs">
                    <!-- <label class="test-form__question__yes" for="primera__14"> -->
                        <p>NO</p> 
                        <a href="#resultsButton">Me gusta la naturaleza pero no hago muchas escapadas.</a>
                        <input class="inputTest" id="primera__14" name="septima" type="radio" value="14">
                </label>
            </div>
        </div>
        
    </form>
    <button id="resultsButton" class="button">Resultados</button>
</section>
<!-- <a href="./imagenes.html?images=${text}">Ver Resultados -->

<script type="module" src="<?php echo $path; ?>js/sections/test.js"></script>