<?php
is_admin() && add_action( 'admin_notices', function () {
		?>
		<div class="updated"><p>
				TIVWP-DEMIA Check prerequisites:
				<strong>The plugin is running OK.</strong>
			</p></div>
	<?php
	}
);

# --- EOF