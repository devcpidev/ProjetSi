$(document).ready(function() {
    var cnipropi="";
    $("#cnipropi").on('change',function() {
        cnipropi = $('#cnipropi').val();
        console.log(cnipropi)
        $.ajax({
            type : 'GET',
            dataType:"json",  
            url : 'http://localhost/ProjetSi/index.php/Collecte/findProprio',
            data: {
                cnipropi : cnipropi
            },
            success : function(data) {
                console.log(data.nom)
                $('#nom').val(data.nom)
                $('#prenom').val(data.nom)
                $('#tel').val(data.tel)
                $('#nom').val(data.nom)
                $('#email').val(data.email)
                $('#adressesen').val(data.adressesen)

                // //disable
                // $('#cnipropi')[0].disabled = true
                // $('#nom')[0].disabled = true
                // $('#prenom')[0].disabled =true
                // $('#tel')[0].disabled = true
                // $('#nom')[0].disabled = true
                // $('#email')[0].disabled = true
                // $('#adressesen')[0].disabled = true
                // $('#info')[0].disabled = true
            }
        })
    })
})