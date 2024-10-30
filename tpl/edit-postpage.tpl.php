<!-- inline-mediaupload -->

<iframe name="jp-inline-mediaupload-iframe" class="jp-inline-mediaupload-iframe" src="<?php echo esc_url(get_upload_iframe_src()) ?>&jp_inline_mediaupload=yes" width="100%" height="400" marginheight="0" marginwidth="0" frameborder="0"></iframe>

<script type="text/javascript" language="javascript">
	
	/**
	 * This function compares the height of the content of
	 * the iframe to the iframe height itself - if they don't
	 * match, it resizes the iframe accordingly.
	 */
	function jp_inline_mediaupload_iframe_autoresize() {
		
		// We get both heights
		
		var $iFrame = jQuery('.jp-inline-mediaupload-iframe');
		var $html = $iFrame.contents().find('body');
		
		if ($iFrame.height() != $html.height()) {
			
			// and set the iframe height if needed
			$iFrame.height($html.height());
			
		}
		
	}	
	
	window.setInterval('jp_inline_mediaupload_iframe_autoresize()', 500);
	
</script>

<iframe name="jp-inline-mediaupload-targetframe" id="jp-inline-mediaupload-targetframe" class="jp-inline-mediaupload-targetframe" src="#" width="0" height="0" marginheight="0" marginwidth="0" frameborder="0"></iframe>

<!-- /inline-mediaupload -->