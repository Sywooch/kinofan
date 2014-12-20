<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%Comment}}".
 *
 * @property integer $userId
 * @property integer $filmId
 * @property string $comment
 * @property string $datetime
 *
 * @property User $user
 * @property Film $film
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%Comment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId', 'filmId', 'comment', 'datetime'], 'required'],
            [['userId', 'filmId'], 'integer'],
            [['comment'], 'string'],
            [['datetime'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userId' => 'User ID',
            'filmId' => 'Film ID',
            'comment' => 'Comment',
            'datetime' => 'Datetime',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilm()
    {
        return $this->hasOne(Film::className(), ['id' => 'filmId']);
    }
}
