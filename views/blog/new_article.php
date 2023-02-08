<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Articles $model */
/** @var ActiveForm $form */
?>

<div class="container-fluid mt-5">
    <div class="new_article">
        <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'title') ?>
            <?= $form->field($model, 'description') ?>
            <?= $form->field($model, 'content')->textarea(['rows' => '6']) ?>
            <?= $form->field($model, 'author') ?>
        
            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
            </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
