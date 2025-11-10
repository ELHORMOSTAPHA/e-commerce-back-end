<script>
    $(document).ready(function() {
        // Initialize any JavaScript needed for the Add User modal
        $('#add_user_form').on('submit', function(e) {
            e.preventDefault();
            // Perform form submission logic here
            alert('User added successfully!');
            $('#add_user').removeClass('kt-modal-show');
        });
    });
</script>