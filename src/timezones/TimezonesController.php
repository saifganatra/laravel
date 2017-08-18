<?php
namespace Laraveldaily\Timezones;
 
use App\Http\Controllers\Controller;
use Carbon\Carbon;
 
class TimezonesController extends Controller
{
 
    public function index($timezone)
    {
        echo "Current time in ". $timezone. " is ".Carbon::now($timezone)->toDateTimeString();
    }
 
}
?>
