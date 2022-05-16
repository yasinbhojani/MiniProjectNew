const login = document.querySelector('.popupbut');

const data = [
  {
    name: 'yasin',
    pass: 'yasin123',
    git: 'yasinbhojani'
  },
  {
    name: 'sadiq',
    pass: 'sadiq123',
    git: 'SadiqhasanRupani72'
  },
  {
    name: 'soham',
    pass: 'soham123',
    git: 'SohamGanmote'
  },
  {
    name: 'zakir',
    pass: 'zakir123',
    git: 'zakirhusain-3802'
  }
]

function changeName(index) {
  const profile = document.querySelector('#profile');
  profile.textContent = index.name;
  profile.style.textTransform = 'capitalize';
  profile.setAttribute('href', `${index.name}.html`)
  profile.setAttribute('target', '_blank');

  profile.addEventListener('click', () => {
    document.querySelector(".popup").style.display = "none";
    document.querySelector(".master-container").style.opacity = 1
  })
}

login.addEventListener('click', () => {
  const username = document.querySelector('#username_input').value;
  const password = document.querySelector('#password_input').value;
  const msg = document.querySelector('#message');

  for (let index of data) {
    if (index.name == username && index.pass == password) {
      msg.style.opacity = '1'
      msg.textContent = 'Login Successful, You may close this window now'
      msg.style.color = 'green'
      loggedIn = index;
      changeName(index);
      updateName();
      break
    } else {
      msg.style.opacity = '1'
      msg.textContent = 'Wrong username or password'
      msg.style.color = 'red'
    }
  }
})



