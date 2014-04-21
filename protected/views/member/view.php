<?php
/* @var $this MemberController */
/* @var $model Member */

$this->menu=array(
	array('label'=>'List Member', 'url'=>array('index')),
	array('label'=>'Create Member', 'url'=>array('create')),
	array('label'=>'Update Member', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Member', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Member', 'url'=>array('admin')),
);
?>

<?php if(!Yii::app()->user->isGuest) { ?>

<h1>View Member #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'role',
		'major',
		'skills',
		'talents',
		'achievments',
		'why',
		'past_experience',
		'facebook',
		'website',
		'points',
		'img',
	),
)); ?>

<?php } else { ?>

<?php // The above section will only appear when a person loggs in ?>

	<section class="main-container profile-main">
 <div class="profileIntro">
        
            <h2 class="floatLeft"> <?php echo $model->name ?> </h2>

            <a href="#" class="encourageButton floatRight"><h6>Encourage!</h6></a>
            
        </div>
        
        <div class="profileGeneralInfo">
		
            <div class="profile-column-left">



                <img class="profilePicture" src="<?php echo Yii::app()->request->baseUrl.'/img/members/'.$model->img ?>" />
<!-- 
                <div class="assessment">

                    <div>
                        <h6>Presentation<br>skills</h6>
                        <img src="img/ratings/rating1.jpg" />
                    </div>

                    <div>
                        <h6>Work Under<br>Pressure</h6>
                        <img src="img/ratings/rating2.jpg" />
                    </div>

                    <div>
                        <h6>Time<br>Management</h6>
                        <img src="img/ratings/rating3.jpg" />
                    </div>

                    <div>
                        <h6><br>Development</h6>
                        <img src="img/ratings/rating4.jpg" />
                    </div>

                </div>
 -->
            </div>

            <div class="profile-column-right">

                <img class="floatRight" src="<?php echo Yii::app()->request->baseUrl.'img/mainElements/timeCapsule.jpg' ?>" />

                <h3>Role <?php echo $model->role ?></h3>
                <h4><?php echo $model->major ?></h4>

                <h5>Skills</h5>
                <h4><?php echo $model->skills ?></h4>

                <h5>Talents</h5>
                <h4><?php echo $model->talents ?></h4>

                <h5>Achievements</h5>
                <h4><?php echo $model->achievments ?></h4>

                <h5>Why TEDxGUC</h5>
                <h4><?php echo $model->why ?></h4>

                <h5>Past Experiences</h5>
                <h4><?php echo $model->past_experience ?></h4>

                <div class="linkContainer">
					<?php // should moved to css :before or :after psudo element where it should be ?>
                    <!-- <img class="floatLeft linkIcon" src="img/mainElements/link.jpg" /> -->

                    <div class="links floatLeft">
                    	<a href="<?php echo $model->facebook ?>"><?php echo $model->facebook ?></a>
                       <?php if($model->website) { ?>
                        <h5><a href="<?php echo $model->website ?>"><?php echo $model->website ?></a></h5>
                        <?php } ?>
                    </div>

                </div>

            </div>
        
        </div>    
    </section>

<?php } ?>
