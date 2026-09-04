<x-layout>

<main class="py-12">

<h1>
  Veja seus hábitos ganharem vida
</h1>

@auth
  <p>
    Bem-vindo, {{ auth()->user()->name }}!
  </p>
  <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Sair</button>
  </form>
@endauth

</main>
</x-layout>