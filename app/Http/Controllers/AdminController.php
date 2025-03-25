<?php

namespace App\Http\Controllers;

use App\Models\Code;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $codes = Code::paginate(20);
        return view('dashboard.trips', compact('codes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // التحقق من صحة البيانات
        $validatedData = $request->validate([
            'code' => 'required|string|max:50',
            'desc' => 'required|string|max:255',
            'long' => 'required|string|max:50',
            'date' => 'required|date',
            'company' => 'required|string|max:100',
            'canada' => 'required|string|max:100',
            'number' => 'required|string|max:50',
            'duration' => 'required|string|max:50',
            'time' => 'required|string|max:50',
            'from' => 'required|string|max:150',
            'to' => 'required|string|max:150',
            'Receiver' => 'required|string|max:255',
            'hotel' => 'required|string|max:255',
            'contact' => 'required|string|max:20',
            'companions' => 'nullable|array', // التأكد من أن المرافقين مصفوفة
            'companions.*' => 'string|max:255', // كل مرافق يكون نصًا بطول محدد
        ]);

        // حفظ البيانات في الجدول
        $trip = Code::create([
            'code' => $validatedData['code'],
            'desc' => $validatedData['desc'],
            'long' => $validatedData['long'],
            'date' => $validatedData['date'],
            'company' => $validatedData['company'],
            'canada' => $validatedData['canada'],
            'number' => $validatedData['number'],
            'duration' => $validatedData['duration'],
            'time' => $validatedData['time'],
            'from' => $validatedData['from'],
            'to' => $validatedData['to'],
            'Receiver' => $validatedData['Receiver'],
            'hotel' => $validatedData['hotel'],
            'contact' => $validatedData['contact'],
            'companions' => json_encode($validatedData['companions'] ?? []),
        ]);

        return redirect()->route('codes.index')->with('success', 'تم حفظ الرحلة والمرافقين بنجاح!');

        // dd($request->all());

    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.codeedit', [
            'code' => Code::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // البحث عن الرحلة المطلوبة
        $code = Code::findOrFail($id);

        // التحقق من صحة البيانات
        $validatedData = $request->validate([
            'code' => 'required|string|max:50',
            'desc' => 'required|string|max:255',
            'long' => 'required|string|max:50',
            'date' => 'required|date',
            'company' => 'required|string|max:100',
            'canada' => 'required|string|max:100',
            'number' => 'required|string|max:50',
            'duration' => 'required|string|max:50',
            'time' => 'required|string|max:50',
            'from' => 'required|string|max:150',
            'to' => 'required|string|max:150',
            'Receiver' => 'required|string|max:255',
            'hotel' => 'required|string|max:255',
            'contact' => 'required|string|max:20',
            'Companions' => 'nullable|array', // التأكد من أن المرافقين مصفوفة
            'Companions.*' => 'string|max:255', // كل مرافق يكون نصًا بطول محدد
        ]);
        // dd($request);

        $code->update([
            'code' => $validatedData['code'],
            'desc' => $validatedData['desc'],
            'long' => $validatedData['long'],
            'date' => $validatedData['date'],
            'company' => $validatedData['company'],
            'canada' => $validatedData['canada'],
            'number' => $validatedData['number'],
            'time' => $validatedData['time'],
            'from' => $validatedData['from'],
            'duration' => $validatedData['duration'],
            'to' => $validatedData['to'],
            'Receiver' => $validatedData['Receiver'],
            'hotel' => $validatedData['hotel'],
            'contact' => $validatedData['contact'],
            'companions' => json_encode($validatedData['Companions'] ?? []), // تحويل المرافقين إلى JSON
        ]);

        return redirect()->route('codes.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
