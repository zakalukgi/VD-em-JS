function valida()
{
	vnome=form1.nome.value;
	vlogin=form1.login.value;
	vsenha=form1.senha.value;



    if(vlogin=='admin' && vsenha=='102030')
    {
		window.open('salas.htm')
        
		}
        else(vlogin=='' || vsenha=='')
        {
            alert('Login e senha incorretos!')
        
        }
   

}
function novo(){
    vverm=parseInt(document.dois.verm.value);
    varma=parseInt(document.dois.arma.value);
    vverde=parseInt(document.dois.verde.value);
    vpreta=parseInt(document.dois.preta.value);
    vroxa=parseInt(document.dois.roxa.value);
    r=(vverm+varma+vverde+vpreta+vroxa)

    {
        
        alert("O total é de:" +r)
        

    }


    
}