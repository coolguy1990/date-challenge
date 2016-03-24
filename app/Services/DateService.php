<?php

namespace App\Services;

use Carbon\Carbon;
use Carbon\CarbonInterval;

class DateService
{
    protected $carbon;

    public function __construct(Carbon $carbon)
    {
        $this->carbon = $carbon;
    }

    public function diffOfDays($dateOne, $dateTwo, $param = false, $timeZoneOne = null, $timeZoneTwo = null)
    {
        $dateOne = $this->carbon->createFromFormat('d-m-Y', $dateOne, $timeZoneOne);
        $dateTwo = $this->carbon->createFromFormat('d-m-Y', $dateTwo, $timeZoneTwo);

        $diffInDays = $dateOne->diffInDays($dateTwo);

        if ($param) {
            $diffInDays = $this->getDateTime($diffInDays);
        }

        return $diffInDays;
    }

    public function diffOfWeekdays($dateOne, $dateTwo, $param = false, $timeZoneOne = null, $timeZoneTwo = null)
    {
        $dateOne = $this->carbon->createFromFormat('d-m-Y', $dateOne, $timeZoneOne);
        $dateTwo = $this->carbon->createFromFormat('d-m-Y', $dateTwo, $timeZoneTwo);

        $diffInWeekdays = $dateOne->diffInWeekdays($dateTwo);

        if ($param) {
            $diffInWeekdays = $this->getDateTime($diffInWeekdays);
        }

        return $diffInWeekdays;
    }

    public function diffOfWeeks($dateOne, $dateTwo, $param = false, $timeZoneOne = null, $timeZoneTwo = null)
    {
        $dateOne = $this->carbon->createFromFormat('d-m-Y', $dateOne, $timeZoneOne);
        $dateTwo = $this->carbon->createFromFormat('d-m-Y', $dateTwo, $timeZoneTwo);

        $diffInWeeks = $dateOne->diffInWeeks($dateTwo);

        if ($param) {
            $diffInWeeks = $this->getDateTime($diffInWeeks);
        }

        return $diffInWeeks;
    }

    protected function getDateTime($diff)
    {
        $years = floor($diff / (365));
        $months = floor(($diff - $years * 365) / (30));
        $days = floor(($diff - $years * 365 - $months * 30));

        return (($years > 0) ? $years . ' Year' . ($years > 1 ? 's' : '') . ', ' : '') . (($months > 0) ? $months . ' Month' . ($months > 1 ? 's' : '') . ', ' : '') . (($days > 0) ? $days . ' Day' . ($days > 1 ? 's' : '') : '');
    }
}
