(function () {
    String.prototype.ensureStart = function (str) {
        let parts = this.split(' ');
        let firstWord = str.trim();
        let result = this.toString();
        if (parts[0] !== firstWord) {

            result = str + this.toString();
        }

        return result;
    };

    String.prototype.ensureEnd = function (str) {
        let parts = this.split(' ');
        let lastWord = str.trim();
        let result = this.toString();

        if (parts[parts.length - 1] !== lastWord) {

            result = this.toString() + str;
        }

        return result;
    };

    String.prototype.isEmpty = function () {

        return this.toString() === '';

    };

    String.prototype.truncate = function (n) {
        let result = '';

        if (n >= this.toString().length) {
            result = this.toString();
        } else if (n < 4) {
            for (let i = 0; i < n; i++) {
                result += '.'
            }
        } else {
            let temp = this.toString().split(' ');
            let newString = '';

            for (let i = 0; i < temp.length; i++) {
                if ((newString += temp[i]).length < n - (temp[i + 1].length + 3)){
                    newString += ' ';
                }else {
                    newString += '...';
                    break
                }
                console.log(newString);
            }

            result = newString;
        }


        return result;
    };

    String.format = function (string, ...params) {

        let result = string;

        for (let i = 0; i < params.length; i++) {

            result = result.replace(`{${i}}`, params[i]);
        }

        return result;
    }

})();

let str = String.format('The {0} {1} fox',
    'quick', 'brown');
console.log(str);