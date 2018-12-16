function myFunction(){
    var cekboks= document.forms[0];
    var brojac = 0;
    var i;
    for(i=0;i<cekboks.length;i++){
       if(cekboks[i].checked && cekboks[i].value=="1"){
         brojac=11;

       }

    }
    alert(brojac);
  

}