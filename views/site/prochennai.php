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
                    <div class="panel-heading">Processing Centre, Chennai</div>
                    <div class="panel-body">
                        <h3>Objectives:</h3>
                        <ul>
                            <li>Deliver processed outputs timely & ensure design of optimal processing sequence.</li>
                            <li>Preserve raw and processed seismic outputs for future use.</li>
                            <li>Maintain/add Hardware/Software resources to ensure optimal functioning of the centre.</li>
                        </ul>
                        <p class="text-justify"><strong>Types of processing carried out:</strong> 2D/3D (Basic, PSTM, PSDM), VSP, Inversion</p>
                        <p class="text-justify">Processing Centre, Chennai an ISO 9001:2008(QMS) and 27001:2013 (ISMS) certified centre caters to Seismic Data Processing needs of two basins namely Cauvery basin & KG-PG basin. The processed results delivered to basins form the basis for data interpretation for Hydrocarbon deposits. The centre is committed to enhance its processing capacity and capability continuously to deliver best processed outputs for its customers.</p>
                        <p class="text-justify">The Processing Centre, Chennai was earlier named as Regional Computer Centre (RCC), Chennai. RCC Chennai was established in the year 1987 for processing of seismic and other related data and was equipped with ND 570/CX. It was manufactured and supplied by NORSK DATA (ND), NORWAY. It was a super minicomputer. The seismic application software viz Norseis, IIWS, GMS, MIMIC, ANALOC etc were installed on ND system to carry out 2D seismic data & VSP processing. It was able to cater the needs during 1987. With increasing demand of 2D, 3D seismic & VSP data processing a need was felt to upgrade the computer system in RCC after phasing out the ND system. Processing Centre (RCC), Chennai had procured a state of art IBM SP3 system with Geovecteuor as application software from M/s CGG, France in 1999. Computing power of RCC, Chennai was further enhanced by augmenting the centre with new IBM-P690 system and four SGI workstations in 2003 to application software from M/s Paradigm, the Netherlands, HP PC-Cluster system in 2005 and IBM PC-Cluster system in 2007 also known as HPC Cluster.</p>
                        <?= Html::img('images/rcc-chennai-growth.png', array('class' => 'img-responsive text-center', 'width' => '800px')); ?>
                        <p class="text-center"><i>Technology Foot-prints of RCC Chennai</i></p>
                        <h3>PRESENT/PROPOSED INFRASTRUCTURE:</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Infrastructure</th>
                                        <th>Present</th>
                                        <th>Proposed</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Compute Nodes</td>
                                        <td>192 Cores</td>
                                        <td>1496 Cores</td>
                                    </tr>
                                    <tr>
                                        <td>Servers</td>
                                        <td>18 + 14 Nos.</td>
                                        <td>14 + 19 Nos.</td>
                                    </tr>
                                    <tr>
                                        <td>Interactive Servers</td>
                                        <td>1 + 4 Nos.</td>
                                        <td>4 + 3 Nos.</td>
                                    </tr>
                                    <tr>
                                        <td>Storage</td>
                                        <td>111 + 50 TB</td>
                                        <td>50 + 300 TB</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h3>Software Details:</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                <tr>
                                    <td>System software</td>
                                    <td>RHEL 5.8, RHEL 6.5, GPFS, XCAT, TSM</td>
                                </tr>
                                <tr>
                                    <td>Application Software</td>
                                    <td><ul><li>Geovation 5000, 6200  &amp; 2013</li>
                                            <li>Paradigm  2015, 2015.5</li>
                                            <li>Tomofacilitator</li>
                                            <li>Vsprowess</li>
                                            <li>HRS</li>
                                            <li>Norsar</li>
                                        </ul>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="text-justify">In addition to the above infrastructure there are varieties of cartridge drives connected in the network for archiving/copying of data by Tape Data Management Archival (TDMA) group in Processing Centre, Chennai. The entire network of equipments are operated 24 x 7 by providing 2 x 250 KVA Power wave model Eaton make UPS system with associated battery banks.</p>
                        <p class="text-justify">Seismic data plays a vital role in exploration risk reduction thereby demanding nothing less than highest quality processed seismic output. Further, significant reduction in processing cycle time is the need of the hour. Processing Centre, Chennai is committed to both these factors and significant investment in procuring Hardware equipment & training its processors on latest technologies is made by ONGC to harvest dividends in terms of quality data and quick processing.</p>
                        <p class="text-justify">Building robust Databases for storing legacy data (all available reports and logs) has become very vital and essential in the current scenario and Processing Centre, Chennai has constantly endeavored in this process. A concerted effort has been made to create the Database by TDMA group of Processing Centre, Chennai.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
