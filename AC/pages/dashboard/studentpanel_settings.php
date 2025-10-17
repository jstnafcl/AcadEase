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
  <title>Student Panel - Settings | AcadEase</title>
  <link rel="stylesheet" href="/assets/css/all.min.css">
  <link rel="stylesheet" href="/assets/css/studentpanel_settings.css">
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
    <main class="main-content">
      <h2>Student Panel - Settings</h2>

      <div class="profile-header">
        <div class="profile-summary">
          <div class="profile-pic">
            <i class="fa-solid fa-user"></i>
          </div>
          <div class="profile-text">
            <h3>Jill Halog</h3>
            <p>BSIT - 3rd Year</p>
            <button class="student-btn">Student</button>
          </div>
        </div>
        <button class="edit-profile"><i class="fa-solid fa-pen"></i> Edit Profile</button>
      </div>

      <!-- Personal and Academic Details -->
      <div class="info-sections">
        <div class="personal-details box">
            <h3><i class="fa-solid fa-user"></i> Personal Details</h3>
            <p><strong>Full Name</strong>
                <div class="detail-box">Jill Halog</div>
            </p>
            <p><strong>Email Address</strong>
                <div class="detail-box"><i class="fa-solid fa-envelope"></i> jila.halog.up@phinmaed.com</div>
            </p>
            <p><strong>Phone Number</strong>
                <div class="detail-box">+63 912 345 6789</div>
            </p>
            <p><strong>Address</strong>
                <div class="detail-box">358 San Fabian, Pangasinan</div>
            </p>
        </div>
        
        <div class="academic-details">
            <h3><i class="fa-solid fa-graduation-cap"></i> Academic Information</h3>
            <p><strong>Student ID</strong># 03 - 01 - 2425 - 450069</p>
            <br>
            <p><strong>Course</strong></p>
        
            <input type="text" value="BSIT" readonly class="readonly-box">
            <div class="year-track">
                <div class="column">
                    <label>Year Level</label>
                    <input type="text" value="3rd Year" readonly class="readonly-box">
                </div>
                <div class="column">
                    <label>Track</label>
                    <input type="text" value="Computer Security" readonly class="readonly-box">
                </div>
            </div>
            <br>
            <p><strong>Bio</strong></p>
            <div class="bio-box">
                Computer Security student passionate about web development and software engineering
            </div>
        </div>

      </div>

      <!-- Account Settings -->
      <div class="account-settings box">
        <h3>Account Settings</h3>
        <p>Manage your account preferences and security settings.</p>

        <div class="setting-item">
          <div>
            <strong>Email Notifications</strong><br>
            <p>Receive appointment reminders and updates.</p>
          </div>
          <button class="change-btn">Change</button>
        </div>

        <div class="setting-item">
          <div>
            <strong>Change Password</strong><br>
            <p>Update your account password.</p>
          </div>
          <button class="change-btn">Change</button>
        </div>

        <div class="setting-item">
          <div>
            <strong>Delete Account</strong><br>
            <p>Permanently delete your account and data.</p>
          </div>
          <button class="delete-btn">Delete</button>
        </div>
      </div>
    </main>
  </div>
  <script src="/assets/js/script.js"></script>
</body>
</html>



