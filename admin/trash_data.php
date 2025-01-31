<?php include("topbar.php"); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Add Members Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Members Profile</a></li>
                <li class="breadcrumb-item active">Members Profile Information</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Start of Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Profile Information</h5>

                            <ul align="right">
                                <a href="add_customer_manager.php"><button type="button" class="btn btn-primary" title="Back to Dog Page"><i class="bi bi-arrow-left"></i>&nbsp;Back</button></a>                                    
                            </ul>

                            <form action="add_customer_manager.php" method="POST" id="addForm">
                            <div class="row-1">
                                <div class="col-3 mb-3">
                                    <label for="account_number" class="form-label">Account Number</label>
                                    <input type="text" class="form-control" id="account_number" name="account_number" required>
                                </div>
                        
                                <div class="col-3 mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                        
                                <div class="col-3 mb-3">
                                    <label for="area" class="form-label">Area</label>
                                    <input type="text" class="form-control" id="area" name="area" required>
                                </div>
                            </div>
                                <div class="col-3 mb-3">
                                    <label for="block" class="form-label">Block</label>
                                    <input type="text" class="form-control" id="block" name="block" required>
                                </div>
                        
                                <div class="col-3 mb-3">
                                    <label for="age" class="form-label">Age</label>
                                    <input type="number" class="form-control" id="age" name="age" required>
                                </div>
                        
                                <div class="col-3 mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <input type="text" class="form-control" id="status" name="status" required>
                                </div>
                        
                                <div class="col-3 mb-3">
                                    <label for="gender" class="form-label">Gender</label>
                                    <input type="text" class="form-control" id="gender" name="gender" required>
                                </div>
                        
                                <div class="col-3 mb-3">
                                    <label for="contact" class="form-label">Contact</label>
                                    <input type="text" class="form-control" id="contact" name="contact" required>
                                </div>
                        
                                <div class="col-3 mb-3">
                                    <label for="birthplace" class="form-label">Birthplace</label>
                                    <input type="text" class="form-control" id="birthplace" name="birthplace" required>
                                </div>
                        
                                <div class="col-3 mb-3">
                                    <label for="education_attainment" class="form-label">Educational Attainment</label>
                                    <input type="text" class="form-control" id="education_attainment" name="education_attainment" required>
                                </div>
                        
                                <div class="col-3 mb-3">
                                    <label for="family_member_1" class="form-label">Family Member 1</label>
                                    <input type="text" class="form-control" id="family_member_1" name="family_member_1">
                                </div>
                        
                                <div class="col-3 mb-3">
                                    <label for="family_member_2" class="form-label">Family Member 2</label>
                                    <input type="text" class="form-control" id="family_member_2" name="family_member_2">
                                </div>
                        
                                <div class="col-3 mb-3">
                                    <label for="family_member_3" class="form-label">Family Member 3</label>
                                    <input type="text" class="form-control" id="family_member_3" name="family_member_3">
                                </div>
                        
                                <div class="col-3 mb-3">
                                    <label for="income" class="form-label">Income</label>
                                    <input type="number" class="form-control" id="income" name="income">
                                </div>
                        
                                <div class="col-3 mb-3">
                                    <label for="cedula" class="form-label">Cedula</label>
                                    <input type="text" class="form-control" id="cedula" name="cedula">
                                </div>
                        
                                <div class="col-3 mb-3">
                                    <label for="clearance" class="form-label">Clearance</label>
                                    <input type="text" class="form-control" id="clearance" name="clearance">
                                </div>
                        
                                <div class="col-3 mb-3">
                                    <label for="meter_number" class="form-label">Meter Number</label>
                                    <input type="text" class="form-control" id="meter_number" name="meter_number">
                                </div>
                        
                                <div class="col-3 mb-3">
                                    <label for="date_filed" class="form-label">Date Filed</label>
                                    <input type="date" class="form-control" id="date_filed" name="date_filed">
                                </div>
                        
                                <div class="col-3 mb-3">
                                    <label for="birthday" class="form-label">Birthday</label>
                                    <input type="date" class="form-control" id="birthday" name="birthday">
                                </div>
                        
                                <div class="col-3 mb-3">
                                    <label for="amount" class="form-label">Amount</label>
                                    <input type="number" class="form-control" id="amount" name="amount">
                                </div>
                        
                                <div class="col-3 mb-3">
                                    <label for="month" class="form-label">Month</label>
                                    <input type="text" class="form-control" id="month" name="month">
                                </div>
                        
                                <div class="col-3 mb-3">
                                    <label for="beneficiary_1" class="form-label">Beneficiary 1</label>
                                    <input type="text" class="form-control" id="beneficiary_1" name="beneficiary_1">
                                </div>
                        
                                <div class="col-3 mb-3">
                                    <label for="beneficiary_2" class="form-label">Beneficiary 2</label>
                                    <input type="text" class="form-control" id="beneficiary_2" name="beneficiary_2">
                                </div>
                        
                                <div class="col-3 mb-3">
                                    <label for="beneficiary_3" class="form-label">Beneficiary 3</label>
                                    <input type="text" class="form-control" id="beneficiary_3" name="beneficiary_3">
                                </div>
                        
                                
                                    <div style="float:right;">
                                    <button type="button" class="btn btn-secondary" onclick="window.history.back();">Close</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    
                                    </div>
                        
                                </form>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Left side columns -->
        </div>
    </section>

</main><!-- End #main -->

<?php include("footer.php"); ?>

</body>


<script>
    <?php if($update_status == "success") { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Data updated successfully!',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'raw_materials_reports.php'; // Redirect after success
            }
        });
    <?php } elseif($update_status == "error") { ?>
        Swal.fire({
            title: 'Error!',
            text: 'There was an error updating the data.',
            icon: 'error',
            confirmButtonText: 'OK'
        });
    <?php } ?>
// Function to update total_inventory_price based on total_stocks_onhand and unit_price
function updateTotalInventoryPrice() {
    const totalStocksOnHand = parseFloat(document.getElementById('total_stocks_onhand').value) || 0;
    const unitPrice = parseFloat(document.getElementById('unit_price').value) || 0;

    const totalInventoryPrice = totalStocksOnHand * unitPrice;
    document.getElementById('total_inventory_price').value = totalInventoryPrice.toFixed(2); // Update the total_inventory_price field
}

// Add event listeners to update total_inventory_price when total_stocks_onhand or unit_price changes
document.getElementById('total_stocks_onhand').addEventListener('input', updateTotalInventoryPrice);
document.getElementById('unit_price').addEventListener('input', updateTotalInventoryPrice);

// Trigger the initial calculation on page load
updateTotalInventoryPrice();

// Function to handle increment and decrement of total_stocks_onhand
function updateStock(action) {
    let stockInput = document.getElementById('total_stocks_onhand');
    let currentStock = parseInt(stockInput.value) || 0;

    if (action === 'increase') {
        currentStock += 1; // Increase stock by 1
    } else if (action === 'decrease' && currentStock > 0) {
        currentStock -= 1; // Decrease stock by 1 (prevent going below 0)
    }

    stockInput.value = currentStock; // Update the input value

    // Optionally, update total_inventory_price after modifying total_stocks_onhand
    updateTotalInventoryPrice();
}
</script>

