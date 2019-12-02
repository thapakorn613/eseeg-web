<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeUser;
class DoctorController extends Controller
{
    public function showListDoctor()
    {
        $users = DB::table('users')->get();
        return view('Advice', ['users' => $users]);
    }
    public function showChart_Realtime($id)
    {
        $patient = DB::table('patient')
            ->where('id', $id)->first();
        $status_chart = DB::table('status_chart')
            ->where('patient_id', $patient->id)->first();
        return view('chart.realtimeChart', ['patient' => $patient, 'status_chart' => $status_chart]);
    }
    public function showChart_Realtime_test()
    {
        $patient = DB::table('patient')
            ->where('id', 1)->first();
        $status_chart = DB::table('status_chart')
            ->where('patient_id', $patient->id)->first();
        return view('chart.realtimeChart', ['patient' => $patient, 'status_chart' => $status_chart]);
    }
    public function showChart_Log($id)
    {
        $patient = DB::table('patient')
            ->where('id', $id)->first();
        $status_chart = DB::table('status_chart')
            ->where('patient_id', $patient->id)->first();
        return view('chart.logChart', ['patient' => $patient, 'status_chart' => $status_chart]);
    }
    public function showChart_Log_test()
    {
        $patient = DB::table('patient')
            ->where('id', 1)->first();
        $status_chart = DB::table('status_chart')
            ->where('patient_id', $patient->id)->first();
        return view('chart.logChart', ['patient' => $patient, 'status_chart' => $status_chart]);
    }
    public function showListPatient()
    {
        $patients_EM = DB::table('patient')
            ->where('type_disease', 'EM')->get();
        $patients_NM = DB::table('patient')
            ->where('type_disease', 'NM')->get();
        $patients_NT = DB::table('patient')
            ->where('type_disease', 'NT')->get();
        return view('Patient', ['patients_EM' => $patients_EM, 'patients_NM' => $patients_NM, 'patients_NT' => $patients_NT]);
    }
    public function showListEM()
    {
        $users = Auth::user();
        $patient = DB::table('patient')
            ->where('type_disease', 'EM')->get();
        return view('Emergency', ['users' => $users, 'patient' => $patient]);
    }
}