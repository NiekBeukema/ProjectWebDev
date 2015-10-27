<!DOCTYPE html>
<?php
include('session.php');
?>
<html>
<head>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/metro.js"></script>
    <link rel="stylesheet" type="text/css" href="css/metro.min.css">
    <link href="css/metro-icons.css" rel="stylesheet">
    <link href="css/metro-responsive.css" rel="stylesheet">
    <link href="css/metro-schemes.css" rel="stylesheet">
    <link href="vis/vis.css" rel="stylesheet">
    <script src="vis/vis.js"></script>
    <title>Management Center</title>
    <style>
        body {
            background-color: #323232;
        }

        form {
            background-color: #4b0096;
        }

        #Sign-In {
            border: solid;
            border-color: #1d1d1d;
            width: 300px;
            height: 220px;
            background-color: #4b0096;

            position: absolute;
            top:0;
            bottom: 0;
            left: 0;
            right: 0;

            margin: auto;
        }

        span {
            color: white;
        }


    </style>
</head>
<body onload="load()">
    <script>
        var start = new Date();
        var items = [
            {x: start.getTime(), y: 0}
        ];

        var datasetgpu = new vis.DataSet(items);
        var datasetcpu = new vis.DataSet(items);
        var options = {
            start: start.getTime(),
            drawPoints: false
        };


        function load() {
            $.ajax({
                url : 'temp.php',
                type : 'POST',
                dataType : 'json',
                success : function (result) {
                    datasetgpu.update({x: start.getTime(), y: result['gpu1']});
                    datasetcpu.update({x: start.getTime(), y: result['cpu']});
                },
                error : function (obj, ovj, error) {
                    alert("error" + error);
                }
            })
            var gpucont = document.getElementById('gputempcontent');
            var cpucont = document.getElementById('cputempcontent');
            var graph2dgpu = new vis.Graph2d(gpucont, datasetgpu, options);
            var graph2dcpu = new vis.Graph2d(cpucont, datasetcpu, options);
        }



        function RefreshGraph() {
            $.ajax({
                url : 'temp.php',
                type : 'POST',
                dataType : 'json',
                success : function (result) {
                    var getTime = new Date();
                    datasetgpu.update({x: getTime.getTime(), y: result['gpu1']});
                    datasetcpu.update({x: getTime.getTime(), y: result['cpu']});
                    $("#gputempbadge").text(result['gpu1']);
                    $("#cputempbadge").text(result['cpu']);
                },
                error : function (obj, ovj, error) {
                    alert("error" + error);
                }
            })
        }


        setInterval(RefreshGraph, 3000);


    </script>
    <div data-role="charm" data-position="left|right|top|bottom">
        ...charm content...
    </div>
    <div class="row flex-just-sa">
        <div class="cell">
            <div class="panel" id="overall">
                <div class="heading bg-darkViolet">
                    <span class="icon">13</span>
                    <span class="title">System Temperatures</span>

                </div>
                <div class="content bg-gray fg-white" id="overallcontent">
                    <script>
                    </script>
                </div>
            </div>
        </div>
        <div class="cell">
            <div class="panel" id="cputemp">
                <div class="heading bg-darkViolet">
                    <span id="cputempbadge" class="icon">13</span>
                    <span class="title">CPU Temperature</span>
                </div>
                <div class="content bg-gray fg-white" id="cputempcontent">
                </div>
            </div>
        </div>
        <div class="cell">
            <div class="panel" id="gputemp">

                <div class="heading bg-darkViolet">
                    <span id="gputempbadge" class="icon">13</span>
                    <span class="title">GPU Temperature</span>

                </div>
                <div class="content bg-gray fg-white" id="gputempcontent">
                    <script>
                    </script>
                </div>
            </div>
        </div>

        <div class="cell">
            <div class="panel" id="sytemload">
                <div class="heading bg-darkViolet">
                    <span class="title">Overall System Load</span>
                </div>
                <div class="content bg-gray fg-white" id="systemloadcontent" ">
                    <input type="button" id="addentry">Make an entry</input>
                </div>
            </div>
        </div>
        <div class="cell">
            <div class="panel" id="powercontrol">
                <div class="heading bg-darkViolet">
                    <span class="title">Power Control</span>
                </div>
                <div class="content bg-gray fg-white" id="powercontrolcontent">
                    Insert graph data here
                </div>
            </div>
        </div>

    </div>

    <b id="logout"><a href="incl/logout.php">Log Out</a></b>
</body>
</html>