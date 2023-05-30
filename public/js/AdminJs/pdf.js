document.getElementById('btnConvert').addEventListener('click', function() {
    // Obtenez le formulaire HTML que vous souhaitez convertir en PDF
    var form = document.getElementById('monFormulaire');
  
    // Créez un élément de conteneur pour le contenu supplémentaire
    var container = document.createElement('div');
  
    // Ajoutez le contenu supplémentaire, par exemple un en-tête avec une image
    var header = document.createElement('div');
    
    header.innerHTML = `
    <div style="display: flex" >
    <img style="width: 120px; height: 120px; " src="images/imagesAdmin/rep.png" alt="">
    <div style="margin-left:20px; text-align:center"><h2>الاتحاد الجزائري لكرة القدم</h2><h2>FEDERATION ALGERIENNE DE FOOTBALL</h2></div>
    </div>
    <div style="display: flex">
        <h4 style="text-align: center; width:200px; margin-left:30px;">COMMISSION FEDERALE DES ARBITRES</h4><h4 style="text-align: center; width:200px; margin-left:350px;">DIRECTION NATIONALE DE L’ARBITRAGE</h4>
        </div>
<div style="display: flex">
    <div style="margin-left:280px;"><h3 style="text-align: center"> تقرير الحاكم</h3><h3>FRAPPORT D'ARBITRAGE</h3></div>
    </div>
    `
    
    container.appendChild(header);
  
    // Ajoutez le formulaire au conteneur
    container.appendChild(form);
  
    // Utilisez la bibliothèque html2pdf pour convertir le conteneur en PDF
    html2pdf().from(container).save();
  });
  