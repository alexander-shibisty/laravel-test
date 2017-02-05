<?php 

namespace App\Http\Controllers;

use App\Models\Report;

class ReportsController extends Controller {

    public function showLogs() {
        $logs = Report::getList();

        return view('pages.logs', [
            'logs' => $logs,
        ]);
    }

    public function showReports() {
        return view('pages.reports');
    }

}