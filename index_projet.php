<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2bb90c57b5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style_projet.css">
    <title>Mes Projets</title>
</head>
<body class="bgc">

<?php include 'header.php'; ?>
<?php include 'projects.php'; ?>

<main>
    <section id="bgcR">
        <article class="container1440">
            <h1>Mes projets</h1>
            <p>Retrouvez ici tous les projets que j'ai réalisés</p>
        </article>
    </section>
    <section id="section_projet" class="container1440">
        <div id="flx">
            <?php foreach ($projects as $project): ?>
                <article>
                    <a href="detail_projet.php?id=<?php echo $project['id']; ?>" class="bord">
                        <img src="<?php echo $project['image']; ?>" alt="photo projet">
                        <h3><?php echo $project['title']; ?></h3>
                        <p><?php echo $project['description']; ?></p>
                    </a>
                    <div class="sepa">
                        <a href="detail_projet.php?id=<?php echo $project['id']; ?>" class="btn_2">Lire la suite</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
    <section id="usless" class="container1440">
        <div>
            <a href="#" class="current-page">1</a>
            <a href="#">2</a>
            <a href="#">suivant</a>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
<script src="js/script.js"></script>
</body>
</html>
