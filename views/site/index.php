<?php

/** @var yii\web\View $this */

$this->title = Yii::$app->name;

?>

<section class="content">
    <form class="form">
        <ul class="form-layout">
            <li class="form-element">
                <label class="lable">Фамилия:</label>
                    <input type="text" >
                </li>
            <li class="form-element">
                <label class="lable">Имя:</label>
                    <input type="text" >
                </li>
            <li class="form-element">
                <label class="lable">Отчество:</label>
                    <input type="text">
                </li>
            <li class="form-element">
                <label class="lable">E-mail</label>
                    <input  type="text" >
                </li>
            <li class="form-element">
                <button class="button">Сохранить</button>
            </li>
        </ul>
    </form>
</section>