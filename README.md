# php-basics-practice

## 概要
COACHTECH 教材 Tutorial 7-1「PHPの基礎 ハンズオン演習」で作成した成果物です。
phpの演算や文字列出力により、商品単価や合計金額をブラウザに表示させるコードを作成しました。

## 使用技術
- PHP 8.2.31

## 学んだこと
- phpの変数の宣言（$変数）やデータ型、四則演算の基本
- 文字列内で""（ダブルクォーテーション）による変数展開
- .$変数.による文字列と変数の連結について

## 開発の工夫や詰まったところ・その解決策
- number_format($変数)によって、数値の3桁のカンマ区切り表示にしました。
- 消費税率（百分率）を計算して文字列内に連結する部分で悩みましたが、.($tax_rate*100).と書いて解決しました。
- PHPのバージョン表示(使用技術を明示するため)

## 動作確認
- Docker環境の起動後、ブラウザ上で"http://localhost:8000/7-1-6_hands-on/practice/price_calculator.php"
  にアクセスし動作を確認

## 動作確認のスクショ
<img width="1088" height="947" alt="Image" src="https://github.com/user-attachments/assets/f3133985-98ac-4d3d-95f5-cfca815e0807" />
