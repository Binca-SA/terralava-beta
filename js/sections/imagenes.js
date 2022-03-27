const listOfImages = [
    './images/test/imagen1.webp',
    './images/test/imagen2.webp',
    './images/test/imagen3.webp',
    './images/test/imagen4.webp',
    './images/test/imagen5.webp',
    './images/test/imagen6.webp',
    './images/test/imagen7.webp',
    './images/test/imagen8.webp',
    './images/test/imagen9.webp',
    './images/test/imagen10.webp',
    './images/test/imagen11.webp',
    './images/test/imagen12.webp',
    './images/test/imagen13.webp',
    './images/test/imagen14.webp'
];


// const selectedImage =

const queryString = window.location.search; 
const urlParams = new URLSearchParams(queryString);

const images = urlParams.get('images').split(',')
const result = images.filter(image => image.length > 0);
result.forEach(function(image) {
    document.querySelector('#main')
        .innerHTML += `<img img decode="async" loading="lazy" class="img-resultTest" src="${listOfImages[image]}">`;
        console.log(image);
});

