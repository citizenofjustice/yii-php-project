<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
// use yii\widgets\Pjax;
use app\models\Articles;

$model = new Articles();

// script for triggering user list reload
// $script = <<<JS
//     $(document).ready( function () {
//         $("#search-bar").on("submit", function() {
//             // $.pjax.reload({container:"#users-list"}); 
//         });
//     });
// JS;

// $this->registerJs($script);

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
                <li class="nav-item">
                <?php $form = ActiveForm::begin([
                    'id' => 'search-form',
                    // action triggered by submitting form
                    'action' => ['blog/find_article'],
                    'method' => 'POST',
                    'options' => ['data' => ['pjax' => true]],
                ]) ?>
                    <?= $form->field($model, 'author')->label(false) ?>
                <?php ActiveForm::end() ?>
                    
                </li>
            </ul>
        </div>
    </nav>
</header>