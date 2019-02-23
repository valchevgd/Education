class CheckingAccount {

    constructor(clientId, email, firstName, lastName) {
        this.clientId = clientId;
        this.email = email;
        this.firstName = firstName;
        this.lastName = lastName;
        this.products = [];
    }


    set clientId(id) {
        if (id.length !== 6
            || Number(id) === NaN) {
            throw new TypeError('Client ID must be a 6-digit number');
        }

        this._clientId = id;
    }

    set email(email) {
        let emailRegEx = new RegExp('^[a-z]+@([a-z]+|.)+');

        if (email.match(emailRegEx)) {
            this._email = email;
        } else {
            throw  new TypeError('Invalid e-mail')
        }

    }

    set firstName(name){
        if (name.length < 3 || name.length > 20) {
            throw new TypeError('First name must be between 3 and 20 characters long')
        }

        if (!CheckingAccount.nameValidation(name)) {
            throw new TypeError('First name must contain only Latin characters')
        }

        this._firstName = name;
    }

    set lastName(name){
        if (name.length < 3 || name.length > 20) {
            throw new TypeError('Last name must be between 3 and 20 characters long')
        }

        if (!CheckingAccount.nameValidation(name)) {
            throw new TypeError('Last name must contain only Latin characters')
        }

        this._lastName = name;
    }

    static nameValidation(name) {
        let nameRegex = new RegExp('^[a-z]+$', 'i');

        return !!name.match(nameRegex);


    }
}

let acc = new CheckingAccount('588887', 'ivan@abv.bg', 'Ivan', 'Petrov');