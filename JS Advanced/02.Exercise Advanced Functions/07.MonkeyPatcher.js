function result(action){

    if (action === 'upvote'){
        this.upvotes++
    } else if(action === 'downvote'){
        this.downvotes++
    }else if (action === 'score'){
        let outputArray = [];

        let max = Math.max(this.upvotes, this.downvotes);
        let balance = this.upvotes - this.downvotes;
        let totalVotes = this.upvotes + this.downvotes;
        let positivePerCent = (100 / totalVotes) * this.upvotes;
        let ups = 0;
        let downs = 0;

        if (totalVotes > 50){
            let bonus = Math.ceil(max * 0.25);
            ups = this.upvotes + bonus;
            downs = this.downvotes + bonus
        } else {
            ups = this.upvotes;
            downs = this.downvotes;
        }
        outputArray.push(ups);
        outputArray.push(downs);
        outputArray.push(balance);

        if (positivePerCent > 66 && totalVotes > 10){
            outputArray.push('hot')
        }else if (balance >= 0 && totalVotes > 100){
            outputArray.push('controversial');
        }else if (balance < 0 && totalVotes >= 10){
            outputArray.push('unpopular');
        }else {
            outputArray.push('new')
        }

        return outputArray;
    }
}

let forumPost = {
    id: '1234',
    author: 'author name',
    content: 'these fields are irrelevant',
    upvotes: 132,
    downvotes: 68
};

let answer = result.call(forumPost, 'score');


console.log(answer);

