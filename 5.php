<html>
    <head>
    <title>Registration Page</title>
    <link href="https://fonts.googleapis.com/css?family=Bungee|Courgette|Montserrat" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
<link href="https://fonts.googleapis.com/css?family=Spectral+SC" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.2/jspdf.plugin.autotable.js"></script>
        <link rel="stylesheet" href="css/animate.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    
    </head>
    <body>
    
<div id="preloader">
        
        <div class="spinner">
  <div class="cube1"></div>
  <div class="cube2"></div>
  
</div>
        
        </div>
    <div id="main">
        <p id="signin" name="signin" class="animated zoomIn">Welcome back</p>
        <p id="mail1" class="animated zoomIn"></p>
        <div id="image">
        <img src="images/clock.jpeg" id="clock">
            <p id="alumni3">"Connect Today. Transform Tomorrow. It's not just our mission. It's our wish for you."</p>
            </div>
        
    <form id="form" method="POST" class="animated zoomIn">
        <p class="cnfrm" id="name-div"></p>

	<field class="float-label">
		<input type="text" id="name" name="name" placeholder="Your Name" tabindex="1">
		<label for="name" id="namel">YOUR NAME</label>
	</field>
         <p class="cnfrm" id="dep-div"></p>

        <field class="float-label">
		<input type="text" id="dep" name="dep" placeholder="Degree" tabindex="2">

		<label for="name">DEGREE</label>
	</field>
    <p class="cnfrm" id="bra-div"></p>

    <field class="float-label">
        <input type="text" id="branch" name="branch" placeholder="Branch" tabindex="3">

        <label for="name">BRANCH</label>
    </field>
        
                    <p class="cnfrm" id="yop-div"></p>

    <field class="float-label">
		<input type="text" id="yop" name="yop" placeholder="Year Of Passing" tabindex="4">

		<label for="name">YEAR OF PASSING</label>
	</field>
                        <p class="cnfrm" id="org-div"></p>

    <field class="float-label">
		<input type="text" id="org" name="org" placeholder="Current Organisation" tabindex="5">

		<label for="name">CUR. ORGANISATION</label>
	</field>
                            <p class="cnfrm" id="city-div"></p>

        <field class="float-label">
		<input type="text" id="city" name="city" placeholder="Current City" tabindex="6">

		<label for="name">CUR. CITY</label>
	</field>
                    <p class="cnfrm" id="mobile-div"></p>

    <field class="float-label">
		<input type="text" id="mobile" name="mobile" placeholder="Mobile No" tabindex="7">

		<label for="name">MOBILE NO</label>
	</field>
                        <p class="cnfrm" id="mail-div"></p>

    <field class="float-label">
		<input type="text" id="mail" name="mail" placeholder="Email ID" tabindex="8">

		<label for="name">EMAIL ID</label>
	</field>
                        <p class="cnfrm" id="addr-div"></p>

    <field class="float-label">
		<input type="text" id="addr" name="addr" placeholder="Address" tabindex="9">

		<label for="name">ADDRESS</label>
	</field>
        <div id="profpic"><img id="myImg" src="#"></div>
      <label id="upload">Upload your picture:</label>  <input type="file" value="Upload picture" id="uploadbtn">

      <button type="button" id="confirm">CONFIRM DETAILS</button>
   
      <button type="button" id="gen" onclick="pre()">GENERATE ID CARD</button>
    <input type="hidden" id="roll" name="roll"/>
        </form>

        
        </div>
    
    
    </body>

<style>

    body{
        
        background-color:#0067AD ;
    }
    #preloader{
        margin-top: -1%;
        width: 100%;
        height: 107%;
        background-color:#044D9A; 
    }
    
    .spinner {
  margin-top: 100px auto;
  width: 40px;
  height: 40px;
  position: relative;
}

.cube1, .cube2 {
  background-color: #fff;
  width: 25px;
  height: 25px;
  position: absolute;
  top: 300;
  left: 600;
  
  -webkit-animation: sk-cubemove 1.8s infinite ease-in-out;
  animation: sk-cubemove 1.8s infinite ease-in-out;
}

.cube2 {
  -webkit-animation-delay: -0.9s;
  animation-delay: -0.9s;
}

@-webkit-keyframes sk-cubemove {
  25% { -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5) }
  50% { -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg) }
  75% { -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5) }
  100% { -webkit-transform: rotate(-360deg) }
}

