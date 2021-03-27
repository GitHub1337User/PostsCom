<?php //require_once $_SERVER['DOCUMENT_ROOT']."/templates/meta.template.php";
//require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/header.template.php"; ?>
<div class="wrapper">


    <div class="body-cards">

<?php foreach ($posts as $post): ?>
    <div class="card">
        <img src="../img/<?= $post->image ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $post->title ?></h5>
            <h6 class="date"><?= $post->created_at ?></h6>
            <p class="card-text"><?= $post->text ?></p>
            <a href="/posts/post.php?id=<?= $post->id ?>" class="btn btn-primary">Overview</a>
        </div>
    </div>

    </div>


</div>
<?php endforeach ?>











