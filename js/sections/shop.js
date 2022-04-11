// filtro//
const btnFiltro = document.querySelector("#btnFiltro");
const filtro = document.querySelector("#filtro");

btnFiltro.addEventListener("click", function(){
    filtro.classList.toggle("mostrarFiltro");
});


function getHTML(joya) {
    return `
    <div class="product">
        <div class="product__container-image">
            <a href="../comprar/comprar.php">
            <img alt="${joya.descripcion}" class="product__image" src="${joya.imagen}">
            </a>
        </div>
        <div class="product__name">
            <h5 class="product__name__title">${joya.nombre}</h5>
        </div>
        <div class="product__price">
            <p class="product__price">${joya.precio}</p>
        </div>
        <!-- <p>${joya.descripcion}</p> -->
    </div>`
}

function paintProducts(joyeria) {
    const list = document.querySelector('.list');
    list.innerHTML = '';
    joyeria.forEach(function (joya) {
        list.innerHTML = list.innerHTML + getHTML(joya);
    });
}

let joyas = []

function redenrizarProductos() {    
    //IMPRESION PRODUCTOS//
    const urlJoyeria = '../json/data2.json';
    axios.get(urlJoyeria)
        .then(function (response) { 
            joyas = response.data;
            paintProducts(joyas);
        })
        .catch(function (error) {
            alert('La petición ha fallado');
        });
}

redenrizarProductos()

//FILTRAR CADA CATEGORÍA//////////////////////////////////////////

// let selectedFilter = 'collares'
// PaintCategories(selectedFilter);


// //BOTONES FILTRO//

document.querySelectorAll('.filtro__link').forEach(function(button){
    button.addEventListener('click', function(){
        PaintCategories(button.textContent)
    })
})

function PaintCategories(selectedFilter) {
    document.querySelector('.list').innerHTML = '';
    joyas.forEach(function (joya) {
        if (joya.filtro === selectedFilter) {
            document.querySelector('.list').innerHTML += getHTML(joya);
        }
    });
}

//COMPRAR PRODUCTO//
// const params = new URLSearchParams(window.location.search);
// const section= params.get('section');
// const productId = params.get('product')

// function comprar(comprar){
//     const category = products[params.get('section')];
//     const product = category.elements.find(function(){
//         return product.id === productId;
//     })
//     console.log(comprar);
// }