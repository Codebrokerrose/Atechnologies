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
            <img src="https://media.designrush.com/inspirations/543787/conversions/acr-tech-logo-design-preview_mobile.jpg">
        </div>
        <div class="container">
            <img src="https://images-platform.99static.com//VHGAB3kRm0TwB2zrtzzRPlemWTM=/0x0:1080x1080/fit-in/590x590/99designs-contests-attachments/154/154682/attachment_154682961">
        </div>
        <div class="container">
            <img src="https://fabrikbrands.com/wp-content/uploads/Technology-Company-Logos-8-1200x750.png">
        </div>
      </div>
      
      <!-- <div class="client">
        <div class="container">
            <img src="data:image/png;base64,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">
        </div>
        <div class="container">
            <img src="data:image/png;base64,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">
        </div>
        <div class="container">
            <img src="data:image/png;base64,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">
        </div>
      </div> -->

<div class="client">
        <div class="container">
            <img src="https://media.designrush.com/inspirations/543787/conversions/acr-tech-logo-design-preview_mobile.jpg">
        </div>
        <div class="container">
            <img src="https://images-platform.99static.com//VHGAB3kRm0TwB2zrtzzRPlemWTM=/0x0:1080x1080/fit-in/590x590/99designs-contests-attachments/154/154682/attachment_154682961">
        </div>
        <div class="container">
            <img src="https://fabrikbrands.com/wp-content/uploads/Technology-Company-Logos-8-1200x750.png">
        </div>
      </div>
</div>
</div>
</body>
</html>