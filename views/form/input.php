<?php

/** @var yii\web\View $this */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>


<?php
    // defining ActiveForm widget with input fields and buttons
    $form = ActiveForm::begin([
        'id' => 'input-form',
        // action triggered by submitting form
        'action' => ['form/home'],
        'method' => 'POST',
        'options' => ['class' => 'form', 'data' => ['pjax' => true]],
    ]) ?>
        <?= $form->field($model, 'FirstName') ?>
        <?= $form->field($model, 'LastName') ?>
        <?= $form->field($model, 'MiddleName') ?>
        <?= $form->field($model, 'Email') ?>
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary', 'id' => 'store-user']) ?>
<?php ActiveForm::end(); ?>
