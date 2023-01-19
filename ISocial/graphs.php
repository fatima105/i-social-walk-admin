<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<?php include('include/connection.php');

$sql = "SELECT * from users";
$QUERYA1 = mysqli_query($conn, $sql);
$QUERYA11 = mysqli_num_rows($QUERYA1);

///challenges
$sql = "SELECT * from challenges";
$QUERYA2 = mysqli_query($conn, $sql);
$QUERYA22 = mysqli_num_rows($QUERYA2);
//groups
$sql = "SELECT * from user_groups";
$QUERYA3 = mysqli_query($conn, $sql);
$QUERYA33 = mysqli_num_rows($QUERYA3);
$rating_data = array(

    array('Users', $QUERYA11),
    array('Challenges', $QUERYA22),
    array('Groups', $QUERYA33)

);
$encoded_data = json_encode($rating_data);
?>

<body>

    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

    <script>
        var xValues = ["Users", "Friends", "Groups", "Challenges"];
        var yValues = , 49, 44, 24, 15];
        var barColors = [
            "#b91d47",
            "#00aba9",
            "#2b5797",
            "#e8c3b9",
            "#1e7145"
        ];

        new Chart("myChart", {
            type: "doughnut",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "World Wide Wine Production 2018"
                }
            }
        });
    </script>

</body>

</html>