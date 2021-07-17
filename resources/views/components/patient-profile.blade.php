@props(['name','patient'])

<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
    <div class="card bg-light d-flex flex-fill">
        <div class="card-header text-muted border-bottom-0">
            Paciente {{$patient->id}}
        </div>
        <div class="card-body pt-0">
            <div class="row">
                <div class="col-7">
                    <h2 class="lead"><b>{{$patient->full_name}}</b></h2>
                    <p class="text-muted text-sm">
                        <b>Nome da Mãe: </b> {{$patient->mother_name}}
                        <br>
                        <b>CPF: </b> {{$patient->cpf}}
                        <br>
                        <b>CNS: </b> {{$patient->cns}}
                        <br>
                        <b>CEP: </b> {{$patient->cep}}
                        <br>
                        <b>Endereço: </b> {{$patient->adress}} {{$patient->number}} {{$patient->complement}} - {{$patient->district}}, {{$patient->city}} - {{$patient->state_abbr}}
                        <br>
                        @php
                        $birthday = new DateTime($patient->birthday);
                        @endphp
                        <b>Data de Nascimento: </b> {{$birthday->format('d/m/Y')}}
                    </p>
                </div>
                <div class="col-5 text-center">
                    @php
                    $patient->photo ? $url = "storage/$patient->photo" : $url = "plugins/images/userX.png";
                    @endphp
                    <img src="{{asset($url)}}" alt="Foto de Perfil do Usuário" class="img-circle img-fluid">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="text-right">
                <a href="{{route('admin.patient.show',$patient->id)}}" class="btn btn-sm bg-teal">
                    <i class="far fa-eye"></i>
                </a>
                @can('editar-pacientes')
                <a href="{{route('admin.patient.edit',$patient->id)}}" class="btn btn-sm bg-primary">
                    <i class="fas fa-pencil-alt"></i>
                </a>
                @endcan
                @can('deletar-pacientes')
                <a href="#" class="btn btn-sm bg-danger" data-toggle="modal" data-target="#modal-default{{$patient->id}}">
                    <i class="fas fa-trash-alt"></i>
                </a>
                @endcan
            </div>
            <x-modal-delete id="{{$patient->id}}" route="admin.patient.destroy" name="{{$name}}" parameter1="{{$patient->id}}" />
        </div>
    </div>
</div>