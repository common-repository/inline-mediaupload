<!-- inline-mediaupload -->

<?php do_meta_boxes(null, 'below_titlediv', $post); ?>
				
<script type="text/javascript">
	// Move the added meta-box-area below the title
	var metabox = jQuery('#below_titlediv-sortables').detach();
	metabox.insertAfter('#titlediv');
</script>
				
<style type="text/css">
	#below_titlediv-sortables {
		min-height: 30px;
	}
</style>

<!-- /inline-mediaupload -->
