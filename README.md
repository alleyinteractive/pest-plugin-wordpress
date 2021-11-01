# WordPress Pest Plugin

**🚨 Under active development, not ready for production use yet! 🚨**

Supports integrating Pest with your WordPress code base through the [Mantle
Framework](https://mantle.alley.co/). Read about the [Mantle Testing Framework
here](https://mantle.alley.co/testing/test-framework/).

- [WordPress Pest Plugin](#wordpress-pest-plugin)
- [Overview](#overview)
- [Getting Started](#getting-started)
  - [Setting up Pest](#setting-up-pest)
  - [Replacing the Pest Test Case](#replacing-the-pest-test-case)
- [Using With the Mantle Framework](#using-with-the-mantle-framework)
- [Writing Tests](#writing-tests)

> If you want to start testing your application with Pest, visit the main
> **[Pest Repository](https://github.com/pestphp/pest)**.

Pest was created by **[Nuno Maduro](https://twitter.com/enunomaduro)** under the
**[Sponsorware license](https://github.com/sponsorware/docs)**. It got
open-sourced and is now licensed under the **[MIT
license](https://opensource.org/licenses/MIT)**.

# Overview

The WordPress Pest Plugin allows WordPress to be tested using the [Pest testing
 framework](https://pestphp.com/). Tests can be written in a very simple manner
 to 'bring the joy of testing to PHP'.

![Example Test](https://pestphp.com/assets/img/pestinstall.png)

# Getting Started

The WordPress Pest Plugin does not require the Mantle Framework to be used on
your site (though having the framework greatly enhances your ability to use
Pest).

Install the WordPress plugin via the Composer package manager:

```bash
composer require alleyinteractive/pest-plugin-wordpress --dev
```

## Setting up Pest

**Note:** if you are using the Mantle Framework, skip ahead to [Using With the Mantle Framework](#using-with-the-mantle-framework).

Let's get started integrating your project with Mantle and Pest. This guide
assumes that your project is placed inside an existing WordPress installation as
a plugin or a theme. Read more information about [setting up the test framework
here](https://mantle.alley.co/testing/test-framework/#setting-up-the-test-framework).

> The default configuration will install WordPress using a `localhost` database
> named `wordpress_unit_tests` with the username/password pair of `root`/`root`.
> All constants can be overridden using the `wp-tests-config.php` file or your
> unit test's bootstrap file.

Assuming you do not have Pest setup in your project, create a `tests` folder and
run the `pest --init` command:

```bash
./vendor/bin/pest --init
```

## Replacing the Pest Test Case

Open up the `tests/Pest.php` file in your project the above command created for you. Look for a line that looks like this:

```php
// uses(Tests\TestCase::class)->in('Feature');
```

Replace that with the following:

```php
uses(\Pest\PestPluginWordPress\FrameworkTestCase::class)->in(__DIR__);

// Install WordPress via Mantle.
\Mantle\Testing\install();
```

Finally, you can run Pest directly from the command line:

```bash
./vendor/bin/pest
```

You can now use the [Mantle Testing
Framework](https://mantle.alley.co/testing/test-framework/) with Pest to test
your WordPress plugin with ease and simplicity. Your IDE will be able to type-hint you as well to allow you to use the testing framework.

# Using With the Mantle Framework

Requiring the WordPress Pest Plugin on an existing Mantle project will allow you
to install Pest with a few commands.

Install the WordPress plugin via the Composer package manager and run the `mantle pest:install` WP-CLI command:

```bash
composer require alleyinteractive/pest-plugin-wordpress --dev
wp mantle pest:install
```

That's it! Pest is installed successfully on you Mantle project. You can run
your pest tests through Pest now:

```bash
./vendor/bin/pest
```

Mantle can also generate a Pest-friendly test by running the `pest:test`
WP-CLI command:

```bash
wp mantle pest:test <TestName>
```

# Writing Tests

More information can be found on the [Testing Framework](https://mantle.alley.co/testing/test-framework/) page.

```php
use function Pest\PestPluginWordPress\from;
use function Pest\PestPluginWordPress\get;

it('should load the homepage', function () {
    get('/')
        ->assertStatus(200)
        ->assertSee('home');
});

it('should load with a referrer', function () {
    from('https://laravel.com/')
        ->get('/')
        ->assertStatus(200);
});
```
