<?php
$sid = $_SESSION['ID'];
require("config.php");
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {
    'packages': ['corechart']
  });
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = new google.visualization.arrayToDataTable([
      ['Course Title', 'GPA'],
      <?php
      $value = mysqli_query($mysqli, "SELECT * FROM result WHERE S_ID='$sid'");
      while ($item = $value->fetch_assoc()) {
        $sum = $item['Quiz'] + $item['Mid'] + $item['Final'];
        $val;
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
      title: 'Spring 2023',
      chart: {
      },
      colors: ['#6b60d1','#5347c9','#3e31b0','#2c228c','#2f1fc4','#4e3bff']
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
  }
</script>