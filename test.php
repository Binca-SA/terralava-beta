<?php $title="Test Mi Joya Perfecta";?>
<?php include('./php/head.php')?>
<?php include('./php/navigation.php')?>
<section class="form-section section-margin">
    <div class="container-header-test">
        <h1 class="container-header-test__title-test">Descúbre tu joya perfecta con nuestro test </h1>
        <button class="container-header-test__start-test"> <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="23.5374" cy="23.6665" r="9.78935" stroke="#9D0B0B"/>
            <circle cx="24.0524" cy="24.181" r="3.60127" fill="#9D0B0B"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.38239 23.8691C7.65308 20.0306 12.9053 15.7023 19.4937 14.395C26.238 13.0567 34.4955 14.8625 43.6057 23.8597C40.4543 27.5345 35.0058 31.6932 28.2803 32.952C21.3823 34.2431 13.0581 32.4998 4.38239 23.8691ZM3.30953 23.5918C6.63606 19.569 12.1948 14.8238 19.2991 13.4141C26.6068 11.964 35.4305 14.0657 44.9884 23.8313L44.6916 24.1218C41.4871 28.0153 35.706 32.5795 28.4642 33.9349C21.0185 35.3286 12.1165 33.3133 3 23.8913L3.30953 23.5918Z" fill="#9D0B0B"/>
            </svg>
            <title>Icon Eye</title>
            </svg>COMENZAR
        </button>
        <p class="container-header-test__intro-text" >Formado por 7 preguntas, elige la respuesta con la que más te identifiques</p>
    </div>
    <form class="test-form" name="joya" action="">
        <div class="test-form__question">
            <p class="number-question">1</p>
                <svg class="diamond-icon" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.1614 4.70788L4.07389 20.8207C3.49481 21.3096 3.45492 22.1881 3.98731 22.7274L23.0749 42.0628C23.5839 42.5784 24.4161 42.5784 24.9251 42.0628L44.0127 22.7274C44.5451 22.1881 44.5052 21.3096 43.9261 20.8207L24.8386 4.70788C24.3543 4.29906 23.6457 4.29906 23.1614 4.70788Z" fill="black"/>
                <title>icon-diamond</title>
                <desc> diamond icon for sthetic use </desc>
            </svg>
            <p class="test-form__question__text">¿Te gusta ponerte joyas que destacan a simple vista?</p>
            <div class="container-both-questions">
                <div class="container-both-questions__container-inputs">
                    <label class="test-form__question__yes" for="primera__1">Me gusta que sea una de las cosas que más destacan de mi estilo.
                        <p>SI</p> 
                        <input id="primera__1" name="primera" type="radio" value="1">
                    </label>
                </div>
                <div class="container-both-questions__container-inputs">
                    <label class="test-form__question__yes" for="primera__2">Prefiero destacar por otras cosas. 
                        <p>NO</p>
                        <input id="primera__2"  name="primera" type="radio" value="2">
                    </label>
                </div>
            </div>
        </div>

        <div class="test-form__question">
            <p class="number-question">2</p>
            <svg class="diamond-icon" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.1614 4.70788L4.07389 20.8207C3.49481 21.3096 3.45492 22.1881 3.98731 22.7274L23.0749 42.0628C23.5839 42.5784 24.4161 42.5784 24.9251 42.0628L44.0127 22.7274C44.5451 22.1881 44.5052 21.3096 43.9261 20.8207L24.8386 4.70788C24.3543 4.29906 23.6457 4.29906 23.1614 4.70788Z" fill="black"/>
                <title>icon-diamond</title>
                <desc> diamond icon for sthetic use </desc>
            </svg>            
            <p class="test-form__question__text">¿El color es un elemento importante en tu día a día?</p>
            <div class="container-both-questions">
                <div class="container-both-questions__container-inputs">
                    <label class="test-form__question__yes" for=" ">SI Amante de los colores, me dan alegría. </label>
                    <input name="segunda" type="radio" value="3">
                </div>
                <div class="container-both-questions__container-inputs">
                    <label class="test-form__question__yes" for=" ">NO Lo justo y necesario. </label>
                    <input name="segunda" type="radio" value="4">
                </div>
            </div>
        </div>

        <div class="test-form__question">
            <p class="number-question">3</p>
            <svg class="diamond-icon" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.1614 4.70788L4.07389 20.8207C3.49481 21.3096 3.45492 22.1881 3.98731 22.7274L23.0749 42.0628C23.5839 42.5784 24.4161 42.5784 24.9251 42.0628L44.0127 22.7274C44.5451 22.1881 44.5052 21.3096 43.9261 20.8207L24.8386 4.70788C24.3543 4.29906 23.6457 4.29906 23.1614 4.70788Z" fill="black"/>
                <title>icon-diamond</title>
                <desc> diamond icon for sthetic use </desc>
            </svg>            
            <p class="test-form__question__text">¿Te interesa el mundo de las piedras semipreciosas y sus beneficios y propiedades?</p>
            <div class="container-both-questions">
                <div class="container-both-questions__container-inputs">
                    <label class="test-form__question__yes" for=" ">SI Creo que me aportan equilibrio y fuerza en mi día a día.</label>
                    <input name="tercera" type="radio" value="5">
                </div>
                <div class="container-both-questions__container-inputs">
                    <label class="test-form__question__yes" for=" ">NO Son bonitas, pero no creo en eso </label>
                    <input name="tercera" type="radio" value="6">
                </div>
            </div>
        </div>
        
        <div class="test-form__question">
            <p class="number-question">4</p>
            <svg class="diamond-icon" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.1614 4.70788L4.07389 20.8207C3.49481 21.3096 3.45492 22.1881 3.98731 22.7274L23.0749 42.0628C23.5839 42.5784 24.4161 42.5784 24.9251 42.0628L44.0127 22.7274C44.5451 22.1881 44.5052 21.3096 43.9261 20.8207L24.8386 4.70788C24.3543 4.29906 23.6457 4.29906 23.1614 4.70788Z" fill="black"/>
                <title>icon-diamond</title>
                <desc> diamond icon for sthetic use </desc>
            </svg>            
            <p class="test-form__question__text">¿Te gusta vestir elegante?</p>
            <div class="container-both-questions">
                <div class="container-both-questions__container-inputs">
                    <label class="test-form__question__yes" for=" ">SI Lo intento, aunque a veces me gusta no pensar demasiado en qué ponerme.</label>
                    <input name="cuarta" type="radio" value="7">
                </div>
                <div class="container-both-questions__container-inputs">
                    <label class="test-form__question__yes" for=" ">NO No suelo complicarme mucho.</label>
                    <input name="cuarta" type="radio" value="8">
                </div>
            </div>
        </div>

        <div class="test-form__question">
            <p class="number-question">5</p>
            <svg class="diamond-icon" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.1614 4.70788L4.07389 20.8207C3.49481 21.3096 3.45492 22.1881 3.98731 22.7274L23.0749 42.0628C23.5839 42.5784 24.4161 42.5784 24.9251 42.0628L44.0127 22.7274C44.5451 22.1881 44.5052 21.3096 43.9261 20.8207L24.8386 4.70788C24.3543 4.29906 23.6457 4.29906 23.1614 4.70788Z" fill="black"/>
                <title>icon-diamond</title>
                <desc> diamond icon for sthetic use </desc>
            </svg>            
            <p class="test-form__question__text">¿Te cuesta decidirte por algo a la hora de elegir?</p>
            <div class="container-both-questions">
                <div class="container-both-questions__container-inputs">
                    <label class="test-form__question__yes" for=" ">SI La mayoría de las veces soy indecisa.</label>
                    <input name="quinta" type="radio" value="9">
                </div>
                <div class="container-both-questions__container-inputs">
                    <label class="test-form__question__yes" for=" ">NO Normalmente suelo tener muy claro que quiero.</label>
                    <input name="quinta" type="radio" value="10">
                </div>
            </div>
        </div>

        <div class="test-form__question">
            <p class="number-question">6</p>
            <svg class="diamond-icon" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.1614 4.70788L4.07389 20.8207C3.49481 21.3096 3.45492 22.1881 3.98731 22.7274L23.0749 42.0628C23.5839 42.5784 24.4161 42.5784 24.9251 42.0628L44.0127 22.7274C44.5451 22.1881 44.5052 21.3096 43.9261 20.8207L24.8386 4.70788C24.3543 4.29906 23.6457 4.29906 23.1614 4.70788Z" fill="black"/>
                <title>icon-diamond</title>
                <desc> diamond icon for sthetic use </desc>
            </svg>
            <p class="test-form__question__text">¿Te gusta probar cosas nuevas en tus looks?</p>
            <div class="container-both-questions">
                <div class="container-both-questions__container-inputs">
                    <label class="test-form__question__yes" for=" ">SI Me gusta arriesgarme.</label>
                    <input name="sexta" type="radio" value="11">
                </div>
                <div class="container-both-questions__container-inputs">
                    <label class="test-form__question__yes" for=" ">NO Más vale prevenir que curar.</label>
                    <input name="sexta" type="radio" value="12">
                </div>
            </div>
        </div>

        <div class="test-form__question">
            <p class="number-question">7</p>
            <svg class="diamond-icon" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.1614 4.70788L4.07389 20.8207C3.49481 21.3096 3.45492 22.1881 3.98731 22.7274L23.0749 42.0628C23.5839 42.5784 24.4161 42.5784 24.9251 42.0628L44.0127 22.7274C44.5451 22.1881 44.5052 21.3096 43.9261 20.8207L24.8386 4.70788C24.3543 4.29906 23.6457 4.29906 23.1614 4.70788Z" fill="black"/>
                <title>icon-diamond</title>
                <desc> diamond icon for sthetic use </desc>
            </svg>
            <p class="test-form__question__text">¿Sueles hacer escapadas a lugares naturales?</p>
            <div class="container-both-questions">
                <div class="container-both-questions__container-inputs">
                    <label class="test-form__question__yes" for=" ">SI Necesito desconectar del ajetreo de la ciudad.</label>
                    <input name="septima" type="radio" value="13">
                </div>
                <div class="container-both-questions__container-inputs">
                    <label class="test-form__question__yes" for=" ">NO Me gusta la naturaleza pero no hago muchas escapadas .</label>
                    <input name="septima" type="radio" value="14">
                </div>
            </div>
        </div>
    </form>
</section>
<a href="./imagenes.html?images=${text}">Ver Resultados</a>
<button class="button">Resultados</button>
<script type="module" src="./js/sections/test.js"></script>