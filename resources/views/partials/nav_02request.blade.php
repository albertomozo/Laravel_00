<nav>
        <!-- <pre> {{ request() }}</pre>
        {{ dump(request()) }} 
        <pre>{{ request()->url()}}</pre>
        <pre>{{ request()->path()}}</pre>
        <pre>{{ dump(request()->routeIs('about'))}}</pre>-->
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
            <li><a href="/about" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
            <li><a href="/portfolio" class="{{ request()->routeIs('portfolio') ? 'active' : '' }}">Portfolio</a></li>
            <li><a href="/contact" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
            <li><a href="{{ route('usuario') }}" class="{{ request()->routeIs('usuario') ? 'active' : '' }}">Usuarios</a></li>
        </ul>
    </nav>