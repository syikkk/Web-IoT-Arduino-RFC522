
  const signinBtn = document.querySelector('.signinBtn');
  const signupBtn = document.querySelector('.signupBtn');
  const formBx = document.querySelector('.formBx');
  const lpage = document.querySelector('.lpage')
  signupBtn.onclick = function(){
    formBx.classList.add('active')
    lpage.classList.add('active')
  }
  
  signinBtn.onclick = function(){
    formBx.classList.remove('active')
    lpage.classList.remove('active')
  }
  
