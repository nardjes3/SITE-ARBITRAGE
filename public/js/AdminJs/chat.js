document.addEventListener('DOMContentLoaded', function() {
    var chatContainer = document.getElementById('chatContainer');
    var messageInput = document.getElementById('messageInput');
    var sendMessageButton = document.getElementById('sendMessageButton');

    var adminChatContainer = document.getElementById('adminChatContainer');
    var adminMessageInput = document.getElementById('adminMessageInput');
    var sendAdminMessageButton = document.getElementById('sendAdminMessageButton');

    sendMessageButton.addEventListener('click', function() {
        var message = messageInput.value.trim();
        if (message !== '') {
            var userMessage = createMessage(message, 'user');
            chatContainer.appendChild(userMessage);
            messageInput.value = '';
        }
    });

    sendAdminMessageButton.addEventListener('click', function() {
        var message = adminMessageInput.value.trim();
        if (message !== '') {
            var adminMessage = createMessage(message, 'admin');
            adminChatContainer.appendChild(adminMessage);
            adminMessageInput.value = '';
        }
    });

    function createMessage(content, sender) {
        var message = document.createElement('div');
        message.classList.add('message');
        message.classList.add(sender + '-message');
        message.innerHTML = content;
        return message;
    }
});
