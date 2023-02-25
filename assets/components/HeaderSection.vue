<template>

  <header class="header" data-header>
    <div class="container">

      <div class="input-wrapper">
        <input type="search" name="search" placeholder="Search Anything..." class="input-field">

        <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
      </div>

      <a href="/" class="logo">Sweet Shop</a>

      <div class="header-action">

        <button class="header-action-btn" aria-label="user">
          <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
        </button>

        <button class="header-action-btn" aria-label="favorite list">
          <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>

          <span class="btn-badge">0</span>
        </button>

        <button class="header-action-btn" aria-label="cart">
          <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

          <span class="btn-badge">0</span>
        </button>

        <button class="header-action-btn" aria-label="open menu" data-nav-toggler  @click="isActive=!isActive" >
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>

      </div>

    </div>

    <div id="sidebar" class="sidenav" :class="{openNavClass: isActive}">
      <a class="closebtn" @click="isActive=!isActive">&times;</a>
      <a href="#" class="card-title">About</a>
      <a href="#" class="card-title">Services</a>
      <a href="#" class="card-title">Clients</a>
      <a href="#" class="card-title">Contact</a>
    </div>

  </header>

</template>

<script>
export default {
  data() {
    return {
      items: [
        {link: '/home', name: 'Electronic'},
        {link: '/123', name: 'Fashion'},
        {link: '/cats', name: 'Sports & Leisure'},
      ],
      isActive: false
    };
  },
};
</script>

<style scoped>
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  background-color: var(--white);
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}
.openNavClass {
  width:250px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: var(--tan-crayola);
  cursor: pointer;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
