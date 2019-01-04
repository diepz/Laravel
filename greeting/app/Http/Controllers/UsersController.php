<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\employeeExport;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function export()
    {
        return Excel::download(new employeeExport, 'users.xlsx');
    }
}
