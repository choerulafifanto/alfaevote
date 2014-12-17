
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
      <title>&alpha;-Voting</title>
    <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/vote.js"></script>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/style2.css" type="text/css">
    <style type="text/css"> 

     @font-face {   font-family: 'Glyphicons Halflings';   
        src: url('/fonts/glyphicons-halflings-regular.eot');   
        src: url('/fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), 
        url('/fonts/glyphicons-halflings-regular.woff') format('woff'),  
        url('/fonts/glyphicons-halflings-regular.ttf') format('truetype'), 
        url('/fonts/glyphicons-halflings-regular.svg#glyphicons-halflingsregular') format('svg'); } 
    </style>
    
  </head>
  <body>
      <div class="container-fluid">
      <div class="row-fluid">
        <div class="span2" id="sider">
            <div style="
               width: 200px;
               height: 200px;
               border: 5px solid white;
               border-radius: 100px;
               box-shadow: 10px 10px 20px rgba(0,0,0,0.2);
               ">
                <img src="img/footer_lodyas.png" style="
                   width: 190px;
                   height: 190px;
                   border-radius: 120px;
                   text-align: left;    
                   vertical-align: middle;"/>
            </div>
            <div class="btn-toolbar" role="toolbar" aria-label="ASEK">
              <div class="btn-group" role="group1" aria-label="BAJO">
                  <button type="button" class="btn btn-default">Left</button>
                  <button type="button" class="btn btn-default">Middle</button>
                  <button type="button" class="btn btn-default">Right</button>
              </div>
              <div class="btn-group2" role="group2" aria-label="BAJI">
                  <button type="button" class="btn btn-default">Left</button>
                  <button type="button" class="btn btn-default">Middle</button>
                  <button type="button" class="btn btn-default">Right</button>
              </div>
              <div class="btn-group3" role="group3" aria-label="BAJU">
                  <button type="button" class="btn btn-default">Left</button>
                  <button type="button" class="btn btn-default">Middle</button>
                  <button type="button" class="btn btn-default">Right</button>
              </div>
            </div>
            
        </div>
          <div class="span10">
            <div id="container2" style="background-color: white"><h1 class="panel-heading" > Calon Ketua SEMA STIS</h1></div>
            <nav> 
            <ul id="container2" style="background:none;">
                <li tabindex="1"><div style="background:none;">
                  <div class="panel-group" id="accordion" role="tablist" style="opacity: 1;">
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Calon 1
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, 
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Visi
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, 
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Misi
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, 
                      </div>
                    </div>
                  </div>
              </div>  
            </div></li>
                <li tabindex="2"><div style="background:none;">
                  <div class="panel-group" id="accordion1" role="tablist" style="opacity: 1;">
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                          Calon 2
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, 
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                          Visi
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, 
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                          Misi
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, 
                      </div>
                    </div>
                  </div>
              </div>  
            </div></li>
                <li tabindex="3"><div style="background:none;">
                  <div class="panel-group" id="accordion2" role="tablist" style="opacity: 1;">
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                          Calon 3
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, 
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                          Visi
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, 
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                          Misi
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, 
                      </div>
                    </div>
                  </div>
              </div>  
            </div></li>
                <li tabindex="4"><div style="background:none;">
                  <div class="panel-group" id="accordion3" role="tablist" style="opacity: 1;">
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion3" href="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                          Calon 3
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne3" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, 
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
                          Visi
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, 
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                          Misi
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, 
                      </div>
                    </div>
                  </div>
              </div>  
            </div></li>
            </ul>
            </nav>
          </div>
      </div>
</div>

      
      <div>
          
      </div>
    <footer id="foter">
        <b>&COPY;STISAlfa 2014</b>
    </footer>
  </body>
</html>
