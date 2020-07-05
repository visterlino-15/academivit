<div class="modal fade" id="nuevoCurso" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered " role="document">
		<div class="modal-content p-0">
			<div class="card">
			<div class="card-body">
				<form method="POST" action="{{route('curso.store')}}" >
					@csrf
					<div class="form-group input-field">
						<label for="inputAddress">Nombre del curso</label>
						<input type="text" class="form-control" name="nombreCurso" id="inputAddress">
						<input type="hidden" class="form-control" name="aula" value="{{ $aula->id}}">
					</div>
					<a href="#" class="btn btn-light text-info btn-sm" role="button" aria-pressed="true">Cancelar</a>
					<button type="submit" class="btn btn-success btn-lg">Guardar</button>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>