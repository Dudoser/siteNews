<?php

	use yii\helpers\Html;
	use yii\widgets\ActiveForm;

	$this->title = 'создание статьи';
?>
<section class="content">
	<?php $form = Activeform::begin(); ?>
		<?= $form->field($model, 'title') ?>
		<?= $form->field($model, 'full_text') ?>

		<div class="form-group">
			<?= Html::submitButton('Создать', ['class' => 'btn btn-primary']) ?>
		</div>

	<?php Activeform::end(); ?>
</section>
