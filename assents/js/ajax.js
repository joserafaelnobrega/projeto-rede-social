function update() {
   
        let http_request = new XMLHttpRequest();
        http_request.onreadystatechange = function() {
            if (http_request.readyState == 4 && http_request.status == 200) {
                let http_response = http_request.responseText;
                document.getElementById('atualizar').innerHTML = http_response;
            }
        };
        http_request.open('GET', 'atualizarchat.php?id=' + 20, true);
        http_request.send();
    }


 function mandar_msg(){

    var x = document.getElementById("myInput").value;
    

    let http_request = new XMLHttpRequest();
    http_request.onreadystatechange = function() {
        if (http_request.readyState == 4 && http_request.status == 200) {
        
        }
    };
    http_request.open('GET', 'enviarmensagem.php?x=' + x , true);
    http_request.send();
    document.getElementById('myInput').value='';

 }   

 function setarchat() {

    var des = document.getElementById('nome_do_chat').value;
    var nome= document.getElementById('descricao_do_chat').value;
    let http_request = new XMLHttpRequest();
    http_request.onreadystatechange = function() {
        if (http_request.readyState == 4 && http_request.status == 200) {
            document.getElementById('cadastrar_chat').innerHTML = http_response;
        }
    };
    http_request.open('GET', 'entrarchat.php?nome=' + nome +'&&des='+ des, true);
    http_request.send();
}
