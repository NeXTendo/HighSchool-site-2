document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        events: [
            {
                title: 'School Opening Ceremony',
                start: '2024-11-01',
                description: 'Welcome to the new academic year!'
            },
            {
                title: 'Science Fair',
                start: '2024-11-05',
                description: 'See the best science projects from our students.'
            },
            // Add more events here
        ]
    });
    calendar.render();
});
