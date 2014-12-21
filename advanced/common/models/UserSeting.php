<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%UserSeting}}".
 *
 * @property integer $userId
 * @property string $yearS
 * @property string $yearF
 *
 * @property FActor[] $fActors
 * @property ActorName[] $actors
 * @property FCountry[] $fCountries
 * @property CountryName[] $counties
 * @property FGenre[] $fGenres
 * @property GenreName[] $genres
 * @property FProducer[] $fProducers
 * @property ProducerName[] $producers
 * @property FRezhiser[] $fRezhisers
 * @property RezhiserName[] $rezhisers
 * @property FStudio[] $fStudios
 * @property StudioName[] $studios
 * @property User $user
 */
class UserSeting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%UserSeting}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId'], 'required'],
            [['userId'], 'integer'],
            [['yearS', 'yearF'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userId' => 'User ID',
            'yearS' => 'Year S',
            'yearF' => 'Year F',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFActors()
    {
        return $this->hasMany(FActor::className(), ['userId' => 'userId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActors()
    {
        return $this->hasMany(ActorName::className(), ['id' => 'actorId'])->viaTable('{{%FActor}}', ['userId' => 'userId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFCountries()
    {
        return $this->hasMany(FCountry::className(), ['userId' => 'userId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCounties()
    {
        return $this->hasMany(CountryName::className(), ['id' => 'countyId'])->viaTable('{{%FCountry}}', ['userId' => 'userId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFGenres()
    {
        return $this->hasMany(FGenre::className(), ['userId' => 'userId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenres()
    {
        return $this->hasMany(GenreName::className(), ['id' => 'genreId'])->viaTable('{{%FGenre}}', ['userId' => 'userId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFProducers()
    {
        return $this->hasMany(FProducer::className(), ['userId' => 'userId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducers()
    {
        return $this->hasMany(ProducerName::className(), ['id' => 'producerId'])->viaTable('{{%FProducer}}', ['userId' => 'userId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFRezhisers()
    {
        return $this->hasMany(FRezhiser::className(), ['userId' => 'userId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRezhisers()
    {
        return $this->hasMany(RezhiserName::className(), ['id' => 'rezhiserId'])->viaTable('{{%FRezhiser}}', ['userId' => 'userId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFStudios()
    {
        return $this->hasMany(FStudio::className(), ['userId' => 'userId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudios()
    {
        return $this->hasMany(StudioName::className(), ['id' => 'studioId'])->viaTable('{{%FStudio}}', ['userId' => 'userId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }
}
