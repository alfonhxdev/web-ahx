<nav>
    <section id="nav" class="nav">
        <a id="btn-close-menu" class="closeBtn"><i class="fas fa-times"></i></a>
        @foreach ($menu as $menu)
            <a data-aos="fade-left" data-aos-duration="2000" data-id="{{ $menu->id }}" href="#{{ $menu->link }}"
                class="active main"><i class="{{ $menu->icon }}"></i>
                {{ $menu->name }}
            </a>
        @endforeach
    </section>
</nav>
