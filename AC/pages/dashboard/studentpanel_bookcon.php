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

<!-- studentpanel_bookcon.html (Updated) -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Consultation - AcadEase</title>
  <link rel="stylesheet" href="/assets/css/all.min.css">
  <link rel="stylesheet" href="/assets/css/studentpanel_bookcon.css">
</head>
<body>
  <div class="container">
    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="logo">
        <img src="c LOGO.png:\Users\User\Downloads\FINAL ACADEASE" alt="AcadEase Logo">
      </div>
      <nav>
        <a href="studentpanel_dashb.html"><i class="fa-solid fa-gauge"></i> Overview</a>
        <a href="studentpanel_bookcon.html"><i class="fa-solid fa-calendar-check"></i> Book Consultation</a>
        <a href="studentpanel_appointment.html"><i class="fa-solid fa-list-check"></i> My Appointments</a>
        <a href="studentpanel_settings.html"><i class="fa-solid fa-gear"></i> Settings</a>
      </nav>

      <div class="profile">
        <div class="profile-info">
          <div class="profile-icon"><i class="fa-solid fa-user"></i></div>
          <p><strong>Jill Halog</strong><br>BSIT</p>
        </div>
        <button class="signout"><i class="fa-solid fa-sign-out-alt"></i> Sign Out</button>
      </div>
    </aside>

    <!-- Main Content -->
    <div class="book-consultation-container">
      <h2>Book Consultation</h2>

      <!-- Search Bar -->
      <div class="search-bar">
        <input type="text" placeholder="Search professors by name, department, or expertise...">
      </div>

      <!-- Professor Cards -->
      <div class="professors-container">
        <div class="professor-card">
          <div class="professor-info">
            <img src="/assets/images/847969.png" class="professor-img">
            <div>
              <h3>Prof. Joy Lovendino</h3>
              <p>Computer Science</p>
              <span class="tag">Database</span>
            </div>
          </div>
          <div class="professor-footer">
            <p>Available for consultation</p>
            <button>View Calendar</button>
          </div>
        </div>

        <div class="professor-card">
          <div class="professor-info">
            <img src="/assets/images/847969.png" class="professor-img">
            <div>
              <h3>Prof. Neon Palaming</h3>
              <p>Information Technology</p>
              <span class="tag">Networking</span>
            </div>
          </div>
          <div class="professor-footer">
            <p>Available for consultation</p>
            <button>View Calendar</button>
          </div>
        </div>

        <div class="professor-card">
          <div class="professor-info">
            <img src="/assets/images/847969.png" class="professor-img">
            <div>
              <h3>Prof. JJ Narvasa</h3>
              <p>Information Technology</p>
              <span class="tag">Project Management</span>
            </div>
          </div>
          <div class="professor-footer">
            <p>Available for consultation</p>
            <button>View Calendar</button>
          </div>
        </div>

        <div class="professor-card">
          <div class="professor-info">
            <img src="/assets/images/847969.png" class="professor-img">
            <div>
              <h3>Prof. Yuri Rancudo</h3>
              <p>Computer Science</p>
              <span class="tag">OOP</span>
            </div>
          </div>
          <div class="professor-footer">
            <p>Available for consultation</p>
            <button>View Calendar</button>
          </div>
        </div>
      </div>

      <!-- Professor Availability -->
      <div class="availability-section">
        <h2>Professor Availability</h2>
        <div class="availability-grid">
          <!-- Professor Details -->
          <div class="prof-details">
            <h3>Professor Details</h3>
            <div class="prof-avatar"></div>
            <p class="prof-name"><strong>JJ Narvasa</strong></p>
            <p class="prof-subject">Project Management</p>
            <p class="prof-info">📍 NH – 203</p>
            <p class="prof-info">🕒 Office Hours: Mon – Fri | 8AM – 5PM</p>

            <div class="legend">
              <h4>Legend</h4>
              <p><span class="legend-box available"></span> Available</p>
              <p><span class="legend-box unavailable"></span> Unavailable</p>
              <p><span class="legend-box selected"></span> Selected</p>
            </div>
          </div>

          <!-- Calendar & Time Slots -->
          <div class="calendar-time-container">
            <!-- Dynamic Calendar (kept same style) -->
            <div class="calendar-container">
              <div class="calendar-header">
                <button id="prevMonth">◀</button>
                <h2 id="monthYear"></h2>
                <button id="nextMonth">▶</button>
              </div>
              <div class="calendar-body">
                <div class="calendar-weekdays">
                  <div>Sun</div><div>Mon</div><div>Tue</div><div>Wed</div><div>Thu</div><div>Fri</div><div>Sat</div>
                </div>
                <div class="calendar-dates" id="calendarDates"></div>
              </div>
            </div>

            <!-- Time Slots -->
            <div class="time-slots">
              <p class="slot-title">Available Time Slots for Thursday, September 2025</p>
              <div class="slots-grid">
                <div class="slot booked"><span class="time">7:00 – 9:00</span><span class="status">Booked</span></div>
                <div class="slot booked"><span class="time">9:00 – 10:00</span><span class="status">Booked</span></div>
                <div class="slot booked"><span class="time">10:00 – 11:00</span><span class="status">Booked</span></div>
                <div class="slot available"><span class="time">11:00 – 12:00</span><span class="status">Available</span></div>
                <div class="slot available"><span class="time">1:00 – 2:00</span><span class="status">Available</span></div>
                <div class="slot booked"><span class="time">2:00 – 3:00</span><span class="status">Booked</span></div>
                <div class="slot booked"><span class="time">3:00 – 4:00</span><span class="status">Booked</span></div>
                <div class="slot available"><span class="time">4:00 – 5:00</span><span class="status">Available</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end of book-consultation-container -->
  </div>
  <script src="/assets/js/script.js"></script>
</body>
</html>
