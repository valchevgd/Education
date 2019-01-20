function solve() {

	let titleElement = document.getElementById('createTitle');
	let titleValue = titleElement.value;

	let contentElement = document.getElementById('createContent');
	let contentValue = contentElement.value;

	if (titleValue && contentValue){

		let newTitleElement = document.createElement('h3');
		let newTitleValue = document.createTextNode(titleValue);
		newTitleElement.appendChild(newTitleValue);

		let newContentElement = document.createElement('p');
		let newContentValue = document.createTextNode(contentValue);
		newContentElement.appendChild(newContentValue);

		let articleElement = document.createElement('article');
		articleElement.appendChild(newTitleElement);
		articleElement.appendChild(newContentElement);

		let articlesElement = document.getElementById('articles');
		articlesElement.appendChild(articleElement);

		titleElement.value = '';
		contentElement.value = '';
	}
}