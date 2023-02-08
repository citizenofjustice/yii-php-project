<?php

namespace app\models\generated;

use Yii;

/**
 * This is the model class for table "Articles".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $creationDate
 * @property string $author
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Articles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'content', 'author'], 'required'],
            [['content'], 'string'],
            [['creationDate'], 'safe'],
            [['title'], 'string', 'max' => 200],
            [['description'], 'string', 'max' => 500],
            [['author'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'description' => 'Описание',
            'content' => 'Содержимое',
            'creationDate' => 'Дата создания',
            'author' => 'Автор',
        ];
    }
}
