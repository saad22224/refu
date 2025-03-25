<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Code;

class CodeController extends Controller
{
    public function search(Request $request) {
        $code = $request->input('code');
        $result = Code::where('code', $code)->first();
        if ($result) {
            return response()->json(['status' => 'success']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Code not found']);
        }
    }
}
