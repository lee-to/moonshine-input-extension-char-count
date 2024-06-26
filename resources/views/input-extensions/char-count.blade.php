@props(['extension'])
<button class="expansion" type="button">
    <span x-text="charCount"></span><span x-show="max > 0" x-text="'/' + max" :class="{'text-pink-400': isWarning}"></span>
</button>

