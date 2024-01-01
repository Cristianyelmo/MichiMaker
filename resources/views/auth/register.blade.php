<form action="/register" method="post">
@csrf

<input type="text" name="name" >
<input type="email" name="email" >
<input type="password" name="password" >
@error('email')
<small class='text-danger'>{{'*'.$message}}</small>

@enderror
<button type="submit">Crear usuario</button>

</form>