</div>

	<!-- Lets add a footer outside the main-page div because we want the footer to be full page as well 
		id is to use later for css -->
	<footer class="text-center" id="footer">
		&copy; Copyright 2013-15 Shaundas Boutique
	</footer>

<script>
	function updateSizes() {
		// start with size string loop through all size qty fields. If the field is empty then skip over
		// otherwise add it to your size string
		// finally once the loop is over set the value of the preview field in our form to that size string to be 
		// saved later
		var sizeString = '';
		for($i = 1; $i <= 12; $i++) {
			if(jQuery('#size' + $i).val() != '') {
				sizeString += jQuery('#size' + $i).val() + ':' + jQuery('#qty' + $i).val() + ',';
			}
		}
		jQuery('#sizes').val(sizeString);
	}

	function get_child_options() {

		// Gets the selected parent_id from the DOM with jquery
		var parentID = jQuery('#parent').val();
		console.log(parentID);
		jQuery.ajax({
			url: '/boutique/admin/parsers/child_categories.php',
			type: 'POST',
			data: {parentID: parentID},
			// data comes back on success
			success: function(data) {
				jQuery('#child').html(data);
			},
			error: function() {alert("Something went wrong with the child options")},
		});
	}
	jQuery('select[name="parent"]').change(get_child_options);
</script>

</body>
</html>
