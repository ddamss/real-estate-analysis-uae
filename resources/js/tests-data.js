import fetch from 'node-fetch'

const Headers = (await import('node-fetch')).Headers
var myHeaders = new Headers();

myHeaders.append("Content-Type", "application/json");

var raw = JSON.stringify([
  [
    {
      "id": 2,
      "page": "1",
      "image": "https://www.propertyfinder.ae/property/74d6a269184b836df4d4dc9e4e479e61/260/185/MODE/9d1ec7/8334197-2abdeo.webp?ctr=ae",
      "price": 3800000,
      "title": "Luxury Furniture | Fully Upgraded | Sea Views",
      "location": "Al Nabat, Shoreline Apartments, Palm Jumeirah, Dubai",
      "type": "Apartment",
      "bedrooms": "3",
      "bathrooms": "4",
      "sqft": 2.155,
      "brokerLogo": "https://www.propertyfinder.ae/broker/11/178/98/MODE/a3588b/1783-logo.jpg?ctr=ae",
      "url": "test"
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

