<div class="mobileContainer">
	<select id="beachSelect">
		<option>Select a beach...</option>
		<?php
		foreach ($db->result_array() as $beach) {
			echo '<option value="' . $beach['id'] . '">' . $beach['name'] . '</option>';
		}
		?>
	</select>
	<p>How quiet is this beach?</p>
	<a href="javascript:star(1);" id="star1" class="starSelect"></a>
	<a href="javascript:star(2);" id="star2" class="starSelect"></a>
	<a href="javascript:star(3);" id="star3" class="starSelect"></a>
	<a href="javascript:star(4);" id="star4" class="starSelect"></a>
	<a href="javascript:star(5);" id="star5" class="starSelect"></a>
	<p id="quietLabel">Very busy</p>
	<input type="button" style="submitButton" value="Send" />
</div>