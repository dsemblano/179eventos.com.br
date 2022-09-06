{{-- <header class="banner">
  <a class="brand" href="{{ home_url('/') }}">
    {!! $siteName !!}
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif
</header> --}}


<header class="banner fixed top-0 w-full z-50 pt-20">
  <nav class="nav-primary container py-2 px-4 lg:px-16">
    <div class="flex flex-wrap lg:flex-nowrap justify-center items-center mx-auto">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex flex-col mt-4 hidden lg:flex items-center font-bold lg:flex-row lg:space-x-8 lg:mt-0 lg:text-2xl text-white uppercase', 'echo' => false]) !!}
    </div>
  </nav>
</header>