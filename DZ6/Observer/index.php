<?php
namespace Observer;
use Observer\Candidate;
use Observer\Job;
use Observer\HandHunter;

require_once('IObserver.php');
require_once('ISubject.php');
require_once('job.php');
require_once('HandHunter.php');
require_once('Candidate.php');

$job = new Job();
$job->setName('PHP-программист');

$candidate = new Candidate();

$handHunter = new HandHunter();
$handHunter->registerObserver($candidate);
$handHunter->setJob($job);
