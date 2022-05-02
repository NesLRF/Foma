<aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"></p>
          <p class="app-sidebar__user-designation">Inicio exitoso</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" ><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Formularios</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a @click="menu=2" href="#"class="treeview-item"><i class="icon fa fa-circle-o"></i> Componentes Form</a></li>
            <li><a @click="menu=3" href="#"class="treeview-item"><i class="icon fa fa-circle-o"></i> Componentes Pers</a></li>
            <li><a @click="menu=4" href="#"class="treeview-item"><i class="icon fa fa-circle-o"></i> Formularios de ejemplo</a></li>
            <li><a @click="menu=5" href="#"class="treeview-item"><i class="icon fa fa-circle-o"></i> Notificaciones</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Tablas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a @click="menu=1" href="#"class="treeview-item"><i class="icon fa fa-circle-o"></i> Data Tables</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="docs.html"><i class="app-menu__icon fa fa-file-code-o"></i><span class="app-menu__label">Docs</span></a></li>
      </ul>
    </aside>