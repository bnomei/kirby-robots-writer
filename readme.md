# Kirby Robots Writer

*Version 0.2*

Control your `robots.txt` file through a `config.php` value.

**[Installation instructions](docs/install.md)**

## Setup

Into your `config.php`:

```php
c::set('robots.txt', '
User-agent: *
Disallow: /
Sitemap: https://example.com/sitemap.xml
');
```

`robots.txt` output:

```text
User-agent: *
Disallow: /
Sitemap: https://example.com/sitemap.xml
```

**Alternative solution - Snippet**

Make sure your snippet exists and is registered:

```php
c::set('robots.txt', snippet('robots.txt', [], true));
```

**Alternative solution - Site**

Make sure you have a field called `robots` in site.

```php
c::set('robots.txt', site()->robots());
```

## Changelog

**0.2**

- Complete rewrite. Made it much simpler.

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