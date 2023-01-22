<template>

  <header class="header" data-header>
    <div class="container">

      <div class="input-wrapper">
        <input type="search" name="search" placeholder="Search Anything..." class="input-field">

        <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
      </div>

      <a href="#" class="logo">Sweet Shop</a>

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

        <button class="header-action-btn" aria-label="open menu" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>

      </div>

    </div>

  </header>


  <!--  <section class="userLinks">-->
  <!--    <router-link class="link" to="">Help</router-link>-->
  <!--    |-->
  <!--    <router-link class="link" to="/joinus">Join Us</router-link>-->
  <!--    |-->
  <!--    <router-link class="link" to="/login">Sign In</router-link>-->
  <!--  </section>-->

  <!--  &lt;!&ndash;  nav&ndash;&gt;-->

  <!--  <div id="nav">-->
  <!--    <nav class="container navbar navbar-expand-lg navbar-light bg-light">-->
  <!--      <a class="navbar-brand" href="/">Logo Here</a>-->
  <!--      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"-->
  <!--              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
  <!--        <span class="navbar-toggler-icon"></span>-->
  <!--      </button>-->

  <!--      <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
  <!--        <div class="navbar-nav mr-auto">-->
  <!--          <li v-for="item in items">-->
  <!--            <router-link :to="item.link" class="nav-link">-->
  <!--              {{ item.name }}-->
  <!--            </router-link>-->
  <!--          </li>-->
  <!--        </div>-->
  <!--        <form class="d-flex">-->
  <!--          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
  <!--          <button class="btn btn-outline-success" type="submit">Search</button>-->
  <!--        </form>-->
  <!--      </div>-->
  <!--    </nav>-->
  <!--  </div>-->
  <!--  <router-view/>-->

  <!--  nav-->
</template>

<script>
export default {
  data() {
    return {
      items: [
        {link: '/home', name: 'Electronic'},
        {link: '/123', name: 'Fashion'},
        {link: '/cats', name: 'Sports & Leisure'},
      ]
    };
  },
};
</script>

<style scoped>

</style>
