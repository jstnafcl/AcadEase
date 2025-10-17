document.addEventListener("DOMContentLoaded", function () {
  const editBtn = document.querySelector(".edit-profile");
  const mainContent = document.querySelector(".main-content");

  // Create Save button dynamically
  const saveBtn = document.createElement("button");
  saveBtn.textContent = "Save Changes";
  saveBtn.classList.add("save-profile");
  saveBtn.style.display = "none"; // hidden initially
  mainContent.appendChild(saveBtn);

  editBtn.addEventListener("click", function () {
    const inputs = document.querySelectorAll(".readonly-box");
    const detailBoxes = document.querySelectorAll(".detail-box");
    const bioBox = document.querySelector(".bio-box");

    // Toggle edit mode
    const isEditing = editBtn.classList.toggle("editing");

    if (isEditing) {
      editBtn.innerHTML = '<i class="fa-solid fa-pen"></i> Editing...';
      saveBtn.style.display = "inline-block";

      // Convert detail boxes into input fields
      detailBoxes.forEach((box) => {
        const text = box.textContent.trim();
        const input = document.createElement("input");
        input.type = "text";
        input.value = text;
        input.className = "edit-input";
        box.replaceWith(input);
      });

      // Make readonly fields editable
      inputs.forEach((input) => {
        input.removeAttribute("readonly");
        input.classList.add("editing-box");
      });

      // Turn bio into textarea
      const bioText = bioBox.textContent.trim();
      const textarea = document.createElement("textarea");
      textarea.value = bioText;
      textarea.className = "edit-textarea";
      bioBox.replaceWith(textarea);
    } else {
      // Cancel edit mode
      editBtn.innerHTML = '<i class="fa-solid fa-pen"></i> Edit Profile';
      saveBtn.style.display = "none";
    }
  });

  // Save button functionality
  saveBtn.addEventListener("click", function () {
    const inputs = document.querySelectorAll(".edit-input");
    const readonlyInputs = document.querySelectorAll(".editing-box");
    const textarea = document.querySelector(".edit-textarea");

    // Replace edited input fields with text boxes again
    inputs.forEach((input) => {
      const value = input.value.trim();
      const box = document.createElement("div");
      box.className = "detail-box";
      box.textContent = value;
      input.replaceWith(box);
    });

    // Reapply readonly
    readonlyInputs.forEach((input) => {
      input.setAttribute("readonly", true);
      input.classList.remove("editing-box");
    });

    // Replace textarea with bio box
    const newBio = document.createElement("div");
    newBio.className = "bio-box";
    newBio.textContent = textarea.value.trim();
    textarea.replaceWith(newBio);

    // Reset buttons
    editBtn.innerHTML = '<i class="fa-solid fa-pen"></i> Edit Profile';
    editBtn.classList.remove("editing");
    saveBtn.style.display = "none";

    alert("Profile changes saved successfully!");
  });
});


// ===== Dynamic Calendar =====
const monthYear = document.getElementById('monthYear');
const calendarDates = document.getElementById('calendarDates');
const prevMonthBtn = document.getElementById('prevMonth');
const nextMonthBtn = document.getElementById('nextMonth');

let currentDate = new Date();

function renderCalendar(date) {
  const year = date.getFullYear();
  const month = date.getMonth();
  const firstDay = new Date(year, month, 1);
  const lastDay = new Date(year, month + 1, 0);
  const startDay = firstDay.getDay();
  const totalDays = lastDay.getDate();

  monthYear.textContent = date.toLocaleString('default', { month: 'long', year: 'numeric' });
  calendarDates.innerHTML = '';

  for (let i = 0; i < startDay; i++) {
    const emptyDiv = document.createElement('div');
    calendarDates.appendChild(emptyDiv);
  }

  for (let day = 1; day <= totalDays; day++) {
    const dayDiv = document.createElement('div');
    dayDiv.textContent = day;
    const today = new Date();
    if (day === today.getDate() && month === today.getMonth() && year === today.getFullYear()) {
      dayDiv.classList.add('today');
    }
    calendarDates.appendChild(dayDiv);
  }
}

prevMonthBtn.addEventListener('click', () => {
  currentDate.setMonth(currentDate.getMonth() - 1);
  renderCalendar(currentDate);
});

nextMonthBtn.addEventListener('click', () => {
  currentDate.setMonth(currentDate.getMonth() + 1);
  renderCalendar(currentDate);
});

renderCalendar(currentDate);
