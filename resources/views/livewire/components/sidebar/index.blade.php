<div>
    <x-sidebar>
        <x-sidebar.title>
            Menu
        </x-sidebar.title>
        <x-sidebar.item
            name="Inicio"
            :route="route('inicio.index')"
            routeIs="inicio.index"
            icon="ri-home-6-line"
        />

        <x-sidebar.title icon="ri-more-fill" class="mt-2">
            Otros
        </x-sidebar.title>
        <x-sidebar.item
            name="Matricula"
            route="#"
            routeIs="matricula.index"
            icon="ri-folder-5-line"
        />

        {{-- <x-sidebar.item
            name="Matricula"
            icon="ri-folder-5-line"
            routeIs="inicio.*"
        >
            <x-sidebar.subItem
                :route="route('inicio.index')"
                routeIs="inicio.index"
            >
                Inicio
            </x-sidebar.subItem>
            <x-sidebar.subItem
                route="#"
                routeIs="inicio.show"
            >
                Otros
            </x-sidebar.subItem>
        </x-sidebar.item> --}}
    </x-sidebar>
</div>
