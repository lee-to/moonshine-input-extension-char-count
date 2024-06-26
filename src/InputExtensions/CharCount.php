<?php

declare(strict_types=1);

namespace Leeto\InputExtensionCharCount\InputExtensions;

use MoonShine\InputExtensions\InputExtension;

class CharCount extends InputExtension
{
    protected string $view = 'char-count::input-extensions.char-count';

    public function __construct(
        protected ?int $max = 0,
        protected ?int $min = 0,
        protected mixed $value = null
    ) {
        parent::__construct($value);

        $this->xData = [
            'charCount: $refs.extensionInput.value.length',
            "max:{$this->max}",
            'isWarning: false',
            "init() {
                const input = this.\$refs.extensionInput;
                min = {$this->min};
                const maxRoundPercent = (this.max * 0.20) | 0;
                this.isWarning =
                    (min > 0 && input.value.length < min)
                    ||(this.max > 0 && (this.max - input.value.length) <= maxRoundPercent);
                input.addEventListener(`input`, () => {
                    const inputValue = input.value;
                    const inputLength = inputValue.length;
                    this.isWarning =
                        (min > 0 && inputLength < min)
                        ||(this.max > 0 && (this.max - inputLength) <= maxRoundPercent);

                    if (this.max > inputLength || this.max === 0) {
                        this.charCount = inputLength;
                    } else {
                        this.charCount = this.max;
                        input.value = inputValue.slice(0, this.max);
                    }
                })
            }",
        ];
    }
}
