<template>
  <div class="container-flex">
    <nav class="navbar navbar-light">
      <div class="dropdown d-xl-none d-lg-none mr-auto">
        <img src="https://png.icons8.com/windows/32/000000/menu.png" data-toggle="dropdown" data-target="#navd" aria-haspopup="true" aria-expanded="false">
        <div class="dropdown-menu hb" aria-labelledby="navd">
          <router-link class="dropdown-item" to="/">Home</router-link>
          <router-link class="dropdown-item" to="/products">Productos</router-link>
          <router-link class="dropdown-item" to="/contact">Contactanos</router-link>
        </div>
      </div>
      <!--Logo-->
      <a class="navbar-brand py-0 pl-5">
<!--        <img src="@/assets/fi-logo.svg" width="50" height="50">-->
      </a>
      <!--Header navigation-->
      <span class="navbar-item bc d-none d-xl-block d-lg-block py-0">
        <router-link class="pl-5" to="/">Home</router-link>
        <router-link class="px-5" to="/products">Productos</router-link>
        <router-link to="/contact">Contactanos</router-link>
      </span>

      <p class="navbar-item ml-auto"/>
      <div class="searc d-none d-xl-block d-xl-block pr-6">
        <input type="search" class="search">
      </div>
      <div class="user">
        <h5 style="cursor: pointer" data-toggle="modal" data-target="#userModal">Registrar</h5>
      </div>
      <div class="user">
        <h5 style="cursor: pointer" >/</h5>
      </div>
      <div class="user">
        <h5 style="cursor: pointer" data-toggle="modal" data-target="#userModal">Ingresar</h5>
      </div>

      <div class="bag" @click="openCart">
<!--        <img class="pb-1" src="@/assets/cart.svg">-->
        <span class="mb-3" v-if="this.bagItemscount > 0">{{ bagItemscount }}</span>
      </div>
    </nav>
    <!--User Modal-->
    <div class="modal fade" id="userModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" style="outline-style:none;" aria-label="Close">
              <span>x</span>
            </button>
            <form class="px-3 py-2">
              <div class="form-group">
                <label for="exampleDropdownFormEmail1">Correo</label>
                <input type="email" class="form-control" placeholder="email@example.com">
              </div>
              <div class="form-group">
                <label for="exampleDropdownFormPassword1">Password</label>
                <input type="password" class="form-control" placeholder="Password">
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input">
                <label class="form-check-label" for="dropdownCheck">
                  Remember me
                </label>
              </div>
              <button type="submit" class="btn-xl btn-success mt-3">Sign in</button>
            </form>
          </div>
          <div class="modal-footer">
            <a class="dropdown-item" href="#">Forgot password?</a>
            <a class="dropdown-item text-right" href="#">Sign up</a>
          </div>
        </div>
      </div>
    </div>
    <!--Cart Component-->
    <Cart ref="cartMove" />
  </div>
</template>