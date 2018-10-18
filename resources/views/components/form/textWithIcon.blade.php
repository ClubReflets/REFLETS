<div class="uk-margin">
    <div class="uk-inline uk-width-1-1">
        <span class="uk-form-icon" uk-icon="icon: {{$icon}}"></span>
        {{ Form::text($name, $value, array_merge(['class' => 'uk-input', 'placeholder' => $label], $attributes)) }}
    </div>
</div>

