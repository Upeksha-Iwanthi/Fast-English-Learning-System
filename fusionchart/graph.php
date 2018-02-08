<html>
<head> 
</head>
<body>
<script type="text/javascript" src="js/fusioncharts.js"></script>
<script type="text/javascript" src="js/themes/fusioncharts.theme.ocean.js"></script>

<?php
// This is a simple example on how to draw a chart using FusionCharts and PHP.
// We have included includes/fusioncharts.php, which contains functions
// to help us easily embed the charts.
include("includes/fusioncharts.php");

// Create the chart - angular gauge Chart with data given in the constructor
// Syntax for the constructor - new FusionCharts("type of chart", "unique chart id", "width of chart", "height of chart", "div id to render the chart", "type of data", "actual data")
$angularChart = new FusionCharts("AngularGauge", "ex1", "100%", "200", "chart-1", "json", '{
    "chart": {
        "caption": "Customer Satisfaction Score",
        "lowerlimit": "0",
        "upperlimit": "100",
        "lowerlimitdisplay": "Bad",
        "upperlimitdisplay": "Good",
        "palette": "1",
        "numbersuffix": "%",
        "tickvaluedistance": "10",
        "showvalue": "0",
        "gaugeinnerradius": "0",
        "bgcolor": "FFFFFF",
        "pivotfillcolor": "333333",
        "pivotradius": "8",
        "pivotfillmix": "333333, 333333",
        "pivotfilltype": "radial",
        "pivotfillratio": "0,100",
        "showtickvalues": "1",
        "showborder": "0"
    },
    "colorrange": {
        "color": [
            {
                "minvalue": "0",
                "maxvalue": "45",
                "code": "e44a00"
            },
            {
                "minvalue": "45",
                "maxvalue": "75",
                "code": "f8bd19"
            },
            {
                "minvalue": "75",
                "maxvalue": "100",
                "code": "6baa01"
            }
        ]
    },
    "dials": {
        "dial": [
            {
                "value": "92",
                "rearextension": "15",
                "radius": "100",
                "bgcolor": "333333",
                "bordercolor": "333333",
                "basewidth": "8"
            }
        ]
    }
}');
// Render the chart
$angularChart->render();



// Create the chart - cylinder Chart with data given in the constructor
// Syntax for the constructor - new FusionCharts("type of chart", "unique chart id", "width of chart", "height of chart", "div id to render the chart", "type of data", "actual data")
$cylinderChart = new FusionCharts("cylinder", "ex2", "100%", "200", "chart-2", "json", '{
    "chart": {
        "manageresize": "1",
        "bgcolor": "FFFFFF",
        "bgalpha": "0",
        "showborder": "0",
        "lowerlimit": "0",
        "upperlimit": "100",
        "showtickmarks": "0",
        "showtickvalues": "0",
        "showlimits": "0",
        "numbersuffix": "%",
        "decmials": "0",
        "cylfillcolor": "CC0000",
        "basefontcolor": "CC0000",
        "chartleftmargin": "15",
        "chartrightmargin": "15",
        "charttopmargin": "15"
    },
    "value": "44",
    "annotations": {
        "groups": [
            {
                "showbelow": "1",
                "items": [
                    {
                        "type": "rectangle",
                        "x": "$chartStartX+1",
                        "y": "$chartStartY+1",
                        "tox": "$chartEndX-1",
                        "toy": "$chartEndY-1",
                        "color": "FFFFFF",
                        "alpha": "100",
                        "showborder": "0",
                        "bordercolor": "CC0000",
                        "borderthickness": "2",
                        "radius": "10"
                    }
                ]
            }
        ]
    }
}');
// Render the chart

$cylinderChart->render();
?>
<div id="chart-1"></div>
<div id="chart-2"></div>

</body>
</html>