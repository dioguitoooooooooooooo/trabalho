<?php
include ('liga_bd.php');

$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$numero_p = $_POST["numero_p"];
$tipo_reserva = $_POST["tipo_reserva"];
$horas_reserva = $_POST["horas_reserva"];
$requisitos_especiais = $_POST["requisitos_especiais"];

if ($nome == "" or $telefone == "" or $email == "" or $numero_p == "" or $tipo_reserva == "" or $requisitos_especiais == "" or $horas_reserva == "") {
    header("Location: Reservar.php?erro=1");
} else {
    $sql = "SELECT * FROM reservar WHERE email='$email'";
    $encontra = mysqli_query($liga_bd, $sql);
    
    if (mysqli_num_rows($encontra) > 0) {
        header("Location: Reservar.php?erro=2");
    } else {
        mysqli_query($liga_bd, "INSERT INTO reservar (nome, telefone, email, numero_p, tipo_reserva, requisitos_especiais, horas_reserva)
        VALUES ('$nome','$telefone','$email','$numero_p','$tipo_reserva','$requisitos_especiais','$horas_reserva')");
        mysqli_close($liga_bd);
        header("Location: Reservar.php");
    }
}
?>