function v(){

    let form = document.forms["formContato"];
   let ret = true;
 
   let msgErro = document.getElementById("msgErro");
   msgErro.innerHTML= "";
   if(form.nomesobrenome.value.trim() == ""){
     msgErro.innerHTML = "Preenche o campo nome <br>"
 
    
     form.nomesobrenome.focus();//foca no nome
     
     ret = false;
   }
       if(form.email.value.indexOf(".") == -1 ||
           form.email.value.indexOf("@") == -1 ||
           form.email.value.indexOf(".") - form.email.value.indexOf("@") == 1 || form.email.value.trim() == ""){
            
     msgErro.innerHTML = msgErro.innerHTML + "Preenche o campo email <br>"
 
 
         form.email.focus();
 
            ret = false;
       }
 
       if(form.telefone.value.trim() == ""){
         msgErro.innerHTML = msgErro.innerHTML  + "Preenche o campo telefone <br>"
     
        
         form.nomesobrenome.focus();//foca no telefone
         
         ret = false;
       }
 
       if(form.telefone.value.trim() == ""){
         msgErro.innerHTML = msgErro.innerHTML  + "Preenche o campo idade <br>"
       
        
         form.nomesobrenome.focus();//foca na idade
         
         ret = false;
       }
       
   
   return ret;
 
   
   
   
   
   
 }