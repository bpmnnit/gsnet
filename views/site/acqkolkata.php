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
                    <div class="panel-heading">Geophysical Services, Kolkata</div>
                    <div class="panel-body">
                        <h3>About</h3>
                        <p class="text-justify">Geophysical Services, MBA Basin, Kolkata is engaged in acquisition and processing of seismic data of MBA and other basins of ONGC. GPS, Kolkata has three sections: Geophysical Operations, Processing Centre and Regional Electronics laboratory.</p>
                        <h3>Geophysical Operations</h3>
                        <p class="text-justify">There is one Geophysical Party, GP-17 under Geophysical operations at GPS, Kolkata. GP-17 has been engaged in 2D/3D seismic surveys. VSP surveys in wells of Bengal basin are conducted by VSP parties form other regions of ONGC. GP-17 is  equipped with I/O Scorpion system-IV recording systems. GP-17 has one Dolphin make Field Processing unit (OpenCPS software) which is used for  day to day quality check of acquired data. GP-17 is <strong>ISO 9001:2008, ISO 14001:2004</strong> and <strong>OHSAS 18001:2007</strong> certified.</p>
                        <p class="text-justify">GPS, Kolkata has its permanent explosive magazine established at Pandua, West Bengal having capacity of 9.5 ton of explosives and 44000 nos. of detonators. The magazine is <strong>ISO 9001:2008</strong> certified.</p>
                        <?= Html::img('images/kol-org.png', ['class' => 'img-responsive', 'width' => '800px']); ?>
                        <p class="text-center"><i>Organogram of GPS Kolkata</i></p>
                        <h3>No. of Parties</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Type of Party</th>
                                    <th>No. of Parties</th>
                                    <th>Name of Party</th>
                                    <th>Last Deployed At</th>
                                    <th>Last F.S.</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Seismic</td>
                                    <td>01</td>
                                    <td>GP-17</td>
                                    <td>Sector-2, Nohta-Damoh-Jabera PML Block, MP</td>
                                    <td>2016-17</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <h3>2D/3D data acquired by GPS, Kolkata</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sl. No.</th>
                                    <th>Sl. No.</th>
                                    <th>Field Season</th>
                                    <th>Party No.</th>
                                    <th>Name of the Area</th>
                                    <th>Name of the Block/Sector</th>
                                    <th>PEL/ML/NELP</th>
                                    <th>Type of Survey</th>
                                    <th>Fold</th>
                                    <th>Recording Instrument</th>
                                    <th>Achievement in LK/SK</th>
                                    <th>Party Chief</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>MP-35</td>
                                    <td>2016-17</td>
                                    <td>GP-17</td>
                                    <td>SECTOR-2</td>
                                    <td>NOHTA-DAMOH-JABERA PML BLOCK</td>
                                    <td>PML</td>
                                    <td>3D</td>
                                    <td>78</td>
                                    <td>I/O system -IV</td>
                                    <td>130.3986 SKM</td>
                                    <td>S K GHOSAL</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>MP-35</td>
                                    <td>2015-16</td>
                                    <td>GP-17</td>
                                    <td>SECTOR-2</td>
                                    <td>NOHTA-DAMOH-JABERA PML BLOCK</td>
                                    <td>PML</td>
                                    <td>3D</td>
                                    <td>78</td>
                                    <td>I/O system -IV</td>
                                    <td>56.3598 SKM</td>
                                    <td>G S DAS</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>WB-162</td>
                                    <td>2013-14</td>
                                    <td>GP-17</td>
                                    <td>North Raniganj Sector A</td>
                                    <td>North Raniganj Sector A</td>
                                    <td>CBM Block</td>
                                    <td>2D HRSS</td>
                                    <td>150</td>
                                    <td>I/O Scorpion - IV (Digital)</td>
                                    <td>83.3364 LKM</td>
                                    <td>R S N Choudhury/P C Mohanta</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>WB-161</td>
                                    <td>2012-13</td>
                                    <td>GP- 27 &amp; GP-17</td>
                                    <td>Habibpur - Payradanga</td>
                                    <td>NWB-ONN-2005/4</td>
                                    <td>NELP-VII</td>
                                    <td>3D</td>
                                    <td>48</td>
                                    <td>UL-408 & I/O Scorpion - IV</td>
                                    <td>28.1424 SKM(GP-27) + 35.0922 SKM (GP-17)</td>
                                    <td>R S N Choudhury (GP-27)/P C Mohanta (GP-17)</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>WB-160</td>
                                    <td>2012-13</td>
                                    <td>GP- 27 &amp; GP-17</td>
                                    <td>Dhubalia - Krishnagar</td>
                                    <td>NWB-ONN-2005/2 &amp; WB-ONN-2005/4</td>
                                    <td>NELP-VII</td>
                                    <td>3D</td>
                                    <td>60</td>
                                    <td>UL-408</td>
                                    <td>230.1 SKM</td>
                                    <td>R S N Choudhury</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>WB-159</td>
                                    <td>2012-13</td>
                                    <td>GP-17</td>
                                    <td>Shantipur-Dignagar</td>
                                    <td>NWB-ONN-2005/2 &amp; WB-ONN-2005/4</td>
                                    <td>NELP-VII</td>
                                    <td>3D</td>
                                    <td>60</td>
                                    <td>I/O Scorpion - IV(Digital)</td>
                                    <td>212.4096 SKM</td>
                                    <td>P C Mohanta</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>WB-158</td>
                                    <td>2011-12</td>
                                    <td>GP-27</td>
                                    <td>Kotalpur - Arambagh</td>
                                    <td>WB-ONN-2005/3</td>
                                    <td>NELP-VII</td>
                                    <td>3D</td>
                                    <td>48</td>
                                    <td>UL-408</td>
                                    <td>269.66 SKM</td>
                                    <td>Utpal Banerjee</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>WB-157</td>
                                    <td>2011-12</td>
                                    <td>GP-17</td>
                                    <td>Taherpur, Nadia</td>
                                    <td>WB-ONN-2005/4</td>
                                    <td>NELP</td>
                                    <td>3D</td>
                                    <td>48</td>
                                    <td>I/O system - IV</td>
                                    <td>189.4599 SKM</td>
                                    <td>P C Mohanta</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>WB-156</td>
                                    <td>2011-12</td>
                                    <td>GP-17</td>
                                    <td>Malda</td>
                                    <td>PA-ONN-2005/2</td>
                                    <td>NELP</td>
                                    <td>3D</td>
                                    <td>42</td>
                                    <td>I/O system - IV</td>
                                    <td>109.54008 SKM</td>
                                    <td>P C Mohanta</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>WB-152</td>
                                    <td>2010-11</td>
                                    <td>GP-27</td>
                                    <td>North Dinajpur, West Bengal</td>
                                    <td>PA-ONN-2005/1</td>
                                    <td>NELP</td>
                                    <td>3D</td>
                                    <td>36</td>
                                    <td>UL-408</td>
                                    <td>214.3452 SKM</td>
                                    <td>Utpal Banerjee</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>WB-150</td>
                                    <td>2010-11</td>
                                    <td>GP-17</td>
                                    <td>Malda, West Bengal</td>
                                    <td>PA-ONN-2005/2</td>
                                    <td>NELP</td>
                                    <td>3D</td>
                                    <td>42</td>
                                    <td>I/O system - IV</td>
                                    <td>201.48 SKM</td>
                                    <td>P C Mohanta</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>WB-146</td>
                                    <td>2009-10</td>
                                    <td>GP-85</td>
                                    <td>Hooghly - Nadia - North 24 Parganas</td>
                                    <td>WB-ONN-2005/4</td>
                                    <td>NELP</td>
                                    <td>3D</td>
                                    <td>48</td>
                                    <td>UL-408</td>
                                    <td>252.66 SKM</td>
                                    <td>M D Patnaik</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>WB-145</td>
                                    <td>2009-10</td>
                                    <td>GP-29</td>
                                    <td>Burdwan - Nabadwip</td>
                                    <td>WB-ONN-2005/2</td>
                                    <td>NELP</td>
                                    <td>2D</td>
                                    <td>60</td>
                                    <td>I/O system - IV</td>
                                    <td>1056.6 GLK</td>
                                    <td>P A Chithambaran</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>WB-144</td>
                                    <td>2009-10</td>
                                    <td>GP-27</td>
                                    <td>North Dinajpur</td>
                                    <td>PA-ONN-2005/1</td>
                                    <td>NELP</td>
                                    <td>2D</td>
                                    <td>80</td>
                                    <td>UL-408</td>
                                    <td>534.35 GLK</td>
                                    <td>Utpal Banerjee</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>WB-143</td>
                                    <td>2009-10</td>
                                    <td>GP-17</td>
                                    <td>Malda</td>
                                    <td>PA-ONN-2005/2</td>
                                    <td>NELP</td>
                                    <td>2D</td>
                                    <td>60</td>
                                    <td>I/O system - I</td>
                                    <td>659.75 GLK</td>
                                    <td>P C Mohanta</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>WB-142</td>
                                    <td>2009-10</td>
                                    <td>GP-15</td>
                                    <td>Hooghly, Burdhaman, Howrah, Bankura, W.Midnapur</td>
                                    <td>WB-ONN-2005/3</td>
                                    <td>NELP</td>
                                    <td>2D</td>
                                    <td>60</td>
                                    <td>UL-408</td>
                                    <td>1035.9 GLK</td>
                                    <td>T P Singh</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>WB-141</td>
                                    <td>2006-07</td>
                                    <td>GP-39</td>
                                    <td>Contai</td>
                                    <td></td>
                                    <td>NELP</td>
                                    <td>3D</td>
                                    <td>42</td>
                                    <td>UL-408</td>
                                    <td>201 SKM</td>
                                    <td>A K Roy</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Regional Electronics Laboratory, Kolkata</div>
                    <div class="panel-body">
                        <h3>Introduction</h3>
                        <p class="text-justify">Regional  Electronics  Laboratory  Kolkata  is  engaged  in  repair, maintenance, performance evaluation and monitoring of seismic data acquisition systems along with it’s ancillary and also establishing and maintaining  VHF/Satellite link for inter/intra field party communication.</p>
                        <p class="text-justify">REL Kolkata is also engaged in Planning and Procurement of capital, spares &amp; stores items related to Seismic Data Acquisition System and its ground electronics including their inspection.</p>
                        <p class="text-justify">REL Kolkata provides all technical support to Geophysical Services, MBA Basin on acquisition activities. Presently data acquisition systems available are land telemetry SEISMIC UNITS and Shallow Refraction Unit. Ancillary Electronics like Radio Controlled Shooting System, Geophone Analyzer etc. The REL is ISO 9001:2008 QMS Certified.</p>
                        <h3>Highlights</h3>
                        <h4>Resources Available (2017-18) :</h4>
                        <p class="text-justify">Manpower – Total 3 (1 - E5,  2 - A2)</p>
                        <h4>Testing Equipment :-</h4>
                        <p class="text-justify">The following instruments are present in the Regional Electronics Laboratory:-</p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sl. No.</th>
                                    <th>Name of Equipment</th>
                                    <th>No. of Equipment</th>
                                    <th>Specifications</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>DIGITAL STORAGE OSCILLOSCOPE Make - TEKTRONIX</td>
                                    <td>1</td>
                                    <td>Model No. 4020, Four Channel, 200 Mhz, 2 GS/sec.</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>DIGITAL MULTIMETER Make - TEKTRONIX</td>
                                    <td>2</td>
                                    <td>Model No. TDS 2024C, 5½ Digits.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>REGULATED DC POWER SUPPLY Make - APLAB</td>
                                    <td>2</td>
                                    <td>Model No. L 3210.</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>MINI OPTICAL TIME DOMAIN REFLECTOMETER</td>
                                    <td>2</td>
                                    <td>Model No. OVM9199A.</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>OPTICAL FIBER CABLE FUSION SPLICER</td>
                                    <td>1</td>
                                    <td>Model No. TYPE-25S. DC 11.1v.</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="text-justify">Details of the main systems and other ancillaries for which Repair &amp; Maintenance is carried out in REL at present :-</p>
                        <ol>
                            <li>INOVA Scorpion System.</li>
                            <li>Shooting System &amp; Geophone Analyser.</li>
                            <li>Repair station of ION System (RTS System)</li>
                            <li>Ground Electronics &amp; VHF Sets</li>
                        </ol>
                        <p class="text-justify"><strong>Following activities are undertaken at the REL:</strong></p>
                        <ul>
                            <li>Repair, Preventive &amp; breakdown maintenance of Data Acquisition Systems and Ground electronics.</li>
                            <li>Periodic test &amp; calibration of the Data Acquisition System.</li>
                            <li>Planning and provisioning.</li>
                            <li>Extending technical support to Geophysical Services, MBA Basin on acquisition activities.</li>
                            <li>Establishing &amp; Maintaining SATCOM/VHF link for field party communication.</li>
                        </ul>
                        <p class="text-justify"><strong>Achievement:</strong></p>
                        <ul>
                            <li>Recently VSP unit from Chennai was deployed for operations. Winch smart monitor was malfunctioning. The standby brought in was also not working. Both the Smart Monitors of VSP system were repaired at REL.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
