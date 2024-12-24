@extends('app')

@section('title', 'Login')

@section('content')
    <h4>@yield('title')</h4>
    <div class="card shadow">
        <form action="{{ route('admin.users.store') }}" method="POST" class="needs-validation">
            @csrf
            <div class="card-body vstack gap-3">
                <div class="row">
                    @include('form.input', ['label' => 'Nom', 'name' => 'name', 'class' => 'col-md-6'])
                    @include('form.input', ['label' => 'Prénom', 'name' => 'firstname', 'class' => 'col-md-6'])
                </div>
                @include('form.input', ['label' => 'Email', 'type' => 'email', 'name' => 'email' ])
                @include('form.input', ['label' => 'Mot de passe', 'type' => 'password', 'name' => 'password'])
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary">Créer</button>
                </div>
            </div>
        </form>
    </div>
@endsection
