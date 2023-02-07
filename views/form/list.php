<?php

/** @var yii\web\View $this */

?>


<section class="content">
    <?php 
        // if there is more than 0 users display them 
        if (count($users) > 0) { ?>
        <ul class="users-list">
            <?php
                // iterating through users and displaying every user in list element
                foreach($users as $user) : ?>
                <li class="list-element">
                    <div class="fullname">
                        <p><?= $user->LastName ?> <?= $user->FirstName ?> <?= $user->MiddleName ?>,</p>
                    </div>
                    <div class="email">
                        <p><?= $user->Email ?>,</p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php } ?>
</section>