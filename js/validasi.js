const name = document.getElementById('name')
const password = document.getElementById('password')
const email = document.getElementById('email')
const form = document.getElementById('form')
const error_name = document.getElementById('error_name')
const error_pass = document.getElementById('error_pass')
const error_email = document.getElementById('error_email')

form.addEventListener('submit', (e) => {
  let messages = []
  if (name.value === '' || name.value == null) {
    messages.push('Name is required')
  }
  if (name.value.length <= 10) {
    messages.push('Nama harus lebih dari 6 huruf')
  }
  if (messages.length > 0) {
    e.preventDefault()
    error_name.innerText = messages.join(', ')
}})
form.addEventListener('submit', (f) => {
  let messages = []
if (password.value.length <= 6) {
    messages.push('Password must be longer than 6 characters')
  }

  if (password.value.length >= 20) {
    messages.push('Password must be less than 20 characters')
  }

  if (password.value === 'password') {
    messages.push('Password cannot be password')
  }

  if (messages.length > 0) {
    f.preventDefault()
    error_pass.innerText = messages.join(', ')
  }})
  form.addEventListener('submit', (g) => {
    let messages = []
    if(email='/^[^ ]+@[^ ]+.[a-z]{2,3}$/'){
      messages.push('email tidak valid')
    }
    if (messages.length > 0) {
      g.preventDefault()
      error_email.innerText = messages.join(', ')
    }})