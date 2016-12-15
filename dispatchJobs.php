// pa make:job CompileReports
// pa make:controller ReportsController

<?php
Route::get('reports','ReportsController@compile');


// another file
<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\CompileReports;

class ReportsController extends Controller
{
    public function compile(){
    	$this->dispatch(new CompileReports);
    	return 'the job has been dispatched.';
    }
}

// another file
<?php
namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CompileReports implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        var_dump('compiling in the job instance.');
    }
}
