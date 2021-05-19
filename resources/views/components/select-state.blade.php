@props(['name','label','value','feedback'=>NULL])

@php
  $value = $value ?? '';
@endphp

<div {{$attributes->merge(['class' => 'form-group mb-3'])}}>
  <label for="{{$name}}">{{$label}}</label>
  <select class="custom-select" name="{{$name}}" id="{{$name}}" required>
    <option value="">Selecionar</option>
    <option value="AC" {{ $value === 'AC' ? 'selected' : '' }}>Acre</option>
    <option value="AL" {{ $value === 'AL' ? 'selected' : '' }}>Alagoas</option>
    <option value="AP" {{ $value === 'AP' ? 'selected' : '' }}>Amapá</option>
    <option value="AM" {{ $value === 'AM' ? 'selected' : '' }}>Amazonas</option>
    <option value="BA" {{ $value === 'BA' ? 'selected' : '' }}>Bahia</option>
    <option value="CE" {{ $value === 'CE' ? 'selected' : '' }}>Ceará</option>
    <option value="DF" {{ $value === 'DF' ? 'selected' : '' }}>Distrito Federal</option>
    <option value="ES" {{ $value === 'ES' ? 'selected' : '' }}>Espírito Santo</option>
    <option value="GO" {{ $value === 'GO' ? 'selected' : '' }}>Goiás</option>
    <option value="MA" {{ $value === 'MA' ? 'selected' : '' }}>Maranhão</option>
    <option value="MT" {{ $value === 'MT' ? 'selected' : '' }}>Mato Grosso</option>
    <option value="MS" {{ $value === 'MS' ? 'selected' : '' }}>Mato Grosso do Sul</option>
    <option value="MG" {{ $value === 'MG' ? 'selected' : '' }}>Minas Gerais</option>
    <option value="PA" {{ $value === 'PA' ? 'selected' : '' }}>Pará</option>
    <option value="PB" {{ $value === 'PB' ? 'selected' : '' }}>Paraíba</option>
    <option value="PR" {{ $value === 'PR' ? 'selected' : '' }}>Paraná</option>
    <option value="PE" {{ $value === 'PE' ? 'selected' : '' }}>Pernambuco</option>
    <option value="PI" {{ $value === 'PI' ? 'selected' : '' }}>Piauí</option>
    <option value="RJ" {{ $value === 'RJ' ? 'selected' : '' }}>Rio de Janeiro</option>
    <option value="RN" {{ $value === 'RN' ? 'selected' : '' }}>Rio Grande do Norte</option>
    <option value="RS" {{ $value === 'RS' ? 'selected' : '' }}>Rio Grande do Sul</option>
    <option value="RO" {{ $value === 'RO' ? 'selected' : '' }}>Rondônia</option>
    <option value="RR" {{ $value === 'RR' ? 'selected' : '' }}>Roraima</option>
    <option value="SC" {{ $value === 'SC' ? 'selected' : '' }}>Santa Catarina</option>
    <option value="SP" {{ $value === 'SP' ? 'selected' : '' }}>São Paulo</option>
    <option value="SE" {{ $value === 'SE' ? 'selected' : '' }}>Sergipe</option>
    <option value="TO" {{ $value === 'TO' ? 'selected' : '' }}>Tocantins</option>
  </select>
  @isset($feedback)
    <div class="invalid-feedback">
      Campo Obrigatório!
    </div>
    <div class="valid-feedback">
     OK!
    </div>
  @endisset
</div>
