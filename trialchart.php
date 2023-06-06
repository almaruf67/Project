<?php
session_start();
$sid = $_SESSION['ID'];
require("config.php");
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div id="chart_div" style="width: 900px; height: 500px;" ></div>
<script type="text/javascript">
  google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Category', 'Value'],
      <?php
      $value = mysqli_query($mysqli, "SELECT * FROM result WHERE S_ID='$sid'");
      while ($item = $value->fetch_assoc()) {
        $sum = $item['Quiz'] + $item['Mid'] + $item['Final'];
        $val ;
        if ($sum > 79)
          $val = 4.00;
        else if ($sum > 74)
          $val = 3.75;
        else if ($sum > 69)
          $val = 3.50;
        else if ($sum > 64)
          $val = 3.25;
        else if ($sum > 59)
          $val = 3.00;
        else if ($sum > 54)
          $val = 2.75;
        else if ($sum > 49)
          $val = 2.50;
        else if ($sum > 44)
          $val = 2.00;
        else
          $val = 0.00;
        $course = $item['Course_Title'];
      ?>['<?php echo $course; ?>', <?php echo $val; ?>],
      <?php
      }
      ?>
    ]);

    var options = {
      chart: {
        title: 'Bar Chart',
        subtitle: 'Values per Category',
      },
      bars: 'vertical',
      vAxis: {
        minValue: 0, // Set the minimum value of the y-axis
        maxValue: 5 // Set the maximum value of the y-axis
      }
    };

    var chart = new google.charts.Bar(document.getElementById('chart_div'));
    chart.draw(data, google.charts.Bar.convertOptions(options));
  }
</script>
