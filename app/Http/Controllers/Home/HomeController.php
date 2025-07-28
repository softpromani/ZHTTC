<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\EventGallery;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Notice;
use App\Models\Non_Teacher;
use App\Models\Teacher;
use App\Models\AQAR;
use App\Models\Banner;
use App\Models\Event;
use App\Models\SSR;
use Illuminate\Support\Facades\Log as FacadesLog;
use Log;

class HomeController extends Controller
{
    public function index() {
        $sliders = Banner::where('deleted_at',NULL)->get();
        $events = Event::where('deleted_at',NULL)->latest()->take(8)->get();
        $notices = Notice::where('deleted_at',NULL)->latest()->take(10)->get();

        return view('user.index', compact('sliders','events', 'notices'));
    }

    public function aboutCollege() {
        return view('user.about_college');
    }

    public function aboutManagement() {
        return view('user.about_management');
    }

    public function secretaryMessage() {
        return view('user.secretary_message');
    }

    public function visionMission() {
        return view('user.vision_mission');
    }

    // public function chancellor() {
    //     return view('user.about_college');
    // }

    public function viceChancellorDesk() {
        return view('user.vice_chancellor_desk');
    }

    public function pricnpalDesk() {
        return view('user.principal_desk');
    }

    public function collegeAchievments() {
        return view('user.strategic_plan');
    }

    public function academics() {
        return view('user.academics');
    }

    public function admission() {
        return view('user.admission');
    }

    public function courses() {
        return view('user.courses');
    }

    public function teachingStaff() {
        $teachings = Teacher::where('deleted_at',NULL)->get();
        return view('user.teaching_staff', compact('teachings'));
    }

    public function nonTeachingStaff() {
        $non_teachings = Non_Teacher::where('deleted_at',NULL)->get();
        return view('user.non_teaching_staff', compact('non_teachings'));
    }

    public function ourPride() {
        return view('user.our_pride');
    }

    public function scholarly() {
        return view('user.scholarly');
    }

    public function coCurricularActivities() {
        return view('user.co_curricular_activities');
    }

    public function communityResources() {
        return view('user.community_resources');
    }

    public function mandatoryDisclosure() {
        return view('user.mandatory_disclosure');
    }

    public function regualtion() {
        return view('user.regulation');
    }

    public function library() {
        return view('user.library');
    }

    public function laboratories() {
        return view('user.laboratories');
    }

    public function seminarHall() {
        return view('user.seminar_hall');
    }

    public function playground() {
        return view('user.playground');
    }

    public function contactUs() {
        return view('user.contact');
    }

    public function dElEd() {
        return view('user.d_el_ed');
    }

    public function bEd() {
        return view('user.b_ed');
    }

    public function mEd() {
        return view('user.m_ed');
    }

    public function saveContact(Request $request) {
        $data = [
            'email' => $request->email,
            'name' => $request->name,
            'mobile' => $request->mobile,
            'message' => $request->message
        ];
        if(Contact::create($data)) {
            return back()->with('success', 'Contact send successfully');
        }
        else {
            return back()->with('failed', 'Oh! Contact did not send successfully');
        }
    }

    public function otherCell() {
        $topnotice = Notice::where('deleted_at',NULL)->latest()->first();
        return view('user.other_cell', compact('topnotice'));
    }

    function tenders() {
        $topnotice = Notice::where('deleted_at',NULL)->latest()->first();
        return view('user.tenders', compact('topnotice'));
    }

    function careerPlacementCell() {
        $topnotice = Notice::where('deleted_at',NULL)->latest()->first();
        return view('user.career_placement_cell', compact('topnotice'));
    }

    function collegeDevelopmentCommittee() {
        $topnotice = Notice::where('deleted_at',NULL)->latest()->first();
        return view('user.college_development_committee', compact('topnotice'));
    }

    function disciplinaryAdmissionCommittee() {
        $topnotice = Notice::where('deleted_at',NULL)->latest()->first();
        return view('user.disciplinary_admission_committee', compact('topnotice'));
    }

    function grievanceAntiraggingCell() {
        $topnotice = Notice::where('deleted_at',NULL)->latest()->first();
        return view('user.grievance_antiragging_cell', compact('topnotice'));
    }

    function IQAC() {
        $topnotice = Notice::where('deleted_at',NULL)->latest()->first();
        return view('user.internal_quality_assurance_cell', compact('topnotice'));
    }

    function advisoryCommittee() {
        $topnotice = Notice::where('deleted_at',NULL)->latest()->first();
        return view('user.advisory_committee', compact('topnotice'));
    }

    function womenCell() {
        $topnotice = Notice::where('deleted_at',NULL)->latest()->first();
        return view('user.women_cell', compact('topnotice'));
    }

    function steeringCommittee() {
        $topnotice = Notice::where('deleted_at',NULL)->latest()->first();
        return view('user.steering_committee', compact('topnotice'));
    }

    function aqar() {
        $topnotice = Notice::where('deleted_at',NULL)->latest()->first();
        $data = AQAR::where('deleted_at',NULL)->get();
        return view('user.aqar', compact('topnotice', 'data'));
    }

    function ssr() {
        $topnotice = Notice::where('deleted_at',NULL)->latest()->first();
        $data = SSR::where('deleted_at',NULL)->get();
        return view('user.ssr', compact('topnotice', 'data'));
    }

}
