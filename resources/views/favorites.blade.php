<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Понравившееся</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
          href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap"
          rel="stylesheet"
        />
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}" >
        
    </head>
    <body>
    <x-Login />
    <x-Signup />
    <main class="main">
        <div class="description">
          <img
          src="{{asset('images/logo.jpg')}}" style="width=:126px;height:48px"
            alt="Vercel Logo"
            class="vercelLogo"
          />
          <div class="descriptionSearch">
            <input type="search" class="search__input" />
            <a class="search__button">
              <img src="{{asset('images/searchButton.png')}}" style="width:19.78px;height:19.78px" />
            </a>
          </div>
          <a href="#openModal">
            <div class="descriptionReg">
              <img src="{{asset('images/account.png')}}" style="width:17px;height:17px" />
              <input
                type="submit"
                value="Войти"
                class="reg__button"
              />
            </div>
          </a>
        </div>
      </main>
      <section class="blocks__designer">
        <div>
          <x-Menu />
        </div>
        <div>
          <x-Category />
          <x-Videoplace />
        </div>
      </section>
    </body>
</html>
