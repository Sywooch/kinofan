<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%FProducer}}".
 *
 * @property integer $userId
 * @property integer $producerId
 *
 * @property ProducerName $producer
 * @property User $user
 */
class FProducer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%FProducer}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId', 'producerId'], 'required'],
            [['userId', 'producerId'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userId' => 'User ID',
            'producerId' => 'Producer ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducer()
    {
        return $this->hasOne(ProducerName::className(), ['id' => 'producerId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }
}
