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
                <?php
                echo Carousel::widget([
                    'items' => [
                        ['content'=>  Html::img('images/sl-1.jpg', array('height' => '210', 'width' => '1200', 'class' => 'img-responsive')), 'caption' => 'Geophysical Services'],
                        ['content'=>  Html::img('images/sl-2.jpg', array('height' => '210', 'width' => '1200', 'class' => 'img-responsive')), 'caption' => 'Geophysical Services'],
                        ['content'=>  Html::img('images/sl-3.jpg', array('height' => '210', 'width' => '1200', 'class' => 'img-responsive')), 'caption' => 'Geophysical Services'],
                        ['content'=>  Html::img('images/sl-4.jpg', array('height' => '210', 'width' => '1200', 'class' => 'img-responsive')), 'caption' => 'Geophysical Services'],
                        ['content'=>  Html::img('images/sl-5.jpg', array('height' => '210', 'width' => '1200', 'class' => 'img-responsive')), 'caption' => 'Geophysical Services'],
                    ]
                ]);
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 nopadding-right">
                <div class="panel panel-primary custom">
                    <div class="panel-heading">
                        Menu
                    </div>
                    <div class="panel-body" id="menu">
                        <div class="dropdown">
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static; margin-bottom: 5px; width: 180px;">
                                <li><a tabindex="-1" href="#" id="ln_news"><span>News &amp; Notices</span></a></li>
                                <li><a tabindex="-1" href="#" id="ln_docs"><span>Frequently Used Docs</span></a></li>
                                <li><a tabindex="-1" href="#" id="ln_role"><span>Role of GS</span></a></li>
                                <li><a tabindex="-1" href="#" id="ln_manpower"><span>Manpower</span></a></li>
                                <li><a tabindex="-1" href="#" id="ln_organogram"><span>Organogram</span></a></li>
                                <li><a tabindex="-1" href="#" id="ln_locations"><span>Locations</span></a></li>
                                <li><a tabindex="-1" href="#" id="ln_targets"><span>Targets</span></a></li>
                                <li><a tabindex="-1" href="#" id="ln_contacts"><span>Contact Us</span></a></li>
                                <li class="dropdown-submenu"><a tabindex="-1" href="#"><span>Important Links</span></a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="http://reports.ongc.co.in/" target="_blank"><span>ONGC Reports</span></a></li>
                                        <li><a tabindex="-1" href="https://mail.ongc.co.in/webredir.nsf" target="_blank"><span>ONGC Mail</span></a></li>
                                        <li><a tabindex="-1" href="https://webice.ongc.co.in/" target="_blank"><span>Webice</span></a></li>
                                        <li><a tabindex="-1" href="https://disha.ongc.co.in/ProcessPortal/login.jsp" target="_blank"><span>Disha</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 nopadding-left">
                <div class="panel panel-primary custom" id="gs_news">
                    <div class="panel-heading">
                        News &amp; Notices
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li><?= Html::a('FS 2016-17, Acquistion BE target over achieved.', '#', array('data-toggle' => 'modal', 'data-target' => '#modalAcquisition')); ?></li>
                            <li><?= Html::a('All the Processing Centres achieved their Annual Targets.', '#', array('data-toggle' => 'modal', 'data-target' => '#modalProcessing')); ?></li>
                            <li>Targets of Q1, FY 2017-18 also achieved.</li>
                            <li>All parties have demobilzed.</li>
                            <li>Process for procurement of seven new data acquisition system underway.</li>
                            <li>PO placed for new HPCC system for up-gradation of processing centres.</li>
                            <li>Software modules ES-360, OMEGA installed at SPIC Mumbai.</li>
                            <li>FTG Survey by AGG method carried out in Cachar, Mizoram and Galecki area of A&amp;A Basin and in block KG- -- of KG Basin.</li>
                        </ul>
                    </div>
                </div>
                <div class="panel panel-primary custom" id="gs_manpower">
                    <div class="panel-heading">
                        Manpower Distribution
                    </div>
                    <div class="panel-body">
                        <?php
                        //$this->registerJsFile('https://www.google.com/jsapi',['position' => View::POS_HEAD]);
                        $this->registerJs('google.charts.load("current", {"packages":["corechart"]});');
                        $this->registerJs('google.charts.setOnLoadCallback(drawChart1);');
                        ?>
                        <p>Region Wise Manpower Distribution (as on 6 July 2017):</p>
                        <div id="piechart1"></div>
                        <hr>
                        <?php
                        //$this->registerJsFile('https://www.google.com/jsapi',['position' => View::POS_HEAD]);
                        $this->registerJs('google.charts.load("current", {"packages":["corechart"]});');
                        $this->registerJs('google.charts.setOnLoadCallback(drawChart2);');
                        ?>
                        <p>Descipline Wise Manpower Distribution:</p>
                        <div id="piechart2"></div>
                    </div>
                </div>
                <div class="panel panel-primary custom" id="gs_organogram">
                    <div class="panel-heading">
                        Organogram
                    </div>
                    <div class="panel-body">
                        <?= Html::img('images/cgs-org.png', array('class' => 'img-responsive', 'usemap' => '#modalHgs')); ?>
                        <map name="modalHgs">
                            <area shape="rect" coords="0,235,127,287" alt="Modal HGS" data-toggle="modal" data-target="#mumHgs">
                            <area shape="rect" coords="700,235,827,287" alt="Modal HGS" data-toggle="modal" data-target="#kolHgs">
                        </map>
                    </div>
                </div>
                <div class="panel panel-primary custom" id="gs_role">
                    <div class="panel-heading">
                        Role of Geophysical Services
                    </div>
                    <div class="panel-body">
                        <p class="text-justify">
                        <ul>
                            <li>Responsible for overall performance Management of Geophysical Services.</li>
                            <li>Ensure optimum resource utilization, resource mobilization to the required areas.</li>
                            <li>Provide guidelines and monitor performance of various groups under Geophysical Services.</li>
                            <li>Coordinate with HR planners for resource planning, training and development of human resource.</li>
                            <li>Develop vision and strategic plan.</li>
                            <li>Overall performance monitoring.</li>
                            <li>Plan, allocate, review and monitor the utilization of resources to achieve targets as per performance contracts.</li>
                            <li>Scouting and induction of  new technology in seismic A&P.</li>
                            <li>Capturing of external opportunities & Coordinate with outside agencies for smooth functioning of the operations.</li>
                            <li>Coordination for planning, job rotation, training and development of human resource.</li>
                            <li>Implementation of policies and guidelines to improve effectiveness.</li>
                        </ul>
                    </div>
                </div>
                <div class="panel panel-primary custom" id="gs_docs">
                    <div class="panel-heading">
                        Important Documents
                    </div>
                    <div class="panel-body">
                        <p class="text-justify">
                        <ul>
                            <li><?= Html::a('<span class="glyphicon glyphicon glyphicon-file"></span>&nbsp;Book of Delegated Powers, 2015 (Updated upto 5th June, 2017)', 'docs/BDPUpd 05.06.2017.pdf', ['target' => '_blank']) ?></li>
                            <li><?= Html::a('<span class="glyphicon glyphicon glyphicon-file"></span>&nbsp;BDP Amendment No. 2/2017 (BDP 2015)', 'docs/BDP_Amendmnt_2.pdf', ['target' => '_blank']) ?></li>
                            <li><?= Html::a('<span class="glyphicon glyphicon glyphicon-file"></span>&nbsp;Integrated Materials Management Manual (Updated upto 13th April 2016)', 'docs/Integrated MM Manual updated upto 13_04_2016.pdf', ['target' => '_blank']) ?></li>
                            <li><?= Html::a('<span class="glyphicon glyphicon glyphicon-file"></span>&nbsp;Officer Order: Reporting and Investigation of Incidents/Accidents', 'docs/Reporting & Investigation of Incidents, Accidents.pdf', ['target' => '_blank']) ?></li>
                        </ul>
                    </div>
                </div>
                <div class="panel panel-primary custom" id="gs_locations">
                    <div class="panel-heading">
                        Locations
                    </div>
                    <div class="panel-body">
                        <div class="indiamap">
                            <?= Html::img('images/india-map.jpg', array('class' => 'img-responsive')); ?>
                            <a href="index.php?r=site/prochennai"><span id="mark-chennai" data-toggle="popover" title="HGS Chennai" data-content="hgs_che@ongc.co.in" class="glyphicon glyphicon-map-marker blink"><strong>CHE</strong></span></a>
                            <a href="index.php?r=site/provadodara"><span id="mark-baroda" data-toggle="popover" title="HGS Vadodara" data-content="hgs_bda@ongc.co.in" class="glyphicon glyphicon-map-marker blink"><strong>VDA</strong></span></a>
                            <a href="index.php?r=site/acqdehradun"><span id="mark-dehradun" data-toggle="popover" title="HGS Dehradun" data-content="hgs_ddn@ongc.co.in" class="glyphicon glyphicon-map-marker blink"><strong>DDN</strong></span></a>
                            <a href="index.php?r=site/promumbai"><span id="mark-mumbai" data-toggle="popover" title="GS Mumbai" data-content="cgs_mum@ongc.co.in, hgs_mumbai@ongc.co.in" class="glyphicon glyphicon-map-marker blink"><strong>MUM</strong></span></a>
                            <a href="index.php?r=site/projorhat"><span id="mark-jorhat" data-toggle="popover" title="HGS Jorhat" data-content="hgs_jrt@ongc.co.in" class="glyphicon glyphicon-map-marker blink"><strong>JOR</strong></span></a>
                            <a href="index.php?r=site/prokolkata"><span id="mark-kolkata" data-toggle="popover" title="HGS Kolkata" data-content="hgs_kol@ongc.co.in" class="glyphicon glyphicon-map-marker blink"><strong>KOL</strong></span></a>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary custom" id="gs_targets">
                    <div class="panel-heading">
                        Targets &amp; Achievements (till May 2017)
                    </div>
                    <div class="panel-body">
                        <?php
                        echo Carousel::widget([
                                'items' => [
                                    ['content'=>  Html::img('images/p-1.jpg', array('class' => 'img-responsive'))],
                                    ['content'=>  Html::img('images/p-2.jpg', array('class' => 'img-responsive'))],
                                    ['content'=>  Html::img('images/p-3.jpg', array('class' => 'img-responsive'))],
                                ]
                            ]
                        );
                        ?>
                    </div>
                </div>
                <div class="panel panel-primary custom" id="gs_contacts">
                    <div class="panel-heading">
                        Contact Us
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td><p>CGS, Mumbai</p>cgs_mum@ongc.co.in</td><td><p>Phone: +(91) 22 2406 2708</p><p>Fax: +(91) 22 2406 2677</p></td>
                                        </tr>
                                        <tr>
                                            <td><p>HGS, Chennai</p>hgs_che@ongc.co.in</td><td><p>Phone: +(91) 44 2854 2537</p><p>Fax: +(91) 44 2854 2555</p></td>
                                        </tr>
                                        <tr>
                                            <td><p>HGS, Dehradun</p>hgs_ddn@ongc.co.in</td><td><p>Phone: +(91) 135 279 5116</p><p>Fax: +(91) 135 275 9504</p></td>
                                        </tr>
                                        <tr>
                                            <td><p>HGS, Jorhat</p>hgs_jrt@ongc.co.in</td><td><p>Phone: +(91) 376 236 0013</p><p>Fax: +(91) 376 236 0013</p></td>
                                        </tr>
                                        <tr>
                                            <td><p>HGS, Kolkata</p>hgs_kol@ongc.co.in</td><td><p>Phone: +(91) 33 2367 0109</p><p>Fax: +(91) 33 2367 0109</p></td>
                                        </tr>
                                        <tr>
                                            <td><p>HGS, Mumbai</p>hgs_mumbai@ongc.co.in</td><td><p>Phone: +(91) 22 2404 5303</p><p>Fax: +(91) 22 2404 5277</p></td>
                                        </tr>
                                        <tr>
                                            <td><p>HGS, Vadodara</p>hgs_bda@ongc.co.in</td><td><p>Phone: +(91) 265 263 1771</p><p>Fax: +(91) 265 263 1771</p></td>
                                        </tr>
                                        <tr>
                                            <td><p>MAP, Dehradun</p>headmap_ddn@ongc.co.in</td><td><p>Phone: +(91) 135 279 2793</p><p>Fax: +(91) 135 275 5713</p></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="panel panel-primary" id="gs_contacts">
                                    <div class="panel-heading">
                                        Support
                                    </div>
                                    <div class="panel-body">
                                        <p><span class="glyphicon glyphicon-map-marker">&nbsp;SPIC, Panvel</span></p>
                                        <p><span class="glyphicon glyphicon glyphicon-earphone">&nbsp;9410390145</span></p>
                                        <p><span class="glyphicon glyphicon glyphicon-envelope">&nbsp;polashbora@ongc.co.in</span></p>
                                        <hr>
                                        <p><span class="glyphicon glyphicon-map-marker">&nbsp;CGS Office, Priyadarshini</span></p>
                                        <p><span class="glyphicon glyphicon glyphicon-earphone">&nbsp;9969226645</span></p>
                                        <p><span class="glyphicon glyphicon glyphicon-envelope">&nbsp;singh_bhanu1@ongc.co.in</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div id="mumHgs" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
                        <h4 class="modal-title">HGS Organogram</h4>
                    </div>
                    <div class="modal-body">
                        <?= Html::img('images/hgs-org.jpg', array('class' => 'img-responsive')); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal -->
        <div id="kolHgs" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
                        <h4 class="modal-title">GPS Kolkata Organogram</h4>
                    </div>
                    <div class="modal-body">
                        <?= Html::img('images/kol-org.png', array('class' => 'img-responsive')); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal -->
        <div id="modalAcquisition" class="modal fade" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
                        <h3 class="modal-title">Acquisition</h3>
                    </div>
                    <div class="modal-body">
                        <?php
                        echo Carousel::widget([
                            'items' => [
                                ['content'=>  Html::img('images/p-1.jpg', array('class' => 'img-responsive'))],
                                ['content'=>  Html::img('images/p-2.jpg', array('class' => 'img-responsive'))],
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
        <!-- Modal -->
        <div id="modalProcessing" class="modal fade" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
                        <h3 class="modal-title">Processing</h3>
                    </div>
                    <div class="modal-body">
                        <?= Html::img('images/p-3.jpg', ['class' => 'img-responsive']) ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>