<?php

namespace Tests\Unit;
use PHPUnit\Framework\TestCase;
use WithFaker;

class ProductTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    /**
     * @test
     */
    public function it_stores_data()
    {

        $user = User::factory()->create();

        $response = $this->actingAs($user)

        ->post(route('products.store'), [
            'name' => $this->faker->name(),
            'type' => $this->faker->unique()->safeEmail(),
            'description' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'price' => $this->faker->numberBetween($min = 0, $max = 999999999), // password
            'quantity' => $this->faker->numberBetween($min = 0, $max = 999),
            'location' => $this->faker->cityPrefix(),
        ]);

        $response->assertStatus(302);

        //Tuntutan bahwa abis melakukan POST URL akan dialihkan ke URL product atau routenya adalah product.index
        $response->assertRedirect(route('product.index'));
    }
}
