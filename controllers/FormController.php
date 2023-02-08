<?php

namespace app\controllers;

use Yii;
use app\models\Userz;

class FormController extends \yii\web\Controller {

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionHome() {
        $user = new Userz();
        if ($user->load(Yii::$app->request->post()) && $user->save()) {
        }
        $users = Userz::find()->all();
        return $this->render('home', ['users' => $users]);
    }

    public function actionList() {

    }
    
    public function actionAdd() {
    }

    public function actionTest() {
    }
}