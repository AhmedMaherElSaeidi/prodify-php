<?php
// Allow requests from any origin
header("Access-Control-Allow-Origin: *");

// Set the content type to JSON
header("Content-Type: application/json");

// Allow specific HTTP methods
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

// Allow specific headers
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");