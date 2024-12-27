@extends('layouts.admin')

@section('content')
    <h2>MISION Y VISION</h2>
    <div class="container">
        <hr class="featurette-divider">
        <h2 class="text-center">Ingresar informacion</h2>
    
        <form class="row g-3 needs-validation" action="/storeMisVis" method="POST" enctype="multipart/form-data">
          @csrf
          @method('POST')
            <div class="col-md-12 position-relative">
              <label for="contact" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="col-md-12 position-relative">
                <label for="contact" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="image" name="image" required>
              </div>
    
            <div class="col-12">
              <button type="submit" class="btn btn-success">GUARDAR</button>
            </div>
          </form>
    </div>
@endsection
