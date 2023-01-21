<template>
  <div id="app">
    <div id="nav">
      <router-link to="/home">Home</router-link>
      |
      <router-link to="/cats">Cats</router-link>
      |
      <router-link to="/dogs">Dogs</router-link>
      |
    </div>

    <b-container>
      <router-view/>
    </b-container>
    <Footer/>
  </div>
</template>

<script>
import Home from "./components/Home.vue";
import Layout from "./components/Layout";
import Footer from "./components/Footer";

export default {
  name: "App",
  components: {
    Footer,
    Layout,
    Home
  }
};
</script>

<style>
@import url('https://fonts.googleapis.com/css?family=Exo+2');

#app {
  background-color: #F8F8F8 !important;
  font-family: 'Exo 2', sans-serif !important;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
}
</style>