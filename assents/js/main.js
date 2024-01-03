jQuery(document).ready(function($){
    $('.site-header .menu-principal .menu').slicknav({
        label: '',
        appendTo: '.site-header'
    });

    //bx slider 
    $(".listado-testimoniales").bxSlider({
        auto: true,
        mode: 'fade',
        controls: false
    });

    //mapa
    const lat =  document.getElementById('lat').value;
    const lng =  document.getElementById('lng').value;
    const address =  document.getElementById('address').value;
    
    if ( lat && lng && address){
        var map = L.map('map').setView([lat, lng], 13);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
    
        L.marker([lat, lng]).addTo(map)
            .bindPopup(address)
            .openPopup();
    
    }

   

 });
 
