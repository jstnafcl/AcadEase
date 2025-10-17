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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Appointments - AcadEase</title>
  <link rel="stylesheet" href="/assets/css/all.min.css">
  <link rel="stylesheet" href="/assets/css/studentpanel_appointment.css">
</head>
<body>
  <div class="container">
    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="logo">
        <img src="/assets/images/FINAL_ACADEASE_LOGO.png" alt="AcadEase Logo">
      </div>
      <nav>
        <a href="studentpanel_dashb.html"><i class="fa-solid fa-gauge"></i> Overview</a>
        <a href="studentpanel_bookcon.html"><i class="fa-solid fa-calendar-check"></i> Book Consultation</a>
        <a class="active" href="studentpanel_appointment.html"><i class="fa-solid fa-list-check"></i> My Appointments</a>
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
    <main class="main-content">
      <h2>MY APPOINTMENTS</h2>

      <div class="appointments-container">
        <!-- Example appointment 1 -->
        <div class="appointment-card">
          <div class="appointment-info">
            <div>
              <p><strong>Prof.</strong></p>
              <p><strong>Date & Time</strong></p>
              <p><strong>Room</strong></p>
              <p><strong>Subject</strong></p>
            </div>
            <div>
              <p>Neon Palaming</p>
              <p>10/05/2025 - 7:00 - 9:00 am</p>
              <p>NH - 320</p>
              <p>Networking</p>
            </div>
            <div class="status approved">Approved</div>
          </div>

          <div class="appointment-actions">
            <button class="resched"><i class="fa-solid fa-pen"></i> Reschedule</button>
            <button class="cancel">Cancel</button>
          </div>
        </div>

        <!-- Example appointment 2 -->
        <div class="appointment-card">
          <div class="appointment-info">
            <div>
              <p><strong>Prof.</strong></p>
              <p><strong>Date & Time</strong></p>
              <p><strong>Room</strong></p>
              <p><strong>Subject</strong></p>
            </div>
            <div>
              <p>Neon Palaming</p>
              <p>10/05/2025 - 7:00 - 9:00 am</p>
              <p>NH - 320</p>
              <p>Cisco activity</p>
            </div>
            <div class="status pending">Pending</div>
          </div>

          <div class="appointment-actions">
            <button class="resched"><i class="fa-solid fa-pen"></i> Reschedule</button>
            <button class="cancel">Cancel</button>
          </div>
        </div>
      </div>
    </main>
  </div>
  <script src="/assets/js/script.js"></script>
</body>
</html>



