<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
	// scope query
    public function scopeFilter($query, QueryFilter $filters){
    	return $filters->apply($query);
    }
}

// used as following:
<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    public function index(LessonFilters $filters){
    	return Lesson::filter($filters)->get();
    }
}
