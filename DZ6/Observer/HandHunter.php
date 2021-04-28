<?php
namespace Observer;

class HandHunter implements ISubject
{
    private $_observers;
    private $_job;

    public function __construct()
    {
        $this->$_observers = new \SplObjectStorage();
    }

    public function registerObserver(IObserver $observer)
    {
        $this->$_observers->attach($observer);
    }

    public function removeObserver(IObserver $observer)
    {
        $this->$_observers->detach($observer);
    }

    public function setJob(Job $job)
    {
        $this->_job = $job;
        $this->_notifyObservers();
    }

    private function _notifyObservers()
    {
        foreach ($this->_observers as $observer) {
            $observer->update($this->_job);
        }
    }
}
