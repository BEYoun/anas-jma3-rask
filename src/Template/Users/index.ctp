<?php $this->layout='ho' ?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">

/*  onglet lwlaaa   */
.onglet
{
    display:inline-block;
    margin-left:1%;
    margin-right:1%;
    padding:1%;
    cursor:pointer;
}
.onglet_0
{
    background:#bbbbbb;
}
.onglet_1
{
    background:#dddddd;
    padding-bottom:2%;
}
.contenu_onglet
{
    background-color:#dddddd;
    margin-top:-1%;
    padding1%;
    display:none;
}
ul
{
    margin-top:1%;
    margin-bottom:1%;
}

/* fiiin*/

.but {
    margin-top:120%;
}

.butt {
    width: 30%;
    background-color: #444;
    color:#FFA500;
    border-radius:7%;
}

.affichage {
    width: 80%;
    float: left;
    margin-left: 2%;
    margin-bottom: 1%;
}

.effets {
    width: 100%;
    height: auto;
    margin-top:1%;
    border-radius: 7%;
    overflow: auto;
}
.division-largee {
    width: 90%;
    border-radius: 7%;
    margin: 1%;
    height: auto;
    float: left;
    background-color: rgba(229, 230, 231, 0.9);
}

 
 /* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 8%;
    height:60%;
  
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color:#dddddd;
    color: black;
    border: none;
    outline: none;
    text-align: center;
    cursor: pointer;
    transition: 0.3s;
    font-size: 100%;
    margin-top: 2%;
    margin-bottom: 2%;
    height: 33px;
    width: 100%;

}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab butt*/
.tab button.active {
    background-color: #bbbbbb;
}
/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    border-left: none;
    width: 88%;
    height: auto;
    overflow: auto;
}

.button {
    width: 3%; 
    float: right;
    height:110px;
    background-color: #444;
    color:#FFA500;
    border-radius: 10px;
}


.icon-bar {
    width: 10%;
    background-color:#C0C0C0;
    margin-left: 80%;
    margin-top: 2%;
    margin-bottom: 10%;

}

.icon-bar a {
    display: block;
    text-align: center;
    padding: 15%;
    transition: all 0.3s ease;
    color: white;
    font-size: 100%;
    color:black;
}

.icon-bar a:hover {
    background-color: #FFA500;
}

.active {
    background-color: #D3D3D3;

}
.fa-user {
    float: left;
    margin-left: 2%;
    margin-top: 1%;
}
.title {
    height: 34px;
    width: 100%;
}
.bttn{
    float: left;
    color:black;
    background-color: #555555;
    border: 3px solid #555555;
    margin-left: 2%;
    border-radius: 6%;
}
.bttn1{
    float: right;
    width:8%;
    height:90%;
    text-align:center;
    border-radius:8%;
    margin-top:0.2%;
    margin-right: 2%;
    color:black;
}
#global
{
    width: 100%;
}
.save{
    width: 10%;
    background-color: #bbb;
    margin-left: 80%;
    margin-bottom: 1%;
}
#bt {
    width:8%;
    height:90%;
    text-align:center;
    float:left;
    margin-left:2%;
    border-radius:8px;
    margin-top:2px;
}





  .login-container{
      position: relative;
      width: 100%;
      margin: 9px auto;
      padding: 50px 40px 40px;
      text-align: center;
      background: #fff;
      border: 1px solid #ccc;
  }

  #output{
      position: absolute;
      width: 300px;
      top: -75px;
      left: 0;
      color: #fff;
  }

  #output.alert-success{
      background: rgb(25, 204, 25);
  }

  #output.alert-danger{
      background: rgb(228, 105, 105);
  }


  .login-container::before,.login-container::after{
      content: "";
      position: absolute;
      width: 100%;height: 100%;
      top: 3.5px;left: 0;
      background: #fff;
      z-index: -1;
      -webkit-transform: rotateZ(4deg);
      -moz-transform: rotateZ(4deg);
      -ms-transform: rotateZ(4deg);
      border: 1px solid #ccc;

  }

  .login-container::after{
      top: 5px;
      z-index: -2;
      -webkit-transform: rotateZ(-2deg);
       -moz-transform: rotateZ(-2deg);
        -ms-transform: rotateZ(-2deg);

  }

  .avatar{
      width: 100px;height: 100px;
      margin: 10px auto 30px;
      border-radius: 100%;
      border: 2px solid #aaa;
      background-size: cover;
  }

  .form-box input{
      width: 100%;
      padding: 10px;
      text-align: center;
      height:40px;
      border: 1px solid #ccc;;
      background: #fafafa;
      transition:0.2s ease-in-out;

  }

  .form-box input:focus{
      outline: 0;
      background: #eee;
  }

  .form-box input[type="text"]{
      border-radius: 5px 5px 0 0;
      text-transform: lowercase;
  }

  .form-box input[type="password"]{
      border-radius: 0 0 5px 5px;
      border-top: 0;
  }

  .form-box button.login{
      margin-top:15px;
      padding: 10px 20px;
  }

  .animated {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
  }

  @-webkit-keyframes fadeInUp {
    0% {
      opacity: 0;
      -webkit-transform: translateY(20px);
      transform: translateY(20px);
    }

    100% {
      opacity: 1;
      -webkit-transform: translateY(0);
      transform: translateY(0);
    }
  }

  @keyframes fadeInUp {
    0% {
      opacity: 0;
      -webkit-transform: translateY(20px);
      -ms-transform: translateY(20px);
      transform: translateY(20px);
    }

    100% {
      opacity: 1;
      -webkit-transform: translateY(0);
      -ms-transform: translateY(0);
      transform: translateY(0);
    }
  }

  .fadeInUp {
    -webkit-animation-name: fadeInUp;
    animation-name: fadeInUp;
  } 
