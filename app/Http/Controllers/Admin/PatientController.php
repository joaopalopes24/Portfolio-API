<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientRequest;
use App\Models\Patient;
use Illuminate\Support\Facades\Storage;

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
        $values = $request->validated();

        $values = $this->createImage($values,NULL);

        Patient::create($values);

        return redirect()->route('admin.patient.index')->withErrors(['success' => trans('auth.store',['name' => $this->values['name']])]);
    }

    public function show(Patient $patient)
    {       
        $this->values['patient'] = $patient;

        return view('admin.patient.show', $this->values);
    }

    public function edit(Patient $patient)
    {
        $this->values['patient'] = $patient;

        return view('admin.patient.edit', $this->values);
    }

    public function update(PatientRequest $request, Patient $patient)
    {
        $values = $request->validated();

        array_key_exists('not_photo',$values) ? $values = $this->deleteImage($values,$patient->photo) : $values = $this->createImage($values,$patient) ;

        $patient->fill($values)->save();

        return redirect()->route('admin.patient.index')->withErrors(['success' => trans('auth.update',['name' => $this->values['name']])]);
    }

    public function destroy(Patient $patient)
    {
        $this->deleteImage($values = [],$patient->photo);
        
        $patient->delete();

        return redirect()->route('admin.patient.index')->withErrors(['success' => trans('auth.destroy',['name' => $this->values['name']])]);
    }

    protected function createImage($values,$patient)
    {
        if(array_key_exists('photo',$values)){
            $photo = $values['photo'];
            
            if($patient !== NULL){
                if($patient->photo !== NULL){
                    $values = $this->deleteImage($values,$patient->photo);
                }
            }

            $values['photo'] = Storage::putFile('patient', $photo);
        }
        return $values;
    }

    protected function deleteImage($values,$photo)
    {
        Storage::delete("$photo");
        $values['photo'] = NULL;

        return $values;
    }
}