<?php
$token = 'apis-token-6613.scd0AQMOfh6McIXXDbuoExxz0NaZiJGT';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['DNI'])) {
    $dni = $_POST['DNI'];

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.apis.net.pe/v2/reniec/dni?numero=' . $dni,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 2,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Referer: https://apis.net.pe/consulta-dni-api',
            'Authorization: Bearer ' . $token
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    $persona = json_decode($response);

    // Devolver todos los datos en un solo objeto JSON
    header('Content-Type: application/json');
    echo json_encode([
        'nombres' => $persona->nombres,
        'apellidoP' => $persona->apellidoPaterno,
        'apellidoM' => $persona->apellidoMaterno
    ]);
}
?>
