<?php

return \StubsGenerator\Finder::create()
    ->in('source/wordpress-seo')
    ->notPath('cli')
    ->notPath('config/composer')
    ->notPath('config/php-codeshift')
    ->notPath('deprecated')
    ->notPath('migrations')
    // Uses ruckusing/ruckusing-migrations.
    ->notPath('src/loggers/migration-logger.php')
    // Assets.
    ->notPath('css')
    ->notPath('images')
    ->notPath('js')
    ->notPath('languages')
    ->notPath('vendor_prefixed')
    // Referenced in src/config/.
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/wordpress-seo/vendor_prefixed/league/oauth2-client/src/Provider/'])
            ->files()
    )
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/wordpress-seo/vendor_prefixed/league/oauth2-client/src/Tool/'])
            ->files()
    )
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/wordpress-seo/vendor_prefixed/symfony/dependency-injection/'])
            ->files()
    )
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/wordpress-seo/vendor_prefixed/psr/container/src/'])
            ->files()
    )
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/wordpress-seo/vendor_prefixed/psr/log/Psr/Log/'])
            ->files()
    )
    // New in Yoast SEO 24.6 - PSR HTTP interfaces
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/wordpress-seo/vendor_prefixed/psr/http-client/src/'])
            ->files()
    )
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/wordpress-seo/vendor_prefixed/psr/http-factory/src/'])
            ->files()
    )
    // New in Yoast SEO 24.6 - Symfony deprecation contracts
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/wordpress-seo/vendor_prefixed/symfony/deprecation-contracts/'])
            ->files()
    )
    // Required dependency - Yoast WHIP for PHP version checking
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/vendor/yoast/whip/src/'])
            ->files()
    )
    ->sortByName()
;
