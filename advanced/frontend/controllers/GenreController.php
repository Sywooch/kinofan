<?php

namespace frontend\controllers;

use Yii;
use common\models\Genre;
use common\models\GenreSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GenreController implements the CRUD actions for Genre model.
 */
class GenreController extends Controller
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
     * Lists all Genre models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GenreSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Genre model.
     * @param integer $filmId
     * @param integer $genreId
     * @return mixed
     */
    public function actionView($filmId, $genreId)
    {
        return $this->render('view', [
            'model' => $this->findModel($filmId, $genreId),
        ]);
    }

    /**
     * Creates a new Genre model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Genre();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'filmId' => $model->filmId, 'genreId' => $model->genreId]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Genre model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $filmId
     * @param integer $genreId
     * @return mixed
     */
    public function actionUpdate($filmId, $genreId)
    {
        $model = $this->findModel($filmId, $genreId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'filmId' => $model->filmId, 'genreId' => $model->genreId]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Genre model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $filmId
     * @param integer $genreId
     * @return mixed
     */
    public function actionDelete($filmId, $genreId)
    {
        $this->findModel($filmId, $genreId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Genre model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $filmId
     * @param integer $genreId
     * @return Genre the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($filmId, $genreId)
    {
        if (($model = Genre::findOne(['filmId' => $filmId, 'genreId' => $genreId])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
