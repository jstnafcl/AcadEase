<!-- TODO: include config/db_connect.php when ready -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Status</title>
        
    <!-- Favicon -->
    <link href="acadease logo.svg" rel="icon">
    
    <link rel="stylesheet" href="assets/css/booking_status.css">
</head>
<div class="status-card">
        <div class="card-header">
            <img src="/assets/images/booking_status.svg" alt="Logo" class="logo">
            <h1 class="card-title">Booking Status</h1>
        </div>

        <div class="status-content">
            <img src="/assets/images/pending_icon.svg" alt="Pending Icon" class="status-icon">

            <h2 class="status-heading">Awaiting Confirmation</h2>
            
            <p class="status-description">
                Please review the appointment details and click "Confirm Booking" to proceed.
            </p>

            <span class="status-badge">Pending Confirmation</span>
        </div>
    </div>
</body>
</html>