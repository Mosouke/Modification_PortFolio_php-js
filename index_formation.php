<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2bb90c57b5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style_formation.css">
    <title>Ma Formation</title>
</head>
<body class="bgc">

    <?php include 'header.php'; ?>

    <main>
        <section id="bgcR">
            <div class="container1440">
                <h1>Formation à la carte</h1>
                <p>4 mois de formation de découverte des métiers du développement</p>
            </div>
        </section>
        <section id="desc" class="container1440">
            <article>
                <div>
                    <h2>Description de la formation</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci distinctio quibusdam reprehenderit neque porro asperiores repellat delectus a nisi necessitatibus beatae laboriosam explicabo, sit ex alias libero illo error minima!</p>
                </div>
            </article>
            <div>
                <img src="img/dev-a-la-carte.png" alt="photo de ligne de code">
            </div>
        </section>
        <section id="competence" class="container1440">
        <h2>Mes compétences</h2>
        <div>
            <ul id="comp_list">
                <li>
                    <div class="toggle">Langages de programmation</div>
                    <ul class="sub_list">
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>JavaScript</li>
                        <li>TypeScript</li>
                        <li>PHP</li>
                        <li>Python</li>
                    </ul>
                </li>
                <li>
                    <div class="toggle">Frameworks et bibliothèques</div>
                    <ul class="sub_list">
                        <li>Front-end
                            <ul>
                                <li>React.js</li>
                                <li>Angular</li>
                                <li>Vue.js</li>
                                <li>jQuery</li>
                                <li>Bootstrap</li>
                            </ul>
                        </li>
                        <li>Back-end
                            <ul>
                                <li>Node.js</li>
                                <li>Express.js</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="toggle">Bases de données</div>
                    <ul class="sub_list">
                        <li>MySQL</li>
                        <li>MongoDB</li>
                        <li>SQLite</li>
                    </ul>
                </li>
                <li>
                    <div class="toggle">Outils de développement</div>
                    <ul class="sub_list">
                        <li>Git et GitHub</li>
                        <li>Babel</li>
                        <li>Visual Studio Code</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div>
            <ul id="comp_list2">
                <li>
                    <div class="toggle">Conception web</div>
                    <ul class="sub_list">
                        <li>Responsive Web Design</li>
                        <li>Connaissance des principes UX/UI</li>
                        <li>Adobe XD / Figma / Sketch</li>
                    </ul>
                </li>
                <li>
                    <div class="toggle">Services Web</div>
                    <ul class="sub_list">
                        <li>APIs Rest</li>
                        <li>GraphQL</li>
                    </ul>
                </li>
                <li>
                    <div class="toggle">Sécurité</div>
                    <ul class="sub_list">
                        <li>Principes de sécurité web (OWASP)</li>
                        <li>Gestion des sessions et des cookies</li>
                        <li>Authentification et autorisation</li>
                        <li>SSL/TLS</li>
                    </ul>
                </li>
                <li>
                    <div class="toggle">Autres compétences</div>
                    <ul class="sub_list">
                        <li>Testing et débogage</li>
                        <li>Performances et optimisations</li>
                        <li>SEO (Search Engine Optimization)</li>
                        <li>Accessibilité Web (WCAG)</li>
                        <li>Gestion de projet et collaboration en équipe</li>
                        <li>Veille technologique et apprentissage continu</li>
                    </ul>
                </li>
            </ul>
        </div>
    </section>
        <section id="section_projet" class="container1440">
            <div id="alig">
                <h2>Mes projets</h2> 
            </div>
            <div id="flx">
                <article>
                    <a href="index_projet_homekey.php" class="bord">
                        <img src="img/projet1.PNG" alt="photo projet">
                        <h3>Home Key - Intégration HTML & CSS</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae consequuntur deleniti quidem fugit eveniet perferendis ex assumenda enim totam ullam similique iste, quas reiciendis quae officia soluta dolorum obcaecati et?</p>
                    </a>
                    <div class="sepa">
                        <a href="index_projet_homekey.php" class="btn_2">Lire la suite</a>
                    </div>
                </article>
                <article>
                    <a href="#" class="bord">
                        <img src="img/projet2.PNG" alt="photo projet">
                        <h3>Vividly - Intégration Mobile First</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae consequuntur deleniti quidem fugit eveniet perferendis ex assumenda enim totam ullam similique iste, quas reiciendis quae officia soluta dolorum obcaecati et?</p>
                    </a>
                    <div class="sepa">
                        <a href="#" class="btn_2">Lire la suite</a>
                    </div>
                </article>
                <article class="large">
                    <a href="#" class="bord">
                        <img src="img/projet3.PNG" alt="photo projet">
                        <h3>Portfolio de Développeur Web</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae consequuntur deleniti quidem fugit eveniet perferendis ex assumenda enim totam ullam similique iste, quas reiciendis quae officia soluta dolorum obcaecati et?</p>
                    </a>
                    <div class="sepa">
                        <a href="#" class="btn_2">Lire la suite</a>
                    </div>
                </article>
            </div>
            <div id="isol">
                <a href="index_projet.php"  class="btn_2">Voir tous les projets</a>
            </div>
        </section>  
    </main>
    
    <?php include 'footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>