<?php
include $_SERVER["DOCUMENT_ROOT"] . '/load.php';
$id = $_GET['id'] ?? 1;
$post = $dataPost->getOnePost($id);
include $_SERVER["DOCUMENT_ROOT"] . "./posts/posts.view.php";