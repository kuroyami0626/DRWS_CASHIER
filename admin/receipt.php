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
            border: 1px solid #ccc; 
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
            align-items: center; 
            margin-bottom: 2px; 
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
            background-color: #e9ecef; 
        }
        input[readonly] {
            background-color: #e9ecef; 
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
    <input type="text" id="account_number" name="account_number"  readonly>
</div>
<div class="form-group">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" readonly>
</div>
<div class="form-group">
    <label for="area">Area:</label>
    <input type="text" id="area" name="area" readonly>
</div>
<div class="form-group">
    <label for="category">Category:</label>
    <input type="text" id="category" name="category"  readonly>
</div>
<div class="form-group">
    <label for="month_year">Month/Year:</label>
    <input type="text" id="month_year" name="month_year" readonly>
</div>
<div class="form-group">
    <label for="period">Period:</label>
    <input type="text" id="period" name="period" readonly>
</div>
<div class="form-group">
    <label for="due_date">Due Date:</label>
    <input type="date" id="due_date" name="due_date" readonly>
</div>
<div class="form-group">
    <label for="disconnection_date">Disconnection Date:</label>
    <input type="date" id="disconnection_date" name="disconnection_date" readonly>
</div>

<div class="section" style="margin-bottom: 0px">
    <h2 style="text-align:center">READING</h2>
    <div class="form-group">
        <label for="present_reading">Present Reading:</label>
        <input type="number" id="present_reading" name="present_reading" readonly>
    </div>
    <div class="form-group">
        <label for="previous_reading">Previous Reading:</label>
        <input type="number" id="previous_reading" name="previous_reading"  readonly>
    </div>
    <div class="form-group">
        <label for="cum_consumed">Cu.M. Consumed:</label>
        <input type="number" id="cum_consumed" name="cum_consumed" readonly>
    </div>
</div>

<div class="section">
    <h2 style="text-align:center; margin-top:0px">COMPUTATION</h2>
    <div class="form-group">
        <label for="previous_bill">Previous Bill:</label>
        <input type="number" id="previous_bill" name="previous_bill" readonly>
    </div>
    <div class="form-group">
        <label for="senior_discount">Senior Citizen Discount:</label>
        <input type="text" id="senior_discount" name="senior_discount" readonly>
    </div>
    <div class="form-group">
        <label for="less_x_disc">Less X Disc.:</label>
        <input type="text" id="less_x_disc" name="less_x_disc" readonly>
    </div>
    <div class="form-group">
        <label for="grandtotal">Total Amount:</label>
        <input type="number" id="grandtotal" name="total_amount" readonly>
    </div>
    <div class="form-group">
        <label for="penalty">Penalty:</label>
        <input type="number" id="penalty" name="penalty" readonly>
    </div>
    <div class="form-group">
        <label for="reader">Reader:</label>
        <input type="text" id="reader" name="reader" readonly>
    </div>
</div>
    </form>
</body>
</html>