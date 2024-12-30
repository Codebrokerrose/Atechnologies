<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join us</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="../image/logo.jpeg" type="image/x-icon">
    <style>
        /* CSS */
        .back {
            align-items: center;
            appearance: none;
            background-image: radial-gradient(100% 100% at 100% 0, #5adaff 0, #5468ff 100%);
            border: 0;
            border-radius: 6px;
            box-shadow: rgba(45, 35, 66, .4) 0 2px 4px, rgba(45, 35, 66, .3) 0 7px 13px -3px, rgba(58, 65, 111, .5) 0 -3px 0 inset;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-flex;
            font-family: "JetBrains Mono", monospace;
            height: 48px;
            justify-content: center;
            line-height: 1;
            list-style: none;
            overflow: hidden;
            padding-left: 16px;
            padding-right: 16px;
            position: relative;
            text-align: left;
            text-decoration: none;
            transition: box-shadow .15s, transform .15s;
            user-select: none;
            touch-action: manipulation;
            white-space: nowrap;
            font-size: 18px;
            position: absolute;
            right: 20px;
            top: 10px;
            z-index: 1;
        }

        .back:hover {
            box-shadow: rgba(45, 35, 66, .4) 0 4px 8px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
            transform: translateY(-2px);
        }

        .back:active {
            box-shadow: #3c4fe0 0 3px 7px inset;
            transform: translateY(2px);
        }
    </style>
</head>
<body>
    <button onclick="history.go(-1);" class="back"> Back </button>
    <div class="form-container">
        <div class="form-section">
           <span class="write1">A TECHNOLOGY</span>
           <span class="write2">JOIN US!</span>
            <form id="signup-form" action="submit.php" method="POST">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required placeholder="Enter name">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="abc@gmail.com">

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="Password">

                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required placeholder="Phone Number">

                <label for="month">Month</label>
                <select id="month" name="month" required>
                  <option value="" disabled selected>Select Month</option>
                  <option value="January">January</option>
                  <option value="February">February</option>
                  <option value="March">March</option>
                  <option value="April">April</option>
                  <option value="May">May</option>
                  <option value="June">June</option>
                  <option value="July">July</option>
                  <option value="August">August</option>
                  <option value="September">September</option>
                  <option value="October">October</option>
                  <option value="November">November</option>
                  <option value="December">December</option>
                </select>

                <label for="course">Course</label>
                <select id="course" name="course" required>
                  <option value="" disabled selected>Select Course</option>
                  <option value="Mathematics">Mathematics</option>
                  <option value="Science">Science</option>
                  <option value="Programming">Programming</option>
                  <option value="Design">Design</option>
                  <option value="Marketing">Marketing</option>
                </select>

                <label for="semester">Semester</label>
                <select id="semester" name="semester" required>
                  <option value="" disabled selected>Select Semester</option>
                  <option value="1">Semester 1</option>
                  <option value="2">Semester 2</option>
                  <option value="3">Semester 3</option>
                  <option value="4">Semester 4</option>
                  <option value="5">Semester 5</option>
                  <option value="6">Semester 6</option>
                  <option value="7">Semester 7</option>
                  <option value="8">Semester 8</option>
                </select>

                <label for="center">Center Address</label>
                <textarea id="center" name="center" rows="2" required style="color: black;"></textarea>

                <div class="checkbox-container">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">I agree to the Terms and Conditions.</label>
                </div>

                <button class="btn" type="submit">JOIN US</button>
            </form>
        </div>
    </div>
</body>
</html>
