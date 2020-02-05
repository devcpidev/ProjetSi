$(document).ready(function() {
	var cnipropi=""
	$("#cnipropi").on('change',function() {
		cnipropi = $('#cnipropi').val()
		console.log(cnipropi)
		$.ajax({
			type : 'GET',
			dataType:"json",
			url : 'http://localhost/ProjetSi/index.php/Collecte/findProprio',
			data: {
				cnipropi : cnipropi
			},
			success : function(data){
				$('#nom').val(data.nom)
				$('#prenom').val(data.prenom)
				$('#adressesen').val(data.adressesen)
				$('#tel').val(data.tel)
				$('#email').val(data.email)

				// disabled
				$('#nom')[0].disabled =true
				$('#prenom')[0].disabled =true
				$('#adressesen')[0].disabled =true
				$('#tel')[0].disabled =true
				$('#email')[0].disabled =true
			}
		})
	})

	$(".prop").click(function() {
		numdossier = $(this).attr("id")
		console.log(numdossier)
		$.ajax({
			type : 'GET',
			dataType:"json",
			url : 'http://localhost/ProjetSi/index.php/NonBati/prop',
			data: {
				numdossier : numdossier
			},
			success : function(data){
				$('#nom').append("<i class='fa fa-user' aria-hidden='true'> Nom du propriétaire :</i></span>"+data.nom+"")
				$('#prenom').append("<i class='fa fa-user' aria-hidden='true'> Prenom du propriétaire :</i></span>"+data.prenom+"")
				$('#adressesen').append("<i class='fa fa-address' aria-hidden='true'>Adresse du propriétaire :</i></span>"+data.adressesen+"")
				$('#tel').append("<i class='fa fa-user' aria-hidden='true'> Numéro du propriétaire:</i></span>"+data.tel+"")
				$('#email').append("<i class='fa fa-envelope' aria-hidden='true'> email du propriétaire :</i></span>"+data.email+"")
				if(data.nomrep!=null){
					$('#nomrep').append("<i class='fa fa-user' aria-hidden='true'> Nom du représentant:</i></span>"+data.nomrep+"")
				}else{
					$('#nomrep').append("")
				}
				if(data.telrep!=null){
					$('#telrep').append("<i class='fa fa-phone' aria-hidden='true'> N° Tel du représentant :</i></span>"+data.telrep+"")
				}else{
					$('#telrep').append("")
				}
				if(data.adresserep!=null){
					$('#adresserep').append("<i class='fa fa-address' aria-hidden='true'> Adresse représentant :</i></span>"+data.adresserep+"")
				}else{
					$('#adresserep').append("")
				}
				if(data.emailrep!=null){
					$('#emailrep').append("<i class='fa fa-envelope' aria-hidden='true'> email Représentant :</i></span>"+data.emailrep+"")
				}else{
					$('#emailrep').append("")
				}
			}
		})

	})
})
