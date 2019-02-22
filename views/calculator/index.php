<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\Calculator */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="calculator-index">
    <h1><?= Html::encode($this->title) ?></h1><br />

    <?php $form = ActiveForm::begin([
        'id' => 'calculator-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'control-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'lvlstart')
            ->textInput(['autofocus' => true])
            ->input('text', ['placeholder' => "Enter level"])
        ?>
        
        <?= $form->field($model, 'tier')->dropDownList(
            [
                '1' => 'T0',
                '2' => 'T1',
                '3' => 'T2',
                '4' => 'T3',
                '5' => 'T4',
                '6' => 'T5',
                '7' => 'T6',
                '8' => 'T7',
            ],
            ['prompt'=>'Select tier'])
        ?>
        
        <?= $form->field($model, 'finalmark')
            ->textInput()->input('text', ['placeholder' => "Enter mark"])
        ?>

        <div class="form-group">
            <div class="col-lg-12">
                <?= Html::submitButton('Calculate', ['class' => 'btn btn-primary', 'name' => 'calculate-button']) ?>
                <br /><h2>Result: <?= $model->result ? $model->result : '' ?></h2>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

    <div style="color:#999">
        Расчеты любезно предоставлены <?= Html::a('vpaladii', 'https://profile.intra.42.fr/users/vpaladii') ?>
        Погрешности от <code>0.01</code> до <code>0.2</code> (magic Intra, magic!)
    </div>
</div>