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
                if(data.idtypebien==1 ){
                   
                    console.log("ddd"+data.nature)
                    $('#libelletype').append(data.libelletype);    
                    $('#usage').append(data.usagebienbati); 
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
                    if(data.nbtoilettes!=null){
                        console.log(data.nbtoilettes)
                        $('#nbtoilettes').append(data.nbtoilettes);  
                    }else{
                        $('#nbtoilettes').append(""+0); 
                    }

                    if(data.jardin!=null){
                        $('#jardin').append(data.jardin);  
                    }else{
                        $('#jardin').append("sans jardin"); 
                    }

                    if(data.typecuisine!=null){
                        $('#cuisine').append(data.typecuisine+" ");  
                    }else{
                        $('#cuisine').append(""); 
                    }
                    if(data.nbgarage!=null){
                        $('#garage').append(data.nbgarage+""); 
                    }else{
                        $('#garage').append(""+0); 
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
                    if(data.document1!=null){
                        $("#document1").append("<div><a href=http://localhost/ProjetSi/index.php/Collecte/download1?numdossier="+data.numdossier+"><h4><strong>cliquez pour telecharger le premier document</strong></h4></a></div>");
                    }

                    if(data.document2!=null){
                        $("#document2").append("<div><a href=http://localhost/ProjetSi/index.php/Collecte/download2?numdossier="+data.numdossier+"><h4><strong>cliquez pour telecharger le second document</strong></h4></a></div>");
                    }
                   
                }
                if(data.idtypebien==2){
                    $('#libelletype').append(data.libelletype);    
                    $('#usage').append(data.usagebienbati); 
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
                    if(data.nbtoilettes!=null){
                        console.log(data.nbtoilettes)
                        $('#nbtoilettes').append(data.nbtoilettes);  
                    }else{
                        $('#nbtoilettes').append(""+0); 
                    }

                    if(data.jardin!=null){
                        $('#jardin').append(data.jardin);  
                    }else{
                        $('#jardin').append("sans jardin"); 
                    }

                    if(data.typecuisine!=null){
                        $('#cuisine').append("<strong>Type de cuisine : </strong>"+data.typecuisine+" ");  
                    }else{
                        $('#cuisine').append(""); 
                    }

                    if(data.piscine!=null){
                        $('#piscine').append("<strong>Piscine  : </strong>"+data.piscine+" ");  
                    }else{
                        $('#piscine').append(""); 
                    }
                    if(data.nbgarage!=null){
                        $('#garage').append("<strong>Nombre de garages: </strong>"+data.nbgarage+""); 
                    }else{
                        $('#garage').append(""+0); 
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
                    if(data.document1!=null){
                        $("#document1").append("<div><a href=http://localhost/ProjetSi/index.php/Collecte/download1?numdossier="+data.numdossier+"><h4><strong>cliquez pour telecharger le premier document</strong></h4></a></div>");
                    }

                    if(data.document2!=null){
                        $("#document2").append("<div><a href=http://localhost/ProjetSi/index.php/Collecte/download2?numdossier="+data.numdossier+"><h4><strong>cliquez pour telecharger le second document</strong></h4></a></div>");
                    }
                   
                }
                if(data.idtypebien==3 ){
                    $('#libelletype').append(data.libelletype);    
                    $('#usage').append(data.usagebienbati); 
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
                    if(data.nbtoilettes!=null){
                    
                        $('#nbtoilettes').append(data.nbtoilettes);  
                    }else{
                        $('#nbtoilettes').append(""+0); 
                    }

                    if(data.jardin!=null){
                        $('#jardin').append(data.jardin);  
                    }else{
                        $('#jardin').append("sans jardin"); 
                    }

                    if(data.typecuisine!=null){
                        $('#cuisine').append("<strong>Type de cuisine : </strong>"+data.typecuisine+" ");  
                    }else{
                        $('#cuisine').append(""); 
                    }

                    if(data.piscine!=null){
                        $('#piscine').append("<strong>Piscine  : </strong>"+data.piscine+" ");  
                    }else{
                        $('#piscine').append(""); 
                    }
                    if(data.nbgarage!=null){
                        $('#garage').append("<strong>Nombre de garages: </strong>"+data.nbgarage+""); 
                    }else{
                        $('#garage').append(""+0); 
                    }
                   
                    if(data.typeimmeuble!=null){
                        $('#typeimmeuble').html("<strong>"+data.typeimmeuble+"</strong>")
                        console.log(data.typeimmeuble)
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
                    if(data.document1!=null){
                        $("#document1").append("<div><a href=http://localhost/ProjetSi/index.php/Collecte/download1?numdossier="+data.numdossier+"><h4><strong>cliquez pour telecharger le premier document</strong></h4></a></div>");
                    }

                    if(data.document2!=null){
                        $("#document2").append("<div><a href=http://localhost/ProjetSi/index.php/Collecte/download2?numdossier="+data.numdossier+"><h4><strong>cliquez pour telecharger le second document</strong></h4></a></div>");
                    }

                   
                }
                if(data.idtypebien==4 ){
                    console.log("ddd"+data.angle)
                    console.log("ddd"+data.broute)
                    console.log("ddd"+data.broutep)
                    $('#libelletype').append(data.libelletype);    
                    $('#usage').append(data.usagebienbati); 
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

                    if(data.nbtoilettes!=null){
                        console.log(data.nbtoilettes)
                        $('#nbtoilettes').append(data.nbtoilettes);  
                    }else{
                        $('#nbtoilettes').append(""+0); 
                    }


                   if(data.studiositue!=null){
                    $('#studiositue').append(data.studiositue+" ");
                   }
                   if(data.buanderie!=null){
                    $('#buanderie').append(data.buanderie+" ");
                   }
                   if(data.balcon!=null){
                    $('#balcon').append(data.balcon+" ");
                   }

                   if(data.garage!=null){
                    $('#garage').append(data.garage+" ");
                   }
                   if(data.ascenseur!=null){
                    $('#ascenseur').append(data.ascenseur+" ");
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

                    if(data.document1!=null){
                        $("#document1").append("<div><a href=http://localhost/ProjetSi/index.php/Collecte/download1?numdossier="+data.numdossier+"><h4><strong>cliquez pour telecharger le premier document</strong></h4></a></div>");
                    }

                    if(data.document2!=null){
                        $("#document2").append("<div><a href=http://localhost/ProjetSi/index.php/Collecte/download2?numdossier="+data.numdossier+"><h4><strong>cliquez pour telecharger le second document</strong></h4></a></div>");
                    }
                   
                }
                if(data.idtypebien==5 ){
                    $('#libelletype').append(data.libelletype);    
                    $('#usage').append(data.usagebienbati); 
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

                    if(data.nbtoilettes!=null){
                        console.log(data.nbtoilettes)
                        $('#nbtoilettes').append(data.nbtoilettes);  
                    }else{
                        $('#nbtoilettes').append(""+0); 
                    }


                   if(data.studiositue!=null){
                    $('#studiositue').append(data.studiositue+" ");
                   }
                   if(data.buanderie!=null){
                    $('#buanderie').append(data.buanderie+" ");
                   }
                   if(data.balcon!=null){
                    $('#balcon').append(data.balcon+" ");
                   }

                   if(data.garage!=null){
                    $('#garage').append(data.garage+" ");
                   }
                   if(data.ascenseur!=null){
                    $('#ascenseur').append(data.ascenseur+" ");
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

                    if(data.document1!=null){
                        $("#document1").append("<div><a href=http://localhost/ProjetSi/index.php/Collecte/download1?numdossier="+data.numdossier+"><h4><strong>cliquez pour telecharger le premier document</strong></h4></a></div>");
                    }

                    if(data.document2!=null){
                        $("#document2").append("<div><a href=http://localhost/ProjetSi/index.php/Collecte/download2?numdossier="+data.numdossier+"><h4><strong>cliquez pour telecharger le second document</strong></h4></a></div>");
                    }            
                }
                if(data.idtypebien==6 ){
                    console.log("ddd"+data.angle)
                    console.log("ddd"+data.broute)
                    console.log("ddd"+data.broutep)
                    $('#libelletype').append(data.libelletype);    
                    $('#usage').append(data.usagebienbati); 
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

                    if(data.situationiveau!=null){
                        $('#situationiveau').append(situationiveau);  
                    }else{
                        $('#situationiveau').append(""); 
                    }

                    if(data.nbtoilettes!=null){
                        console.log(data.nbtoilettes)
                        $('#nbtoilettes').append(data.nbtoilettes);  
                    }else{
                        $('#nbtoilettes').append(""+0); 
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

                    if(data.document1!=null){
                        $("#document1").append("<div><a href=http://localhost/ProjetSi/index.php/Collecte/download1?numdossier="+data.numdossier+"><h4><strong>cliquez pour telecharger le premier document</strong></h4></a></div>");
                    }

                    if(data.document2!=null){
                        $("#document2").append("<div><a href=http://localhost/ProjetSi/index.php/Collecte/download2?numdossier="+data.numdossier+"><h4><strong>cliquez pour telecharger le second document</strong></h4></a></div>");
                    }
                   
                }
                if(data.idtypebien==7 ){
                    console.log("ddd"+data.angle)
                    console.log("ddd"+data.broute)
                    console.log("ddd"+data.broutep)
                    $('#libelletype').append(data.libelletype);    
                    $('#usage').append(data.usagebienbati); 
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

                    if(data.situationiveau!=null){
                        $('#situationiveau').append(situationiveau);  
                    }else{
                        $('#situationiveau').append(""); 
                    }

                    if(data.nbtoilettes!=null){
                        console.log(data.nbtoilettes)
                        $('#nbtoilettes').append(data.nbtoilettes);  
                    }else{
                        $('#nbtoilettes').append(""+0); 
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

                    if(data.document1!=null){
                        $("#document1").append("<div><a href=http://localhost/ProjetSi/index.php/Collecte/download1?numdossier="+data.numdossier+"><h4><strong>cliquez pour telecharger le premier document</strong></h4></a></div>");
                    }

                    if(data.document2!=null){
                        $("#document2").append("<div><a href=http://localhost/ProjetSi/index.php/Collecte/download2?numdossier="+data.numdossier+"><h4><strong>cliquez pour telecharger le second document</strong></h4></a></div>");
                    }
                   
                }
                $('#loginu').val(data.login);    
            }
        });
        
    })

    $(".close").click(function() {

        location.reload();
    })
    $("#close").click(function() {

        location.reload();
    })
})