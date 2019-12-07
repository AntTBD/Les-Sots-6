function getMessages(){
  const requete = new XMLHttpRequest();
  requete.open("GET", "post.php");

  requete.onload = function(){
    const resultats = JSON.parse(requete.responseText);
    console.log(resultats);
    const html = resultats.reverse().map(function(message){
      return `
      <div class="message">
        <span class="user">${message.user} : </span>
        <span class="content">${message.content}</span>
      </div>
      `
    }).join("");
    const messages = document.querySelector('.messages');

      messages.innerHTML = html;
      messages.scrollTop = messages.scrollHeight;

  }
  requete.send();
}

const interval = window.setInterval(getMessages, 1000);

getMessages();

document.querySelector('#formMsg').addEventListener("submit", function postMessage(){
  event.preventDefault();

  const user = document.querySelector('#user');
  const content = document.querySelector('#content');

  const data = new FormData();
  data.append('user', user.value);
  data.append('content', content.value);

  const requeteAjax = new XMLHttpRequest();
  requeteAjax.open('POST', 'post.php?task=write');

  requeteAjax.onload = function(){
    content.value = '';
    content.focus();
    getMessages();
  }

  requeteAjax.send(data);
});
