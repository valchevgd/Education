function solve() {
    document.getElementsByTagName("button")[0]
        .addEventListener("click", function(event){
            event.preventDefault();
        });


    let submitButton = document.querySelector('form > button');
    submitButton.addEventListener('click', userRegister);

    let searchButton = document.getElementsByTagName('button')[1];
    searchButton.addEventListener('click', search);

    function userRegister() {
        let username = document.getElementsByTagName('input')[0].value;
        let email = document.getElementsByTagName('input')[2].value;
        let topics = Array.from(document.getElementsByClassName('topics')[0].children)
            .filter(el => el.checked).map(el => el.value);

        let trElement = document.createElement('tr');

        let usernameTd = document.createElement('td');
        usernameTd.textContent = username;
        trElement.appendChild(usernameTd);

        let emailTd = document.createElement('td');
        emailTd.textContent = email;
        trElement.appendChild(emailTd);

        let topicsTd = document.createElement('td');
        topicsTd.textContent = topics.join(' ');
        trElement.appendChild(topicsTd);

        document.getElementsByTagName('tbody')[0].appendChild(trElement);
    }

    function search() {
        let str = document.getElementsByTagName('input')[7].value;

        let tds = Array.from(document.querySelectorAll('table tbody tr td'));
        
        for (let td of tds){
            td.parentNode.style.visibility = 'hidden';
        }

        for (let td of tds){
            if (td.textContent.includes(str)){
                td.parentNode.style.visibility = 'visible';
            }
        }
    }
}