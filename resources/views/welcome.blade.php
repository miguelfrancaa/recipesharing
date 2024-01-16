<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <title>{{ config('app.name', 'RecipeSharing') }}</title>

    <!-- Style -->
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />


  
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <header class="pt-4 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo">Recipe Sharing</div>
                </div>
                <div class="col-md-1"></div>
                 <div class="col-md-6">
                    <div class="input-group rounded">
                      <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                      <span class="input-group-text border-0" id="search-addon">
                        <i class="bi bi-search"></i>
                      </span>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-2 d-flex justify-content-end align-items-end">   
                    @if (Route::has('login'))
                        @auth
                            <a class="loginLinks" href="{{ url('/home') }}">Home</a>
                        @else
                            <a class="loginLinks" href="{{ route('login') }}">Log in</a>

                            @if (Route::has('register'))
                                <a class="ms-3 loginLinks" href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    @endif
                </div> 
            </div>
            <div class="row mt-5">
                <div class="dropdown menu1 col">
                  <button class="menuBtn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Recipes
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">dasdas</a></li>
                    <li><a class="dropdown-item" href="#">dasdsadsa</a></li>
                    <li><a class="dropdown-item" href="#">dasdsadsas</a></li>
                  </ul>
                </div>
                <div class="dropdown menu1 col">
                  <button class="menuBtn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Health
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">dasdas</a></li>
                    <li><a class="dropdown-item" href="#">dasdsadsa</a></li>
                    <li><a class="dropdown-item" href="#">dasdsadsas</a></li>
                  </ul>
                </div>
                <div class="dropdown menu1 col">
                  <button class="menuBtn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    News
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">dasdas</a></li>
                    <li><a class="dropdown-item" href="#">dasdsadsa</a></li>
                    <li><a class="dropdown-item" href="#">dasdsadsas</a></li>
                  </ul>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="light">
            <div class="container py-2">
                <div class="h1 text-start text-dark" id="pageHeaderTitle">Last recipes</div>

                <article class="postcard light blue">
                    <a class="postcard__img_link" href="#">
                        <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
                    </a>
                    <div class="postcard__text t-dark">
                        <h1 class="postcard__title blue"><a href="#">Podcast Title</a></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                            <li class="tag__item play blue">
                                <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="postcard light red">
                    <a class="postcard__img_link" href="#">
                        <img class="postcard__img" src="https://picsum.photos/501/500" alt="Image Title" /> 
                    </a>
                    <div class="postcard__text t-dark">
                        <h1 class="postcard__title red"><a href="#">Podcast Title</a></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                            <li class="tag__item play red">
                                <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="postcard light green">
                    <a class="postcard__img_link" href="#">
                        <img class="postcard__img" src="https://picsum.photos/500/501" alt="Image Title" />
                    </a>
                    <div class="postcard__text t-dark">
                        <h1 class="postcard__title green"><a href="#">Podcast Title</a></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                            <li class="tag__item play green">
                                <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="postcard light yellow">
                    <a class="postcard__img_link" href="#">
                        <img class="postcard__img" src="https://picsum.photos/501/501" alt="Image Title" />
                    </a>
                    <div class="postcard__text t-dark">
                        <h1 class="postcard__title yellow"><a href="#">Podcast Title</a></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                            <li class="tag__item play yellow">
                                <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                            </li>
                        </ul>
                    </div>
                </article>
            </div>
        </section>
    </main>
</body>
</html>