<?php

namespace backend\controllers;

use common\models\Product;
use common\models\ProductChar;
use common\models\ProductImage;
use common\models\ProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use common\models\PrImage;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
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
     * Lists all Product models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Product model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = Product::findOne($id);

        if ($model === null) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    
        return $this->render('view', [
            'model' => $model,

        ]);
    }
    

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Product();


        if ($model->load(\Yii::$app->request->post())) {
            
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            $imageName = time();
            if ($model->save()) {
               
                $prImages = UploadedFile::getInstances($model , 'gallery');
                foreach($prImages as $prImage){
                    
                    $productImage = new prImage();
                    $productImage->product_id = $model->id;
                    $productImage->image = $prImage . '.' . $model->imageFile->extension;
                    $productImage->save();
                }  
               
            
                if ($model->upload($imageName)) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
        }
    
        return $this->render('create', [
            'model' => $model,
            'primage'=> $prImage,
        ]);
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = Product::findOne($id);

        if ($model === null) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        $prImage = new PrImage(); // Create a new PrImage model

        if ($model->load(\Yii::$app->request->post())) {
            $imageName = time();

            if ($model->validate() && $model->save()) {
                $this->handleGalleryImages($model, $imageName);

                if ($model->imageFile !== null) {
                    if ($model->upload($imageName)) {
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                } else {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
        }

        return $this->render('update', [
            'model' => $model,
            'prImage' => $prImage,
        ]);
    }

    private function handleGalleryImages($model, $imageName)
    {
        $prImages = UploadedFile::getInstances($model, 'gallery');

        foreach ($prImages as $prImage) {
            $productImage = new prImage();
            $productImage->product_id = $model->id;
            $productImage->image = $imageName . '.' . $prImage->extension;
            $productImage->save();

            // Save the gallery image to a directory
            $prImage->saveAs(\Yii::getAlias('@webroot/uploads/') . $productImage->image);
        }
    }

public function actionDeleteImage($id)
{
    $productImage = ProductImage::findOne($id);

    if ($productImage === null) {
        throw new NotFoundHttpException('The requested image does not exist.');
    }

    // Delete the image file from the server
    $imagePath = \Yii::getAlias('@webroot/uploads/productImage/') . $productImage->image;
    
    if (unlink($imagePath)) {
        // Delete the image record from the database
        $productImage->delete();
    }

    return $this->redirect(['update', 'id' => $productImage->product_id]);
}



    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
