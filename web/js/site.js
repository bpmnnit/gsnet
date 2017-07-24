/**
 * Created by 125619 on 27/6/17.
 */
$(document).ready(function(){

    $('[data-toggle="popover"]').popover({
        placement : 'top',
        trigger : 'hover'
    });

    $('.carousel').carousel({
        interval: 3000
    });

    $("#gs_docs").hide();
    $("#gs_manpower").hide();
    $("#gs_organogram").hide();
    $("#gs_role").hide();
    $("#gs_locations").hide();
    $("#gs_targets").hide();
    $("#gs_contacts").hide();
    $("#gs_news").show();
    $("#ln_news").click(function() {
        $("#gs_manpower").hide();
        $("#gs_organogram").hide();
        $("#gs_role").hide();
        $("#gs_news").show();
        $("#gs_locations").hide();
        $("#gs_targets").hide();
        $("#gs_contacts").hide();
        $("#gs_docs").hide();
    });
    $("#ln_manpower").click(function() {
        $("#gs_manpower").show();
        $("#gs_organogram").hide();
        $("#gs_role").hide();
        $("#gs_news").hide();
        $("#gs_locations").hide();
        $("#gs_targets").hide();
        $("#gs_contacts").hide();
        $("#gs_docs").hide();
    });
    $("#ln_organogram").click(function() {
        $("#gs_manpower").hide();
        $("#gs_role").hide();
        $("#gs_organogram").show();
        $("#gs_news").hide();
        $("#gs_locations").hide();
        $("#gs_targets").hide();
        $("#gs_contacts").hide();
        $("#gs_docs").hide();
    });
    $("#ln_role").click(function() {
        $("#gs_manpower").hide();
        $("#gs_role").show();
        $("#gs_organogram").hide();
        $("#gs_news").hide();
        $("#gs_locations").hide();
        $("#gs_targets").hide();
        $("#gs_contacts").hide();
        $("#gs_docs").hide();
    });
    $("#ln_activity").click(function() {
        $("#gs_manpower").hide();
        $("#gs_role").hide();
        $("#gs_organogram").hide();
        $("#gs_news").hide();
        $("#gs_locations").hide();
        $("#gs_targets").hide();
        $("#gs_contacts").hide();
        $("#gs_docs").hide();
    });
    $("#ln_locations").click(function() {
        $("#gs_manpower").hide();
        $("#gs_role").hide();
        $("#gs_organogram").hide();
        $("#gs_news").hide();
        $("#gs_locations").show();
        $("#gs_targets").hide();
        $("#gs_contacts").hide();
        $("#gs_docs").hide();
    });
    $("#ln_targets").click(function() {
        $("#gs_manpower").hide();
        $("#gs_role").hide();
        $("#gs_organogram").hide();
        $("#gs_news").hide();
        $("#gs_locations").hide();
        $("#gs_targets").show();
        $("#gs_contacts").hide();
        $("#gs_docs").hide();
    });
    $("#ln_contacts").click(function() {
        $("#gs_manpower").hide();
        $("#gs_role").hide();
        $("#gs_organogram").hide();
        $("#gs_news").hide();
        $("#gs_locations").hide();
        $("#gs_targets").hide();
        $("#gs_contacts").show();
        $("#gs_docs").hide();
    });
    $("#ln_docs").click(function() {
        $("#gs_manpower").hide();
        $("#gs_role").hide();
        $("#gs_organogram").hide();
        $("#gs_news").hide();
        $("#gs_locations").hide();
        $("#gs_targets").hide();
        $("#gs_contacts").hide();
        $("#gs_docs").show();
    });
});

function drawChart1() {

    //google.charts.load('current', {'packages':['corechart']});
    //google.charts.setOnLoadCallback(drawChart);

    var data = google.visualization.arrayToDataTable([
        ['Region', 'No. of People'],
        ['Vadodara', 204],
        ['Chennai', 133],
        ['Kolkata', 45],
        ['Jorhat', 138],
        ['Dehradun', 42],
        ['MAP', 13],
        ['Mumbai', 65],
        ['CGS', 9],
        ['GEOPIC Proc.', 29]
    ]);

    var options = {
        title: '',
        width: 600,
        height: 400,
        is3D: false,
        pieSliceText: 'value',
        fontSize: 12,
        chartArea: { top:0, width:'100%', height:'75%' },
        legend: { position: 'left', textStyle: { color: 'blue', fontSize: 14 }, alignment: 'center', maxLines: 2}
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

    chart.draw(data, options);
}

function drawChart2() {

    //google.charts.load('current', {'packages':['corechart']});
    //google.charts.setOnLoadCallback(drawChart);

    var data = google.visualization.arrayToDataTable([
        ['Descipline', 'No. of People'],
        ['Geophysicist', 369],
        ['MM', 27],
        ['HR/ER', 39],
        ['Workman', 24],
        ['Surveyor', 67],
        ['Mechanical', 30],
        ['TA', 25],
        ['Programming', 28],
        ['Operator', 11]
    ]);

    var options = {
        title: '',
        width: 600,
        height: 400,
        is3D: false,
        pieSliceText: 'value',
        fontSize: 11,
        chartArea: { top:0, width:'100%', height:'75%' },
        legend: { position: 'left', textStyle: { color: 'blue', fontSize: 14 }, alignment: 'center', maxLines: 2},
        pieSliceTextStyle: {fontSize: 9}
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

    chart.draw(data, options);
}