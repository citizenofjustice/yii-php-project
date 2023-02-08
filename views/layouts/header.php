<?php

use yii\helpers\Url;
use yii\helpers\Html;

?>

<header class="container-fluid p-0">
    <nav class="navbar navbar-expand-sm" style="background-color: #e3f2fd;">
        <?= Html::a('LOGO', Url::toRoute('form/home'), ['class' => 'navbar-brand']) ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon bg-primary"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end mr-4">
            <ul class="navbar-nav" style="align-items: center">
                <li class="nav-item mr-1">
                    <?= Html::a('Пользователи', Url::toRoute('form/home'), ['class' => 'navbar-brand border rounded bg-light text-center p-2']) ?>
                </li>
                <li class="nav-item mr-1">
                    <?= Html::a('Статьи', Url::toRoute('blog/home'), ['class' => 'navbar-brand border rounded bg-light text-center p-2']) ?>
                </li>
                <li class="nav-item">
                    <?= Html::a('Добавить статью', Url::toRoute('blog/new_article'), ['class' => 'navbar-brand border rounded bg-light text-center p-2']) ?>
                </li>
            </ul>
        </div>
    </nav>
</header>