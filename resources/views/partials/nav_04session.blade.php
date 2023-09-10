<nav>
        <!-- <pre> {{ request() }}</pre>
        {{ dump(request()) }} 
        <pre>{{ request()->url()}}</pre>
        <pre>{{ request()->path()}}</pre>
        <pre>{{ dump(request()->routeIs('about'))}}</pre>-->
            <li><a href="{{ route('home') }}" class="{{ setActive('home') }}">Home</a></li>
            <li><a href="/about" class="{{ setActive('about') }}">About</a></li>
            <li><a href="/portfolio" class="{{ setActive('portfolio') }}">Portfolio</a></li>
            <li><a href="/contact" class="{{ setActive('contact') }}">Contact</a></li>
            <li><a href="{{ route('usuario') }}" class="{{ setActive('usuario') }}">Usuarios</a></li>
        </ul>
</nav>
<hr>
@include('partials.session-status')