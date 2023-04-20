<?php

declare(strict_types=1);

namespace Leeto\InputExtensionCharCount\InputExtensions;

use MoonShine\InputExtensions\InputExtension;

class CharCount extends InputExtension
{
    protected static string $view = 'char-count::input-extensions.char-count';

    protected array $xData = [
        'charCount: $refs.extensionInput.value.length',
        'init() {
            const input = this.$refs.extensionInput;
            input.addEventListener(`input`, () => {
                this.charCount = input.value.length
            })
        }',
    ];
}
