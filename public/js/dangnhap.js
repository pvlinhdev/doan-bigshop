const name = document.getElementById('name')
const password = document.getElementById('password')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
  let messages = []
  if (name.value === '' || name.value == null) {
    messages.push('Vui lòng nhập tên')
  }

  if (password.value.length <= 6) {
    messages.push('Mật khẩu khẩu được bé hơn 6 ký tự')
  }

  if (password.value.length >= 20) {
    messages.push('Mật khẩu khônng được lớn hơn 20 ký tự')
  }

  if (password.value === 'password') {
    messages.push('Mật khẩu không đúng')
  }

  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(' - ')
  }
})
