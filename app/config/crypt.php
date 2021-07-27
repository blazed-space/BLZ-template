<?php
return array(
  'sodium' => 
  array(
    'cipherkey' => sodium_bin2hex(random_bytes(SODIUM_CRYPTO_STREAM_KEYBYTES)),
  ),
);
