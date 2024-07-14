const signInBtnLink = document.querySelector('.signInBtn-link');
const signUpBtnLink = document.querySelector('.signUpBtn-link');
const customerLoginBtnLink = document.querySelector('.customerLoginBtn-link');
const wrapper = document.querySelector('.wrapper');

signUpBtnLink.addEventListener('click', () => {
    wrapper.classList.add('active');
});

signInBtnLink.addEventListener('click', () => {
    wrapper.classList.remove('active');
    wrapper.classList.remove('show-customer-login');
});

customerLoginBtnLink.addEventListener('click', () => {
    wrapper.classList.toggle('show-customer-login');
});
