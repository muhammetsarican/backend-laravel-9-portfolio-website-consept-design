    <!-- Chat Box - Start -->
    <?php
    $chatRooms = \App\Http\Controllers\Backend\ChatRoomController::getChatRooms();
    $messages = \App\Http\Controllers\Backend\MessageController::getMessages($chatRooms->id);
    ?>
    <div id="chat-box">
        <div class="header">
            <h3>Support Center</h3>
            <p>Chat Id:<span>
                    {{ $chatRooms->id }}
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
            @foreach ($messages as $item)
                @if ($item->role_id == 3)
                    <ul class="message-bubble">
                        <li class="odd">{{ $item->message }}</li>
                    </ul>
                @else
                    <ul class="message-bubble">
                        <li class="even">{{ $item->message }}</li>
                    </ul>
                @endif
            @endforeach
            <!-- <div class="message-bubble">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, necessitatibus.
                </div>
                <div class="own-message-bubble">Lorem ipsum dolor sit amet.</div> -->
        </div>
        <div class="message-entry">
            <form role="form" action="{{ route('message_store', $chatRooms->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <input type="text" name="message" id="" class="form-control"
                    placeholder="Write your message here">
                {{-- <input type="text" id="lname" class="form-control" name="camp_phone_validation"> --}}

                <button type="submit" id=""><i><img src="{{ asset('assets') }}/icons/message-send.png"
                            alt=""></i></button>
            </form>
        </div>
    </div>
    <!-- Chat Box - End -->
