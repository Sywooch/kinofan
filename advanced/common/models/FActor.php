<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%FActor}}".
 *
 * @property integer $userId
 * @property integer $actorId
 *
 * @property UserSeting $user
 * @property ActorName $actor
 */
class FActor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%FActor}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId', 'actorId'], 'required'],
            [['userId', 'actorId'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userId' => 'User ID',
            'actorId' => 'Actor ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(UserSeting::className(), ['userId' => 'userId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActor()
    {
        return $this->hasOne(ActorName::className(), ['id' => 'actorId']);
    }
}
