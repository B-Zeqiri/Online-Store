const nameInput  = document.querySelector('#name');
const surnameInput = document.querySelector('#surname');

const emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
const emailInput = document.querySelector('#emailship');

const phoneRegex = /^(\+1|1)?([2-9]\d{2}[2-9]\d{6})$/;
const phoneInput = document.querySelector('#Nr_telefoni');


const zipcodeInput = document.querySelector('#zipcode');
const countryInput = document.querySelector('#country');
const cityInput = document.querySelector('#city');
const streetInput = document.querySelector('#street');
const appartmentInput = document.querySelector('#appartement');

function validateForm(event) {
  event.preventDefault(); // prevent default form submission behavior

  const name = nameInput .value.trim(); // get name input value
  const surname = surnameInput.value.trim(); // get surname input value
  const phone = phoneInput.value.trim().replace(/-/g, ''); // remove dashes from phone input value
  const email = emailInput.value.trim(); // get email input value
  const zipcode = zipcodeInput.value.trim(); // get zipcode input value
  const country = countryInput.value.trim(); // get country input value
  const city = cityInput.value.trim(); // get city input value
  const street = streetInput.value.trim(); // get street input value
  const appartment = appartmentInput.value.trim(); // get apartment input value
  
  if (name.trim() === "") {
    alert('Please enter the name');
    return;
  }

  if (surname.trim() === "") {
    alert('Please enter the surname');
    return;
  }

  if (emailRegex.test(email)) {
    // Valid email address
    sessionStorage.setItem('email', email); // save email to local storage
    
  } else {
    // Invalid email address
    alert('Please enter a valid email address');
    return;
  }

  if (phoneRegex.test(phone)) {
    // Valid US phone number
    sessionStorage.setItem('phone', phone); // save phone number to local storage
    
  } else {
    // Invalid US phone number
    alert('Please enter a valid US phone number');
    return;
  }
  
  if(zipcode.trim() === ""){
    alert('Please enter the zip code');
    return;
  }

  if (country.trim() === "") {
    alert('Please enter the country');
    return;
  }
  
  if (city.trim() === "") {
    alert('Please enter the city');
    return;
  }
  
  if (street.trim() === "") {
    alert('Please enter the street');
    return;
  }
  
  if (appartment.trim() === "") {
    alert('Please enter the apartment');
    return;
  }

  sessionStorage.setItem('name', name);
  sessionStorage.setItem('surname', surname);
  sessionStorage.setItem('zipcode', zipcode);
  sessionStorage.setItem('country', country);
  sessionStorage.setItem('city', city);
  sessionStorage.setItem('street', street);
  sessionStorage.setItem('appartment', appartment);


  window.location.href = 'checkoutPage.php';
}

const submitButton = document.querySelector('#submit');
submitButton.addEventListener('click', validateForm);
