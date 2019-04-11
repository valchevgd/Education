handlers.getRegister = function(context){

    context.loadPartials({
        header:'../templates/common/header.hbs',
        footer:'../templates/common/footer.hbs'
    }).then(function(){
        this.partial('../templates/register.hbs')
    });
}

handlers.registerUser = function(context){

    let username = context.params.username;
    let password = context.params.password;
    let confirmedPassword = context.params.confirmedPassword;

    if(password !== confirmedPassword){

        notifications.showError('Passwords must match!');
        return;
    }

    userService.register(username, password)
    .then((response) => {
        userService.saveSession(response);
        notifications.showSuccess(`Successfully registration, ${username}!`);
        context.redirect('#/');
    })
}

handlers.getLogin = function(context){

    context.loadPartials({
        header:'../templates/common/header.hbs',
        footer:'../templates/common/footer.hbs'
    }).then(function(){
        this.partial('../templates/login.hbs')
    });
}

handlers.loginUser = function(context){

    let username = context.params.username;
    let password = context.params.password;

    userService.login(username, password)
    .then((response) => {
        userService.saveSession(response);
        notifications.showSuccess(`Successfully login, ${username}!`);
        context.redirect('#/');
    }).catch(function(error){

        notifications.showError('Invalid username or/and password!');
    })
}

handlers.logoutUser = function(context){

    userService.logout()
    .then(() => {
        sessionStorage.clear();
        notifications.showSuccess('Successfully logout!');
        context.redirect('#/');
    })
}