<?php

class ProductController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//public $layout='//layouts/column2';

	public function actionIndex(){
		$category=$this->loadCategory();

		if(!empty($_REQUEST['id'])){
			$id=trim($_REQUEST['id']);
			$product = Product::model()->findByPk($id,array('condition'=>"status!=-1"));
		}else{
			if(!empty($_REQUEST['cid'])){
				$cid=trim($_REQUEST['cid']);
			}else{
				$cid=$category[0]->categoryId;
			}
			$product=Product::model()->find(array(
				'condition'=>"categoryId=:categoryId and status!=-1",
				'params'=>array('categoryId'=>$cid),
				'order'=>'productId asc'));
		}

		if(empty($product)){
			throw new CHttpException(404,'The requested page does not exist.');
		}

		$cid=$product->categoryId;
		$ps=Product::model()->findAll(array(
				'condition'=>"categoryId=:categoryId and status!=-1",
				'params'=>array('categoryId'=>$cid),
				'order'=>'productId asc'));

		$this->render('index',array(
			'product'=>$product,
			'category'=>$category,
			'ps'=>$ps,
		));
	
	}
	

	public function loadCategory($cid=1)
    {
        $category = Category::model()->findAllByAttributes(array('cid'=>$cid,'status'=>0));
        if ($category === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $category;
    }
}
