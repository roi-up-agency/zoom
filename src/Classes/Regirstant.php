<?php 
namespace MacsiDigital\Zoom\Classes;

class User extends Model
{

    protected $attributes = [
        "id", // string
        "email", // string
        "first_name", // string
        "last_name", // string
        "address", // string
        "city", // string
        "country", // string
        "zip", // string
        "state", // string
        "phone", // string
        "industry", // string
        "org", // string
        "job_title", // string
        "purchasing_time_frame", // string
        "role_in_purchase_process", // string
        "no_of_employees", // string
        "comments", // string
        "custom_questions" = [
            "title", // string
            "value", // string
        ],
        "status", // string
        "create_time", // string [date-time]
        "join_url", // string [string]
    ];

}