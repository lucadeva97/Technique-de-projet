<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Grenoble</title>
    <link rel="stylesheet" href="quebec.css">
    <link rel="icon" href="minilogo.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<header>
    <div class="header-container">
        <div class="left-align">
            <div class="language-selector">
                <select id="language-select" onchange="changeLanguage()">
                    <option value="" class="accent">Tu cherches une langue ? </option>
                    <option value="es" disabled style="color: grey;">Espagnol</option>
                    <option value="fr" data-url="accentfr.html">Français</option>
                    <option value="it" disabled style="color: grey;">Italien</option>
                    <option value="pt" disabled style="color: grey;">Portugais</option>
                </select>
            </div>
        </div>
        <a href="index.html"><div class="logo" data-tooltip="homepage">
        </div></a>
        <div></div>
        <div class="right-align">
            <a href="apropos.html"><div class="apropos" data-tooltip="à propos">
            </div></a>
            <a href="compte/connexion.php"><div class="connexion" data-tooltip="connexion">
            </div></a>
        </div>
    </div>
</header>
<body>
    <nav>
        <ul id="grid">
          <li><a href="#" class="menu-item" data-content="histoire">
 Histoire</a></li>
          <li><a href="#" class="menu-item" data-content="exercices"
 >Exercices</a></li>
             <li><a href="#" class="menu-item" data-content="prononciation"
>Variations</a></li>
          <li><a href="#" class="menu-item" data-content="sources">
 Ressources</a></li>
        </ul>
      </nav>

    <div class="titre">
    <h1>Histoire de Grenoble</h1>

    <!--HISTOIRE-->
    <main id="main-content">
     <div class="content" id="histoire">
         
            <h2>Antiquité : Cularo </h2>
            <p>Grenoble apparaît dans l’histoire pour la première fois sous le nom de Cularo. Fondée par le peuple gaulois des Allobroges. Les habitants de Cularo parlaient une langue celtique propre aux Allobroges. A la fin du IIIème siècle, Cularo devient chef-lieu d’une cité. La population locale était composé de Gaulois et parlaient le gaulois, une langue celtique.</p>
            <h2>Moyen-Âge : Gratianopolis et le francoprovençal</h2>
            <p>Au IVème siècle, elle prend le nom de l’empereur romain Gratien et devient Gratianopolis. Après la conquête romaine, le latin s'est imposé. Cela a entrainé un bilinguisme ou le gaulois et le latin coexistaient avant d’écarter totalement le gaulois. 
                La latin vulgaire était devenu la langue dominante à Gratianopolis.
                Le christianisme se répandit dans la région et la création d’un évêché a eu lieu avec comme premier évêque Domnin. Ce sont les évêques qui ont détenuent l’autorité à Grenoble durant 14 siècles. On les surnommait “ les princes de Grenoble”. Cela jusqu’à la Révolution. La création d'un évêché à Gratianopolis a renforcé l'usage du latin car elle était utilisé dans l’administration, la religion et le commerce. 
                Ce latin évolua progressivement, influencé par les langues locales et les invasions barbares. Cela menant a l’émérgence des langues romanes. 
                Dans la région grenobloise, le francoprovençal ou arpitan, devient la langue vernaculaire mais le latin reste la langue de l’administration et de l’Église.</p>
             <h2> Renaissance : diffusion du français standard</h2>
     <p>Aux XVe et XVIe siècles, le français issu de l’Ile-de-France gagne en prestige. Les écrits littéraires et administratifs se standardisent, favorisant l’adoption du français et écartant les dialectes locaux comme le francoprovençal. Cette période marque une transition vers une uniformisation linguistique en France.</p>
            <h2>Grenoble aujourd'hui</h2>
            <p>De nos jours, à Grenoble, la langue majoritairmeent parlée est le 'français standard'. Cependant l'influence des dialectes régionaux et des langues issues de l'immigration enrichit la langue. Grenoble n'a pas un accent aussi marqué que certaines régions cependant il subsiste quelques particularités linguistiques. Les grenoblois ont un léger accent dauphinois surtout les personnes âgées. Cela est caractérisé par une intonation montante et des voyelles plus ouvertes. Des mots typiques de la région sont encore là aujourd'hui tel que "rechigner" qui veut dire hésiter. Il y a une grande influence francoprovençal dans les expressions locaux. 
                Autrefois, le francoprovençal était très parlée et encore quelques personnes le parle cependant il n'est plus enseigné ni transmis aux nouvelles générations. 
                Avec la forte présence d'étudiants et de population issues de l'immigration, Grenoble est une ville multilingue. 
                Grenoble est aussi un centre de recherche et d’innovation. Elle joue un rôle clé dans la diffusion et l'enseignement de français.  La ville a de grandes institutions comme le CNRS et le CEA. En 1896, le Centre Universitaire d'Etudes Françaises (CUEF) a été fondée. C'est un des premiers centre dédiés à l'enseignement du français langue étrangère en France. Le CUEF, au début, reposait sur l'accueil des familles et des salariés émigrés établis et travaillant à Grenoble. Le CUEF aide à se loger, se restaurer, dans la préparation du séjour en France. Il aide également dans l'obtention du Diplôme Universitaire d'Etudes Françaises (DUEF). L'Alliance Française Grenoble Alpes (AFGA) promeut également la langue française et les cultures francophone à Grenoble. 
                Entourée des hauts massifs de Belledonne, chartreuse et vercors et située au confluent de l’Isère et du Drac, Grenoble est réputée la ville la plus plate de France.  </p>
                <h2>Grenoble et ses dates importantes :</h2>
                <ul class="dates-list">
                    <li>379 : Cularo devient Gratianopolis</li>
                    <br>
                    <li>XIIème siècle : Grenoble capitale des Dauphins et co-seigneurie</li>
                    <br>
                    <li>1562 : Guerres de religion</li>
                    <br>
                    <li>1590 : Le duc de Lesdiguières et ses successeurs</li>
                    <br>
                    <li>1830 : Construction du Fort de la Bastille</li>
                    <br>
                    <li>1842 : Création de la première cimenterie grenobloise</li>
                    <br>
                    <li>850 : Grenoble devient une capitale industrielle</li>
                    <br>
                    <li>1941 à 1944 : Seconde Guerre Mondiale et Résistance : Grenoble, capitale des maquis</li>
                    <br>
                    <li>1955 : Recherche scientifique et industrie de haute technologie ; université</li>
                    <br>
                    <li>1987 : Grenoble propose le premier tramway au monde à être accessible aux personnes à mobilité réduite</li>
                    <br>
                    <li>9 septembre 2005 : Grenoble, 1er territoire de tourisme adapté</li>
                    <br>
                    <li>2 juin 2006 : Inauguration du complexe scientifique européen MINATEC</li>
                    <br>
                    <li>4 novembre 2009 : Grenoble remporte le Grand Prix national des écoquartiers de France avec le "quartier de Bonne"</li>
                </ul>
            </div>


                <!--PRONONCIATION-->
                <div class="content" id="prononciation">
                <h2>Les variations lexicales de Grenoble</h2>
                <table>
                    <tr>
                        <th>Expression</th>
                        <th>Signification</th>
                    </tr>
                    <tr><td>C’est quel heure <audio controls>
                        <source src="cqlheure.mp3" type="audio/mpeg">
                    </audio></td><td>Quelle heure est-il ? <audio controls>
                        <source src="ilestqlheure.mp3" type="audio/mpeg">
                    </audio></td></tr>

                    <tr><td>Rincé</td><td>Être fatigué</td></tr>

                    <tr><td>Avoir la mort <audio controls>
                        <source src="jailamort.mp3" type="audio/mpeg">
                    </audio></td><td>Être dégouté    <source src="degouté.mp3" type="audio/mpeg">
                    </audio></td></tr>

                    <tr><td>Y’a moyen (?)</td><td>C’est possible / Est-ce possible (?)</td></tr>

                    <tr><td>Graille</td><td>Manger</td></tr>

                    <tr><td>Comègue     <audio controls>
                        <source src="cestcommeg.mp3" type="audio/mpeg">
                    </audio></td><td>Comme ça     <audio controls>
                        <source src="ccommeca.mp3" type="audio/mpeg">
                    </audio></td></tr>

                
                    <tr><td>Gâche</td><td>(Une) place</td></tr>

                    <tr><td>Tchi</td><td>Rien</td></tr>

                    <tr><td>J(e) suis chauve</td><td>Choquer / Impressionner / Étonner</td></tr>

                    <tr><td>Narvalo</td><td>Fou</td></tr>

                    <tr><td>Tchoukar</td><td>Cool / Trop bien</td></tr>

                    <tr><td>Chourave</td><td>Voler</td></tr>

                    <tr><td>Pillave</td><td>Boire (de l’alcool)</td></tr>

                    <tr><td>Mort pilo</td><td>Ivre</td></tr>

                    <tr><td>Pélo</td><td>Garçon</td></tr>

                    <tr><td>Dicave</td><td>Regarde</td></tr>

                    <tr><td>Latche</td><td>La honte</td></tr>

                    <tr><td>Nachave</td><td>S’en aller</td></tr>

                </div>
                </table>
            </div>
    </div>




    </div>



    <!--EXERCICE-->

     <div class="content" id="exercices" style="display:none;">
  <div style="width: 100%;"><div style="position: relative; padding-bottom: 56.25%; padding-top: 0; height: 0;"><iframe title="Apprendre le français" frameborder="0" width="1200" height="675" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://view.genially.com/67b5dcf665d03b35e2f01d7d" type="text/html" allowscriptaccess="always" allowfullscreen="true" scrolling="yes" allownetworking="all"></iframe> </div> </div>
     </div>
            
