<?php
require_once 'Event.php';
require_once 'EventsApp.php';

// Instantiate objects and execute methods
$eventsApp1 = new EventsApp();
$eventsApp2 = new EventsApp();

$event1 = new Event('PHP OOP live session', '2023-12-10', 'Online');
$event2 = new Event('Python side event', '2023-12-12', 'In-person');

$event3 = new Event('Workshop on Java', '2023-12-15', 'Online');
$event4 = new Event('HTML5 quiz', '2023-12-18', 'In-person');

$eventsApp1->addEvent($event1);
$eventsApp1->addEvent($event2);

$eventsApp2->addEvent($event3);
$eventsApp2->addEvent($event4);

echo 'Events in app 1:<br>';
$events = $eventsApp1->getEvents();
foreach ($events as $index => $event) {
    echo ($index + 1) . '. ' . $event->name . ' on ' . $event->date . ' at ' . $event->location . '<br>';
}

echo 'Events in app 2:<br>';
$events = $eventsApp2->getEvents();
foreach ($events as $index => $event) {
    echo ($index + 1) . '. ' . $event->name . ' on ' . $event->date . ' at ' . $event->location . '<br>';
}
?>