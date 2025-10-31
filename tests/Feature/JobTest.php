<?php

use App\Models\Employer;
use App\Models\Job;
use App\Models\User;

it('belong to an employer', function () {
    // AAA
    // Arrange the word (take the data from the model factory)
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id
    ]);

    // Act
    expect($job->employer->is($employer))->toBeTrue();
    // Assert
});

it('can have tags', function () {
    $job = Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});

it('belong to a employer', function () {
    // Arrange the world
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer
    ]);

    // Act
    $job_to_employer = $job->employer()->is($employer);

    // Assert that the employer belong to the job
    expect($job_to_employer)->toBeTrue();

});

it('belong to a user', function () {
    // Arrange the world
    $user = User::factory()->create();

    $employer = Employer::factory()->create([
        'user_id' => $user
    ]);

    $job = Job::factory()->create([
        'employer_id' => $employer
    ]);

    // Act
    $job_to_user = $job->employer()->is($employer);

    // Assert that the employer belong to the job
    expect($job_to_user)->toBeTrue();

});
