/**
 * Template Name: INSPINIA - Multipurpose Admin & Dashboard Template
 * By (Author): WebAppLayers
 * Module/App (File Name): Apps Calendar
 * Version: 4.2.0
 */

class CalendarSchedule {

    constructor() {
        this.body = document.body;
        this.modal = new bootstrap.Modal(document.getElementById('event-modal'), {backdrop: 'static'});
        this.calendar = document.getElementById('calendar');
        this.formEvent = document.getElementById('forms-event');
        this.btnNewEvent = document.querySelectorAll('.btn-new-event');
        this.btnDeleteEvent = document.getElementById('btn-delete-event');
        this.btnSaveEvent = document.getElementById('btn-save-event');
        this.modalTitle = document.getElementById('modal-title');
        this.calendarObj = null;
        this.selectedEvent = null;
        this.newEventData = null;
    }

    onEventClick(info) {
        this.formEvent?.reset();
        this.formEvent.classList.remove('was-validated');
        this.newEventData = null;
        this.btnDeleteEvent.style.display = "block";
        this.modalTitle.text = ('Edit Event');
        this.modal.show();
        this.selectedEvent = info.event;
        document.getElementById('event-title').value = this.selectedEvent.title;
        const categoryInput = document.getElementById('event-category');
        if (categoryInput) {
            const {classNames} = this.selectedEvent;
            categoryInput.value = Array.isArray(classNames) ? classNames.join(' ') : classNames || '';
        }
    }

    onSelect(info) {
        this.formEvent?.reset();
        this.formEvent?.classList.remove('was-validated');
        this.selectedEvent = null;
        this.newEventData = info;
        this.btnDeleteEvent.style.display = "none";
        this.modalTitle.text = ('Add New Event');
        this.modal.show();
        this.calendarObj.unselect();
    }

    init() {
        /*  Initialize the calendar  */
        const today = new Date();
        const self = this;
        const externalEventContainerEl = document.getElementById('external-events');

        new FullCalendar.Draggable(externalEventContainerEl, {
            itemSelector: '.external-event',
            eventData: function (eventEl) {
                return {
                    title: eventEl.innerText,
                    classNames: eventEl.getAttribute('data-class')
                };
            }
        });

        const defaultEvents = [{
            title: 'Interview - Backend Engineer',
            start: today,
            end: today,
            className: 'bg-primary-subtle text-primary border-start border-3 border-primary'
        },
            {
                title: 'Design Sprint Planning',
                start: new Date(Date.now() + 16000000),
                end: new Date(Date.now() + 20000000),
                className: 'bg-info-subtle text-info border-start border-3 border-info'
            },
            {
                title: 'Project Kick-off Meeting',
                start: new Date(Date.now() + 400000000),
                end: new Date(Date.now() + 440000000),
                className: 'bg-purple-subtle text-purple border-start border-3 border-purple'
            },
            {
                title: 'UI/UX Design Review',
                start: new Date(Date.now() + 80000000),
                end: new Date(Date.now() + 180000000),
                className: 'bg-warning-subtle text-warning border-start border-3 border-warning'
            },
            {
                title: 'Code Review - Frontend',
                start: new Date(Date.now() + 200000000),
                end: new Date(Date.now() + 220000000),
                className: 'bg-success-subtle text-success border-start border-3 border-success'
            },
            {
                title: 'Team Stand-up Meeting',
                start: new Date(Date.now() + 340000000),
                end: new Date(Date.now() + 345000000),
                className: 'bg-secondary-subtle text-secondary border-start border-3 border-secondary'
            },
            {
                title: 'Client Presentation Prep',
                start: new Date(Date.now() + 1200000000),
                end: new Date(Date.now() + 1300000000),
                className: 'bg-danger-subtle text-danger border-start border-3 border-danger'
            },
            {
                title: 'Backend API Integration',
                start: new Date(Date.now() + 2500000000),
                end: new Date(Date.now() + 2600000000),
                className: 'bg-dark-subtle text-dark border-start border-3 border-dark'
            }];

        // cal - init
        self.calendarObj = new FullCalendar.Calendar(self.calendar, {

            plugins: [],
            slotDuration: '00:30:00', /* If we want to split day time each 15minutes */
            slotMinTime: '07:00:00',
            slotMaxTime: '19:00:00',
            themeSystem: 'bootstrap',
            bootstrapFontAwesome: false,
            buttonText: {
                today: 'Today',
                month: 'Month',
                week: 'Week',
                day: 'Day',
                list: 'List',
                prev: 'Prev',
                next: 'Next'
            },
            initialView: 'dayGridMonth',
            handleWindowResize: true,
            height: window.innerHeight - 240,
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
            },
            initialEvents: defaultEvents,
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            // dayMaxEventRows: false, // allow "more" link when too many events
            selectable: true,
            dateClick: function (info) {
                self.onSelect(info);
            },
            eventClick: function (info) {
                self.onEventClick(info);
            }
        });

        self.calendarObj.render();

        // on new event button click
        self.btnNewEvent.forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                self.onSelect({
                    date: new Date(),
                    allDay: true
                });
            });
        });

        // save event
        self.formEvent?.addEventListener('submit', function (e) {
            e.preventDefault();
            const form = self.formEvent;

            // validation
            if (form.checkValidity()) {
                if (self.selectedEvent) {
                    self.selectedEvent.setProp('title', document.getElementById('event-title').value);
                    self.selectedEvent.setProp('classNames', document.getElementById('event-category').value)

                } else {
                    const eventData = {
                        title: document.getElementById('event-title').value,
                        start: self.newEventData.date,
                        allDay: self.newEventData.allDay,
                        className: document.getElementById('event-category').value
                    };
                    self.calendarObj.addEvent(eventData);
                }
                self.modal.hide();
            } else {
                e.stopPropagation();
                form.classList.add('was-validated');
            }
        });

        // delete event
        self.btnDeleteEvent.addEventListener('click', function (e) {
            if (self.selectedEvent) {
                self.selectedEvent.remove();
                self.selectedEvent = null;
                self.modal.hide();
            }
        });
    }

}

document.addEventListener('DOMContentLoaded', function (e) {
    new CalendarSchedule().init();
});