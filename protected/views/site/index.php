<div class="container" id="page">

	<div id="header">
		<div id="logo"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/beclouds.png" alt="logo"></div>
	</div><!-- header -->

    <!-- ============================  Navigation Start =========================== -->

    <div class="navbar navbar-inverse-blue navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          
          
          <div class="navigation">
            <ul class="nav">
              <li class="active dropdown">

                <a href="#" class="dropdown-toggle btn-navbar-blue" data-toggle="dropdown">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </a>

                <ul class="dropdown-menu">
                  <li><a href="cart.html">Cart</a></li>
                  <li><a href="image-page.html">Images</a></li>
                  <li><a href="image-upload.html">Uploads</a></li>
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="single-post.html">Single Post</a></li>
                  <li><a href="pricing.html">Pricing</a></li>
                  <li><a href="search-results.html">Search Results</a></li>
                </ul>

              </li>
              
            </ul> <!-- end nav -->
          </div><!--/.nav-collapse -->

          <a class="brand" href="index.html"><img src="img/beclouds.png" alt="logo"></a>

          <div class="pull-right">
            <ul class="unstyled inline user-interaction">
              <!-- <li><a href="#"><span class="user">&#128100;</span></a></li> -->
				<?php 
				if( Yii::app()->user->name == 'Guest' ){
				?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="color: white;">Login</span></a>

                <ul class="dropdown-menu">
                  <li>
					<div class="form">
					<?php $form=$this->beginWidget('CActiveForm', array(
						'id'=>'login-form',
						'enableClientValidation'=>true,
						'clientOptions'=>array(
							'validateOnSubmit'=>true,
						),
					)); ?>
		<p class="note">Fields with <span class="required">*</span> are required.</p>

                    <div class="row-fluid">
                      <div class="input-wrap m-full-width">
                      		<img src='img/connect_facebook.png' style="margin-left:10px; cursor: pointer;" />
                      </div>
                    </div> 
                    
                    <div class="row-fluid">
                      <div class="input-wrap m-full-width">
                      		<img src='img/google.png' height="40" width="40" style="margin-left: 15px; cursor: pointer;" />
                      		<img src='img/linkedin.png' height="40" width="40" style="margin-left: 25px; cursor: pointer;" />
                      		<img src='img/twitter.png' height="40" width="40" style="margin-left: 25px; cursor: pointer;" />
                      </div>
                    </div> 

                    <div class="row-fluid">
                      <div class="input-wrap m-full-width">
						<div class="row">
							<?php echo $form->textField($model,'username'); ?>
							<?php echo $form->error($model,'username'); ?>
						</div>
                      </div>
                    </div> 
                    
                    <div class="row-fluid">
                      <div class="input-wrap m-full-width">
							<?php echo $form->passwordField($model,'password'); ?>
							<?php echo $form->error($model,'password'); ?>
                      </div>
                    </div>
                    
                    <div class="row-fluid">
                      <div class="input-wrap m-full-width">
                        <a href="#" class="btn green" style="width: 77%; text-align: center;"><?php echo CHtml::submitButton('Login'); ?></a>
                      </div>
                    </div>
                    
                    
				<?php $this->endWidget(); ?>
				</div>                    
                  </li>
                </ul>
              </li>
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="color: white;">Signup</span></a>

                <ul class="dropdown-menu">
                  <li>
					<div class="form">
					<?php
					/* @var $this UsersController */
					
					$form=$this->beginWidget('CActiveForm', array(
						'id'=>'signup-form',
						'enableClientValidation'=>true,
						'clientOptions'=>array(
							'validateOnSubmit'=>true,
						),
					));
					
					$this->breadcrumbs=array(
						'Users',
					);
					?>
		<p class="note">Fields with <span class="required">*</span> are required.</p>
                  
                    <div class="row-fluid">
                      <div class="input-wrap m-full-width">
                      		<img src='img/connect_facebook.png' style="margin-left:10px; cursor: pointer;" />
                      </div>
                    </div> 
                    
                    <div class="row-fluid">
                      <div class="input-wrap m-full-width">
                      		<img src='img/google.png' height="40" width="40" style="margin-left: 15px; cursor: pointer;" />
                      		<img src='img/linkedin.png' height="40" width="40" style="margin-left: 25px; cursor: pointer;" />
                      		<img src='img/twitter.png' height="40" width="40" style="margin-left: 25px; cursor: pointer;" />
                      </div>
                    </div> 

                    <div class="row-fluid">
                      <div class="input-wrap m-full-width">
						<div class="row">
							<?php echo $form->textField($signup,'user_name'); ?>
							<?php echo $form->error($signup,'user_name'); ?>
						</div>
                      </div>
                    </div> 

                    <div class="row-fluid">
                      <div class="input-wrap m-full-width">
						<div class="row">
							<?php echo $form->textField($signup,'user_email'); ?>
							<?php echo $form->error($signup,'user_email'); ?>
						</div>
                      </div>
                    </div> 
                    
                    <div class="row-fluid">
                      <div class="input-wrap m-full-width">
						<div class="row">
							<?php echo $form->passwordField($signup,'user_password'); ?>
							<?php echo $form->error($signup,'user_password'); ?>
						</div>
                      </div>
                    </div>
                    
                    <div class="row-fluid">
                      <div class="input-wrap m-full-width">
                        <a href="#" class="btn green" style="width: 77%; text-align: center;"><?php echo CHtml::submitButton('Sign Up'); ?></a>
                    </div>
                  </li>
                </ul>
                    
				<?php $this->endWidget(); ?>
              </div>
              </li>
              <?php }else{
					$this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				));               
              }?>
            </ul>  <!-- end user-interaction -->
          </div> <!-- end pull-right -->
        </div> <!-- end container -->
      </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->

    <!-- ============================  Navigation End ============================ -->


	<?php echo $content; ?>

	<div class="clear"></div>


</div><!-- page -->
