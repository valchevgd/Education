function loadRepos() {

    let $repos = $('#repos');
    $repos.empty();

    let username = $('#username').val();

    $.ajax({
        method : 'GET',
        url : `https://api.github.com/users/${username}/repos`,
        success : printRepos,
        error : printError
    });

    function printError(){
        $repos.append($('<li>Error</li>'));
    }

    function printRepos(repos) {
        repos.forEach((r) => {

            let $li = $('<li>');
            let $a = $(`<a target="_blank" href="${r.html_url}">${r.full_name}</a>`);
            $li.append($a);

            $('#repos').append($li);
        })
    }
}