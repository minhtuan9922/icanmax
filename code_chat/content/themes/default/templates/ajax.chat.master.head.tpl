{if $offline}

    <div class="chat-head-title">
        <i class="fa fa-user-secret"></i>
        {__("Không có ai")}
    </div>

{else}

    <div class="chat-head-title">
        <i class="fa fa-circle"></i>
        {__("Trò chuyện")} ({count($online_friends)})
    </div>

{/if}