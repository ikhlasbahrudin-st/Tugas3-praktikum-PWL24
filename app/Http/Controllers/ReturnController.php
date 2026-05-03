<?php

namespace App\Http\Controllers;

use App\Models\ReturnModel;
use App\Models\LoanDetail;
use Illuminate\Http\Request;

class ReturnController extends Controller
{
    public function index()
    {
        return ReturnModel::with('loanDetail.book')->get();
    }

    public function store(Request $request)
    {
        $return = ReturnModel::create($request->all());

        LoanDetail::where('id', $request->loan_detail_id)
            ->update(['is_return' => true]);

        return $return;
    }
}