 </div></div></div>
 <footer class="footer-KELOMPOK 2">
      Copyright by <a href="KELOMPOK 2" target="_blank">KELOMPOK 2</a>
    </footer>
  </div>
  </div>
  <script src="<?php echo base_url() ?>/assets/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- ckeditor -->
  <script src="<?php echo base_url() ?>/assets/ckeditor5/build/ckeditor.js"></script>
	<script>ClassicEditor
			.create( document.querySelector( '.editor' ), {
				toolbar: {
					items: [
						'heading',
						'|',
						'bold',
						'italic',
						'link',
						'bulletedList',
						'numberedList',
						'|',
						'indent',
						'outdent',
						'|',
						'imageUpload',
						'blockQuote',
						'insertTable',
						'mediaEmbed',
						'undo',
						'redo'
					]
				},
				language: 'en',
				image: {
					toolbar: [
						'imageTextAlternative',
						'imageStyle:full',
						'imageStyle:side'
					]
				},
				table: {
					contentToolbar: [
						'tableColumn',
						'tableRow',
						'mergeTableCells',
						'tableProperties'
					]
				},
				licenseKey: '',
			} )
			.then( editor => {
				window.editor = editor;
			} )
			.catch( error => {
				console.error( error );
			} );
	</script>
</body>
</html>