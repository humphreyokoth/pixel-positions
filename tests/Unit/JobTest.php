<?php

namespace Tests\Unit;

use App\Models\Job;
use App\Models\Employer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class JobTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }
    use RefreshDatabase;

    public function test_job_belongs_to_employer(): void
    {
        // Arrange
        $employer  =  Employer::factory()->create();
        $job = Job ::factory()->create([
            'emplyer_id'=>$employer->id,
        ]);

        // Act and assert
        $jobEmployer = $job->employer;
        $this->assertTrue($jobEmployer ->is($employer));
    }

    public function test_job_can_have_tags() : void
    {

    }

}
