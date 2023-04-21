<head>
    <link rel="stylesheet" href="{{asset('/css/signup.css')}}">
</head>
<body>
  <div id="openModalReg" class="modal">
  <div class="modal-dialog-reg">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Регистрация</h3>
        <a href="#close" title="Close" class="close">×</a>
      </div>
      <div class="modal-body">    
        <img src="{{asset('images/logo.jpg')}}" 
        style="width=:197px;height:120px" 
        class="modal-image" />
        @if(Session::has('success'))
        <div>
          {{Session::get('success')}}
        </div>
        @endif
        <form method="POST" action="{{route('signup')}}" class="modal-form">
        @csrf
        <input placeholder="Имя" id="name" name="name" type="text" class="modal-input" required />
        <input placeholder="Логин" id="login" name="login" type="text" class="modal-input" required />
        <input placeholder="Электронная почта" id="email" name="email" type="email" class="modal-input" required />
        <input placeholder="Пароль" id="password" name="password" type="password" class="modal-input" required />
        <input placeholder="Повторение пароля" type="password" class="modal-input" required />
        <input value="Зарегистрироваться" type="submit" class="modal-send" />
        <div class="modal-position-reg">
        <p>Уже есть аккаунт?</p>
        <a href="#openModal">Войти</a>
        </div>
    </form>
        
      </div>
    </div>
  </div>
</div>  
</body>
