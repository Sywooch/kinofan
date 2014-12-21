<?php

namespace frontend\controllers;

use Yii;
use common\models\FProducer;
use common\models\FProducerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FProducerController implements the CRUD actions for FProducer model.
 */
class FProducerController extends Controller
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
     * Lists all FProducer models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FProducerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FProducer model.
     * @param integer $userId
     * @param integer $producerId
     * @return mixed
     */
    public function actionView($userId, $producerId)
    {
        return $this->render('view', [
            'model' => $this->findModel($userId, $producerId),
        ]);
    }

    /**
     * Creates a new FProducer model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FProducer();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'userId' => $model->userId, 'producerId' => $model->producerId]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing FProducer model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $userId
     * @param integer $producerId
     * @return mixed
     */
    public function actionUpdate($userId, $producerId)
    {
        $model = $this->findModel($userId, $producerId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'userId' => $model->userId, 'producerId' => $model->producerId]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing FProducer model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $userId
     * @param integer $producerId
     * @return mixed
     */
    public function actionDelete($userId, $producerId)
    {
        $this->findModel($userId, $producerId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FProducer model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $userId
     * @param integer $producerId
     * @return FProducer the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($userId, $producerId)
    {
        if (($model = FProducer::findOne(['userId' => $userId, 'producerId' => $producerId])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
