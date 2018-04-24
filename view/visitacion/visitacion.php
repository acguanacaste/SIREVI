<html>
<head>
<script type="text/javascript">
function habilitar(obj) {
  var hab;
  frm=obj.form;
  num=obj.selectedIndex;
  if (num==1) hab=true;
  else if (num==2) hab=false;
  frm.sueldo.disabled=hab;
  frm.nombre.disabled=hab;
}
</script>
</head>
<body>
<form>
<select onchange="habilitar(this)">
<option>trabaja</option>
<option>no trabaja</option>
<option>independiente</option>
</select>
<input type="text" name="sueldo" />
<input type="text" name="nombre" />
</body>
</html> 
