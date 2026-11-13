<?php
include "data/projets.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Mon Portfolio</h1>
        <p>Découvrez mes projets web</p>
    </header>

    <main>
        <h2>Mes projets</h2>

        <section class="projets">

            <?php foreach ($projets as $pro): ?>

                <article class="carte">

                    <img
                        src="<?= htmlspecialchars($pro["image"]) ?>"
                        alt="<?= htmlspecialchars($pro["titre"]) ?>"
                    >

                    <div class="contenu">

                        <?php if ($pro["featured"] == true): ?>
                            <small class="badge">⭐ À la une</small>
                        <?php endif; ?>

                        <h3>
                            <?= htmlspecialchars($pro["titre"]) ?>
                        </h3>

                        <p>
                            <?= htmlspecialchars($pro["description"]) ?>
                        </p>

                        <a href="#contact">Voir le projet</a>

                    </div>

                </article>

            <?php endforeach; ?>

        </section>
    </main>

</body>
</html>