<?php
session_start();


if (isset($_SESSION['nom']) && isset($_SESSION['email']) && 
isset($_SESSION['prenom']) && isset($_SESSION['niveau']) && 
isset($_SESSION['statu'])) { 

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
             <li><a href="#" class="menu-item" data-content="prononciation"
>Variations</a></li>
          <li><a href="#" class="menu-item" data-content="sources">
 Ressources</a></li>
        </ul>
      </nav>


      <div class="titre">
        <div id="introduction">

            Grenoble, située au cœur des Alpes françaises, est une ville riche en histoire, en culture et en beauté naturelle. Entre montagnes majestueuses, patrimoine historique et innovations modernes, Grenoble offre un cadre unique à découvrir. Bienvenue sur notre page dédiée à cette ville captivante ! Nous sommes heureux de vous inviter à explorer Grenoble à travers un voyage interactif. Dans la section "Histoire", vous découvrirez l'évolution de la langue française à Grenoble et ses spécificités locales. La rubrique "Prononciation" vous permet d'écouter et de comparer les prononciations grenobloises et parisiennes. Dans "Exercices", vous pourrez tester vos connaissances et approfondir ce que vous avez appris. Enfin, dans "Sources", vous trouverez des références pour en savoir plus sur cette belle ville. Nous espérons que vous apprécierez cette immersion grenobloise ! 🌟
            <br>
            <audio controls>
                <source src="extraits/grenoble.mp3.mp3" type="audio/mpeg">
            </audio>
        </div>
       
   

   
    <main id="main-content">

        <!--Histoire de la langue-->
        <div class="content" id="histoire" style="display: none;">

    <h2>🏰 1. Antiquité : Cularo et les origines linguistiques</h2>
    <p>Grenoble apparaît dans l’histoire sous le nom de <strong>Cularo</strong>, une cité fondée par le peuple gaulois des <strong>Allobroges</strong>. Les habitants parlaient alors une langue celtique propre aux Allobroges, le <strong>gaulois</strong>. À la fin du IIIᵉ siècle, Cularo devient un centre urbain plus important sous influence romaine.</p>
    <p>Avec la conquête romaine, le <strong>latin</strong> commence à s’imposer. Durant plusieurs siècles, un <strong>bilinguisme</strong> entre le gaulois et le latin existe avant que ce dernier ne prenne totalement le dessus.</p>
    <p><strong>👉 À retenir :</strong> Avant l’arrivée du français, le gaulois et le latin ont façonné les premières bases linguistiques de Grenoble !</p>
    
    <br><br>

    <h2>📜 2. Moyen Âge : Gratianopolis et le franco-provençal</h2>
    <p>Au IVᵉ siècle, la ville prend le nom de l’empereur romain <strong>Gratien</strong> et devient <strong>Gratianopolis</strong>. Le christianisme se développe, et un évêché est fondé, renforçant l’usage du latin dans l’administration, la religion et le commerce.</p>
    <p>Au fil des siècles, le latin évolue sous l’influence des langues locales et des invasions barbares, donnant naissance aux langues romanes. Dans la région grenobloise, c’est le <strong>franco-provençal</strong> (ou arpitan) qui devient la langue vernaculaire, tandis que le latin reste dominant dans les écrits officiels.</p>
    <p><strong>👉 Conséquence :</strong> Durant tout le Moyen Âge, Grenoble est une ville où le franco-provençal est parlé au quotidien, tandis que le latin reste la langue administrative.</p>
    
    <br><br>

    <h2>📖 3. Renaissance : L’essor du français et le déclin du franco-provençal</h2>
    <p>Aux XVᵉ et XVIᵉ siècles, le <strong>français</strong>, langue de l’Île-de-France, gagne en prestige. L’essor de l’imprimerie et l’unification administrative favorisent son adoption.</p>
    <p>En <strong>1539</strong>, l’<strong>Ordonnance de Villers-Cotterêts</strong> impose le français comme langue des actes officiels, accélérant son implantation à Grenoble. Toutefois, dans la vie quotidienne, le franco-provençal reste encore très présent.</p>
    <p><strong>👉 À noter :</strong> Cette période marque un tournant vers l’uniformisation linguistique qui se poursuivra jusqu’à la disparition progressive du franco-provençal.</p>
    
    <br><br>

    <h2>⚔️ 4. La Révolution et l’uniformisation du français</h2>
    <p>La Révolution française (1789) impose le <strong>français</strong> comme langue nationale, marginalisant les langues régionales. L’école publique sous <strong>Jules Ferry</strong> au XIXᵉ siècle achève cette transition en enseignant exclusivement en français.</p>
    <p><strong>👉 Conséquence :</strong> Le franco-provençal disparaît peu à peu des foyers grenoblois, remplacé par le français standard.</p>
    
    <br><br>

    <h2>🏭 5. Grenoble, ville moderne et influences linguistiques</h2>
    <p>Au XXᵉ siècle, Grenoble devient un <strong>centre industriel et scientifique</strong>. L’Université de Grenoble et les échanges internationaux enrichissent le paysage linguistique.</p>
    <p>Les anglicismes se multiplient, notamment dans les secteurs technologiques et universitaires :</p>
    <ul>
        <li><strong>*Week-end*</strong> → utilisé couramment</li>
        <li><strong>*Start-up*</strong> → très présent dans l’écosystème technologique grenoblois</li>
    </ul>
    <p>Grenoble est aussi marquée par une influence <strong>roumaine et romani</strong>, visible dans l’argot :</p>
    <ul>
        <li><strong>*Nachave*</strong> → « partir » (du romani *nasval* : fuir)</li>
        <li><strong>*Chourave*</strong> → « voler » (du romani *chorar* : voler, dérober)</li>
    </ul>
    <p><strong>👉 Conclusion :</strong> Grenoble, carrefour culturel et linguistique, a connu une évolution marquée par des influences successives, du gaulois au français moderne enrichi par divers apports.</p>
    
    <br><br>

    <h3>💡 À retenir</h3>
    <ul>
        <li>Grenoble a d’abord parlé le gaulois, remplacé par le latin après la conquête romaine.</li>
        <li>Le franco-provençal a longtemps été la langue vernaculaire avant d’être supplanté par le français.</li>
        <li>Le français s’est imposé grâce à l’Ordonnance de Villers-Cotterêts et l’école républicaine.</li>
        <li>Grenoble, ville universitaire et technologique, est influencée par l’anglais et d’autres langues.</li>
        <li>L’argot grenoblois a intégré des mots d’origine roumaine et romani.</li>
    </ul>
  
</div>



                <!--PRONONCIATION-->
                
                <div class="content" id="prononciation" style="display: none;">
            
                <h2>🔊 Les variations lexicales à Grenoble</h2>
                <p>Comme dans toute ville, Grenoble a son propre argot et ses expressions locales. Certaines sont issues du <strong>franco-provençal</strong>, d’autres viennent de l’<strong>argot parisien</strong>, et quelques-unes ont même des influences <strong>romani</strong> ou <strong>roumaines</strong>. Voici quelques expressions typiques avec leur prononciation !</p>
                <br><br>
                <h3>🕰️ Demander l'heure</h3>
                <p>À Grenoble, on peut entendre :</p>
                <p><strong>"C’est quel heure ?"</strong> (au lieu de "Quelle heure est-il ?")</p>
                <p><strong>Grenoble :</strong></p>
                <audio controls>
                    <source src="cqlheure.mp3" type="audio/mpeg">
                </audio>
                <p><strong>Français standard :</strong></p>
                <audio controls>
                    <source src="ilestqlheure.mp3" type="audio/mpeg">
                </audio>
            <br><br><br><br>



                <h3>😠 Exprimer sa frustration</h3>
                <p>L’expression <strong>"Avoir la mort"</strong> signifie être très énervé ou dégoûté.</p>
                <p><strong>Grenoble :</strong></p>
                <audio controls>
                    <source src="jailamort.mp3" type="audio/mpeg">
                </audio>
                <p><strong>Français standard :</strong> ("Être dégoûté")</p>
                <audio controls>
                    <source src="degouté.mp3" type="audio/mpeg">
                </audio>
            <br><br><br>


                <h3>🧐 Dire "comme ça" autrement</h3>
                <p>Le mot <strong>"Comègue"</strong> est utilisé à Grenoble à la place de "comme ça".</p>
                <p><strong>Grenoble :</strong></p>
                <audio controls>
                    <source src="cestcommeg.mp3" type="audio/mpeg">
                </audio>
                <p><strong>Français standard :</strong></p>
                <audio controls>
                    <source src="ccommeca.mp3" type="audio/mpeg">
                </audio>
            <br><br><br>


                <h3>🏃‍♂️ Partir en vitesse</h3>
                <p>Le verbe <strong>"Nachave"</strong> vient du romani et signifie "s’en aller".</p>
                <p><strong>Grenoble :</strong></p>
                <audio controls>
                    <source src="nachave.mp3" type="audio/mpeg">
                </audio>
                <p><strong>Français standard :</strong> ("Partir")</p>
                <audio controls>
                    <source src="partir.mp3" type="audio/mpeg">
                </audio>
            

                <h3>🍴 Aller manger : "Je vais graille"</h3>
                <p>À Grenoble, l'expression populaire <strong>"je vais graille"</strong> est utilisée pour dire "je vais manger". Le mot <strong>"graille"</strong> vient de l'argot et fait référence à la nourriture, souvent utilisée dans un contexte décontracté et amical.</p>
                <p><strong>Grenoble :</strong></p>
                <audio controls>
                    <source src="jvgraille.mp3" type="audio/mpeg">
                </audio>
                <p><strong>Français standard :</strong> ("Je vais manger")</p>
                <audio controls>
                    <source src="jvmanger.mp3" type="audio/mpeg">
                </audio>
                
                <br><br>
                <h3>💡 À retenir</h3>
                <ul>
                    <li>Grenoble possède un argot riche avec des influences variées.</li>
                    <li>Certains mots viennent du franco-provençal, du romani ou du roumain.</li>
                    <li>La prononciation et l’usage de certaines expressions diffèrent du français standard.</li>
                </ul>
            </div>
            
    </div>




    </div>



    <!--EXERCICE-->

     <div class="content" id="exercices" style="display:none;">

    <div style="width: 100%;"><div style="position: relative; padding-bottom: 56.25%; padding-top: 0; height: 0;"><iframe title="Apprendre le français" frameborder="0" width="1200" height="675" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://view.genially.com/67b5dcf665d03b35e2f01d7d" type="text/html" allowscriptaccess="always" allowfullscreen="true" scrolling="yes" allownetworking="all"></iframe> </div> </div>
</div>
            
<div class="content" id="sources" style="display:none;">        
                    <h3>Ressources :</h3>
                    <p><a href="https://fr.wikipedia.org/wiki/Histoire_de_Grenoble" target="_blank">Wikipédia. (2025). Histoire de Grenoble. Wikipédia.</a><br>
                        <a href="https://www.grenoble.fr/326-l-histoire-de-grenoble.htm" target="_blank">Ville de Grenoble. (2024). L’histoire de Grenoble. Grenoble.fr.</a><br>
                        <a href="https://www.grenoble-tourisme.com/fr/decouvrir/culture-et-histoire/grenoble-ville-histoire/histoire-de-la-ville/" target="_blank">Office de Tourisme de Grenoble. (2024). Histoire de la ville. Grenoble Tourisme.</a><br>
                        Prudhomme, A. (1888). Histoire de Grenoble. A. Gratier. <br>
                        Vincenti, A. (2017). Les mots du bitume.</p> <br>
                    </p>
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
  
  
    document.addEventListener("DOMContentLoaded", function() {
        const menuItems = document.querySelectorAll(".menu-item");
        const introduction = document.getElementById("introduction"); // Sélectionne l'intro
        const sections = document.querySelectorAll(".content"); // Sélectionne toutes les sections

        menuItems.forEach(item => {
            item.addEventListener("click", function(event) {
                event.preventDefault(); // Empêche le rechargement de la page

                // Masque l'introduction quand on clique sur un menu
                if (introduction) {
                    introduction.style.display = "none";
                }

                // Masque toutes les sections
                sections.forEach(section => section.style.display = "none");

                // Affiche la section correspondant au menu cliqué
                const sectionId = this.getAttribute("data-content");
                const targetSection = document.getElementById(sectionId);
                if (targetSection) {
                    targetSection.style.display = "block";
                }
            });
        });
    });
</script>
    
</body>
</html>

          
<?php 

    } else {
        header('Location: compte/inscription.php'); 
    exit();
    }
    ?>
