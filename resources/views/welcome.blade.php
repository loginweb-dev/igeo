<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
  <link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsen-css-components.min.css">
  <script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>
  <script src="https://unpkg.com/jquery/dist/jquery.min.js"></script>
  
</head>
<body>
  {{-- <ons-navigator swipeable id="myNavigator" page="home.html"></ons-navigator> --}}
  {{-- <ons-navigator swipeable id="myNavigator" page="home.html"></ons-navigator> --}}

    <ons-splitter>
      <ons-splitter-side id="menu" side="left" collapse swipeable>
        <ons-page>
          <ons-list-title>Menu Principal</ons-list-title>
          <ons-list-item onclick="fn.load('home.html')" modifier="chevron" tappable>
            Inicio
          </ons-list-item>
          <ons-list-header>Linea Baja</ons-list-header>
          <ons-list>
            <ons-list-item onclick="fn.load('bt_postes.html')"  modifier="chevron" tappable>
              Postes
            </ons-list-item>
            <ons-list-item onclick="fn.load('about.html')" modifier="chevron" tappable>
              Lineas
            </ons-list-item>
            <ons-list-item onclick="fn.load('about.html')" modifier="chevron" tappable>
              Medidores
            </ons-list-item>
            <ons-list-item onclick="fn.load('about.html')" modifier="chevron" tappable>
              Acometidas
            </ons-list-item>
            <ons-list-header>Linea Media</ons-list-header>
            <ons-list>
              <ons-list-item onclick="fn.load('settings.html')" modifier="chevron" tappable>
                Postes
              </ons-list-item>
              <ons-list-item onclick="fn.load('about.html')" modifier="chevron" tappable>
                Lineas
              </ons-list-item>
              <ons-list-item onclick="fn.load('about.html')" modifier="chevron" tappable>
                Transformadores
              </ons-list-item>
              <ons-list-item onclick="fn.load('about.html')" modifier="chevron" tappable>
                Protecciones
              </ons-list-item>
              
          </ons-list>
        </ons-page>
      </ons-splitter-side>
      <ons-splitter-content id="content" page="home.html"></ons-splitter-content>
    </ons-splitter>
    
    <template id="home.html">
      <ons-page>
        <ons-toolbar>
          <div class="left">
            <ons-toolbar-button onclick="fn.open()">
              <ons-icon icon="md-menu"></ons-icon>
            </ons-toolbar-button>
          </div>
          <div class="center">
            Inicio
          </div>
        </ons-toolbar>
        <p style="text-align: center; opacity: 0.6; padding-top: 20px;">
          Hola, para iniciar con la captura de datos en campo, elije una opcion en el menu principal
        </p>
      </ons-page>
    </template>
    
    <template id="settings.html">
      <ons-page>
        <ons-toolbar>
          <div class="left">
            <ons-toolbar-button onclick="fn.open()">
              <ons-icon icon="md-menu"></ons-icon>
            </ons-toolbar-button>
          </div>
          <div class="center">
            Settings
          </div>
        </ons-toolbar>
      </ons-page>
    </template>
    
    <template id="about.html">
      <ons-page>
        <ons-toolbar>
          <div class="left">
            <ons-toolbar-button onclick="fn.open()">
              <ons-icon icon="md-menu"></ons-icon>
            </ons-toolbar-button>
          </div>
          <div class="center">
            About
          </div>
        </ons-toolbar>
      </ons-page>
    </template>


    {{-- baja tension  --}}
    <template id="bt_postes.html">
      <ons-page class="page">
        <ons-toolbar>
          <div class="left"><ons-back-button onclick="goBack()">Atras</ons-back-button></div>
          <div class="center">Postes</div>
        </ons-toolbar>
   
      </ons-page>
    </template>

  <script src="https://socket.loginweb.dev/socket.io/socket.io.js"></script>
  <script>
    const socket = io('https://socket.loginweb.dev')
    $(document).ready(function () {
      window.fn = {};

      window.fn.open = function() {
          var menu = document.getElementById('menu');
          menu.open();
      };

      window.fn.load = function(page) {
        var content = document.getElementById('content');
        var menu = document.getElementById('menu');
            content.load(page)
              .then(menu.close.bind(menu));
      };
    });


    function goBack() {
      // document.querySelector('#menu').close().then(function() {
      //   document.querySelector('#myNavigator').popPage()
      // });
      document.querySelector('#menu').pushPage('home.html');
    }
    </script>


</body>
</html>
