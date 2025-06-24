<h1>Test Action</h1>

<?php
use yii\widgets\ActiveForm;
use  yii\helpers\Html;
// debug($model);

?>

<?php if (Yii::$app->session->hasFlash('success')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong></strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  <?php echo Yii::$app->session->getFlash('success'); ?>
</div>
    
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('error')) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong></strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <?php echo Yii::$app->session->getFlash('error'); ?>
</div>
<?php endif; ?>


<?php $form = ActiveForm::begin(['options' => ['id' => 'test-form']]) ?>
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'email')->input('email ') ?>
<?= $form->field($model, 'text')->textarea(['rows' => 5]) ?>
<?= Html::submitButton("Отправить", ['class' => 'btn. btn-success']) ?>
<?php ActiveForm::end() ?>