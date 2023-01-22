<template>
  <LandingScreen/>
  <ProductsLine/>
</template>

<script>
import LandingScreen from "./LandingScreen";
import ProductsLine from "./ProductsList";

export default {
  name: "Main",
  components: {
    ProductsLine,
    LandingScreen,
  }
};
</script>