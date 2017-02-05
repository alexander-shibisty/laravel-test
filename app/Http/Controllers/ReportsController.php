<?php 

namespace App\Http\Controllers;

class ReportsController extends Controller {

    public function showLogs() {
        return view('pages.logs');
    }

    public function showReports() {
        return view('pages.reports');
    }

}