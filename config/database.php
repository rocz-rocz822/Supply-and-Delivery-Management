<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DATABASE_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        ],

        // For Supplies and Deliveries
        'mysql_spl_dlv' => [
			'driver' => 'mysql',
			'url' => env('DATABASE_URL_SPL_DLV'),
			'host' => env('DB_HOST_SPL_DLV', '127.0.0.1'),
			'port' => env('DB_PORT_SPL_DLV', '3306'),
			'database' => env('DB_DATABASE_SPL_DLV', 'forge'),
			'username' => env('DB_USERNAME_SPL_DLV', 'forge'),
			'password' => env('DB_PASSWORD_SPL_DLV', ''),
			'unix_socket' => env('DB_SOCKET', ''),
			'charset' => 'utf8mb4',
			'collation' => 'utf8mb4_unicode_ci',
			'prefix' => '',
			'prefix_indexes' => true,
			'strict' => true,
			'engine' => 'InnoDB ROW_FORMAT=DYNAMIC',
			'max_allowed_packet' => '64M',
			'modes'  => [
				'ONLY_FULL_GROUP_BY',
				'STRICT_TRANS_TABLES',
				'NO_ZERO_IN_DATE',
				'NO_ZERO_DATE',
				'ERROR_FOR_DIVISION_BY_ZERO',
				'NO_ENGINE_SUBSTITUTION',
			],
			'options' => extension_loaded('pdo_mysql') ? array_filter([
				PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
			]) : [],
		],
		// Test Version
		'sqlite_spl_dlv' => [
			'driver' => 'sqlite',
            'url' => env('DATABASE_URL_SPL_DLV'),
            'database' => env('DB_DATABASE_SPL_DLV', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
		],

        // For Product and Inventory
        'mysql_prd_inv' => [
			'driver' => 'mysql',
			'url' => env('DATABASE_URL_PRD_INV'),
			'host' => env('DB_HOST_PRD_INV', '127.0.0.1'),
			'port' => env('DB_PORT_PRD_INV', '3306'),
			'database' => env('DB_DATABASE_PRD_INV', 'forge'),
			'username' => env('DB_USERNAME_PRD_INV', 'forge'),
			'password' => env('DB_PASSWORD_PRD_INV', ''),
			'unix_socket' => env('DB_SOCKET', ''),
			'charset' => 'utf8mb4',
			'collation' => 'utf8mb4_unicode_ci',
			'prefix' => '',
			'prefix_indexes' => true,
			'strict' => true,
			'engine' => 'InnoDB ROW_FORMAT=DYNAMIC',
			'max_allowed_packet' => '64M',
			'modes'  => [
				'ONLY_FULL_GROUP_BY',
				'STRICT_TRANS_TABLES',
				'NO_ZERO_IN_DATE',
				'NO_ZERO_DATE',
				'ERROR_FOR_DIVISION_BY_ZERO',
				'NO_ENGINE_SUBSTITUTION',
			],
			'options' => extension_loaded('pdo_mysql') ? array_filter([
				PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
			]) : [],
		],
		// Test Version
		'sqlite_prd_inv' => [
			'driver' => 'sqlite',
            'url' => env('DATABASE_URL_PRD_INV'),
            'database' => env('DB_DATABASE_PRD_INV', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
		],

        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            // 'encrypt' => env('DB_ENCRYPT', 'yes'),
            // 'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],

    ],

];
