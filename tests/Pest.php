<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

// Apply to ALL feature tests across all modules
pest()->extend(TestCase::class)->in('Feature');

// Apply to modular structure - adjust paths as needed
pest()->extend(TestCase::class)->in('../Modules/*/tests/Feature');
pest()->extend(TestCase::class)->in('Modules/*/tests/Feature');

// You can also be more specific if needed
pest()->extend(TestCase::class)->group('feature');

// Add common traits
pest()->use(RefreshDatabase::class)->in('Feature');
pest()->use(RefreshDatabase::class)->in('../Modules/*/tests/Feature');
pest()->use(RefreshDatabase::class)->in('Modules/*/tests/Feature');
