<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CalculaTest extends TestCase
{
    /**
     * A basic test for incoming data.
     *
     * @return void
     */
    public function testBuscaSopaLetras()
    {
    	$sopa_ejemplo 	= "	3 3
							OIE
							IIX
							EXE
							1 10
							EIOIEIOEIO
							5 5
							EAEAE
							AIIIA
							EIOIE
							AIIIA
							EAEAE
							7 2
							OX
							IO
							EX
							II
							OX
							IE
							EX
							1 1
							E";
        $response = $this->json('POST', '/calcular', ['sopas' => $sopa_ejemplo]);

        $response->assertStatus(200);
    }
}
