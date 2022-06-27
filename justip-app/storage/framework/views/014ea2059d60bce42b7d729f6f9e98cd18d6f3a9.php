        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src=" <?php echo e(url('images/logo.png')); ?> " alt="Logo" width="150"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">


                    <div class="user-area dropdown float-right">

                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <h5 style="padding-top: 15px; padding-bottom: 15px; padding-right: 5px"> <?php echo e(auth()->user()->name); ?> </h5>
                            <img class="user-avatar rounded-circle" src=" <?php echo e(url('images/admin.jpg')); ?> " alt="User Avatar">

                        </a>

                        <div class="user-menu dropdown-menu">                            
                            <form action=" <?php echo e(route('logout')); ?> " method="POST">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i>Logout</button>
                        </form>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header --><?php /**PATH D:\Kuliah\Semester 6\RPL Desain dan Implementasi\Tugas Besar\justip-app-admin\resources\views/includes/navbar.blade.php ENDPATH**/ ?>