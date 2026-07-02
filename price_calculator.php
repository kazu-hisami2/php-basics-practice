<?php
//名称・単価・個数・税率
$product_name = "ノートパソコン";
$price = 80000;
$quantity = 2;
$tax_rate = 0.1;
echo "PHPのバージョンは".phpversion()."です<br>"; //PHPのバージョン表示

//小計と税込み価格の計算
$subtotal = $price*$quantity;
$tax_amount = $subtotal*$tax_rate;
$total = $subtotal+$tax_amount;

//ブラウザ上で表示
echo "商品名: {$product_name}<br>";
echo "単価: ".number_format($price)."円<br>";
echo "数量: ".number_format($quantity)."個<br>";
echo "小計: ".number_format($subtotal)."円<br>";
echo "消費税(".($tax_rate*100)."%): ".number_format($tax_amount)."円<br>";
echo "<b>合計金額: ".number_format($total)."円</b>";
