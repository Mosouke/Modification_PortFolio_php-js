<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_projet_Home_key.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/2bb90c57b5.js"></script>
    <title>Homekey Project</title>
</head>
<body>

<?php include 'header.php'; ?>

    <main>
        <section id="menuFormation">
            <h1>HomeKey - Intégration HTML & CSS</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed magni vitae rerum at quo tempore nam dolore et, animi quidem ea ullam praesentium quaerat quibusdam architecto exercitationem autem veniam fugit!
            Rerum, possimus quibusdam. Vitae repellendus eaque aliquid accusamus cum consequuntur natus recusandae odio impedit, error ipsam molestiae ipsum expedita eos quae dolores exercitationem animi. Delectus porro harum non ex et.</p>
        </section>
        <section id="description" class="container1440">
            <div id="descriptionParagraphe">
                <h2>Description du projet</h2>
                <p>doloribus dolore! Neque nulla blanditiis, suscipit voluptates vero quia qui tempora minima corporis quibusdam dolor eligendi fugit expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam praesentium blanditiis aliquam beatae eius pariatur cupiditate sapiente facere eveniet harum ducimus, vel ab numquam? Perspiciatis tenetur animi temporibus cumque molestias.</p>
            </div>
            <img src="img/projet1.PNG" alt="">
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
        <section id="project" class="container1440">
            <h2>Les projets réalisés </h2>
            <div id="articleProject">
                <article class="front-end">
                    <div>
                        <img src="img/projet1.PNG" alt="">
                        <h3>Home Key - Intégration HTML & CSS</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis laudantium iure, autem omnis dolorum, expedita officiis facilis soluta officia maiores nihil nisi repudiandae suscipit nostrum commodi rem, repellendus explicabo eum...</p>
                    </div>
                    <a href="#" class="buttonBleuFonce">Lire la suite</a>
                </article>
                <article class="front-end">
                    <div>
                        <img src="img/projet2.PNG" alt="">
                        <h3>Vividly - Intégration Mobile First</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis laudantium iure, autem omnis dolorum, expedita officiis facilis soluta officia maiores nihil nisi repudiandae suscipit nostrum commodi rem, repellendus explicabo eum...</p>
                    </div>
                    <a href="#" class="buttonBleuFonce">Lire la suite</a>
                </article>
                <article class="back-end">
                    <div>
                        <img src="img/projet3.PNG" alt="">
                        <h3>Portfolio de Développeur Web</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis laudantium iure, autem omnis dolorum, expedita officiis facilis soluta officia maiores nihil nisi repudiandae suscipit nostrum commodi rem, repellendus explicabo eum...</p>
                    </div>
                    <a href="#" class="buttonBleuFonce">Lire la suite</a>
                </article>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>