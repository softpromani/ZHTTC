<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\SSS;
use App\Mail\StudentSurvey;
use Illuminate\Support\Facades\Mail;
use App\Events\StudentSurveyEvent;
use Illuminate\Http\Request;
use Alert;
use Session;

class SSSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('home.student_survey');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required'    
        ]);
        
        $isExist = SSS::where('email', $request->email)->first();
        
        if($isExist){
            Session::flash('error', 'Survey already submitted');
            return redirect()->back();
        }

        $data =SSS::create([
            'filled_form' => $request->yesno,
            'age' => $request->age,
            'college_name'=>$request->college_name,
            'gender' => $request->gender,
            'email' => $request->email,
            'phone' => $request->phone,
            'degree' => $request->degree,
            'stream' => $request->stream,
            'syllabus' => $request->syllabus,
            'prepare' => $request->prepare,
            'communicate'=>$request->communicate,
            'approach' => $request->approach,
            'internal' => $request->internal,
            'performance' => $request->performance,
            'internship' => $request->internship,
            'mentoring' => $request->mentoring,
            'opportunity'=>$request->opportunity,
            'outcomes' => $request->outcomes,
            'followup' => $request->followup,
            'illustrate' => $request->illustrate,
            'identity' => $request->identity,
            'able' => $request->able,
            'effort'=>$request->effort,
            'method' => $request->method,
            'encourage' => $request->encourage,
            'inculcate' => $request->inculcate,
            'ict_percentage' => $request->ict_percentage,
            'quality' => $request->quality,
            'suggestion1'=>$request->suggestion1,
            'suggestion2' => $request->suggestion2,
            'suggestion3' => $request->suggestion3,
        ]);
        Mail::to($data->email)->send(new StudentSurvey($data));
        Session::flash('success', 'Survey submitted successfully');


        return redirect()->route('sss.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function allSss()
    {
        $surveys = SSS::paginate(20);
        //  dd($users);
        return view('admin.sss.index', compact('surveys'));
    }
    
    public function viewSession($id)
    {
        $view = SSS::find($id);
        //  dd($users);
        return view('admin.sss.viewsession', compact('view'));
    }
    
    public function sssExport()
    {
        $data = SSS::select(
            'filled_form',
            'college_name',
            'age',
            'gender',
            'email',
            'phone',
            'degree',
            'stream',
            'syllabus',
            'prepare',
            'communicate',
            'approach',
            'internal',
            'performance',
            'internship',
            'mentoring',
            'opportunity',
            'outcomes',
            'followup',
            'illustrate',
            'identity',
            'able',
            'effort',
            'method',
            'encourage',
            'inculcate',
            'ict_percentage',
            'quality',
            'suggestion1',
            'suggestion2',
            'suggestion3',
        )->get();

        $csvFileName = 'sss_exported_data.csv';
        $csvFilePath = storage_path('app/public/' . $csvFileName);

        $handle = fopen($csvFilePath, 'w');

        // Add CSV header
        fputcsv($handle, [
            'FILLED FORM',
            'COLLEGE NAME',
            'AGE',
            'GENDER',
            'EMAIL',
            'PHONE NUMBER',
            'DEGREE',
            'STREAM',
            'SYLLABUS',
            'PREPARE',
            'COMMUNICATE',
            'APPROACH',
            'INTERNAL',
            'PERFORMANCE',
            'INTERNSHIP',
            'MENTORING',
            'OPPORTUNITY',
            'OUTCOMES',
            'FOLLOW UP',
            'ILLUSTRATE',
            'IDENTITY',
            'ABLE',
            'EFFORT',
            'METHOD',
            'ENCOURAGE',
            'INCULCATE',
            'ICT PERCENTAGE',
            'QUALITY',
            'SUGGESTION 1',
            'SUGGESTION 2',
            'SUGGESTION 3',
        ]);

        // Add CSV rows
        foreach ($data as $row) {
           

            fputcsv($handle, [
                $row->filled_form,
                $row->college_name,
                $row->age,
                $row->gender,
                $row->email,
                $row->phone,
                $row->degree,
                $row->stream,
                $row->syllabus,
                $row->prepare,
                $row->communicate,
                $row->approach,
                $row->internal,
                $row->performance,
                $row->internship,
                $row->mentoring,
                $row->opportunity,
                $row->outcomes,
                $row->followup,
                $row->illustrate,
                $row->identity,
                $row->able,
                $row->effort,
                $row->method,
                $row->encourage,
                $row->inculcate,
                $row->ict_percentage,
                $row->quality,
                $row->suggestion1,
                $row->suggestion2,
                $row->suggestion3,
            ]);
        }

        fclose($handle);

        // Download the CSV file
        return response()->download($csvFilePath)->deleteFileAfterSend(true);
    }

}
