handlers.getHome = function(context){

    context.loadPartials({
        header:'../templates/common/header.hbs',
        footer:'../templates/common/footer.hbs'
    }).then(function(){
        this.partial('../templates/home.hbs')
    });
    
};