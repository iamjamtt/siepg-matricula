@props([

])

<div id="scrollbar">
    <div class="container-fluid">
        <div id="two-column-menu"></div>
        <ul class="navbar-nav" id="navbar-nav">
            {{ $slot }}
        </ul>
    </div>
</div>

<div class="sidebar-background"></div>