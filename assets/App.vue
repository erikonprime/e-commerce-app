<template>
  <HeaderSection/>
  <HeroSection/>
  <AboutSection/>
  <NewsletterSection/>
  <FooterSection/>
</template>

<script>

import FooterSection from "./components/FooterSection";
import HeaderSection from "./components/HeaderSection";
import HeroSection from "./components/HeroSection";
import AboutSection from "./components/AboutSection";
import NewsletterSection from "./components/NewsletterSection";

export default {
  name: "App",
  components: {
    HeaderSection,
    FooterSection,
    HeroSection,
    AboutSection,
    NewsletterSection
  },
  mounted() {
    const recaptchaScript = document.createElement("script");
    recaptchaScript.setAttribute(
        "src",
        "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    );

    const recaptchaScript2 = document.createElement("script");
    recaptchaScript.setAttribute(
        "src",
        "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    );
    document.head.appendChild(recaptchaScript);
    document.head.appendChild(recaptchaScript2);
  },
};
</script>

<style>


@import url('https://fonts.googleapis.com/css?family=Exo+2');
@import url('https://fonts.googleapis.com');
@import url('https://fonts.gstatic.com');
@import url('https://fonts.googleapis.com/css2?family=Mr+De+Haviland&family=Roboto:wght@400;500;700&display=swap');


/*-----------------------------------*\
  #CUSTOM PROPERTY
\*-----------------------------------*/

:root {

  /**
   * colors
   */

  --red-orange-color-wheel: hsl(17, 96%, 48%);
  --middle-blue-green: hsl(167, 45%, 72%);
  --smokey-black: hsl(0, 0%, 7%);
  --spanish-gray: hsl(0, 0%, 60%);
  --granite-gray: hsl(0, 0%, 40%);
  --tan-crayola: hsl(27, 46%, 58%);
  --light-gray: hsl(0, 0%, 80%);
  --black_10: hsla(0, 0%, 0%, 0.1);
  --black_25: hsla(0, 0%, 0%, 0.25);
  --black_50: hsla(0, 0%, 0%, 0.4);
  --black_70: hsla(0, 0%, 0%, 0.7);
  --cultured: hsl(220, 16%, 96%);
  --manatee: hsl(218, 11%, 65%);
  --black: hsl(0, 0%, 0%);
  --white: hsl(0, 0%, 100%);

  /**
   * typography
   */

  --ff-roboto: 'Roboto', sans-serif;
  --ff-mr_de_haviland: 'Mr De Haviland', cursive;

  --fs-1: 6rem;
  --fs-2: 3rem;
  --fs-3: 2rem;
  --fs-4: 1.8rem;
  --fs-5: 1.4rem;
  --fs-6: 1.2rem;

  --fw-700: 700;
  --fw-500: 500;

  /**
   * spacing
   */

  --section-padding: 50px;

  /**
   * shadow
   */

  --shadow: 0 0 2px hsla(0, 0%, 0%, 0.2);

  /**
   * transition
   */

  --transition-1: 0.25s ease;
  --transition-2: 0.5s ease;
  --cubic-in: cubic-bezier(0.51, 0.03, 0.64, 0.28);
  --cubic-out: cubic-bezier(0.33, 0.85, 0.4, 0.96);

}
</style>