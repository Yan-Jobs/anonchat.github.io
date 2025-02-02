<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANON CHAT</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="https://i.hizliresim.com/mapq4ol.png" type="image/png">
</head>
<body>
    <!-- 3D Arka Plan Spline Embed -->
    <iframe src="" frameborder="0" width="100%" height="100%" style="position: fixed; top: 0; left: 0; z-index: -1;"></iframe>

    <div class="header">
        <h1>Anon Chat</h1>
        <p>Korkuyorsan yapma yapıyorsan korkma.</p>
    </div>

    <div id="chat-box"></div>

    <div class="message-input">
        <input type="text" id="username" placeholder="Kullanıcı Adı" maxlength="10" />
        <input type="text" id="message" placeholder="Mesajınızı yazın..." maxlength="30" />
        <button onclick="sendMessage()">Gönder</button>
    </div>

    <div class="footer">
        <p>© 2024 canqu & erich</p>
    </div>

    <script src="chat.js"></script>
</body>
</html>
