<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darasa Rural Waterworks</title>

    <!-- Bootstrap CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        .nav-container {
            background-color: #1a68d6;
            text-align: center;
            color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .row {
            display: grid;
            grid-template-columns: 40% 60%;
            height: 100vh;
            margin: 0;
            padding: 20px;
            padding-top: 80px; /* Adjust padding to account for fixed nav */
            position: relative;
        }

        .row::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url(images/NEW-LOGO.png);
            background-size: 40%;
            background-repeat: no-repeat;
            background-position: center;
            opacity: 0.5; /* Set opacity for the background image */
            z-index: -1; /* Ensure the background image is behind the content */
        }

        .column {
            padding: 20px;
            text-align: center;
            height: 100%;
            overflow-y: auto;
        }

        .column-right {
            display: grid;
            grid-template-rows: 80% 20%;
            gap: 20px;
        }

        .date-time {
            font-size: 20px;
            font-family: Arial, sans-serif;
            font-weight: bold;
            text-align: left;
            margin-bottom: 0px;
            display: inline-block;
        }

        .form-group {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin-bottom: 0px;
            width: 100%;
        }

        .form-label {
            width: 100%;
            text-align: left;
            margin-bottom: 0px;
            font-size: 25px;
            font-weight: bold;
        }

        .form-input, .form-control {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            color: #777; /* Placeholder color */
        }

        .row-1, .row-2, .row-3 {
            display: grid;
            grid-template-columns: 100%;
            gap: 10px;
            margin-bottom: 10px;
        }

        .form-input {
            width: 100%;
        }

        .row-2 label {
            margin-right: 0px;
        }

        .row-4 {
            display: flex;
            gap: 0px;
            align-items: center;
        }


        button {
            width: 150px;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #1a68d6;
            color: white;
            cursor: pointer;
        }

        .form-group button {
            margin-right: 15px;
        }

        button:hover {
            background-color: #0f4c81;
        }

        .card {
            margin-top: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 20px;
            overflow-y: auto; /* Add vertical scroll bar */
            max-height: 400px; /* Set max height for the table container */
        }

        .card-title {
            margin-bottom: 10px;
        }

        .table {
            margin-top: 20px;
        }

        .datatable {
            width: 100%;
            border-collapse: collapse;
        }

        .datatable th, .datatable td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .datatable th {
            background-color: #f0f0f0;
        }
    </style>
</head>

