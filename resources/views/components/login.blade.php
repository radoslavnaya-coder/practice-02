<head>
    <link rel="stylesheet" href="{{asset('/css/login.css')}}">
</head>
<body>
  <div id="openModal" class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Вход</h3>
        <a href="#close" title="Close" class="close">×</a>
      </div>
      <div class="modal-body">    
        <img src="{{asset('images/logo.jpg')}}" 
        style="width=:197px;height:120px" 
        class="modal-image" />
        <form action="" class="modal-form">
        <input placeholder="Логин" type="text" class="modal-input" required />
        <input placeholder="Пароль" type="password" class="modal-input" required />
        <input value="Войти" type="submit" class="modal-send" />
        <div class="modal-position">
        <p>Нет аккаунта?</p>
        <a href="#openModalReg">Зарегистрироваться</a>
        </div>  
    </form>
        
      </div>
    </div>
  </div>
</div>  
</body>
