<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Patient extends Model
{
    use HasFactory,LogsActivity;

    protected $fillable = [
      'photo','full_name','mother_name','birthday',
      'cpf','cns','cep','adress','number','complement',
      'district','city','state_abbr'
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['photo','full_name','mother_name','birthday',
                  'cpf','cns','cep','adress','number','complement',
                  'district','city','state_abbr'])
        ->useLogName('Paciente');
    }

    public static function readPatients($full_name,$mother_name,$cpf,$cns)
    {       
        $result = Patient::select()
            ->when($full_name, function ($query, $full_name) {
                return $query->where('full_name', 'like', '%'.$full_name.'%');
            })
            ->when($mother_name, function ($query, $mother_name) {
                return $query->where('mother_name', 'like', '%'.$mother_name.'%');
            })
            ->when($cpf, function ($query, $cpf) {
                return $query->where('cpf', 'like', '%'.$cpf.'%');
            })
            ->when($cns, function ($query, $cns) {
                return $query->where('cns', 'like', '%'.$cns.'%');
            })
            ->orderBy('id');
        
        return $result;
    }
}