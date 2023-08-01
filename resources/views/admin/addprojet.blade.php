@extends('layouts.adminapp')

<head>
    <!-- Other meta tags and links -->
    <link href="{{ asset('css/formulaire.css') }}" rel="stylesheet">
</head>

@section('content')

    <div class="pt-6 px-4">


        <!-- table 1-->
        <div id="t1" class="grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 my-4">
            <div class="bg-white shadow rounded-lg mb-4 p-4 sm:p-6 h-full">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-xl font-bold leading-none text-gray-900">Ajouter un projet</h3>
                    <a href="#" class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg inline-flex items-center p-2">
                        View all
                    </a>
                </div>
                <div class="flow-root">
                    <form method="post" action="{{ route('projects.store') }}" class="custom-form-style">
                        @csrf
                        <label for="titre">Titre :</label>
                        <input type="text" name="titre" required><br><br>

                        <label for="responsable_id">Responsable :</label>
                        <select name="responsable_id" id="responsabl_id" required>
                            @foreach($membres as $membre)
                                <option value="{{ $membre->id }}">{{ $membre->name }}</option>
                            @endforeach
                        </select>
                        <br><br>

                        <label for="date">Date :</label>
                        <input type="date" name="date" required><br><br>

                        <label for="type">Type :</label>
                        <select name="type" id="type">
                            <option value="National">National</option>
                            <option value="International">International</option>
                        </select><br><br>

                        <label for="description" class="description_projet">Description :</label>
                        <textarea name="description" rows="3"></textarea>
                        <br><br>

                        <input type="submit" name="submit" value="Ajouter">
                    </form>
                </div>
            </div>
        </div>
        <!-- end table-->





    </div>





</div>

@endsection








