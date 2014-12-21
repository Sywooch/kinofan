<?php

namespace frontend\controllers;

use Yii;
use common\models\FRezhiser;
use common\models\FRezhiserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FRezhiserController implements the CRUD actions for FRezhiser model.
 */
class FRezhiserController extends Controller
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
     * Lists all FRezhiser models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FRezhiserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FRezhiser model.
     * @param integer $userId
     * @param integer $rezhiserId
     * @return mixed
     */
    public function actionView($userId, $rezhiserId)
    {
        return $this->render('view', [
            'model' => $this->findModel($userId, $rezhiserId),
        ]);
    }

    /**
     * Creates a new FRezhiser model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FRezhiser();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'userId' => $model->userId, 'rezhiserId' => $model->rezhiserId]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing FRezhiser model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $userId
     * @param integer $rezhiserId
     * @return mixed
     */
    public function actionUpdate($userId, $rezhiserId)
    {
        $model = $this->findModel($userId, $rezhiserId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'userId' => $model->userId, 'rezhiserId' => $model->rezhiserId]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing FRezhiser model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $userId
     * @param integer $rezhiserId
     * @return mixed
     */
    public function actionDelete($userId, $rezhiserId)
    {
        $this->findModel($userId, $rezhiserId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FRezhiser model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $userId
     * @param integer $rezhiserId
     * @return FRezhiser the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($userId, $rezhiserId)
    {
        if (($model = FRezhiser::findOne(['userId' => $userId, 'rezhiserId' => $rezhiserId])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
