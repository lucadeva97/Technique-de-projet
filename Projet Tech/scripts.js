function initMap() {
    const mapOptions = {
        center: { lat: 48.8566, lng: 2.3522 }, // Coordonnées de Paris
        zoom: 3
    };

    const map = new google.maps.Map(document.getElementById('map'), mapOptions);

    // Gestion des points interactifs
    const points = [
        { coords: { lat: 48.8566, lng: 2.3522 }, lang: 'fr', text: 'Accent parisien' }, // Paris, France
        { coords: { lat: -27.5954, lng: -48.5480 }, lang: 'pt', text: 'Sotaque florianopolitano' }, // Florianópolis, Brésil
        { coords: { lat: -3.7172, lng: -38.5434 }, lang: 'pt', text: 'Sotaque fortalezense' }, // Fortaleza, Brésil
        { coords: { lat: 45.5017, lng: -73.5673 }, lang: 'fr', text: 'Accent montréalais' }, // Montréal, Canada
        { coords: { lat: 40.4168, lng: -3.7038 }, lang: 'es', text: 'Acento madrileño' }, // Madrid, Espagne
        { coords: { lat: 45.1885, lng: 5.7245 }, lang: 'fr', text: 'Accent grenoblois' }, // Grenoble, France
        { coords: { lat: 43.2965, lng: 5.3698 }, lang: 'fr', text: 'Accent marseillais' }, // Marseille, France
        { coords: { lat: 45.4408, lng: 12.3155 }, lang: 'it', text: 'Accento veneziano' }, // Venise, Italie
        { coords: { lat: -23.5505, lng: -46.6333 }, lang: 'pt', text: 'Sotaque paulistano' }, // São Paulo, Brésil
        { coords: { lat: 41.9028, lng: 12.4964 }, lang: 'it', text: 'Accento romano' }, // Rome, Italie
        { coords: { lat: 40.1209, lng: 9.0129 }, lang: 'it', text: 'Accento sardo' } // Sardaigne, Italie
    ];

    points.forEach(point => {
        const marker = new google.maps.Marker({
            position: point.coords,
            map: map,
            title: point.text
        });

        const infowindow = new google.maps.InfoWindow({
            content: `<div class="custom-infowindow ${point.lang}"><b>${point.text}</b></div>`
        });

        marker.addListener('click', () => {
            infowindow.open(map, marker);
        });
    });
}

// Changement de langue
document.querySelectorAll('.accent').forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();
        const lang = e.target.getAttribute('data-lang');
        alert(`Chargement des accents pour la langue : ${lang}`);
        // Ajoutez ici la logique pour filtrer les données par langue
    });
});
