<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%View}}".
 *
 * @property integer $userId
 * @property integer $filmId
 * @property integer $estimation
 *
 * @property Film $film
 * @property User $user
 */
class View extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%View}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId', 'filmId', 'estimation'], 'required'],
            [['userId', 'filmId', 'estimation'], 'integer']
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
            'estimation' => 'Estimation',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilm()
    {
        return $this->hasOne(Film::className(), ['id' => 'filmId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }
}
