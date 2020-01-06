$(document).ready(function(){
    var numdossier = ""
    $(".detail").click(function() {
        numdossier = $(this).attr("id")
        console.log(numdossier)
       
        $.ajax({
            type : 'GET',
            dataType:"json",  
            url : 'http://localhost/ProjetSi/index.php/Collecte/details',
            data: {
                numdossier : numdossier
            },
            success : function(data){
                console.log(data)
                if(data.idtypebien==1 || data.idtypebien==3 || data.idtypebien==4){
                    console.log("ddd"+data.angle)
                    console.log("ddd"+data.broute)
                    console.log("ddd"+data.broutep)
                    $('#libelletype').append(data.libelletype);    
                    $('#usage').append(data.usage); 
                    $('#nature').append(data.nature);
                    if(data.nbpieces!=null){
                        $('#nbpieces').append(data.nbpieces);  
                    }else{
                        $('#nbpieces').append(""+0);
                    }  
                    if(data.nbsalledebain!=null){
                        $('#nbsalledebain').append(data.nbsalledebain);  
                    }else{
                        $('#nbsalledebain').append(""+0); 
                    }
                   
                    if(data.broutep!=null){
                        $('#broutep').append(data.broutep);  
                    }
                    if(data.broute!=null){
                        $('#broute').append(data.broute);  
                    }
                    if(data.angle!=null){
                        $('#angle').append(data.angle);  
                    }
                    if(data.loinecole!=null){
                        $('#loinecole').append(data.loinecole);  
                    }
                    if(data.presecole!=null){
                        $('#presecole').append(data.presecole); 
                    }
                    if(data.loinculte!=null){
                        $('#loinculte').append(data.loinculte); 
                    }
                    if(data.presculte!=null){
                        $('#presculte').append(data.presculte); 
                    }
                    if(data.presmarche!=null){
                        $('#presmarche').append(data.presmarche); 
                    }
                    if(data.loinmarche!=null){
                        $('#loinmarche').append(data.loinmarche); 
                    }
                   
                }
                
                $('#loginu').val(data.login);    
            }
        });
        
    })
})