<?php

namespace App\Http\Controllers\API;

use App\Models\Loan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class loans extends Controller
{
    public function submitloan(Request $request){
        $validator = Validator::make($request->all(), [
            'mobile' => 'required|string',
            'pan' => 'required|string',
            'address' => 'required|string',
            'amount' => 'required|numeric',
            'year' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "status" => false,
                "message" => "Sorry, your data was not submitted.",
                'errors' => $validator->errors()->all()
            ], 422); // 422 Unprocessable Entity for validation errors
        }

        try {
            $loan = Loan::create([
                'mobile' => $request->mobile,
                'pan' => $request->pan,
                'address' => $request->address,
                'amount' => $request->amount,
                'year' => $request->year,
            ]);

            return response()->json([
                "status" => true,
                "message" => "Your loan request was submitted successfully.",
                'loan' => $loan // Optionally return the created loan
            ], 201); // 201 Created
        } catch (\Exception $e) {
            return response()->json([
                "status" => false,
                "message" => "An error occurred while processing your request.",
                'error' => $e->getMessage()
            ], 500); // 500 Internal Server Error
        }
    }
}
