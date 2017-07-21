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
                        Geophysical Services: Jorhat
                    </div>
                    <div class="panel-body">
                        <h3>About</h3>
                        <p class="text-justify">Geophysical Services, A&AA Basin, Jorhat is engaged in acquisition and processing of seismic data in ONGC held acreages across North-Eastern states. It consists of three sections viz. Geophysical Operations, Regional Computer Center (RCC) and Regional Electronics Laboratory (REL).</p>
                        <h3>Geophysical Operations</h3>
                        <p class="text-justify">Operations group of Geophysical Services, Jorhat is responsible for 2D, 3D seismic surveys and VSP operations in Assam and adjoining states. There are five Geophysical Parties and one VSP Party in the region. Geophysical field parties (GP) are equipped with Two Sercel UL-408 recording system, Three ION Analog System and One ION Digital recording Systems. VSP Party is equipped with Geo-chain digital MSR unit and Geo-wave acquisition Unit (new). The available NORSAR modeling software was used for 2D forward modeling for finalization of acquisition geometry and field parameters. All the parties are equipped with Field Processing Units (FPU) for preliminary processing and day to day data quality monitoring in field itself. All the Geophysical Parties have been accredited with ISO 9001, ISO 14001 and OHSAS 18001 standards for conformity to quality, environment protection and maintaining occupational health & safety.</p>
                        <?= Html::img('images/jor-org.png', array('class' => 'img-responsive text-center', 'width' => '700px')); ?>
                        <h3 class="text-center">Organogram</h3>
                        <h3>Main Activities</h3>
                        <h4>Geophysical Operations</h4>
                        <ul>
                            <li>Acquiring 2D, 3D Seismic data in ONGC held acreages in A&AA Basin as per the work plan.</li>
                            <li>Acquiring VSP data in the wells drilled in SAS, NAS and AAFB blocks.</li>
                            <li>Quality control of Seismic data.</li>
                            <li>Planning for Geophysical Prospecting through non-seismic methods.</li>
                            <li>Processing, awarding and managing SHD-SJS contracts and also 2D/3D Seismic survey through outsourcing.</li>
                        </ul>
                        <h4>Regional Computer Centre</h4>
                        <ul>
                            <li>Processing of 2D, 3D seismic, and VSP data in Time & Depth domain.</li>
                            <li>Reprocessing of old data with improved work flow.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Regional Electronics Laboratory, Jorhat
                    </div>
                    <div class="panel-body">
                        <h3>Regional Electronics Laboratory</h3>
                        <p class="text-justify">Regional Electronics Laboratory is responsible for effective repair and efficient maintenance of electronic equipment and communication devices of geophysical parties and base support for field mobilization and in-field repair of various field party equipment. It ensures the availability of data acquisition systems for trouble-free operations by deploying engineers in the field parties. It also shoulders the responsibility of procurement of spares for seismic data acquisition systems for field parties and repairs of defective ground electronics.</p>
                        <h4>Function of Regional Electronic Laboratory</h4>
                        <ul>
                            <li>Repair and maintenance of VSP equipment, 408UL and 4 nos of Scorpion instrument.</li>
                            <li>Maintenance of Communication equipment and Licenses to operate communication sets.</li>
                            <li>Procurement of Spares and services.</li>
                            <li>Off season testing of Ground electronics of field parties.</li>
                            <li>On season maintenance support to attend technical problems and supervise maintenance activities of ground electronics.</li>
                            <li>Maintenance of IT systems, network, communication systems and extend help for maintenance of generators, ACs etc. during on-season.</li>
                            <li>Repair and Maintenance of systems like Uphole survey instruments and ancillaries like shooting systems etc.</li>
                            <li>Technical support to other sections when needed.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Region Wise Distribution
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Departmental FP</th>
                                    <th>VSP Parties</th>
                                    <th>Outsourced FP</th>
                                    <th>RCCs</th>
                                    <th>RELs</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>5 (GP-8, GP-9, GP-10, GP-23, GP-90)</td>
                                        <td>1 (GP-62)</td>
                                        <td>--</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
