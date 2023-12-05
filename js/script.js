$(document).ready(function(){
  $("a.new_window").attr("target", "_blank");

});

function sendFeedback(senderName, email, msgName, msg){
  event.preventDefault()

  let response = ""

  if(senderName.value.trim() == "" || msgName.value.trim() == "" || msg.value.trim() == ""){
    response = "Все поля должны быть заполнены"
    $("#feedbackResponse").html(response)
    return
  }

  let data = {
    senderName: senderName.value,
    email: email.value,
    msgName: msgName.value,
    msg: msg.value
  }
  data = JSON.stringify(data)

  let xhr = new XMLHttpRequest()
  xhr.open("POST", "../controllers/send-feedback.php")
  xhr.send(data)

  xhr.onreadystatechange = function(){
    if(this.status !== 200 || this.readyState !== 4)
      return

    response = this.response ? "Запрос отправлен" : "Возникли ошибки, повторите попытку позже"

    $("#feedbackResponse").html(response)
  }
}

function sendCarRequest(userID, carID){
  event.preventDefault()

  var box = $('#response')

  let data = {
      userID: userID,
      carID: carID
  }
  data = JSON.stringify(data)

  if(userID === -1){
      box.html("Чтобы подать заявку на покупку вы должны <a href='registration.php?carID=" + carID + "'>войти или зарегистрироваться</a>")
      return
  }

  var xhr = new XMLHttpRequest()
  xhr.open('POST', '../controllers/send-car-request.php')
  xhr.send(data)
  xhr.onreadystatechange = function (){
    if(xhr.readyState != 4 || xhr.status != 200){
        return
    }

    let msg = ""
    switch(this.responseText){
        case "1":
            msg = "Ваш запрос успешно отправлен"
            break
        case "0":
            msg = "Вы уже отправляли запрос на покупку данной машины"
            break;
        default:
            msg = "Повторите попытку позже"
    }
    box.html(msg)
  }
}

function getCatalog(){
  var xhr = new XMLHttpRequest()
  xhr.open('GET', '../controllers/catalogVivod.php', true)
  xhr.send()
  xhr.onreadystatechange = function (){
    if(xhr.readyState != 4 || xhr.status != 200){
        return
    }

    var box = $('#box')
    box.html('')
    var data = JSON.parse(xhr.responseText)

    for(car of data){
      box.html(box.html()+ 
      '<a href="car.php?carID=' + car.id + '">'+
        '<img src="../' + car.img + '"/>'+
        '<h3>' + car.marka + ' ' + car.model + '</h3><br>'+
        '<h4>Цена: ' + car.cen + ' руб</h4><br>'+
      '</a>')
    }
  }
}

function setTitle(title){
  document.title = title;
}