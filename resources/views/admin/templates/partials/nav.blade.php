<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar" id="example-menu">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text">Blog Personal</li>
      <li><a href="#">Inicio</a></li>
      <li>
        <a href="#">Usuarios</a>
        <ul class="menu">
          <li><a href="{!!URL::to('admin/users')!!}">Ver</a></li>
          <li><a href="{!!URL::to('admin/users/create')!!}">Crear</a></li>
        </ul>
      </li>
      <li><a href="#">Categorias</a></li>
      <li><a href="#">Articulos</a></li>
      <li><a href="#">Imagenes</a></li>
      <li><a href="#">Tags</a></li>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu" data-dropdown-menu>
        <li>
          <a href="">Opciones</a>
        </li>
    </ul>
  </div>
</div>