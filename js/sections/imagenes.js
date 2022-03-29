const listOfImages = [
    {name:'Anillo Effie', price:'44€', alt:'', img:'../images/test/imagen1.webp'},
    {name:'Pendientes Caeli', price:'12€', alt:'', img:'../images/test/imagen2.webp'},
    {name:'Pendientes Naal', price:'18€', alt:'', img:'../images/test/imagen3.webp'},
    {name: 'Pendientes Maeve', price:'19.50€', alt:'', img:'../images/test/imagen4.webp'},
    {name:'Pulsera Alanis', price:'27€', alt:'', img:'../images/test/imagen5.webp'},
    {name:'Anillo Dian', price:'23€', alt:'', img:'../images/test/imagen6.webp'},
    {name: 'Anillo Hal', price:'23€', alt:'', img:'../images/test/imagen7.webp'},
    {name: 'Colgante Enya', price:'20€', alt:'', img:'../images/test/imagen8.webp'},
    {name: 'Pendientes Miriel', price:'14€', alt:'', img:'../images/test/imagen9.webp'},
    {name: 'Colgante Estel', price:'25€', alt:'', img:'../images/test/imagen10.webp'},
    {name: 'Colgante Allene', price:'22€', alt:'', img:'../images/test/imagen11.webp'},
    {name: 'Anillo Glen', price:'28.50€', alt:'', img:'../images/test/imagen12.webp'},
    {name: 'Collar Braeden Amazonita', price:'31.50€', alt:'', img:'../images/test/imagen13.webp'},
    {name: 'Colgante Lalla', price:'28€', alt:'', img:'../images/test/imagen14.webp'}
];

// const selectedImage =

const queryString = window.location.search; 
const urlParams = new URLSearchParams(queryString);

const images = urlParams.get('images').split(',')
const result = images.filter(image => image.length > 0);
result.forEach(function(image) {
    const selectedImage=listOfImages[image];
    document.querySelector('#main')
        .innerHTML += `
        <div class="container-resultsImage">
            <img alt"" decode="async" loading="lazy" class="container-resultsImage__imgResultTest" src="${selectedImage.img}">
            <p class="container-resultsImage__nameResult">${selectedImage.name}</p>
            <p class="container-resultsImage__nameprice">${selectedImage.price}</p>
        </div>
        `;
        
        console.log(image);
});

