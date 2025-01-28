<!DOCTYPE html>
<html lang="en">
<?php
include("header.php");
?>
<body>

<?php
include("topbar.php");
?>

<?php
include("sidebar.php");
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active">Dashboard data</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

 

  <!-- Card for Total of All Total Costs -->
  <div class="card" style="width: 30%; height: 30%; margin-top: 20px;">
    <div class="card-header">
      <h3>Total of All Total Costs</h3>
    </div>
    <div class="card-body">
      <?php
      // SQL query to calculate the total of all total_cost values without month and year filtering
      $totalQuery = "SELECT SUM(total_cost) AS total_cost_sum FROM tbl_inventory";

      $totalResult = $con->query($totalQuery);
      if ($totalResult->num_rows > 0) {
          $totalRow = $totalResult->fetch_assoc();
          $totalCostSum = $totalRow['total_cost_sum'];
      } else {
          $totalCostSum = 0;  // Default to 0 if no data found
      }

      // Display the total of all total costs
      echo "<p style='font-size: 40px; text-align: right; height: 40px;'>₱" . number_format($totalCostSum, 2) . "</p>";



      ?>
    </div>
  </div>

  <div class="card" style="width: 30%; height: 30%;">
    <div class="card-header">
      <h3>TOTAL COST FOR Inventory</h3>
    </div>
    <div class="card-body">
      <!-- Chart Area with smaller size -->
      <div id="chart" style="height: 100%;"></div> <!-- Smaller chart container -->
    </div>
  </div>

  <?php
  // SQL query to fetch both total costs and quantity_in_stocks without month and year filtering
  $query = "SELECT total_cost, quantity_in_stocks FROM tbl_inventory";

  $result = $con->query($query);
  $totalCosts = [];
  $quantitiesInStock = [];

  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          $totalCosts[] = $row['total_cost'];  // Store each total_cost in the array
          $quantitiesInStock[] = $row['quantity_in_stocks'];  // Store each quantity_in_stocks in the array
      }
  } else {
      $totalCosts = [0];  // Default to 0 if no data found
      $quantitiesInStock = [0];  // Default to 0 if no data found
  }

  // Pass the total costs and quantities in stock arrays to JavaScript
  echo "<script>var totalCosts = " . json_encode($totalCosts) . ";</script>";
  echo "<script>var quantitiesInStock = " . json_encode($quantitiesInStock) . ";</script>";
?>

</main>
<!-- End Main -->

<?php 
include("footer.php");
?>

<script>
document.addEventListener('DOMContentLoaded', function () {
  let element = document.querySelector("#chart");

  if (element) {
    if (typeof ApexCharts === 'undefined') {
      console.error('ApexCharts is not loaded.');
      return;
    }

    let myChart = new ApexCharts(element, {
      chart: {
        type: 'bar',  // Bar chart to visualize both total cost and quantity in stock
      },
      series: [{
        name: 'Total Cost',
        data: totalCosts,  // Use the totalCosts array for the data of Product A (Total Cost)
      }, {
        name: 'Quantity in Stock',
        data: quantitiesInStock,  // Use the quantitiesInStock array for the data of Product B (Quantity in Stock)
      }],
      xaxis: {
        categories: ['Quantity in stocks', 'Total cost'], // Customize your labels as needed
      },
      title: {
        text: 'Total Cost and Quantity in Stock Comparison',
        align: 'center'
      },
      plotOptions: {
        bar: {
          horizontal: false,  // Set this to false if you want the bars to be vertical
          columnWidth: '40%',
        }
      }
    });

    myChart.render();
  } else {
    console.error('Chart container not found!');
  }
});
</script>

</body>
</html>
