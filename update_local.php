<!doctype html>
<html lang="en">
    <head>
        <?php
        include("dbcon.php");
        include("admin/session.php");
        ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>D-Well System</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    
    <body>
        <main>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Retrieve data from the modal
                $account = $_POST['account'];
                $name = $_POST['name'];
                $area = $_POST['area'];
                $block = $_POST['block'];
                $presentReading = $_POST['presentReading'];
                $oldReading = $_POST['oldReading'];
                $previousReading = $_POST['previousReading'];
                $check = $_POST['check'];
                $consumed = $_POST['consumed'];
                $remarks = $_POST['remarks'];
                $totalCorrection = $_POST['totalCorrection'];
                $amount = $_POST['amount'];
                $scDiscount = $_POST['scDiscount'];
                $freeCharge = $_POST['freeCharge'];
                $percentDiscount = $_POST['percentDiscount'];
                $month = $_POST['month'];
                $category = $_POST['category'];
                $dueDate = $_POST['dueDate'];
                $discDate = $_POST['discDate'];
                $billingPeriod = $_POST['billingPeriod'];
                $others = $_POST['others'];
                $grandtotal = $_POST['grandtotal'];
                $searchByName = $_POST['searchByName'];
                $reader = $_POST['reader'];

                // Update the database
                $query = "UPDATE your_table_name SET 
                    name='$name', 
                    area='$area', 
                    block='$block', 
                    presentReading='$presentReading', 
                    oldReading='$oldReading', 
                    previousReading='$previousReading', 
                    check='$check', 
                    consumed='$consumed', 
                    remarks='$remarks', 
                    totalCorrection='$totalCorrection', 
                    amount='$amount', 
                    scDiscount='$scDiscount', 
                    freeCharge='$freeCharge', 
                    percentDiscount='$percentDiscount', 
                    month='$month', 
                    category='$category', 
                    dueDate='$dueDate', 
                    discDate='$discDate', 
                    billingPeriod='$billingPeriod', 
                    others='$others', 
                    grandtotal='$grandtotal', 
                    searchByName='$searchByName', 
                    reader='$reader' 
                    WHERE account='$account'"; // Adjust the WHERE clause as needed

                if (mysqli_query($con, $query)) {
                    echo "<script>alert('Data updated successfully!'); window.location='update_local.php'</script>";
                } else {
                    echo "<script>alert('Error updating data: " . mysqli_error($con) . "');</script>";
                }
            }
            ?>
        </main>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
