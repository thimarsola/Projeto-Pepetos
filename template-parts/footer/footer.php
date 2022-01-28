<footer class="footer">
   <!-- copyright -->
    <div class="footer__copyright bg-light-gray-500 py-2">
       <div class="container">
          <!-- row -->
           <div class="footer__copyright__row l-small">
              <p>
                 <small>
                    &COPY; <?= date('Y'); ?> <b>&centerdot;</b> <?= SITE['name']; ?> <b>&centerdot;</b> Todos os direitos reservados
                 </small>
              </p>
              
              <ul>
                 <li>
                    <a rel="nofollow noreferrer noopener" href="<?= CONTACT['facebook']; ?>" target="_blank" title="Siga a Pepetos no Facebook!" class="link-dark-blue-500">
                       <span class="d-none">Facebook</span>
                       <i class="icon-facebook"></i>
                    </a>
                 </li>
                 
                 <li>
                    <a rel="nofollow noreferrer noopener" href="<?= CONTACT['instagram']; ?>" target="_blank" title="Siga a Pepetos no Instagram!" class="link-dark-blue-500">
                       <span class="d-none">Instagram</span>
                       <i class="icon-instagram"></i>
                    </a>
                 </li>
                 
                 <li>
                    <?= whatsapp(formatPhone(CONTACT["whatsapp"]["number"]), CONTACT["whatsapp"]["message"], '<span class="d-none">WhatsApp</span><i class="icon-whatsapp"></i>', 'link-dark-blue-500'); ?>

                 </li>
              </ul>
           </div> 
          <!-- end of row -->
       </div>
    </div> 
   <!-- end of copyright -->
   
    <!-- developer -->
    <div class="footer__developer bg-primary-500 py-1">
        <div class="container">

            <!-- row -->
            <div class="footer__developer__row d-flex jc-between ai-center clr-dark-blue-500">

                <!-- agency -->
                <div class="footer__developer__row__agency">
                    <p class="l-small">
                       <small>Desenvolvido por <b><a rel="nofollow noreferrer noopener" href="<?= DEV['url']; ?>" target="_blank" class="link-dark-blue-500" title="Agência Especializada em Marketing Digital"><?= DEV['name']; ?></a></b>
                       </small>
                    </p>
                </div>
                <!-- end of agency -->

                <!-- validator -->
                <?php if (!is_404()): ?>
                    <div class="footer__developer__row__validator">
                        <?php
                        $protocols = array('http://', 'http://www.', 'https://', 'https://www.', 'www.');

                        if (is_home()) {
                            $urlBase = str_replace($protocols, "", get_bloginfo('wpurl'));
                        } elseif (is_single()) {
                            $urlBase = str_replace($protocols, "", get_the_permalink());
                        } else {
                            $urlBase = str_replace($protocols, "", get_bloginfo('wpurl')) . '/' . (get_page_uri());
                        }
                        ?>

                        <p class="l-small">
                           <small>
                              <a rel="nofollow noreferrer noopener" class="link-dark-blue-500"  href="https://validator.w3.org/nu/?doc=https%3A%2F%2F<?= $urlBase; ?>%2F" target="_blank" title="Tecnologia W3C">
                                 <i class="icon-html5"></i>
                                 <b>W3C Validator</b>
                              </a>
                           </small></p>
                    </div>
                <?php endif; ?>
                <!-- end of validator -->
            </div>
            <!-- end of row -->

        </div>
    </div>
    <!-- end of developer -->
</footer>