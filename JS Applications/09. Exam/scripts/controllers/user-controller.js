controller.getRegister = function(context){

    context.isAuth = userService.isAuth;
    context.username = sessionStorage.getItem('username');

    context.loadPartials({
        header:'../views/common/header.hbs',
        footer:'../views/common/footer.hbs'
    }).then(function(){
        this.partial('../views/user/register.hbs')
    });
}

controller.postRegister = function(context){

    let username = context.params.username;
    let password = context.params.password;
    let repeatPassword = context.params.repeatPassword;

    if(password !== repeatPassword){
        notify.showError('Passwords must match!');
        return;
    }


    userService.register(username, password)
    .then((response) => {
        
        userService.saveSession(response);
        notify.showInfo('User registration successful.');
        context.redirect('#/');
    });
}

controller.logout = function(context){

    userService.logout()
    .then(() => {
        sessionStorage.clear();
        notify.showInfo('Logout successful.');
        context.redirect('#/login');
    })
}

controller.getLogin = function(context){

    context.loadPartials({
        header:'../views/common/header.hbs',
        footer:'../views/common/footer.hbs'
    }).then(function(){
        this.partial('../views/user/login.hbs')
    });
}

controller.postLogin = function(context){

    let username = context.params.username;
    let password = context.params.password;

    userService.login(username, password)
    .then((response) => {
        userService.saveSession(response);
        notify.showInfo('Login successful.');
        context.redirect('#/');
    }).catch(function(error){

        notify.showError(notify.handleError(error));
    })
}