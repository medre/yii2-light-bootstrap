Light Bootstrap Admin Template v2
==============================
Yii2 Extension for Free Bootstrap Admin Template by Tim Creative. More details at https://www.creative-tim.com/product/light-bootstrap-dashboard

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist medre/yii2-light-bootstrap-v2 "*"
```

or add

```
"medre/yii2-light-bootstrap-v2": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your layout code as you wish. Below is an example that can be copied and pasted into your `views/layouts/main.php` of Yii2 Basic Template.

```php
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrapper">

    <?= \medre\lbootstrap\widgets\SideBar::widget([
        'bgImage'=>'@web/img/sidebar-5.jpg', //Don't define it if there is none
        'header'=>[
            'title'=>'Sidebar Title',
            'url'=>['/default/index']
        ],
        'links'=>[
            ['title'=>'Some URL', 'url'=>['/controller/action'], 'icon'=>'users']
        ]
    ]) ?>
    
    <div class="main-panel">

        <?= \medre\lbootstrap\widgets\NavBar::widget([
            'theme'=>'default',
            'brand'=>[
                'label'=>'Menu'
            ],
            'links'=>[
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'About', 'url' => ['/site/about']],
            ],
		]) ?>
                
        <div class="content">
            <div class="container-fluid">
                <?= $content ?>
            </div>
        </div>

        <?= medre\lbootstrap\widgets\Footer::widget(
            [
                'links' => [
                    ['label'=>'Home', 'url'=>'/', 'options'=>['target'=>'_blank']],
                    ['label'=>'Creative Tim', 'url'=>'http://www.creative-tim.com', 'options'=>['target'=>'_blank']],
                    ['label'=>'Medre', 'url'=>'http://www.medre.net', 'options'=>['target'=>'_blank']]
                 ],
                 'footer' => '&copy;'.date('Y').' <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web'
            ]
        ) ?>

    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

```