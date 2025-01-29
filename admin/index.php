<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darasa Rural Waterworks</title>

    <!-- Bootstrap CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="assets/vendor/apexcharts/apexcharts.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to top, rgba(255, 255, 255, 3) 10%, rgb(38, 99, 184) 100%);
            background-color: transparent;
        }

        /* Primary buttons */
        .btn-primary {
            width: 200px;
            height: 55px;
            margin: 5px;
            border-radius: 6px;
        }

        /* Danger buttons */
        .btn-danger {
            width: 200px;
            height: 55px;
            margin: 5px;
            background-color: rgb(204, 23, 23);
            color: white;
            border-radius: 6px;
        }

        /* Center the buttons */
        .container.mt-3 {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        /* Add background color to navbar section */
        .nav-container {
            background-color: rgb(40, 106, 199);
        }

        .row-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            height: 100vh;
            margin: 0;
        }

        /* Ensure columns fill the available space */
        .column {
            padding: 20px;
            text-align: center;
            height: 100%;
        }

        img {
            max-width: 100%;
            margin-top: 10%;
            height: auto;
        }

        P,
        h5 {
            font-size: 25px;
            margin-top: 20px;
        }

        .modal-body .form-group {
            margin-bottom: auto;
        }

        .modal-body .form-label {
            font-weight: bold;
        }

        .modal-body .form-input {
            width: 100%;
        }

        .modal-body .row-2 {
            display: flex;
            justify-content: space-between;
        }

        .modal-body .row-2 .form-group {
            flex: 1;
            margin-right: 1rem;
        }

        .modal-body .row-2 .form-group:last-child {
            margin-right: 0;
        }
    </style>
</head>

