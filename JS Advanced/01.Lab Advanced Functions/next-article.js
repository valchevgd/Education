function getArticleGenerator(articles) {

    showNext ( () =>{
        let stringToKeep = articles;

        let article = stringToKeep.shift();
        let articleElement = document.createElement('article');
        articleElement.textContent = article;
        document.getElementById('content').appendChild(articleElement);
    })();
}