function attachEvents(){

    let url = 'https://messenger-c2ffa.firebaseio.com/messinger.json';

    $('#submit').click(createNewMessage);
    $('#refresh').click(loadMessages);

    function createNewMessage() {

        let author = $('#author').val();
        let content = $('#content').val();
        let message = {
            author,
            content,
            timestamp:Date.now()
        };

        $.ajax({
            method:'POST',
            url,
            data: JSON.stringify(message)
        })
    }

    function loadMessages() {

        $.ajax({
            method:'GET',
            url,
            success:printMessages
        })
    }

    function printMessages(data) {

        for (const message of Object.entries(data)) {
            console.log(message[1]);
            $('#messages').append(`${message[1].author}: ${message[1].content}\n`)
        }
    }
}