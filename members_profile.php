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
            z-index: 100;
            padding: 10px;
        }
 
        .row {
            display: grid;
            grid-template-columns: 1fr 1fr; /* Two columns */
            min-height: calc(100vh - 60px); /* Adjust height to account for fixed nav */
            margin-top: 50px;
            padding: 20px;
            padding-top: 100px; /* Adjust padding to account for fixed nav */
            position: relative;
            gap: 20px; /* Add gap between columns */
            overflow: hidden; /* Prevent unnecessary scroll bar */
            justify-items: center; /* Center items horizontally */
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
            opacity: 0.1; /* Set opacity for the background image */
            z-index: -1; /* Ensure the background image is behind the content */
        }
 
        .column {
            padding: 20px;
            text-align: center;
            height: 100%;
            overflow-y: auto;
            width: 80%; /* Reduce the width of the columns */
        }
 
        .column-right {
            display: grid;
            grid-template-rows: 100%;
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
            justify-content: space-between;
            margin-bottom: 10px; /* Reduce space between form groups */
        }
 
        .form-label {
            width: 100%;
            text-align: left;
            margin-bottom: 5px;
            font-size: 18px;
            font-weight: bold;
        }
 
        .form-input, .form-control {
            width: 80%; /* Reduce the width of the input fields */
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            color: #333; /* Placeholder color */
        }
 
        .form-input {
            width: 80%; /* Reduce the width of the input fields */
        }
 
        button {
            width: 150px;
            height: 70px;
            padding: 20px;
            border-radius: 5px;
            border: none;
            background-color: #1a68d6;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: inline-block;
            font-size: 18px;
            font-weight: bold;
            margin: 20px 10px 0px 10px;;
            margin-bottom: 0px; /* Reduce margin to separate buttons */
        }
 
        button:hover {
            background-color: #0f4c81;
        }
 
        button:active {
            transform: translateY(2px);
        }
 
        button:focus {
            outline: none;
            box-shadow: 0 0 5px #1a68d6;
        }
    </style>
</head>
 
