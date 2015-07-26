<?php

class NewsController extends Controller
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    //public $layout='//layouts/column2';
    //public $layout='application.modules.admin.views.layouts.main';
    public $layout = 'application.modules.admin.views.layouts.column2';

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    public function actionViews($id)
    {
        $this->render('views', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model = new News;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['News'])) {
            $model->attributes = $_POST['News'];

            if (empty($_POST['News']['name'])) {
                $model->name = $model->url;
            }
            $file = CUploadedFile::getInstance($model, 'url');   //获得一个CUploadedFile的实例
            if (is_object($file) && get_class($file) === 'CUploadedFile') {   // 判断实例化是否成功
                $model->url = './assets/upfile/file_' . time() . '_' . rand(0, 9999) . '.' . $file->extensionName;   //定义文件保存的名称
            } else {
                $model->url = './assets/upfile/noPic.jpg';   // 若果失败则应该是什么图片
            }

            if ($model->save())
                if (is_object($file) && get_class($file) === 'CUploadedFile') {
                    $file->saveAs($model->url);    // 上传图片
                }
            $this->redirect(array('views', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
		unset($_POST['Introduce']['url']);


        if (isset($_POST['News'])) {
            $model->attributes = $_POST['News'];

            if (empty($_POST['News']['name'])) {
                $model->name = $model->url;
            }
            $file = CUploadedFile::getInstance($model, 'url');   //获得一个CUploadedFile的实例
			if (is_object($file) && get_class($file) === 'CUploadedFile') {   // 判断实例化是否成功
                $model->url = './assets/upfile/file_' . time() . '_' . rand(0, 9999) . '.' . $file->extensionName;   //定义文件保存的名称
            } else {
                $model->url = './assets/upfile/noPic.jpg';   // 若果失败则应该是什么图片
            }

            if ($model->save())
                if (is_object($file) && get_class($file) === 'CUploadedFile') {
                    $file->saveAs($model->url);    // 上传图片
                }
            $this->redirect(array('views', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('News');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionCatalog()
    {
        $dataProvider=new CActiveDataProvider('News', array(
            'criteria'=>array(
                'condition'=>'type=1',
            ),
        ));
        $this->render('catalog', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionCatalog2()
    {
        $dataProvider=new CActiveDataProvider('News', array(
            'criteria'=>array(
                'condition'=>'type=2',
            ),
        ));
        $this->render('catalog2', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionCatalog3()
    {
        $dataProvider=new CActiveDataProvider('News', array(
            'criteria'=>array(
                'condition'=>'type=3',
            ),
        ));
        $this->render('catalog3', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id)
    {
        $model = News::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'News-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
