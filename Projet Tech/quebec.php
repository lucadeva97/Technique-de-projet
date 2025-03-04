<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quebec</title>
    <link rel="stylesheet" href="quebec.css">
    <link rel="icon" href="../minilogo.png" type="image/png">
</head>
<header>
    <div class="header-container">
        <div class="left-align">
            <div class="language-selector">
                <select id="language-select" onchange="changeLanguage()">
                    <option value="" class="accent">Tu cherches une langue ? </option>
                    <option value="es" disabled style="color: grey;">Espagnol</option>
                    <option value="fr" data-url="accentfr.php">Français</option>
                    <option value="it" disabled style="color: grey;">Italien</option>
                    <option value="pt" disabled style="color: grey;">Portugais</option>
                </select>
            </div>
        </div>
        <a href="index.php"><div class="logo" data-tooltip="homepage">
        </div></a>
        <div></div>
        <div class="right-align">
            <a href="apropos.php"><div class="apropos" data-tooltip="à propos">
            </div></a>
            <a href="compte/inscription.php"><div class="connexion" data-tooltip="connexion">
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


         <li><a href="#" class="menu-item" data-content="sources">
 Ressources</a></li>      
 
 <li><a href="#" class="menu-item" data-content="prononciation">
    Prononciation</a></li>  
        </ul>
      </nav>


<div class="titre">
    <h1>🇨🇦 L’histoire du français au Québec</h1>
    Le Québec, province francophone du Canada, est un véritable carrefour entre histoire, culture et langue. Avec ses paysages magnifiques, ses traditions uniques et sa riche histoire, le Québec est un lieu fascinant à découvrir.


    Bienvenue sur notre page dédiée au Québec ! Nous sommes ravis de vous inviter à découvrir cette magnifique région à travers un voyage interactif.
   
    Dans la rubrique "Histoire", vous plongerez dans l'origine du français au Québec et découvrirez pourquoi cette belle province parle français.
   
    La section "Prononciation" vous propose des fichiers audio pour comparer les prononciations du français au Québec et en France métropolitaine.
   
    Dans "Exercices", vous aurez l’opportunité de tester vos connaissances sur les informations partagées dans les sections "Histoire" et "Prononciation".
   
    Enfin, dans la partie "Sources", vous trouverez des références pour approfondir vos connaissances et en savoir plus sur cette fascinante région.
   
    Nous espérons que vous apprécierez cette aventure ! 🌟


<main id="main-content">
    <!--Histoire de la langue-->
    <div class="content" id="histoire">


            <h2>🏰 1. Les origines : Un français venu de France</h2>
            <p>Au XVIIᵉ siècle, la Nouvelle-France (ancien nom du Québec) devient une colonie française. Les colons viennent principalement de différentes régions de France : <strong>Normandie, Île-de-France, Bretagne, Poitou</strong>, apportant avec eux leurs accents et leurs expressions locales.</p>
            <p>Mais à cette époque, il n’existe pas encore un français standard unique comme aujourd’hui. Le roi Louis XIV et sa cour parlent une version raffinée du français, mais dans les provinces, les gens utilisent des dialectes régionaux très variés. C’est donc <strong>un mélange de ces parlers qui s’installe en Nouvelle-France</strong>.</p>
            <p>En plus, comme la colonie est éloignée de la France, <strong>le français québécois va évoluer différemment</strong>, en conservant des mots et des tournures disparus en métropole.</p>
            <p><strong>👉 À retenir :</strong> Le français québécois ne vient pas du français moderne de France, mais d’un français plus ancien du XVIIᵉ siècle !</p>




       
            <h2>⚔️ 2. La Conquête britannique (1760) : Un français isolé</h2>
            <p>En 1760, la <strong>Grande-Bretagne</strong> prend le contrôle de la Nouvelle-France après la Guerre de Sept Ans. Résultat ? <strong>Les contacts avec la France sont coupés</strong> et le français du Québec évolue de son côté, sans subir les changements qui vont transformer le français en France.</p>
            <p>Pendant ce temps, en France, la <strong>Révolution française (1789)</strong> modifie profondément la langue. De nombreux mots issus de l’aristocratie disparaissent, et <strong>le français parisien devient la norme</strong> sous l’influence des académiciens et des révolutionnaires.</p>
            <p>Au Québec, c’est l’inverse : la langue évolue <strong>dans un environnement plus rural et conservateur</strong>, gardant des mots oubliés en France, comme :</p>
            <ul>
                <li><strong>*Char* (voiture)</strong> – utilisé en France avant de devenir « automobile » 🚗</li>
                <li><strong>*Magasiner* (faire du shopping)</strong> – dérivé de « magasin », disparu en France 🏪</li>
            </ul>
            <p><strong>👉 Conséquence :</strong> Le français québécois a préservé un <strong>héritage linguistique unique</strong>, avec des expressions et une prononciation qui rappellent la France d’avant la Révolution !</p>






            <h2>🇬🇧 3. L’influence de l’anglais et des langues autochtones</h2>
            <p>À partir du XIXᵉ siècle, l’anglais devient <strong>la langue dominante au Canada</strong>. Même si les Québécois résistent, ils sont en contact quotidien avec des anglophones, ce qui entraîne <strong>des emprunts à l’anglais</strong> dans leur parler courant.</p>
            <p><strong>Exemples d’anglicismes québécois :</strong></p>
            <ul>
                <li><strong>*Checker* → « vérifier »</strong> (de *to check*)</li>
                <li><strong>*Cooler* → « glacière »</strong> (de *cooler*)</li>
                <li><strong>*Parking* → « stationnement »</strong></li>
            </ul>
            <p>Mais ce n’est pas tout ! Le français québécois a aussi <strong>emprunté des mots aux peuples autochtones</strong>, qui étaient là avant l’arrivée des colons.</p>
            <p><strong>Mots d’origine autochtone en français québécois :</strong></p>
            <ul>
                <li><strong>*Atoca* (canneberge)</strong> – issu de l’algonquin</li>
                <li><strong>*Manitou* (esprit, figure spirituelle)</strong></li>
            </ul>
            <p><strong>👉 À noter :</strong> Malgré ces influences, <strong>le français québécois reste une langue bien distincte et riche</strong>, avec des innovations propres et une grammaire bien conservée !</p>






            <h2>🗣 4. Une langue qui continue d’évoluer !</h2>
            <p>Le XXᵉ siècle marque une prise de conscience linguistique : les Québécois veulent <strong>protéger leur langue</strong> face à la montée de l’anglais. C’est ainsi qu’en <strong>1977, la Loi 101</strong> est adoptée. Cette loi impose l’usage du français dans :</p>
            <ul>
                <li>Les écoles</li>
                <li>Les entreprises</li>
                <li>L’administration publique</li>
            </ul>
            <p>Grâce à ces efforts, le français québécois est <strong>vivant, dynamique et en constante évolution</strong> ! Aujourd’hui, <strong>les jeunes inventent de nouvelles expressions</strong> et les médias québécois contribuent à moderniser la langue.</p>
       


       
            <h3>💡 À retenir</h3>
            <ul>
                <li>Le français québécois vient du français des colons du XVIIᵉ siècle.</li>
                <li>Il a évolué différemment à cause de l’isolement et de l’influence anglaise.</li>
                <li>Il a gardé des mots anciens et adopté des expressions uniques.</li>
                <li>C’est une langue riche, vivante et dynamique !</li>
            </ul>
         
        </div>
