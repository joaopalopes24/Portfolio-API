@props(['permission','route','active','icon','name'])

@php
  $icon = $icon ?? 'fas fa-chart-bar';
  $name = $name ?? 'Menu Teste';
@endphp

@can($permission)
  <li class="nav-item">
    <a href="{{route($route)}}" class="nav-link{{ str_starts_with(Route::currentRouteName(),$active) ? ' active' : '' }}">
      <i class="nav-icon {{$icon}}"></i>
      <p>
        {{$name}}
      </p>
    </a>
  </li>
@endcan
