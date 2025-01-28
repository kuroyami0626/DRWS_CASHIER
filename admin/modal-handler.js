// modal-handler.js

function printReceipt() {
    // Get the form data
    var formData = {
        account: document.getElementById('account').value,
        name: document.getElementById('name').value,
        area: document.getElementById('area').value,
        block: document.getElementById('block').value,
        presentReading: document.getElementById('presentReading').value,
        oldReading: document.getElementById('oldReading').value,
        previousReading: document.getElementById('previousReading').value,
        check: document.getElementById('check').value,
        consumed: document.getElementById('consumed').value,
        remarks: document.getElementById('remarks').value,
        totalCorrection: document.getElementById('totalCorrection').value,
        amount: document.getElementById('amount').value,
        scDiscount: document.getElementById('scDiscount').value,
        freeCharge: document.getElementById('year').value,
        percentDiscount: document.getElementById('percentDiscount').value,
        month: document.getElementById('month').value,
        category: document.getElementById('category').value,
        dueDate: document.getElementById('dueDate').value,
        discDate: document.getElementById('discDate').value,
        billingPeriod: document.getElementById('billingPeriod').value,
        others: document.getElementById('others').value,
        grandtotal: document.getElementById('grandtotal').value,
        searchByName: document.getElementById('searchByName').value,
        reader: document.getElementById('reader').value
    };

    // Send the form data to update_local.php
    $.ajax({
        type: 'POST',
        url: 'update_local.php',
        data: formData,
        success: function(data) {
            alert('Data updated successfully!');
        },
        error: function() {
            alert('Error updating data. Please try again.');
        }
    });
}
