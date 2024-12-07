const toggleButton = document.querySelector('.toggle-chat');
const chatPopUp = document.querySelector('.chat-pop-up');

toggleButton.addEventListener('click', _=> {
//   toggleButton.classList.toggle('chat-is-open');
  chatPopUp.classList.toggle('chat-display-on');
  chatPopUp.classList.toggle('chat-visible');
})
