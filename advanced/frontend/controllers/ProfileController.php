<?php

namespace frontend\controllers;

use Yii;
use common\models\User;
use common\models\UserSeting;
use common\models\UserSettingSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class ProfileController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $id = Yii::$app->user->id;
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->goHome();
        } else {
            return $this->render('index', [
                'model' => $model,
            ]);
        }
    }

    protected function findModel($id)
    {
        if (($model = UserSeting::findOne($id)) !== null) {
            return $model;
        } else {
            $profile = new UserSeting();
            $profile->userId = $id;
            $profile->save();
            return ($model = UserSeting::findOne($id));
        }
    }

}
