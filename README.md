# My Simple MVC

My Simple MVC is an experiment of creating a PHP framework from scratch. The main purpose is pedagogic: starting from an ["hello world"](https://github.com/wasthishelpful/my-simple-mvc/commit/59d8bbeb1f7d02899c0e7bfe08325a405a039abf), crafting each mechanism of a web framework without external tools. Maybe we will find a new idea on the way.

## Installation

Clone this repository:

```bash
git clone https://github.com/wasthishelpful/my-simple-mvc
```

Then go to the cloned repository, and generate autoloader:

```bash
cd my-simple-mvc
composer dump-autoload
```

## Usage

Run your local server, with root set to the `public` subfolder:

```bash
php -S localhost:8000 -t public
```

## File Structure

The root directory contains:

* `public`: that's where requests may find a response. Read `public/index.php` first, then follow the white rabbit.
* `src`: that's where the dark magic happens. It contains the PHP classes and helpers, following a Model-View-Controller pattern.

## Contributing

Pull requests are welcome. Check the [issues](https://github.com/wasthishelpful/my-simple-mvc/issues) to see how you can help (and feel free to open new ones).

## License

My Simple MVC is open source software [licensed as MIT](LICENSE.md).
