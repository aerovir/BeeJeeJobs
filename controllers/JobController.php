<?php

include_once ROOT . '/models/Job.php';

class JobController
{

    public function actionIndex()
    {

        $jobList = array();
        $jobList = Job::getJobsList();

        echo '<pre>';
        print_r($jobList);
        echo '</pre>';

        //echo 'JobController actionIndex';
        return true;

    }

}