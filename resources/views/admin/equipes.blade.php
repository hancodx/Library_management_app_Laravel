@extends('layouts.adminapp')

@section('content')

    <div class="pt-6 px-4">

        <!-- table 1-->
        <div id="t1" class="grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 my-4">
            <div class="bg-white shadow rounded-lg mb-4 p-4 sm:p-6 h-full">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-xl font-bold leading-none text-gray-900">Voici tous les equipes</h3>
                    <a href="#" class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg inline-flex items-center p-2">
                        View all
                    </a>
                </div>
                <div class="flow-root">
                    <table class="table table-striped">
                        <thead>
                            <tr style="font-size: 13px">
                                <th>id</th>
                                <th>Nom</th>
                                <th>Chef</th>
                                <th>Domaine de recherche</th>
                                <th>Mots clé</th>
                                <th>description</th>
                                <th>Action 1</th>
                                <th>Action 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($equipe as $equipe)
                                <tr style="font-size: 13px">
                                    <td>{{ $equipe->id }}</td>
                                    <td>{{ $equipe->name }}</td>
                                    <td>{{ $equipe->chef->name}}</td>
                                    <td>{{ $equipe->domaine_recherche }}</td>
                                    <td>{{ $equipe->mots_cles }}</td>
                                    <td>{{ $equipe->discription }}</td>
                                    <td>
                                        <form action="{{ route('equipes.destroy', $equipe) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" style="background-color: rgb(141, 179, 179); border: 0;" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce membre ?')">Supprimer</button>
                                        </form>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-danger btn-sm mod" style="background-color: rgb(141, 179, 179); border: 0; max-width: 50;" onclick="return confirm('Êtes-vous sûr de vouloir modifier ce membre ?')">Modifier</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end table-->





    </div>





</div>

@endsection
