document.querySelector('.button').addEventListener('click', function(){
    //aqui me gusrdo todo los elementos del formulario//
    const elements = document.forms.joya.elements;

    const images = [
        elements.primera.value,
        elements.segunda.value,
        elements.tercera.value,
        elements.cuarta.value,
        elements.quinta.value,
        elements.sexta.value,
        elements.septima.value,
    ]

    // const primeroElemento = elements.primera.value;
    // const segundoElemento = elements.segunda.value;
    // const tercerElemento = elements.tercera.value;
    // const cuartoElemento = elements.cuarta.value;
    // const quintoElemento = elements.quinta.value;
    // const sextoElemento = elements.sexta.value;
    // const septimoElemento = elements.septima.value;

    let text = '';
    images.forEach(function(images){
        text =text + `${images},`;
    });

    // console.log(primeroElemento, segundoElemento);

    window.location = `../resultados/?images=${text}`
});


//SCROLL SMOOTH//
// document.querySelectorAll('.imputTest').forEach(anchor => {
//     anchor.addEventListener('click', function (e) {
//         e.preventDefault();

//         document.querySelector(this).scrollIntoView({
//             behavior: 'smooth'
//         });
//     });
// });

// const element = document.querySelector(".container-both-questions__container-inputs");
// element.scrollIntoView({
//     behavior: 'smooth'
// });


const scrollInto = function(tagToGo) {
    var element = document.querySelector(tagToGo);
    element.scrollIntoView();
}
scrollInto();