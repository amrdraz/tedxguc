<?php

class AttendeeController extends Controller
{
	
	public $fbImage;
	public $page;
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('application','complete'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array( 'index','view', 'create','update', 'csv'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Attendee;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Attendee']))
		{
			$model->attributes=$_POST['Attendee'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionComplete()
	{	
		$this->layout = 'column1';
		$this->render('complete');
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionApplication()
	{		
		$this->layout = 'column1';
		// $model=new Attendee;

		// if(isset($_POST['Attendee']))
		// {
		// 	$model->attributes=$_POST['Attendee'];

		// 	if($model->save()) {
	 //            $this->redirect(array('complete','id'=>$model->id));
		// 	}
		// }

		$this->render('application',array(
			// 'model'=>$model,
		));
	}


	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Attendee']))
		{
			$model->attributes=$_POST['Attendee'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
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
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Attendee');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Attendee('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Attendee']))
			$model->attributes=$_GET['Attendee'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * this action returns a csv file of all the spakers data, if an event id is specified it will do so for only the specified event
	 * @status incomplete it doesn't work with event yet just returns all speakers
	 * @param integer the ID of the event id 
	 */
	public function actionCSV($id=0)
	{
		//$model=Event::model()->findByPk($id);
		$attendees = Attendee::model()->findAll('gucian=1');

		//if(!$model) throw new CHttpException(500,"The server can't find this event id.");

		Yii::import('ext.ECSVExport');

		$data = array();
		foreach ($attendees as $key => $attendee) {
			$row = array(
				$attendee->getAttributeLabel('first_name')=>$attendee->first_name,
				$attendee->getAttributeLabel('middle_name')=>$attendee->middle_name,
				$attendee->getAttributeLabel('last_name')=>$attendee->last_name,
				$attendee->getAttributeLabel('birth_year')=>$attendee->birth_year,
				$attendee->getAttributeLabel('home_address')=>$attendee->home_address,
				'Is Gucian'=>$attendee->isGucan(),
				$attendee->getAttributeLabel('gucian_other')=>$attendee->gucian_other,
				'Bus Number'=>$attendee->bus_number,
				'Email'=>$attendee->email,
				$attendee->getAttributeLabel('phone')=>('P'.$attendee->phone),
				'Education Level'=>$attendee->educationLevel,				
				'Job Title'=>$attendee->job_title,
				'Info about TED'=>$attendee->tedx_info,
				$attendee->getAttributeLabel('how_many')=>$attendee->howMany,
				$attendee->getAttributeLabel('how_much')=>$attendee->howMuch,
				$attendee->getAttributeLabel('how_did')=>$attendee->howDid,
				$attendee->getAttributeLabel('how_other')=>$attendee->how_other,
				$attendee->getAttributeLabel('about_theme')=>$attendee->about_theme,
				$attendee->getAttributeLabel('speaker_choice')=>$attendee->speaker_choice,
				'Excpect_talks'=>$attendee->excpect_talks,
				$attendee->getAttributeLabel('intresting_talk')=>$attendee->intresting_talk,
				'Waiting List'=>$attendee->isWating(),

			);
			$data[] = $row;
		}
		$csv = new ECSVExport($data);
		
		$filename = 'Attendees.csv';
		$content = $csv->toCSV();
		//echo $content;                   
		Yii::app()->getRequest()->sendFile($filename, $content, "text/csv", false);
		exit();
		//*/
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Attendee::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='attendee-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
