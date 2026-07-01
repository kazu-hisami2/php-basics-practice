<?php
// 商品情報の定義
$product_name = "ワイヤレスイヤホン";
$original_price = 5000;
$discount_rate = 0.20;
$discount_amount = $original_price * $discount_rate;
$final_price = $original_price - $discount_amount;

// 結果の表示
echo "商品名: " . $product_name . "<br>";
echo "価格: " . $original_price . "円<br>";
echo "割引価格(". ($discount_rate * 100) ."%): " . $discount_amount . "円<br>";
echo "<strong>合計金額: " . $final_price . "円</strong><br>";
?>