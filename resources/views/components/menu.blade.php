    <head>
        <link rel="stylesheet" href="{{asset('css/menu.css')}}">
        <script src="{{ asset('js/components/menuSwitcher.js')}}"></script>
    </head>
    <body>
      <section class="menuSection">
        <a href="/">
          <div
            id="one"
            class="menuFirstElement">
            <img src="{{asset('images/home-white.png')}}" style="width:23px;height:25px" />
            <p class="menu__buttonScript"> Главная </p>
          </div>
        </a>
        <a  href="/favorites">
          <div   id="two" class="menu__button">
            <img src="{{asset('images/like-linear.png')}}" style="width:23px;height:21px" />
            <p class="menu__buttonScript"> Понравившееся </p>
          </div>
        </a>
        <a  href="/myvideo">
          <div id="three" class="menu__button">
            <img src="{{asset('images/video-linear.png')}}" style="width:25px;height:18.19px" />
            <p class="menu__buttonScript"> Мои видео </p>
          </div>
        </a>
        <a href="/addvideo">
          <div id="four" class="menu__button">
            <img src="{{asset('images/plus-linear.png')}}" style="width:23px;height:23px" />
            <p class="menu__buttonScript"> Добавить </p>
          </div>
        </a>
        <hr />
        <a href="#openModal">
        <div class="descriptionRegMenu">
          <img src="{{asset('images/menuAccount.png')}}" style="width:23px;height:23px" />
          <input type="submit" value="Войти" class="reg__button-menu" />
          </div>
      </section>
      </body>