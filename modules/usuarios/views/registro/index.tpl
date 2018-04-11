<style>
    .form-register {
  width: 95%;
  max-width: 500px;
  margin: auto;
{*  margin-top: 20px;*}
  background-color: cornflowerblue;
  border-radius: 7px;
}

.form-titulo {
  background-color: darkblue;
  color: white;
  padding: 20px;
  text-align: center;
  font-weight: 100;
  font-size: 30px;
  border-top-left-radius: 7px;
  border-top-right-radius: 7px;
  border-bottom: 5px solid crimson;
  justify-content: space-between;
}

input {
  margin-bottom: 15px;
  padding: 15px;
  font-size: 16px;
  border-radius: 3px;
  border: 1px solid darkgray;
}

.registra-inputs {
  padding: 10px 30px;
  display: flex;
  flex-wrap: wrap;
}

.input-100 {
  width: 100%;
}

.btn-enviar {
  background-color: crimson;
  color: white;
  margin: auto;
  padding: 10px 40px;
  cursor: pointer;
}

.form-link {
  width: 100%;
  margin: 7px;
  font-size: 14px;
  text-align: center;
}

@media screen and (max-width:800px) {
  .form-register {
    margin-top: 70px;
  }
}
</style>


<form method="POST" action="{$_layoutParams.root}usuarios/registro" id="formRegister" class="form-register" enctype="multipart/form-data">
    <input type="hidden" name="enviar" value="1"/>
    <h2 class="form-titulo">CREAR UNA CUENTA</h2>
    <div class="registra-inputs">
        <input class="input-100" type="text" name="name"  placeholder="Nombre"  value="{$datos.name|default:""}">
        <input class="input-100" type="text" name="user"  placeholder="Usuario" value="{$datos.user|default:""}">
        <input class="input-100" type="email" name="email"  placeholder="email"  value="{$datos.email|default:""}" >
        <input class="input-100" type="password" name="password" id="password" placeholder="Contraseña" value="{$datos.password|default:""}">
        <input class="input-100" type="password" name="password2"  placeholder="Confirmar Contraseña"  value="{$datos.password2|default:""}" >
        <input class="input-100" type="file" name="image"/>
        <input type="submit" value="Registrar" class="btn-enviar" />

        <p class="form-link">¿YA TIENES UNA CUENTA? &nbsp; <a href="{$_layoutParams.root}usuarios/login"> INGRESAR</a></p>
    </div>

</form>