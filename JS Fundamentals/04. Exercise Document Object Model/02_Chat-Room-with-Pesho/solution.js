function solve() {

    let myBtn = document.getElementsByName('myBtn')[0];
    let peshoBtn = document.getElementsByName('peshoBtn')[0];

    myBtn.addEventListener('click', () => {
        let myChatBoxElement = document.getElementById('myChatBox');

        sendMsg(myChatBoxElement, 'Me');
    });

    peshoBtn.addEventListener('click', () => {
       let peshoChatBoxElement = document.getElementById('peshoChatBox');

       sendMsg(peshoChatBoxElement, 'Pesho');
    });

    function sendMsg(element, sender) {
        let msg = element.value;

        let divElement = document.createElement('div');
        let spanElement = document.createElement('span');
        let pElement = document.createElement('p');

        spanElement.textContent = sender;
        pElement.textContent = msg;

        divElement.appendChild(spanElement);
        divElement.appendChild(pElement);

        if (sender === 'Me'){
            divElement.style.textAlign = 'left';
        }else {
            divElement.style.textAlign = 'right';
        }
        let chatChronologyDiv = document.getElementById('chatChronology');

        chatChronologyDiv.appendChild(divElement);

        element.value = '';
    }
}