</style>

<script type="text/javascript">
    function hello(p1){
        var video = document.getElementById('principale')
        var principale = document.querySelector('#principale source')
        // video with effect
        //var resultat = path dial video
        console.log(p1)
        principale.setAttribute('src','/video/video-sample/'+p1+'.mp4');
        video.load();
        video.play();
    }
    function selected(p1){
        var nom = p1
        var video = document.getElementById('principale')
        document.getElementById('informations').innerHTML =p1
        var principale = document.querySelector('#principale source')
        console.log(p1)
        principale.setAttribute('src',p1);
        video.load();
        video.play();
    }
    function change_onglet(name){
        document.getElementById('onglet_'+anc_onglet).className = 'onglet_0 onglet';
        document.getElementById('onglet_'+name).className = 'onglet_1 onglet';
        document.getElementById('contenu_onglet_'+anc_onglet).style.display = 'none';
        document.getElementById('contenu_onglet_'+name).style.display = 'block';
        anc_onglet = name;
}


    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
}
</script>


<!-- <script type="text/javascript" src="app.js"></script> -->
<?php echo $this->Html->script('app.js'); ?>


<div class="container" style="height: auto;">
    <p id="informations" style="display: none;">anass</p>
    <div class="division-largee">
        <div class="title">
            <button class="btn btn-outline-warning border border-warning" id="bt" type="button" data-toggle="modal" data-target="#profile"><i class="fa fa-user"></i><span>Profil</span></button>
            <button class="bttn1 btn btn-warning">Log out</button>
        </div>
    <div class="division" style="width: 30%;margin-left:1%; height:405px;">
        <div class="systeme_onglets" style="height: 100%; overflow-y: scroll; width:100%;">
            <div class="onglets">
                <span class="onglet_0 onglet" id="onglet_quoi" onclick="javascript:change_onglet('quoi');">Images</span>
                <span class="onglet_0 onglet" id="onglet_qui" onclick="javascript:change_onglet('qui');">Videos</span>
                <span class="onglet_0 onglet" id="onglet_pourquoi" onclick="javascript:change_onglet('pourquoi');">Sounds</span>
            </div>

        <div class="contenu_onglets" style="width: 98%;">
            <div class="contenu_onglet" id="contenu_onglet_quoi">
                <div class="but">
                    <button class="butt">Pc</button>
                    <button class="butt" data-toggle="modal" data-target="#myModal">Url</button>
                </div>
            </div>

            <div class="contenu_onglet" id="contenu_onglet_qui">
                <div class="but">
                    <button class="butt">Pc</button>
                    <button class="butt" data-toggle="modal" data-target="#myModal1">Url</button>
                    <button class="butt" data-toggle="modal" data-target="#myModal3">Youtube</button>
                </div>
            </div>

            <div class="contenu_onglet" id="contenu_onglet_pourquoi">
                <div class="but">
                    <button class="butt">Pc</button>
                    <button class="butt" data-toggle="modal" data-target="#myModal2">Youtube</button>
                </div>
            </div>
        </div>
        </div>      
    </div>

    <script type="text/javascript">
        var anc_onglet = 'quoi';
        change_onglet(anc_onglet);
    </script>

        <div class="division" style="width: 62%; margin-left: 2%;">
            <div class="effets">
                <table>
                    <tr>
                    <?php  
                        for ($i=1; $i <=10 ; $i++) { 
                            echo '<td style="width:10%;">';
                                echo "<button type=\"button\" class=\"btn btn-outline-warning border border-warning\" onclick=\"hello('e$i')\"  style= \"height:27px;text-align: center;font-size: 12px;padding: 1px 5px; color:gray;\">Effect $i</button>";
                                echo "<video autoplay muted loop width=\"80\" height=\"50\"><source src=\"/video/video-sample/e$i.mp4\"></video>";
                            echo '</td>';                               
                        }
                    ?>
                    </tr>
                </table>
            </div>
            <div id="global">
                <div class="affichage">
                    <video id="principale" width="470" height="275" controls style="margin-right: 20%;">
                    <source src="" type="video/mp4">
                    </video>
                </div>
                <div class="icon-bar">
                    <a class="active"><i class="fa fa-pencil"><br></i></a>
                    <a><i class="fa fa-cut"></i></a>          
                </div>
                <div style="height: 20%; width: 30%;margin-left:70%; margin-top: 26%;">
                    <button class="btn btn-warning border border-warning" style="color:gray;">Save</button>
                </div>
            </div>
        </div> 
    <div class="division" style="width: 96%; height: 100%;"> 
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'Images')" id="defaultOpen">Images</button>
            <button class="tablinks" onclick="openCity(event, 'Videos')">Videos</button>
            <button class="tablinks" onclick="openCity(event, 'Sounds')">Sounds</button>
        </div>

        <div id="Images" class="tabcontent">
            hiii
        </div>

        <div id="Videos" class="tabcontent">
            ghhh
        </div>

        <div id="Sounds" class="tabcontent">
            byee
        </div>
            <button class="button">>></button>
    </div>

    <script>
    document.getElementById("defaultOpen").click();
    </script>
