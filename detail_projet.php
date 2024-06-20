<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2bb90c57b5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style_projet.css">
    <link rel="stylesheet" href="css/style_detail_projet.css">
    <title>Détail du Projet</title>
</head>
<body class="bgc">

    <?php include 'header.php'; ?>
    <?php include 'projects.php'; ?>

    <?php
        if (isset($_GET['id'])) {
            $projectId = intval($_GET['id']);
            $project = array_filter($projects, function($project) use ($projectId) {
                return $project['id'] === $projectId;
            });
            $project = reset($project);
        }
    ?>

    <?php if ($project): ?>
        <main class="container1440">
            <section id="section_projet_detail">
                <h2><?php echo $project['title']; ?></h2>
                <img src="<?php echo $project['image']; ?>" alt="photo projet">
                <p><?php echo $project['details']; ?></p>
            </section>
        </main>
    <?php else: ?>
        <main class="container1440">
            <section id="section_projet_detail">
                <h2>Projet non trouvé</h2>
                <p>Désolé, le projet que vous cherchez n'existe pas.</p>
            </section>
        </main>
    <?php endif; ?>

    <?php include 'footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>
