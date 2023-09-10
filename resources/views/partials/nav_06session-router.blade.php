<nav>
        <!-- <pre> {{ request() }}</pre>
        {{ dump(request()) }} 
        <pre>{{ request()->url()}}</pre>
        <pre>{{ request()->path()}}</pre>
        <pre>{{ dump(request()->routeIs('about'))}}</pre>-->
            <li><a href="{{ route('home') }}" class="{{ setActive('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}" class="{{ setActive('about') }}">About</a></li>
            <li><a href="/portfolio" class="{{ setActive('portfolio') }}">Portfolio</a></li>
            <li><a href="{{ route('contact') }}" class="{{ setActive('contact') }}">Contact</a></li>
            <li><a href="{{ route('usuario') }}" class="{{ setActive('usuario') }}">Usuarios</a></li>
            @auth
                    <li >
                        <a  href="#"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                        >Cerrar sesión</a>
                    </li>
                @else
                    <li>
                        <a class=" {{ setActive('login') }}"
                            href="{{ route('login') }}"
                        >Login</a>
                    </li>
                @endauth


        </ul>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
</nav>
<hr>
@include('partials.session-status')