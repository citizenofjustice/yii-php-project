<?php

namespace app\controllers;

use Yii;
use app\models\Articles;

class BlogController extends \yii\web\Controller
{
    public function actionHome() {
        $articles = Articles::find()->all();
        return $this->render('home', ['articles' => $articles]);
    }
    
    public function actionArticle($id) {
        $article = Articles::findOne($id);
        return $this->render('article', ['article' => $article]);
    }

    public function actionNew_article() {
    $article = new Articles();

    if ($article->load(Yii::$app->request->post()) && $article->save()) {
        if ($article->validate()) {
            // form inputs are valid, do something here
            return $this->render('article', ['article'=>$article]);
        }
    }
    
    return $this->render('new_article', [
        'model' => $article,
    ]);
}
}
