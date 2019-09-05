function mostrarSelect(opcion){
	$("#divcarrera").html('');
	if(opcion==1){
		$("#divcarrera").html('<input type="hidden" name="carrera" value="NA" class="form-control">');
	}
	if(opcion==2){
		$("#divcarrera").html('<label for="carrera">Carrera</label><select name="carrera" class="form-control"><option>Lic. En Derecho</option><option>Lic. En Finanzas</option></select>');
	}
	if(opcion==3){
		$("#divcarrera").html('<label for="carrera">Carrera</label><select name="carrera" class="form-control"><option>Mtria. Admon. De Negocio</option><option>Mtria. Direccion de Proyectos</option></select>');	
	}
}