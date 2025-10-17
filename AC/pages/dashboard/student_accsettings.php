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
  <title>Account Settings | AcadEase</title>
  <link rel="stylesheet" href="/assets/css/all.min.css">
  <link rel="stylesheet" href="/assets/css/student_accsettings.css">
</head>
<body>
  <div class="settings-container">

    <h2>Account Settings</h2>
    <p class="subtitle">Manage your account preferences, security, and notification settings.</p>

    <!-- Notification Preferences -->
    <div class="settings-box">
      <h3><i class="fa-solid fa-bell"></i> Notification Preferences</h3>
      <p class="desc">Choose how you want to receive notifications about your appointments and account activity.</p>

      <div class="setting-option">
        <div><i class="fa-solid fa-envelope"></i> Email Reminders<p>Get email notification for apponintment reminders</p></div>
        
        <label class="switch"><input type="checkbox" checked><span class="slider"></span></label>
      </div>

      <div class="setting-option">
        <div><i class="fa-solid fa-comment-sms"></i> SMS Reminders<p>Receive text message reminders on your phone</p></div>
        <label class="switch"><input type="checkbox"><span class="slider"></span></label>
      </div>

      <div class="setting-option">
        <div><i class="fa-solid fa-calendar-check"></i> Appointment Updates<p>Notifications when appointments are scheduled, cancelled, or rescheduled</p></div>
        <label class="switch"><input type="checkbox" checked><span class="slider"></span></label>
      </div>

      <div class="setting-option">
        <div><i class="fa-solid fa-newspaper"></i> Weekly Digest<p>Weekly summary of your upcoming appointments</p></div>
        <label class="switch"><input type="checkbox"><span class="slider"></span></label>
      </div>

      <div class="setting-option">
        <div><i class="fa-solid fa-bullhorn"></i> Marketing Emails<P>Update about new features and platform improvements </P></div>
        <label class="switch"><input type="checkbox"><span class="slider"></span></label>
      </div>
    </div>

    <!-- Security System -->
    <div class="settings-box">
      <h3><i class="fa-solid fa-lock"></i> Security System</h3>
      <p class="desc">Manage your password and account security preferences.</p>

      <label>Current Password</label>
      <input type="password" placeholder="Enter your current password">

      <label>New Password</label>
      <input type="password" placeholder="Enter your new password">

      <label>Confirm Password</label>
      <input type="password" placeholder="Confirm your password">

      <button class="update-btn"><i class="fa-solid fa-lock"></i> Update Password</button>

      <div class="two-fa">
        <p><strong>Two-Factor Authentication</strong><br>Add an extra layer of security to your account.</p>
        <button class="enable-2fa">Enable 2FA</button>
      </div>

      <div class="login-sessions">
        <p><strong>Login Sessions</strong><br>Manage your active login sessions.</p>
        <button class="view-sessions">View Sessions</button>
      </div>
    </div>

<div class="danger-box">
  <h3><i class="fa-solid fa-triangle-exclamation"></i> Danger Zone</h3>
  <p class="desc">Irreversible and destructive actions</p>

  <div class="warning">
    <i class="fa-solid fa-circle-info"></i> Once you delete your account, there is no going back. Please be certain.
  </div>

<div class="danger-action-row">
  <div class="delete-info">
    <p class="delete-text">Delete Account</p>
    <p class="delete-desc">Permanently delete your account and all associated data</p>
  </div>
  <button class="delete-account">
    <i class="fa-solid fa-trash"></i> Delete Account
  </button>
</div>


  </div>
  <script src="/assets/js/script.js"></script>
</body>
</html>


