<!-- TODO: include config/db_connect.php when ready -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Confirmation</title>
    
    <!-- Favicon -->
    <link href="acadease logo.svg" rel="icon">

    <link rel="stylesheet" href="\AC\assets\css\notification.css">
</head>
<body>
<div class="email-container">
        <div class="email-content">
            <div class="logo">
                <div class="logo-icon"><img src="\AC\assets\images\acadease_logo.svg" alt="AcadEase Logo"></div>
                <span class="logo-text">AcadEase</span>
            </div>

            <h1>Appointment Confirmation</h1>
            
            <div class="email-meta">From: notifications@acadease.com</div>
            <div class="email-meta">To: student@university.edu</div>

            <p class="greeting">Dear Jill Halog,</p>

            <p class="confirmation-text">Your consultation appointment has been successfully confirmed!</p>

            <div class="details-box">
                <div class="details-title">Appointment Details</div>
                
                <div class="detail-item">
                    <img src="\AC\assets\images\calendar-icon.svg" alt="Calendar Icon" class="icon">
                    <span>Friday, March 15, 2024</span>
                </div>

                <div class="detail-item">
                    <img src="\AC\assets\images\time-icon.svg" alt="Time Icon" class="icon">
                    <span>2:00 PM - 3:00 PM</span>
                </div>

                <div class="detail-item">
                    <img src="\AC\assets\images\professor-icon.svg" alt="Professor Icon" class="icon">
                    <span>Prof. JJ Narvasa</span>
                </div>

                <div class="detail-item">
                    <img src="\AC\assets\images\location-icon.svg" alt="Location Icon" class="icon">
                    <span>Table 5, CITE Faculty</span>
                </div>
            </div>

            <p class="reminder-text">You'll receive reminder notifications 24 hours and 1 hour before your appointment.</p>

            <div class="button-group">
                <button class="btn btn-primary">Add to Calendar</button>
                <button class="btn btn-secondary">View Details</button>
            </div>

            <div class="footer">
                <div class="footer-line">Best regards,</div>
                <div class="footer-line">The AcadEase Team</div>
            </div>
        </div>
    </div>
</body>
</html>