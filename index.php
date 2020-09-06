<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>salbar.com</title>
</head>
<body>
    <script src="jquery-3.5.1.min.js"></script>
    <script>
        let base_url = "https://github.com/SaloniSharmaMitAoe/Assignment-4/controller.php";

        function PopulateDropDownListByname(){
          let url = base_url + "?req=name_list";
          $.get(url,function(data,success){
              console.log(data.length);
              console.log(data);

              for (var i = 0; i < data.length; i++) {
                  var option = document.createElement("OPTION");

                  //Set Name in Text part.
                  option.innerHTML = data[i].name;

                  //Set Id in Value part.
                  option.value = data[i].id;

                  //Add the Option element to DropDownList.
                  ddlCustomersname.options.add(option);
              }
            });
        }

        function PopulateDropDownListByid(){
          let url = base_url + "?req=name_list";
          $.get(url,function(data,success){
              console.log(data.length);
              console.log(data);
              for (var i = 0; i < data.length; i++) {
                  var option = document.createElement("OPTION");

                  //Set Id in Text part.
                  option.innerHTML = data[i].id;

                  //Set Name in Value part.
                  option.value = data[i].name;

                  //Add the Option element to DropDownList.
                  ddlCustomersid.options.add(option);
              }
            });
        }

    </script>
    <?php
    include("Data.php");
    ?>
    <h2 align="center"><big><big>SALBAR</big></big></h2>
    <h2 align="center">You Decide We Provide</h2>
    <h1>PLACE ORDER</h1>
    <input align="center" type="text" class="input" placeholder="Email Address"><br/><br/>
    <input align="center" type="text" class="input" placeholder="Name"><br/><br/>
    <input align="center" type="text" class="input" placeholder="Phone"><br/><br/>
    <textarea placeholder="Address"></textarea><br/>
    <br/><button onclick="PopulateDropDownListByname()">GET MENU BY NAME</button>
    <select id="ddlCustomersname">
    </select>
    <br/><br/><button onclick="PopulateDropDownListByid()">GET MENU BY__ID__</button>
    <select id="ddlCustomersid">
    </select>
    <br/><br/><a href="confirmation.html">PLACE ORDER</a>
</body>
</html>
