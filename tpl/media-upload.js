/**
 * media-upload.js
 * 
 * JavaScript injection for the media-upload.php if
 * included via inline-iframe on the posts-page
 * 
 * @author jjarolim, <office@jarolim.com>
 */

(function($){

	// On Document Ready

	$(document).ready(
		function() {
			
			// We set the target of the form to the prepared 
			// hidden iframe so the page display stays 
			
			$('form').each(
				function() {
				
					var $this = $(this);
				
					// We don't want to set the target for
					// the plain html upload formular since
					// this would render it useless

					if ($this.hasClass('html-uploader')) {

						// Instead, we append the jp_inline_mediaupload - Parameter
						// to the action-url so the following form will be 
						// rendered correctly

						$this.attr('action', $this.attr('action') + '&jp_inline_mediaupload=yes');

					} else {

						// All other forms get a new target:
						// The newly inserted, hidden iframe

						$this.attr('target', 'jp-inline-mediaupload-targetframe');

					}

				}
			);
			
		}
	);

})(jQuery);