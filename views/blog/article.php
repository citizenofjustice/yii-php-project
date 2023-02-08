<?php
/** @var yii\web\View $this */

use app\models\Articles;

?>

<section class="content mt-5">
    <div class="container text-justify p-4">
        <div class="article row m-1 ">
            <div class="row mb-2 w-100">
                <div class="article__title container-fluid text-center h3">
                    <?= $article->title ?>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-3">
                </div>
                <div class="article__description col-9 small text-muted ">
                    <?= $article->description ?>
                </div>
            </div>
            <div class="row mb-4">
                <div class="article__content">
                    <?= $article->content ?>
                </div>
            </div>
            <div class="row w-100">
                <div class="col">
                    <div class="row justify-content-end mb-2">
                        <div class="article__author">
                            <?= $article->author ?>
                        </div>
                    </div>
                    <div class="row justify-content-end small">
                        <div class="article__creation-date">
                            <?= Articles::formatCreationDate($article->creationDate) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>