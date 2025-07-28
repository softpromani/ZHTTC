<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AqarController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\CriteriaController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SessionWiseController;
use App\Http\Controllers\Home\EventGalleryController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\Home\SSSController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SSRController;
use App\Http\Controllers\Admin\SSRCriteriaController;
use App\Http\Controllers\Home\DepartmentController as HomeDepartmentController;
use App\Http\Controllers\Home\EventController as HomeEventController;

// Frontend Routes

Route::get('/', [HomeController::class,'index'])->name('index');
Route::get('/about-college', [HomeController::class,'aboutCollege'])->name('about-college');
Route::get('/about-management', [HomeController::class,'aboutManagement'])->name('about-management');
Route::get('/vision-mission', [HomeController::class,'visionMission'])->name('vision-mission');
Route::get('/chancellor', [HomeController::class,'chancellor'])->name('chancellor');
Route::get('/secretary-message', [HomeController::class,'secretaryMessage'])->name('secretary-message');
Route::get('/vice-chancellor-desk', [HomeController::class,'viceChancellorDesk'])->name('vice-chancellor-desk');
Route::get('/principal-desk', [HomeController::class,'pricnpalDesk'])->name('principal-desk');
Route::get('/strategic-plan', [HomeController::class,'collegeAchievments'])->name('strategic-plan');

Route::get('/academics', [HomeController::class,'academics'])->name('academics');
Route::get('/admission', [HomeController::class,'admission'])->name('admission');
Route::get('/courses', [HomeController::class,'courses'])->name('courses');
Route::get('/teaching-staff', [HomeController::class,'teachingStaff'])->name('teaching-staff');
Route::get('/non-teaching-staff', [HomeController::class,'nonTeachingStaff'])->name('non-teaching-staff');
Route::get('/our-pride', [HomeController::class,'ourPride'])->name('our-pride');
Route::get('/scholarly', [HomeController::class,'scholarly'])->name('scholarly');
Route::get('/co-curricular-activities', [HomeController::class,'coCurricularActivities'])->name('co-curricular-activities');
Route::get('/community-resources', [HomeController::class,'communityResources'])->name('community-resources');
Route::get('/mandatory-disclosure', [HomeController::class,'mandatoryDisclosure'])->name('mandatory-disclosure');

Route::get('/regualtion', [HomeController::class,'regualtion'])->name('regualtion');
Route::get('/library', [HomeController::class,'library'])->name('library');
Route::get('/laboratories', [HomeController::class,'laboratories'])->name('laboratories');
Route::get('/seminar-hall', [HomeController::class,'seminarHall'])->name('seminar-hall');
Route::get('/playground', [HomeController::class,'playground'])->name('playground');

Route::get('/d-el-ed', [HomeController::class,'dElEd'])->name('dElEd');
Route::get('/b-ed', [HomeController::class,'bEd'])->name('bEd');
Route::get('/m-ed', [HomeController::class,'mEd'])->name('mEd');

Route::get('/contact-us', [HomeController::class,'contactUs'])->name('contact-us');
Route::post('/savecontact', [HomeController::class,'saveContact'])->name('savecontact');

Route::get('/other-cell', [HomeController::class,'otherCell'])->name('othercell');

Route::get('/allnotice', [HomeController::class,'allNotice'])->name('allnotice');

Route::get('/tenders', [HomeController::class,'tenders'])->name('tenders');

Route::get('/career_placement_cell', [HomeController::class,'careerPlacementCell'])->name('career_placement_cell');
Route::get('/college_development_committee', [HomeController::class,'collegeDevelopmentCommittee'])->name('college_development_committee');
Route::get('/disciplinary_admission_committee', [HomeController::class,'disciplinaryAdmissionCommittee'])->name('disciplinary_admission_committee');
Route::get('/grievance_antiragging_cell', [HomeController::class,'grievanceAntiraggingCell'])->name('grievance_antiragging_cell');
Route::get('/iqac', [HomeController::class,'IQAC'])->name('iqac');
Route::get('/advisory_committee', [HomeController::class,'advisoryCommittee'])->name('advisory_committee');
Route::get('/women_cell', [HomeController::class,'womenCell'])->name('women_cell');
Route::get('/steering_committee', [HomeController::class,'steeringCommittee'])->name('steering_committee');
Route::get('/aqar', [HomeController::class,'aqar'])->name('aqar');
Route::get('/ssr', [HomeController::class,'ssr'])->name('ssr');

Route::resource('event', HomeEventController::class);
Route::resource('event-gallery', EventGalleryController::class);
Route::resource('department', HomeDepartmentController::class);





// Backend Routes
Route::get('/admin',[LoginController::class, 'index'])->name('admin');
Route::post('/login',[LoginController::class, 'store'])->name('login');

Route::group(['prefix'=>'admin','as'=>'admin.', 'middleware' => 'auth'],function(){
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
    Route::get('/logout',[AdminController::class,'logout'])->name('logout');

    Route::resource('/user', UserController::class);
    Route::get('user-profile/{id?}',[UserController::class,'profile'])->name('profile');
    Route::get('edit-user-profile/{id?}',[UserController::class,'editProfile'])->name('editprofile');
    Route::post('user-profile-update',[UserController::class,'updateProfile'])->name('userupdate');
    Route::post('user-pass-update',[UserController::class,'updatePassword'])->name('uppass');

    Route::resource('/role', RoleController::class);
    Route::resource('/permission', PermissionController::class);
    Route::get('/role-has-permission',[PermissionController::class,'rolePermission'])->name('rolePermission');
    Route::post('/fetch-permission',[PermissionController::class,'fetchPermission'])->name('fetchPermission');
    Route::post('/assign-permission',[PermissionController::class,'assignPermission'])->name('assignPermission');
    Route::resource('/notice', NoticeController::class);
    Route::resource('/event', EventController::class);
    Route::resource('/gallery', GalleryController::class);
    Route::resource('/aqar', AqarController::class);
    Route::resource('/criteria', CriteriaController::class);
    Route::resource('/banner', BannerController::class);
    Route::resource('/department', DepartmentController::class);
    Route::resource('/faculty', FacultyController::class);
    Route::resource('/sessionwise', SessionWiseController::class);

    Route::get('/all-sss', [SSSController::class, 'allSss'])->name('allSss');
    Route::get('/sss-export', [SSSController::class, 'sssExport'])->name('sssExport');
    Route::get('/view-session-sss/{id}', [SSSController::class, 'viewSession'])->name('viewSession');

    //SSR
    Route::resource('/ssr', SSRController::class);
    Route::resource('/ssrcriteria', SSRCriteriaController::class);


});

Route::get('lockscreen', [UserController::class, 'lockscreen'])->name('lockscreen');


Route::get('/optimize', function(){
    Artisan::call('optimize');
});
Route::get('/optimize-clear', function(){
    Artisan::call('optimize:clear');
});

Route::get('eslm',[HomeController::class,'eslm']);




