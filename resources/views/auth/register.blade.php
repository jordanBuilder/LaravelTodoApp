@extends('base')

@section('content')
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full max-w-md">
    <h2 class="text-2xl font-bold text-center mb-6">Inscription</h2>
    <form action="#" method="POST" action="{{ route()}}">
        @csrf
        <div class="mb-4">
            <label for="firstname" class="block text-gray-700 text-sm font-bold mb-2">Nom de famille</label>
            <input type="text" id="firstname" name="firstname" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Votre prénom">
        </div>
        <div class="mb-4">
            <label for="lastname" class="block text-gray-700 text-sm font-bold mb-2">Prenom</label>
            <input type="text" id="lastname" name="lastname" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Votre nom">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Adresse Email</label>
            <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="exemple@domaine.com">
        </div>
        <div class="mb-6">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Mot de passe</label>
            <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="********">
        </div>
        <div class="mb-6">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Confirmation de Mot de passe</label>
            <input type="password" id="password" name="passwordConf" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="********">
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">S'inscrire</button>
        </div>
    </form>
</div>
@endsection
