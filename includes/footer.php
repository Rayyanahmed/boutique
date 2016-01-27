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
				// Seems like whatever url we put it wraps the entire content in an object and then returns it to us
				// and we can grab it with a success function and pass it into a parameter and then do whatever we want with it
				url : <?php echo BASEURL; ?> + 'css/detailsmodal.php',
				// Will send this data to the baseurl
				method : "post",
				data : data,
				success: function(data) {

					console.log(data);
					jQuery('body').append(data);

					jQuery('#details-modal').modal('toggle');
				},
				error: function() {
					alert("Something went wrong!");
				}
			});
		}

	</script>
</body>
</html>