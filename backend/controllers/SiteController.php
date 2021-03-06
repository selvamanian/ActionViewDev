<?php
/**
 * SiteController.php
 *
 * @author: antonio ramirez <antonio@clevertech.biz>
 * Date: 7/24/12
 * Time: 1:21 AM
 */

class SiteController extends Controller
{
	/**
	 * @return array list of action filters (See CController::filter)
	 */
	public function filters()
	{
		return array('accessControl');
	}

	/**
	 * @return array rules for the "accessControl" filter.
	 */
	public function accessRules()
	{
		return array(
			array('allow', // Allow registration form for anyone
				'actions' => array('index', 'login', 'logout', 'contact', 'captcha', 'error', 'test'),
			),
			array('allow', // Allow all actions for logged in users ("@")
				'users' => array('@'),
			),
			array('deny'), // Deny anything else
		);
	}

	/**
	 *
	 * @return array actions
	 */
	public function actions()
	{
		return array(
			'captcha' => array(
				'class' => 'CCaptchaAction',
				'backColor' => 0xFFFFFF,
				'foreColor' => 0x0099CC,
			),
			'page' => array(
				'class' => 'CViewAction',
			),
		);
	}

	/**
	 * Renders index page
	 */
	public function actionIndex()
	{
		$this->render('index');
	}

	/**
	 * Renders contact page
	 * todo: does nothing but rendering, proper functionality to be created
	 */
	public function actionContact()
	{
		$model = new ContactForm;
		if (isset($_POST['ContactForm']))
		{
			$model->attributes = $_POST['ContactForm'];
			if ($model->validate())
			{
				/** example code */
//				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
//				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
//				$headers="From: $name <{$model->email}>\r\n".
//					"Reply-To: {$model->email}\r\n".
//					"MIME-Version: 1.0\r\n".
//					"Content-type: text/plain; charset=UTF-8";
//
//				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
//				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
//				$this->refresh();
			}
		}
		$this->render('contact', array('model' => $model));

	}

	/**
	 * Action to render the error
	 * todo: design proper error page
	 */
	public function actionError()
	{
		if ($error = app()->errorHandler->error)
		{
			if (app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Action to render login form or handle user's login
	 * and redirection
	 */
	public function actionLogin()
	{
		$model = new LoginForm();

		if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form')
		{
			echo CActiveForm::validate($model, array('username', 'password', 'verifyCode'));
			Yii::app()->end();
		}

		if (isset($_POST['LoginForm']))
		{
			$model->attributes = $_POST['LoginForm'];
			if ($model->validate(array('username', 'password', 'verifyCode')) && $model->login())
				$this->redirect(user()->returnUrl);
		}

		$sent = r()->getParam('sent', 0);
		$this->render('login', array(
			'model' => $model,
			'sent' => $sent,
		));
	}

	/**
	 * Action to render login form or handle user's login
	 * and redirection
	 */
	public function actionDashboard( $string = '' )
	{

	    $criteria = new CDbCriteria();
		if( strlen( $string ) > 0 ){
			$strings = explode(",", $string);

			// $contactAttributeTagsCriteria = new CDbCriteria();
			// $contactAttributeTagsCriteria->with = array( 'attributeMeta' );
			// $contactAttributeTagsCriteria->addSearchCondition( 'attributeMeta.id', '5' );
			// $contactAttributeTags = array_map(function($e) {return $e->name;}, Attribute::model()->findAll($contactAttributeTagsCriteria));

			// $filteredContactAttributeTags = array();
			// $filteredCompanyAttributeTags = array();
			// foreach ($strings as $value) {
			// 	if(in_array($value, $contactAttributeTags)){
			// 		$filteredContactAttributeTags[] = $value;
			// 	}elseif (in_array($value, $contactAttributeTags)) {
			// 		$filteredCompanyAttributeTags .= $value;
			// 	}
			// }

			$criteria->together = true;
			$criteria->with = array('company', 'tblAttributes', 'user', 'tasks', 'company.tblAttributes'=>array('alias'=>'companytblAttributes'));
			foreach ($strings as $value) {
				$criteria->addSearchCondition( 'tblAttributes.name', $value, true, 'OR' );
				$criteria->addSearchCondition( 'companytblAttributes.name', $value, true, 'OR' );
			}
			// foreach ($filteredContactAttributeTags as $value) {
			// 	$criteria->addSearchCondition( 'tblAttributes.name', $value, true, 'AND' );
			// 	$criteria->addSearchCondition( 'companytblAttributes.name', $value, true, 'OR' );
			// }
			// $criteria->addInCondition('tblAttributes.name',$strings,'AND');
			// $criteria->addInCondition('companytblAttributes.name',$strings,'AND');


			// $criteria = new CDbCriteria();
			// $criteria->with = array( 
			//     'tblAttributes' => array(
			//         'condition' => 'tblAttributes.name IN ("'.implode(",",$strings).'")',
			//         'group'     => 't.id',
			//         'having'    => 'COUNT(*) = ' . count( $strings ),
			//     )
			// );
			// $criteria->together = true;

		}

	    $dataProvider = new CActiveDataProvider( 'Contact', array( 'criteria' => $criteria, ) );
		$this->render('dashboard', array(
			'dataProvider' => $dataProvider,
		));
	}

	/**
	 * This is the action that handles user's logout
	 */
	public function actionLogout()
	{
		user()->logout();
		$this->redirect(app()->homeUrl);
	}

}