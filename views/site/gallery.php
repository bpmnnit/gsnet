<?php

/* @var $this yii\web\View */

$this->title = 'CGS | ONGC';

use yii\helpers\Html;
use yii\bootstrap\Carousel;

?>
<div class="site-index" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
     xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <div class="body-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Photo Gallery</div>
                    <div class="panel-body">
                        <div class="media">
                            <div class="media-left">
                                <?= Html::img('images/gallery-thumb-2.jpg', array('class' => 'media-object', 'width' => '80px')); ?>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">CSR GP-82, Dehradun(11 August 2016)</h3>
                                <p>
                                    <?= Html::a('11th August 2016', 'gallery/CSR_GP-82_DDN_11_08_2016'); ?>
                                </p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <?= Html::img('images/gallery-thumb-3.jpg', array('class' => 'media-object', 'width' => '80px')); ?>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">CSR GP-82, Dehradun(23 June 2016)</h3>
                                <p>
                                    <?= Html::a('23th June 2016', 'gallery/CSR_GP-82_DDN_23_06_2016'); ?>
                                </p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <?= Html::img('images/gallery-thumb-1.jpg', array('class' => 'media-object', 'width' => '80px')); ?>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">CSR GP-82, Dehradun(10 May 2016)</h3>
                                <p>
                                    <?= Html::a('10th May 2016', 'gallery/CSR_GP-82_DDN_10_05_2016'); ?>
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="media">
                            <div class="media-left">
                                <?= Html::img('images/gallery-thumb-4.jpg', array('class' => 'media-object', 'width' => '80px')); ?>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">HSE Awareness At GS, Jorhat</h3>
                                <p>
                                    <?= Html::a('Click to view', 'gallery/HSE-Jorhat'); ?>
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="media">
                            <div class="media-left">
                                <?= Html::img('images/gallery-thumb-5.jpg', array('class' => 'media-object', 'width' => '80px')); ?>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">Eye Camp at GS, Vadodara</h3>
                                <p>
                                    <?= Html::a('11 October 2015', 'gallery/Eye_Camp_Vadodara_11_10_2015'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>