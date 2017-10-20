	<footer class="container-fluid">
		<p>Desenvolvido pela turma de Programação Web - Senac PB (João Pessoa) - 2017</p>
	</footer>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- Editor summernote -->
	<script src="recursos/summernote/summernote.min.js"></script>
	<!-- Calendário Bootstrap -->
	<script src="recursos/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
	<script src="recursos/bootstrap-datepicker/locales/bootstrap-datepicker.pt-BR.min.js"></script>

	<script>
		//editor de texto
		$(document).ready(function() {
			$('#summernote').summernote({
				height: 200
			});
		});
	</script>

	<script>
		//calendários
		$('#calendario').datepicker({
			format: 'dd/mm/yyyy',
			language: "pt-BR",
			startDate: '+0d'
		});
	</script>

</body>
</html>
