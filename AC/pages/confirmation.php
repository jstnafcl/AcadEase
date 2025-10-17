<!-- TODO: include config/db_connect.php when ready -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Confirmation</title>
    
    <!-- Favicon -->
    <link href="acadease logo.svg" rel="icon">

    <link rel="stylesheet" href="assets/css/confirmation.css">
</head>
<body>
<div class="card">
        <div class="card-header">
            <img src="assets/images/check-icon.svg" alt="Check Icon" class="header-icon">
            <h1 class="card-title">Appointment Summary</h1>
        </div>

        <div class="professor-section">
            <div class="professor-avatar"><img src=""></div>
            <div class="professor-info">
                <div class="professor-name">Prof. JJ Narvasa</div>
                <div class="professor-department">Project Management</div>
                <span class="professor-title">Professor</span>
            </div>
        </div>

        <div class="detail-item">
            <img src="assets/images/calendar-icon.svg" alt="Calendar Icon" class="detail-icon">
            <span>Friday, March 15, 2025</span>
        </div>

        <div class="detail-item">
            <img src="assets/images/time-icon.svg" alt="Time Icon" class="detail-icon">
            <div class="detail-content">
                <span>2:00 PM - 3:00 PM</span>
                <span class="duration-badge">60 minutes</span>
            </div>
        </div>

        <div class="detail-item">
            <img src="assets/images/location-icon.svg" alt="Location Icon" class="detail-icon">
            <span>Table 5, CITE Faculty</span>
        </div>

        <div class="detail-item">
            <img src="assets/images/briefcase-icon.svg" alt="Briefcase Icon" class="detail-icon">
            <span>Project Management</span>
        </div>

        <div class="contact-section">
            <h2 class="contact-title">Contact Information</h2>
            
            <div class="contact-item">
                <img src="assets/images/email-icon.svg" alt="Email Icon" class="contact-icon">    
                <span>jj.narvasa@phinmaed.com</span>
            </div>

            <div class="contact-item">
                <img src="assets/images/phone-icon.svg" alt="Phone Icon" class="contact-icon">
                <span>+63 1235 265 1526</span>
            </div>
        </div>

        <div class="button-group">
            <button class="btn btn-primary">
                <img src="assets/images/check-icon.svg" alt="Check Icon" class="btn-icon">
                Confirm Booking
            </button>
            <button class="btn btn-secondary">
                <img src="assets/images/calendar-icon.svg" alt="Calendar Icon" class="btn-icon">
                Choose Different Time
            </button>
        </div>
    </div>
</body>
</html>