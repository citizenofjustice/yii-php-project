<?php

    /** @var yii\web\View $this */
    /** @var string $content  */

    use app\assets\AppAsset;
    use yii\helpers\Html;

    AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <?php require_once('header.php') ?>
        <div>
            <?= $content ?>
</div>
        
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>