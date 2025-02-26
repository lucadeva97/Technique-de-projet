function initMap() {
    const mapOptions = {
        center: { lat: 48.8566, lng: 2.3522 }, // Coordonnées de Paris
        zoom: 3
    };

    const map = new google.maps.Map(document.getElementById('map'), mapOptions);

    // Gestion des points interactifs
    const points = [
        { coords: { lat: 48.8566, lng: 2.3522 }, lang: 'fr', text: 'Paris', img: 'images/paris.jpeg', audio: 'extraits/paris.mp3', href: 'paris.html' }, // Paris, France
        { coords: { lat: -27.5954, lng: -48.5480 }, lang: 'pt', text: 'Florianópolis', img: 'images/flo.jpg', audio: 'extraits/florianopolis.ogg' }, // Florianópolis, Brésil
        { coords: { lat: -3.7172, lng: -38.5434 }, lang: 'pt', text: 'Fortaleza', img: 'images/forta.jpg', audio: 'extraits/fortaleza.ogg' }, // Fortaleza, Brésil
        { coords: { lat: 45.5017, lng: -73.5673 }, lang: 'fr', text: 'Montréal', img: 'images/montreal.jpeg', audio: 'extraits/montreal.mp3', href: 'montreal/quebec.html' }, // Montréal, Canada
        { coords: { lat: 40.4168, lng: -3.7038 }, lang: 'es', text: 'Madrid', img: 'images/madrid.jpg' }, // Madrid, Espagne
        { coords: { lat: 45.1885, lng: 5.7245 }, lang: 'fr', text: 'Grenoble', img: 'images/grenoble.jpg', audio: 'extraits/grenoble.mp3', href: 'grenoble.html' }, // Grenoble, France
        { coords: { lat: 43.2965, lng: 5.3698 }, lang: 'fr', text: 'Marseille', img: 'images/marseille.jpeg', href: 'marseille.html' }, // Marseille, France
        { coords: { lat: 45.4408, lng: 12.3155 }, lang: 'it', text: 'Venise', img: 'images/venise.jpeg' }, // Venise, Italie
        { coords: { lat: -23.5505, lng: -46.6333 }, lang: 'pt', text: 'São Paulo', img: 'images/sp.jpg', audio: 'extraits/saopaulo.mp4' }, // São Paulo, Brésil
        { coords: { lat: 41.9028, lng: 12.4964 }, lang: 'it', text: 'Roma', img: 'images/rome.jpeg' }, // Rome, Italie
        { coords: { lat: 38.1938, lng: 15.5540 }, lang: 'it', text: 'Messine', img: 'images/messine.jpg', audio: 'extraits/messine.ogg' }, // Messine, Italie 
        { coords: { lat: -25.4284, lng: -49.2733 }, lang: 'pt', text: 'Curitiba', img: 'images/curitiba.jpg', audio: 'extraits/curitiba.ogg' }, // Curitiba, Brésil 
        { coords: { lat: -34.6037, lng: -58.3816 }, lang: 'es', text: 'Buenos Aires', img: 'images/buenosaires.jpg', audio: 'extraits/buenosaires.ogg' }, // Buenos Aires, Argentine
        { coords: { lat: 4.7110, lng: -74.0721 }, lang: 'es', text: 'Bogotá', img: 'images/bogota.jpg', audio: 'extraits/bogota.ogg' }, // Bogotá, Colombie
        { coords: { lat: 10.4806, lng: -66.9036 }, lang: 'es', text: 'Caracas', img: 'images/caracas.jpg', audio: 'extraits/caracas.ogg' }, // Caracas, Venezuela
        { coords: { lat: 4.9224, lng: -52.3135 }, lang: 'fr', text: 'Cayenne', img: 'images/cayenne.jpg', audio: 'extraits/cayenne.mp3', href: 'cayenne.html' }, // Cayenne, Guyane française
        { coords: { lat: -23.8683, lng: -49.3324 }, lang: 'pt', text: 'Itararé', img: 'images/itarare.jpg', audio: 'extraits/itarare.ogg' }, // Itararé, Brésil
        { coords: { lat: 0.0355, lng: -51.0705 }, lang: 'pt', text: 'Macapá', img: 'images/macapa.jpg', audio: 'extraits/macapa.ogg' }, // Macapá, Brésil
        { coords: { lat: -30.0346, lng: -51.2177 }, lang: 'pt', text: 'Porto Alegre', img: 'images/portoalegre.jpg', audio: 'extraits/portoalegre.ogg' }, // Porto Alegre, Brésil
        { coords: { lat: -2.5307, lng: -44.3068 }, lang: 'pt', text: 'São Luís', img: 'images/saoluis.jpg', audio: 'extraits/saoluis.ogg' }, // São Luís, Brésil
        { coords: { lat: 14.6161, lng: -61.0588 }, lang: 'fr', text: 'Fort-de-France', img: 'images/fortdefrance.jpg', audio: 'extraits/fortdefrance.mpeg' }, // Fort-de-France, Martinique
        { coords: { lat: 43.6045, lng: 1.4442 }, lang: 'fr', text: 'Toulouse', img: 'images/toulouse.jpeg', audio: ['extraits/toulouse.mp3', 'extraits/toulouse_greg.mp3'] } // Toulouse, France
    ];
    let currentInfoWindow = null;

    points.forEach(point => {
        const marker = new google.maps.Marker({
            position: point.coords,
            map: map,
            title: point.text
        });

        let contentString = `<div class="custom-infowindow ${point.lang}"><b>${point.text}</b>`;
        if (point.href) {
            contentString += `<br><a href="${point.href}"><img src="${point.img}" alt="${point.text}" class="clickable-image" style="width:300px;height:auto;"></a>`;
        } else {
            contentString += `<br><img src="${point.img}" alt="${point.text}" style="width:300px;height:auto;">`;
        }
        if (point.audio) {
            if (Array.isArray(point.audio)) {
                point.audio.forEach(audioSrc => {
                    contentString += `<br><audio controls style="margin-top: 10px;"><source src="${audioSrc}" type="audio/ogg"><source src="${audioSrc}" type="audio/mpeg">Your browser does not support the audio element.</audio>`;
                });
            } else {
                contentString += `<br><audio controls style="margin-top: 10px;"><source src="${point.audio}" type="audio/ogg"><source src="${point.audio}" type="audio/mpeg">Your browser does not support the audio element.</audio>`;
            }
        }
        contentString += `</div>`;

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

    // Fonction de debounce
    function debounce(func, delay) {
        let timeoutId;
        return function(...args) {
            clearTimeout(timeoutId);
            timeoutId = setTimeout(() => func.apply(this, args), delay);
        };
    }

    // Fonction de recherche
    function searchPoints(e) {
        const searchValue = e.target.value.toLowerCase();
        if (searchValue === '') {
            if (currentInfoWindow) {
                currentInfoWindow.close();
            }
            return;
        }

        const point = points.find(p => p.text.toLowerCase().includes(searchValue));

        if (point) {
            const marker = new google.maps.Marker({
                position: point.coords,
                map: map,
                title: point.text
            });

            let contentString = `<div class="custom-infowindow ${point.lang}"><b>${point.text}</b>`;
            if (point.href) {
                contentString += `<br><a href="${point.href}"><img src="${point.img}" alt="${point.text}" class="clickable-image" style="width:300px;height:auto;"></a>`;
            } else {
                contentString += `<br><img src="${point.img}" alt="${point.text}" style="width:300px;height:auto;">`;
            }
            if (point.audio) {
                if (Array.isArray(point.audio)) {
                    point.audio.forEach(audioSrc => {
                        contentString += `<br><audio controls style="margin-top: 10px;"><source src="${audioSrc}" type="audio/ogg"><source src="${audioSrc}" type="audio/mpeg">Your browser does not support the audio element.</audio>`;
                    });
                } else {
                    contentString += `<br><audio controls style="margin-top: 10px;"><source src="${point.audio}" type="audio/ogg"><source src="${point.audio}" type="audio/mpeg">Your browser does not support the audio element.</audio>`;
                }
            }
            contentString += `</div>`;

            const infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            if (currentInfoWindow) {
                currentInfoWindow.close();
            }
            infowindow.open(map, marker);
            currentInfoWindow = infowindow;

            // Centrer la carte sur le point trouvé
            map.setCenter(point.coords);
            map.setZoom(10);

            // Effacer la barre de recherche
            document.getElementById('search').value = '';
        }
    }

    // Utiliser la fonction de debounce pour la recherche
    const debouncedSearch = debounce(searchPoints, 1500);

    document.getElementById('search').addEventListener('input', debouncedSearch);
}

// Modal tutorial
document.addEventListener('DOMContentLoaded', (event) => {
    const modal1 = document.getElementById('tutorialModal1');
    const modal2 = document.getElementById('tutorialModal2');
    const modal3 = document.getElementById('tutorialModal3');
    const span1 = modal1.getElementsByClassName('close')[0];
    const span2 = modal2.getElementsByClassName('close')[0];
    const span3 = modal3.getElementsByClassName('close')[0];

    // Show the first modal when the page loads
    modal1.style.display = 'block';

    // Close the first modal when the user clicks on <span> (x)
    span1.onclick = function() {
        modal1.style.display = 'none';
        modal2.style.display = 'block'; // Show the second modal
    }

    // Close the second modal when the user clicks on <span> (x)
    span2.onclick = function() {
        modal2.style.display = 'none';
        modal3.style.display = 'block'; // Show the third modal
    }

    // Close the third modal when the user clicks on <span> (x)
    span3.onclick = function() {
        modal3.style.display = 'none';
    }

    // Close the modal when the user clicks anywhere outside of the modal
    window.onclick = function(event) {
        if (event.target == modal1) {
            modal1.style.display = 'none';
            modal2.style.display = 'block'; // Show the second modal
        } else if (event.target == modal2) {
            modal2.style.display = 'none';
            modal3.style.display = 'block'; // Show the third modal
        } else if (event.target == modal3) {
            modal3.style.display = 'none';
        }
    }
});

function changeLanguage() {
    const languageSelect = document.getElementById('language-select');
    const selectedLanguage = languageSelect.value;

    if (selectedLanguage === 'fr') {
        window.location.href = 'accentfr.html';
    } else if (selectedLanguage === 'es') {
        window.location.href = 'accentesp.html';
    } else if (selectedLanguage === 'it') {
        window.location.href = 'accentita.html';
    } else if (selectedLanguage === 'pt') {
        window.location.href = 'accentpt.html';
    }
}
