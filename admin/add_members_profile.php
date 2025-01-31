<?php
include("header.php"); // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $account_number = $_POST['account_number'];
    $name = $_POST['name'];
    $area = $_POST['area'];
    $block = $_POST['block'];
    $age = $_POST['age'];
    $status = $_POST['status'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $birthplace = $_POST['birthplace'];
    $education_attainment = $_POST['education_attainment'];
    $family_member_1 = $_POST['family_member_1'];
    $family_member_2 = $_POST['family_member_2'];
    $family_member_3 = $_POST['family_member_3'];
    $income = $_POST['income'];
    $cedula = $_POST['cedula'];
    $clearance = $_POST['clearance'];
    $meter_number = $_POST['meter_number'];
    $date_filed = $_POST['date_filed'];
    $birthday = $_POST['birthday'];
    $amount = $_POST['amount'];
    $month = $_POST['month'];
    $beneficiary_1 = $_POST['beneficiary_1'];
    $beneficiary_2 = $_POST['beneficiary_2'];
    $beneficiary_3 = $_POST['beneficiary_3'];

    // Prepare SQL statement
    $query = "INSERT INTO tbl_members_profile (
                account_number, name, area, block, age, status, gender, contact, birthplace, 
                education_attainment, family_member_1, family_member_2, family_member_3, 
                income, cedula, clearance, meter_number, date_filed, birthday, 
                amount, month, beneficiary_1, beneficiary_2, beneficiary_3
            ) VALUES (
                '$account_number', '$name', '$area', '$block', '$age', '$status', '$gender', 
                '$contact', '$birthplace', '$education_attainment', '$family_member_1', 
                '$family_member_2', '$family_member_3', '$income', '$cedula', '$clearance', 
                '$meter_number', '$date_filed', '$birthday', '$amount', '$month', 
                '$beneficiary_1', '$beneficiary_2', '$beneficiary_3'
            )";

    if ($con->query($query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $con->error;
    }

    $con->close();
}
?>

<body>

