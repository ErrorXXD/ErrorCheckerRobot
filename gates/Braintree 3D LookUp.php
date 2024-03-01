  <?php

    if (preg_match('/^(\/vbv|\.vbv|!vbv)/', $text)) {
      $userid = $update['message']['from']['id'];

        $sent_message_id = send_reply($chatId, $message_id, $keyboard, "<b>THIS GATE ON MAINTENANCE ❌</b>");


  }