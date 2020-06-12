{{-- {{dd($menusComposer)}} --}}
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src='{{asset("assets/$theme/img/parrotLogo.png")}}' alt="Parrot Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Parrot System 2004</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src='{{asset("assets/$theme/img/Foto Jose.jpg")}}' class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{session()->get('nombre_usuario') ?? 'Invitado'}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="sidebar-menu nav-sidebar nav nav-pills  flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li class="nav-header ">Menu Principal</li>
                @foreach ($menusComposer as $key =>$item)
                    @if ($item["menu_id"] != 0)
                        @break
                    @endif
                    @include("theme.$theme.menu-item", ["item" => $item])
                @endforeach
            </li>
        </ul>
       </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
