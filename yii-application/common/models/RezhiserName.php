<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%RezhiserName}}".
 *
 * @property integer $id
 * @property string $rezhiserName
 *
 * @property Rezhiser[] $rezhisers
 * @property Film[] $films
 */
class RezhiserName extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%RezhiserName}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rezhiserName'], 'required'],
            [['rezhiserName'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rezhiserName' => 'Rezhiser Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRezhisers()
    {
        return $this->hasMany(Rezhiser::className(), ['rezhiserId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilms()
    {
        return $this->hasMany(Film::className(), ['id' => 'filmId'])->viaTable('{{%Rezhiser}}', ['rezhiserId' => 'id']);
    }
}
