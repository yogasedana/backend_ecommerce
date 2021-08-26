<?php

namespace App\Controllers;

class LogActivity extends BaseController
{
    public function view_log_activity()
    {
        $data = [
            'title' => 'Log Activity'
        ];

        return view('log/vw_log_activity', $data);
    }
}
