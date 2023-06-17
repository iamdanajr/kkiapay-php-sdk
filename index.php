<?php
include_once("./config/init.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KKIAPAY - Payment</title>
</head>

<body>
    <h1>Welcome to Kkiapaay</h1>
    <input type="number" name="montant" id="montant" placeholder="please enter a price">
    <button type="button" onclick="onSubmit()">Valider</button>
    <script src="https://cdn.kkiapay.me/k.js"></script>

    <script>
        const montant = document.querySelector("#montant");

        function onSubmit(e) {
            if (montant) {
                openKkiapayWidget({
                    amount: montant,
                    position: "right",
                    name: "",
                    phone: "",
                    callback: "http:localhost:2020/",
                    data: "",
                    theme: "green",

                    key: "<?php echo KKIAPAY_PUBLIC ?>"
                })

                addSuccessListener(response => {
                    console.log(response);
                });

                addFailedListener(error => {
                    console.log(error);
                });
            } else {
                alert("no montant specify");
            }
        }
    </script>
</body>

</html>