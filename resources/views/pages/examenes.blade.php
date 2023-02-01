@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Examenes'])
    <div class="container-fluid py-4">

        @livewire('gestionar-examenes')
        @livewireScripts
        {{-- @include('layouts.footers.auth.footer') --}}
    </div>
@endsection
