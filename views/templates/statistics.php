<h2>Monitoring des articles</h2>

<table class="statisticsTable">

    <thead>

        <tr>

            <th>
                <a href="index.php?action=statistics&sort=title&order=<?= ($sort == 'title' && $order == 'ASC') ? 'DESC' : 'ASC' ?>">
                    Titre
                </a>
            </th>
            <th>
                <a href="index.php?action=statistics&sort=view_count&order=<?= ($sort == 'view_count' && $order == 'ASC') ? 'DESC' : 'ASC' ?>">
                    Vues
                </a>
            </th>
            <th>
                <a href="index.php?action=statistics&sort=content_count&order=<?= ($sort == 'content_count' && $order == 'ASC') ? 'DESC' : 'ASC' ?>">
                    Commentaires
                </a>
            </th>
            <th>
                <a href="index.php?action=statistics&sort=date_creation&order=<?= ($sort == 'date_creation' && $order == 'ASC') ? 'DESC' : 'ASC' ?>">
                    Date de publication
                </a>
            </th>

        </tr>

    </thead>

    <tbody>

    <?php foreach ($articles as $article) : ?>

        <tr>

            <td><?= htmlspecialchars($article->getTitle()) ?></td>

            <td><?= $article->getViewCount() ?></td>

            <td><?= $article->getCommentCount() ?></td>

            <td><?= $article->getDateCreation()->format('d/m/Y') ?></td>

        </tr>

    <?php endforeach; ?>

    </tbody>

</table>

<div class="adminButtons">
    <a class="submit" href="index.php?action=admin">
        ← Retour à l'édition des articles
    </a>

    <a class="submit" href="index.php?action=commentStatistics">
        Monitoring des commentaires
    </a>
</div>
