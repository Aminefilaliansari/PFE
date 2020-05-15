<!DOCTYPE html>
<html>
<head>
<title></title>
<style type="text/css">
BODY {
    width: 100%;
}

#chart-container {
    width: 70%;
    height: auto;
}
</style>
<script type="text/javascript" src="./analyse/js/jquery.min.js"></script>
<script type="text/javascript" src="./analyse/js/Chart.min.js"></script>


</head>


<body>


    <div id="chart-container">
        <canvas id="data_req_projet_01_bar"></canvas>
    </div>

    <script>
        $(document).ready(function () {
            showGraph1();
        });


        function showGraph1()
        {
            {
                $.post("./analyse/data_req_bar/data_req_projet_01_bar.php",
                function (data)
                {
                    console.log(data);
                     var name = [];
                    var marks = [];

                    for (var i in data) {
                        name.push(data[i].provaince);
                        marks.push(data[i].cnt);
                    }

                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'NBR de projet de chaque Provaince',
                                backgroundColor: '#21d4fd',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#b721ff',
                                hoverBorderColor: '#ffffff',
                                data: marks

                            }
                        ]
                    };

                    var graphTarget = $("#data_req_projet_01_bar");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>

</body>
</html>