<?php return array(
    'root' => array(
        'pretty_version' => 'dev-master',
        'version' => 'dev-master',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => NULL,
        'name' => 'automattic/vaultpress',
        'dev' => false,
    ),
    'versions' => array(
        'automattic/jetpack-autoloader' => array(
            'pretty_version' => '2.10.x-dev',
            'version' => '2.10.9999999.9999999-dev',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../automattic/jetpack-autoloader',
            'aliases' => array(),
            'reference' => 'b9a0cb3c2a06b6ae93820a9e716fc933ec379fc8',
            'dev_requirement' => false,
        ),
        'automattic/jetpack-logo' => array(
            'pretty_version' => '1.5.x-dev',
            'version' => '1.5.9999999.9999999-dev',
            'type' => 'jetpack-library',
            'install_path' => __DIR__ . '/../automattic/jetpack-logo',
            'aliases' => array(),
            'reference' => 'b0155e83169180b517aad5633b104ca3e50207de',
            'dev_requirement' => false,
        ),
        'automattic/vaultpress' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => NULL,
            'dev_requirement' => false,
        ),
    ),
);
