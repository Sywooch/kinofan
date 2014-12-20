<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%ProducerName}}".
 *
 * @property integer $id
 * @property string $producerName
 *
 * @property Producer[] $producers
 * @property Film[] $films
 */
class ProducerName extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ProducerName}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['producerName'], 'required'],
            [['producerName'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'producerName' => 'Producer Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducers()
    {
        return $this->hasMany(Producer::className(), ['producerId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilms()
    {
        return $this->hasMany(Film::className(), ['id' => 'filmId'])->viaTable('{{%Producer}}', ['producerId' => 'id']);
    }
}