@keyframes sk-cubemove {
  25% { 
    transform: translateX(42px) rotate(-90deg) scale(0.5);
    -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5);
  } 50% { 
    transform: translateX(42px) translateY(42px) rotate(-179deg);
    -webkit-transform: translateX(42px) translateY(42px) rotate(-179deg);
  } 50.1% { 
    transform: translateX(42px) translateY(42px) rotate(-180deg);
    -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg);
  } 75% { 
    transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
    -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
  } 100% { 
    transform: rotate(-360deg);
    -webkit-transform: rotate(-360deg);
  }
}
    #main{
        position: absolute;
        top:70;
        left:120;
        width: 80%;
        height:85%;
        background: white;
        box-shadow: 2px 2px 2px 2px #333;    
    }
    #form{
        
        position: absolute;
        top:10;
        left:400;
        
    }
    #upload{
        color:#0067AD;
	font-family: 'Montserrat',sans-serif;
	position: absolute;
        left:150;
    }
    #signin{
        
        position: absolute;
        top:-50;
        left:300;
        font-family: 'Montserrat',sans-serif;
        color:white;
        font-size: 25px;
    }
    #myImg{
        max-height: 75px;
        max-width: 75px;
        position: absolute;
        top:-50;
        left:20;
        display: none;
    }
    input {
	font-family: 'Montserrat',sans-serif;
		margin-bottom: 5px;
		width: 300px;
		color: #5f5f5f;
		padding:0;
		outline:none;
		margin-left:40%;
		text-indent: 1rem;
		font-size: 18px;
		text-align: left;
		background: #fff;
	}
    #profpic{
        position: absolute;
        background-color: #fff;
        left:500;
        z-index: 100;
        max-width: 75px;
        max-height: 75px;
        
    }
	.float-label {
	position: relative;
	display: block;
	margin-left:40%;
}
.float-label label {
	position: absolute;
	top: 3px;
	left: 1em;
	color:#0067AD;
	font-family: 'Montserrat',sans-serif;
	font-size: 12px;

	opacity: 0;
}
.float-label input[type='text'] {
	height: 40px;
	vertical-align: baseline;
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
	outline: none;
	font-family: 'Montserrat',sans-serif;
	font-size:16px;
	margin-bottom:15px;
	border-top:none;
	border-left:none;
	border-right:none;
	border-bottom-color:black;
}
   input[type='file']
    {
        color:#fff;
        position: absolute;
        left:200;
        width: 100px;
        
    }
.float-label input, .float-label label {
	-webkit-transition: 0.2s ease-in-out;
	-moz-transition: 0.2s ease-in-out;
	-o-transition: 0.2s ease-in-out;
	transition: 0.2s ease-in-out;
}
.float-label input:focus + label {
	opacity: 1;
	display: inline-block;
	height: 20px;

	padding-bottom: 5px;
	color: #0067AD;
}
.float-label input:focus {
	padding-top: 20px;
		border-bottom-color:#0067AD;

}
 .float-label input:focus::-webkit-input-placeholder {
	opacity: 0;
}
.float-label input:focus:-moz-placeholder {
	opacity: 0;
}
.float-label input:focus::-moz-placeholder {
	opacity: 0;
}
.float-label input:focus:-ms-input-placeholder {
	opacity: 0;
}

    #clock{
        filter: blur(3px);
        width: 500px;
        height:550px;
    }
    #image{
        background-color: black;
        width: 50%;
        height: 100%;
        
    }
    #mail1{
        
        color: white;
        z-index: 100;
        position: absolute;
        top:-50;
        left:500;
        font-family:'Montserrat',sans-serif;
        
        font-size: 25px;
    }
    #gen{
    
    width:200px;
    height: 50px;
    background-color:#0067AD;
    border:2px solid #fff;
    font-size:15px;
margin: auto;
    font-family: 'Montserrat',sans-serif;
    z-index: 100;
  position: absolute;
  left: 400;
  right: 0;
  top: 625;
  bottom: 0;
  height: 50px;
  color: #fff;
  outline: none;
transition: all 0.2s ease-in;
    
}
#gen:hover{
    
    color:#0067AD;
    background-color:#fff;
        border:2px solid #0067AD;

}
#confirm{
    
    width:200px;
    height: 50px;
    background-color:#0067AD;
    border:2px solid #fff;
    font-size:15px;
margin: auto;
    font-family: 'Montserrat',sans-serif;
    z-index: 100;
  position: absolute;
  left: 150;
  right: 0;
  top: 625;
  bottom: 0;
  height: 50px;
  color: #fff;
  outline: none;
