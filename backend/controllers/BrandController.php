<?php

namespace backend\controllers;

use common\components\StaticFunctions;
use common\models\Brand;
use common\models\BrandSearch;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

/**
 * BrandController implements the CRUD actions for Brand model.
 */
class BrandController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Brand models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BrandSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Brand model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Finds the Brand model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Brand the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected
    function findModel($id)
    {
        if (($model = Brand::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Creates a new Brand model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Brand();

        if ($model->load(\Yii::$app->request->post()) && $model->save()) {
            $imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($imageFile) {
                $model->logo = StaticFunctions::saveImage($imageFile, $model->id, 'Brands');
            }
            if ($model->save()) {
                return $this->redirect(['index']);
            } else {
                print_r($model->getErrors());
                die();
            }
        }

        return $this->render('create', ['model' => $model]);
    }


    /**
     * Updates an existing Brand model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public
    function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldImage = $model->logo;
        if ($this->request->isPost && $model->load(\Yii::$app->request->post())) {

            $uploadedFile = UploadedFile::getInstance($model, 'imageFile');
            if ($uploadedFile) {
                $model->logo = StaticFunctions::saveImage($uploadedFile, $model->id, 'Brands');
                StaticFunctions::deleteImage($oldImage, $model->id, 'Brands');
            } else {
                $model->logo = $oldImage;
            }

            if ($model->save()) {
                return $this->redirect(['index']);
            } else {
                print_r($model->getErrors());
                die();
            }
        }

        return $this->render('update', ['model' => $model]);
    }

    /**
     * Deletes an existing Brand model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public
    function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
}
