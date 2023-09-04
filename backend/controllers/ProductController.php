<?php

namespace backend\controllers;

use common\models\Product;
use common\models\ProductImage;
use common\models\ProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

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
    // Create a new Product model
    $product = new Product();

    if ($product->load(\Yii::$app->request->post())) {
        // Load the product data from the form
        $product->imageFile = UploadedFile::getInstance($product, 'imageFile');
        $imageName = time();

        // Validate and save the product data
        if ($product->validate() && $product->save()) {
            // Create a new ProductImage model
            $productImage = new ProductImage();

            // Assign the product_id to the ProductImage model
            $productImage->product_id = $product->id; // Assign the product's ID

            // Set the image attribute of the ProductImage model
            $productImage->image = $imageName . '.' . $product->imageFile->extension;

            // Validate and save the ProductImage model
            if ($productImage->validate() && $productImage->save()) {
                // Upload the image file
                if ($product->upload($imageName)) {
                    // Redirect to the product view page
                    return $this->redirect(['view', 'id' => $product->id]);
                }
            }
        }
    }

    return $this->render('create', [
        'product' => $product, // Pass the Product model to the view
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

    // Load the related product images
    $productImages = $model->getProductImages()->all();
    $newProductImage = new ProductImage();


    if ($model->load(\Yii::$app->request->post()) && $model->save()) {
        // Handle related product images update or deletion here
        // Example: You can add code here to manage product images

        \Yii::$app->session->setFlash('success', 'Product updated successfully.');
        return $this->redirect(['view', 'id' => $model->id]);
    }

    return $this->render('update', [
        'model' => $model,
        'productImages' => $productImages, // Pass related images to the view
        'newProductImage' => $newProductImage, // Define and assign $newProductImage

    ]);
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
