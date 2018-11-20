{!! Form::open(array('url'=>'almacen/articulo','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group">
	<div class="row">
		
	</div>

	<div class="row">
  		<div class="col-xs-9 col-sm-9 col-lg-9">
  			<div class="input-group">
        		<input type="text" class="form-control" name="searchText" placeholder="Buscar..." value="{{$searchText}}">
        		<span class="input-group-btn">
            		<button type="submit" class="btn btn-primary">Buscar</button> 
        		</span>
    		</div>
  		</div>

  		<div class="col-xs-3 col-sm-3 col-lg-3">
  			<div class="grid-4-12">
				<label>FILTRO</label>
				<select name="tipoFiltro" >
            		<option value="color">Color</option>
            		<option value="gramaje">Gramaje</option>
            		<option value="categoria">Categoria</option>
        </select>
			</div>
  		</div>

  	</div>

    
    
</div>
{{Form::close()}}