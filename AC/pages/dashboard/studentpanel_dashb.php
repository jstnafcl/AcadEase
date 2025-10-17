<!-- TODO: include config/db_connect.php when ready -->
<?php
// TODO: Replace these placeholders with data fetched from the database.
$student_name = 'John Doe';
$student_id = 12345;
$appointments = [
    ['title' => 'Advising Session', 'datetime' => '2025-10-01 10:00', 'status' => 'Confirmed'],
    ['title' => 'Project Review', 'datetime' => '2025-10-07 14:00', 'status' => 'Pending'],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="/assets/css/studentpanel_dashb.css">
    <link rel="stylesheet" href="/assets/css/all.min.css">

</head>
<body>
<div class="container">

    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="logo">
        <img src="/assets/images/c:\Users\User\Downloads\FINAL_ACADEASE_LOGO.png" alt="AcadEase Logo">
      </div>
        <nav>
            <a href="studentpanel_dashb.html"><i class="fa-solid fa-gauge"></i> Overview</a>
            <a href="studentpanel_bookcon.html"><i class="fa-solid fa-calendar-check"></i> Book Consultation</a>
            <a href="studentpanel_appointment.html"><i class="fa-solid fa-list-check"></i> My Appointments</a>
            <a href="studentpanel_settings.html"><i class="fa-solid fa-gear"></i> Settings</a>
        </nav>
        
<div class="profile">
    <div class="profile-info">
        <div class="profile-icon">
            <i class="fa-solid fa-user"></i> 
        </div>
        <p><strong>Jill Halog</strong><br>BSIT</p>
    </div>
    <button class="signout">
        <i class="fa-solid fa-sign-out-alt"></i> <!-- Sign out icon -->Sign Out</button>
</div>
    </aside>

    <!-- Main Content -->
    <main class="main">
        <h1>Dashboard</h1>
        
        <!-- Stats Cards -->
        <div class="cards">
            <div class="card">
                <p>Upcoming Appointments</p>
                <h2>2</h2>
            </div>
            <div class="card">
                <p>Available Professors</p>
                <h2>2</h2>
            </div>
            <div class="card">
                <p>Completed Sessions</p>
                <h2>2</h2>
            </div>
        </div>

        <!-- Appointments -->
        <h2>Upcoming Appointments</h2>
        <div class="appointments">
            <?php foreach ($appointments as $a): ?>
                <div class="appointment">
                    <div>
                        <h3><?= $a["subject"]; ?></h3>
                        <p><?= $a["professor"]; ?></p>
                        <p><strong>Time:</strong> <?= $a["time"]; ?></p>
                        <p><strong>Location:</strong> <?= $a["location"]; ?></p>
                    </div>
                    <div class="right">
                        <span class="date"><?= $a["date"]; ?></span>
                        <div class="buttons">
                            <button class="reschedule">Reschedule</button>
                            <button class="cancel">Cancel</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</div>
  <script src="/assets/js/script.js"></script>
</body>
</html>