<body>
    <div class="nav-container">
        <br>
        <!-- Navbar -->
        <div class="container navbar-buttons">
            <button class="btn btn-primary" onclick="window.location.href='summary-of-reading.html'">SUMMARY OF READING</button>
            <button class="btn btn-primary" onclick="window.location.href='index_account_sa_darasa.php'">ACCOUNT</button>
            <button class="btn btn-primary" data-toggle="modal" data-target="#readingEntryModal">READING</button>
            <button class="btn btn-primary" onclick="window.location.href='members-profile.html'">MEMBER'S PROFILE</button>
            <button class="btn btn-primary" onclick="window.location.href='official-receipt.html'">OFFICIAL RECEIPT</button>
            <button class="btn btn-danger" onclick="window.location.href='daily-collection-report.html'">DAILY COLLECTION REPORT</button>
        </div>

        <!-- Secondary Buttons -->
        <div class="container secondary-buttons">
            <button class="btn btn-primary" onclick="window.location.href='water-rate.html'">WATER RATE</button>
            <button class="btn btn-primary" onclick="window.location.href='summary-nrdm.html'">SUMMARY NRDM</button>
            <button class="btn btn-primary" onclick="window.location.href='consumer_account.php'">STATEMENT OF ACCOUNT </button>
            <button class="btn btn-primary" onclick="window.location.href='disconnected.html'">DISCONNECTED</button>
            <button class="btn btn-primary" onclick="window.location.href='reconnected.html'">RECONNECTED</button>
            <button class="btn btn-primary" onclick="window.location.href='meter-replacement.html'">METER REPLACEMENT</button>
        </div>
        <br>
    </div>

    <!-- Updated grid layout for columns -->
    <div class="row-grid">
        <div class="column">
            <!-- <h2>Column 1</h2>
            <p>Some text..</p> -->
        </div>
        <div class="column">
            <img src="./assets/img/NEW-LOGO.png">
        </div>

        <div class="column">
            <div class="container ">
                <div class="row-content">
                    <br>
                    <br>
                    <br>
                    <h5 style="text-transform: uppercase;">Darasa Rural Waterworks and Sanitation Association, Inc.</h5>
                    <p style="color:blue;"><strong>907 Darasa, Tanauan City, Batangas</strong>
                        <br><br>
                        <strong>Mobile No:</strong> +639228940992<br>
                        <strong>Mobile No:</strong> +639209704531<br>
                        <strong>Tel No:</strong> (043) 778-7219<br>
                        <strong>TIN No:</strong> 005-739-474 NON VAT</p>
                    <br>
                    <p><strong>EST. AUGUST 01, 1983</strong></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Trigger Button -->

    <!-- Modal HTML -->
    <div class="modal fade" id="readingEntryModal" tabindex="-1" role="dialog" aria-labelledby="readingEntryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                    <button type="button" class="close position-absolute" style="right: 10px;" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Modal Content -->
                    <div class="nav-container">
                        <h1>READING ENTRY AND COMPUTATION</h1>
                    </div>
                    <div class="container d-flex justify-content-between align-items-center mb-3">
                        <p id="date" class="date mb-0" style="font-weight: bold;"></p>
                        <p id="time" class="time mb-0" style="font-weight: bold;"></p>
                    </div>
                    <div class="row">
                        <!-- First Column -->
                            <!-- First Row with two inputs -->
                             <div class="form-group">
                                <label for="searchConsumer" class="form-label">SEARCH CONSUMER:</label>
                                <input type="text" id="searchConsumer" class="form-input form-control" placeholder="Enter consumer name or account number">
                                <div id="resultsContainer" class="mt-2"></div>
                            </div>
                            <div class="form-group">
                                <label for="accountNum" class="form-label">ACCOUNT NO.:</label>
                                <input type="text" id="accountNum" class="form-input form-control"  readonly>
                            </div>

                            <!-- Second Row with two inputs -->
                            <div class="form-group">
                                <label for="name" class="form-label">NAME:</label>
                                <input type="text" id="name" class="form-input form-control"  readonly>
                            </div>
                            

                            <!-- Third Row with two inputs -->
                            <div class="row-2">
                                <div class="form-group">
                                    <label for="area" class="form-label">AREA:</label>
                                    <input type="text" id="area" class="form-input form-control"  readonly>
                                </div>

                                <div class="form-group">
                                    <label for="block" class="form-label">BLK/LOT:</label>
                                    <input type="text" id="block" class="form-input form-control"  readonly>
                                </div>
                            </div>

                            <!-- Fourth Row with two inputs -->
                            <div class="row-2">
                                <div class="form-group">
                                    <label for="presentReading" class="form-label">PRESENT:</label>
                                    <input type="number" id="presentReading" class="form-input form-control" placeholder="" required>
                                </div>
                            </div>

                            <!-- Fifth Row with two inputs -->
                            <div class="row-2">
                                <div class="form-group">
                                    <label for="previousReading" class="form-label">PREVIOUS:</label>
                                    <input type="number" id="previousReading" class="form-input form-control" placeholder="" required readonly>
                                </div>
                            </div>

                            <!-- Sixth Row with two inputs -->
                            <div class="row-2">
                                <div class="form-group">
                                    <label for="consumed" class="form-label">CONSUMED:</label>
                                    <input type="number" id="consumed" class="form-input form-control" placeholder="Enter consumed amount" required>
                                </div>

                                <div class="form-group">
                                    <label for="remarks" class="form-label">REMARKS:</label>
                                    <input type="text" id="remarks" class="form-input form-control" placeholder="Enter remarks" required>
                                </div>
                            </div>

                            <!-- Seventh Row -->
                            <div class="form-group">
                                <label for="totalCorrection" class="form-label">TOTAL COR:</label>
                                <input type="number" id="totalCorrection" class="form-input form-control" placeholder="" required>
                            </div>

                            <!-- Eighth Row -->
                            <div class="form-group">
                                <label for="amount" class="form-label">AMOUNT:</label>
                                <input type="number" id="amount" class="form-input form-control" placeholder="Enter amount" required>
                            </div>

                            <div class="row-2">
                                <div class="form-group">
                                    <label for="scDiscount" class="form-label">S.C DISCOUNT:</label>
                                    <input type="number" id="scDiscount" class="form-input form-control" placeholder="Enter discount" required>
                                </div>
                                <div class="form-group">
                                    <label for="year" class="form-label">YEAR:</label>
                                    <select name="year" id="year" class="form-control" required>
                                        <option value="">Select Year</option>
                                        <?php 
                                            $currentYear = date('Y');
                                            for ($i = $currentYear; $i >= 1983; $i--) {
                                                echo '<option value="' . $i . '">' . $i . '</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="percentDiscount" class="form-label">% DISCOUNT:</label>
                                <input type="text" id="percentDiscount" class="form-input form-control" placeholder="Enter discount percentage" required>
                            </div>

                            <div class="form-group">
                                <label for="month" class="form-label">MONTH:</label>
                                <select name="month" id="month" class="form-control">
                                    <option value="">Select Month</option>
                                    <?php 
                                        $months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                                        foreach ($months as $month) {
                                            echo '<option value="' . $month . '">' . $month . '</option>';
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="category" class="form-label">CATEGORY:</label>
                                <select name="category" id="category" class="form-control">
                                    <option value="Residential">Residential</option>
                                    <option value="Commercial">Commercial</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="dueDate" class="form-label">DUE DATE:</label>
                                <input type="date" id="dueDate" class="form-input form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="discDate" class="form-label">DISC. DATE:</label>
                                <input type="date" id="discDate" class="form-input form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="billingPeriod" class="form-label">BILLING PERIOD:</label>
                                <input type="date" id="billingPeriod" class="form-input form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="others" class="form-label">OTHERS:</label>
                                <input type="text" id="others" class="form-input form-control" placeholder="Enter other details" required>
                            </div>

                            <div class="form-group">
                                <label for="grandtotal" class="form-label">GRAND TOTAL:</label>
                                <input type="text" id="grandtotal" class="form-input form-control" placeholder="" readonly>
                            </div>

                            <div class="form-group">
                                <label for="searchByName" class="form-label">SEARCH BY NAME:</label>
                                <input type="search" id="searchByName" class="form-input form-control" placeholder="Enter consumer name to search">
                            </div>

                            <div class="form-group">
                                <label for="reader" class="form-label">READER:</label>
                                <input type="text" id="reader" class="form-input form-control" placeholder="Enter reader's name">
                            </div>
                            <!-- Buttons -->
                            <div class="form-group mt-4">
                              <button id="update" class="btn btn-success">UPDATE</button>
                              <button id="compute" class="btn btn-info">COMPUTE</button>
                              <button id="print" class="btn btn-warning">PRINT</button>
                              <button id="scDiscountButton" class="btn btn-success">S.C DISCOUNT</button>
                              <button id="percentDiscountButton" class="btn btn-info">% DISCOUNT</button>
                              <button id="oldMeterReading" class="btn btn-warning">OLD METER READING</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <link href="assets/vendor/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />

</body>

</html>
