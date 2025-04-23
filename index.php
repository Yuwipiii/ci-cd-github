<?php
require __DIR__ . '/../src/search_test.php';

echo "Hello from CI/CD demo using " . ($_ENV['CI_PROVIDER'] ?? 'Local') . "!";
