<?php

// Available placeholders: :uc:vendor, :uc:package, :lc:vendor, :lc:package
return [
    'src/MyPackageServiceProvider.php' => 'src/:uc:packageServiceProvider.php',
    'src/MyPackage.php'                => 'src/:ucs:package.php',
    'src/Nova/MyPackage.php'           => 'src/Nova/:ucs:package.php',
];
