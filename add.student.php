<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/sub-style.css">
    <link rel="stylesheet" href="asset/css/all.css">
    <script src="https://kit.fontawesome.com/91011735a7.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- side pannel -->
    <main class="side-pannel">

        <!-- profile-image here -->
        <div class="user-section">
            <div class="image">
                <i class="fas fa-user" style="padding-top: 10px; color: white; font-size: 60px;"></i>
            </div>
            <div class="title">
                <h1>Admin</h1>
                <?php if($row = $result1->fetch_assoc()): ?>
                    <p><?= $row['username']; ?></p>
                <?php endif; ?>
            </div>
        </div>

        <!-- links / list  -->

        <article class="links">
            <ul>
                <li id="Li" onclick="window.location.replace('index.php');"> <i class="fa-solid fa-dashboard" style="padding-right: 20px;"></i> Dashboard </li>
                <li id="Li"> <i class="fas fa-user-friends" style="padding-right: 20px;"></i> Student Management 
                    <i class="fas fa-angle-down" onclick="nested();"></i>  
                    <ul id="nested-links" class="nest-show">
                        <li><i class="fas fa-user-plus" style="padding-right: 20px;"></i> Add student</li>
                        <li><i class="fas fa-tasks" style="padding-right: 20px;"></i> Manage student</li>
                    </ul>
                </li>
                <li id="Li"> <i class="fa-solid fa-school" style="padding-right: 20px;"></i> Class Management 
                    <i class="fas fa-angle-down" onclick="dropstaff();"></i>
                    <ul id="nested-link-3" class="nest-show">
                        <li><i class="fas fa-user-plus" style="padding-right: 20px;"></i> Add class</li>
                        <li><i class="fas fa-tasks" style="padding-right: 20px;"></i> Manage classes</li>
                    </ul>
                </li>
                <li id="Li"> <i class="fas fa-user-friends" style="padding-right: 20px;"></i> Staff Management 
                    <i class="fas fa-angle-down" onclick="nested1();"></i>
                    <ul id="nested-links-2" class="nest-show">
                        <li><i class="fas fa-user-plus" style="padding-right: 20px;"></i> Add staff</li>
                        <li><i class="fas fa-tasks" style="padding-right: 20px;"></i> Manage Staffs</li>
                    </ul>
                </li>
                <li id="Li"> <i class="fas fa-file-alt" style="padding-right: 20px;"></i> Application</li>
                <li id="Li"> <i class="fa-solid fa-gear" style="padding-right: 20px;"></i> Setting </li>
            </ul>
        </article>
    </main>

    <!-- top header for title -->

    <header class="top-header">
        <!-- logo -->
         <div class="logo">
            <img src="logo.png" alt="logo" width="90">
         </div>

         <!-- title -->

         <div class="header-title">
            <h2>Upendo Day Care Management System</h2>
         </div>

         <!-- LogOut area -->

         <div class="log-out">
            <h3> <i class="fa fa-sign-out"></i> </h3>
         </div>
    </header>

    <!-- section title -->

    <section class="section-title">
        <h3>New Student</h3>
    </section>

    <section class="detail-form">
        <form method="post" action="" class="main-form-1">
            <fieldset style="width: 100%; padding: 10px 14px; border-radius: 10px;">
                <legend>Student Details</legend>
            <input type="text" name="first_name" id="" placeholder="First name" required>
            <input type="text" name="middle_name" id="" placeholder="Middle name" required>
            <input type="text" name="surname" id="" placeholder="Surnames" required>
            <select name="gender" id=""  required>
                <option >Sex</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <input type="text" name="date_registration" id="" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="D.O.B" required>
         </fieldset>

         <fieldset style="width: 100%; padding: 10px 14px; border-radius: 10px; margin-top: 35px;">
            <legend>Class Details</legend>
        <select name="class_level" id=""  required>
            <option >Class</option>
            <option value="baby class">Baby Class</option>
            <option value="pre unity">Pre Unity</option>
            <option value="nursery">Nursery</option>
            <option value="class 1">Class 1</option>
            <option value="class 2">Class 2</option>
            <option value="class 3">Class 3</option>
            <option value="class 4">Class 4</option>
            <option value="class 5">Class 5</option>
            <option value="class 6">Class 6</option>
        </select>

        <select name="stream" id=""  >
            <option  style="user-select: none;">Stream</option>
            <option value="stream A">Stream A</option>
            <option value="stream B">Stream B</option>
            <option value="stream C">Stream C</option>
        </select>
        <input type="text" name="Registration_date" id="" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Registration date" required>
     </fieldset>

     <fieldset style="width: 100%; padding: 10px 14px; border-radius: 10px; margin-top: 35px; margin-bottom: 35px;">
        <legend>Gurdians Details</legend>
    <input type="text" name="F_Name" id="" placeholder="First name" required>
    <input type="text" name="Last_name" id="" placeholder="Last name" required>
    <select name="relation" id=""  required>
        <option >Relationship</option>
        <option value="father">Father</option>
        <option value="mother">Mother</option>
        <option value="others">Others</option>
    </select>
    <input type="text" name="resident" id="" placeholder="Resident Address" required>
    <input type="number" name="postal_address" id="" placeholder="Poster Address" required>
    <input type="number" name="phone1" id="" placeholder="Phone Number 1" required>
    <input type="number" name="phone2" id="" placeholder="Phone Number 2" required>
    <input type="email" name="email" id="" placeholder="Email" >
    <!-- <input type="text" name="" id="" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Registration date" required> -->
    <br>
    <button type="submit" name="add" class="btn-submit">Add</button>
 </fieldset>

        </form>
    </section>





































    
    <!-- footer -->

    <footer class="footer">
        <p>Upendo Day Care Management System</p>
        <p>Version 0.0.1</p>
        <p>&copy; 2024</p>
    </footer>
    


    <!-- javascript -->

    <script src="javascript/main.js"></script>

    <script>
        if (window.history.replaceState) {
             window.history.replaceState(null,null,window.location.('page.php'));
}
</script>

</body>
</html>

