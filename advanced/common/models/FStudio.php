<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%FStudio}}".
 *
 * @property integer $userId
 * @property integer $studioId
 *
 * @property StudioName $studio
 * @property User $user
 */
class FStudio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%FStudio}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId', 'studioId'], 'required'],
            [['userId', 'studioId'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userId' => 'User ID',
            'studioId' => 'Studio ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudio()
    {
        return $this->hasOne(StudioName::className(), ['id' => 'studioId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }
}
