<?php

/* @var $this UserController */
/* @var $model User */

$this->pageTitle = 'Changer mon mot de passe';

?>

<h2>Changer mon mot de passe</h2>

<hr />

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>