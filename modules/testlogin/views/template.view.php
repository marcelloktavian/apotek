<?php

$page = (isset($_GET['page']) && $_GET['page']) ? $_GET['page'] : '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Apotek</title>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

	<!-- Fonts and icons -->
	<script src="resources/assets/plugins/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['resources/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="resources/assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="resources/assets/css/atlantis.min.css">

	<!--   Core JS Files   -->
	<script src="resources/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="resources/assets/js/core/popper.min.js"></script>
	<script src="resources/assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="resources/assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="resources/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="resources/assets/plugins/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Datatables -->
	<script src="resources/assets/plugins/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="resources/assets/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- charts js -->
	<script src="resources/assets/plugins/chart.js/chart.min.js"></script>
	<script src="resources/assets/plugins/chart-circle/circles.min.js"></script>

	<!-- JS -->
	<script src="resources/assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
	<script src="resources/assets/js/atlantis.min.js"></script>

</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<?php
			$view = new View('header');
			$view->bind('data', $data);
			$view->forceRender();
			?>
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<?php
			$view = new View('sidebar');
			$view->bind('data', $data);
			$view->forceRender();
			?>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<?php
				$view = new View($viewName);
				$view->forceRender();
				?>
			</div>
		</div>

	</div>
</body>
<script type="text/javascript">
	function logout() {
		Swal.fire({
			title: 'Confirmation',
			text: 'Are you sure you want to logout?',
			icon: 'question',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, logout!'
		}).then((result) => {
			if (result.isConfirmed) {
				window.location.href = "<?php echo PATH; ?>index.php?page=login&&action=logout";
			}
		})
	}
</script>
</html>