<?php

$posts = $db->query("SELECT * FROM posts ORDER BY id DESC")->fetchAll();
$resent_posts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 5")->fetchAll();

require_once VIEWS . '/index.tpl.php';