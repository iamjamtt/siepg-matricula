@props([
    'icon' => null
])

<li class="menu-title">
    @if ($icon)
        <i class="{{ $icon }}"></i>
    @endif
    <span>{{ $slot }}</span>
</li>
