@extends('app')

@section('title', 'Liste de tous les utilisateurs')

@section('content')
    <section class="my-3">
        <div class="d-flex justify-content-between align-items-center">
            <h4>@yield('title')</h4>
            <a class="nav-link link-primary fw-bold" href="{{ route('admin.users.create') }}">Ajouter</a>
        </div>
    </section>
    <div class="card">
        <div class="card-body">
            <table class="table table-responsive table-borderless">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Telephone</th>
                        <th>Adresse</th>
                        <th>Grade | Spécialité</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role->name }}</td>
                        <td>{{ $user->tel }}</td>
                        <td>{{ $user->adresse }}</td>
                        <td>{{ $user->role_id == 2 ? $user->grade : $user->specialite }}</td>
                        <td class="d-flex">
                            <form class="needs-validation" action="{{ route('admin.users.destroy', $user) }}"
                                  method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                            <a class="btn btn-primary ms-2" href="{{ route('admin.users.edit', $user) }}">Modifier</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>

@endsection

