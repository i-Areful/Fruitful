<?php
/**
 * Content wrappers
 *
 * @author 		Fruitful
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */


$template = get_option( 'template' );

switch( $template ) {
	case 'twentyeleven' :
		echo '</div></div>';
		break;
	case 'twentytwelve' :
		echo '</div></div>';
		break;
	case 'twentythirteen' :
		echo '</div></div>';
		break;
	case 'twentyfourteen' :
		echo '</div></div></div>';
		get_sidebar( 'content' );
		break;
	case 'fruitful' :
		if (fruitful_get_shop_sidebar() == 1){
			echo '</div></div></div>';
		} elseif(fruitful_get_shop_sidebar() == 2) {
			echo '</div></div></div>';
			echo '<div class="five columns alpha woo-loop-sidebar">';
				get_sidebar( 'shop' );
			echo '</div>';
		} else {
			echo '</div></div></div>';
			echo '<div class="five columns omega woo-loop-sidebar">';
				get_sidebar( 'shop' );
			echo '</div>';
		}
		break;
	default :
		echo '</div></div>';
		break;
}