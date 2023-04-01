<form method="post" action="/chat">
    @csrf
    <input type="text" name="message" placeholder="Type your message here...">
    <button type="submit">Send</button>
</form>