<?php

/* @var $this yii\web\View */

$this->title = 'GS | ONGC';

use yii\helpers\Html;
use yii\bootstrap\Carousel;
use yii\web\View;

?>
<div class="site-index" xmlns="http://www.w3.org/1999/html">
    <div class="body-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Health, Safety &amp; Environment <span style="font-size:large; cursor:pointer; float: right;" onclick="openNav()">&#9776; HSE Menu</span>
                    </div>
                    <div class="panel-body">
                        <p class="text-justify"><strong>HSE Policy:</strong> Exploration and production of hydrocarbon involves risk and close interaction with surrounding environment. To safeguard the working and surrounding environment, ONGC has adopted a well defined HSE policy focusing on Occupational Health, Safe Operation and control of pollution.</p>
                        <?= Html::img('images/hse/hse-flowchart.jpg', array('class' => 'img-responsive text-center', 'width' => '400', 'height' => '400')); ?>
                        <p class="text-justify"><strong>ISO certified:</strong> All the installations of ONGC have an integrated management System based on requirements of ISO 9001, OHSAS 18001 and ISO 14001 and certified by third party. The integrated management system is in place since 2004. All operating facilities were certified to ISO 9001 since 2004-05. All working units have third party certified integrated QHSE Management System.</p>
                        <p class="text-justify"><?= Html::a('Read more on ONGC Website...', 'http://www.ongcindia.com/wps/wcm/connect/ongcindia/Home/Initiatives/HSE/', array('target' => '_blank', 'style' => 'text-decoration: none;')); ?></p>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Status of safety and technical audits (June 2017):
                    </div>
                    <div class="panel-body">
                        <!--<p><h4><strong>Number of Observations/Complied/Pending - Safety Audit:</strong></h4></p>-->
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th colspan="3"><h4><strong>Safety Audit</strong></h4></th>
                                        <th colspan="3"><h4><strong>Technical Audit</strong></h4></th>
                                    </tr>
                                    <tr>
                                        <th>Work Centre</th>
                                        <th>No. of obs./para</th>
                                        <th>Observations Complied</th>
                                        <th>Pending</th>
                                        <th>No. of obs./ para</th>
                                        <th>Observations Complied</th>
                                        <th>Pending</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Chennai</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
                                    </tr>
                                    <tr>
                                        <td>Dehradun</td><td>2</td><td>--</td><td>2</td><td>--</td><td>--</td><td>--</td>
                                    </tr>
                                    <tr>
                                        <td>Jorhat</td><td>--</td><td>--</td><td>--</td><td>1</td><td>1</td><td>--</td>
                                    </tr>
                                    <tr>
                                        <td>Kolkata</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
                                    </tr>
                                    <tr>
                                        <td>Mumbai</td><td>19</td><td>3</td><td>16</td><td>16</td><td>3</td><td>13</td>
                                    </tr>
                                    <tr>
                                        <td>Vadodara</td><td>20</td><td>20</td><td>--</td><td>--</td><td>--</td><td>--</td>
                                    </tr>
                                    <tr>
                                        <td>CGS Office</td><td>--</td><td>--</td><td>--</td><td>5</td><td>5</td><td>--</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Accidents: 2016-17 &amp; 2017-18
                    </div>
                    <div class="panel-body">
                        <!--<p><h4><strong>Number of Observations/Complied/Pending - Safety Audit:</strong></h4></p>-->
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th colspan="2">Near Miss</th>
                                    <th colspan="2">Minor</th>
                                    <th colspan="2">Major</th>
                                    <th colspan="2">Fatal</th>
                                </tr>
                                <tr>
                                    <th>Work Centre</th>
                                    <th>2016-17</th>
                                    <th>2017-18</th>
                                    <th>2016-17</th>
                                    <th>2017-18</th>
                                    <th>2016-17</th>
                                    <th>2017-18</th>
                                    <th>2016-17</th>
                                    <th>2017-18</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Chennai</td><td>20</td><td>4</td><td>1</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
                                </tr>
                                <tr>
                                    <td>Dehradun</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
                                </tr>
                                <tr>
                                    <td>Jorhat</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
                                </tr>
                                <tr>
                                    <td>Kolkata</td><td>5</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>1</td><td>--</td>
                                </tr>
                                <tr>
                                    <td>Mumbai</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
                                </tr>
                                <tr>
                                    <td>Vadodara</td><td>2</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
                                </tr>
                                <tr>
                                    <td><strong>Total</strong></td><td><strong>27</strong></td><td><strong>1</strong></td><td><strong>1</strong></td><td><strong>--</strong></td><td><strong>--</strong></td><td><strong>--</strong></td><td><strong>1</strong></td><td><strong>--</strong></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Details of HSE Units
                    </div>
                    <div class="panel-body">
                        <h4><strong>Mumbai</strong></h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Role</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Office Phone</th>
                                    <th>Residence Phone</th>
                                    <th>Mobile</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Safety Officer</td><td>A Dakshinamurthy</td><td>DGM(E&T)</td><td>022 2748 6506</td><td>022 2745 5054</td><td>9969224433</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <h4><strong>Kolkata</strong></h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Role</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Office Phone</th>
                                    <th>Residence Phone</th>
                                    <th>Mobile</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Party Chief (GP-17)</strong></td><td>S K Ghosal</td><td>CG (S)</td><td>033 2340 3217</td><td></td><td>9643301726</td>
                                    </tr>
                                    <tr>
                                        <td>MR</td><td>G S Das</td><td>CG (S)</td><td>033 2340 3217</td><td></td><td>9432020209</td>
                                    </tr>
                                    <tr>
                                        <td>Safety Officer</td><td>S S Das</td><td>TA GD.II (Geoph)</td><td>033 2340 3217</td><td></td><td>9432020811</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <h4><strong>Vadodara</strong></h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Role</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Office Phone</th>
                                    <th>Residence Phone</th>
                                    <th>Mobile</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Party Chief(GP-03)-MA</strong></td><td>A.K.Sahoo</td><td>DGM-Party Chief</td><td></td><td></td><td>9428007404</td>
                                    </tr>
                                    <tr>
                                        <td>MR</td><td>Rajanarayan P</td><td>Dy.S.G(S)</td><td></td><td></td><td>9428007317</td>
                                    </tr>
                                    <tr>
                                        <td>MR</td><td>Barun Kr. Sardar</td><td>Geophy. ( S )</td><td></td><td></td><td>9428828078</td>
                                    </tr>
                                    <tr>
                                        <td>Safety Officer</td><td>J K Parikh</td><td>AEE(Mech)</td><td></td><td></td><td>9428828191</td>
                                    </tr>
                                    <tr>
                                        <td>Safety Officer</td><td>Mihir Pathak</td><td>TA Gd III-Geophy (S)</td><td></td><td></td><td>9428828420</td>
                                    </tr>
                                    <tr><td colspan="6"></td></tr>
                                    <tr>
                                        <td><strong>Party Chief (GP-06)-MA</strong></td><td>T.K.Prasad</td><td>DGM(GP)-Party Chief</td><td></td><td></td><td>9428007361</td>
                                    </tr>
                                    <tr>
                                        <td>MR</td><td>A Raghvender</td><td>Sr. Geophysicist(S)</td><td></td><td></td><td>9428007295</td>
                                    </tr>
                                    <tr>
                                        <td>MR</td><td>Samir N Bhardwaj</td><td>TA Gd-III Geophy(S)</td><td></td><td></td><td>9428828426</td>
                                    </tr>
                                    <tr>
                                        <td>Safety Officer</td><td>R G Patel</td><td>AEE(Mech)</td><td></td><td></td><td>9428828182</td>
                                    </tr>
                                    <tr>
                                        <td>Safety Officer</td><td>Mayur Trivedi</td><td>TA Gd III-Geophy (S)</td><td></td><td></td><td>9428828434</td>
                                    </tr>
                                    <tr><td colspan="6"></td></tr>
                                    <tr>
                                        <td><strong>Party Chief (GP-15) MA,MR &amp; Safety Officer</strong></td><td>K.V.G.K.Rao</td><td>CG(S)-Party Chief</td><td></td><td></td><td>9428007425</td>
                                    </tr>
                                    <tr><td colspan="6"></td></tr>
                                    <tr>
                                        <td><strong>Party Chief (GP-16)-MA</strong></td><td>Amit Agarwal</td><td>CG(S)-Party Chief</td><td></td><td></td><td>9428007415</td>
                                    </tr>
                                    <tr>
                                        <td>MR</td><td>Kirit P Patel</td><td>Tech Astt Gd-III</td><td></td><td></td><td>9428007390</td>
                                    </tr>
                                    <tr>
                                        <td>Safety Officer</td><td>Hardyal Singh</td><td>MMO</td><td></td><td></td><td>9428007634</td>
                                    </tr>
                                    <tr>
                                        <td>Safety Officer</td><td>M A Rathwa</td><td>J T A(Survey)</td><td></td><td></td><td></td>
                                    </tr>
                                    <tr><td colspan="6"></td></tr>
                                    <tr>
                                        <td><strong>Party Chief (GP-26)</strong></td><td>Ashok Kumar</td><td>CG(S)-Party Chief</td><td></td><td></td><td>9428007427</td>
                                    </tr>
                                    <tr>
                                        <td>MR</td><td>Pradeep Kumar</td><td>Sr. Geophysicist (S)</td><td></td><td></td><td>9428828489</td>
                                    </tr>
                                    <tr>
                                        <td>MR</td><td>Aravind Sivdas</td><td>Sr. Geophysicist (S)</td><td></td><td></td><td>9428007769</td>
                                    </tr>
                                    <tr>
                                        <td>Safety Officer</td><td>R D Patel</td><td>EE(Auto)</td><td></td><td></td><td>9428007486</td>
                                    </tr>
                                    <tr>
                                        <td>Safety Officer</td><td>S P Nirala</td><td>EE(Mechanical)</td><td></td><td></td><td>9428007172</td>
                                    </tr>
                                    <tr><td colspan="6"></td></tr>
                                    <tr>
                                        <td><strong>Party Chief (GP-61)-MA</strong></td><td>R.B.Singh</td><td>DGM(GP)-Party Chief</td><td></td><td></td><td>9428007437</td>
                                    </tr>
                                    <tr>
                                        <td>MR</td><td>S.K.Srivastava</td><td>Sr. Geophysicist (S)</td><td></td><td></td><td>9428828454</td>
                                    </tr>
                                    <tr>
                                        <td>MR</td><td>Abhra Chowdhury</td><td>Sr. Geophysicist (S)</td><td></td><td></td><td>9435718729</td>
                                    </tr>
                                    <tr>
                                        <td>Safety Officer</td><td>M.S.Patel</td><td>SE(Mech)</td><td></td><td></td><td>9428007307</td>
                                    </tr>
                                    <tr>
                                        <td>Safety Officer</td><td>R.K.Mandal</td><td>EE(Mech)</td><td></td><td></td><td>9428828185</td>
                                    </tr>
                                    <tr><td colspan="6"></td></tr>
                                    <tr>
                                        <td><strong>Party Chief (GP-81)</strong></td><td>H N Garg</td><td>DGM(GP)-Party Chief</td><td></td><td></td><td>9428007532</td>
                                    </tr>
                                    <tr>
                                        <td>MR</td><td>Anoop Padmanabhan</td><td>Geophysicist (S)</td><td></td><td></td><td>9428007749</td>
                                    </tr>
                                    <tr>
                                        <td>MR</td><td>Chinmoy Kumbakar</td><td>Geophysicist (S)</td><td></td><td></td><td>9428007320</td>
                                    </tr>
                                    <tr>
                                        <td>Safety Officer</td><td>S.Bhaskaran</td><td>DGM(GP)</td><td></td><td></td><td>9428007371</td>
                                    </tr>
                                    <tr>
                                        <td>Safety Officer</td><td>R S Suthar</td><td>AEE(Mech)</td><td></td><td></td><td>9428828198</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="mySidenav" class="sidenav">
            <?= Html::a('&times;', 'javascript:void(0)', array('class' => 'closebtn', 'onclick' => 'closeNav()')); ?>
            <?= Html::a('HSE Policy', '#', array('data-toggle' => 'modal', 'data-target' => '#hsePolicy')); ?>
            <?= Html::a('HSE Rules', '#', array('data-toggle' => 'modal', 'data-target' => '#hseRules')); ?>
            <?= Html::a('HSE Organogram', '#', array('data-toggle' => 'modal', 'data-target' => '#hseOrg')); ?>
            <?= Html::a('Corporate HSE', 'http://chse.ongc.co.in/index.asp', array('target' => '_blank')); ?>
            <?= Html::a('Sectoral HSE', 'http://10.208.131.20', array('target' => '_blank')); ?>
        </div>
        <div id="hsePolicy" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"<span class="glyphicon glyphicon-remove"></span>/button>
                        <h4 class="modal-title">HSE Policy</h4>
                    </div>
                    <div class="modal-body">
                        <?= Html::img('images/hse/hse-policy.png', array('class' => 'img-responsive')); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="hseOrg" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"<span class="glyphicon glyphicon-remove"></span>/button>
                        <h4 class="modal-title">HSE Organogram</h4>
                    </div>
                    <div class="modal-body">
                        <?= Html::img('images/HSE-Organogram.jpg', array('class' => 'img-responsive')); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="hseRules" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"<span class="glyphicon glyphicon-remove"></span>/button>
                        <h4 class="modal-title">HSE Rules</h4>
                    </div>
                    <div class="modal-body">
                        <?php
                        echo Carousel::widget([
                            'items' => [
                                ['content'=>  Html::img('images/hse/rule-1.png', array('class' => 'img-responsive'))],
                                ['content'=>  Html::img('images/hse/rule-2.png', array('class' => 'img-responsive'))],
                                ['content'=>  Html::img('images/hse/rule-3.png', array('class' => 'img-responsive'))],
                                ['content'=>  Html::img('images/hse/rule-4.png', array('class' => 'img-responsive'))],
                                ['content'=>  Html::img('images/hse/rule-5.png', array('class' => 'img-responsive'))],
                                ['content'=>  Html::img('images/hse/rule-6.png', array('class' => 'img-responsive'))],
                                ['content'=>  Html::img('images/hse/rule-7.png', array('class' => 'img-responsive'))],
                            ]
                        ]);
                        ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
