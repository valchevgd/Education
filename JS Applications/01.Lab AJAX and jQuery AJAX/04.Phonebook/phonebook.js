$(function () {

    $('#btnLoad').click(loadContacts);
    $('#btnCreate').click(createContact);
    let $phonebook = $('#phonebook');

    let baseServerUrl = 'https://phonebook-1cfea.firebaseio.com/phonebook';
    
    function loadContacts() {

        $phonebook.empty();

        $.get(baseServerUrl + '.json')
            .then(displayContacts);
    }

    function displayContacts(contacts) {
        for(let key in contacts){

            let person = contacts[key]['name'];
            let phone = contacts[key]['phone'];

            let $li = $('<li>');
            $li.text(`${person}: ${phone}`);
            $phonebook.append($li);

            $li.append($('<button>Delete</button>')
                .click(deleteContact.bind(this, key)));
        }
    }

    function createContact() {

        let $person = $('#person');
        let $phone = $('#phone');

        let newContact = JSON.stringify({
            name:$person.val(),
            phone:$phone.val()
        });

        $.post(baseServerUrl + '.json', newContact)
            .then(loadContacts);

        $person.val('');
        $phone.val('');
    }

    function deleteContact(key) {

        let request = {
            method:'DELETE',
            url: `${baseServerUrl}/${key}.json`
        };

        $.ajax(request)
            .then(loadContacts);
    }
});