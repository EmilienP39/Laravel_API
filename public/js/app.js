$(document).ready(function (){
    const apiUrl = 'https://geo.api.gouv.fr/communes?codePostal=';
    const format = '&format=json';

    let zipcode = $('#cp_partner');
    let city = $('#ville_partner');

    $(zipcode).on('blur',function (){
        let code = $(this).val();
        let url = apiUrl+code+format;
        fetch(url,{method:'get'}).then(response=> response.json()).then(results =>{
            if(results.length){
                $.each(results,function(key,value){
                    $(city).append('<option value="'+value.nom+'">' +value.nom +'</option>')
                })
            }
        }).catch(err=>{
            console.log(err);
        })
    })
})
