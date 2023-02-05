<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('/assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}">
    <link rel="stylesheet" href="css/main.scss">
    <link rel="stylesheet" media="(max-width:500px)" href="{{ asset('/assets/css/mobile.css') }}">
    <link rel="stylesheet" media="(max-width:768px)" href="{{ asset('/assets/css/tablet.css') }}">

    <link href="https://fonts.cdnfonts.com/css/common-pixel" rel="stylesheet">

    <script src="js/main.js" defer></script>
</head>

<body onload="scrollFunction()">
    @include('layouts.frontend._header')
    @section('content')

    @show
    @include('layouts.frontend._footer')
    @include('layouts.frontend._chat_box')
    @include('layouts.frontend._contact_button')

    <script>
        const message = document.querySelector("#chat-box .message-entry #message-input")
        const sendButton = document.querySelector("#chat-box .message-entry #message-send")
        const messageBubble = document.querySelector("#chat-box .message-box .message-bubble")
        sendButton.addEventListener("click", addChatBubble)

        function addChatBubble() {
            if (message.value) {
                messageBubble.innerHTML += `<li class='odd'>${message.value}</li>`;
            }
            message.value = ""
            chatBody.scrollTo({
                top: chatBody.scrollHeight
            })
        }
    </script>
    <script>
        const chatBody = document.querySelector("#chat-box .message-box")
        chatBody.scrollTo({
            top: chatBody.scrollHeight
        })
    </script>
    <script>
        let max = 0
        window.onscroll = () => {
            if (document.documentElement.scrollTop >= max || document.documentElement.scrollTop <= 20) {
                if (document.documentElement.scrollTop < 20) {
                    document.getElementById("contact-me").style.display = "none";
                } else {
                    document.getElementById("contact-me").style.display = "flex";
                }
                document.getElementById("navbar-top").style.top = "-80px";
                max = document.documentElement.scrollTop;
            } else {
                document.getElementById("navbar-top").style.top = "0";
                max = document.documentElement.scrollTop;

            }
        }
    </script>
    <script>
        // let chatBox = document.querySelector("#chat-box")
        document.querySelector("#chat-box .header .cross-img").addEventListener("click", () => {
            document.getElementById("chat-box").style.bottom = "-475px";
            chatButton.style.display = "flex"

        })
    </script>
    <script>
        chatButton = document.getElementById("chat")
        chatButton.addEventListener("click", () => {
            chatButton.style.display = "none"
            document.getElementById("chat-box").style.bottom = "20px"
        })
        document.getElementById("chat-box").addEventListener("mouseover", () => {
            document.getElementById("chat-box").style.zIndex = "999"
        })
    </script>
    <script>
        var preloader = document.getElementById('loader');

        function preLoaderHandler() {
            preloader.style.display = 'none';
        }
    </script>
</body>

</html>
