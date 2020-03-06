<?php

$username = 'user';
$password = 'password';
$ch = curl_init();
$URL = 'http://localhost/tom-immo/public/api/index/properties';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <div>
            <label for="">Id</label>
            <input type="text" name="id">
        </div>
        <div>
            <label for="">Numéro</label>
            <input type="text" name="num">
        </div>
        <div>
            <label for="">Addresse</label>
            <input type="text" name="address">
        </div>
        <div>
            <label for="">City</label>
            <input type="text" name="city">
        </div>
        <div>
            <label for="">Code postal</label>
            <input type="text" name="zipcode">
        </div>
        <div>
            <label for="">Pays</label>
            <input type="text" name="country">
        </div>
        <div>
            <input type="submit" value="Envoyer">
        </div>
    </form>

</body>

</html>

<?php

if (isset($_POST['city'])) {
    $postfields = array(
        "id" => $_POST['id'],
        "city" => $_POST['city'],
        "address" => $_POST['address'],
        "country" => $_POST['country'],
        "zipcode" => $_POST['zipcode'],
        "num" => $_POST['num']
    );

    curl_setopt($ch, CURLOPT_URL, $URL);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postfields));

    $result = curl_exec($ch);
    curl_close($ch);

    echo $result;
}
