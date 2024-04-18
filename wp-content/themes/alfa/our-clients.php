<section class="our-clients" id="our-clients">
    <div class="container">
        <h3><?php echo get_field('field_5df7764c02955', 15); ?></h3>
        <div class="swiper-container our-clients-slider">
            <div class="swiper-wrapper">

                <?php
                        if( have_rows('field_5df776f902956', 15) ):
                    while ( have_rows('field_5df776f902956', 15) ) : the_row();  
                ?>
					
                    <div class="swiper-slide">
                  		<?php if( get_sub_field('field_5df7773e0295a', 15) ): ?>
							<a href="<?php echo get_sub_field('field_5df7773e0295a', 15); ?>">
								<img src="<?php echo get_sub_field('field_5df7772802959', 15); ?>" alt="" />
							</a>
						<?php else : ?>
							<img src="<?php echo get_sub_field('field_5df7772802959', 15); ?>" alt="" />
						<?php endif; ?>
					</div>

                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
    <div class="swiper-button-next our-clients-button-next">
        <svg class="ico ico-arrow-right">
            <use xlink:href="<?php echo get_template_directory_uri();?>/img/sprite.svg#ico-arrow-right"></use>
        </svg>
    </div>
    <div class="swiper-button-prev our-clients-button-prev">
        <svg class="ico ico-arrow-left">
            <use xlink:href="<?php echo get_template_directory_uri();?>/img/sprite.svg#ico-arrow-left"></use>
        </svg>
    </div>
</section>
