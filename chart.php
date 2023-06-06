<?php
session_start();
$sid = $_SESSION['ID'];
require("config.php");
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
  google.charts.load('current', {
    'packages': ['bar']
  });
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = new google.visualization.arrayToDataTable([
      ['Course Title', 'GPA'],
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
        title: 'Student All Courses Result'
      },
      //  subtitle: 'popularity by percentage' },
      bars: 'vartical', // Required for Material Bar Charts.
      vAxis: {
        minValue: 0.00, // Set the minimum value of the y-axis
        maxValue: 4.00 // Set the maximum value of the y-axis
      },
      bar: {
        groupWidth: "90%"
      }
    };

    var chart = new google.charts.Bar(document.getElementById('top_x_div'));
    chart.draw(data, options);
  };
</script>
</head>

<body>
  <div id="top_x_div" style="width: 900px; height: 500px;"></div>
</body>

</html>