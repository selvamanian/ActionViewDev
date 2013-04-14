<?php

class AttributeController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Attribute'),
		));
	}

	public function actionCreate() {
		$model = new Attribute;


		if (isset($_POST['Attribute'])) {
			$model->setAttributes($_POST['Attribute']);
			$relatedData = false;
			// $relatedData = array(
			// 	'tblCompanies' => $_POST['Attribute']['tblCompanies'] === false ? null : $_POST['Attribute']['tblCompanies'],
			// 	'tblContacts' => $_POST['Attribute']['tblContacts'] === '' ? null : $_POST['Attribute']['tblContacts'],
			// 	);

			if ($model->saveWithRelated($relatedData)) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Attribute');


		if (isset($_POST['Attribute'])) {
			$model->setAttributes($_POST['Attribute']);
			$relatedData = array(
				'tblCompanies' => $_POST['Attribute']['tblCompanies'] === '' ? null : $_POST['Attribute']['tblCompanies'],
				'tblContacts' => $_POST['Attribute']['tblContacts'] === '' ? null : $_POST['Attribute']['tblContacts'],
				);

			if ($model->saveWithRelated($relatedData)) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Attribute')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Attribute');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Attribute('search');
		$model->unsetAttributes();

		if (isset($_GET['Attribute']))
			$model->setAttributes($_GET['Attribute']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}