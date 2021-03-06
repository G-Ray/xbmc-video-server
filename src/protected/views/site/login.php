<?php

/* @var $form TbActiveForm */
/* @var $model LoginForm */

$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'layout'=>TbHtml::FORM_LAYOUT_HORIZONTAL));

echo CHtml::tag('h2', array(), 'Merci de vous identifier');
echo '<hr />';

echo $form->textFieldControlGroup($model, 'username', array('autofocus'=>'autofocus'));
echo $form->passwordFieldControlGroup($model, 'password');
echo $form->checkBoxControlGroup($model, 'rememberMe');

?>
<div class="form-actions">
	<?php echo TbHtml::submitButton('Connexion', array(
		'color'=>TbHtml::BUTTON_COLOR_PRIMARY)); ?>
</div>

<?php 

$this->endWidget();