const listOfImages = [
    './images/test/imagen1.jpg',
    './images/test/imagen2.png',
    './images/test/imagen3.jpg',
    './images/test/imagen4.png',
    './images/test/imagen5.png',
    './images/test/imagen6.png',
    './images/test/imagen7.jpg',
    './images/test/imagen8.jpg',
    './images/test/imagen9.png',
    './images/test/imagen10.png',
    './images/test/imagen11.png',
    './images/test/imagen12.png',
    './images/test/imagen13.png',
    './images/test/imagen14.png',
];

// const selectedImage =

const queryString = window.location.search; 
const urlParams = new URLSearchParams(queryString);

const images = urlParams.get('images').split(',')

images.forEach(function(image) {
    document.querySelector('#main')
        .innerHTML += `<img src="${listOfImages[image]}">`;
});