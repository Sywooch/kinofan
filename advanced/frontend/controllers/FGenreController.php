<?php

namespace frontend\controllers;

use Yii;
use common\models\FGenre;
use common\models\FGenreSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FGenreController implements the CRUD actions for FGenre model.
 */
class FGenreController extends Controller
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
     * Lists all FGenre models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FGenreSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FGenre model.
     * @param integer $userId
     * @param integer $genreId
     * @return mixed
     */
    public function actionView($userId, $genreId)
    {
        return $this->render('view', [
            'model' => $this->findModel($userId, $genreId),
        ]);
    }

    /**
     * Creates a new FGenre model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FGenre();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'userId' => $model->userId, 'genreId' => $model->genreId]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing FGenre model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $userId
     * @param integer $genreId
     * @return mixed
     */
    public function actionUpdate($userId, $genreId)
    {
        $model = $this->findModel($userId, $genreId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'userId' => $model->userId, 'genreId' => $model->genreId]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing FGenre model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $userId
     * @param integer $genreId
     * @return mixed
     */
    public function actionDelete($userId, $genreId)
    {
        $this->findModel($userId, $genreId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FGenre model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $userId
     * @param integer $genreId
     * @return FGenre the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($userId, $genreId)
    {
        if (($model = FGenre::findOne(['userId' => $userId, 'genreId' => $genreId])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
