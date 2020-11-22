<?php return array (
  'app' => 
  array (
    'name' => 'Eazymobile',
    'env' => 'production',
    'debug' => false,
    'url' => 'https://eazymobile.net',
    'asset_url' => NULL,
    'timezone' => 'African/Lagos',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:FgQ2yJ/mRhIDyRDvW41cOxSe6p/krxtm28/WwXZVD50=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'App\\Providers\\AppServiceProvider',
      23 => 'App\\Providers\\AuthServiceProvider',
      24 => 'App\\Providers\\EventServiceProvider',
      25 => 'App\\Providers\\RouteServiceProvider',
      26 => 'Unicodeveloper\\Paystack\\PaystackServiceProvider',
      27 => 'Laravel\\Socialite\\SocialiteServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Paystack' => 'Unicodeveloper\\Paystack\\Facades\\Paystack',
      'Socialite' => 'Laravel\\Socialite\\Facades\\Socialite',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'passport',
        'provider' => 'users',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
      ),
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => 'mt1',
          'encrypted' => true,
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/home/u854132094/domains/eazymobile.net/public_html/storage/framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
      ),
    ),
    'prefix' => 'eazymobile_cache',
  ),
  'constants' => 
  array (
    'site' => 
    array (
      'year' => 2020,
      'env' => 'production',
      'url' => 'https://eazymobile.net',
      'name' => 'Eazymobile',
      'spanName' => '<b>Eazy</b> Mobile',
      'logo' => '\\images/logo.png',
      'email' => 'support@eazymobile.net',
      'phone' => '+234 9021 6666 08',
      'phone2' => '',
      'telegram' => 'https://t.me/eazymobilenig',
      'address' => 'SHOP 15, OFF GTBANK, <br/>OFF ALABATA ROAD, FUNAAB ABEOKUTA',
      'twitter' => 'https://twitter.com/eazymobilenig',
      'facebook' => 'https://facebook.com/eazymobilenig',
      'instagram' => 'https://instagram.com/eazymobilenig',
      'google' => '#',
      'linkedin' => '#',
      'bussinessName' => 'Eazy Mobile',
      'googleMap' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.38262768085247!2d3.450448169084706!3d7.2269181021081685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103a37421bbc279f%3A0xbdd81c8328b04ef4!2sModelc%20Global%20Enterprise!5e0!3m2!1sen!2sng!4v1577543120150!5m2!1sen!2sng',
      'about' => 'Copyright &copy; 2020 Eazymobile <p>
      </p>Powered by Eazy Global Solutions ',
      'description' => 'The fastest way to convert airtime to cash, buy cheap internet data bundle, trade Bitcoin, and all other Telecom needs',
      'sms' => 
      array (
        'sender' => 'EAZYMOBILE',
      ),
      'api' => 
      array (
        'url' => '#',
      ),
      'emails' => 
      array (
        'sender' => 
        array (
          'name' => 'support@eazymobile.net',
          'noreply' => 'noreply@eazymobile.net',
        ),
      ),
    ),
    'livechat' => 
    array (
      'tawk' => 'https://embed.tawk.to/5e62d3c4c32b5c19173a0a0a/default',
    ),
    'fundings' => 
    array (
      'paystack' => 
      array (
        'min' => 500,
        'max' => 3000,
      ),
    ),
    'url' => 
    array (
      'paystack' => 'https://api.paystack.co/',
      'ringo' => 'https://sales.ringo.ng/api/',
      'smartsmssolutions' => 'https://smartsmssolutions.com/api/',
    ),
    'freecurrencyconveter' => 
    array (
      'url' => 'https://free.currconv.com/api/v7/',
      'token' => 'cf9f166a258eb4a6261c',
    ),
    'currencyconveter' => 
    array (
      'url' => 'https://api.currconv.com/api/v7/',
      'token' => '4c95c73dddd84eb59ecdd5b469433cf2',
    ),
    'smartsmssolutions' => 
    array (
      'token' => 'CmFnzEl3h3VSzO2Aii0BFXsDuEDcuH1eR7GRLl8gZmesiJ0M7eXVw6gbMguLnSwR4pMpHB3Py3wFGd8dZGqvRZc8BqBmiIfEtPgD',
    ),
    'ringo' => 
    array (
      'username' => 'ogojesu4u4reel@gmail.com',
      'password' => 'BloodofJesus2020?',
    ),
    'paystack' => 
    array (
      'secretkey' => 'sk_live_b71420436e472bc2ae019f3fca6943240db6315a',
    ),
    'charges' => 
    array (
      'paystack' => 
      array (
        'cappedCharge' => 2000,
        'addtionalCharge' => 100,
        'chargePercentage' => 0,
      ),
    ),
    'bonuses' => 
    array (
      'referral' => 0,
    ),
    'bitcoin' => 
    array (
      'funding' => 
      array (
        'min' => 10,
        'max' => 1000,
      ),
      'purchase' => 
      array (
        'min' => 25,
        'max' => 1000,
      ),
    ),
    'coinpayment' => 
    array (
      'key' => 
      array (
        'public' => '01b819991cf333f75eeb6aa6e634b145ef0276453f768b08a96b26df7519e6ab',
        'private' => 'ac7c76fa924fd17fe587A6151dC3BC2935E11fA369e5BC63a649F2a28443f42d',
      ),
      'ipnSecret' => '',
      'debugEmail' => '',
      'merchantId' => '',
    ),
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => 'u854132094_eazymobile',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'u854132094_eazymobile',
        'username' => 'u854132094_eazy_me',
        'password' => 'KdlB`ya8',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'u854132094_eazymobile',
        'username' => 'u854132094_eazy_me',
        'password' => 'KdlB`ya8',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'u854132094_eazymobile',
        'username' => 'u854132094_eazy_me',
        'password' => 'KdlB`ya8',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'default' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 0,
      ),
      'cache' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 1,
      ),
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/home/u854132094/domains/eazymobile.net/public_html/storage/app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/home/u854132094/domains/eazymobile.net/public_html/storage/app/public',
        'url' => 'https://eazymobile.net/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'url' => NULL,
      ),
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'daily',
        ),
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '/home/u854132094/domains/eazymobile.net/public_html/storage/logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/home/u854132094/domains/eazymobile.net/public_html/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
    ),
  ),
  'mail' => 
  array (
    'driver' => 'smtp',
    'host' => 'smtp.hostinger.com',
    'port' => '465',
    'from' => 
    array (
      'address' => 'noreply@eazymobile.net',
      'name' => 'EAZYMOBILE',
    ),
    'encryption' => 'ssl',
    'username' => 'noreply@eazymobile.net',
    'password' => '9tXp$ukR@!Y^&',
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '/home/u854132094/domains/eazymobile.net/public_html/resources/views/vendor/mail',
      ),
    ),
    'log_channel' => NULL,
  ),
  'paystack' => 
  array (
    'publicKey' => 'pk_live_40140aba9ae7bfeb7740474590c712d70b9750ca',
    'secretKey' => 'sk_live_b71420436e472bc2ae019f3fca6943240db6315a',
    'paymentUrl' => 'https://api.paystack.co',
    'merchantEmail' => 'support@eazymobile.net',
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => 'your-public-key',
        'secret' => 'your-secret-key',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
      ),
    ),
    'failed' => 
    array (
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
    'stripe' => 
    array (
      'model' => 'App\\User',
      'key' => NULL,
      'secret' => NULL,
      'webhook' => 
      array (
        'secret' => NULL,
        'tolerance' => 300,
      ),
    ),
    'facebook' => 
    array (
      'client_id' => '2393319777604263',
      'redirect' => 'https://eazymobile.net/users/facebook/callback',
      'client_secret' => '89ec82ebb45294a60d338d28032719e1',
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/home/u854132094/domains/eazymobile.net/public_html/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'eazymobile_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
    'http_only' => true,
    'same_site' => NULL,
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/home/u854132094/domains/eazymobile.net/public_html/resources/views',
    ),
    'compiled' => '/home/u854132094/domains/eazymobile.net/public_html/storage/framework/views',
  ),
  'debug-server' => 
  array (
    'host' => 'tcp://127.0.0.1:9912',
  ),
  'passport' => 
  array (
    'private_key' => NULL,
    'public_key' => NULL,
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 30,
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'dont_alias' => 
    array (
    ),
  ),
);
