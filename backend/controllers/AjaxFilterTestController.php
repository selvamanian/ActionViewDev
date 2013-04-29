<?php

class AjaxFilterTestController extends Controller
{
	// public function actionIndex()
	// {
	// 	$this->render('index');
	// }


public function actionIndex( $string = '' )
{

    $criteria = new CDbCriteria();
    if( strlen( $string ) > 0 ){
    	$strings = explode(",", $string);
        $criteria->together = true;
		$criteria->with = 'tblAttributes';
    	foreach ($strings as $value) {
			$criteria->addSearchCondition( 'tblAttributes.name', $value, true, 'OR' );
    	}
    }
    $dataProvider = new CActiveDataProvider( 'Contact', array( 'criteria' => $criteria, ) );

    $this->render( 'index', array( 
    	'dataProvider' => $dataProvider,
    	) );
}



	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}