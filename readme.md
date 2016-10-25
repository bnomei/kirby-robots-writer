# Kirby Robots Writer

*Version 0.1*

Maybe you don't want to place a real robots.txt in the root of your file. Instead you may want to control it by a panel field or a snippet. Then this plugin might be for you.

## Installation

Use one of the alternatives below.

### 1. Kirby CLI

If you are using the [Kirby CLI](https://github.com/getkirby/cli) you can install this plugin by running the following commands in your shell:

```
$ cd path/to/kirby
$ kirby plugin:install jenstornell/kirby-robots-writer
```

### 2. Clone or download

1. [Clone](https://github.com/jenstornell/kirby-robots-writer.git) or [download](https://github.com/jenstornell/kirby-robots-writer/archive/master.zip)  this repository.
2. Unzip the archive if needed and rename the folder to `kirby-robots-writer`.

**Make sure that the plugin folder structure looks like this:**

```
site/plugins/kirby-robots-writer/
```

### 3. Git Submodule

If you know your way around Git, you can download this plugin as a submodule:

```
$ cd path/to/kirby
$ git submodule add https://github.com/jenstornell/kirby-robots-writer site/plugins/kirby-robots-writer
```

## Options

The following options can be set in your `/site/config/config.php` file:

```php
c::set('plugin.robots.writer.type', 'snippet');
c::set('plugin.robots.writer.snippet.name', 'robots');
c::set('plugin.robots.writer.field.name', 'robots');
c::set('plugin.robots.writer.page.uri', null);
```

### type

You can deside where to write robots.txt content. The available places are `snippet`, `site` and `page`.

When using the type `site` or `page` you can write robots.txt in a textarea field.

### snippet name

This option require `type` to be `snippet`. If you don't like `robots` as snippet name you can use another name.

### field.name

This option require `type` to be `site` or `page`. If you don't like `robots` as field name you can use another name.

### page.uri

This option require `type` to be `page`. This option is required for the `type` `page` to work. You set the uri to page where you want to have the robots field.

## Setup

### Robots by snippet

In `config.php`, add something like this:

```php
c::set('plugin.robots.writer.type', 'snippet');
c::set('plugin.robots.writer.snippet.name', 'robots');
```

Add a snippet in the `snippet` folder or register one in a plugin like this:

```php
$kirby->set('snippet', 'robots', __DIR__ . '/snippets/robots.php');
```

https://getkirby.com/docs/developer-guide/plugins/registry

### Robots by site

In `config.php`, add something like this:

```php
c::set('plugin.robots.writer.type', 'site');
c::set('plugin.robots.writer.field.name', 'robots');
```

In `site.txt` add something like this:

```
fields:
  robots:
    title: Robots
    type: textarea
```

### Robots by page

In `config.php`, add something like this:

```php
c::set('plugin.robots.writer.type', 'page');
c::set('plugin.robots.writer.field.name', 'robots');
c::set('plugin.robots.writer.page.uri', 'my/custom/page');
```

In `my_template.txt` add something like this:

```
fields:
  robots:
    title: Robots
    type: textarea
```

## Changelog

**0.1**

- Initial release

## Requirements

- [**Kirby**](https://getkirby.com/) 2.3+

## Disclaimer

This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please [create a new issue](https://github.com/jenstornell/kirby-robots-writer/issues/new).

## License

[MIT](https://opensource.org/licenses/MIT)

It is discouraged to use this plugin in any project that promotes racism, sexism, homophobia, animal abuse, violence or any other form of hate speech.

## Credits

- [Jens Törnell](https://github.com/jenstornell)