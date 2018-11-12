# qr_code_javascript
Cria QR Codes

QRCode.js
QRCode.js é uma biblioteca javascript para fazer QRCode. QRCode.js suporta Cross-browser com HTML5 Canvas e table tag no DOM. QRCode.js não tem dependências.

Usos Básicos
<div id="qrcode"></div>
<script type="text/javascript">
new QRCode(document.getElementById("qrcode"), "http://jindo.dev.naver.com/collie");
</script>
ou com algumas opções

var qrcode = new QRCode("test", {
    text: "http://jindo.dev.naver.com/collie",
    width: 128,
    height: 128,
    colorDark : "#000000",
    colorLight : "#ffffff",
    correctLevel : QRCode.CorrectLevel.H
});
e você pode usar alguns métodos

qrcode.clear(); // clear the code.
qrcode.makeCode("http://naver.com"); // make another code.

https://davidshimjs.github.io/qrcodejs/
