	<!-- jQuery-3.6.0 Js -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

	<!-- Custom Js -->
	<script src="{{ asset('js/custom.js') }}"></script>


	<script>
			$(function() {
				$(".logout-dropdown").click(function() {
					$(".dropdown-menu").slideToggle(500);
				});
			}); 
  </script>
