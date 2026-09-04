<x-layout>

<main class="py-12">

<h1>
  Faça Login
</h1>

<section>

  <form action="{{ route('login.authenticate') }}" method="POST" class="mt-6 flex max-w-sm flex-col gap-4">
    @csrf

    @error('email')
      <p class="text-red-500 text-x1 mt-1">
        {{ $message }}
      </p>
    @enderror

    <input
      type="email"
      name="email"
      placeholder="your@email.com"
      class="w-full border-2 border-black bg-white p-2"
    >

    <input
      type="password"
      name="password"
      placeholder="********"
      class="w-full border-2 border-black bg-white p-2"
    >

    <button
      type="submit"
      class="w-full border-2 border-black bg-white p-2"
    >
      Entrar
    </button>

  </form>



</section>
</main>

</x-layout>
