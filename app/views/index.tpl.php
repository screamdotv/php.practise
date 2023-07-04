        <?php require_once VIEWS . '/incs/header.php' ?>

        <main class="main py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                        <?php foreach ($posts as $post) : ?>
                            <div class="card mb-3">
                                <div class="card-header" style="background-color: #9eeaf9;">
                                    <a href="post?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p><?= $post['excerpt'] ?></p>
                                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>

                    <?php require_once __DIR__ . '/incs/sidebar.php' ?>

                </div>

            </div>
        </main>

        <?php require_once VIEWS . '/incs/footer.php' ?>