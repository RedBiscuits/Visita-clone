<?php
use App\Models\Subscription;
use App\Models\Worktime;
use App\Models\Doctor;

// Calculate doctor profit

function docotrProfit($id)
{

    $total = 0;

    return $total;
}

// Check if doctor has package

function doctorPackage($id)
{

        $package = Subscription::where('doctor_id', $id)->where('status', 1)->first();

        if ($package) {

            return true;
        }

        return false;
}


// Packages Duration

function packageDuration()
{
    $duration = [];

    for ($i = 1; $i <= 12; $i++) {

        $duration[$i] = $i;
    }

    return $duration;
}



function weakDays()
{
    $days = [
        'Saturday'  => 'Saturday',
        'Sunday'    => 'Sunday',
        'Monday'    => 'Monday',
        'Tuesday'   => 'Tuesday',
        'Wednesday' => 'Wednesday',
        'Thursday'  => 'Thursday',
        'Friday'    => 'Friday',
    ];

    return $days;
}


function appoinmentType($type)
{
    if ($type == 1) {
        return  '<span class="badge badge-success">clinic</span>';
    } elseif ($type == 2) {
        return  '<span class="badge badge-info">home</span>';
    } elseif ($type == 3) {
        return  '<span class="badge badge-warning">video</span>';
    } else {
        return 'unknown';
    }

}


function appoinmentStatus($status)
{
    if ($status == 1) {

        return  '<span class="badge badge-success">accepted</span>';

    } elseif ($status == 2) {

        return  '<span class="badge badge-info">pending</span>';

    } elseif ($status == 3) {

        return  '<span class="badge badge-warning">rejected</span>';

    } elseif ($status == 0) {

        return  '<span class="badge badge-primary">New</span>';
    } else {

        return 'unknown';
    }

}


function doctorAvailable($id)
{

    $workingDays = Worktime::where('doctor_id', $id)->where('day', date('l'))->first();

    if ($workingDays) {

       return $workingDays;

    }else{

        return false;
    }
}
