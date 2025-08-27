<?php
// config.php

$universityName = "Amref internation University";
// Logo and favicon
$logoPath   = "assets/images/university-logo.jpg"; // relative path to logo
$faviconPath = "assets/images/favicon.png";        // relative path to favicon
$maintenancePath = "assets/images/maint.png";
// Maintenance toggle
$maintenanceMode = false; // set to true to enable maintenance mode
// Maintenance end time (Y-m-d H:i:s format)
$maintenanceEndTime = "2025-09-01 12:00:00"; // Example: 1st Sept 2025, 12:00 PM

$portals = [
    [
        "title" => "🎓 Student Portal",
        "desc"  => "Access your student profile, units registration, and personal information.",
        "link"  => "https://students.amref.ac.ke/",
        "btn"   => "btn-danger"
    ],
    [
        "title" => "📚 eLearning Portal(LMS)",
        "desc"  => "Log in to the Learning Management System to access your courses and materials.",
        "link"  => "https://lms.amref.ac.ke/",
        "btn"   => "btn-danger"
    ],
    [
        "title" => "📝 Exam Portal(VAS)",
        "desc"  => "Check your exam schedule, results, and online assessments.",
        "link"  => "https://vas.amref.ac.ke/",
        "btn"   => "btn-danger"
    ],
    [
        "title" => "📖 Library",
        "desc"  => "Access e-books, journals, and research databases.",
        "link"  => "https://app.myloft.xyz/user/login?institute=ckhuh3rvj3d1e0898g62tsybb",
        "btn"   => "btn-danger"
    ],
    [
        "title" => "💻 IT Support",
        "desc"  => "Submit support tickets, FAQs, and helpdesk contact information. or send an email to helpdesk@amref.ac.ke",
        "link"  => "https://helpdesk.amref.ac.ke",
        "btn"   => "btn-danger"
    ],
    [
        "title" => "📢 Announcement",
        "desc"  => "Get what is new in AMIU",
        "link"  => "#",
        "btn"   => "btn-danger"
    ]
];
