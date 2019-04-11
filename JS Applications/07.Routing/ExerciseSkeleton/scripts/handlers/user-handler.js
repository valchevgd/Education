handlers.getRegister = function(context){

    context.loadPartials({
        header:'../templates/common/header.hbs',
        footer:'../templates/common/footer.hbs'
    }).then(function(){
        this.partial('../templates/register.hbs')
    });
}

handlers.getLogin = function(context){

    context.loadPartials({
        header:'../templates/common/header.hbs',
        footer:'../templates/common/footer.hbs'
    }).then(function(){
        this.partial('../templates/login.hbs')
    });
}