<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
<header class="bg-white banner">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <!-- Logo -->
      @if(is_home() || is_front_page())
        <h1 class="logos">
          <a class="navbar-brand p-0 align-self-center col" href="{{ home_url('/') }}" title="{{ get_bloginfo('name') }}">
              <img class="img-fluid" src="@if(get_field('website_logo', 'option')) {{ the_field('website_logo','option') }} @else {{ get_theme_file_uri().'/dist/images/logo.png' }} @endif" alt="{{ get_bloginfo('name', 'display') }}" title="{{ get_bloginfo('name') }}"/>
              <span class="sr-only"> {{ get_bloginfo('name') }} </span>
          </a>
        </h1>
      @else
        <h2 class="logos">
          <a class="navbar-brand p-0 align-self-center col" href="{{ home_url('/') }}" title="{{ get_bloginfo('name') }}">
              <img class="img-fluid" src="@if(get_field('website_logo', 'option')) {{ the_field('website_logo','option') }} @else {{ get_theme_file_uri().'/dist/images/logo.png' }} @endif" alt="{{ get_bloginfo('name', 'display') }}" title="{{ get_bloginfo('name') }}"/>
              <span class="sr-only"> {{ get_bloginfo('name') }} </span>
          </a>
        </h2>
      @endif

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <h2 class="sr-only">{{ _e('Breadcrumb navigation', 'domain') }}</h2>
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => false, 'menu_class' => 'navbar-nav ml-auto', 'walker' => new NavWalker()]) !!}
        @endif
      </div>
    </nav>
  </div>