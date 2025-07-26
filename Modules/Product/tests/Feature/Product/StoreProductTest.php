<?php
use Modules\Admin\Models\User\User;
use Modules\Product\Database\Seeders\PermissionSeeder\PermissionSeeder;


beforeEach(function () {
    $this->seed(PermissionSeeder::class);
$this->route = 'api.products.store';
$this->permission = 'product-create';
    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);
    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);
});

it('successfully stores product', function (){

$response = $this->postJson(route($this->route,[]));

dd($response->json());
});

