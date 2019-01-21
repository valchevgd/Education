function solve() {
    let sendBtn = document.getElementsByTagName('button')[0];
    let encodeBtn = document.getElementsByTagName('button')[1];

    sendBtn.addEventListener('click', () => {

        let sendingTextareaElement = document.getElementsByTagName('textarea')[0];
        let msg = sendingTextareaElement.value;
        let encodeMsg = '';

        for (let i = 0; i < msg.length; i++) {
            let char = msg.charCodeAt(i);
            char++;
            encodeMsg += String.fromCharCode(char);
        }

        let receivngTextareaElement = document.getElementsByTagName('textarea')[1];
        receivngTextareaElement.textContent = encodeMsg;

        sendingTextareaElement.value = '';
    });

    encodeBtn.addEventListener('click', () => {
        let receivngTextareaElement = document.getElementsByTagName('textarea')[1];
        let msgToDecode = receivngTextareaElement.value;
        let decodeMsg = '';

        for (let i = 0; i < msgToDecode.length; i++) {
            let char = msgToDecode.charCodeAt(i);
            char--;
            decodeMsg += String.fromCharCode(char);
        }

        receivngTextareaElement.textContent = decodeMsg;
    })
}