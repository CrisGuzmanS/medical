<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/products/create')
                ->type('name','Jeringa')
                ->type('description', 'Producto para inyectar.')
                ->press('guardar')
                ->assertPathIs('/products')
                ->assertSee('Todos los productos')
                ->click('@Jeringa')
                ->assertSee('Producto para inyectar');
        });
    }
}
