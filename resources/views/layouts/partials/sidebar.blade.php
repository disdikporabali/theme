<x-maz-sidebar :href="url('/')" :logo="asset('images/logo/logo.png')">

    <!-- Add Sidebar Menu Items Here -->
    @php
        $menus=[
            [
                "name"=>"Dashboard",
                "route"=>"",
                "icon"=>"bi bi-grid-fill",
            ],
            [
                "name"=>"Pegawai",
                "route"=>"user",
                "icon"=>"bi-people-fill"
            ],
            [
                "name"=>"Jabatan",
                "route"=>"jabatan",
                "icon"=>"bi bi-person-plus-fill"
            ],
            [
                "name"=>"Rekap Kegiatan",
                "route"=>"kegiatan",
                "icon"=>"bi bi-file-earmark-text-fill",
            ],
            
        ];
        
    @endphp

    @foreach ($menus as $menu)
    @php
        $active=Request::segment(1)==$menu['route'];
    @endphp
    <x-maz-sidebar-item :name="$menu['name']" :link="url($menu['route'])" :icon="$menu['icon']" :submenu="array_key_exists('submenu', $menu)?$menu['submenu']:[]" :active="$active"></x-maz-sidebar-item>
    @endforeach
    
</x-maz-sidebar>