</div>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <form>
                    <input type="text" name="url" style="width:150%; float: right;border-radius: 7%;">
                    <button class="butt" type="button" data-dismiss="modal" style="float:left; margin-left: 110%; margin-top:-11.5%;">Import</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">   
        <div class="modal-content">
            <div class="modal-header">
                <form>
                    <input type="text" name="url" style="width:150%; float: right;border-radius: 7%;">
                    <button type="button" class="butt" data-dismiss="modal" style="float:left; margin-left: 110%; margin-top:-11.5%;">Import</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">   
        <div class="modal-content">
            <div class="modal-header">
                <form>
                    <input type="text" name="url" style="width:150%; float: right;border-radius: 7%;">
                    <button type="button" class="butt" data-dismiss="modal" style="float:left; margin-left: 110%; margin-top:-11.5%;">Import</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">   
        <div class="modal-content">
            <div class="modal-header">
                <form>
                    <input type="text" name="url" style="width:150%; float: right;border-radius: 7%;">
                    <button type="button" class="butt" data-dismiss="modal" style="float:left; margin-left: 110%; margin-top:-11.5%;">Import</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="container" style="width: 100%; margin-top: 10%;">
    <div class="login-container" style="width: 50%;">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
      <div class="form-box">
         <legend><?= __('Profil') ?></legend>
        <table>
            <tr>
                <td>Name:</td>
                <td> </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td> </td>
            </tr>
            <tr>  
                <td>You still have :</td>
                <td> </td>
            </tr>
        </table>
        <?= $this->Html->link('SUBSCRIBE', '/clients/paiment', ['class'=>'btn btn-warning']) ?>
      </div>
    </div>
  </div>
</div>