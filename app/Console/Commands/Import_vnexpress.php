<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ArticlesController;

class Import_vnexpress extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import_vnexpress:santo {myc}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import_vnexpress 1: do || 2: undo';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $myc = $this->argument('myc');
        $h = new HomepageController;
        $h->import_vnexpress($myc);
        $h->vnexpress_set_important_news();
        $a = new ArticlesController;
        $a->get_extra_content();
        $a->update_main_img();
    }
}
