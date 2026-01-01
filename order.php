<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $product = $_POST['product'];

    $text = "🛒 سفارش جدید:\n".
            "نام: $name\n".
            "تلفن: $phone\n".
            "آدرس: $address\n".
            "محصول: $product";

    $token = "8564441672:AAGRh4W_IX5Y884utwiH0BM8YKILCKeqKdk"; // 
    $chat_id = "8067180596"; //

    $url = "https://api.telegram.org/bot$token/sendMessage";
    $data = ["chat_id"=>$chat_id,"text"=>$text];

    file_get_contents($url."?".http_build_query($data));
    echo "سفارش ارسال شد ✅";
}
?>