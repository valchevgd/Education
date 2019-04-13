const kinvey = (() => {

    const BASE_URL = 'https://baas.kinvey.com/';
    const APP_KEY = 'kid_BJtwSe15N';
    const APP_SECRET = '379eb9b89f60464d8aeeebbf6d6d4b60';

    function makeAuth(auth){

        if(auth == 'basic'){

            return {
                'Authorization':`Basic ${btoa(APP_KEY + ':' + APP_SECRET)}`
            }
        }else{

            return {
                'Authorization':`Kinvey ${sessionStorage.getItem('authtoken')}`
            }
        }
    }

    function makeRequest(method, collection, endpoint, auth){

        return {
            url:`${BASE_URL}${collection}/${APP_KEY}/${endpoint}`,
            method,
            headers:makeAuth(auth)
        }
    }

    function get(collection, endpoint, auth, query){

        if(query){
            endpoint += query;
          }
      
          return $.ajax(makeRequest('GET', collection, endpoint, auth));
    }

    function post(collection, endpoint, auth, data){

        let request = makeRequest('POST', collection, endpoint, auth);
        request.data = data;

        return $.ajax(request);
    }

    function update(collection, endpoint, auth, data){

        let request = makeRequest('PUT', collection, endpoint, auth);
        request.data = data;

        return $.ajax(request);
    }

    function remove(collection, endpoint, auth){

        let request = makeRequest('DELETE', collection, endpoint, auth);

        return $.ajax(request);
    }

    return {
        get,
        post,
        update,
        remove
    }
})()