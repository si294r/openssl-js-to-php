<?php

$privatekey = "-----BEGIN PRIVATE KEY-----
MIIEvwIBADANBgkqhkiG9w0BAQEFAASCBKkwggSlAgEAAoIBAQDFG8S2KKBnQTiY
7ZlfMy3bE+4aBoSpET7ty3pI6wRmz0tRh63I6mC52aaDoGBIXDgc7DYMmO8OXuz2
070bco+jfhXXkshTMGo5JvfBQPCDCiEGfh7oOWQG53fNj8hVPPnNUQigEEMaaFv1
X21Zg1Fber6xkZDyQZU7YDsZDM3T/hMuTzj4V3Fy753jnhFcaYP+nKhiCtRG44uA
IcuHzzkTaJLzRDOPTNC1RZpJkkDZvbAsTXJn6PidAUGNS1vFCNjkN/kJEVyKvREk
SxszEi08fkq4xf5A6h98416lAcL7aLWiq34LZCdHZlWKb/zxRFR3HstFQF5Watvs
viXKxT/nAgMBAAECggEBAKlM35pirNvjflyEgF7v06w/oxzBioK5KGcRhfhJvN8d
oCDoPBG9ltUrKEYYo3qjkyLslMQfO/4I9NpRJjYEIXIZY2NlVSF3DVYHrXhVcf/r
3E/6Vku6t7riZ9mtbTIhjKKYvqLVNP3is1G/5GmlTGUZud9FG82pHSgB0OEESWqS
aBp9afuz2J+rcF8ty3RLzr4oBpgwBnEwAYyaeCIRGPTKXZRBhBgOY36LbEplorne
s6SJ9JeXOWsA0jwif3afyprLmJ881DvLjgFQqXTPS8YsyBlH/LAGFUnojkEOl94f
+BPYWn4uKiXoRfQxCoBC9sUCsnCslCU8gn51Qj72PlkCgYEA5rg4NiIxD83xmgGw
QZuMZbpmAs9Do6sLLS/RO+TCLDQOVL05o0EJw8m0E06C4la1EN1DtIp0r6B5I1cQ
m8JAWD4kICELkRGlPpPyfOAOxNOZopj7Ucrg0Mupl/DZnFzkH/MfEqgrvmhv+b1o
Um0ZnvbdSvu20T4M5d0kJCJDopUCgYEA2rS+FftyemxQEiRA1U5KOD001CtKSCNa
lQVcxMCzmX2nwQQ7vfHd34Y+cul/LRtZ4B0eZIHpmHChnc4U5WEqwbKfvXq1smcZ
MBEvzrzrQaM7/cpt3e++2p+btStQeNJotK8yRYLXvX3QoEw1hwdIQFc94Qfk8vP4
+66idScu1YsCgYEAq9KQEkiebx25iy8su3+DLJOHuxnuTqpoNWvCEC/KJ69Q6OzP
SvR5uDS0BhjXQoa+a+PMs1zVj6Ib9SS2+rjMwKrurnrNqWkRviviT/txJEZNyZjS
udQ0X2r9T2mQNnG7dsvR3Uwe37vZgIz9bz1O8mL45QnW2bezVVC+xKY75o0CgYAK
0oTRe6bXjgKMU0TuCTi8/bJeiWHcnfs+goxrpAl/H+usLnRyWsSa6f6vGwTTC5Zv
86DsYk1X4MLulyMLkrpV6WvkKW1STa2+ZitSdKDDl7tBPMIhCFsOYHWJCoKp5+eM
gVrge7AHTXGEbSD89IxLusVyHDzlFNOOSL77QxwbLwKBgQDEJdtwJkAgdbufu3wr
gfHe8ZTnDxsIP/V5mhPkw0tZ5l44eJZDk25xJUhPr36V3b0x7ynK/+U9B7Dh4RLR
M+5nXRlP0sX2H7EM+p1WOPnPIJ5RnUEmDKCHtb+kpLYUgGYOehx/OqAISdvKRUdR
dtZhOBqHYCFUS6LOUSSaBawNSQ==
-----END PRIVATE KEY-----";

if (isset($_POST['username'])) {

    $data_encrypted = base64_decode($_POST['username']);

    openssl_private_decrypt($data_encrypted, $result_decrypt, $privatekey);

    echo $result_decrypt;
    die;

}

?><html>

<head>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="js/jsencrypt.min.js"></script>
    <script>
        var publickey = `
-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxRvEtiigZ0E4mO2ZXzMt
2xPuGgaEqRE+7ct6SOsEZs9LUYetyOpgudmmg6BgSFw4HOw2DJjvDl7s9tO9G3KP
o34V15LIUzBqOSb3wUDwgwohBn4e6DlkBud3zY/IVTz5zVEIoBBDGmhb9V9tWYNR
W3q+sZGQ8kGVO2A7GQzN0/4TLk84+Fdxcu+d454RXGmD/pyoYgrURuOLgCHLh885
E2iS80Qzj0zQtUWaSZJA2b2wLE1yZ+j4nQFBjUtbxQjY5Df5CRFcir0RJEsbMxIt
PH5KuMX+QOoffONepQHC+2i1oqt+C2QnR2ZVim/88URUdx7LRUBeVmrb7L4lysU/
5wIDAQAB
-----END PUBLIC KEY-----`;

        function submit_click() {
            var data = $('[name="username"]').val();

            // Encrypt with the public key...
            var encrypt = new JSEncrypt();
            encrypt.setPublicKey(publickey);
            var encrypted_data = encrypt.encrypt(data);

            console.log('send data to server = ' + encrypted_data);

            $.post("index.php", {
                username: encrypted_data
            }).done(function(result) {
                console.log('get data from server = ' + result);
            });
        }
    </script>
</head>

<body>
    Username : <input type="text" name="username" value="aggregator08@mailinator.com" style="width: 300px;">
    <br /><br />
    <button onclick="submit_click()">Submit</button>
</body>

</html>