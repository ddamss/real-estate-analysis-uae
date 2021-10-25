import fetch from 'node-fetch'

const Headers = (await import('node-fetch')).Headers
var myHeaders = new Headers();

myHeaders.append("Content-Type", "application/json");

var raw = JSON.stringify([
  [
    {
      "id": 20,
      "page": "7",
      "image": "https://www.propertyfinder.ae/property/74bcd4756bce05b946e444d72f5797ab/260/185/MODE/e804c7/8245755-cf508o.webp?ctr=ae",
      "price": 14999999,
      "title": "Landscaped 5BR Contemporary Prime Location",
      "location": "District One Villas, District One, Mohammed Bin Rashid City, Dubai",
      "type": "Villa",
      "bedrooms": "5",
      "bathrooms": "7+",
      "sqft": "8,288 sqft",
      "brokerLogo": "https://www.propertyfinder.ae/broker/12/178/98/MODE/432eeb/2260-logo.jpg?ctr=ae",
      //"url":"url test"
  }
  ],
  []
]);

var requestOptions = {
  method: 'POST',
  headers: myHeaders,
  body: raw,
  redirect: 'follow'
};

fetch("http://127.0.0.1:8000/api/property", requestOptions)
  .then(response => response.text())
  .then(result => console.log(result))
  .catch(error => console.log('error', error));

