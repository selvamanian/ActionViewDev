<?php

class CampaignController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Campaign'),
		));
	}

	public function actionCreate() {
		$model = new Campaign;


		if (isset($_POST['Campaign'])) {
			$model->setAttributes($_POST['Campaign']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Campaign');


		if (isset($_POST['Campaign'])) {
			$model->setAttributes($_POST['Campaign']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Campaign')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Campaign');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Campaign('search');
		$model->unsetAttributes();

		if (isset($_GET['Campaign']))
			$model->setAttributes($_GET['Campaign']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}