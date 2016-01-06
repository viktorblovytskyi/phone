<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title><?php echo $this->pageTitle; ?></title>
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
    <div id="header">
        <div id="logo">
            <h1><a href="#">Telephone </a></h1>
            <p>directory</p>
        </div>
        <div id="search">
            <form method="get" action="">
                <fieldset>
                    <input type="text" name="s" id="search-text" size="15" value="enter keywords here..." />
                    <input type="submit" id="search-submit" value="GO" />
                </fieldset>
            </form>
        </div>
    </div>
    <!-- end #header -->
    <div id="menu">
        <?php $this->widget('zii.widgets.CMenu',array(
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/numbers/index')),
                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        )); ?>
    </div>
    <!-- end #menu -->
    <div id="page">
        <div id="page-bgtop">
            <div id="page-bgbtm">
                <div id="content">
                    <?php echo $content; ?>
                    <div style="clear: both;">&nbsp;</div>
                </div>
                <!-- end #content -->
                <div id="sidebar">
                    <?php
                    $this->beginWidget('zii.widgets.CPortlet', array(
                        'title'=>'Operations',
                    ));
                    $this->widget('zii.widgets.CMenu', array(
                        'items'=>$this->menu,
                        'htmlOptions'=>array('class'=>'operations'),
                    ));
                    $this->endWidget();
                    ?>
                </div>
                <!-- end #sidebar -->
                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
    </div>
    <!-- end #page -->
</div>
<div id="footer">
    <p>&copy; Untitled. All rights reserved. Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
