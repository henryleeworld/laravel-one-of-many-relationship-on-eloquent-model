# Laravel 10 Eloquent 模型的內合併關聯性

這種聯結可以透過比對資料表之間共同的欄位值，從兩個以上的資料表中擷取資料列。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/user/login/` 來進行最後登入時間取得。
- 你可以經由 `/user/state/` 來進行前十筆啟用使用者清單取得。
- 你可以經由 `/product/price/` 來進行前十筆有價格商品清單取得。

----

## 畫面截圖
![](https://i.imgur.com/fL3ZeZ0.png)
> 使用者最後登入時間

![](https://i.imgur.com/xOuugG9.png)
> 前十筆啟用使用者清單

![](https://i.imgur.com/cWtcP7U.png)
> 前十筆有價格商品清單