<style>
/* Scoped styles for the Admission Page */
.admission-page {
    font-family: Arial, sans-serif;
    background-color: #f5f7fa; /* Light, neutral background */
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
   /* height: 100vh; /* Full viewport height */
    box-sizing: border-box;
}

.admission-container {
    display: grid;
    /* grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); */
    gap: 20px; /* Space between buttons */
    width: 100%;
    max-width: 800px;
    padding: 20px;
    margin-top: 50px;
    margin-bottom:50px;
    background-color: #ffffff; /* White card-style background */
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for professionalism */
}

.admission-item {
    background-color:rgb(112, 173, 233); /* Professional blue */
    color: white;
    font-size: 16px;
    font-weight: bold;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-align: center;
    transition: transform 0.3s, background-color 0.3s;
    text-shadow:1px 0px gray;
}

.admission-item:hover {
    background-color: #0056b3; /* Darker blue on hover */
    transform: translateY(-5px); /* Slight lift on hover */
}

/* Responsive Design */
@media screen and (max-width: 600px) {
    .admission-container {
        grid-template-columns: 1fr; /* Stack buttons on small screens */
    }
}
</style>

    <div class="admission-page">
        <div class="admission-container">
            <!-- <button type="button" class="admission-item" onclick="" >Admission Helper</button> -->
            <button type="button" class="admission-item" onclick = "location.href = 'teach.php';">Teachers corner</button>
            <button type="button" class="admission-item" onclick = " location.href = 'socialwork.php';">Social Work</button>
            <button type="button" class="admission-item" onclick = " location.href = 'internship.php';">Internship</button>
            <button type="button" class="admission-item">Live Project</button>
            <!-- <button type="button" class="admission-item">Services</button> -->
        </div>
    </div>

