<!-- Uses customize css (bootstrap) then use font-awesome for icons -->
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Parents Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Custom Fonts -->
    <!-- <link rel="stylesheet" href="assets/css/Goblin%20One.css?h=da5870ae798b40cb00e3f64eddded650">
    <link rel="stylesheet" href="assets/css/Roboto.css?h=f01c4f84e687561c690c45bf4223d7be"> -->
    <!-- Custom Styles -->
    <!-- <link rel="stylesheet" href="assets/css/Banner-Heading-Image-images.css?h=4f3cfa46e40e236365345fc77963f4b8"> -->
    <!-- Font Awesome Icons -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"> -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <link rel="stylesheet" href="css/users/parents/parents_style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</head>

<body>
    <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <span class="text-light">SPC Student Attendance Monitoring System</span>
                </a>
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-left: 100px;">Menu<iconify-icon icon="mdi:menu-down" style="margin-top: 2px;"></iconify-icon></a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="max-width: 100px;"> <!-- Adjust max-width as needed -->
                        <li><a class="dropdown-item text-truncate" href="#">sample name</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#attendanceModal">Attendance Here</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                    </ul>
                </li>
            </div>
        </nav>

        <div class="names" style="margin-right: 0px; margin-left: 140px; height: 45px; position: absolute; top: 0; margin-top: 70px">
            <div class="col">
                <select name="student-name" id="student-name" style="background: rgba(225,180,180,0.57); border-radius: 4px; cursor: pointer;">
                    <option value="Jerald Corbo">Jerald Corbo</option>
                    <option value="Sherie Barila">Sherie Barila</option>
                    <option value="Jordan Ugtong">Jordan Ugtong</option>
                    <option value="Cathy Amamampang">Cathy Amamampang</option>
                </select>
            </div>
        </div>

        <div style="display: flex; justify-content: center;">
            <div style="display: grid; grid-template-columns: auto auto auto auto; position: absolute; top: 0; margin-top: 78px">
                <button data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 270px; height: 200px; background-color: white; display: flex; justify-content: center; box-shadow: 2px 2px 4px 1px gray; border-radius: 2px; margin-top: 40px; margin-right: 40px;">
                    <div style="display: flex; flex-direction: column">
                        <img style="width: 270px; height: 120px" src="https://www.scu.edu/media/mobi/blog-variants/Ethics-Blog-760x550-760x550.png" alt="">
                        <div style="display: flex; flex-direction: column; margin: 10px 0 0 10px;">
                            <span>GEC SUBJECTS</span>
                            <span>Life and Works of Rizal</span>
                        </div>
                    </div>
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                </div>
                <div style="width: 270px; height: 200px; background-color: white; display: flex; justify-content: center; box-shadow: 2px 2px 4px 1px gray; border-radius: 2px; margin-top: 40px; margin-right: 40px;">
                    <div style="display: flex; flex-direction: column">
                        <img style="width: 270px; height: 120px" src="https://www.scu.edu/media/mobi/blog-variants/Ethics-Blog-760x550-760x550.png" alt="">
                        <div style="display: flex; flex-direction: column; margin: 10px 0 0 10px;">
                            <span>GEC SUBJECTS</span>
                            <span>Life and Works of Rizal</span>
                        </div>
                    </div>
                </div>
                <div style="width: 270px; height: 200px; background-color: white; display: flex; justify-content: center; box-shadow: 2px 2px 4px 1px gray; border-radius: 2px; margin-top: 40px; margin-right: 40px;">
                    <div style="display: flex; flex-direction: column">
                        <img style="width: 270px; height: 120px" src="https://www.scu.edu/media/mobi/blog-variants/Ethics-Blog-760x550-760x550.png" alt="">
                        <div style="display: flex; flex-direction: column; margin: 10px 0 0 10px;">
                            <span>GEC SUBJECTS</span>
                            <span>Life and Works of Rizal</span>
                        </div>
                    </div>
                </div>
                <div style="width: 270px; height: 200px; background-color: white; display: flex; justify-content: center; box-shadow: 2px 2px 4px 1px gray; border-radius: 2px; margin-top: 40px; margin-right: 40px;">
                    <div style="display: flex; flex-direction: column">
                        <img style="width: 270px; height: 120px" src="https://www.scu.edu/media/mobi/blog-variants/Ethics-Blog-760x550-760x550.png" alt="">
                        <div style="display: flex; flex-direction: column; margin: 10px 0 0 10px;">
                            <span>GEC SUBJECTS</span>
                            <span>Life and Works of Rizal</span>
                        </div>
                    </div>
                </div>
                <div style="width: 270px; height: 200px; background-color: white; display: flex; justify-content: center; box-shadow: 2px 2px 4px 1px gray; border-radius: 2px; margin-top: 40px; margin-right: 40px;">
                    <div style="display: flex; flex-direction: column">
                        <img style="width: 270px; height: 120px" src="https://www.scu.edu/media/mobi/blog-variants/Ethics-Blog-760x550-760x550.png" alt="">
                        <div style="display: flex; flex-direction: column; margin: 10px 0 0 10px;">
                            <span>GEC SUBJECTS</span>
                            <span>Life and Works of Rizal</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>