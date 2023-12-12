<?php
class Event
{
    // Properties
    protected $name;
    protected $date;
    protected $location;

    // Magic Constructor
    public function __construct($name, $date, $location)
    {
        $this->name = $name;
        $this->date = $date;
        $this->location = $location;
    }

    // Magic Method: __get
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    // Magic Method: __set
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
        return $this;
    }

    // Magic Method: __isset
    public function __isset($property)
    {
        return isset($this->$property);
    }

    // Magic Method: __unset
    public function __unset($property)
    {
        unset($this->$property);
    }
}

?>