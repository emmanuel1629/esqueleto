function modalUser()
{
    

    const txtnombre =document.getElementById("txtnombre").value;
    const txtapellido =document.getElementById("txtapellido").value;
    const txtficha =document.getElementById("txtficha").value;

    console.log({txtapellido,txtnombre,txtficha});
  
}
const btnSendaPutonga =document.getElementById("btnSendaPutonga");
btnSendaPutonga.addEventListener('click',()=>{modalUser();});