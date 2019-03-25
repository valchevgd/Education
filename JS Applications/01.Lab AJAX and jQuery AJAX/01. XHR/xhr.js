function loadRepos() {

    let request = new XMLHttpRequest();

    request.open('GET', 'https://api.github.com/users/testnakov/repos');

    request.onreadystatechange = () => {

        if(request.readyState === 4 && request.status === 200) {

            $('#res').text(request.responseText);
        }
    };

    request.send();
}