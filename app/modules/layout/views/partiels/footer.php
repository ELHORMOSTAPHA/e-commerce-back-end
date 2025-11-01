<div>
  <h1>footer</h1>
</div>
<!-- Theme Mode -->
<script>
   const defaultThemeMode = 'light'; // light|dark|system
			let themeMode;

			if (document.documentElement) {
				if (localStorage.getItem('kt-theme')) {
					themeMode = localStorage.getItem('kt-theme');
				} else if (
					document.documentElement.hasAttribute('data-kt-theme-mode')
				) {
					themeMode =
						document.documentElement.getAttribute('data-kt-theme-mode');
				} else {
					themeMode = defaultThemeMode;
				}

				if (themeMode === 'system') {
					themeMode = window.matchMedia('(prefers-color-scheme: dark)').matches
						? 'dark'
						: 'light';
				}

				document.documentElement.classList.add(themeMode);
			}
  </script>
  <!-- End of Theme Mode -->
  <!-- Page -->
  <style>
   .page-bg {
			background-image: url('<?= base_url()?>/public/assets/media/images/2600x1200/bg-10.png');
		}
		.dark .page-bg {
			background-image: url('<?= base_url()?>/public/assets/media/images/2600x1200/bg-10-dark.png');
		}
  </style>
 
  <!-- End of Page -->
  <!-- Scripts -->
  <script src="<?= base_url()?>/public/assets/js/core.bundle.js">
  </script>
  <script src="<?= base_url()?>/public/assets/vendors/ktui/ktui.min.js">
  </script>
  <script src="<?= base_url()?>/public/assets/vendors/apexcharts/apexcharts.min.js">
  </script>
  <!-- End of Scripts -->
 </body>
</html>
