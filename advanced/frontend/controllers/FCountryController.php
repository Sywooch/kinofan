<?php

namespace frontend\controllers;

use Yii;
use common\models\FCountry;
use common\models\FCountrySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FCountryController implements the CRUD actions for FCountry model.
 */
class FCountryController extends Controller
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
     * Lists all FCountry models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FCountrySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FCountry model.
     * @param integer $userId
     * @param integer $countyId
     * @return mixed
     */
    public function actionView($userId, $countyId)
    {
        return $this->render('view', [
            'model' => $this->findModel($userId, $countyId),
        ]);
    }

    /**
     * Creates a new FCountry model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FCountry();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'userId' => $model->userId, 'countyId' => $model->countyId]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing FCountry model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $userId
     * @param integer $countyId
     * @return mixed
     */
    public function actionUpdate($userId, $countyId)
    {
        $model = $this->findModel($userId, $countyId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'userId' => $model->userId, 'countyId' => $model->countyId]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing FCountry model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $userId
     * @param integer $countyId
     * @return mixed
     */
    public function actionDelete($userId, $countyId)
    {
        $this->findModel($userId, $countyId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FCountry model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $userId
     * @param integer $countyId
     * @return FCountry the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($userId, $countyId)
    {
        if (($model = FCountry::findOne(['userId' => $userId, 'countyId' => $countyId])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
