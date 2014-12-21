<?php

namespace frontend\controllers;

use Yii;
use common\models\FActor;
use common\models\FActorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FActorController implements the CRUD actions for FActor model.
 */
class FActorController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all FActor models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FActorSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FActor model.
     * @param integer $userId
     * @param integer $actorId
     * @return mixed
     */
    public function actionView($userId, $actorId)
    {
        return $this->render('view', [
            'model' => $this->findModel($userId, $actorId),
        ]);
    }

    /**
     * Creates a new FActor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FActor();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'userId' => $model->userId, 'actorId' => $model->actorId]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing FActor model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $userId
     * @param integer $actorId
     * @return mixed
     */
    public function actionUpdate($userId, $actorId)
    {
        $model = $this->findModel($userId, $actorId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'userId' => $model->userId, 'actorId' => $model->actorId]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing FActor model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $userId
     * @param integer $actorId
     * @return mixed
     */
    public function actionDelete($userId, $actorId)
    {
        $this->findModel($userId, $actorId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FActor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $userId
     * @param integer $actorId
     * @return FActor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($userId, $actorId)
    {
        if (($model = FActor::findOne(['userId' => $userId, 'actorId' => $actorId])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
