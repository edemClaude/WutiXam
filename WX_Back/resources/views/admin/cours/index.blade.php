@extends('app')

@section('title', 'Liste de tous les cours')

@section('content')
    <section class="my-3">
        <div class="d-flex justify-content-between align-items-center">
            <h4>@yield('title')</h4>
            <a class="nav-link link-primary fw-bold" href="{{ route('admin.cours.create') }}">Ajouter</a>
        </div>
    </section>
    <div class="card">
        <div class="card-body">
            <table class="table table-borderless">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Titre</th>
                    <th>Date Creation</th>
                    <th>Statut</th>
                    <th>Prix</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cours as $cour)
                    <tr>
                        <td><img src="{{ asset($cour->image) }}" alt="" class="rounded img-fluid" width="50"></td>
                        <td>{{ $cour->title }}</td>
                        <td>{{ $cour->date_creation }}</td>
                        <td>{{ $cour->status ? 'Actif' : 'Inactif' }}</td>
                        <td>{{ $cour->price }}</td>
                        <td class="d-flex">
                            <form class="needs-validation" action="{{ route('admin.cours.destroy', $cour) }}"
                                  method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

