<h1>Show Action</h1>
 

<?php //$this->registerJs('$(".container").append("<p>SHOW!!!!</p>")', \yii\web\View::POS_LOAD) ?>

<?php // $this->registerCss('.container{background: #ccc;}') ?>

<?php //foreach ($cats as $cat) {
    //echo $cat->login . "<br>";
    //} ?>

<?php debug($cats) ?>

<button class="btn btn-success">Click Me...</button>
<?php
$js = <<<JS

$('#btn').on("click", function() {
    $.ajax({
        url: 'index.php?r=post/index',
        data: {test : 123},
        type: 'GET',
        success: function(res) {
            console.log(res);
        }, 
        error: function() {
            alert("Error!");
        }
    })
})
JS;
$this->registerJs($js);
?>