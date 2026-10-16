<?php

namespace App\Models;

class Job
{
    public static function all()
    {
        return [
            [
                "Name"=> "Ahmed Shweita",
                "Job title"=> "Software Engineer",
                "Salary"=> "$1000",
                "Location"=> "New Yourk"
            ],
            [
                "Name"=> "Mohamed",
                "Job title"=> "Product Manager",
                "Salary"=> "$1200",
                "Location"=> "San Francisco"
            ]
        ];
    }
}
