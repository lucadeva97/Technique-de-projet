function initMap() {
    const mapOptions = {
        center: { lat: 48.8566, lng: 2.3522 }, // Coordonnées de Paris
        zoom: 3
    };

    const map = new google.maps.Map(document.getElementById('map'), mapOptions);

    // Gestion des points interactifs
    const points = [
        { coords: { lat: 48.8566, lng: 2.3522 }, lang: 'fr', text: 'Accent de Paris', img: 'paris.jpeg' }, // Paris, France
        { coords: { lat: -27.5954, lng: -48.5480 }, lang: 'pt', text: 'Sotaque de Florianópolis', img: 'flo.jpg', audio: 'extraits/florianopolis.ogg' }, // Florianópolis, Brésil
        { coords: { lat: -3.7172, lng: -38.5434 }, lang: 'pt', text: 'Sotaque de Fortaleza', img: 'forta.jpg', audio: 'extraits/fortaleza.ogg' }, // Fortaleza, Brésil
        { coords: { lat: 45.5017, lng: -73.5673 }, lang: 'fr', text: 'Accent de Montréal', img: 'montreal.jpeg' }, // Montréal, Canada
        { coords: { lat: 40.4168, lng: -3.7038 }, lang: 'es', text: 'Acento de Madrid', img: 'madrid.jpg' }, // Madrid, Espagne
        { coords: { lat: 45.1885, lng: 5.7245 }, lang: 'fr', text: 'Accent de Grenoble', img: 'grenoble.jpg' }, // Grenoble, France
        { coords: { lat: 43.2965, lng: 5.3698 }, lang: 'fr', text: 'Accent de Marseille', img: 'marseille.jpeg' }, // Marseille, France
        { coords: { lat: 45.4408, lng: 12.3155 }, lang: 'it', text: 'Accento di Venezia', img: 'venise.jpeg' }, // Venise, Italie
        { coords: { lat: -23.5505, lng: -46.6333 }, lang: 'pt', text: 'Sotaque de São Paulo', img: 'sp.jpg', audio: 'extraits/saopaulo.mp4' }, // São Paulo, Brésil
        { coords: { lat: 41.9028, lng: 12.4964 }, lang: 'it', text: 'Accento di Roma', img: 'rome.jpeg' }, // Rome, Italie
        { coords: { lat: 40.9225, lng: 9.4869 }, lang: 'it', text: 'Accento di Olbia', img: 'marseille.jpeg' }, // Olbia, Italie 
        { coords: { lat: -25.4284, lng: -49.2733 }, lang: 'it', text: 'Sotaque de Curitiba', img: 'curitiba.jpg', audio: 'extraits/curitiba.ogg' }, // Curitiba, Brésil 
        { coords: { lat: -34.6037, lng: -58.3816 }, lang: 'es', text: 'Acento de Buenos Aires', img: 'buenosaires.jpg', audio: 'extraits/buenosaires.ogg' }, // Buenos Aires, Argentine
        { coords: { lat: 4.7110, lng: -74.0721 }, lang: 'es', text: 'Acento de Bogotá', img: 'bogota.jpg', audio: 'extraits/bogota.ogg' }, // Bogotá, Colombie
        { coords: { lat: 10.4806, lng: -66.9036 }, lang: 'es', text: 'Acento de Caracas', img: 'caracas.jpg', audio: 'extraits/caracas.ogg' }, // Caracas, Venezuela
        { coords: { lat: 4.9224, lng: -52.3135 }, lang: 'fr', text: 'Accent de Cayenne', img: 'cayenne.jpg', audio: 'extraits/cayenne.mp3' }, // Cayenne, Guyane française
        { coords: { lat: -23.8683, lng: -49.3324 }, lang: 'pt', text: 'Sotaque de Itararé', img: 'itarare.jpg', audio: 'extraits/itarare.ogg' }, // Itararé, Brésil
        { coords: { lat: 0.0355, lng: -51.0705 }, lang: 'pt', text: 'Sotaque de Macapá', img: 'macapa.jpg', audio: 'extraits/macapa.ogg' }, // Macapá, Brésil
        { coords: { lat: -30.0346, lng: -51.2177 }, lang: 'pt', text: 'Sotaque de Porto Alegre', img: 'portoalegre.jpg', audio: 'extraits/portoalegre.ogg' }, // Porto Alegre, Brésil
        { coords: { lat: -2.5307, lng: -44.3068 }, lang: 'pt', text: 'Sotaque de São Luís', img: 'saoluis.jpg', audio: 'extraits/saoluis.ogg' }, // São Luís, Brésil
        { coords: { lat: 14.6161, lng: -61.0588 }, lang: 'fr', text: 'Accent de Fort-de-France', img: 'fortdefrance.jpg', audio: 'extraits/fortdefrance.mpeg' } // Fort-de-France, Martinique
    ];

    let currentInfoWindow = null;

    points.forEach(point => {
        const marker = new google.maps.Marker({
            position: point.coords,
            map: map,
            title: point.text
        });
    
        let contentString = `<div class="custom-infowindow ${point.lang}"><b>${point.text}</b></div>`;
        if (point.text === 'Accent de Paris' || 
            point.text === 'Sotaque de Florianópolis' || 
            point.text === 'Sotaque de Fortaleza' || 
            point.text === 'Accent de Montréal' || 
            point.text === 'Acento de Madrid' || 
            point.text === 'Accent de Grenoble' || 
            point.text === 'Accent de Marseille' || 
            point.text === 'Accento di Venezia' || 
            point.text === 'Sotaque de São Paulo' || 
            point.text === 'Accento di Roma' || 
            point.text === 'Accento di Olbia' || 
            point.text === 'Sotaque de Curitiba' || 
            point.text === 'Acento de Buenos Aires' || 
            point.text === 'Acento de Bogotá' || 
            point.text === 'Acento de Caracas' || 
            point.text === 'Accent de Cayenne' || 
            point.text === 'Sotaque de Itararé' || 
            point.text === 'Sotaque de Macapá' || 
            point.text === 'Sotaque de Porto Alegre' || 
            point.text === 'Sotaque de São Luís' || 
            point.text === 'Accent de Fort-de-France') {
            contentString = `<div class="custom-infowindow ${point.lang}"><b>${point.text}</b><br><img src="${point.img}" alt="${point.text}" style="width:200px;height:auto;"></div>`;
        }

        if (point.audio) {
            contentString += `<br><audio controls><source src="${point.audio}" type="audio/ogg">Your browser does not support the audio element.</audio>`;
        }
    
        const infowindow = new google.maps.InfoWindow({
            content: contentString
        });
    
        marker.addListener('click', () => {
            if (currentInfoWindow) {
                currentInfoWindow.close();
            }
            infowindow.open(map, marker);
            currentInfoWindow = infowindow;
        });
    });
}

function changeLanguage() {
    const languageSelect = document.getElementById('language-select');
    const selectedLanguage = languageSelect.value;

    if (selectedLanguage === 'es') {
        window.location.href = 'accentesp.html';
    } else if (selectedLanguage === 'fr') {
        window.location.href = 'accentfr.html';
    } else if (selectedLanguage === 'it') {
        window.location.href = 'accentita.html';
    } else if (selectedLanguage === 'pt') {
        window.location.href = 'accentpt.html';
    }
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