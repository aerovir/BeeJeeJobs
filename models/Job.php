<?php

class Job
{

    public static function getJobsList()
    {


        $db = Db::getConnection();
        $jobList = array();

        $result = $db->query('SELECT id, username, email, job_text, status FROM jobs_table ORDER BY id ASC');

        $i = 0;
        //var_dump($result); die;
        while ($row = $result->fetch()){
            $jobList[$i]['id'] = $row['id'];
            $jobList[$i]['username'] = $row['username'];
            $jobList[$i]['email'] = $row['email'];
            $jobList[$i]['job_text'] = $row['job_text'];
            $jobList[$i]['status'] = $row['status'];
            $i++;
        }

        return $jobList;
    }

}