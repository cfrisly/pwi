 <a-layout-header :style="{ background: '#131921'}"><!-- Aqui puedo modificar el color de la barra de menu fff-->
    <a-row :gutter="15" type="flex">
        <a-col  :span="6">
            <a href="{{ route('home') }}">
                <div class="logo">Al chilazo</div>
            </a>
        </a-col>
        <a-col :span="18">
            <avored-nav
                :menus="{{ $menus }}"
                >
            </avored-nav>
        </a-col>
    </a-row>
</a-layout-header>
