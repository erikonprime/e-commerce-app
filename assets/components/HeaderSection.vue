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

        <button class="header-action-btn" aria-label="open menu" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>

      </div>

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
      ]
    };
  },
};
</script>

<style scoped>

</style>
