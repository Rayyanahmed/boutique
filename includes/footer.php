</div>

	<!-- Lets add a footer outside the main-page div because we want the footer to be full page as well 
		id is to use later for css -->
	<footer class="text-center" id="footer">
		&copy; Copyright 2013-15 Shaundas Boutique
	</footer>

	<!-- Details Modal -->


	<script>
		// Target the window
		$(window).scroll(function() {
			// scrollTop tells us how many pixels we have scrolled from the top
			var vscroll = $(this).scrollTop();
			// this function will keep the text logo centered while we scroll
			// if we didn't divide by 2 it would just stay there and not move at all
			$('#logotext').css({
				"transform" : "translate(0px, " + vscroll/2 + "px)"
			});

			var vscroll = $(this).scrollTop();
			$('#fore-flower').css({
				// the negative makes it scroll up
				"transform" : "translate(0px, -" + vscroll/2 + "px)"
			});
		});

		function detailsModal(id) {
			var data = {"id" : id, };
			jQuery.ajax({
				url : <?php echo BASEURL; ?> + 'includes/detailmodal.php',
				// Will send this data to the baseurl
				method : "post",
				data : data,
				success: function(data) {
					// on success the modal should come back
					// We are going to append the entire modal form at the end
					// of our body
					jQuery('body').append(data);
					// Now we have to select our modal and open it
					// We can find the modal by id. I'll probably rename modal here
				},
				error: function() {
					alert("Something went wrong!");
				}
			});
		}

	</script>
</body>
</html>