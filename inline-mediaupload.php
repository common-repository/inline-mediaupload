<?php

	/*	Plugin Name: Inline Mediaupload
		Plugin URI: http://johannes.jarolim.com/wp/inline-mediaupload
		Version: 1.0
		Description: This plugin gives you an additional "Add Media" meta-box for post/page create/edit forms.
		Author: J.P.Jarolim
		Author URI: http://johannes.jarolim.com
	*/

	/*  Copyright 2012 by J.P.Jarolim (email : yapb@johannes.jarolim.com)

		This program is free software; you can redistribute it and/or modify
		it under the terms of the GNU General Public License as published by
		the Free Software Foundation; either version 2 of the License, or
		(at your option) any later version.

		This program is distributed in the hope that it will be useful,
		but WITHOUT ANY WARRANTY; without even the implied warranty of
		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
		GNU General Public License for more details.

		You should have received a copy of the GNU General Public License
		along with this program; if not, write to the Free Software
		Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
	*/

	/* Short and sweet */

	require_once realpath(dirname(__FILE__) . '/inline-mediaupload.class.php');
	$inline_mediaupload = new InlineMediaupload();

?>
