@extends('layouts.app')
@section('content')
<section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="custom_heading-container ">
          <h2>
            Registro de nuevo usuario
          </h2>
        </div>
      </div>
    </div>
    <div class="container layout_padding2">
      <div class="row">
        <div class="col-md-5">
          <div class="form_contaier">
            <form class="form-group" method="POST" action="/nutritionists">
              @csrf
              <div class="form-group">
                <label for="exampleInputName1">Nombre</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email </label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Contraseña</label>
                <input type="password" class="form-control" id="pass" name="pass">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Confirmar contraseña</label>
                <input type="password" class="form-control" id="pass_confirmation" name="pass_confirmation">
              </div>
              <button type="submit" class="">Send</button>
            </form>
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail-box">
            <h3>
              Get Now Medicines
            </h3>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection('content')