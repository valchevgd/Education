function solve() {
    let object = {
        extend : function (template) {
            const entries = Object.entries(template);

            for (const [key, value] of entries){
                if (typeof value === 'function'){
                    Object.getPrototypeOf(this)[key] = value;
                }else {
                    this[key] = value;
                }
            }
        }
    };

    return object;
}