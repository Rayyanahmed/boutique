</div>

	<!-- Lets add a footer outside the main-page div because we want the footer to be full page as well 
		id is to use later for css -->
	<footer class="text-center" id="footer">
		&copy; Copyright 2013-15 Shaundas Boutique
	</footer>

<script>
	function get_child_options() {
		// Gets the selected parent_id from the DOM with jquery
		var parentID = jQuery('#parent').val();
		jQuery.ajax({
			url: '/boutique/admin/parsers/child_categories.php',
			type: 'POST',
			data: {parentID: parentID},
			// data comes back on success
			success: function(data) {
				
			},
			error: function() {alert("Something went wrong with the child options")},
		});
	}
	jQuery('select[name="parent"]').change(get_child_options())
</script>
</body>
</html>