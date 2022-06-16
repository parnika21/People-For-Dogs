<?php $_POST= 500;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People For Dogs</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
   
<style>
       
       body{ 
           font-family: 'Baloo Bhai', cursive;
           color: white;
           margin: 10px;
           padding: 10px;
           background: url('https://images.pexels.com/photos/11683907/pexels-photo-11683907.jpeg?auto=compress&cs=tinysrgb&w=1600');
           background-size: 90%;

        
       }
       .left{
        position: absolute;
        left: 26px;
        top: 20px;
        display : inline-block;
        border: 3px solid black;
        background: black;
       }
       .left img{
        width: 126px;
        
       }
       .left div{
           text-align: center;
       }
       .mid{
        font-size: 7px;
         display:  block;
         width: 29%;
         margin:  15px auto;
         border: 4px solid green;
         
         background-image: linear-gradient(to top, #feada6 0%, #f5efef 100%);


       }
       .right{
        position: absolute;
        right: 34px;
        top: 35px;
        display : inline-block;
        
       }
       .navbar{
        
           display: inline-block;
       }
       .navbar li{   
           display: inline-block; 
           font-size: 23px;
       }
       .navbar li a{
        color: black;
        text-decoration: none;
        padding: 30px 20px;
       }
        .navbar li a:hover, .navbar li a.active{ 
           text-decoration: underline;
           color: grey;
       }
       .btn{
           margin: 0px 9px;
           background-color: black;
           color: white;
           padding: 4px 14px;
           border: 2px solid grey;
           border-radius: 10px;
           font-size: 14px;
           cursor: pointer;
       }
       .btn:hover{
           background-color: red;
       }

       .pay {
        left: 250px;
        top : 55px;
        margin: 250px;
        border: 3px solid green;
        font-size: 25px;
        color: green;
        text-decoration-line: underline;
        text-decoration-style: double;
        background-image: linear-gradient(-20deg, #e9defa 0%, #fbfcdb 100%);
       }
      .pay1{
        left: 139px;
        top : 86px;
        margin: 325px;
        font-size: 25px;
        text-decoration-line: underline;
        text-decoration-style: double;
        }
      

       .bdy{
        position: absolute;
        background-image: cover;
        left: 20px;
        right: 700px;
        top: 475px;
        display : inline-block;
        border: 3px solid grey;
        font-size: 24px;
        color: blue;
        background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
       }
     
       
</style>



<body>

    <header class="header">
        <!--Left box for logo-->
      <div class="left">
          <img src="img/paw.jpg">
          <div> People For Dogs </div>
      </div> 
        
      <!-- Mid box for navbar-->
         <div class="mid">
             <ul class="navbar">
                 <li><a href="#">Home </a></li>
                 <li><a href="#">About Us </a></li>
                 <li><a href="#">Register </a></li>
                 
             </ul>
                

         </div> 
       
         <!-- Right box for buttons--> 
         <div class="right">
         <button class="btn">Call Us</button>
         <button class="btn">Email Us</button>
         </div>

</header>


<form  class="pay1"><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Jhtpl9fqw3xjhT" async> </script> </form>


<div class="bdy">
          
          <div> "Our foundation, People For Dogs, is a non-governmental organization which primarily works for the betterment of roadside,helpless dogs. If you are a dog lover then surely you can help us by donating money for a better cause". </div>
      </div> 

</body>
</html>