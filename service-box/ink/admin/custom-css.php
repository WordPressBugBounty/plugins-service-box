<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<style>
			#wpsm_service_b_shortcode{
			background:#fff!important;
			box-shadow: 0 0 20px rgba(0,0,0,.2);
			}
			#wpsm_service_b_shortcode .hndle , #wpsm_service_b_shortcode .handlediv{
			display:none;
			}
			#wpsm_service_b_shortcode p{
			color:#000;
			font-size:15px;
			}
			#wpsm_service_b_shortcode input {
			font-size: 16px;
			padding: 8px 10px;
			width:100%;
			}
			
			
		</style>
		<h3><?php esc_html_e('ServiceBox Shortcode',wpshopmart_service_box_text_domain); ?></h3>
		<p><?php _e("Use below shortcode in any Page/Post to publish your FAQ", wpshopmart_service_box_text_domain);?></p>
		<input readonly="readonly" type="text" value="<?php echo "[WPSM_SERVICEBOX id=".get_the_ID()."]"; ?>">
		<?php
		 $PostId = get_the_ID();
		$Settings = unserialize(get_post_meta( $PostId, 'Wpsm_Servicebox_Shortcode_Settings', true));
		if(isset($Settings['custom_css'])){  
		     $custom_css   = $Settings['custom_css'];
		}
		else{
		$custom_css="";
		}		
		?>
			
		
		<h3><?php esc_html_e('Custom Css',wpshopmart_service_box_text_domain); ?></h3>
		<textarea name="custom_css" id="custom_css" style="width:100% !important ;height:300px;background:#ECECEC;"><?php echo esc_html($custom_css) ; ?></textarea>
		<p><?php esc_html_e('Enter Css without ',wpshopmart_service_box_text_domain); ?><strong>&lt;style&gt; &lt;/style&gt; </strong><?php esc_html_e(' tag',wpshopmart_service_box_text_domain); ?></p>
		<br>
		<?php if(isset($Settings['custom_css'])){ ?> 
		<h3><?php esc_html_e('Add This ServiceBox settings as default setting for new ServiceBox',wpshopmart_service_box_text_domain); ?></h3>
		<div class="">
			<a  class="button button-primary button-hero" name="updte_wpsm_faq_default_settings" id="updte_wpsm_faq_default_settings" onclick="wpsm_update_default()"><?php esc_html_e('Update Default Settings',wpshopmart_service_box_text_domain); ?></a>
		</div>	
		<?php } ?>
	