transition: all 0.2s ease-in;
    
}
#confirm:hover{
    
    color:#0067AD;
    background-color:#fff;
        border:2px solid #0067AD;
        outline: none;

}

    #alumni3{
        
        
        width: 200px;
        font-size:35px;
        color:#fff;
        font-family: 'Spectral SC',serif;
        position: absolute;
        top:40;
        left:100;
        z-index: 100;
    }
    .cnfrm{
        width: 100%;
    }
    #name-div{
        
        position: absolute;
        top:0;
        left:200;
        z-index: 900;
        font-family: 'Montserrat',sans-serif;
        color: #0067AD;
        font-size: 20px;
        display: none;
        
    }
    #dep-div{
        
        position: absolute;
        top:30;
        left:200;
        padding-top: 20px;
        z-index: 900;
        font-family: 'Montserrat',sans-serif;
        color: #0067AD;
        font-size: 20px;
        display: none;
        
    }
    #bra-div{
        
        position: absolute;
        top:80;
        left:200;
        padding-top: 20px;
        z-index: 900;
        font-family: 'Montserrat',sans-serif;
        color: #0067AD;
        font-size: 20px;
        display: none;
        
    }
   #yop-div{
        
        position: absolute;
        top:130;
        left:200;
        padding-top: 20px;
        z-index: 900;
        font-family: 'Montserrat',sans-serif;
        color: #0067AD;
        font-size: 20px;
        display: none;
        
    }
   #org-div{
        
        position: absolute;
        top:180;
        left:200;
        padding-top: 20px;
        z-index: 900;
        font-family: 'Montserrat',sans-serif;
        color: #0067AD;
        font-size: 20px;
        display: none;
        
    }
   #city-div{
        
        position: absolute;
        top:230;
        left:200;
        padding-top: 20px;
        z-index: 900;
        font-family: 'Montserrat',sans-serif;
        color: #0067AD;
        font-size: 20px;
        display: none;
        
    }
   #mobile-div{
        
        position: absolute;
        top:280;
        left:200;
        padding-top: 20px;
        z-index: 900;
        font-family: 'Montserrat',sans-serif;
        color: #0067AD;
        font-size: 20px;
        display: none;
        
    }
   #mail-div{
        
        position: absolute;
        top:330;
        left:200;
        padding-top: 20px;
        z-index: 900;
        font-family: 'Montserrat',sans-serif;
        color: #0067AD;
        font-size: 20px;
        display: none;
        
    }
   #addr-div{
        
        position: absolute;
        top:380;
        left:200;
        padding-top: 20px;
        z-index: 900;
        font-family: 'Montserrat',sans-serif;
        color: #0067AD;
        font-size: 20px;
        display: none;
        
    }
   
    </style>
    
