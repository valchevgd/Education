const Article = require('../models').Article;
const User = require('../models').User;

module.exports = {
    createGet: function (req, res) {
        res.render('article/create');
    },

    createPost: function (req, res) {
        let articleArgs = req.body;

        let errorMsg = '';

        if (!req.isAuthenticated()) {
            errorMsg = 'You should be logged in to create articles';
        } else if (!articleArgs.title) {
            errorMsg = 'Invalid title!';
        } else if (!articleArgs.content) {
            errorMsg = 'Invalid title';
        }


        if (errorMsg) {
            res.render('article/create', {
                error: errorMsg,
                title: articleArgs.title,
                content: articleArgs.content
            });
            return;
        }

        articleArgs.authorId = req.user.id;

        Article.create(articleArgs)
            .then(article => {
                res.redirect('/')
            })
    },

    details: function (req, res) {
        let articleId = req.params.id;

        Article.findById(articleId, {
            include: [{
                model: User
            }]
        })
            .then(article => {
                res.render('article/details', article.dataValues)
            })
    },
    
    editGet: function (req, res) {
        let articleId = req.params.id;

        Article
            .findById(articleId)
            .then(article => {
                res.render('article/edit', article.dataValues)
            });
    },
    
    editPost: function (req, res) {
        let articleArgs = req.body;
        let articleId = req.params.id;

        Article
            .findById(articleId)
            .then(article => {
                article
                    .update(articleArgs)
                    .then(() => {
                        res.redirect('/user/myarticles');
                    })
            })
    },

    deleteGet: function(req, res){
        let articleId = req.params.id;

        Article
            .findById(articleId)
            .then(article => {
                res.render('article/delete', article.dataValues)
            });
    },

    deletePost: function (req, res) {
        let articleId = req.params.id;

        Article
            .findById(articleId)
            .then(article => {
                article
                    .destroy()
                    .then(() => {
                        res.redirect('/user/myarticles');
                    })
            })
    }
};