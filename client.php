<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
 .client
{
    display: flex;
    width: 100%;
    justify-content: space-around;
    height:250px;
 background-color:white;
}
.container
{
    width: 350px;
    height: 150px;
    /* padding: 2rem 1rem; */
    background-color: rgb(203, 213, 223) ;
    position: relative;
    display: flex;
    align-items: flex-end;
    box-shadow: 0px 7px 10px rgba(0,0,0,0.5);
       transition: 0.5s ease-in-out;
       margin-top: 80px;
}
.container:hover{
    z-index: 1;
}
.container::before
{
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom,rgb(3, 102, 64),rgb(17, 89, 110));
    z-index: 2;
    transition: 0.5s all;
    opacity: 0.1;
}
.container:hover:before
{
    opacity: 0.5;
   
}
.container img{
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
}
.header
{
    font-size: 50px;
    text-align: center;
    text-shadow: 0px 6px 6px rgb(33, 109, 139);
    
}

.outer-div{
    margin:50px;
}
    </style>
    <div class="outer-div">
    <div>
        <h1 class="header">Few of Our Clients </h1>
        <hr class="purpose-underline">
    </div>
    
    <div class="client">
        <div class="container">
            <img src="./image/lion.jpeg" alt="lion">
        </div>
        <div class="container">
            <img src="./image/tcs.jpeg" alt="tcs">
        </div>
        <div class="container">
            <img src="./image/infosys.webp" alt="infosys">
        </div>
      </div>
      
      

</div>
</body>
</html>