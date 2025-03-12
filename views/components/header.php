<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .nav-open { display: block; }
        @media (max-width: 767px) { .nav-closed { display: none; } }
        /* Fade-in animation for sections */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in {
            opacity: 0; /* Start hidden */
            animation: fadeIn 1s ease-out forwards;
        }
        /* Animation delays for each section */
        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; }
        .delay-4 { animation-delay: 0.8s; }
        /* Profile picture zoom animation */
        @keyframes profileZoom {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        .profile-animation {
            animation: profileZoom 5s infinite;
        }
        /* Hover effect for buttons or links */
        .hover-scale:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }
        /* Fade-in animation for articles */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in-up {
            opacity: 0; /* Start hidden */
            animation: fadeInUp 1s ease-out forwards;
        }
        /* Staggered animation delays */
        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; }
        /* Hover effect for cards */
        .article-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="font-sans bg-gray-100 text-gray-800">
