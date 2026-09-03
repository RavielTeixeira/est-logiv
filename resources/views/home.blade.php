@dd($name, $habits)
<h1>
    Welcome to the Home Page
</h1>

<p>
    Olá, {{ $name }}
</p>

<p>
    Suas habilidades são:
</p>

<ul>
    @foreach ($habits as $item)
        <li>
            {{ $item }}
        </li>
    @endforeach
</ul>