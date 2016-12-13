<?php

// The following statements function equivalently.
Hash::make('password');
bcrypt('password');
app('hash')->make('password');
app()['hash']->make('password');
app('Illuminate\Hashing\BcryptHasher')->make('password');