<script src="https://www.gstatic.com/firebasejs/4.8.0/firebase.js"></script>
<script>       
  // Initialize Firebase


  var config = {
    apiKey: "AIzaSyCIJ8rbC4V7R-nd_s9Y9sgbj86NE_Nl9NU",
    authDomain: "ssnalumni-188518.firebaseapp.com",
    databaseURL: "https://ssnalumni-188518.firebaseio.com",
    projectId: "ssnalumni-188518",
    storageBucket: "gs://ssnalumni-188518.appspot.com",
    messagingSenderId: "943468047973"
  };
  firebase.initializeApp(config);
    
    document.getElementById("mail1").innerHTML=sessionStorage.getItem('key') + '!';
        
    var usernode= sessionStorage.getItem('key').substr(0, sessionStorage.getItem('key').indexOf('@')); 
    
        //var fireref1 = database.ref("count");
        
   $("document").ready(function(){
       var database = firebase.database();
        var fireref=database.ref().child(usernode);
       var depmentstr = sessionStorage.getItem('key');
    var depment=depmentstr.substring(depmentstr.lastIndexOf("@")+1,depmentstr.indexOf("."));
       var namestr = sessionStorage.getItem("name");
       var words = namestr.split(" ");
       namestr="";
            var testwd = words[0];
            var firLet = testwd.charAt(0).toUpperCase();
            words[0] = firLet+words[0].slice(1)+" "+words[1].toUpperCase();

       depment=depment.toUpperCase();
       if(depment=="IT" || depment=="CHEM")
        $("#dep").val("B.Tech");
       else if(depment=="MBA")
        $("#dep").val("MBA");
       else
        $("#dep").val("B.E");
       $("#branch").val(depment);
       $("#name").val(words[0]);
       document.getElementById("branch").readOnly=true;
       document.getElementById("dep").readOnly = true;
              document.getElementById("name").readOnly = true;

    
       /*return firebase.database().ref().child('count').once('value').then(function(snapshot) {
                sessionStorage.setItem('cnt',snapshot.val().count);
           console.log(sessionStorage.getItem('cnt'));
  // ...
});*/
       $('#form').on('submit', function (event, force) {
    if (!force) {
        event.preventDefault();
        setTimeout(function () {
            $('#form').trigger('submit', true);
        }, 3000);
    }
});
       
       $("#confirm").click(function(){
                var childData=0;

           var year=$("#yop").val();
        var name=$("#name").val();
        var dept=$("#dep").val();
        var branch=$("#branch").val();
        var addr=$("#addr").val();
        var org=$("#org").val();
        var city=$("#city").val();
        
        var mobile=$("#mobile").val();
        var mail=$("#mail").val();
           
            $("#name").css('visibility','hidden');
            $("#dep").css('visibility','hidden');
            $("#branch").css('visibility','hidden');
            $("#yop").css('visibility','hidden');
            $("#org").css('visibility','hidden');
            $("#city").css('visibility','hidden');
            $("#mobile").css('visibility','hidden');
            $("#mail").css('visibility','hidden');
            $("#addr").css('visibility','hidden');
         $(".cnfrm").css('display','block');
         $(".cnfrm").addClass("animated zoomIn");
         $('#upload').css('display','none');
         $('#uploadbtn').css('display','none');

           document.getElementById("name-div").innerHTML = "Name: "+name;
            document.getElementById("dep-div").innerHTML = 'Degree: '+dept;
            document.getElementById("bra-div").innerHTML = 'Branch: '+branch;
           document.getElementById("yop-div").innerHTML = 'Year of Passing: '+year;
           document.getElementById("org-div").innerHTML = 'Organisation: '+org;
           document.getElementById("city-div").innerHTML = 'City: '+city;
           document.getElementById("mobile-div").innerHTML = 'Mobile No: '+mobile;
           document.getElementById("addr-div").innerHTML = 'Address: '+addr;

           document.getElementById("mail-div").innerHTML='Mail: '+mail;


            var year=$("#yop").val();
        var branch=$("#branch").val();
           
           var fireref1=database.ref().child('Count');//+year+'/'+dept);
        var fd=fireref1.child(year+'/'+branch);
           
    var root=null;
         var reference=firebase.database().ref('Count');
        var q=reference.child(year);

         q.on("value",function(snapshot){
                   
                root=snapshot.val();
                    console.log("root is "+root);
                    snapshot.forEach(function(childSnapshot) 
                {
                  //console.log(childSnapshot.key());
                     childData = childSnapshot.val();
                   // console.log(child);
                 });

              
         if(root!=null)
        {
var root1=null;
console.log("entered...");
var reference1=firebase.database().ref('Count');
        var q1=reference.child(year+'/'+branch);

         q1.on("value",function(snapshot){
                  // console.log(snapshot.val());
                root1=snapshot.val();

                    snapshot.forEach(function(childSnapshot) 
                {
                  //console.log(childSnapshot.key());
                     childData = childSnapshot.val();
                    //console.log(child);
                 });

                console.log("root1 is"+root1);

                if(root1==null)
                {
                    var r=firebase.database().ref('Count/'+year+'/'+branch);
                        r.set({
                            Val:0
                        });
                }
                else
                {

                    var res=firebase.database().ref('Count/'+year+'/'+branch);
                    res.on('value',function(snapshot){
                      //  console.log(snapshot.val());
      snapshot.forEach(function(childSnapshot) 
                {
                  //console.log(childSnapshot.key());
                     childData = childSnapshot.val();
                    console.log("node value is"+childData);
                 });

                    })


                }

              });
            

        }
        else
        {
             var r=firebase.database().ref('Count/'+year+'/'+branch);
                        r.set({
                            Val:0
                        });
        }
});       
           
           
           
       
    var ret=firebase.database().ref().child('Count/'+year+'/'+branch);
ret.on('value', function(snapshot) {
//console.log(snapshot.val());
snapshot.forEach(function(childSnapshot) {
window.childData = childSnapshot.val();
console.log('Value is ' +window.childData);
						  });
});
           
      
           
           
       });

  
        $("#gen").click(function()
                       {
            //var final_count = parseInt(sessionStorage.getItem('cnt'));
            //final_count = final_count +1;

    
       
var ans=parseInt(childData)+1;
                    if(ans<10)
            {
        console.log("the ans is"+ans);
            var rollno = $("#yop").val().slice(-3) + $("#branch").val().substr(0,2) + '00' +ans;
                sessionStorage.setItem("rollno",rollno);
                document.getElementById("roll").value = rollno;

                }
            else if(ans>10 && ans<100)
                {
            var rollno = $("#yop").val().slice(-3) + $("#branch").val().substr(0,2) + '0' +ans;    
sessionStorage.setItem("rollno",rollno);
                document.getElementById("roll").value = rollno;


                }
            else{
                
            var rollno = $("#yop").val().slice(-3) + $("#branch").val().substr(0,2) +ans;
sessionStorage.setItem("rollno",rollno);
                document.getElementById("roll").value = rollno;

                
            }

            var year=$("#yop").val();
            var dept=$("#branch").val();
 		var fireref1=database.ref().child('Count');//+year+'/'+dept);
        var fd=fireref1.child(year+'/'+dept);
    var result1=fd.set({
        Val:ans
    
    
    });
    var now = new Date();
//var two_years_after = new Date(now.getFullYear()+2,now.getMonth(),now.getDay());
var month = now.getUTCMonth()+1;
var day = now.getUTCDate();
var year = now.getUTCFullYear()+2;
var two_years=day+"-"+month+"-"+year;


document.cookie="rollnum="+rollno;

    var result=fireref.set({
        name:$('#name').val(),
        rollno:sessionStorage.getItem("rollno"),
    degree:$('#dep').val(),
    branch:$('#branch').val(),
    year_of_passing:$('#yop').val(),
     city:$("#city").val(),
    cur_organisation:$('#org').val(),
    mobile:$('#mobile').val(),
    email:$('#mail').val(),
    address:$('#addr').val(),
    image_url:sessionStorage.getItem("pic"),
    validity:two_years
    
    });


});
       
       var filebutton = document.getElementById("uploadbtn");
       
filebutton.addEventListener('change',function(e)
          {
        var name=$("#name").val();
       var branch=$("#branch").val();
       var year=$("#yop").val();
                              
    var file = e.target.files[0];
var storageref= firebase.storage().ref(name+'-'+branch+'-'+year);
            
       storageref.put(file);
                                      });
     

             
            
            
   });
       
       
