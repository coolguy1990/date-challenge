<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use App\Services\DateService;

class Inspire extends Command
{
    protected $date;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'inspire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display an inspiring quote';

    public function __construct(DateService $date)
    {
        parent::__construct();

        $this->date = $date;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
//        $this->comment(PHP_EOL.Inspiring::quote().PHP_EOL);

        //diff in days
        dd($this->date->diffOfDays('01-01-2013', '20-03-2016', true, 'Asia/Aden', 'Asia/Ashgabat'));

        //diff in weekdays
       // dd($this->date->diffOfWeekdays('01-03-2013', '31-03-2016', true));

        //diff in weeks
       // dd($this->date->diffOfWeeks('01-03-2013', '31-03-2016', true));

    }
}
