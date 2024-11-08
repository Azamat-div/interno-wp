      <footer class="bg">
         <div class="container">
            <div class="footer">
               <a href="https://interno-test.ru/" class="logo">
               <img src="<?php echo INTERNO_IMG_DIR ?>/logo.svg" alt="" />
               </a>
               <div class="footer__info">
                  <p class="footer__address">
                     55 East Birchwood Ave. <br />Brooklyn, New York 11201
                  </p>
                  <a href="mailto:<?php the_field('email'); ?>"> <?php the_field('email', 139); ?> </a>
                  <a href="tel:<?php the_field('phone'); ?>"> <?php the_field('phone', 139); ?> </a>
               </div>
            </div>
         </div>
      </footer>
   <?php wp_footer(); ?>
   </body>
</html>