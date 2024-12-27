<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
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
                <li id="Li"> <i class="fa-solid fa-dashboard" style="padding-right: 20px;"></i> Dashboard </li>
                <li id="Li"> <i class="fas fa-user-friends" style="padding-right: 20px;"></i> Student Management 
                    <i class="fas fa-angle-down" onclick="nested();"></i>  
                    <ul id="nested-links" class="nest-show">
                        <li onclick="window.location.replace('page.php');"><i class="fas fa-user-plus" style="padding-right: 20px;"></i> Add student</li>
                        <li><i class="fas fa-tasks" style="padding-right: 20px;"></i> Manage student</li>
                    </ul>
                </li>
                <li id="Li"> <i class="fa-solid fa-school" style="padding-right: 20px;"></i> Class Management 
                    <i class="fas fa-angle-down" onclick="dropstaff();"></i>
                    <ul id="nested-link-3" class="nest">
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

            <?php echo "The time is " . date("h:i:sa");?>
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

    <!-- student number summary -->

    <section>
        <article class="student-box">
            <div class="total-by-number">
                <h2>0</h2>
                <div class="sub-words">
                    <p>Total students</p>
                </div>
                
                <div class="icon-icon">
                    <i class="fa-solid fa-user-friends"></i>
                </div>
        </article>
        <!-- class box -->
        <article class="class-box">
            <div class="total-by-number">
                
                <h2>0</h2>
                <div class="sub-words">
                    <p>Total classes</p>
                </div>
                
                <div class="icon-icon">
                    <i class="fa-solid fa-school"></i>
                </div>
        </article>

        <!-- staff box -->
        <article class="staff-box">
            <div class="total-by-number">

                <h2>0</h2>
                <div class="sub-words">
                    <p>Total staffs</p>
                </div>
                
                <div class="icon-icon">
                    <i class="fa-solid fa-user-friends"></i>
                </div>
        </article>
    </section>

    <!-- table for displaying recent information -->

    <section class="body-section">
        <div class="table-table-1">
            <table>
                <thead>
                    <tr>
                        <th>surname</th>
                        <th>Class</th>
                        <th>Stream</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                
                    <td><?= strtoupper($row['surname']); ?></td>
                    <td><?= strtoupper($row['class_level']); ?></td>
                    <td><?= strtoupper($row['stream']); ?></td>
                    <td> <a href="delete.php  "> <i class="fas fa-trash" style="cursor: pointer;"></i></a> </td>

                </tr>
                <?php endwhile; ?>
                

                
            </table>
        </div>


        <!-- second/right table -->

        <div class="table-table-2">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Stream</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tr>
                    <td>Stanley Kambona</td>
                    <td>STD 6</td>
                    <td>B</td>
                </tr>

                
            </table>
        </div>
    </section>

    <!-- footer -->

    <footer class="footer">
        <p>Upendo Day Care Management System</p>
        <p>Version 0.0.1</p>
        <p>&copy; 2024</p>
    </footer>
    


    <!-- javascript -->

    <script src="javascript/main.js"></script>
</body>
</html>