var d;
$(":file").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(this.files[0]);
        }
    });
var specialElementHandlers = {
        '#editor': function (element,renderer) {
            return true;
        }
    };
function imageIsLoaded(e) {
    $('#myImg').attr('src', e.target.result);
    $('#myImg').css('display','block');
    //alert(e.target.result);
    d=e.target.result;


    var image = new Image();

    //Set the Base64 string return from FileReader as source.
                       image.src = e.target.result;

                        


sessionStorage.setItem("pic",d);
  //  console.log(d);
    if(d.complete==undefined)
        console.log("Image not loaded");
};

function pre()
{

    setTimeout(post,5000);
}
  function post()
  {


    var name = $('#name').val();
    var mail = $('#mail').val();
    var dep = $('#dep').val()+"("+$("#branch").val()+")";
    var branch = $('#branch').val();
    var yop = $('#yop').val();
    var city = $('#city').val();
    var addr = $('#addr').val();
    var rollno = sessionStorage.getItem("rollno");
var now = new Date();
//var two_years_after = new Date(now.getFullYear()+2,now.getMonth(),now.getDay());
var month = now.getUTCMonth()+1;
var day = now.getUTCDate();
var year = now.getUTCFullYear()+2;
var two_years=day+"-"+month+"-"+year;
yop=yop+two_years;
var dept = $("#branch").val();
var deg =$('#dep').val()+"("+$("#branch").val()+")";
if(deg=="MBA")
  dept="MBA";
if(dept=="IT"||dept=="CHEM")
  degree="B.Tech(";
else if(dept=="MBA")
  degree="";
else
  degree="B.E(";

if(dept=="MBA")
  dep="MBA";
else
  dep=degree+dept+")";

  $('#preloader').fadeIn().css('display','block');
        $('#main').fadeOut().css('display','none');
      

$.post('mail.php',{postname:name,postdep:dep,postroll:rollno,postyop:yop,postcity:city,postaddr:addr,postdp:d,postmail:mail},function(data){

});

setTimeout(send,3000);
  }  
       

       function send()
       {


        window.location.href = "pdf.php";
       }
//    function pass()
//    {

//     var name = $("#name").val();
//     var dep = $("#dep").val();
//     var yop = $("#yop").val();
//     var city = $("#city").val();
//     var addr = $("#addr").val();
//     var roll = sessionStorage.getItem("rollno");
//     var d = sessionStorage.getItem("pic");

//     $.post('mail.php',{postname:name,postdp:d},function(data){
// alert("Data is "+d);
// });

//    }
    
    
    
    </script>
    
    
   
   
</html>