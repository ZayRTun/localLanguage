<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">

        <title>Laravel Local Test</title>
    </head>
    <body>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
              <a class="navbar-item" href="https://bulma.io">
                <h1 class="title">Localization</h1>
              </a>

              <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                  <span aria-hidden="true"></span>
                  <span aria-hidden="true"></span>
                  <span aria-hidden="true"></span>
              </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
              <div class="navbar-start">
                  <a class="navbar-item" href="/">
                  {{ __('master.home')}}
                  </a>

                  <a class="navbar-item" href="about">
                  {{ __('master.about')}}
                  </a>
              </div>

              <div class="navbar-end">
                  <div class="navbar-item">
                      <div class="buttons">
                          <a class="button is-primary" href="locale/mm">
                            <img src="{{asset('img/mm.png')}}" alt="">  Mya
                          </a>

                          <a class="button is-primary" href="locale/en">
                            <img src="{{asset('img/uk.png')}}" alt="">  Eng
                          </a>
                      </div>
                  </div>
              </div>
            </div>
    </nav>

        @yield ('content')

    </body>
</html>
