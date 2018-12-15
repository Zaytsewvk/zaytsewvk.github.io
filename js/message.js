var sendButton = document.querySelectorAll(".btn-contact-send")
var messageSend = document.getElementById("message-send")

for (var i = 0; i < sendButton.length; i++) {
	sendButton[i].addEventListener("click", function() {
		if (messageSend.classList.contains("message-send-hidden")) {
			messageSend.classList.add("message-send")
		}
	})
}