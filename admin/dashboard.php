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



</main>
<!-- End Main -->

<?php 
include("footer.php");
?>

<script>

</script>

</body>
</html>
