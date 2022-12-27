<?php
include('include/connection.php');

$created_date = date('Y-m-d');

$sql = "Select * from daily_steps_records where date='$created_date'";
$result = mysqli_query($conn, $sql);
$test = array();
$count = 0;
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        echo  $test[$count]["y"] = $row['steps'];
        $test[$count]["user_id"] = $row['user_id'];
    }
}


?>
<!DOCTYPE HTML>
<html>

<head>
    <script>
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: "Gold Reserves"
                },
                axisY: {
                    title: "Total Daily Recordss"
                },
                data: [{
                    type: "column",
                    yValueFormatString: "#,##0.## tonnes",
                    dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();

        }
    </script>
</head>

<body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>

</html>