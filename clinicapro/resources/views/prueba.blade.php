<!DOCTYPE html>
<html>
<head>
	<title></title>

     <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet">
</head>
<body>

<select id="nameid" style="width: 200px">
<option>Elemento 1</option>
<option>Elemento 2</option>
<option>Elemento 3</option>
<option>Elemento 4</option>
<option>Elemento 5</option>
<option>Elemento 6</option>
</select>



<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script type="text/javascript">
      $("#id_paciente").select2({
           placeholder: "Escoja un paciente",
            allowClear: true
        });
</script>


</body>
</html>