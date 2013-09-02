<?php

class SiteController extends Controller
{

	public $page;
	public $fbImage;
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'about'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$this->layout ='main';
		$this->render('index');
	}
	
	/**
	 * This is the team action which directs to the team page
	 */
	public function actionTeam()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('team');
	}

	/**
	 * This is the speaker application action which directs to the speaker application page
	 */
	public function actionSpeaker()
	{
		$model = new Speaker;

		if(isset($_POST['Speaker']))
		{
			$model->attributes=$_POST['Speaker'];
			$model->save();
				// $this->redirect(array('view','id'=>$model->id));

		}

		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('speaker', array('model'=>$model));
	}
	/**
	 * This is the event action which directs to the event page
	 */
	public function actionEvents($url='', $layout='column2')
	{
		$this->layout = $layout;
		if($url==''){
			$dataProvider=new CActiveDataProvider('Event',array(
				'pagination'=>array( 'pageSize'=>3, ),
				'criteria'=>array(
	                'order'=>'date DESC',
	        	)
			));
			$this->render('events',array(
				'dataProvider'=>$dataProvider,
			));

			Yii::app()->end();
			return;
		}

		$event = Event::model()->find('url=:u',array(':u'=>$url));
		if($event==null) {
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
		} else {
			$this->render('event',array(
				'model'=>$event,
			));
		}
		
	}

	/**
	 * This is the event action which directs to the speakers page
	 */
	public function actionSpeakers()
	{
		$this->layout ='column1';

		$speakers = Speaker::findAllByEvent();

		$this->render('speakers', array('speakers'=>$speakers));
	}

	/**
	 * This is the event action which directs to the speakers page
	 */
	public function actionTalks()
	{
		$this->layout ='column1';
		$this->render('talks');
	}

	/**
	 * This is the event action which directs to the event page
	 */
	public function actionSponsors()
	{
		$this->layout ='column2';
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('sponsors');
	}
	public function actionAbout($page='ted')
	{
		$this->layout ='column2';
		if($page=='ted'|| $page=='tedx' || $page=='tedxguc')
			$this->render('about', array('page'=>$page));
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		$this->layout ='column1';
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$this->layout ='column2';
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail(Yii::app()->params['adminEmail'],$model->subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;
		$this->layout ='column1';
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	public function actionCron($value='')
	{
		$cache = dirname(__FILE__) . '/../../cache/twitter-json.txt';

		$data = file_get_contents('http://api.twitter.com/1/statuses/user_timeline/TEDxGUC.json?count=3&include_rts=true&include_entities=true');	

		$cachefile = fopen($cache, 'wb');
        fwrite($cachefile,utf8_encode($data));
        fclose($cachefile);
	}
}