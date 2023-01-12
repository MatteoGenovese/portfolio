<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title> BoolBnb <?php echo $__env->yieldContent('title'); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">

        <nav id="BoolBnbHeaderNavbar" class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/boolbnb')); ?>">
                    <img src="<?php echo e(asset('storage/asset/img/logo.jpg')); ?>" alt="brand logo">
                </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link text-decoration-none text-secondary" href="<?php echo e(url('/boolbnb')); ?>">
                        Home
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-decoration-none text-secondary mx-lg-2" href="<?php echo e(url('/boolbnb/ricerca-avanzata')); ?>">
                        Ricerca
                    </a>
                  </li>
                  <?php if(auth()->guard()->check()): ?>
                    <li class="nav-item">
                        <a class="nav-link text-decoration-none text-secondary position-relative" href="<?php echo e(route("user.apartments.index")); ?>">
                            <span class=" <?php echo e(request()->routeIs('user.apartments.index') ? 'nav-brand-active' : ''); ?>">I tuoi annunci</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-decoration-none text-secondary position-relative mx-lg-2" href="<?php echo e(route('user.apartments.create')); ?>">
                            <span class=" <?php echo e(request()->routeIs('user.apartments.create') ? 'nav-brand-active' : ''); ?>">Crea</span>
                        </a>
                    </li>
                  <?php endif; ?>

                <!-- Guest not registered, Authentication Links -->
            </ul>
            <?php if(auth()->guard()->guest()): ?>
                <div class="d-lg-flex">
                    <div class="nav-item d-block d-lg-inline position-relative text-secondary mx-lg-2">
                        <a class="nav-link mx-lg-2 <?php echo e(request()->routeIs('login') ? 'nav-brand-active' : ''); ?>" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                    </div>
                    <?php if(Route::has('register')): ?>
                        <div class="nav-item d-block d-lg-inline position-relative text-secondary my-2 m-lg-0">
                            <a class="nav-link mx-lg-2 <?php echo e(request()->routeIs('register') ? 'nav-brand-active' : ''); ?>" href="<?php echo e(route('register')); ?>">Registrati</a>
                        </div>
                    <?php endif; ?>
                </div>

            <?php else: ?>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle brand-color-prime" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo e(Auth::user()->name); ?>

                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>
                        </li>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>
                    </ul>
                </div>
            <?php endif; ?>
              </div>
            </div>
          </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

    <?php echo $__env->yieldContent('bottom-scripts'); ?>
</body>
</html>
<?php /**PATH /Users/matteogenovese/Programmazione/portfolio-laravel/portfolio/resources/views/layouts/app.blade.php ENDPATH**/ ?>