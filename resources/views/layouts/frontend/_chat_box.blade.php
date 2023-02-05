    <!-- Chat Box - Start -->
    <?php
    $chatRooms = \App\Http\Controllers\Backend\ChatRoomController::getChatRooms();
    $messages = \App\Http\Controllers\Backend\MessageController::getMessages($chatRooms->id);
    ?>
    <div id="chat-box">
        <div class="header">
            <h3>Support Center</h3>
            <p>Chat Id:<span>
                {{$chatRooms->id}}
            </span></p>
            <div class="cross-img">
                <img src="{{ asset('assets') }}/icons/cross.png" alt="">
                <i class="fi fi-sr-cross"></i>
            </div>
        </div>

        <div class="message-box">
            <ul class="message-bubble">
                <li class="even">How can I help you?</li>
            </ul>
            <ul class="message-bubble">
                <li class="odd">{{$messages->message_id->message}}</li>
            </ul>
            <!-- <div class="message-bubble">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, necessitatibus.
                </div>
                <div class="own-message-bubble">Lorem ipsum dolor sit amet.</div> -->
        </div>
        <div class="message-entry">
            <input type="text" name="" id="message-input" placeholder="Write your message here">
            <button type="submit" id="message-send"><i><img src="{{ asset('assets') }}/icons/message-send.png"
                        alt=""></i></button>
        </div>
    </div>
    <!-- Chat Box - End -->
