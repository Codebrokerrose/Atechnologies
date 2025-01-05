<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="./image/logo.jpeg" type="image/x-icon">
<style>
/* Scope all gallery styles under the .gallery-container class */
.gallery-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  gap: 10px;
}

.gallery-container div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: none; /* Removes float to avoid layout disruptions */
  width: 250px;
  box-sizing: border-box; /* Ensures padding doesn’t affect width */
}

.gallery-container div.gallery:hover {
  border: 1px solid #777;
}

.gallery-container div.gallery img {
  width: 100%;
  height: 300px;
  display: block; /* Ensures proper layout */
}

.gallery-container div.desc {
  padding: 10px;
  text-align: center;
  font-size: 14px;
  color: #555;
  word-wrap: break-word;
}
</style>
</head>
<body>
<h1 style="text-align:center; padding:20px;"> Our Galary </h1>
<div class="gallery-container">

<div class="gallery">
    <a target="_blank" href="./image/1.jpeg">
      <img src="./image/1.jpeg" alt="Cinque Terre">
    </a>
    <div class="desc">Internships & Workshops</div>
  </div>
    
  <div class="gallery">
    <a target="_blank" href="./image/4.jpeg">
      <img src="./image/4.jpeg" alt="Cinque Terre">
    </a>
    <div class="desc">Internships & Workshops</div>
  </div>

  <div class="gallery">
    <a target="_blank" href="./image/3.jpeg">
      <img src="./image/3.jpeg" alt="Forest">
    </a>
    <div class="desc">Internships & Workshops</div>
  </div>

  <div class="gallery">
    <a target="_blank" href="./image/2.jpeg">
      <img src="./image/2.jpeg" alt="Northern Lights">
    </a>
    <div class="desc">Internships & Workshops</div>
  </div>
  <div class="gallery">
    <a target="_blank" href="./image/5.jpeg">
      <img src="./image/5.jpeg" alt="Northern Lights">
    </a>
    <div class="desc">Internships & Workshops</div>
  </div>
  <div class="gallery">
    <a target="_blank" href="./image/6.jpeg">
      <img src="./image/6.jpeg" alt="Northern Lights">
    </a>
    <div class="desc">Internships & Workshops</div>
  </div>

  <div class="gallery">
    <a target="_blank" href="./image/7.jpeg">
      <img src="./image/7.jpeg" alt="Northern Lights">
    </a>
    <div class="desc">Internships & Workshops</div>
  </div>
  <div class="gallery">
    <a target="_blank" href="./image/8.jpeg">
      <img src="./image/8.jpeg" alt="Northern Lights">
    </a>
    <div class="desc">Internships & Workshops</div>
  </div>
  <div class="gallery">
    <a target="_blank" href="./image/9.jpeg">
      <img src="./image/9.jpeg" alt="Northern Lights">
    </a>
    <div class="desc">Internships & Workshops</div>
  </div>

  <div class="gallery">
    <a target="_blank" href="./image/internship.jpeg">
      <img src="./image/internship.jpeg" alt="Mountains">
    </a>
    <div class="desc">Conducted a
workshop on
Internship Program
at Dhruba Chand
Halder College for
over 500 students
on 20.12.2024.</div>
  </div>
</div>


<br>

</body>
</html>