</div>


<!--Prononciation-->
<div class="content" id="prononciation">
    <h2>Prononciation : Québec vs France</h2>
    <p>La prononciation du français au Québec diffère de celle de la France en raison de l'évolution linguistique depuis la colonisation. Lorsque les premiers colons français se sont installés en Amérique du Nord au XVIIe siècle, ils parlaient un français influencé par les dialectes régionaux de l'époque, notamment ceux de l'ouest et du nord de la France. Après la conquête britannique de 1763, l'isolement du Québec par rapport à la France a contribué à préserver certaines caractéristiques linguistiques qui ont évolué différemment en Europe. De plus, le contact avec l'anglais et les langues autochtones a introduit des influences phonétiques uniques.</p>
   
    <p>Voici quelques exemples typiques de différences de prononciation et de vocabulaire entre le français québécois et le français de France :</p>
   
    <h3>Comment faire comprendre qu'on a froid àau Québec ?</h3>
    <p>Le mot "frette" est un bon exemple d'archaïsme conservé au Québec. Il vient du vieux français où il signifiait "froid". En France, ce terme a disparu au profit de "froid", tandis qu'il est resté d'usage courant au Québec.</p>
    <p><strong>Québec :</strong></p>
    <audio controls>
        <source src="ilfaitfrette.mp3" type="audio/mpeg">
    </audio>
   
    <p><strong>France :</strong></p>
    <audio controls>
        <source src="ilfaitfroid.mp3" type="audio/mpeg">
    </audio>


    <h3>Comment dit-on "une voiture" au Québec ?</h3>
    <p>Le mot "char" pour désigner une voiture vient du français ancien et est encore utilisé en Belgique et en Suisse dans certaines expressions. En France, "char" désigne exclusivement un véhicule militaire, tandis qu'au Québec, il reste un synonyme courant de "voiture".</p>
    <p><strong>Québec :</strong></p>
    <audio controls>
        <source src="unchar.mp3" type="audio/mpeg">
    </audio>
   
    <p><strong>France :</strong></p>
    <audio controls>
        <source src="voiture.mp3" type="audio/mpeg">
    </audio>


    <h3>Comment dit-on qu'on se fait arnaquer au Québec ?</h3>
    <p>Le mot "scammer" est un emprunt à l'anglais "scam", qui signifie "arnaquer". Le français québécois a intégré de nombreux anglicismes en raison de la proximité avec les États-Unis et du bilinguisme dans certaines régions.</p>
    <p><strong>Québec :</strong></p>
    <audio controls>
        <source src="scamme.mp3" type="audio/mpeg">
    </audio>
   
    <p><strong>France :</strong></p>
    <audio controls>
        <source src="arnaquer.mp3" type="audio/mpeg">
    </audio>
</div>






  <!--EXERCICES-->
<div class="content" id="exercices" style="display:none;">
    <div style="width: 100%;"><div style="position: relative; padding-bottom: 56.25%; padding-top: 0; height: 0;"><iframe title="Apprendre le français" frameborder="0" width="1200" height="675" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://view.genially.com/67b5de283612721553308d2d" type="text/html" allowscriptaccess="always" allowfullscreen="true" scrolling="yes" allownetworking="all"></iframe> </div> </div>
</div>




        <!--SOURCES-->
            <p><div class="content" id="sources">📚</span> <strong>Sources :</strong></p>
           
                <img src= "lalangueracontée.png" alt="la langue racontée" >
                <img src= "dou vient laccent des quebecois.png" alt="d'où vient l'accent des quebecois" >
                 <img src= "lamodernisation.png" alt="la modernisation de l'accent quebecois" >
                <img src= "langue&politique.png" alt="langue & politique"></li>
                <li><a href="https://fr.wikipedia.org/wiki/Histoire_du_français_québécois" target="_blank">Histoire du français québécois - Wikipédia (FR)</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Quebec_French" target="_blank">Quebec French - Wikipedia (EN)</a></li>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/CQ46BbbLRrk?si=wc-c2Ul6MWSum39a" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </ul>
       
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
