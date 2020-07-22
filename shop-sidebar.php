<!-- Shop Filters -->
<div class="accordion accordion-caret accordion-sidebar d-none d-md-block">

	<?php
		ob_start();
		dynamic_sidebar('right-widget');
		$sidebar = ob_get_contents();
		ob_end_clean();

		$sidebar_corrected_ul = str_replace("<ul>", '<ul class="list-tree">', $sidebar);

		echo $sidebar_corrected_ul;
	?> 
</div>
	<!-- /Shop Filters -->