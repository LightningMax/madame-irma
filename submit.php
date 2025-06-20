<?php
require_once __DIR__ . '/bootstrap.php';

header("Location: " . $_ENV['PRODUCT_LINK']);
exit;