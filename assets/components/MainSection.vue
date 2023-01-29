<template>
  <HeroSection/>
  <AboutSection/>
  <ProductSection/>
  <NewsletterSection/>
</template>

<script>
import HeaderSection from "./HeaderSection";
import FooterSection from "./FooterSection";
import HeroSection from "./HeroSection";
import AboutSection from "./AboutSection";
import NewsletterSection from "./NewsletterSection";
import ProductSection from "./ProductSection";

export default {
  components: {
    HeaderSection,
    FooterSection,
    HeroSection,
    AboutSection,
    NewsletterSection,
    ProductSection
  },
  data() {
    return {
    };
  },
};
</script>

<style scoped>

</style>
