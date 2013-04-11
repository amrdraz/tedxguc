<?php

class SubscribeController extends Controller
{
	public function actionAdd($email='test')
	{
		if(isset($_POST['email'])) $email = trim($_POST['email']);
		if($email=='test') Yii::app()->end();

		if(!Subscriber::model()->findByPk($email)){
			if(preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email)){
				$subscription = new Subscriber;
				$subscription->email = $email;
				if($subscription->save()) {
					$us = Yii::app()->params['adminEmail'];
					$subject = 'Subscription Confirmation';
					$body = '
						<img src="http://www.tedxguc.com/img/mainElements/tedxguc_black.png" style="float:right;padding-right:10px;width:100px;" />
						<section>
						Thank you for subscribing to the TEDxGUC newsletter! 
						<br/><br/>
						We look forward to see you at our event
						</section>
					';
					// To send HTML mail, the Content-type header must be set
					$headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					
					// Additional headers
					$headers .= 'To: '.$email. "\r\n";
					$headers .= 'From: TEDxGUC <'.$us.'>' . "\r\n";
					mail($email,$subject,$body,$headers);
					echo "Subscription Complete";
				}
			} else {
				echo "Invalid Email try Again";
			}
		} else {
			echo "Already Subscribed";
		}
		
		Yii::app()->end();
	}

	public function actionSend($email="amr.m.draz@gmail.com"){

		$us = Yii::app()->params['noReply'];
		$subject = 'Deadline Extension';

		$body = $this->renderPartial('newsletter', array(), true);

		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		// Additional headers
		$headers .= 'To: '.$email. "\r\n";
		$headers .= 'From: TEDxGUC <'.$us.'>' . "\r\n";
		mail($email,$subject,$body,$headers);

		echo "Send Mail to ".$email."<br><br> Content: <br>".$body;
	}

}