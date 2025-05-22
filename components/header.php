<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-slate-800 text-white">
    <header class="h-[80px]">
        <div class="flex items-center justify-between mx-auto py-4 px-8">
            <div class="h-12 rounded-full overflow-hidden">
                <a href="/"><img src="/images/logo.jpg" alt="My Portfolio" class="w-full font-bold h-12 font-serif text-xl"></a>
            </div>
            <nav class="transition-all duration-500">
                <input type="checkbox" name="" id="toggle-sidebar">
                <label for="toggle-sidebar" class="open-sidebar-btn"><i class="fa-solid fa-bars text-xl"></i></label>
                <ul
                    class="nav-link-container flex flex-col md:flex-row gap-8 decoration-none *:font-semibold *:hover:underline *:underline-offset-8 *:text-slate-400 *:hover:text-white">
                    <label for="toggle-sidebar" class="close-sidebar-btn text-white text-base"><i class="fa-solid fa-xmark text-base"></i> Close</label>
                    <a href="/">
                        <li class="<?= $_SERVER['REQUEST_URI'] == '/' ? 'text-white underline' : '' ?>">Home</li>
                    </a>
                    <a href="/portfolio.php">
                        <li class="<?= $_SERVER['REQUEST_URI'] == '/portfolio.php' ? 'text-white underline' : '' ?>">Portfolio</li>
                    </a>
                    <a href="/services.php">
                        <li class="<?= $_SERVER['REQUEST_URI'] == '/services.php' ? 'text-white underline' : '' ?>">Services</li>
                    </a>
                    <a href="/about.php">
                        <li class="<?= $_SERVER['REQUEST_URI'] == '/about.php' ? 'text-white underline' : '' ?>">About</li>
                    </a>
                    <a href="/contact.php">
                        <li class="<?= $_SERVER['REQUEST_URI'] == '/contact.php' ? 'text-white underline' : '' ?>">Contact</li>
                    </a>
                </ul>
            </nav>
        </div>
    </header>

    <main class="min-h-[90vh]">