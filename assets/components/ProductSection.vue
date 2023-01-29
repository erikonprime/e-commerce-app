<template>
  <section class="section product" id="product" aria-label="product">
    <div class="container">

      <div class="title-wrapper">
        <h2 class="h2 section-title">Popular Products</h2>

        <ul class="filter-btn-list">

          <li class="filter-btn-item">
            <button class="filter-btn active" data-filter-btn="all">All Products</button>
          </li>

          <li class="filter-btn-item">
            <button class="filter-btn" data-filter-btn="accessory">Accessory</button>
          </li>

          <li class="filter-btn-item">
            <button class="filter-btn" data-filter-btn="decoration">Decoration</button>
          </li>

          <li class="filter-btn-item">
            <button class="filter-btn" data-filter-btn="furniture">Furniture</button>
          </li>

        </ul>
      </div>

      <div class="products">
        <div class="row">
          <div class="col-md-4 product-card" v-for="(item, index) in products_list" :key="index">
<!--            <card-template :item="item" />-->
            <a
                href="#"
                class="card-banner img-holder has-before"
                style="--width: 300; --height: 300;"
                v-on:click="navigateProductDetail(item)">
              <img src="../img/hero/hero-5.jpg" width="300" height="300" loading="lazy"
                   alt="Animi Dolor Pariatur" class="img-cover">

              <ul class="card-action-list">

                <li>
                  <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                    <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </li>

                <li>
                  <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                    <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                  </button>
                </li>

                <li>
                  <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                    <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                  </button>
                </li>

              </ul>

<!--              <ul class="badge-list">-->

<!--                <li>-->
<!--                  <div class="badge orange">Sale</div>-->
<!--                </li>-->

<!--                <li>-->
<!--                  <div class="badge cyan">-10%</div>-->
<!--                </li>-->

<!--              </ul>-->
            </a>

            <div class="card-content">
              <h3 class="h3">
                <a href="#" class="card-title">Animi Dolor Pariatur</a>
              </h3>

              <div class="card-price" style="margin-block:5px 5px;">
                <del class="del">$19.00</del>

                <data class="price" value="10">$10.00</data>
              </div>
            </div>

          </div>
        </div>
<!--        <edit-product ref="editProduct" />-->
      </div>


    </div>
  </section>

</template>

<script>
import ProductTemplate from "./ProductDetails";
export default {
  name: "productslist",
  props: ["products_list"],
  components: {
    ProductTemplate
  },
  methods: {
    navigateProductDetail(product) {
      this.$router.push({
        name: "productDetails",
        params: {id: product},
      });
    },
  },
  data() {
    return {
      products_list: [
          1,2,3,4,5
      ],
    };
  }
};
</script>

<style scoped>

</style>
