function attachEvents() {

    $('#btnLoadPosts').click(getPosts);
    $('#btnViewPost').click(preparePost);

    const $postsSelect = $('#posts');
    const $commentsList = $('#post-comments');

    const postsUrl = 'https://baas.kinvey.com/appdata/kid_SkL9WdquE/posts';
    const commentsUrl = 'https://baas.kinvey.com/appdata/kid_SkL9WdquE/comments';

    const kinveyUsername = "user";
    const kinveyPassword = "pass";
    const base64auth = btoa(`${kinveyUsername}:${kinveyPassword}`);
    const authHeaders = {"Authorization": "Basic " + base64auth};

    function getPosts() {

        $.ajax({
            url: postsUrl,
            headers: authHeaders
        }).then(loadPosts)
    }

    function loadPosts(posts) {

        $postsSelect.empty();

        posts.forEach((post) => {
            $postsSelect.append($(`<option value="${post._id}">${post.title}</option>`))
        })
    }

    function preparePost() {

        $commentsList.empty();

        $commentsList.append('<li>Loading...</li>')

        const postId = $postsSelect.val();

        $.ajax({
            url: `${postsUrl}/${postId}`,
            headers: authHeaders
        }).then(renderPost);

        $.ajax({
            url:`${commentsUrl}/?query={"post_id":"${postId}"}`,
            headers: authHeaders
        }).then(renderComments);

    }

    function renderPost(post) {

        $('#post-title').text(`${post.title}`);
        $('#post-body').text(`${post.body}`);
    }

    function renderComments(comments) {



        comments.forEach((comment) => {
            $commentsList.append(`<li>${comment.text}</li>`)
        })
    }
}