<?php
/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;
use app\models\Articles;

?>

<section class="content">
    <?php 
        // if there is more than 0 users display them 
        if (count($articles) > 0) { ?>
    <ul class="container mt-5">
        <?php foreach($articles as $article) : ?>
            <li class="article-card border rounded border-secondary row mb-2">
                <div class="col">
                    <div class="card-body d-flex flex-column">
                        <div class="row mb-2">
                            <h3 class="article-card__title col-8">
                                <?= $article->title ?>
                            </h3>
                            <div class="article-card__author col text-right text-muted">
                                <?= $article->author ?>
                            </div>
                        </div>
                        <p class="article-card__description card-text row mb-2">
                            <?= $article->description ?>
                        </p>
                        <div class="row mb-2">
                            <div class="article-card__creation-date col text-left">
                                <?php $url = Url::toRoute(['blog/article', 'id' => $article->id]) ?>
                                <?= Html::a('Прочесть статью...', $url) ?>
                            </div>
                            <div class="article-card__creation-date col text-right">
                                <?= Articles::formatCreationDate($article->creationDate) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php } ?>
</section>