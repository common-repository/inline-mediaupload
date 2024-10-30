<?php

	/**
	 * class InlineMediaupload
	 * 
	 * The WordPress Media Upload Feature has grown up and is much more
	 * intuitive and usable since WP 3.3 and should be integrated more tightly 
	 * into the WordPress post/page forms.
	 * 
	 * Inline Mediaupload introduces a new meta-box on post/page forms
	 * which directly contains the media-upload.php iframe otherwise only 
	 * reachable via button/lightbox.
	 * 
	 * The iframe automatically resizes smoothly with its inner content 
	 * thus hiding the iframe-nature of the content.
	 * 
	 * Additionally, the plugin introduces a new meta-box area to the forms
	 * allowing you to move any meta-box just below the title input field -
	 * that's just my personal favorite location for placing the new upload-box.
	 * 
	 * @author jjarolim, <office@jarolim.com>
	 */

	class InlineMediaupload {
		
		/**
		 * Constructor
		 */
		function __construct() {
			$this->registerActions();
		}
		
		
		/**
		 * Register Actions and add filters
		 */
		function registerActions() {
			add_action('admin_init',         array($this, '_on_admin_init'));
			add_action('add_meta_boxes',     array($this, '_on_add_meta_boxes'));
			add_filter('edit_form_advanced', array($this, '_filter_edit_form_advanced'));
			add_filter('edit_page_form',     array($this, '_filter_edit_form_advanced'));
		}

		
			/**
			 * Add Metabox to Add- and Edit-Post Pages
			 * @see http://codex.wordpress.org/Function_Reference/add_meta_box
			 */
			function _on_add_meta_boxes() {
				
				// Posts
				
				add_meta_box(
					'inline_mediaupload_metabox',
					__('Inline Mediaupload'),
					array($this, '_render_metabox'),
					'post',
					'below_titlediv'
				);
				
				// Page
				
				add_meta_box(
					'inline_mediaupload_metabox',
					__('Inline Mediaupload'),
					array($this, '_render_metabox'),
					'page',
					'below_titlediv'
				);
				
			}
			
			
				/**
				 * Render Metabox content
				 */
				function _render_metabox() {
					include 'tpl/edit-postpage.tpl.php';
				}
		
				
			/**
			 * action admin_init
			 * @see http://adambrown.info/p/wp_hooks/hook/admin_init
			 */
			function _on_admin_init() {

				// Additions for media-upload.php
				
				if (array_key_exists('SCRIPT_NAME', $_SERVER)) {
					
					// Media Upload Include Adaptions
					
					if ($this->isScriptName('media-upload.php')) {
						if (array_key_exists('jp_inline_mediaupload', $_GET)) {
							
							wp_enqueue_style(
								'jp-inline-mediaupload_media-upload', 
								plugins_url('tpl/media-upload.css', __FILE__)
							);
							
							wp_enqueue_script(
								'jp-inline-mediaupload_media-upload',
								plugins_url('tpl/media-upload.js', __FILE__)
							);
							
							
						}
					}
					
				}
				
			}
			
			
			
			/**
			 * Internal helper: Have a look if the given script name is 
			 * the current one
			 * 
			 * @param type $name
			 * @return type 
			 */
			function isScriptName($name) {
				return substr($_SERVER['SCRIPT_NAME'], (strlen($name)*-1)) == $name;
			}

			
			/**
			 * hook edit_form_advanced
			 * hook edit_page_form
			 * 
			 * This method enhances the wp new/edit-form for posts and pages
			 * 
			 * @see http://adambrown.info/p/wp_hooks/hook/edit_form_advanced
			 * @see http://adambrown.info/p/wp_hooks/hook/edit_page_form
			 **/
			function _filter_edit_form_advanced() {
				global $post;
				include 'tpl/edit-postpage-metabox.tpl.php';

			}
			
			
		
	}


?>
