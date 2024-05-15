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
    <div class="container" style="margin: 0px; padding-left: 0px; margin-bottom: 0px; margin-left: 0px; margin-right: 0px; height: 600px; padding-bottom: 0px; padding-right: 0px; max-width: 1535px;">
        <div class="row" style="margin-right: 0px; margin-left: 0px; background: var(--bs-danger-text-emphasis); height: 45px; display: flex; align-items: center; justify-content: space-between;">
            <div class="col" style="display: flex; align-items: center;">
                <img src="assets/img/spc-logo.png" style="width: 35px; height: 30px; margin-right: 10px;">
                <h1 style="font-size: 17px; color: var(--bs-body-bg); margin-bottom: 0px; font-family: 'Goblin One', serif;">Parents Dashboard</h1>
            </div>
            <div class="col" style="display: flex; justify-content: flex-end;">
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
                        <li><a class="dropdown-item" href="{{ route('login') }}"><i class="fas fa-sign-out-alt"></i> Log out</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row" style="margin-right: 0px;margin-left: 0px;background: rgba(225,180,180,0.57);height: 45px;margin-top: 10px;">
            <div class="col">
                <h1 style="font-size: 20px;color: var(--bs-emphasis-color);margin-bottom: 0px;padding-left: 15px;padding-top: 9px;font-family: Roboto, sans-serif;font-weight: bold;">
                    Jerald Corbo
                </h1>
            </div>
        </div>

        <div class="row" style="margin-right: 0px;margin-left: 0px;background: var(--bs-body-bg);height: 90px;margin-top: 0px;">
            <div class="col" style="padding: 3px;margin-left: 15px;">
                <div class="image-container">
                    <img src="assets/img/image%209.png?h=ff771f15ee7a9a7a1ebef213ab13cf82" style="max-width: 250px;height: 250px;border-radius: 5px;">
                </div>
            </div>
            <div class="col" style="padding: 3px;margin-left: 15px;">
                <div class="image-container">
                    <img src="assets/img/image%2010.png?h=40f2a48875b792eabb5641d5050178da" style="height: 250px;max-width: 250px;border-radius: 5px;">
                </div>
            </div>
            <div class="col" style="padding: 3px;margin-left: 15px;">
                <div class="image-container">
                    <img src="assets/img/image%2011.png?h=54ca9203f3a1bfd64e05ad7de6ac47ce" style="height: 250px;max-width: 250px;border-radius: 5px;">
                </div>
            </div>
            <div class="col" style="padding: 3px;margin-left: 15px;">
                <div class="image-container">
                    <img src="assets/img/image%2012.png?h=58a28891757327117caf067f453dd0f6" style="height: 250px;max-width: 250px;border-radius: 5px;">
                </div>
            </div>
            <div class="col" style="padding: 3px;margin-left: 15px;">
                <div class="image-container">
                    <img src="assets/img/image%2013.png?h=99f32436e4c8c897b3176fcd8169e3d8" style="height: 250px;max-width: 250px;border-radius: 5px;">
                </div>
            </div>
            <div class="col" style="padding: 3px;margin-left: 15px;">
                <div class="image-container">
                    <img src="assets/img/image%2014.png?h=c2a115cdc988461b626d8bad24e7c703" style="height: 250px;max-width: 250px;border-radius: 5px;">
                </div>
            </div>
        </div>
        <hr style="margin-top: 455px; height: 2px; background-color: black;">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>