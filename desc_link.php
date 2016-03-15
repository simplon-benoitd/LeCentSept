<!DOCTYPE html>
<?php


?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>
    
  <!--<textarea name="" id="descBefore" cols="30" rows="10"></textarea>
  <button type="button" onclick="manageLinks()"></button>
  <div id="descAfter"></div>-->
  
</body>
<script type="text/javascript">

function manageLinks() {
  //descBefore attend la description sortie de la base de données avec les partenaires et liens au format << ___ :: ___ >>
  var descBefore = document.getElementById("descBefore");
  var finalText = descBefore.value;
  //descAfter correspond à la div/textarea de sortie de la description finale après transformation
  var descAfter = document.getElementById("descAfter");
  var reg = /\<\<((.*?)\:\:(\S*))\>\>/g;
  var resultReg;
  while ((resultReg = reg.exec(descBefore.value)) !== null) {
    console.log(resultReg[2]+"-"+resultReg[3]);
    var link = '<a style="color:red;text-decoration:none" href="'+resultReg[3]+'">'+resultReg[2]+'</a>';
    finalText = finalText.replace(resultReg[0], link);
  }
  // console.log(finalText);
  descAfter.innerHTML = finalText;
}

</script>
</html>
