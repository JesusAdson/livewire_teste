<?php

namespace Tests\Unit;

use App\Models\Limit;
use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserHasLimitTest extends TestCase
{
    /**
     * @test
     * @return void
     */
    public function user_has_limits()
    {
        $user = User::factory()->create();
        $limit = Limit::factory()->create(['user_id' => $user->id]);

        $this->assertInstanceOf(Limit::class, $user->limits);

        $this->assertEquals(1, $user->limits->count());
    }
}
