<?php get_header(); ?>

<div class="thumb">
      <img class="thumb__img" src="<?php echo INTERNO_IMG_DIR ?>/bg-contact.jpg" alt="">
      <div class="thumb__info">
      <h2 class="title thumb__title">Contact Us</h2>
      <ul class="breadcrumbs">
            <li><a href="<?php echo home_url(); ?>">Home</a></li>
            <li>Contact</li>
      </ul>
      </div>
</div>
<section class="page contact">
      <div class="container">
            <h2 class="title">We love meeting new people and helping them.</h2>
            <div class="contact__box">
                  <div class="contact__info">
                        <ul class="contact-list">
                              <li class="contact-list__item contact-list__email">
                                    <a class="contact-list__link" href="mailto:info@yourdomain.com"><?php the_field('email', 208); ?></a>
                              </li>
                              <li class="contact-list__item contact-list__tel">
                                    <a class="contact-list__link" href="tel:+13784001234"><?php the_field('phone', 208); ?></a>
                              </li>
                              <li class="contact-list__item contact-list__website">
                                    <a class="contact-list__link" href="www.interno-test.ru"><?php the_field('link', 208); ?></a>
                              </li>
                        </ul>
                        <div class="post__social">
                              <a href="https://www.facebook.com/?locale=ru_RU" target="_blank">
                                    <svg width="10" height="19" viewBox="0 0 10 19" fill="none">
                                    <path d="M9.36719 10.625H6.73047V18.5H3.21484V10.625H0.332031V7.39062H3.21484V4.89453C3.21484 2.08203 4.90234 0.5 7.46875 0.5C8.69922 0.5 10 0.746094 10 0.746094V3.52344H8.55859C7.15234 3.52344 6.73047 4.36719 6.73047 5.28125V7.39062H9.85938L9.36719 10.625Z" fill="#292F36"/>
                                    </svg>
                              </a>
                              <a href="https://twitter.com/?lang=ru" target="_blank">
                                    <svg width="18" height="15" viewBox="0 0 18 15" fill="none">
                                    <path d="M16.1719 3.82617C16.875 3.29883 17.5078 2.66602 18 1.92773C17.3672 2.20898 16.6289 2.41992 15.8906 2.49023C16.6641 2.0332 17.2266 1.33008 17.5078 0.451172C16.8047 0.873047 15.9961 1.18945 15.1875 1.36523C14.4844 0.626953 13.5352 0.205078 12.4805 0.205078C10.4414 0.205078 8.78906 1.85742 8.78906 3.89648C8.78906 4.17773 8.82422 4.45898 8.89453 4.74023C5.83594 4.56445 3.09375 3.08789 1.26562 0.873047C0.949219 1.40039 0.773438 2.0332 0.773438 2.73633C0.773438 4.00195 1.40625 5.12695 2.42578 5.79492C1.82812 5.75977 1.23047 5.61914 0.738281 5.33789V5.37305C0.738281 7.16602 2.00391 8.64258 3.69141 8.99414C3.41016 9.06445 3.05859 9.13477 2.74219 9.13477C2.49609 9.13477 2.28516 9.09961 2.03906 9.06445C2.49609 10.541 3.86719 11.5957 5.48438 11.6309C4.21875 12.6152 2.63672 13.2129 0.914062 13.2129C0.597656 13.2129 0.316406 13.1777 0.0351562 13.1426C1.65234 14.1973 3.58594 14.7949 5.69531 14.7949C12.4805 14.7949 16.1719 9.20508 16.1719 4.31836C16.1719 4.14258 16.1719 4.00195 16.1719 3.82617Z" fill="#292F36"/>
                                    </svg>
                              </a>
                              <a href="https://ru.linkedin.com/" target="_blank">
                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none">
                                    <path d="M3.76562 16.3574V5.8457H0.496094V16.3574H3.76562ZM2.11328 4.43945C3.16797 4.43945 4.01172 3.56055 4.01172 2.50586C4.01172 1.48633 3.16797 0.642578 2.11328 0.642578C1.09375 0.642578 0.25 1.48633 0.25 2.50586C0.25 3.56055 1.09375 4.43945 2.11328 4.43945ZM15.9648 16.3574H16V10.5918C16 7.7793 15.3672 5.59961 12.0625 5.59961C10.4805 5.59961 9.42578 6.47852 8.96875 7.28711H8.93359V5.8457H5.80469V16.3574H9.07422V11.1543C9.07422 9.7832 9.32031 8.48242 11.0078 8.48242C12.6953 8.48242 12.7305 10.0293 12.7305 11.2598V16.3574H15.9648Z" fill="#292F36"/>
                                    </svg>              
                              </a>
                              <a href="https://www.instagram.com/" target="_blank">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none">
                                    <path d="M8.70605 4.21387C6.33105 4.21387 4.43848 6.14355 4.43848 8.48145C4.43848 10.8564 6.33105 12.749 8.70605 12.749C11.0439 12.749 12.9736 10.8564 12.9736 8.48145C12.9736 6.14355 11.0439 4.21387 8.70605 4.21387ZM8.70605 11.2646C7.18457 11.2646 5.92285 10.04 5.92285 8.48145C5.92285 6.95996 7.14746 5.73535 8.70605 5.73535C10.2275 5.73535 11.4521 6.95996 11.4521 8.48145C11.4521 10.04 10.2275 11.2646 8.70605 11.2646ZM14.124 4.06543C14.124 3.50879 13.6787 3.06348 13.1221 3.06348C12.5654 3.06348 12.1201 3.50879 12.1201 4.06543C12.1201 4.62207 12.5654 5.06738 13.1221 5.06738C13.6787 5.06738 14.124 4.62207 14.124 4.06543ZM16.9443 5.06738C16.8701 3.73145 16.5732 2.54395 15.6084 1.5791C14.6436 0.614258 13.4561 0.317383 12.1201 0.243164C10.7471 0.168945 6.62793 0.168945 5.25488 0.243164C3.91895 0.317383 2.76855 0.614258 1.7666 1.5791C0.801758 2.54395 0.504883 3.73145 0.430664 5.06738C0.356445 6.44043 0.356445 10.5596 0.430664 11.9326C0.504883 13.2686 0.801758 14.4189 1.7666 15.4209C2.76855 16.3857 3.91895 16.6826 5.25488 16.7568C6.62793 16.8311 10.7471 16.8311 12.1201 16.7568C13.4561 16.6826 14.6436 16.3857 15.6084 15.4209C16.5732 14.4189 16.8701 13.2686 16.9443 11.9326C17.0186 10.5596 17.0186 6.44043 16.9443 5.06738ZM15.1631 13.3799C14.9033 14.1221 14.3096 14.6787 13.6045 14.9756C12.4912 15.4209 9.89355 15.3096 8.70605 15.3096C7.48145 15.3096 4.88379 15.4209 3.80762 14.9756C3.06543 14.6787 2.50879 14.1221 2.21191 13.3799C1.7666 12.3037 1.87793 9.70605 1.87793 8.48145C1.87793 7.29395 1.7666 4.69629 2.21191 3.58301C2.50879 2.87793 3.06543 2.32129 3.80762 2.02441C4.88379 1.5791 7.48145 1.69043 8.70605 1.69043C9.89355 1.69043 12.4912 1.5791 13.6045 2.02441C14.3096 2.28418 14.8662 2.87793 15.1631 3.58301C15.6084 4.69629 15.4971 7.29395 15.4971 8.48145C15.4971 9.70605 15.6084 12.3037 15.1631 13.3799Z" fill="#292F36"/>
                                    </svg>                                    
                              </a>
                        </div>
                        <?php dynamic_sidebar('social-network'); ?>
                  </div>
                  <div class="contact__form">
                        <?php echo do_shortcode('[contact-form-7 id="7be435d" title="Форма обратной связи"]') ?>
                        <!--   <form class="contact-form">
                              <input type="text" class="contact-form__input" placeholder="Name">
                              <input type="email" class="contact-form__input" placeholder="Email">
                              <input type="text" class="contact-form__input" placeholder="Subject">
                              <input type="tel" class="contact-form__input" placeholder="Phone">
                              <textarea class="contact-form__textarea" placeholder="Hello Iam Intrested in.."></textarea>
                              <div class="contact-form__btn">
                                    <a href="#" class="btn-primary">Send Now</a>
                              </div>
                        </form> -->
                  </div>
            </div>
      </div>
</section>

<?php get_footer(); ?>