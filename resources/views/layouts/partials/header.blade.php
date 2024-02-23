<header>
        <h1>Blog de cursos</h1>
        <ul>
            <li>
                <a href="{{ route('home') }}" 
                    class="{{ request()->routeIs('home') ? 'text-red-300 font-semibold' : '' }}">Inicio</a>
            </li>
            <li>
                <a href="{{ route('cursos.index') }}"
                    class="{{ request()->routeIs('cursos.*') ? 'text-red-300 font-semibold' : '' }}">Cursos</a>
            </li>
            <li>
                <a href="{{ route('nosotros') }}"
                    class="{{ request()->routeIs('nosotros') ? 'text-red-300 font-semibold' : '' }}">Nosotros</a>
            </li>
        </ul>
    </header>