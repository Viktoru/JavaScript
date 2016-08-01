
<!-- Body of the page: bootstrap---->
<!-- Bootstrap core CSS -->
<link href="<?php echo base_url('/css/bootstrap.css') ?>" rel="stylesheet" />
<?php
/**
 * Created by PhpStorm.
 * User: victorunda
 * Date: 7/22/16
 * Time: 10:07 AM
 */
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script>
    $( function() {
        $( "#datepicker" ).datepicker({ minDate: -20, maxDate: "+1M +10D" });
    } );

</script>
<div id="page-wrapper"><!-- Start page wrapper-->
<div class="row">
                        <select class="form-control" id="models" name="models">
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>

                          </select>

</div>
   <!-- populate the date range --->
<div class="container-fluid">
    <div class="row">
        <p id="s2" name="s2"></p>
    </div>

</div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6">
                <button type="button" class="btn btn-primary">Search</button>
                <button type="button" class="btn btn-warning btn-sm" onclick="return resetAll();">Reset</button>
            </div>
            <div class="col-xs-6">

                    <script>
                    function myFuncModels() {

                        var x = document.getElementById("models").selectedIndex;
                        var y = document.getElementById("models").options;
                        console.log("Index: " + y[x].index + " is " + y[x].text);
                         var c = (document.getElementsByTagName("option")[y].value);
                         console.log(c);
                       if (y[x].index == "10") {

                           // this toggletext - index 10 clean
                           alert("FBL is working..");
                           var vikelement2 = document.getElementById("toggleText2");
                           var text = document.getElementById("displayText");
                           vikelement2.style.display = "none";


                           // main toggletext
                           var vikelement = document.getElementById("toggleText");
                           var text = document.getElementById("displayText");
                           vikelement.style.display = "block";

                           // end main toggletext
                       } else if (y[x].index == "14") {
                           alert("LAC is working");
                           var vikelement = document.getElementById("toggleText");
                           var text = document.getElementById("displayText");
                           vikelement.style.display = "none";

                           // main toggeltext2
                           var vikelement2 = document.getElementById("toggleText2");
                           var text = document.getElementById("displayText");
                               vikelement2.style.display = "block";

                           } else if (y[x].index !== "10" && y[x].index !== "14" ){

                           var vikelement = document.getElementById("toggleText");
                           var text = document.getElementById("displayText");
                           vikelement.style.display = "none";

                           var vikelement2 = document.getElementById("toggleText2");
                           var text = document.getElementById("displayText");
                           vikelement2.style.display = "none";
                   }

                }
                </script>

                <div id="toggleText" style="display: none">
                    <div class="panel panel-default">
                        <div class="panel-heading">Planel window</div>
                        <div class="panel-body">
                            <label>History</label>
                            <form>
                            Anyhting here
                            </form>
                        </div>
                    </div>
                </div>


                <div id="toggleText2" style="display: none">
                    <div class="panel panel-default">
                        <div class="panel-heading">Panel window </div>
                        <div class="panel-body">
                            </form>

                            <label>Anything: from bootstrap</label>
                            </form>

                        </div>
                    </div>
                </div>


                <div id="textarea-code">
                </div>
            </div>
        </div>



    <div class="row">
        <div class="col-xs-12">
            <p id="datepicker"></p>

        </div>

    </div>

     <hr />
       <div class="row">
           <div class="col-xs-6">

           </div>

           <div class="col-xs-6">


           </div>

       </div>

    </div><!-- end container-fluir -->

</div><!-- end container-fluid -->
<!-- end of the body of the page : bootstrap-->
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script type="text/javascript" src="<?php echo base_url("js/bootstrap.min.js");?>"></script>
