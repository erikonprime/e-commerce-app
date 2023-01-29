<template>
  <footer class="footer">
    <div class="container">

      <div class="footer-top section">

        <div class="footer-brand">

          <a href="#" class="logo">Sweet Shop</a>

          <ul>

            <li class="footer-list-item">
              <ion-icon name="location-sharp" aria-hidden="true"></ion-icon>

              <address class="address">
                Riga, Latvia, LV 2022
              </address>
            </li>

            <li class="footer-list-item">
              <ion-icon name="call-sharp" aria-hidden="true"></ion-icon>

              <a href="tel:+1234567890" class="footer-link">+371 5555555</a>
            </li>

            <li>
              <ul class="social-list">

                <li>
                  <a href="#" class="social-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="#" class="social-link">
                    <ion-icon name="logo-instagram"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="#" class="social-link">
                    <ion-icon name="logo-vk"></ion-icon>
                  </a>
                </li>

              </ul>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Help & Information</p>
          </li>

          <li>
            <a href="#" class="footer-link">Help & Contact Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Returns & Refunds</a>
          </li>

          <li>
            <a href="#" class="footer-link">Online Stores</a>
          </li>

          <li>
            <a href="#" class="footer-link">Terms & Conditions</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">About Us</p>
          </li>

          <li>
            <a href="#" class="footer-link">About Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">What We Do</a>
          </li>

          <li>
            <a href="#" class="footer-link">FAQ Page</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contact Us</a>
          </li>

        </ul>

        <div class="footer-list">

          <p class="footer-list-title">Newsletter</p>

          <form action="" class="footer-form">
            <input type="email" name="email_address" placeholder="Your email address" required class="email-field">

            <button type="submit" class="footer-form-btn">
              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </button>
          </form>

          <div class="wrapper">

            <a href="#" class="footer-link">Term & Condition</a>
            <a href="#" class="footer-link">Policy</a>
            <a href="#" class="footer-link">Map</a>



          </div>

        </div>

      </div>

      <div class="footer-bottom">

        <p class="copyright">
          &copy; {{ currYear }} All Rights Reserved by <a href="https://github.com/erikonprime" target="_blank" class="copyright-link">erikonprime</a>.
        </p>

      </div>

    </div>
  </footer>
</template>

<script>
export default {
  data() {
    return {
      currYear: new Date().getFullYear(),
    };
  },
};
</script>

<style scoped>
/*-----------------------------------*\
  #FOOTER
\*-----------------------------------*/

.footer-top {
  display: grid;
  gap: 30px;
  padding-block-end: 40px;
}

.footer-list-item {
  display: flex;
  align-items: center;
  gap: 10px;
}

.footer-link {
  padding-block: 4px;
  transition: var(--transition-1);
}

.footer-link:is(:hover, :focus) { color: var(--tan-crayola); }

.footer-brand .social-list { margin-block-start: 30px; }

.footer-list-title {
  color: var(--smokey-black);
  font-size: var(--fs-4);
  font-weight: var(--fw-500);
  margin-block-end: 15px;
}

.footer-form { position: relative; }

.footer .email-field {
  padding-block: 10px;
  padding-inline-end: 35px;
  border-block-end: 1px solid var(--black_25);
  outline: none;
}

.footer .email-field:focus { border-color: var(--tan-crayola); }

.footer-form-btn {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  font-size: 20px;
  color: var(--granite-gray);
}

.footer-list .wrapper {
  display: flex;
  gap: 20px;
  margin-block-start: 20px;
}

.copyright {
  text-align: center;
  padding-block: 20px;
}

.copyright-link { display: inline-block; }
</style>
