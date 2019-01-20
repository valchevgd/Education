function register() {

    let usernameElement = document.getElementById('username');
    let usernameValue = usernameElement.value;

    let emailElement = document.getElementById('email');
    let emailValue = emailElement.value;

    let passwordElement = document.getElementById('password');
    let passwordLength = passwordElement.value.length;

    let regex = new RegExp('(.+)@(.+).(com|bg)');
    let validEmail = regex.test(emailValue);

    if (usernameValue && passwordLength && validEmail) {

        let sectionElement = document.getElementById('result');

        let successfulElement = document.createElement('h1');
        successfulElement.innerHTML = 'Successful Registration!';
        let brElement = document.createElement('br');

        sectionElement.appendChild(successfulElement);
        sectionElement.appendChild(document.createTextNode('Username: ' + usernameValue));
        sectionElement.appendChild(document.createElement('br'));
        sectionElement.appendChild(document.createTextNode('Email: ' + emailValue));
        sectionElement.appendChild(brElement);
        sectionElement.appendChild(document.createTextNode('Password: ' + '*'.repeat(passwordLength)));

        usernameElement.value = '';
        passwordElement.value = '';
        emailElement.value = '';

        setTimeout(() => {
            sectionElement.innerHTML = '';
        }, 5000);
    }
}
