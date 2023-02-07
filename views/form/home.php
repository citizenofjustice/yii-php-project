<?php

/** @var yii\web\View $this */

use yii\widgets\Pjax;
use app\models\Userz;


// script for triggering user list reload
$script = <<<JS
    $(document).ready( function () {
        $("#store-user").on("click", function() {
            $.pjax.reload({container:"#users-table"}); 
        });
    });
JS;

$this->registerJs($script);

// creating new element of Userz class
$model = new Userz();

?>


<section class="content">
    <?= 
        // render input view and passing down created model
        $this->render('input', ['model' => $model])
    ?>
    <?php
        // calling pjax widget
        Pjax::begin([
        'id' => 'users-table',
        'enablePushState' => false,
        'enableReplaceState' => false,
    ]); ?>
        <?= 
            // render list of users view and passing users from action
            $this->render('list', ['users' => $users])
        ?>
    <?php
        // end use of pjax widget
        Pjax::end() ?>
</section>