### Input extension - display the number of characters

Input extension - display the number of characters for MoonShine

### Installation

```
    composer require lee-to/moonshine-input-extension-char-count
```


```php
    use Leeto\InputExtensionCharCount\InputExtensions\CharCount;

    //
    Text::make('Field')
        ->extension(new CharCount()),
```