<body>
    <div class="nav-container">
        <h1>MEMBER'S PROFILE</h1>
            <div class="form-group">
                <label for="date" class="form-label" style="font-size: 20px;">DATE:<p id="date" class="date-time" style="margin-left: 30px;"></p></label>
                <label for="time" class="form-label" style="font-size: 20px; margin-left:100px;">TIME:<p id="time" class="date-time" style="margin-left: 30px;"></p></label>
            </div>
    </div>
    <div class="row">
        <!-- First Column -->
        <div class="column">
            <div class="row-2">
                
            </div>
            <!-- First Row with two inputs -->
            <div class="row-2">
                <div class="form-group">
                    <label for="account" class="form-label">ACCOUNT NUMBER:</label>
                    <input type="number" id="account" class="form-input" placeholder="Account number">
                </div>
            </div>

            <!-- Second Row with two inputs -->
            <div class="row-2">
                <div class="form-group">
                    <label for="name" class="form-label">NAME:</label>
                    <input type="text" id="name" class="form-input" placeholder="Enter your name">
                </div>
            </div>

            <!-- Third Row with two inputs -->
            <div class="row-2">
                <div class="form-group">
                    <label for="area" class="form-label">AREA:</label>
                    <select name="area" id="area" class="form-control">
                        <option value="">SELECT STATUS</option>
                        <option value="silangan">SILANGAN</option>
                        <option value="kanluran">KANLURAN</option>
                        <option value="railroad">RAILROAD</option>
                        <option value="ramonita">RAMONITA</option>
                        <option value="romanville">ROMANVILLE</option>
                        <option value="cambridge">CAMBRIDGE</option>
                        <option value="primavera">PRIMAVERA</option>
                        <option value="primavera2">PRIMAVERA II</option>
                        <option value="colbella">COLBELLA</option>
                        <option value="sanbernardo">SAN BERNARDO</option>
                        <option value="stmatthews">ST. MATTHEWS</option>
                        <option value="pilarville">PILLARVILLE</option>
                        <option value="amare">AMARE</option>
                    </select>
                </div>
            </div>

            <!-- Fourth Row with two inputs -->
            <div class="row-2">
                <div class="form-group">
                    <label for="block" class="form-label">BLOCK:</label>
                    <input type="text" id="block" class="form-input" placeholder="Enter the block">
                </div>
            </div>

            <!-- Fifth Row with two inputs -->
            <div class="row-2">
                <div class="form-group">
                    <label for="age" class="form-label">AGE:</label>
                    <input type="text" id="age" class="form-input" placeholder="Enter your age">
                </div>
            </div>

            <!-- Sixth Row with two inputs -->
            <div class="row-2">
                <div class="form-group">
                    <label for="status" class="form-label">STATUS:</label>
                    <select name="status" id="status" class="form-control">
                        <option value="">SELECT STATUS</option>
                        <option value="single">SINGLE</option>
                        <option value="married">MARRIED</option>
                        <option value="widowed">WIDOWED</option>
                        <option value="divorced">DIVORCED</option>
                    </select>
                </div>
            </div>

            <!-- Seventh Row with labels -->
            <div class="row-2">
                <div class="form-group">
                    <label for="gender" class="form-label">GENDER:</label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="">SELECT GENDER</option>
                        <option value="male">MALE</option>
                        <option value="female">FEMALE</option>
                    </select>
                </div>
            </div>

            <!-- Eighth Row with inputs -->
            <div class="row-2">
                <div class="form-group">
                    <label for="contact" class="form-label">CONTACT NUMBER:</label>
                    <input type="text" id="contact" class="form-input" placeholder="Enter your contact number">
                </div>
            </div>

            <!-- Ninth Row with inputs -->
            <div class="row-2">
                <div class="form-group">
                    <label for="birthplace" class="form-label">BIRTHPLACE:</label>
                    <input type="text" id="birthplace" class="form-input" placeholder="Enter your birthplace">
                </div>
            </div>

            <!-- Tenth Row -->
            <div class="row-2">
                <div class="form-group">
                    <label for="educAtt" class="form-label" style="font-size: 23.5px">EDUCATIONAL ATTAINMENT:</label>
                    <select name="educAtt" id="educAtt" class="form-control">
                        <option value="">SELECT EDUCATIONAL ATTAINMENT</option>
                        <option value="high school">HIGH SCHOOL</option>
                        <option value="vocational">VOCATIONAL</option>
                        <option value="college">COLLEGE</option>
                        <option value="post graduate">POST GRADUATE</option>
                    </select>
                </div>
            </div>

            <!-- Eleventh Row -->
            <div class="row-2">
                <div class="form-group">
                    <label for="famMem" class="form-label">FAMILY MEMBERS:</label>
                    <input type="text" id="famMem1" class="form-input" placeholder="Enter your family members">
                </div>
            </div>
            <div class="row-2" id="family-members-container">
                <div class="form-group">
                    <label for="addFam" class="form-label"></label>
                    <button class="btn btn-primary" id="add-btn" style="width:250px; margin-bottom: 10px;">Add Family Member</button>
                </div>
            </div>
            <script>
                document.getElementById('add-btn').addEventListener('click', function() {
                    const famMemContainer = document.getElementById('family-members-container');
                    const existingInputs = famMemContainer.querySelectorAll('input[type="text"]');
                    
                    if (existingInputs.length < 3) {
                        const newDiv = document.createElement('div');
                        newDiv.className = 'form-group';
                        
                        const newInput = document.createElement('input');
                        newInput.type = 'text';
                        newInput.className = 'form-input';
                        newInput.placeholder = 'Enter your family members';
                        
                        newDiv.appendChild(newInput);
                        famMemContainer.insertBefore(newDiv, famMemContainer.lastElementChild);
                    } else {
                        alert('Maximum of 3 family members can be added.');
                    }
                });
            </script>
            <!-- Twelfth Row -->
            <div class="row-2">
                <div class="form-group">
                    <label for="income" class="form-label">INCOME:</label>
                    <input type="text" id="income" class="form-input" placeholder="Enter your income">
                </div>
            </div>

            <!-- Thirteenth Row -->
            <div class="row-2">
                <div class="form-group">
                    <label for="cedula" class="form-label">CEDULA:</label>
                    <input type="text" id="cedula" class="form-input" placeholder="Enter your cedula">
                </div>
            </div>

            <!-- Fourteenth Row -->
            <div class="row-2">
                <div class="form-group">
                    <label for="clearance" class="form-label">CLEARANCE:</label>
                    <input type="text" id="clearance" class="form-input" placeholder="Enter your clearance">
                </div>
            </div>

            <!-- Fifteenth Row -->
            <div class="row-2">
                <div class="form-group">
                    <label for="metNum" class="form-label">METER NUMBER:</label>
                    <input type="text" id="metNum" class="form-input" placeholder="Enter your meter number">
                </div>
            </div>

            <!-- Sixteenth Row -->
            <div class="row-2">
                <div class="form-group">
                    <label for="dateFiled" class="form-label">DATE FILED:</label>
                    <input type="date" id="dateFiled" class="form-input">
                </div>
            </div>

            <!-- Seventeenth Row -->
            <div class="row-2">
                <div class="form-group">
                    <label for="birthday" class="form-label">BIRTHDAY:</label>
                    <input type="date" id="birthday" class="form-input">
                </div>
            </div>

            <!-- Eighteenth Row -->
            <div class="row-2">
                <div class="form-group">
                    <label for="amount" class="form-label">AMOUNT:</label>
                    <input type="number" id="amount" class="form-input" placeholder="Enter the amount">
                </div>
            </div>

            <!-- Nineteenth Row -->
            <div class="row-2">
                <div class="form-group">
                    <label for="month" class="form-label">MONTH:</label>
                    <select name="month" id="month" class="form-control">
                        <option value="" disabled selected>Choose a month</option>
                        <?php
                        $months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                        foreach ($months as $month) {
                            echo '<option value="' . $month . '">' . $month . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>

            <!-- Twentieth Row with Beneficiaries -->
            <div class="row-2">
                <div class="form-group">
                    <label for="beneficiary1" class="form-label">BENEFICIARY 1:</label>
                    <input type="text" id="beneficiary1" class="form-input" placeholder="Enter beneficiary 1">
                </div>
            </div>
            <div class="row-2">
                <div class="form-group">
                    <label for="beneficiary2" class="form-label">BENEFICIARY 2:</label>
                    <input type="text" id="beneficiary2" class="form-input" placeholder="Enter beneficiary 2">
                </div>
            </div>
            <div class="row-2">
                <div class="form-group">
                    <label for="beneficiary3" class="form-label">BENEFICIARY 3:</label>
                    <input type="text" id="beneficiary3" class="form-input" placeholder="Enter beneficiary 3">
                </div>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" id="add-btn">Add</button>
                <button class="btn btn-secondary" id="edit-btn">Edit</button>
                <button class="btn btn-danger" id="delete-btn">Delete</button>
                <button class="btn btn-success" id="print-btn">Print</button>
            </div>
        </div>
        
    

    <div class="column-right">
        <!-- Top part for the table -->
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered datatable" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Area</th>
                            <th scope="col">Block</th>
                            <th scope="col">Age</th>
                            <th scope="col">Status</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Birthplace</th>
                            <th scope="col">Education Attainment</th>
                            <th scope="col">Family Members</th>
                            <th scope="col">Income</th>
                            <th scope="col">Cedula</th>
                            <th scope="col">Clearance</th>
                            <th scope="col">Meter Number</th>
                            <th scope="col">Date Filed</th>
                            <th scope="col">Birthday</th>
                            <th scope="col">Month</th>
                            <th scope="col">Beneficiaries</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Bottom part for the input fields -->
                <div class="section">
            <div class="row-4">
                <div class="form-group">
                    <label for="area" class="form-label">AREA:</label>
                    <input type="text" id="area" class="form-input" placeholder="Enter your area">
                </div>
                <div class="form-group">
                    <label for="name" class="form-label">NAME:</label>
                    <input type="text" id="name" class="form-input" placeholder="Enter your name">
                </div>
            </div>
            <div class="row-4">
                <div class="form-group">
                    <label for="year" class="form-label">YEAR:</label>
                    <input type="number" id="year" class="form-input" placeholder="Enter the year">
                </div>
                <div class="form-group">
                    <label for="encoded" class="form-label">ENCODED:</label>
                    <input type="text" id="encoded" class="form-input" placeholder="Enter encoded data">
                </div>
            </div>
            <div class="row-5">
                <button class="btn btn-primary" id="right-btn">Submit</button>
            </div>
        </div>
    </div>
    </div>
    
    </div>
    </div>
    <!-- Bootstrap JS and Popper.js -->
    <script src="assets/js/main.js"></script>

    <script>
        // JavaScript to update date and time
        function updateDateTime() {
            const now = new Date();
            const date = now.toLocaleDateString();
            const time = now.toLocaleTimeString();
            document.getElementById('date').innerText = date;
            document.getElementById('time').innerText = time;
        }
        setInterval(updateDateTime, 1000);
        updateDateTime();
    </script>

</body>

</html>
