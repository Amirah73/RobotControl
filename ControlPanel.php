<!DOCTYPE html>
<html lang="en">

<head>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>TASK1-CONTROL PANEL</title>

<style>

.main-wrapper {
		border-radius: 20px;
		background-color: white;
		padding: 20px;
    height:450px;
    width: 800px;
		box-shadow: 0 6px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
		position: relative;
}

.centered{
    position:absolute;
    left:25%;
    top:30%;
    margin-left:-50px;
    margin-top:-50px;
}

p{
    text-align: center;
    font-size: 3em;
    font-weight: 300;
    letter-spacing: 0.1em;
    font-family: 'Lato', sans-serif;
}

.button{
    position: absolute;
    cursor: pointer;
    width: 120px;
    height: 80px;
    font-size: 50PX;
    font-family: Impact, Charcoal, sans-serif;
    border-radius: 20%;
    border: none;
    outline: none;
    background-color: #03a9f4;
    box-shadow: 3px 3px 7px #333;
    &:active {
    		box-shadow: none;
    	}
    }

    /* Darker background on mouse-over */
.btn:hover {
  background-color: BLACK;
}

     body {
	background-color: #455a64;
}

 </style>
</head>
<body>


<div class="main-wrapper centered">

  <p>Robot Control Panel</p>

    <form target="_blank" action="submit.php" method="post">

<button class="button" type="submit" name="action" value="f" style= "top: 30%;left:44%;" ><i class="fa fa-arrow-up"></i></button>
<button class="button" type="submit" name="action" value="r" style= "right:27%; top:50%" ><i class="fa fa-arrow-right"></i></button>
<button class="button" type="submit" name="action" value="s" style= "left:45%; top:48%; border-radius: 100%; background-color: red; width: 100px; height: 100px;" >ll</button>
<button class="button" type="submit" name="action"  value="l" style= "left:29%; top: 50%" ><i class="fa fa-arrow-left"></i></button>
<button class="button" type="submit" name="action" value="b" style= "top: 70%;left:44%;" ><i class="fa fa-arrow-down"></i></button>

   </form>

</div>
  </body>
  </html>
