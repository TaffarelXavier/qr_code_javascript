<!DOCTYPE html>
<html>
    <head>
        <title>Cross-Browser QRCode generator for Javascript</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
        <script type="text/javascript" src="jquery.min.js"></script>
        <script type="text/javascript" src="qrcode.js"></script>
    </head>
    <body>
        <?php
        for ($x = 1; $x <25; $x++) {
            ?>
            <div id="qrcode_<?php echo $x; ?>" 
                 class="qr_codes" style="margin-top:2px;float:left;
                 margin-left:2px;border:1px solid #ccc;padding:10px;text-align: center;clear: right;">
                    <?php echo 'id_',$x; ?>
            </div>
            <?php
        }
        ?>

        <script>

            var qr_codes = document.getElementsByClassName("qr_codes");

            Array.prototype.forEach.call(qr_codes, function (el) {
                var qrcode = new QRCode(document.getElementById(el.id), {
                    text:el.innerText,
                    width: 150,
                    height: 140
                });
            });

            //qrcode.makeCode("teste");

        </script>
    </body>