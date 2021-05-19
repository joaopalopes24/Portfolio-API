<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientRequest;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function __construct()
    {
        $this->values = [
            'name' => 'Paciente',
            'pluralName' => 'Pacientes',
        ];
        $this->middleware('permission:visualizar-pacientes')->only(['index','show']);
        $this->middleware('permission:cadastrar-pacientes')->only(['create','store']);
        $this->middleware('permission:editar-pacientes')->only(['edit','update']);
        $this->middleware('permission:deletar-pacientes')->only('destroy');
    }

    public function index()
    {
        $this->values['patients'] = Patient::paginate(12);

        return view('admin.patient.index', $this->values);
    }

    public function create()
    {
        return view('admin.patient.create', $this->values);
    }

    public function store(PatientRequest $request)
    {
        //dd($request);
        $values = $request->validated();

        dd($values);

        Patient::create($values);

        return redirect()->route('admin.patient.index')->withErrors(['success' => trans('auth.store',['name' => $this->values['name']])]);
    }

    public function show(Patient $patient)
    {
        dd($patient);
        
        $this->values['patient'] = $patient;

        return view('admin.patient.show', $this->values);
    }

    public function edit(Patient $patient)
    {
        dd($patient);

        $this->values['patient'] = $patient;

        return view('admin.patient.edit', $this->values);
    }

    public function update(PatientRequest $request, Patient $patient)
    {
        $values = $request->validated();

        dd($values);

        $patient->fill($values)->save();

        return redirect()->route('admin.patient.index')->withErrors(['success' => trans('auth.update',['name' => $this->values['name']])]);
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();

        return redirect()->route('admin.patient.index')->withErrors(['success' => trans('auth.destroy',['name' => $this->values['name']])]);
    }
}
