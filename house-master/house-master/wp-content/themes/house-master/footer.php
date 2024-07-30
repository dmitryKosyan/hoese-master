
    <footer class="footer">
    <div class="footer__container">
        
          <?php wp_nav_menu( array( 'theme_location' => 'bottom', 
                        'container_class' => 'footer__menu-items' ) ); 
           ?>
      
        <p class="footer__info">Информация на данном интернет-сайте носит исключительно ознакомительный
            характер и ни при каких условиях не является
            публичной офертой.</p>
        <p class="footer__developer">developed by Kosyanchik Dmitry</p>

    </div>


</footer>
    </main>
    </div>
   <?php wp_footer();?>
</body>

</html>