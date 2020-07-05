<div class="modal fade" id="addAula" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered " role="document">
		<div class="modal-content p-0">
			<div class="card">
			<div class="card-body">
				<form method="POST" action="{{route('aula.store' )}}" >
					@csrf
					<div class="form-group input-field">
						<label for="inputAddress">Nombre del aula</label>
						<input type="text" class="form-control" name="nombreAula" id="inputAddress">
					</div>
					<a href="#" class="btn btn-secondary" role="button" aria-pressed="true">Cancelar</a>
					<button type="submit" class="btn btn-success">Guardar</button>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>