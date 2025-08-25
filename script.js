document.addEventListener('DOMContentLoaded', function() {
 
    // Get references to form elements
    const donationAmountRadios = document.querySelectorAll('input[name="donation_amount"]');
    const otherAmountInput = document.getElementById('other-amount');
 
    const recurringCheckbox = document.getElementById('recurring');
    const monthlyCreditInput = document.getElementById('monthly-credit');
    const monthsInput = document.getElementById('months');
    
    const donationForm = document.getElementById('donationForm');
 
    // --- Event Listener for Donation Amount ---
    donationAmountRadios.forEach(radio => {
        radio.addEventListener('change', function() {
            if (document.getElementById('other').checked) {
                // Enable 'Other Amount' input if 'Other' is selected
                otherAmountInput.disabled = false;
                otherAmountInput.focus();
            } else {
                // Disable and clear it otherwise
                otherAmountInput.disabled = true;
                otherAmountInput.value = '';
            }
        });
    });
 
    // --- Event Listener for Recurring Donation ---
    recurringCheckbox.addEventListener('change', function() {
        const isChecked = this.checked;
        // Enable/disable monthly donation fields based on checkbox state
        monthlyCreditInput.disabled = !isChecked;
        monthsInput.disabled = !isChecked;
        
        // Clear values if unchecked
        if (!isChecked) {
            monthlyCreditInput.value = '';
            monthsInput.value = '';
        }
    });
 
    // --- Form Submission Validation (Basic Example) ---
    donationForm.addEventListener('submit', function(event) {
        // Prevent the form from actually submitting
        event.preventDefault(); 
        
        let isValid = true;
        let missingFields = [];
 
        // Check required fields
        const requiredInputs = document.querySelectorAll('[required]');
        requiredInputs.forEach(input => {
            if (!input.value.trim()) {
                isValid = false;
                // Get the label associated with the input
                const label = document.querySelector(`label[for="${input.id}"]`);
                if(label) {
                   missingFields.push(label.innerText.replace('*', '').trim());
                }
            }
        });
 
        if (isValid) {
            alert('Thank you for your donation!');
            // Here you would typically send the data to a server
            // For example: donationForm.submit();
        } else {
            alert('Please fill out all required fields: \n - ' + missingFields.join('\n - '));
        }
    });
});
 