<?php
session_start();
?>
<div class="account2">
  <div class="image img-cir img-120">
    <img src="images/icon/avatar-big-01.jpg" alt="John Doe" />
  </div>
  <h4 class="name">Usuario - <?= $_SESSION['puesto']?></h4>
  <a href="#" onclick="modalsito('¿Estas seguro que deseas cerrar sesion?','Cerrar Sesion')">Cerrar Sesión</a>
</div>
<nav class="navbar-sidebar2">
  <ul class="list-unstyled navbar__list">
    <li class="has-sub">
      <a class="js-arrow" href="#">
        <i class="fas fa-trophy"></i>Recursos Humanos
        <span class="arrow">
          <i class="fas fa-angle-down"></i>
        </span>
      </a>
      <ul class="list-unstyled navbar__sub-list js-sub-list">
        <li>
          <a href="MRecursosHumanos/myprofile.php" target="gloricenter">
            <i class="fas fa-tachometer-alt"></i>Perfil de empleado
          </a>
        </li>
        <li>
          <a href="MRecursosHumanos/emp-changepassword.php" target="gloricenter">
            <i class="fas fa-tachometer-alt"></i>Cambiar Contraseña
          </a>
        </li>
        <li>
          <a href="MRecursosHumanos/capacitaciones-pendientes.php" target="gloricenter">
            <i class="fas fa-tachometer-alt"></i>Capacitaciones
          </a>
        </li>

        <li class="has-sub">
          <a class="js-arrow" href="#">&nbsp&nbsp&nbsp
            <i class="fas fa-trophy"></i>Permisos
            <span class="arrow">
              <i class="fas fa-angle-down"></i>
            </span>
          </a>
          <ul class="list-unstyled navbar__sub-list js-sub-list">
            <li>
              <a href="MRecursosHumanos/apply-leave.php" target="gloricenter">
                <i class="fas "></i>Aplicar Permiso
              </a>
            </li>
            <li>
              <a href="MRecursosHumanos/leavehistory.php"  target="gloricenter">
                <i class="fas "></i>Ver permisos hechos
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </li>

    <?php
    if ($_SESSION['area']=="Compras") {
      ?>
      <li class="has-sub">
        <a class="js-arrow" href="#">
          <i class="fas fa-chart-bar"></i>Compras
          <span class="arrow">
            <i class="fas fa-angle-down"></i>
          </span>
        </a>
        <ul class="list-unstyled navbar__sub-list js-sub-list">
          <li>
            <a href="./MCompras/Ordenes de Compra/OrdenesCompra_Mortal.php" target="gloricenter">
              <i class="fas fa-tachometer-alt"></i>Gestión Ordenes de Compra
            </a>
          </li>
        </ul>
      </li>
      <?php
    }
    ?>

    <?php
    if ($_SESSION['area']=="Finanzas") {
      ?>
      <li class="has-sub">
        <a class="js-arrow" href="#">
          <i class="fas fa-desktop"></i>Financiero
          <span class="arrow">
            <i class="fas fa-angle-down"></i>
          </span>
        </a>
        <ul class="list-unstyled navbar__sub-list js-sub-list">
          <li>
            <a href="MFinanzas/Asiento/mainAsiento.php" target="gloricenter">
              <i class="fas fa-tachometer-alt"></i>Asientos
            </a>
          </li>
          <li>
            <a href="MFinanzas/Estados/mainEstados.php" target="gloricenter">
              <i class="fas fa-tachometer-alt"></i>Estados Financieros
            </a>
          </li>
          <li>
            <a href="MFinanzas/Devoluciones/mainDevoluciones.php" target="gloricenter">
              <i class="fas fa-tachometer-alt"></i>Devoluciones
            </a>
          </li>
        </ul>
      </li>
      <?php
    }
    ?>

    <li class="has-sub">
      <a class="js-arrow" href="#">
        <i class="fas fa-box-open"></i>Mantenimiento
        <span class="arrow">
          <i class="fas fa-angle-down"></i>
        </span>
      </a>
      <ul class="list-unstyled navbar__sub-list js-sub-list">
        <li>
          <a href="MMantenimiento/#!/raiz/empleado/productosE">
            <i class="fas fa-tachometer-alt"></i>Inventario de productos
          </a>
        </li>
        <li>
          <a href="MMantenimiento/#!/raiz/empleado/peticionesE">
            <i class="fas fa-tachometer-alt"></i>Peticiones de mantenimiento
          </a>
        </li>
        <li>
          <a href="MMantenimiento/#!/raiz/empleado/ordenesE">
            <i class="fas fa-tachometer-alt"></i>Órdenes de trabajo
          </a>
        </li>
      </ul>
    </li>
  </ul>
</nav>
