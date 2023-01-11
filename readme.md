# Stripe+php金流創建

1.方法1:
在後台創建商品,讓stripe去抓商品金額直接扣款(跳stripe付款頁面)
checkout.html
pay.php

2.方法2:
直接跳出popbar前端傳token驗證方式,stripe驗證之後後端直接創建charge進入帳戶
checkout2.html
pay2.php

3.方法3:
跳轉結帳頁面,填信用卡資訊,串建payment進入帳戶內(前端可以改畫面)
checkout3.html
checkout3.css
checkout3.js
pay3.php