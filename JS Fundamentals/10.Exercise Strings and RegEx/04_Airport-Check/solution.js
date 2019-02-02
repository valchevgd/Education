function solve() {
    let input = document.getElementById('str').value.split(', ');
    let resultElement = document.getElementById('result');
    let text = input[0];
    let neededOutput = input[1];

    let nameRegEx = new RegExp(' [A-Z]+[a-z]*-[A-Z]+[a-z]*(\\s|.-[A-Z]+[a-z]*\\s)');
    let name = text.match(nameRegEx)[0].trim();
    name = name.replace('-',' ');

    let airportRegEx = / [A-Z]{3}\/[A-Z]{3} /;
    let airports = text.match(airportRegEx)[0].trim().split('/');

    let flightRegEx = / [A-Z]{1,3}[0-9]{1,5} /;
    let flightNumber = text.match(flightRegEx)[0].trim();

    let companyRegEx = /- [A-Z][A-Za-z]*\*[A-Z][A-Za-z]* /;
    let company = text.match(companyRegEx)[0].trim();
    company = company.replace('*', ' ');
    company = company.replace('-', '').trim();

    if (neededOutput === 'name'){
        resultElement.textContent = `Mr/Ms, ${name}, have a nice flight!`
    }else if(neededOutput === 'flight'){
        resultElement.textContent = `Your flight number ${flightNumber} is from ${airports[0]} to ${airports[1]}.`
    }else  if(neededOutput === 'company'){
        resultElement.textContent = `Have a nice flight with ${company}.`
    }else if(neededOutput === 'all'){
        resultElement.textContent = `Mr/Ms, ${name}, your flight number ${flightNumber} is from ${airports[0]} to ${airports[1]}. Have a nice flight with ${company}.`
    }


}