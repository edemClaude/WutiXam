@extends('app')

@section('title', 'Ajouter un Cours')

@section('content')
    <h4>@yield('title')</h4>
    <div class="card shadow">
        <form action="{{ route('admin.cours.store') }}"  method="POST" class="needs-validation">
            @csrf
            <div class="card-body vstack gap-3 mt-5">

                <!-- image -->
                @include('form.input', ['label' => 'Image du cours', 'name' => 'image',
                        'type' => 'file'])

                @include('form.input', ['label' => 'Nom du cours', 'name' => 'title'])
                @include('form.input', ['label' => 'Description du cours', 'name' => 'description',])

                <!-- date -->
                @include('form.input', ['label' => 'Date de creation', 'name' => 'date_creation', 'type' => 'date'])

                @include('form.input', ['label' => 'Prix', 'name' => 'price', 'type' => 'number', 'value' => 0])


                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary">Créer</button>
                </div>

            </div>
        </form>
    </div>
@endSection
