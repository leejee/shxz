<?php

class ProductController extends Controller
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    //public $layout='//layouts/column2';
    //public $layout='application.modules.admin.views.layouts.main';
    public $layout = 'application.modules.admin.views.layouts.product_main';

	public $menu=array(
		array('label'=>'产品分类', 'url'=>array('category')),
		array('label'=>''),
		array('label'=>'产品管理'),
	);

    
	/*
		产品管理入口页
	 */
    public function actionIndex()
    {
		$category=$this->checkCategory();
		
		$condition = 'status=0';
		if($category){
			$condition.=' and categoryId='.$category;
		}
        $dataProvider = new CActiveDataProvider('Product',
			array('criteria'=>array(
				'condition'=>$condition,	
			))			
		);
        $this->render('index', array(
            'dataProvider' => $dataProvider,
			'category'=>$category,


        ));
    }

	/*
		插入
	*/
	public function actionInsert(){
		$model = new Product;
		if(isset($_REQUEST['category'])){
			$category=$this->checkCategory();
			if(!$category){
				throw new CHttpException(400, '参数有误');
			}
			$model->categoryId=$category;

		}
		$categoryList = $this->loadCategory();

		if(isset($_POST['Product'])){
			$model->setAttributes($_POST['Product']);

			$file = CUploadedFile::getInstance($model, 'pic');   //获得一个CUploadedFile的实例
            if (is_object($file) && get_class($file) === 'CUploadedFile') {   // 判断实例化是否成功
                $model->pic = './assets/upfile/file_' . time() . '_' . rand(0, 9999) . '.' . $file->extensionName;   //定义文件保存的名称
            } else {
                $model->pic = './assets/upfile/noPic.jpg';   // 若果失败则应该是什么图片
            }

			 if ($model->insert()){
                if (is_object($file) && get_class($file) === 'CUploadedFile') {
                    $file->saveAs($model->pic);    // 上传图片
                }
				if(isset($category)){
					$this->redirect(array('index', 'category' => $model->categoryId));
				}else{
					$this->redirect(array('index'));

				}
			 }else{
				echo '<script> alert("保存失败，请稍后重试！");</script>';
			 }
            
		}

		$this->render('insert',array(
			'model'=>$model,
			'categoryList'=>$categoryList,
			'category'=>isset($category)?$category:false,
			)
		);


	}

	/*
		更新
	*/
    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($productId)
    {
        $model = $this->loadModel($productId);

		$categoryList = $this->loadCategory();
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);


		if(isset($_POST['Product'])){
			if(empty($_POST['Product']['pic'])){
				$_POST['Product']['pic']=$model->pic;
			}
			$model->setAttributes($_POST['Product']);
			$file = CUploadedFile::getInstance($model, 'pic');   //获得一个CUploadedFile的实例
            if (is_object($file) && get_class($file) === 'CUploadedFile') {   // 判断实例化是否成功
                $model->pic = './assets/upfile/file_' . time() . '_' . rand(0, 9999) . '.' . $file->extensionName;   //定义文件保存的名称
            } else {
//                $model->pic = './assets/upfile/noPic.jpg';   // 若果失败则应该是什么图片
            }

			 if ($model->save()){
                if (is_object($file) && get_class($file) === 'CUploadedFile') {
                    $file->saveAs($model->pic);    // 上传图片
                }
				$this->redirect(array('index', 'category' => $model->type));
			 }else{
				echo '<script> alert("保存失败，请稍后重试！");</script>';
			 }
            
		}

        $this->render('update', array(
            'model' => $model,
			'categoryList'=>$categoryList,
			'category'=>$model->categoryId,
        ));
    }

	/*
		删除
	*/
	 /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete()
    {
       		$error='';
		if(empty($_REQUEST['productId'])){
			$error='参数有误';
		}
		$productId=trim($_REQUEST['productId']);

		$r = Product::model()->updateByPk($productId,array('status'=>-1));
		if(empty($r)){
			echo 0;exit;
		}else{
			echo 1;exit;
		}
    }

/***********************************************

	分类管理

***********************************************/
	/*
		分类管理
	*/
    public function actionCategory()
    {
        $dataProvider = new CActiveDataProvider('Category',
			array('criteria'=>array(
				'condition'=>'status=0 and cid=1',	
		)));
        $this->render('category', array(
            'dataProvider' => $dataProvider,
        ));
    }

	public function actionCategoryDel(){
		$error='';
		if(empty($_REQUEST['categoryId'])){
			$error='参数有误';
			echo 0;exit;
		}
		$categoryId=trim($_REQUEST['categoryId']);
		$r = Category::model()->updateByPk($categoryId,array('status'=>-1));
		if(empty($r)){
			echo 0;exit;
		}else{
			echo 1;exit;
		}
	}


	public function actionCategorySave(){
		if(isset($_REQUEST['categoryId'])){
			$categoryId=trim($_REQUEST['categoryId']);
		}else{
			$error='参数有误';
			echo $error;
			exit;
		}
		if(!empty($_REQUEST['categoryTitle'])){
			$categoryTitle=trim($_REQUEST['categoryTitle']);
		}else{
			$error='参数有误';
			echo $error;
			exit;
		}

		$categoryModel = new Category;
		if($categoryId==0){
			// 插入
			$count=count($categoryModel->findAll('status>-1'));
			if($count>2){
				$error='分类已达上限';
				echo $error;
				exit;
			}
			$categoryModel->cid=1;
			$categoryModel->title=$categoryTitle;
			$r = $categoryModel->insert();
		}else{
			// 修改
			$categoryModel = $categoryModel->findByPk($categoryId);
			$categoryModel->title=$categoryTitle;
			$r = $categoryModel->save();

		}

		if(empty($r)){
			// 保存失败
			$errors = $categoryModel->getErrors();
			print_r($errors);
			$error=current($errors);
			echo $error;exit;
		}else{
			echo "TRUE";exit;
		}
	}









    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id)
    {
        $model = Product::model()->findByPk($id,'status>-1');
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    public function loadCategory($cid=1)
    {
        $category = Category::model()->findAllByAttributes(array('cid'=>$cid,'status'=>0));
        if ($category === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $category;
    }

	public function checkCategory(){
		$category=false;
		if(!empty($_REQUEST['category'])){
				$category=trim($_REQUEST['category']);
				if($category!=(int)$category || empty($category)){
					throw new CHttpException(400, '参数有误');
				}
				$categoryCondition = array(
					'categoryId'=>$category,
					'cid'=>1,
					'status'=>0,
				);
				$categoryModel = Category::model()->findAllByAttributes($categoryCondition);
				if(empty($categoryModel)){
					throw new CHttpException(400, '参数有误');
				}
		}
		return $category;
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
