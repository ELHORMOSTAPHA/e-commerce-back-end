<script>
$(document).ready(function(){
    const submitBtn = $('#submit');
    const submitText = $('#submit-text');
    const submitSpinner = $('#submit-spinner');
    const signInForm = $('#sign_in_form');
    const url=signInForm.attr('action')

    // Handle form submission
    signInForm.on('submit', function(e) {
        e.preventDefault();
        // Show spinner and update button text
        submitBtn.prop('disabled', true);
        submitText.text('Processing...');
        submitSpinner.removeClass('hidden');
        
        // AJAX login request
        $.ajax({
            url,
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                try {
                    const result = typeof response === 'string' ? JSON.parse(response) : response;
                    if (result.status === 'success') {
                        // Redirect to dashboard on successful login
                        window.location.href += 'dashboard';
                    } else {
                        // Show error message
                        console.log('Login failed: ' + result.status)
                        resetButton();
                    }
                } catch(e) {
                    alert('Error processing response');
                    resetButton();
                }
            },
            error: function(xhr) {
                // Handle error
                alert('Network error. Please try again.');
                resetButton();
            }
        });
    });
    
    // Reset button to original state
    function resetButton() {
        submitBtn.prop('disabled', false);
        submitText.text('Sign In');
        submitSpinner.addClass('hidden');
    }
})

</script>