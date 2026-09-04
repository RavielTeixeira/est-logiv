<?php

test('the login page renders the form', function () {
    $response = $this->get(route('login'));

    $response->assertOk();
    $response->assertSee('Faça Login');
    $response->assertSee('name="email"', false);
    $response->assertSee('name="password"', false);
    $response->assertSee('name="_token"', false);
    $response->assertDontSee('Cadastre-se');
});
