<nav class="container mx-auto text-white font-bold uppercase flex flex-wrap">
    <a href="{{ route('vacantes.index')}}" class="block p-3 {{ Request::is('vacantes') ? 'bg-green-700' : '' }}">Ver Vacantes</a>
    <a href="{{ route('vacantes.create')}}" class="block p-3 {{ Request::is('vacantes/create') ? 'bg-green-700' : '' }}">Nueva Vacante</a>
</nav>