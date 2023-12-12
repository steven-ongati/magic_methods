<?php
class EventsApp
{
    // Constant
    const MAX_EVENTS = 5;

    // Properties
    protected $events = [];
    protected $numEvents = 0;

    // Methods
    public function addEvent(Event $event)
    {
        if ($this->numEvents < self::MAX_EVENTS) {
            $this->events[] = $event;
            $this->numEvents++;
        } else {
            echo 'Maximum number of events reached.';
        }
    }

    public function getEvents()
    {
        return $this->events;
    }
}
?>