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
    <link rel="stylesheet" href="assets/css/Goblin%20One.css?h=da5870ae798b40cb00e3f64eddded650">
    <link rel="stylesheet" href="assets/css/Roboto.css?h=f01c4f84e687561c690c45bf4223d7be">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/Banner-Heading-Image-images.css?h=4f3cfa46e40e236365345fc77963f4b8">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <style>.dropdown-menu{background-color: #D3CDCD;border: none;box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);border-radius: 4px;padding: 0}.dropdown-item{display: flex;align-items: center;padding: 10px 15px;color: #333;text-decoration: none;transition: background-color 0.2s ease-in-out}.dropdown-item:hover{background-color: #bcbcbc}.dropdown-item i{width: 20px;text-align: center;margin-right: 10px}</style>

</head>

<body>
    <div class="container" style="margin: 0px; padding-left: 0px; margin-bottom: 0px; margin-left: 0px; margin-right: 0px; height: 600px; padding-bottom: 0px; padding-right: 0px; max-width: 100%;">
        <div class="row" style="margin-right: 0px; margin-left: 0px; background: var(--bs-danger-text-emphasis); padding-bottom: 120px; display: flex; align-items: center; justify-content: space-between;">
            <div class="col" style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid white; padding-bottom: 10px; margin-top: 4px;">
                <h1 style="font-size: 17px; color: var(--bs-body-bg); margin-bottom: 0px;">Parent Dashboard</h1>
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" type="button" id="menuButton" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #f8f9fa; color: #333; border: 1px solid #ddd; padding: 5px 10px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.2); cursor: pointer; text-decoration: none;">
                        Menu
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="menuButton">
                        <!-- User info section -->
                        <li style="padding: 10px 15px; border-bottom: 1px solid #e1e1e1;">
                            <img src="https://add.pics/images/2024/03/20/profile-icon.png" alt="Profile Image" class="profile-image" style="width: 20px; margin-right: 10px;">
                            <span>Jerald Corbo<br>jerald_corbo0000@spc.com</span>
                        </li>
                        <!-- Menu items -->
                        <li><a class="dropdown-item" href="#"><i class="fas fa-user"></i> View profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Settings</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-keyboard"></i> Keyboard shortcuts</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-building"></i> Company profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-users"></i> Team</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-envelope-open-text"></i> Invite colleagues</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-stream"></i> Changelog</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-globe"></i> Slack Community</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-life-ring"></i> Support</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-code"></i> API</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="{{ route('login') }}"><i class="fas fa-sign-out-alt"></i>Log out</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row" style="margin-right: 0px; margin-left: 0px; height: 45px; position: absolute; top: 0; margin-top: 70px">
            <div class="col">
                <select name="student-name" id="student-name" style="background: rgba(225,180,180,0.57); border-radius: 4px; cursor: pointer;">
                    <option value="Student">{{ Auth::user()->name }}</option>
                    <option value="Sherie Barila">Sherie Barila</option>
                    <option value="Jordan Ugtong">Jordan Ugtong</option>
                    <option value="Cathy Amamampang">Cathy Amamampang</option>
                </select>
            </div>
        </div>

        <div style="display: flex; justify-content: center;">
            <a href="#subject1" data-toggle="modal" data-target="#subject1Modal" style="text-decoration: none; color: inherit;">
                <div style="display: grid; grid-template-columns: auto auto auto auto; position: absolute; top: 0; margin-top: 78px">
                    <div style="width: 270px; height: 200px; background-color: white; display: flex; justify-content: center; box-shadow: 2px 2px 4px 1px gray; border-radius: 2px; margin-top: 40px; margin-right: 40px;">
                        <div style="display: flex; flex-direction: column">
                            <img style="width: 270px; height: 120px" src="https://www.scu.edu/media/mobi/blog-variants/Ethics-Blog-760x550-760x550.png" alt="">
                            <div style="display: flex; flex-direction: column; margin: 10px 0 0 10px;">
                                <span>GEC SUBJECTS</span>
                                <span>Life and Works of Rizal</span>
                            </div>
                        </div>
                    </div>
            </a>
            <a href="#subject2" data-toggle="modal" data-target="#subject2Modal" style="text-decoration: none; color: inherit;">
                <div style="width: 270px; height: 200px; background-color: white; display: flex; justify-content: center; box-shadow: 2px 2px 4px 1px gray; border-radius: 2px; margin-top: 40px; margin-right: 40px;">
                    <div style="display: flex; flex-direction: column">
                        <img style="width: 270px; height: 120px" src="https://www.scu.edu/media/mobi/blog-variants/Ethics-Blog-760x550-760x550.png" alt="">
                        <div style="display: flex; flex-direction: column; margin: 10px 0 0 10px;">
                            <span>GEC SUBJECTS</span>
                            <span>Life and Works of Rizal</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#subject3" data-toggle="modal" data-target="#subject3Modal" style="text-decoration: none; color: inherit;">
                <div style="width: 270px; height: 200px; background-color: white; display: flex; justify-content: center; box-shadow: 2px 2px 4px 1px gray; border-radius: 2px; margin-top: 40px; margin-right: 40px;">
                    <div style="display: flex; flex-direction: column">
                        <img style="width: 270px; height: 120px" src="https://www.scu.edu/media/mobi/blog-variants/Ethics-Blog-760x550-760x550.png" alt="">
                        <div style="display: flex; flex-direction: column; margin: 10px 0 0 10px;">
                            <span>GEC SUBJECTS</span>
                            <span>Life and Works of Rizal</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#subject4" data-toggle="modal" data-target="#subject4Modal" style="text-decoration: none; color: inherit;">
                <div style="width: 270px; height: 200px; background-color: white; display: flex; justify-content: center; box-shadow: 2px 2px 4px 1px gray; border-radius: 2px; margin-top: 40px; margin-right: 40px;">
                    <div style="display: flex; flex-direction: column">
                        <img style="width: 270px; height: 120px" src="https://www.scu.edu/media/mobi/blog-variants/Ethics-Blog-760x550-760x550.png" alt="">
                        <div style="display: flex; flex-direction: column; margin: 10px 0 0 10px;">
                            <span>GEC SUBJECTS</span>
                            <span>Life and Works of Rizal</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#subject5" data-toggle="modal" data-target="#subject5Modal" style="text-decoration: none; color: inherit;">
                <div style="width: 270px; height: 200px; background-color: white; display: flex; justify-content: center; box-shadow: 2px 2px 4px 1px gray; border-radius: 2px; margin-top: 40px; margin-right: 40px;">
                    <div style="display: flex; flex-direction: column">
                        <img style="width: 270px; height: 120px" src="https://www.scu.edu/media/mobi/blog-variants/Ethics-Blog-760x550-760x550.png" alt="">
                        <div style="display: flex; flex-direction: column; margin: 10px 0 0 10px;">
                            <span>GEC SUBJECTS</span>
                            <span>Life and Works of Rizal</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#subject6" data-toggle="modal" data-target="#subject6Modal" style="text-decoration: none; color: inherit;">
                <div style="width: 270px; height: 200px; background-color: white; display: flex; justify-content: center; box-shadow: 2px 2px 4px 1px gray; border-radius: 2px; margin-top: 40px; margin-right: 40px;">
                    <div style="display: flex; flex-direction: column">
                        <img style="width: 270px; height: 120px" src="https://scontent.fmnl13-2.fna.fbcdn.net/v/t39.30808-6/277575661_292515559703525_6115086836585420856_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGNRsPiTdFRbT9xhnhN3mkb_AQgj38_jGj8BCCPfz-MaCu0BhNzBP2MKF7wAesQ5RRs3GwO_b0R_rA7NI87xs5C&_nc_ohc=n7dDPaQSW7QQ7kNvgHyFcYj&_nc_ht=scontent.fmnl13-2.fna&oh=00_AYDujLo-ZCFrL18Nn02sMorbBYdMcmLp1nU99WzqoBteJQ&oe=66635530" alt="">
                        <div style="display: flex; flex-direction: column; margin: 10px 0 0 10px;">
                            <span>GATE PASS</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Modal for subject1 -->
    <div class="modal fade" id="subject1Modal" tabindex="-1" role="dialog" aria-labelledby="subject1ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="subject1ModalLabel">Subject 1 Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Content for Subject 1 goes here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Repeat for other subjects -->
    <div class="modal fade" id="subject2Modal" tabindex="-1" role="dialog" aria-labelledby="subject2ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="subject2ModalLabel">Subject 2 Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Content for Subject 2 goes here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Repeat for other subjects -->
    <div class="modal fade" id="subject3Modal" tabindex="-1" role="dialog" aria-labelledby="subject3ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="subject3ModalLabel">Subject 3 Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Content for Subject 3 goes here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Repeat for other subjects -->
    <div class="modal fade" id="subject4Modal" tabindex="-1" role="dialog" aria-labelledby="subject4ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="subject4ModalLabel">Subject 4 Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Content for Subject 4 goes here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Repeat for other subjects -->
    <div class="modal fade" id="subject5Modal" tabindex="-1" role="dialog" aria-labelledby="subject5ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="subject3ModalLabel">Subject 5 Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Content for Subject 5 goes here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Repeat for other subjects -->
    <div class="modal fade" id="subject6Modal" tabindex="-1" role="dialog" aria-labelledby="subject6ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="subject3ModalLabel">Gatepass Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Content for Gatepass goes here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Modals -->
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>