<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\LoanDetail;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index()
    {
        return Loan::with('user', 'details.book')->get();
    }

    public function store(Request $request)
    {
        $loan = Loan::create([
            'user_npm' => $request->user_npm,
            'loan_at' => $request->loan_at,
            'return_at' => $request->return_at
        ]);

        foreach ($request->books as $book_id) {
            LoanDetail::create([
                'loan_id' => $loan->id,
                'book_id' => $book_id
            ]);
        }

        return $loan;
    }

    public function show($id)
    {
        return Loan::with('user', 'details.book')->findOrFail($id);
    }

    public function destroy($id)
    {
        Loan::destroy($id);
        return ['message' => 'deleted'];
    }
}