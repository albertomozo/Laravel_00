<nav>
        <pre> {{ request() }}</pre>
        <!-- {{ dump(request()) }} 
        <pre>{{ request()->url()}}</pre>
        <pre>{{ request()->path()}}</pre>
        <pre>{{ dump(request()->routeIs('about'))}}</pre>-->
            <li><a href="{{ route('home') }}" class="active">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/portfolio">Portfolio</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="{{ route('usuario') }}">Usuarios</a></li>
        </ul>
    </nav>
    