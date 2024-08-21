@php
    $settings = app(\Astrogoat\Goaffpro\Settings\GoaffproSettings::class)
@endphp

@if($settings->enabled && $settings->key)
    <script type="text/javascript" src="https://api.goaffpro.com/loader.js?shop={{ $settings->key }}" defer></script>
@endif
