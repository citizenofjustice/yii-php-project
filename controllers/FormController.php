<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Users;

class FormController extends Controller {
    public function actionIndex() {
        $users = Users::find()->all();
        return $this->render('index', compact('users'));
    }


}