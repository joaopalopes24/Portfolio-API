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
}