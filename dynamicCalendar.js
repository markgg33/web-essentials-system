const monthYear = document.getElementById("monthYear");
const calendarDays = document.getElementById("calendarDays");
const prevMonthBtn = document.getElementById("prevMonthBtn");
const nextMonthBtn = document.getElementById("nextMonthBtn");

let currentDate = new Date();

function renderCalendar() {
    const month = currentDate.getMonth();
    const year = currentDate.getFullYear();

    // Set the month-year title
    monthYear.textContent = `${currentDate.toLocaleString("default", { month: "long" })} ${year}`;

    // Get the first and last day of the month
    const firstDayOfMonth = new Date(year, month, 1).getDay();
    const lastDateOfMonth = new Date(year, month + 1, 0).getDate();

    // Get the last date of the previous month
    const lastDateOfPrevMonth = new Date(year, month, 0).getDate();

    // Clear previous dates
    calendarDays.innerHTML = "";

    // Days from previous month
    for (let i = firstDayOfMonth; i > 0; i--) {
        const day = document.createElement("div");
        day.classList.add("day", "prev-month");
        day.textContent = lastDateOfPrevMonth - i + 1;
        calendarDays.appendChild(day);
    }

    // Current month days
    for (let i = 1; i <= lastDateOfMonth; i++) {
        const day = document.createElement("div");
        day.classList.add("day");
        day.textContent = i;

        // Highlight today's date
        if (
            i === new Date().getDate() &&
            month === new Date().getMonth() &&
            year === new Date().getFullYear()
        ) {
            day.classList.add("today");
        }

        calendarDays.appendChild(day);
    }

    // Next month days to fill calendar (if needed)
    const totalDays = firstDayOfMonth + lastDateOfMonth;
    const nextDays = 7 - (totalDays % 7);

    for (let i = 1; i < nextDays; i++) {
        const day = document.createElement("div");
        day.classList.add("day", "next-month");
        day.textContent = i;
        calendarDays.appendChild(day);
    }
}

// Event listeners for month navigation
prevMonthBtn.addEventListener("click", () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    renderCalendar();
});

nextMonthBtn.addEventListener("click", () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    renderCalendar();
});

// Initialize calendar
renderCalendar();
