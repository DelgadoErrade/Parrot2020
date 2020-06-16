@if ($item["submenu"] == [])
<li class="nav-item">
        <a href="{{url($item['url'])}}" class="nav-link {{getMenuActivo($item["url"])}}">
          <i class="nav-icon {{$item["icono"]}}"></i> <span>{{$item["nombre"]}}</span>
        </a>
    </li>
@else
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon {{$item["icono"]}}"></i>
           <p>
               {{$item["nombre"]}}
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            @foreach ($item["submenu"] as $submenu)
                @include("theme.$theme.menu-item", ["item" => $submenu])
            @endforeach
        </ul>
    </li>
@endif
