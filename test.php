<?php
// Check if zlib is loaded
if (!extension_loaded('zlib')) {
    echo "zlib is not loaded!";
    exit(1);
}

// Sample data to compress
$data = "This is a test string for zlib compression";

// Compress data
$compressed = gzcompress($data);

// Decompress data
$decompressed = gzuncompress($compressed);

// Output test result
if ($decompressed === $data) {
    echo "zlib is working correctly!!";
} else {
    echo "zlib test failed.";
}
