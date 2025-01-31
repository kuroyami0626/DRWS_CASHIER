<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
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

    // SQL Insert Query
    $query = "INSERT INTO tbl_members_profile (
                account_number, name, area, block, age, status, gender, contact, birthplace, 
                education_attainment, family_member_1, family_member_2, family_member_3, 
                income, cedula, clearance, meter_number, date_filed, birthday, 
                amount, month, beneficiary_1, beneficiary_2, beneficiary_3
              ) VALUES (
                ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
              )";

    // Prepare statement
    $stmt = $con->prepare($query);
    $stmt->bind_param(
        "isssissssssssdsssssdssss", 
        $account_number, $name, $area, $block, $age, $status, $gender, $contact, $birthplace,
        $education_attainment, $family_member_1, $family_member_2, $family_member_3, $income, 
        $cedula, $clearance, $meter_number, $date_filed, $birthday, $amount, $month, 
        $beneficiary_1, $beneficiary_2, $beneficiary_3
    );

    // Execute the query
    if ($stmt->execute()) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $con->close();
}
?>
