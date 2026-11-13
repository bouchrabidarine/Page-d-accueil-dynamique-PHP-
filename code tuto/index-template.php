
<div class="grille-articles">
    <?php foreach ($articles as $article): ?>
        <section class="filtre-categories">
    <h2>Explorer par thème</h2>
    <div class="liste-filtres">
        <a href="index.php" class="pilule-filtre actif">Tous les articles</a>
        <?php foreach ($categories as $cat): ?>
            <a href="categorie.php?id=<?= $cat['id'] ?>" class="pilule-filtre">
                <?= htmlspecialchars($cat['libelle']) ?>
            </a>
        <?php endforeach; ?>
    </div>
</section>
        <div class="carte-article">
            <a href="article.php?id=<?= $article['id'] ?>" class="carte-image">
                <img src="images/<?= htmlspecialchars($article['image']) ?>" alt="Illustration">
            </a>
            <span class="etiquette-categorie"><?= htmlspecialchars($article['categorie_libelle']) ?></span>
            <div class="carte-contenu">
                <h3><a href="article.php?id=<?= $article['id'] ?>"><?= htmlspecialchars($article['titre']) ?></a></h3>
                <p><?= htmlspecialchars(mb_substr($article['contenu'], 0, 100)) ?>...</p>
                <div class="carte-meta">
                    <span><?= date('d M Y', strtotime($article['date_creation'])) ?></span>
                    <span>5 min</span>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>