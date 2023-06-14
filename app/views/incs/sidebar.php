<div class="col-md-4">
    <ul class="list-group list-group-flush">
        <?php foreach ($resent_posts as $resent_post) : ?>
            <li class="list-group-item"><a href="post/<?= $resent_post['slug'] ?>"><?= $resent_post['title'] ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>