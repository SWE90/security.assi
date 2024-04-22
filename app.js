const form= document.getElementById('form');
const username = doucment.getElementById('usernamr');
const email = doucment.getElementById('email');
const password =document.getElementById('password');
const confirmpassword =document.getElementById('confirmpassword');

form.addEventsListener('sumbit',e => { 
  e.preventDefault();

  validateInputs();
});

const setError = (element , message) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector('.error');

  errorDisplay.innerText = message;
  inputControl.classList.add('error');
  inputControl.classList.remove('success');
}
const setSuccess = element => { 
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector('.error');

  errorDisplay.innerText = '';
  inputControl.classList.add('success');
  inputControl.classList.remove('error');
}
const isValidEmail = email => {
  const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}

const validateInputs =()  => {
  const usernameValue = username.value.thrim();
  const emailValu = email.value.thrim();
  const passwordValu = password.vlaue.thrim();
  const password2Valu = password2.value.thrim();

  if(usernameValue ===''){
    setError(username, 'username is required');
  } else {
    setSuccess(username);
  }
  if(emailValue ===''){
    setError(email, 'Email is required');
  } else if(!isValidEmail(emailValue)){
    setError(email,'Invalid Email');
  }else{
      setSuccess(email);
  }    
    if(passwordValue ===''){
      setError(password,'Password is required');
  } else if(passwordValue.length < 8) {
      setError(password,"Should be at least 8 characters");
  } else {
      setSuccess(password);
  }
}
  

