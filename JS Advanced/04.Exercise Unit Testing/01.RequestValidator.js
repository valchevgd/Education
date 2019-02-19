function validateRequest(request) {
    let requiredProperties = [ 'method', 'uri', 'version', 'message' ];
    let requiredMethods = ['GET', 'POST', 'DELETE', 'CONNECT'];
    let requiredVersions = ['HTTP/0.9', 'HTTP/1.0', 'HTTP/1.1', 'HTTP/2.0'];
    let messageRegEx = new RegExp('[<>\\\\&\'"]+');
    let uriRegex = new RegExp('^(\\w|\\.|\\*)+$', 'g');

    let properties = Object.getOwnPropertyNames(request);


    if (properties.length < 4){
        for (let property of requiredProperties){
            if (!properties.includes(property)) {
                let prop = property.charAt(0).toUpperCase() + property.slice(1);
                if (property === 'uri'){
                    prop = 'URI';
                }
                throw new Error(`Invalid request header: Invalid ${prop}`);
            }
        }
    }

    let method = request.method;
    let version = request.version;
    let message = request.message;
    let uri = request.uri;

    let messagesMatches = message.match(messageRegEx);
    let uriMatches = uri.match(uriRegex);

    if (!requiredMethods.includes(method)){
        throw new Error(`Invalid request header: Invalid Method`);
    }

    if (!uriMatches){
        throw new Error(`Invalid request header: Invalid URI`);
    }

    if (!requiredVersions.includes(version)) {
        throw new Error(`Invalid request header: Invalid Version`);
    }

    if (messagesMatches){
        throw new Error(`Invalid request header: Invalid Message`);
    }



    return request;
}

console.log(validateRequest({
    method: 'GET',
    uri: 'svn.public.catalog',
    version: 'HTTP/1.1',
    message: ''
}));