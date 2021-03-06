<!-- Footer -->
<footer class="sticky-footer bg-white">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			CC BY 3.0. -->
			Copyright &copy;<script>
				document.write(new Date().getFullYear());
			</script> | Mapala <i class="icon-user color-danger" aria-hidden="true"></i><br>Wanatel
		</div>
	</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="login.html">Logout</a>
			</div>
		</div>
	</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('frontend'); ?>/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('frontend'); ?>/assets/js/jquery-3.4.0.min.js"></script>
<script src="<?= base_url('frontend'); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?= base_url('frontend'); ?>/assets/vendor/summernote/summernote-bs4.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('frontend'); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('frontend'); ?>/assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('frontend'); ?>/assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('frontend'); ?>/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('frontend'); ?>/assets/js/demo/datatables-demo.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#summernote').summernote({
			height: 590,
			toolbar: [
				['style', ['style']],
				['font', ['bold', 'italic', 'underline', 'clear']],
				['fontsize', ['fontsize']],
				['color', ['color']],
				['para', ['ul', 'ol', 'paragraph']],
				['insert', ['link', 'picture', 'hr']],
				['view', ["fullscreen", "codeview", "help"]],
			],

			onImageUpload: function(files, editor, welEditable) {
				sendFile(files[0], editor, welEditable);
			}

		});

		function sendFile(file, editor, welEditable) {
			data = new FormData();
			data.append("file", file);
			$.ajax({
				data: data,
				type: "POST",
				url: "<?php echo site_url('news/upload_image'); ?>",
				cache: false,
				contentType: false,
				processData: false,
				success: function(url) {
					editor.insertImage(welEditable, url);
				}
			});
		}
	});
</script>


<script type="text/javascript">
	$(document).ready(function() {
		$('#summernote2').summernote({
			height: 590,
			toolbar: [
				['style', ['style']],
				['font', ['bold', 'italic', 'underline', 'clear']],
				['fontsize', ['fontsize']],
				['color', ['color']],
				['para', ['ul', 'ol', 'paragraph']],
				['insert', ['link', 'picture', 'hr']],
				['view', ["fullscreen", "codeview", "help"]],
			],

			onImageUpload: function(files, editor, welEditable) {
				sendFile(files[0], editor, welEditable);
			}

		});

		function sendFile(file, editor, welEditable) {
			data = new FormData();
			data.append("file", file);
			$.ajax({
				data: data,
				type: "POST",
				url: "<?php echo site_url('news/upload_image'); ?>",
				cache: false,
				contentType: false,
				processData: false,
				success: function(url) {
					editor.insertImage(welEditable, url);
				}
			});
		}
	});
</script>
</body>

</html>