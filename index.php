<?php
echo "Hello from CI/CD demo using " . ($_ENV['CI_PROVIDER'] ?? 'Local') . "!";
