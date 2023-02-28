// object-fit polyfill run
/*objectFitImages();*/

/* init Jarallax
jarallax(document.querySelectorAll('.jarallax'));

jarallax(document.querySelectorAll('.jarallax-img'), {
    keepImg: true,
});*/

/* leaflet */
let map = L.map('map').setView([10.0684312,-69.3079754], 15);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([10.0662333887202, -69.30635792619164]).addTo(map)
    .bindPopup('Network Solutions')

/* glider */
new Glider(document.querySelector('.carousel__list'), {
    slidesToShow: 2,
    slidesToScroll: 2,
    draggable: true,
    dots: '.carousel__indicator',
    arrows: {
        prev: '.btn-carousel-previous',
        next: '.btn-carousel-next'
    },
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 'auto',
          slidesToScroll: 'auto',
          itemWidth: 150,
          duration: 0.25
        }
      },{
        breakpoint: 1024,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 1,
          itemWidth: 150,
          duration: 0.25
        }
      }
    ]
  });