<div class="content" id="sources" style="display:none;">        
                    <h3>Sources :</h3>
                    <p> Wikipédia. (2025). Histoire de Grenoble. Wikipédia. https://fr.wikipedia.org/wiki/Histoire_de_Grenoble <br>
                        Ville de Grenoble. (2024). L’histoire de Grenoble. Grenoble.fr. https://www.grenoble.fr/326-l-histoire-de-grenoble.htm <br>
                        Office de Tourisme de Grenoble. (2024). Histoire de la ville. Grenoble Tourisme. https://www.grenoble-tourisme.com/fr/decouvrir/culture-et-histoire/grenoble-ville-histoire/histoire-de-la-ville/ <br>
                        Prudhomme, A. (1888). Histoire de Grenoble. A. Gratier.</p> <br> 
                        
                </div>
    </div>

</main>
<script>
            document.querySelectorAll('.menu-item').forEach(item => {
          item.addEventListener('click', (event) => {
            event.preventDefault(); // Empêche le comportement par défaut du lien
       
            const contentId = item.getAttribute('data-content'); // Récupère l'id du contenu associé
            const allContents = document.querySelectorAll('.content');
           
            // Masquer tous les contenus
            allContents.forEach(content => {
              content.style.display = 'none';
            });
       
            // Afficher le contenu correspondant
            document.getElementById(contentId).style.display = 'block';
          });
        });
          </script>
     
       <script>
        function changeLanguage() {
            const select = document.getElementById('language-select');
            const selectedOption = select.options[select.selectedIndex];
            const url = selectedOption.getAttribute('data-url');
            if (url) {
                window.location.href = url;
            }
        }
    </script>
    
</body>
</html>
</html>
