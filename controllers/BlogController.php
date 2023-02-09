<?php

namespace app\controllers;

use Yii;
use yii\data\Pagination;
use app\models\Articles;

class BlogController extends \yii\web\Controller
{
    // action that renders articles page
    public function actionHome() {
        $query = Articles::find();
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 3,]);
        $models = $query->offset($pages->offset)->limit($pages->limit)->all();
    
        return $this->render('home', [
             'articles' => $models,
             'pages' => $pages,
        ]);
    }
    
    // action rendering article based on its id
    public function actionArticle($id) {
        $article = Articles::findOne($id);
        return $this->render('article', ['article' => $article]);
    }

    // action that renders article input form and saves it to db
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

    public function actionFind_article($author) {
        // $rows = (new \yii\db\Query())->select(['*'])->from('Articles')->where(['author' => $author])->limit(1)->all();
        var_dump(Yii::$app->request->post());
        die();
        // if (strpos($string, $author) === FALSE) {
        //     ... not found ...
        // }
        // $article = Articles::findOne();
        // return $this->render('article', [
        //     'article' => $article,
        // ]);
    }
}
