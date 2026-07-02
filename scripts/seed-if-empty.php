<?php
// Bootstrap Laravel
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

use Illuminate\Contracts\Console\Kernel;
$kernel = $app->make(Kernel::class);
$kernel->bootstrap();

// Run database check
use App\Models\User;
use Illuminate\Support\Facades\Artisan;

echo "Checking database status...\n";
try {
    $count = User::count();
    echo "Current user count: $count\n";
    if ($count === 0) {
        echo "Database is empty. Running seeder...\n";
        Artisan::call('db:seed', ['--force' => true]);
        echo "Seeding completed successfully!\n";
    } else {
        echo "Database already has data. Skipping seeder.\n";
    }
} catch (\Exception $e) {
    echo "Error during check/seeding: " . $e->getMessage() . "\n";
}
