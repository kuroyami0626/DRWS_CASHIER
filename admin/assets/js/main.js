$(document).ready(function() {
    $('#print').on('click', function() {
        // Gather data from the modal inputs
        var data = {
            account_number: $('#account').val(), // Updated key
            name: $('#name').val(),
            area: $('#area').val(),
            block: $('#block').val(),
            present_reading: $('#presentReading').val(), // Updated key
            old_reading: $('#oldReading').val(), // Updated key
            previous_reading: $('#previousReading').val(), // Updated key
            consumed: $('#consumed').val(),
            remarks: $('#remarks').val(),
            total_correction: $('#totalCorrection').val(), // Updated key
            amount: $('#amount').val(),
            sc_discount: $('#scDiscount').val(), // Updated key
            free_charge: $('#freeCharge').val(), // Updated key
            percent_discount: $('#percentDiscount').val(), // Updated key
            month: $('#month').val(),
            category: $('#category').val(),
            due_date: $('#dueDate').val(), // Updated key
            disc_date: $('#discDate').val(), // Updated key
            billing_period: $('#billingPeriod').val(), // Updated key
            others: $('#others').val(),
            grandtotal: $('#grandtotal').val(),
            reader: $('#reader').val()
        };

        // Send data to receipt.php as JSON and handle the response
        $.ajax({
            type: 'POST',
            url: 'admin/receipt.php', // Ensure this path is correct
            data: JSON.stringify(data),
            contentType: 'application/json',
            success: function(response) {
                // Handle success (e.g., show a success message or redirect)
                alert('Data sent successfully!');
            },
            error: function() {
                // Handle error
                alert('Error sending data.');
            }
        });
    });
});
