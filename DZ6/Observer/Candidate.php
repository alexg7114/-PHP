<?php
namespace Observer;

class Candidate implements IObserver
{
    private $name;
    private $workExperience;
    private $email;
    public function update(Job $job)
    {
        echo "Новая вакансия {$job->getName()}";
    }
}
