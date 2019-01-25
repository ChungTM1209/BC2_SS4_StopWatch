<?php
/**
 * Created by PhpStorm.
 * User: chungtran
 * Date: 24/01/2019
 * Time: 14:07
 */

class StopWatch
{
    private $startTime;
    private $endTime;
    public function __construct()
    {
        $this->startTime = date('h:m:s');
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }
    public function startTime(){
        $this->startTime = date('h:i:s');
    }
    public function stopTime(){
        $this->endTime = date('h:i:s');
    }
    public function getElapsedTime(){
        return strtotime($this->endTime) - strtotime($this->startTime);
    }
}