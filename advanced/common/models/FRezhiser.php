<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%FRezhiser}}".
 *
 * @property integer $userId
 * @property integer $rezhiserId
 *
 * @property UserSeting $user
 * @property RezhiserName $rezhiser
 */
class FRezhiser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%FRezhiser}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId', 'rezhiserId'], 'required'],
            [['userId', 'rezhiserId'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userId' => 'User ID',
            'rezhiserId' => 'Rezhiser ID',
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
    public function getRezhiser()
    {
        return $this->hasOne(RezhiserName::className(), ['id' => 'rezhiserId']);
    }
}
