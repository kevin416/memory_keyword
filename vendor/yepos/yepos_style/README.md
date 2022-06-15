[![Issues](https://img.shields.io/github/issues/kevin416/memory_keyword.svg?style=flat-square)](https://github.com/kevin416/memory_keyword/issues)
[![Stars](https://img.shields.io/github/stars/kevin416/memory_keyword.svg?style=flat-square)](https://github.com/kevin416/memory_keyword/stargazers)

## Keyword for daily

## Just a simple app to easy remembering what you done daily.

# The Parent project needs to install the required dependencies

composer require laravelcollective/html

'providers' => [
...
Collective\Html\HtmlServiceProvider::class,
...
],

'aliases' => [
...
'Form' => Collective\Html\FormFacade::class,
'Html' => Collective\Html\HtmlFacade::class,
...
],
