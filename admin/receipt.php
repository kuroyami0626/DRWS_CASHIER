<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc; /* Added border */
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h2 {
            text-align: center;
            margin-bottom: 3px;
            margin-top: 0px;
        }
        .form-group {
            display: flex;
            justify-content: space-between;
            align-items: center; /* Aligns items vertically centered */
            margin-bottom: 2px; /* Reduced space */
        }
        label {
            flex: 1;
            margin-right: 10px;
            font-weight: bold;
            text-align: right;
        }
        input[type="text"],
        input[type="number"],
        input[type="date"] {
            flex: 2;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #e9ecef; /* Light gray background for read-only fields */
        }
        input[readonly] {
            background-color: #e9ecef; /* Light gray background for read-only fields */
        }
    </style>
</head>
<body>
    <form action="index.php" method="post">
        <div class="section" style="text-align: center;">
            <div style="display: flex; align-items: center; justify-content: center;">
                <img src="images/NEW-LOGO.png" alt="" style="max-width: 100px; height: auto; margin-right: 20px;">
                <div style="text-align: center; margin-bottom: 3px; margin-top:0px;">
                    <h2>DARASA RURAL WATERWORKS & SANITATION ASSOCIATION, INC.</h2>
                    <h3>Darasa Tanauan City, Batangas</h3>
                    <h3>TIN No. 005-739-474 Non Vat</h3>
                    <h3>Contact No. 09207045371 / 778-7219</h3>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="account_number">Account No.:</label>
            <input type="text" id="account_number" name="account_number" value="<?php echo $account; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="area">Area:</label>
            <input type="text" id="area" name="area" value="<?php echo $area; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="category">Category:</label>
            <input type="text" id="category" name="category" value="<?php echo $category; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="month_year">Month/Year:</label>
            <input type="text" id="year" name="month_year" value="<?php echo $month; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="period">Period:</label>
            <input type="text" id="billingPeriod" name="period" value="<?php echo $billingPeriod; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="due_date">Due Date:</label>
            <input type="date" id="dueDate" name="due_date" value="<?php echo $dueDate; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="disconnection_date">Disconnection Date:</label>
            <input type="date" id="discDate" name="disconnection_date" value="<?php echo $discDate; ?>" readonly>
        </div>

        <div class="section" style="margin-bottom: 0px">
            <h2 style="text-align:center">READING</h2>
            <div class="form-group">
                <label for="present_reading">Present Reading:</label>
                <input type="number" id="presentReading" name="present_reading" value="<?php echo $presentReading; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="previous_reading">Previous Reading:</label>
                <input type="number" id="previousReading" name="previous_reading" value="<?php echo $previousReading; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="cum_consumed">Cu.M. Consumed:</label>
                <input type="number" id="cum_consumed" name="cum_consumed" value="<?php echo $consumed; ?>" readonly>
            </div>
        </div>

        <div class="section">
            <h2 style="text-align:center; margin-top:0px">COMPUTATION</h2>
            <div class="form-group">
                <label for="previous_bill">Previous Bill:</label>
                <input type="number" id="previous_bill" name="previous_bill" value="<?php echo $amount; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="senior_discount">Senior Citizen Discount:</label>
                <input type="text" id="scDiscount" name="senior_discount" value="<?php echo $scDiscount; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="less_x_disc">Less X Disc.:</label>
                <input type="text" id="less_x_disc" name="less_x_disc" value="<?php echo $percentDiscount; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="free_of_charge">Free of Charge:</label>
                <input type="text" id="free_of_charge" name="free_of_charge" value="<?php echo $freeCharge; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="total_amount">Total Amount:</label>
                <input type="number" id="grandtotal" name="total_amount" value="<?php echo $grandtotal; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="penalty">Penalty:</label>
                <input type="number" id="penalty" name="penalty" value="<?php echo $totalCorrection; ?>" readonly>
            </div>
        </div>
    </form>
</body>
</html>
