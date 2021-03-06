@extends("layouts.app");

@section("content")
<form action="{{url('/actualizarProduct')}}/{{$products->id}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{csrf_token() }}">
	<div class="from-group">
		<label for="title">Titulo:</label>
		<input type="text" class="form-control" name="title" required value="{{$products->title}}">
	</div>
	<div class="from-group">
		<label for="pricing">Precio:</label>
		<input type="number" class="form-control" name="pricing" required value="{{$products->pricing}}">

	</div>

		<div class="from-group">
		<label for="cover">Imagen:</label>
		<input type="file" class="form-control" name="cover" required value="{{$products->extension}}">

	</div>

	<div class="from-group">
	    <label for="categoria">categoria:</label>
		<select name="categoria" class="form-control" required value="{{$products->categoria}}">>
		            @if($products->categoria=camaras)
    				<option value="camaras" selected>Camaras</option>
    				@elseif($products->categoria=red)
    				<option value="red" >red</option>
    				@elseif($products->categoria=energia)
    				<option value="energia">energia</option>
    				@endif
		 
			<option value="camaras" selected>camaras</option>
			<option value="red">red</option>
			<option value="energia">energia</option>
			
		</select>
	<div class="from-group">
		<label for="description">Descripcion:</label>
		<input type="textarea" class="form-control" name="description" required value="{{$products->description}}">

	</div>
	<br>
		<br>

	<div>
		<button type="submit" class="btn btn-primary">Guardar</button>
		<a href="{{url('/products')}}" class="btn btn-danger">Cancelar</a>
	</div>

</form>
@endsection