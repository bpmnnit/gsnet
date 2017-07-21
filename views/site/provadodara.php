<?php

/* @var $this yii\web\View */

$this->title = 'CGS | ONGC';

use yii\helpers\Html;
use yii\bootstrap\Carousel;

?>
<div class="site-index" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
     xmlns="http://www.w3.org/1999/html">
    <div class="body-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Processing Centre, Vadodara</div>
                    <div class="panel-body">
                        <p class="text-justify">RCC Vadodara, established in 1987, is one of the centers which caters to the exploratory needs of the Western Onshore Basin by way of seismic data, time and depth processing including 2D, 3D, Multi Component, AVO/Inversion VSP etc. To meet the high compute need and apply pre-stack time and depth migration of 3D data, state-of-art <strong>"High Performace Cluster (HPCC) System"</strong> was inducted with the CGG Geo-cluster software in 2008 to have the feature for time/depth imaging and multi component processing. The RCC Data Center operates on 24x7 basis to meet the needs of Western Onshore Basin.</p>
                        <!--<button type="button" class="btn btn-info btn-sm" data-toggle="collapse" data-target="#processing-more">Read more</button>-->
                        <?= Html::img('images/rcc-b.jpg', array('class' => 'img-responsive text-center', 'width' => '400', 'height' => '400')); ?>
                        <p class="text-center"><i>RCC Vadodara</i></p>
                        <p class="text-justify">Besides enhancing the professional competence of its personnel, RCC Vadodara keeps a close track of technological advances in the industry and upgrades with the latest technology to meet its customer requirements.</p>
                        <p class="text-justify">
                            The main activities are undertaken at the center:
                            <ul>
                                <li>2D, 3D, Multi component and VSP seismic Data Processing</li>
                                <li>Tape Data Management and Archival</li>
                                <li>System Management, including HW & SW maintenance through in-house and/or AMC’s</li>
                                <li>Planning, Provisioning and Procurement</li>
                            </ul>
                        </p>
                        <?= Html::img('images/rcc-growth.png', array('class' => 'img-responsive text-center', 'width' => '450', 'height' => '450')); ?>
                        <p class="text-center"><i>Growth of RCC Vadodara</i></p>
                        <p class="text-justify">RCC is in the process of replacing the existing hardware with  the state of art 1520 Core HPCC System having latest technologies like Infiniband Interconnect, GPU Based Processors, 40 Gbps Ethernet Backbone & High end Storage Systems. Similarly the existing data center is under renovation with latest art technologies like in-row cooling systems, UPS Systems, Building Management System, Fire Detection & Suppression, Rodent and Water Leak Detection Systems to house the upcoming HPCC system.</p>
                        <p><h3><strong>Computer Resources:</strong></h3></p>
                        <p><h4><strong>Existing:</strong></h4></p>
                        <p>
                        <ul>
                            <li>Compute Nodes (IBM x-series 3550, Dual CPU, Dual Core)  -  64 (Total 256 Cores) + 4 Spare</li>
                            <li>Workstations:
                                <ul>
                                    <li>IBM - 10 Nos. (to be replaced)</li>
                                    <li>HCL - 10 Nos. (to be replaced)</li>
                                    <li>Dell - 06 Nos.</li>
                                    <li>Fujitsu - 14 Nos.</li>
                                </ul>
                            </li>
                        </ul>
                        </p>
                        <p><h4><strong>Upcoming:</strong></h4></p>
                        <p>
                        <ul>
                            <li>Compute Nodes Basic <i>(E52670/E78860, 2.3 Ghz, 256/384 GB RAM)  -  59 (Total 1496 Cores) + 4 Spare</i></li>
                            <li>Compute Nodes Advanced <i>(E52670, 2.3 Ghz, 256 GB RAM with K40 Nvidia)  - 01 (24 Cores)</i></li>
                            <li>Workstations <i>(HP Z840/HP Z420)  -  23 Nos.</i></li>
                        </ul>
                        </p>
                        <p><h3><strong>Softwares:</strong></h3></p>
                        <p>
                        <ul>
                            <li><h4><strong>CGG Software Suite (Version Geovation 1.0)</strong></h4>
                                <ul>
                                    <li>Conventional Package</li>
                                    <li>Advanced Package</li>
                                    <li>Migration/Tomography Package</li>
                                    <li>Multi-component Package</li>
                                    <li>Demultiple(2D/3D SRME) Package</li>
                                    <li>AVO Package</li>
                                    <li>Time Lapse 4D Package</li>
                                    <li>Interactive Applications (Tornado, Vectorvista)</li>
                                </ul>
                            </li>
                            <li><h4><strong>Paradigm Suite</strong></h4>
                                <ul>
                                    <li>3DKPSTMFE: Prestack 3D Kirchhoff Time Migration Fermat Eikonal</li>
                                    <li>3DKPSDMFE: Prestack 3D Kirchhoff Depth Migration Fermat Eikonal</li>
                                    <li>3 D Tomography</li>
                                    <li>Probe 2D/3D: AVO Analysis and Interpretation</li>
                                    <li>FastVel: High resolution, automatic velocity analysis</li>
                                </ul>
                            </li>
                            <li><h4><strong>Hampson Russell Suite</strong></h4>
                                <ul>
                                    <li>AVO,GLI3D,EMERGE, ELOG, ISMAP & STRATA</li>
                                </ul>
                            </li>
                            <li><h4><strong>PROMC (Multicomponent Module)</strong></h4></li>
                            <li><h4><strong>Promax/Seisspace:</strong></h4>VSP 2D/3D (Maintained under corporate license)</li>
                            <li><h4><strong>Norsar: 2D/3D Modeling</strong></h4>(Maintained under corporate license)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
