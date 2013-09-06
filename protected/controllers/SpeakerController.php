<?php

class SpeakerController extends Controller
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
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('application', 'complete','publicview'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','index','create','update','publicview'),
				'users'=>array('TED'),
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
		if(Yii::app()->user->isGuest) {
			$this->actionPublicview($id);
			Yii::app()->end();
		}
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionPublicview($id)
	{
		$this->layout = 'column1';
		$this->render('publicview',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionComplete($id)
	{	
		$this->layout = 'column1';
		$this->render('complete',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionApplication()
	{		
		$this->layout = 'column1';
		$model=new Speaker;

		// Uncomment the following line if AJAX validation is needed
		//$this->performAjaxValidation($model);

		if(isset($_POST['Speaker']))
		{
			$model->attributes=$_POST['Speaker'];

			$the_file = CUploadedFile::getInstance($model, 'cv_file');

			if($the_file && isset($model->name)) {

				$name = $model->name.'_cv.'. $the_file->extensionName;

                $the_file->saveAs(realpath(Yii::app()->basePath.'/../docs/cv').'/'.$name);

                $model->cv = $name;

                $model->save();

				if ($model->save()) {
	                // $this->refresh();
	                $this->redirect(array('complete','id'=>$model->id));
	            }
			} else {
				$model->validate();
			}
               
                
		}

		$this->render('application',array(
			'model'=>$model,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{		
		$model=new Speaker;

		// Uncomment the following line if AJAX validation is needed
		//$this->performAjaxValidation($model);

		if(isset($_POST['Speaker']))
		{
			$model->attributes=$_POST['Speaker'];
			$model->summary = $_POST['Speaker']['summary'];
			$model->event_id = $_POST['Speaker']['event_id'];
			$model->video_url = !empty($model->video_url)?$model->video_url:'auto filled';
			$model->fav_talks = !empty($model->fav_talks)?$model->fav_talks:'auto filled';
			$cv = !empty($_POST['Speaker']['cv'])?$_POST['Speaker']['cv']:'auto filled';
			$model->email = !empty($model->email)?$model->email:'notamail@mail.com';
			$model->phone = !empty($model->phone)?$model->phone:'00000000000';
			$model->occupation = !empty($model->occupation)?$model->occupation:'auto filled';
			$model->age = !empty($model->age)?$model->age:'00';

			$model->cv_file = CUploadedFile::getInstance($model, 'cvfile');
			if ($model->cv_file) {
				$cv = $model->name.'_cv.'.$model->the_file->extensionName;
				$model->cv_file->saveAs(realpath(Yii::app()->basePath.'/../docs/cv').'/'.$cv);
			}
			$model->cv = $cv;
				
			$model->img_file = CUploadedFile::getInstance($model, 'img_file');
			if ($model->img_file) {
				$img = $model->name.'.'.$model->img_file->extensionName;
				$model->img_file->saveAs(realpath(Yii::app()->basePath.'/../img/speakers').'/'.$img);
				$model->img = $img;
			}
			

			if ($model->save()) {
                // $this->refresh();
                $this->redirect(array('view','id'=>$model->id));
            }
			
               
                
		}

		$this->render('create',array(
			'model'=>$model,
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

		if(isset($_POST['Speaker']))
		{
			$img = $model->img;
			$cv = $model->cv;

			$model->attributes=$_POST['Speaker'];
			$model->summary = $_POST['Speaker']['summary'];
			$model->event_id = $_POST['Speaker']['event_id'];

			$model->cv_file = CUploadedFile::getInstance($model, 'cvfile');
			if ($model->cv_file) {
				$cv = $model->name.'_cv.'.$model->the_file->extensionName;
				$model->cv_file->saveAs(realpath(Yii::app()->basePath.'/../docs/cv').'/'.$cv);
			}
			$model->cv = $cv;
				
			$model->img_file = CUploadedFile::getInstance($model, 'img_file');
			if ($model->img_file) {
				$img = $model->name.'.'.$model->img_file->extensionName;
				$model->img_file->saveAs(realpath(Yii::app()->basePath.'/../img/speakers').'/'.$img);
			}
			$model->img = $img;
        	
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
		$dataProvider=new CActiveDataProvider('Speaker');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Speaker('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Speaker']))
			$model->attributes=$_GET['Speaker'];

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
		$speakers = Speaker::model()->findAll();

		//if(!$model) throw new CHttpException(500,"The server can't find this event id.");

		Yii::import('ext.ECSVExport');

		$data = array();
		foreach ($speakers as $key => $speaker) {
			$row = array(
				'Name'=>$speaker->name,
				'Age'=>$speaker->age,
				'Occupation'=>$speaker->occupation,
				'Phone'=>$speaker->phone,
				'Email'=>$speaker->email,
				'CV link'=>'www.tedxguc.com/docs/cv/'.$data->cv,				
				'facebook'=>$speaker->fb_link,
				'twitter'=>$speaker->tw_link,
				'Other'=>$speaker->ln_link,
				'Previous Talks'=>$speaker->prev_talk_url,
				'Previous Events'=>$speaker->prev_events,
				'Favorit Talks'=>$speaker->fav_talks,
				'video url'=>$speaker->video_url,
			);
			$data[] = $row;
		}
		$csv = new ECSVExport($data);
		
		$filename = 'Speaker.csv';
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
		$model=Speaker::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='speaker-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

}
