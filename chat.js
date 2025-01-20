function sendMessage() {
    const usernameInput = document.getElementById('username');
    const messageInput = document.getElementById('message');
    const username = usernameInput.value.trim();
    const message = messageInput.value.trim();

    if (username.length > 10) {
        alert("Kullanıcı adı en fazla 10 karakter olabilir!");
        return;
    }

    if (message.length > 30) {
        alert("Mesaj en fazla 30 karakter olabilir!");
        return;
    }

    if (username && message) {
        fetch('save_message.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `username=${username}&message=${message}`
        }).then(response => response.json()).then(data => {
            if (data.status === 'success') {
                loadMessages();
                messageInput.value = ''; 
            }
        });
    }
}

function loadMessages() {
    fetch('load_messages.php')
        .then(response => response.json())
        .then(messages => {
            let chatBox = document.getElementById('chat-box');
            chatBox.innerHTML = '';
            messages.forEach(msg => {
                let messageClass = msg.username === 'Anonim' ? 'message user' : 'message other';
                chatBox.innerHTML += `
                    <div class="${messageClass}">
                        <strong>${msg.username}</strong>: ${msg.message} 
                        <small style="display: block; font-size: 0.8em; color: #666;">${msg.timestamp}</small>
                    </div>
                `;
            });
            chatBox.scrollTop = chatBox.scrollHeight;
        });
}

setInterval(loadMessages, 2000); // 2 saniyede bir mesajları güncelle