<body>
    <div class="nav-container">
        <h1>MEMBER'S PROFILE</h1>
            <div class="form-group">
                <label for="date" class="form-label" style="font-size: 20px;">DATE:<p id="date" class="date-time" style="margin-left: 30px;"></p></label>
                <label for="time" class="form-label" style="font-size: 20px; margin-left:250px;">TIME:<p id="time" class="date-time" style="margin-left: 30px;"></p></label>
            </div>
    </div>
    <div class="row">
        <!-- First Column -->
        <div class="column">
            <div class="form-group">
                <label for="account" class="form-label">ACCOUNT NUMBER:</label>
                <input type="number" id="account" class="form-input" placeholder="Account number">
            </div>
            <div class="form-group">
                <label for="name" class="form-label">NAME:</label>
                <input type="text" id="name" class="form-input" placeholder="Enter your name">
            </div>
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
            <div class="form-group">
                <label for="block" class="form-label">BLOCK:</label>
                <input type="text" id="block" class="form-input" placeholder="Enter the block">
            </div>
            <div class="form-group">
                <label for="age" class="form-label">AGE:</label>
                <input type="text" id="age" class="form-input" placeholder="Enter your age">
            </div>
            <div class="form-group">
                <label for="status" class="form-label">STATUS:</label>
                <select name="status" id="status" class="form-control">
                    <option value="">SELECT STATUS</option>
                    <option value="single">SINGLE</option>
                    <option value="married">MARRIED</option>
                    <option value="widowed">WIDOWED</option>
                    <option value="divorced">SEPARATED</option>
                </select>
            </div>
            <div class="form-group">
                <label for="gender" class="form-label">GENDER:</label>
                <select name="gender" id="gender" class="form-control">
                    <option value="">SELECT GENDER</option>
                    <option value="male">MALE</option>
                    <option value="female">FEMALE</option>
                </select>
            </div>
            <div class="form-group">
                <label for="contact" class="form-label">CONTACT NUMBER:</label>
                <input type="text" id="contact" class="form-input" placeholder="Enter your contact number">
            </div>
            <div class="form-group">
                <label for="birthplace" class="form-label">BIRTHPLACE:</label>
                <input type="text" id="birthplace" class="form-input" placeholder="Enter your birthplace">
            </div>
            <div class="form-group">
                <label for="educAtt" class="form-label">EDUCATIONAL ATTAINMENT:</label>
                <select name="educAtt" id="educAtt" class="form-control">
                    <option value="">SELECT EDUCATIONAL ATTAINMENT</option>
                    <option value="high school">HIGH SCHOOL</option>
                    <option value="vocational">VOCATIONAL</option>
                    <option value="college">COLLEGE</option>
                    <option value="post graduate">POST GRADUATE</option>
                </select>
            </div>
            <div class="form-group">
                <label for="famMem1" class="form-label">FAMILY MEMBER 1:</label>
                <input type="text" id="famMem1" class="form-input" placeholder="Enter your family member" style="margin-bottom: 0px;">
            </div> 
            <div class="form-group">
                <label for="famMem2" class="form-label" style="display: none;">FAMILY MEMBER 2:</label>
                <input type="text" id="famMem2" class="form-input" placeholder="Enter your family member" style="display: none;">
            </div>
            <div class="form-group">
                <label for="famMem3" class="form-label" style="display: none;">FAMILY MEMBER 3:</label>
                <input type="text" id="famMem3" class="form-input" placeholder="Enter your family member" style="display: none;">
            </div>
            <div class="form-group">
                <label for="famMem4" class="form-label" style="display: none;">FAMILY MEMBER 4:</label>
                <input type="text" id="famMem4" class="form-input" placeholder="Enter your family member" style="display: none;">
            </div>
            <div class="form-group">
                <label for="famMem5" class="form-label" style="display: none;">FAMILY MEMBER 5:</label>
                <input type="text" id="famMem5" class="form-input" placeholder="Enter your family member" style="display: none;">
            </div>
            <div class="form-group">
                <label for="famMem6" class="form-label" style="display: none;">FAMILY MEMBER 6:</label>
                <input type="text" id="famMem6" class="form-input" placeholder="Enter your family member" style="display: none;">
            </div>
            <div class="form-group">
                <label for="famMem7" class="form-label" style="display: none;">FAMILY MEMBER 7:</label>
                <input type="text" id="famMem7" class="form-input" placeholder="Enter your family member" style="display: none;">
            </div>
            <div class="form-group">
                <label for="famMem8" class="form-label" style="display: none;">FAMILY MEMBER 8:</label>
                <input type="text" id="famMem8" class="form-input" placeholder="Enter your family member" style="display: none;">
            </div>
            <div class="form-group">
                <label for="famMem9" class="form-label" style="display: none;">FAMILY MEMBER 9:</label>
                <input type="text" id="famMem9" class="form-input" placeholder="Enter your family member" style="display: none;">
            </div>
           
            <div class="form-group">
                <label for="famMem10" class="form-label" style="display: none;">FAMILY MEMBER 10:</label>
                <input type="text" id="famMem10" class="form-input" placeholder="Enter your family member" style="display: none; ">
                
            </div>
                    <button class="btn btn-primary" id="add-btn" >Add Family Member</button>
                    <button class="btn btn-danger" id="delete-btn" >Delete Family Member</button>
            
        </div>
 
        <!-- Second Column -->
        <div class="column">
            <div class="form-group">
                <label for="income" class="form-label">INCOME:</label>
                <input type="text" id="income" class="form-input" placeholder="Enter your income">
            </div>
            <div class="form-group">
                <label for="cedula" class="form-label">CEDULA:</label>
                <input type="text" id="cedula" class="form-input" placeholder="Enter your cedula">
            </div>
            <div class="form-group">
                <label for="clearance" class="form-label">CLEARANCE:</label>
                <input type="text" id="clearance" class="form-input" placeholder="Enter your clearance">
            </div>
            <div class="form-group">
                <label for="metNum" class="form-label">METER NUMBER:</label>
                <input type="text" id="metNum" class="form-input" placeholder="Enter your meter number">
            </div>
            <div class="form-group">
                <label for="dateFiled" class="form-label">DATE FILED:</label>
                <input type="date" id="dateFiled" class="form-input">
            </div>
            <div class="form-group">
                <label for="birthday" class="form-label">BIRTHDAY:</label>
                <input type="date" id="birthday" class="form-input">
            </div>
            <div class="form-group">
                <label for="amount" class="form-label">AMOUNT:</label>
                <input type="number" id="amount" class="form-input" placeholder="Enter the amount">
            </div>
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
            <div class="form-group">
                <label for="beneficiary1" class="form-label">BENEFICIARY 1:</label>
                <input type="text" id="beneficiary1" class="form-input" placeholder="Enter beneficiary 1">
            </div>
            <div class="form-group">
                <label for="beneficiary2" class="form-label">BENEFICIARY 2:</label>
                <input type="text" id="beneficiary2" class="form-input" placeholder="Enter beneficiary 2">
            </div>
            <div class="form-group">
                <label for="beneficiary3" class="form-label">BENEFICIARY 3:</label>
                <input type="text" id="beneficiary3" class="form-input" placeholder="Enter beneficiary 3">
            </div>
            &nbsp;
            <div class="form-group button-group">
                <button class="btn btn-primary" id="add-btn">Add</button>
                <button class="btn btn-secondary" id="edit-btn">Edit</button>
                <button class="btn btn-danger" id="delete-btn">Delete</button>
                <button class="btn btn-success" id="print-btn">Print</button>
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
 
        let famMemCount = 1;
        document.getElementById('add-btn').addEventListener('click', function() {
            if (famMemCount < 10) {
            famMemCount++;
            const famMemInput = document.getElementById('famMem' + famMemCount);
            const famMemLabel = document.querySelector('label[for="famMem' + famMemCount + '"]');
            famMemInput.style.display = 'block';
            famMemLabel.style.display = 'block';
            famMemLabel.parentNode.insertBefore(famMemInput, famMemLabel.nextSibling);
            } else {
            alert('Maximum of 10 family members can be added.');
            }
        });

        document.getElementById('delete-btn').addEventListener('click', function() {
            if (famMemCount > 1) {
            const famMemInput = document.getElementById('famMem' + famMemCount);
            const famMemLabel = document.querySelector('label[for="famMem' + famMemCount + '"]');
            famMemInput.style.display = 'none';
            famMemLabel.style.display = 'none';
            famMemCount--;
            } else {
            alert('No more family members to delete.');
            }
        });
    </script>
 
</body>
 
</html>