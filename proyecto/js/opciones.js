const botonopc = document.querySelector('#botonopciones');
const lugarapli = document.querySelector('.HeaderPrincipal')

function botonopciones(opciones){
    const opciones1=document.createElement('Button');
    const enlaceperfil= document.createElement('A');
    enlaceperfil.href="../Vista_PerfilAlum.html"
    
    enlaceperfil.textContent=opciones;
    opciones1.classList.add('opciones')
    document.getElementById('Perfil12').appendChild(opciones1)
    opciones1.appendChild(enlaceperfil)
    
}
function botoncerrarsesion(texto){
    const cerrarsesion=document.createElement('form')
    cerrarsesion.setAttribute('action','php/logout.php')
    const botoncerrar= document.createElement('button');
    botoncerrar.textContent=texto;
    botoncerrar.classList.add("BotonCerrar")
    cerrarsesion.appendChild(botoncerrar)
    botoncerrar.setAttribute('type','submit')
    botoncerrar.setAttribute('value',"Cerrar Sesion")
    document.getElementById('CerrarSesion').appendChild(cerrarsesion)
   
}
botonopc.addEventListener('click',function(evento){
    evento.preventDefault();
    botoncerrarsesion("Cerrar Cesion")
    botonopciones("Perfil")
    
})