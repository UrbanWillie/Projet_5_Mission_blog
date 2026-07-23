<h2>Monitoring des commentaires</h2>

<table class="statisticsTable">

<thead>

<tr>

<th>
<a href="index.php?action=commentStatistics&sort=title&order=<?= ($sort=='title' && $order=='ASC')?'DESC':'ASC' ?>">
Article
</a>
</th>

<th>
<a href="index.php?action=commentStatistics&sort=pseudo&order=<?= ($sort=='pseudo' && $order=='ASC')?'DESC':'ASC' ?>">
Pseudo
</a>
</th>

<th>
<a href="index.php?action=commentStatistics&sort=content&order=<?= ($sort=='content' && $order=='ASC')?'DESC':'ASC' ?>">
Commentaire
</a>
</th>

<th>
<a href="index.php?action=commentStatistics&sort=date_creation&order=<?= ($sort=='date_creation' && $order=='ASC')?'DESC':'ASC' ?>">
Date
</a>
</th>

<th>
Action
</th>

</tr>

</thead>

<tbody>

<?php foreach($comments as $comment): ?>

<tr>

<td><?= htmlspecialchars($comment['title']) ?></td>

<td><?= htmlspecialchars($comment['pseudo']) ?></td>

<td><?= htmlspecialchars($comment['content']) ?></td>

<td><?= date('d/m/Y', strtotime($comment['date_creation'])) ?></td>

<td>

<a class="submit"
href="index.php?action=deleteComment&id=<?= $comment['id'] ?>"
<?= Utils::askConfirmation("Supprimer ce commentaire ?") ?>>

Supprimer

</a>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

<div class="adminButtons">

    <a class="submit" href="index.php?action=statistics">
        ← Retour au monitoring des articles
    </a>

</div>
