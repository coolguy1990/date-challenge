<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Mockery as m;

class DateServiceTest extends TestCase
{
    public function testDiffOfDays()
    {
    	$date = app('App\Services\DateService');

    	$diffOfDays = $date->diffOfDays('01-01-2013', '20-03-2016');

    	$this->assertEquals('1174', $diffOfDays);
    }

    public function testDiffOfDaysInTimeFormat()
    {
    	$date = app('App\Services\DateService');

    	$diffOfDays = $date->diffOfDays('01-01-2013', '20-03-2016', true);

    	$this->assertEquals('3 Years, 2 Months, 19 Days', $diffOfDays);
    }

    public function testDiffOfDaysWithTimeZone()
    {
    	$date = app('App\Services\DateService');

    	$diffOfDays = $date->diffOfDays('01-01-2013', '20-03-2016', false, 'Asia/Aden', 'Asia/Ashgabat');

    	$this->assertEquals('1174', $diffOfDays);
    }

    public function testDiffOfDaysInTimeFormatAndTimeZone()
    {
    	$date = app('App\Services\DateService');

    	$diffOfDays = $date->diffOfDays('01-01-2013', '20-03-2016', true, 'Asia/Aden', 'Asia/Ashgabat');

    	$this->assertEquals('3 Years, 2 Months, 19 Days', $diffOfDays);
    }

    public function testDiffOfWeekdays()
    {
    	$date = app('App\Services\DateService');

    	$diffOfWeekdays = $date->diffOfWeekdays('01-01-2013', '20-03-2016');

    	$this->assertEquals('839', $diffOfWeekdays);	
    }

    public function testDiffOfWeekdaysInTimeFormat()
    {
    	$date = app('App\Services\DateService');

    	$diffOfWeekdays = $date->diffOfWeekdays('01-01-2013', '20-03-2016', true);

    	$this->assertEquals('2 Years, 3 Months, 19 Days', $diffOfWeekdays);	
    }

    public function testDiffOfWeekdaysWithTimeZone()
    {
    	$date = app('App\Services\DateService');

    	$diffOfWeekdays = $date->diffOfWeekdays('01-01-2013', '20-03-2016', false, 'Asia/Aden', 'Asia/Ashgabat');

    	$this->assertEquals('839', $diffOfWeekdays);
    }

    public function testDiffOfWeekdaysInTimeFormatAndTimeZone()
    {
    	$date = app('App\Services\DateService');

    	$diffOfWeekdays = $date->diffOfWeekdays('01-01-2013', '20-03-2016', true, 'Asia/Aden', 'Asia/Ashgabat');

    	$this->assertEquals('2 Years, 3 Months, 19 Days', $diffOfWeekdays);
    }

    public function testDiffOfWeeks()
    {
    	$date = app('App\Services\DateService');

    	$diffOfWeeks = $date->diffOfWeeks('01-01-2013', '20-03-2016');

    	$this->assertEquals('167', $diffOfWeeks);	
    }

    public function testDiffOfWeeksInTimeFormat()
    {
    	$date = app('App\Services\DateService');

    	$diffOfWeeks = $date->diffOfWeeks('01-01-2013', '20-03-2016', true);

    	$this->assertEquals('5 Months, 17 Days', $diffOfWeeks);	
    }

    public function testDiffOfWeeksWithTimeZone()
    {
    	$date = app('App\Services\DateService');

    	$diffOfWeeks = $date->diffOfWeeks('01-01-2013', '20-03-2016', false, 'Asia/Aden', 'Asia/Ashgabat');

    	$this->assertEquals('167', $diffOfWeeks);
    }

    public function testDiffOfWeeksInTimeFormatAndTimeZone()
    {
    	$date = app('App\Services\DateService');

    	$diffOfWeeks = $date->diffOfWeeks('01-01-2013', '20-03-2016', true, 'Asia/Aden', 'Asia/Ashgabat');

    	$this->assertEquals('5 Months, 17 Days', $diffOfWeeks);
    }
}
