<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%FGenre}}".
 *
 * @property integer $userId
 * @property integer $genreId
 *
 * @property GenreName $genre
 * @property User $user
 */
class FGenre extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%FGenre}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId', 'genreId'], 'required'],
            [['userId', 'genreId'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userId' => 'User ID',
            'genreId' => 'Genre ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenre()
    {
        return $this->hasOne(GenreName::className(), ['id' => 'genreId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }
}
