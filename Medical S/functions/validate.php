<?php
    // functio to check
    function CheckEmpty($value)
    {
        if(empty($value))
        {
            return false;
        }
        else 
        {
            return true;
        }
    }

    // Email : if Valid
    function ValidEmail($email)
    {
        // للتحقق من ان البري الالكتروني قابل للادخال
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) // filter to valid
        {
            return true;
        }
        else
        {
            return false;
        }
    }