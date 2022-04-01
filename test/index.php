<?php $title="Test Mi Joya Perfecta";?>
<?php $path="../";?>
<?php include($path . 'php/head.php')?>
<?php include($path . 'php/navigation.php')?>
<section class="form-section section-margin">
    <div class="container-header-test">
        <h1 class="container-header-test__title-test">Descúbre tu joya perfecta con nuestro test </h1>
        <a class="links" href="#1">
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
                <label onclick="scrollInto('#2')" for="primera__1" class="container-both-questions__container-inputs">
                    <p class="pYes">SI</p>
                    <a class="container-both-questions__links-quest links" href="#2">Me gusta que sea una de las cosas que más destacan de mi estilo.</a>
                    <!-- <label onclick="scrollInto('#')" class="test-form__question__yes" for="primera__1"> -->                
                    <input class="inputTest" id="primera__1" name="primera" type="radio" value="1"> 
                </label>           
                <label onclick="scrollInto('#2')" for="dos" class="container-both-questions__container-inputs">
                    <p class="pNo">NO</p>
                    <a class="container-both-questions__links-quest links" href="#2">Prefiero destacar por otras cosas.</a> 
                    <!-- <label onclick="scrollInto('#')" class="test-form__question__yes" for="dos"> -->
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
                <label onclick="scrollInto('#3')"  for="tres" class="container-both-questions__container-inputs">
                    <p class="pYes">SI</p>
                    <a class="container-both-questions__links-quest links" href="#3">Amante de los colores, me dan alegría.
                    <!-- <label onclick="scrollInto('#')" class="test-form__question__yes" for="tres"> -->
                    <input class="inputTest" id="tres" name="segunda" type="radio" value="3"> 
                    </a>         
                </label>
                <label onclick="scrollInto('#3')" for="cuatro"class="container-both-questions__container-inputs">
                    <p class="pNo">NO</p> 
                    <a class="container-both-questions__links-quest links" href="#3">Lo justo y necesario.
                    <!-- <label onclick="scrollInto('#')" class="test-form__question__yes" for="cuatro"> -->        
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
                <label onclick="scrollInto('#4')" for="cinco" class="container-both-questions__container-inputs">
                    <p class="pYes">SI</p>    
                    <a class="container-both-questions__links-quest links" href="#4">Creo que me aportan equilibrio y fuerza en mi día a día.</a>
                    <!-- <label onclick="scrollInto('#')" class="test-form__question__yes" for="cinco"> -->
                    <input class="inputTest" id="cinco"  name="tercera" type="radio" value="5">      
                </label>
                <label onclick="scrollInto('#4')"  for="seis" class="container-both-questions__container-inputs">
                    <p class="pNo">NO</p>   
                    <a class="container-both-questions__links-quest links" href="#4">Son bonitas, pero no creo en eso.</a>
                    <!-- <label onclick="scrollInto('#')" class="test-form__question__yes" for="seis"> -->    
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
                <label onclick="scrollInto('#5')" for="primera__7" class="container-both-questions__container-inputs">
                    <p class="pYes">SI</p>        
                    <a class="container-both-questions__links-quest links" href="#5">Lo intento, aunque a veces no me lo pienso demasiado.</a>
                    <!-- <label onclick="scrollInto('#')" class="test-form__question__yes" for="primera__7"> -->          
                    <input class="inputTest" id="primera__7" name="cuarta" type="radio" value="7">    
                </label>
                <label onclick="scrollInto('#5')" for="primera__8" class="container-both-questions__container-inputs">
                    <p class="pNo">NO</p>     
                    <a class="container-both-questions__links-quest links" href="5">No suelo complicarme mucho.</a>
                    <!-- <label onclick="scrollInto('#')" class="test-form__question__yes" for="primera__8"> -->
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
                <label onclick="scrollInto('#6')" for="primera__9" class="container-both-questions__container-inputs">
                    <p class="pYes">SI</p>    
                    <a class="container-both-questions__links-quest links" href="#6">La mayoría de las veces soy indecisa.</a>
                    <!-- <label onclick="scrollInto('#')" class="test-form__question__yes" for="primera__9"> -->
                    <input class="inputTest" id="primera__9" name="quinta" type="radio" value="9">
                </label>
                <label onclick="scrollInto('#6')"  for="primera__10" class="container-both-questions__container-inputs">
                    <p class="pNo">NO</p>    
                    <a class="container-both-questions__links-quest links" href="#6">Normalmente suelo tener muy claro que quiero.</a>
                    <!-- <label onclick="scrollInto('#')" class="test-form__question__yes" for="primera__10"> -->
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
                <label onclick="scrollInto('#7')" for="primera__11" class="container-both-questions__container-inputs">
                    <p class="pYes">SI</p>
                    <a class="container-both-questions__links-quest links" href="#7">Me gusta arriesgarme.</a>
                    <!-- <label onclick="scrollInto('#')" class="test-form__question__yes" for="primera__11"> -->
                    <input class="inputTest" id="primera__11" name="sexta" type="radio" value="11">
                </label>
                <label onclick="scrollInto('#7')" for="primera__12" class="container-both-questions__container-inputs">
                    <p class="pNo">NO</p>
                    <a class="container-both-questions__links-quest links" href="#7">Más vale prevenir que curar.</a>
                    <!-- <label onclick="scrollInto('#')" class="test-form__question__yes" for="primera__12"> -->
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
                <label onclick="scrollInto('#resultsButton')" for="primera__13" class="container-both-questions__container-inputs">
                    <p class="pYes">SI</p>
                    <a class="container-both-questions__links-quest links" href="#resultsButton">Necesito desconectar del ajetreo de la ciudad.</a>
                    <!-- <label onclick="scrollInto('#')" class="test-form__question__yes" for="primera__13"> --> 
                    <input class="inputTest" id="primera__13" name="septima" type="radio" value="13">
                </label>
                
                <label onclick="scrollInto('#resultsButton')" for="primera__14" class="container-both-questions__container-inputs">
                    <!-- <label onclick="scrollInto('#')" class="test-form__question__yes" for="primera__14"> -->
                    <p class="pNo">NO</p> 
                    <a class="container-both-questions__links-quest links" href="#resultsButton">Me gusta la naturaleza pero no hago muchas escapadas.</a>
                    <input class="inputTest" id="primera__14" name="septima" type="radio" value="14">
                </label>
            </div>
        </div>
        
    </form>
    <button id="resultsButton" class="cta-buttoms button">
        <svg width="25" height="25" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_341_45)">
            <path d="M17.064 43.336C28.008 34.984 33.864 31.144 45.192 24.04C33.864 16.936 28.008 13.096 17.064 4.744L13.8 9.544C25.128 16.072 29.544 18.568 40.488 24.04C29.544 29.512 25.128 32.008 13.8 38.536L17.064 43.336Z" fill="#000"/>
            </g>
            <defs>
            <clipPath id="clip0_341_45">
            <rect width="48" height="48" fill="white"/>
            </clipPath>
            </defs>
        </svg>RESULTADOS
    </button>
</section>
<!-- <a href="./imagenes.html?images=${text}">Ver Resultados -->

<script type="module" src="<?php echo $path; ?>js/sections/test.js"></script>