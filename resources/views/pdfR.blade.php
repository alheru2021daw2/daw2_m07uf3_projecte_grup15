<!DOCTYPE html>
<html>
<head>
        <title>Documento de la reserva</title>
</head>
<body>
        <h1>Información de la reserva</h1>
        <p><strong>Passaport Client:{{$reserva->Passaport_client}}</strong>
        <p><strong>Codi unic:{{$reserva->Codi_unic}}</strong>
        <p><strong>Localitzador:{{$reserva->Localitzador}}</strong>
        <p><strong>Numero seient:{{$reserva->Numero_seient}}</strong>
        <p><strong>Equipatge ma:{{$reserva->Equipatge_ma}}</strong>
        <p><strong>Equipatge cabina:{{$reserva->Equipatge_cabina}}</strong>
        <p><strong>Quantitat equipatge facturat de més de 20kg:{{$reserva->Quantitat_equipatge_facturat_20kg}}</strong>
        <p><strong>Tipus assegurança:{{$reserva->Tipus_assegurança}}</strong>
        <p><strong>Preu vol:{{$reserva->Preu_vol}}</strong>
        <p><strong>Tipus checking:{{$reserva->Tipus_checking}}</strong>
</body>
</html>

