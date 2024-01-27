let userBox = document.querySelector(".header .header-2 .user-box");

document.querySelector("#user-btn").onclick = () => {
  userBox.classList.toggle("active");
  navbar.classList.remove("active");
};

let navbar = document.querySelector(".header .header-2 .navbar");

document.querySelector("#menu-btn").onclick = () => {
  navbar.classList.toggle("active");
  userBox.classList.remove("active");
};

window.onscroll = () => {
  userBox.classList.remove("active");
  navbar.classList.remove("active");

  if (window.scrollY > 60) {
    document.querySelector(".header .header-2").classList.add("active");
  } else {
    document.querySelector(".header .header-2").classList.remove("active");
  }
};

document.querySelector("#chat-btn").onclick = () => {
  let chat = document.createElement("div");
  chat.innerHTML = `
  <div class="chatbox">
    <div class="chatbox-header">
      <div class="chatbox-agent">
        <span>Chatbot</span>
      </div>
      <div 
        id="close-chat-btn" class="fas fa-times">
      </div>
    </div>
    <ul class="chatbox-conversation" id="conversation">
      <li class="chatbox-conversation__message" v-for="message in conversation" v-bind:class="'chatbox-conversation__message--' + message.type">
        <div class="chatbox-message__sender">
          <span>{{ message.sender }}</span>
          <img class="chatbox-message__photo" :src="message.photo">
        </div>
        <div class="chatbox-message__content">
          <p>{{ message.text }}</p>
        </div>
      </li>
    </ul>
    <form class="chatbox-footer">
      <input class="chatbox-message" v-model="message">
      <button type="button" class="chatbox-btn chatbox-btn--send" @click="addMessage()">Send</button>
    </form>
  </div>`;
  chat.id = "maintel-chat";
  document.body.appendChild(chat);

  // Event handling code, allowing the ability to bind to specific events.
  var Chatbot = {
    events: {},
    on: function (event, callback) {
      var handlers = this.events[event] || [];
      handlers.push(callback);
      this.events[event] = handlers;
    },
    trigger: function (event, data) {
      var handlers = this.events[event];
      if (!handlers || handlers.length < 1) return;
      [].forEach.call(handlers, function (handler) {
        handler(data);
      });
    },
  };

  // The Vue instance, mainly used to make data binding easier for now and to see if we can use it inline.
  var app = new Vue({
    el: "#maintel-chat",
    data: {
      message: "Hello Vue!",
      conversation: [
        {
          id: 1,
          sender: "Tom",
          text: "Hi",
          type: "to",
          photo: "https://i.pravatar.cc/30?img=2",
        },
        {
          id: 2,
          sender: "Chatbot",
          text: "I'm a bot",
          type: "from",
          photo: "https://i.pravatar.cc/30?img=3",
        },
        {
          id: 3,
          sender: "Chatbot",
          text: "this is the second message",
          type: "from",
          photo: "https://i.pravatar.cc/30?img=3",
        },
        {
          id: 4,
          sender: "Chatbot",
          text: "this is the second message",
          type: "from",
          photo: "https://i.pravatar.cc/30?img=3",
        },
      ],
    },
    updated: function () {
      var chatConversation = document.getElementById("conversation");
      chatConversation.scrollTop = chatConversation.scrollHeight;
    },
    methods: {
      addMessage: function () {
        var messageDetails = {
          id: this.conversation.length + 1,
          sender: "Tom",
          text: this.message,
          type: "to",
          photo: "https://i.pravatar.cc/30?img=2",
        };

        if (this.message.length) {
          this.conversation.push(messageDetails);
          // This code is triggering the 'sendMessage' event and passing in the message data.
          Chatbot.trigger(
            "sendMessage",
            JSON.parse(
              JSON.stringify(this.conversation[this.conversation.length - 1])
            )
          );
          this.message = "";
        }
      },
    },
  });
  document.querySelector("#close-chat-btn").onclick = () => {
    var chatC = document.querySelector(".chatbox");
    chatC.style.right = "-105%";
  };
};
