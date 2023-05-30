<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    
</head>

 
<body>
    
    <div style="display: flex" >
    <img style="width: 100px; margin-left:250px;" src="images/imagesAdmin/rep.png" alt="">
    <div style="margin-left:50px; text-align:center"><h2>الاتحاد الجزائري لكرة القدم</h2><h2>FEDERATION ALGERIENNE DE FOOTBALL</h2></div>
    </div>

    <div style="display: flex">
        <h4 style="text-align: center; width:200px; margin-left:200px;">COMMISSION FEDERALE DES ARBITRES</h4><h4 style="text-align: center; width:200px; margin-left:500px;">DIRECTION NATIONALE DE L’ARBITRAGE</h4>
        </div>
<div style="display: flex">
    <div style="margin-left:530px;"><h3 style="text-align: center"> تقرير الحاكم</h3><h3>FRAPPORT D'ARBITRAGE</h3></div>
    </div>

<div id="monFormulaire">
    <table border="1" style="margin:30px; width:95%" >
        <tbody>
            <tr>
                <td style="width:50%">
                    <b>compétition :</b> <input class="comp" style="border: transparent" type="text" >
                </td>
                <td style="width:50%">
                    <b>Rencontre :</b><input class="renc" style="border: transparent" type="text" >
                </td>
            </tr>
            <tr>
                <td>
                    <b>EQUIPE A :</b><input class="eq1" style="border: transparent" type="text" >
                </td>
                <td>
                    <b>EQUIPE B :</b> <input class="eq2" style="border: transparent" type="text" >
                </td>
            </tr>
            <tr>
                <td>
                    <b> Date : </b><input class="date" style="border: transparent" type="text" ><br/><b> Heure : </b> <input class="heure" style="border: transparent" type="text" >
                </td>
                <td>
                    <b>Terrain : </b><input class="trn" style="border: transparent" type="text" ><br/> <b> Lieu : </b><input class="lieu" style="border: transparent" type="text" >
                </td>
            </tr>
            <tr>
                <td>
                    <b>Score à la mi-temps :</b>  <input class="smt" style="border: transparent" type="text" ><br/><b> Faveur : </b> <input class="fvr" style="border: transparent" type="text" >
                </td>
                <td>
                    <b>Score final :</b> <input class="sf" style="border: transparent" type="text" ><br/><b> Faveur : </b> <input class="fvr2" style="border: transparent" type="text" >
                </td>
            </tr>
            <tr>
                <td>
                    <b>Arbitre :</b>  <input class="arbi" style="border: transparent" type="text" >
                </td>
                <td>
                    <b>Assistant 1:</b> <input class="arbi1" style="border: transparent" type="text" >
                </td>
            </tr>
            <tr>
                <td>
                    <b>Assistant 2:</b>  <input class="arb2" style="border: transparent" type="text" >
                </td>
                <td>
                    <b>Quatrième Officiel :</b>  <input class="arbi3" style="border: transparent" type="text" >
                </td>
            </tr>
            <tr>
                <td>
                    <b>Commissaire  de match :</b>  <input class="com" style="border: transparent" type="text" >
                </td>
                <td>
                    <b>Assesseur :</b>  <input class="as" style="border: transparent" type="text" >
                </td>
            </tr>
            
        </tbody>
    </table>
    <table border="1" style="margin:30px; width:95%" >
        <tbody>
            <tr >
                <td style="text-align:center; background-color:rgb(75, 148, 75)" colspan="6">
                    <b >BTEURS :</b>
                </td>
            </tr>
            <tr>
                <td >
                    <b >EQUIPE A</b>
                </td>
                <td >
                    <b >N°</b>
                </td>
                <td >
                    <b >MIN</b>
                </td>
                <td >
                    <b >EQUIPE B</b>
                </td>
                <td >
                    <b >N°</b>
                </td>
                <td >
                    <b >MIN</b>
                </td>
                
            </tr>
            <tr>
                <td >
                    <input style="border: transparent" type="text" >
                </td>
                <td >
                    <input style="border: transparent; width: 40px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width: 40px" type="text" >
                </td>
                <td>
                    <input style="border: transparent" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width: 40px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width: 40px" type="text" >
                </td>
                
            </tr>
            <tr>
                <td >
                    <input style="border: transparent" type="text" >
                </td>
                <td >
                    <input style="border: transparent; width: 40px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width: 40px" type="text" >
                </td>
                <td>
                    <input style="border: transparent" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width: 40px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width: 40px" type="text" >
                </td>
                
            </tr>
            <tr>
                <td >
                    <input style="border: transparent" type="text" >
                </td>
                <td >
                    <input style="border: transparent; width: 40px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width: 40px" type="text" >
                </td>
                <td>
                    <input style="border: transparent" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width: 40px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width: 40px" type="text" >
                </td>
                
            </tr>
            
            
        </tbody>
    </table>

    <h4 style="margin-left:350px">TIRS AU BUT</h4>
    <table border="1" style="margin:35px; margin-bottom:5px; width:95%" >
        <tbody>
            <tr>
                <td style="text-align:center; background-color:rgb(75, 148, 75)" colspan="11">
                    <b >EQUIPE A</b>
                </td>
                <td style="text-align:center; background-color:rgb(75, 148, 75)" colspan="11">
                    <b >EQUIPE B</b>
                </td>
                
            </tr>
            <tr>
                <td style="width:50px">
                    <b >N°</b>
                </td>
                <td>
                    <input style="border: transparent; width:20px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:20px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:20px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:20px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:20px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:20px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:20px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:20px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:20px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:20px" type="text" >
                </td>
                <td style="width:50px">
                    <b >R</b>
                </td>
                <td>
                    <input style="border: transparent; width:20px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:20px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:20px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:20px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:20px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:20px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:20px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:20px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:20px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:20px" type="text" >
                </td>
                
            </tr>
            <tr>
                <td style="width:50px">
                    <b >N°</b>
                </td>
                <td>
                    <input style="border: transparent; width:10px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:10px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:10px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:10px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:10px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:10px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:10px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:10px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:10px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:10px" type="text" >
                </td>
                <td style="width:50px">
                    <b >R</b>
                </td>
                <td>
                    <input style="border: transparent; width:10px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:10px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:10px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:10px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:10px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:10px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:10px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:10px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:10px" type="text" >
                </td>
                <td>
                    <input style="border: transparent; width:10px" type="text" >
                </td>
                
            </tr>
        </tbody>
    </table>

    <b style="margin-left:250px;">N°=</b> numero de tireur, <b>R=</b> resultat de tir, <b>/ =</b> tir marqué, <b>O =</b> tir raté

    <table border="1" style="margin:30px; width:95%">
        <tbody>
            <tr>
                <td style="text-align:center; background-color:rgb(75, 148, 75)" colspan="10">
                    <b >REMPLACEMENTS :</b>
                </td>
                
            </tr>
            <tr>
                <td style="text-align:center;" colspan="5">
                    <b >EQUIPE A</b>
                </td>
                <td style="text-align:center;" colspan="5">
                    <b >EQUIPE B</b>
                </td>
                
            </tr>
            <tr>
                <td style="text-align:center;">
                    <b >N°</b>
                </td>
                <td style="text-align:center;">
                    <b >SORTANT</b>
                </td>
                <td style="text-align:center;">
                    <b >N°</b>
                </td>
                <td style="text-align:center;">
                    <b >ENTRANT</b>
                </td>
                <td style="text-align:center;">
                    <b >MIN</b>
                </td>

                <td style="text-align:center;">
                    <b >N°</b>
                </td>
                <td style="text-align:center;">
                    <b >SORTANT</b>
                </td>
                <td style="text-align:center;">
                    <b >N°</b>
                </td>
                <td style="text-align:center;">
                    <b >ENTRANT</b>
                </td>
                <td style="text-align:center;">
                    <b >MIN</b>
                </td>
                
            </tr>
            <tr>
                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:40px" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:40px" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>

                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent;; width:40px" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:40px" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>
                
            </tr>
            <tr>
                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:40px" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:40px" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>

                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent;; width:40px" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:40px" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>
                
            </tr><tr>
                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:40px" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:40px" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>

                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent;; width:40px" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:40px" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>
                
            </tr><tr>
                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:40px" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:40px" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>

                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent;; width:40px" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:40px" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>
                
            </tr><tr>
                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:40px" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:40px" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>

                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent;; width:40px" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:40px" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:20px" type="text">
                </td>
                
            </tr>
            
        </tbody>
    </table>
    <table border="1" style="margin:30px; margin-top:40px; width:95%">
        <tbody>
            <tr>
                <td style="text-align:center; background-color:rgb(230, 233, 69)" colspan="5">
                    <b >AVERTISSEMENTS :</b>
                </td>
                
            </tr>
            
            <tr>
                <td style="text-align:center;">
                    <b >EQUIPE</b>
                </td>
                <td style="text-align:center;">
                    <b >N°</b>
                </td>
                <td style="text-align:center;">
                    <b >JOUEURS</b>
                </td>
                <td style="text-align:center;">
                    <b >MIN</b>
                </td>
                <td style="text-align:center;">
                    <b >MOTIF</b>
                </td>
                
            </tr>
            <tr>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                
                
            </tr>
            <tr>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                
                
            </tr>
            <tr>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                
                
            </tr>
            <tr>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                
                
            </tr>
            <tr>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                
                
            </tr>
            <tr>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                
                
            </tr>
            <tr>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                
                
            </tr>
            <tr>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                
                
            </tr>
 
        </tbody>
    </table>

    <table border="1" style="margin:30px; width:95%">
        <tbody>
            <tr>
                <td style="text-align:center; background-color:rgb(233, 189, 69)" colspan="5">
                    <b >EXPULSION :</b>
                </td>
                
            </tr>
            
            <tr>
                <td style="text-align:center;">
                    <b >EQUIPE</b>
                </td>
                <td style="text-align:center;">
                    <b >N°</b>
                </td>
                <td style="text-align:center;">
                    <b >JOUEURS</b>
                </td>
                <td style="text-align:center;">
                    <b >MIN</b>
                </td>
                <td style="text-align:center;">
                    <b >MOTIF</b>
                </td>
                
            </tr>
            <tr>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                
                
            </tr>
            <tr>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                
                
            </tr>
            <tr>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                
                
            </tr>
            <tr>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                
                
            </tr>
            <tr>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                
                
            </tr>
            <tr>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                
                
            </tr>
            <tr>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                
                
            </tr>
            <tr>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
                <td style="text-align:center;">
                    <input style="border: transparent; width:50px" type="text">
                </td>
                
                <td style="text-align:center;">
                    <input style="border: transparent" type="text" >
                </td>
            </tr>

        </tbody>
    </table>
    <table border="1" style="margin:30px; width:95%">
        <tbody>
            <tr>
                <td style="text-align:center;">
                    <b >INCIDENTS :</b>
                </td>
            </tr>
            <tr>
                <td style=" height:100px">
                    <input style="border: transparent; width:100%; height:100%; " type="text" >
                </td>
            </tr>
            
            
        </tbody>
    </table>
    <div style="display: flex">
    <div style="display: flex">
        <b style="margin-left: 100px">Date :</b>  <input style="border: transparent" type="text" >
    </div>
    <div style="display: flex">
        <b>Nom et prénom de l’Arbitre :</b>  <input style="border: transparent" type="text" >
    </div>
</div>
</div>
<div style="margin-top: 50px;margin-left: 600px;">
<b>TO PDF</b><br/><img style=" width:50px; cursor:pointer" id="btnConvert" src="images/imagesAdmin/accept.png" alt="">
</div>  

<script src="js/AdminJs/pdf.js"></script>

</body>

</html>