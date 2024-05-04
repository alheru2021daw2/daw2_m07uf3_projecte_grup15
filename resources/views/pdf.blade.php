<!DOCTYPE html>
<html>
<head>
	<title>Documento del vuelo</title>
</head>
<body>
	<h1>Información del vuelo</h1>
	<p><strong>Código único:</strong>{{$vuelo->Codi_unic}}</p>
	<p><strong>Código modelo:</strong>{{$vuelo->Codi_model}}</p>
	<p><strong>Ciudad origen:</strong>{{$vuelo->Ciutat_origen}}</p>
        <p><strong>Ciutat destinacio:</strong>{{$vuelo->Ciutat_destinacio}}</p>
        <p><strong>Terminal Origen:</strong>{{$vuelo->Terminal_origen}}</p>
        <p><strong>Terminal destinacio:</strong>{{$vuelo->Terminal_destinacio}}</p>
        <p><strong>Data sortida:</strong>{{$vuelo->Data_sortida}}</p>
        <p><strong>Data arribada:</strong>{{$vuelo->Data_arribada}}</p>
        <p><strong>Hora sortida:</strong>{{$vuelo->Hora_sortida}}</p>
        <p><strong>Hora arribada:</strong>{{$vuelo->Hora_arribada}}</p>
        <p><strong>Classe:</strong>{{$vuelo->Classe}}</p>
</body>
</html>
