<!DOCTYPE html>
<html lang="en" x-data="{ language: 'en' }">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alayen Iraqi University</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#a31f34',
                        secondary: '#8a8b8c',
                    }
                }
            }
        }
    </script>
</head>

<body class="font-sans" :class="language === 'ar' ? 'text-right' : 'text-left'">
    <header class="bg-primary text-white py-4">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold" x-show="language === 'en'">Alayen Iraqi University</h1>
            <h1 class="text-2xl font-bold" x-show="language === 'ar'">جامعة العين العراقية</h1>
            <button @click="language = language === 'en' ? 'ar' : 'en'" class="text-white bg-secondary px-4 py-1 rounded">
                <span x-show="language === 'en'">عربي</span>
                <span x-show="language === 'ar'">English</span>
            </button>
        </div>
    </header>

    <nav class="bg-secondary" x-data="{ mobileMenuOpen: false }">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-white md:hidden">
                    ☰ Menu
                </button>
                <div class="hidden md:flex">
                    <ul class="flex space-x-4">
                        <li><a href="#home" class="text-white hover:text-gray-200" x-show="language === 'en'">Home</a></li>
                        <li><a href="#home" class="text-white hover:text-gray-200" x-show="language === 'ar'">الرئيسية</a></li>

                        <!-- About University -->
                        <li x-data="{ open: false }" @mouseover="open = true" @mouseleave="open = false" class="relative">
                            <a href="#about" class="text-white hover:text-gray-200" @click.prevent x-show="language === 'en'">About University</a>
                            <a href="#about" class="text-white hover:text-gray-200" @click.prevent x-show="language === 'ar'">عن الجامعة</a>
                            <div x-show="open" class="absolute left-0 mt-2 w-64 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5" x-transition>
                                <div class="py-1">
                                    <a href="#overview" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'en'">Overview</a>
                                    <a href="#overview" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'ar'">نظرة عامة</a>
                                    <a href="#history" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'en'">History & Vision</a>
                                    <a href="#history" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'ar'">التاريخ والرؤية</a>
                                    <a href="#president" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'en'">President's Message</a>
                                    <a href="#president" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'ar'">رسالة الرئيس</a>
                                    <a href="#accreditation" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'en'">Accreditation & Rankings</a>
                                    <a href="#accreditation" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'ar'">الاعتماد والترتيب</a>
                                    <a href="#contact" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'en'">Contact Us</a>
                                    <a href="#contact" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'ar'">اتصل بنا</a>
                                    <a href="#chancellor" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'en'">University Chancellor</a>
                                    <a href="#chancellor" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'ar'">رئيس الجامعة</a>
                                    <a href="#administrative" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'en'">Administrative Assistant</a>
                                    <a href="#administrative" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'ar'">مساعد إداري</a>
                                    <a href="#vice-chancellor" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'en'">Vice-chancellor For Scientific Affairs</a>
                                    <a href="#vice-chancellor" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'ar'">نائب رئيس الجامعة للشؤون العلمية</a>
                                    <a href="#logo" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'en'">University Logo</a>
                                    <a href="#logo" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'ar'">شعار الجامعة</a>
                                </div>
                            </div>
                        </li>
                        <li x-data="{ open: false }" @mouseover="open = true" @mouseleave="open = false" class="relative">
                            <a href="#colleges" class="text-white hover:text-gray-200" @click.prevent x-show="language === 'en'">Colleges</a>
                            <a href="#colleges" class="text-white hover:text-gray-200" @click.prevent x-show="language === 'ar'">الكليات</a>
                            <div x-show="open" class="absolute left-0 mt-2 w-screen max-w-7xl rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5" x-transition>
                                <div class="grid grid-cols-3 gap-8 p-8">
                                    <div>
                                        <h3 class="text-lg font-medium text-gray-900 mb-4" x-show="language === 'en'">Health and Medical Colleges</h3>
                                        <h3 class="text-lg font-medium text-gray-900 mb-4" x-show="language === 'ar'">كليات الصحة والطب</h3>
                                        <ul class="space-y-4">
                                            <li><a href="#medicine" class="text-sm text-gray-500 hover:text-gray-700" x-show="language === 'en'">College of Medicine</a></li>
                                            <li><a href="#medicine" class="text-sm text-gray-500 hover:text-gray-700" x-show="language === 'ar'">كلية الطب</a></li>
                                            <li><a href="#dentistry" class="text-sm text-gray-500 hover:text-gray-700" x-show="language === 'en'">Dentistry College</a></li>
                                            <li><a href="#dentistry" class="text-sm text-gray-500 hover:text-gray-700" x-show="language === 'ar'">كلية طب الأسنان</a></li>
                                            <li><a href="#pharmacy" class="text-sm text-gray-500 hover:text-gray-700" x-show="language === 'en'">Pharmacy College</a></li>
                                            <li><a href="#pharmacy" class="text-sm text-gray-500 hover:text-gray-700" x-show="language === 'ar'">كلية الصيدلة</a></li>
                                            <li>
                                                <a href="#health-tech" class="text-sm text-gray-500 hover:text-gray-700 font-medium" x-show="language === 'en'">Health and Medical Technologies</a>
                                                <a href="#health-tech" class="text-sm text-gray-500 hover:text-gray-700 font-medium" x-show="language === 'ar'">تكنولوجيا الصحة والطب</a>
                                                <ul class="ml-4 mt-2 space-y-2">
                                                    <li><a href="#anesthesia" class="text-sm text-gray-400 hover:text-gray-600" x-show="language === 'en'">Anesthesia Department</a></li>
                                                    <li><a href="#anesthesia" class="text-sm text-gray-400 hover:text-gray-600" x-show="language === 'ar'">قسم التخدير</a></li>
                                                    <li><a href="#opticianry" class="text-sm text-gray-400 hover:text-gray-600" x-show="language === 'en'">Opticianry Department</a></li>
                                                    <li><a href="#opticianry" class="text-sm text-gray-400 hover:text-gray-600" x-show="language === 'ar'">قسم البصريات</a></li>
                                                    <li><a href="#dental-tech" class="text-sm text-gray-400 hover:text-gray-600" x-show="language === 'en'">Dental Technology Department</a></li>
                                                    <li><a href="#dental-tech" class="text-sm text-gray-400 hover:text-gray-600" x-show="language === 'ar'">قسم تكنولوجيا الأسنان</a></li>
                                                    <li><a href="#radiology" class="text-sm text-gray-400 hover:text-gray-600" x-show="language === 'en'">Radiology Department</a></li>
                                                    <li><a href="#radiology" class="text-sm text-gray-400 hover:text-gray-600" x-show="language === 'ar'">قسم الأشعة</a></li>
                                                    <li><a href="#medical-lab" class="text-sm text-gray-400 hover:text-gray-600" x-show="language === 'en'">Medical Laboratories Technology</a></li>
                                                    <li><a href="#medical-lab" class="text-sm text-gray-400 hover:text-gray-600" x-show="language === 'ar'">تكنولوجيا المختبرات الطبية</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-medium text-gray-900 mb-4" x-show="language === 'en'">Engineering Colleges</h3>
                                        <h3 class="text-lg font-medium text-gray-900 mb-4" x-show="language === 'ar'">كليات الهندسة</h3>
                                        <ul class="space-y-4">
                                            <li>
                                                <a href="#engineering-tech" class="text-sm text-gray-500 hover:text-gray-700 font-medium" x-show="language === 'en'">Engineering Technical College</a>
                                                <a href="#engineering-tech" class="text-sm text-gray-500 hover:text-gray-700 font-medium" x-show="language === 'ar'">كلية الهندسة التقنية</a>
                                                <ul class="ml-4 mt-2 space-y-2">
                                                    <li><a href="#medical-devices" class="text-sm text-gray-400 hover:text-gray-600" x-show="language === 'en'">Medical Devices Technology Department</a></li>
                                                    <li><a href="#medical-devices" class="text-sm text-gray-400 hover:text-gray-600" x-show="language === 'ar'">قسم تكنولوجيا الأجهزة الطبية</a></li>
                                                    <li><a href="#computer-eng" class="text-sm text-gray-400 hover:text-gray-600" x-show="language === 'en'">Computer Engineering Technology Department</a></li>
                                                    <li><a href="#computer-eng" class="text-sm text-gray-400 hover:text-gray-600" x-show="language === 'ar'">قسم تكنولوجيا هندسة الحاسوب</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#engineering" class="text-sm text-gray-500 hover:text-gray-700 font-medium" x-show="language === 'en'">Engineering College</a>
                                                <a href="#engineering" class="text-sm text-gray-500 hover:text-gray-700 font-medium" x-show="language === 'ar'">كلية الهندسة</a>
                                                <ul class="ml-4 mt-2 space-y-2">
                                                    <li><a href="#petroleum" class="text-sm text-gray-400 hover:text-gray-600" x-show="language === 'en'">Petroleum Engineering Department</a></li>
                                                    <li><a href="#petroleum" class="text-sm text-gray-400 hover:text-gray-600" x-show="language === 'ar'">قسم هندسة النفط</a></li>
                                                    <li><a href="#ai-eng" class="text-sm text-gray-400 hover:text-gray-600" x-show="language === 'en'">Artificial Intelligence Engineering Department</a></li>
                                                    <li><a href="#ai-eng" class="text-sm text-gray-400 hover:text-gray-600" x-show="language === 'ar'">قسم هندسة الذكاء الاصطناعي</a></li>
                                                    <li><a href="#biomedical" class="text-sm text-gray-400 hover:text-gray-600" x-show="language === 'en'">Biomedical Engineering Department</a></li>
                                                    <li><a href="#biomedical" class="text-sm text-gray-400 hover:text-gray-600" x-show="language === 'ar'">قسم هندسة المعدات الطبية</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-medium text-gray-900 mb-4" x-show="language === 'en'">Other Colleges</h3>
                                        <h3 class="text-lg font-medium text-gray-900 mb-4" x-show="language === 'ar'">كليات أخرى</h3>
                                        <ul class="space-y-4">
                                            <li><a href="#law" class="text-sm text-gray-500 hover:text-gray-700" x-show="language === 'en'">Law College</a></li>
                                            <li><a href="#law" class="text-sm text-gray-500 hover:text-gray-700" x-show="language === 'ar'">كلية القانون</a></li>
                                            <li>
                                                <a href="#education" class="text-sm text-gray-500 hover:text-gray-700 font-medium" x-show="language === 'en'">Education College</a>
                                                <a href="#education" class="text-sm text-gray-500 hover:text-gray-700 font-medium" x-show="language === 'ar'">كلية التربية</a>
                                                <ul class="ml-4 mt-2 space-y-2">
                                                    <li><a href="#physical-edu" class="text-sm text-gray-400 hover:text-gray-600" x-show="language === 'en'">Physical Education and Sports Science</a></li>
                                                    <li><a href="#physical-edu" class="text-sm text-gray-400 hover:text-gray-600" x-show="language === 'ar'">قسم التربية الرياضية وعلوم الرياضة</a></li>
                                                    <li><a href="#chemistry" class="text-sm text-gray-400 hover:text-gray-600" x-show="language === 'en'">Chemistry Department</a></li>
                                                    <li><a href="#chemistry" class="text-sm text-gray-400 hover:text-gray-600" x-show="language === 'ar'">قسم الكيمياء</a></li>
                                                    <li><a href="#english" class="text-sm text-gray-400 hover:text-gray-600" x-show="language === 'en'">Department of English Language</a></li>
                                                    <li><a href="#english" class="text-sm text-gray-400 hover:text-gray-600" x-show="language === 'ar'">قسم اللغة الإنجليزية</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li x-data="{ open: false }" @mouseover="open = true" @mouseleave="open = false" class="relative">
    <a href="#departments" class="text-white hover:text-gray-200" @click.prevent x-show="language === 'en'">Departments & Centers</a>
    <a href="#departments" class="text-white hover:text-gray-200" @click.prevent x-show="language === 'ar'">الأقسام والمراكز</a>
    <div x-show="open" class="absolute left-0 mt-2 w-64 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5" x-transition>
        <div class="py-1">
            <a href="#chancellor-departments" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'en'">Chancellor Departments</a>
            <a href="#chancellor-departments" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'ar'">أقسام المستشار</a>
            <a href="#research-center" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'en'">Research Center</a>
            <a href="#research-center" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'ar'">مركز الأبحاث</a>
            <a href="#english-center" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'en'">English Language Center</a>
            <a href="#english-center" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'ar'">مركز اللغة الإنجليزية</a>
        </div>
    </div>
</li>

<li x-data="{ open: false }" @mouseover="open = true" @mouseleave="open = false" class="relative">
    <a href="#research" class="text-white hover:text-gray-200" @click.prevent x-show="language === 'en'">Research & Journals</a>
    <a href="#research" class="text-white hover:text-gray-200" @click.prevent x-show="language === 'ar'">الأبحاث والمجلات</a>
    <div x-show="open" class="absolute left-0 mt-2 w-64 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5" x-transition>
        <div class="py-1">
            <a href="#research-2022" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'en'">Al-Ayen University Research for 2022</a>
            <a href="#research-2022" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'ar'">أبحاث جامعة العين لعام 2022</a>
            <a href="#research-center" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'en'">Research Center</a>
            <a href="#research-center" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'ar'">مركز الأبحاث</a>
            <a href="#published-research" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'en'">Published Researches</a>
            <a href="#published-research" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'ar'">الأبحاث المنشورة</a>
            <a href="#international-indexes" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'en'">International Indexes</a>
            <a href="#international-indexes" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'ar'">المؤشرات الدولية</a>
            <a href="#research-gates" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'en'">Research Gates</a>
            <a href="#research-gates" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'ar'">بوابات الأبحاث</a>
            <a href="#scientific-search" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'en'">Scientific Search Engines</a>
            <a href="#scientific-search" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'ar'">محركات البحث العلمية</a>
            <a href="#global-libraries" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'en'">Global Libraries</a>
            <a href="#global-libraries" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'ar'">المكتبات العالمية</a>
            <a href="#global-rankings" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'en'">Global Rankings</a>
            <a href="#global-rankings" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'ar'">التصنيفات العالمية</a>
            <a href="#scientific-symbols" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'en'">Scientific symbols</a>
            <a href="#scientific-symbols" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'ar'">الرموز العلمية</a>
            <a href="#orcid" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'en'">Orcid</a>
            <a href="#orcid" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'ar'">أوركيد</a>
            <a href="#publons" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'en'">Publons</a>
            <a href="#publons" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'ar'">ببلونز</a>
            <a href="#e-learning" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'en'">E-Learning Sites</a>
            <a href="#e-learning" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'ar'">مواقع التعلم الإلكتروني</a>
            <a href="#general-lectures" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'en'">General Electronic Lectures by AUIQ Lecturers</a>
            <a href="#general-lectures" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" x-show="language === 'ar'">المحاضرات الإلكترونية العامة بواسطة محاضري جامعة العين</a>
        </div>
    </div>
</li>



                        <!-- Repeat similar structure for Colleges, Departments, Research, Awards, Teaching Staff, etc., with translations -->

                        <!-- Contact Us -->
                        <li><a href="#contact" class="text-white hover:text-gray-200" x-show="language === 'en'">Contact Us</a></li>
                        <li><a href="#contact" class="text-white hover:text-gray-200" x-show="language === 'ar'">اتصل بنا</a></li>
                    </ul>
                </div>
            </div>

            <!-- Mobile menu structure (similar to above, adjusted for mobile view) -->
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold mb-4" x-show="language === 'en'">Welcome to Alayen Iraqi University</h2>
        <h2 class="text-2xl font-bold mb-4" x-show="language === 'ar'">مرحبًا بكم في جامعة العين العراقية</h2>
        <p class="mb-4" x-show="language === 'en'">This is a placeholder for the main content of your university website. You can add information about your university, latest news, events, and more.</p>
        <p class="mb-4" x-show="language === 'ar'">هذا هو المحتوى الرئيسي لموقع الجامعة. يمكنك إضافة معلومات حول الجامعة وآخر الأخبار والفعاليات والمزيد.</p>
        <img src="https://placehold.co/800x400" alt="University Campus" class="w-full max-w-2xl mx-auto rounded-lg shadow-lg" />
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto px-4">
            <p x-show="language === 'en'">&copy; 2024 Alayen Iraqi University. All rights reserved.</p>
            <p x-show="language === 'ar'">&copy; 2024 جامعة العين العراقية. جميع الحقوق محفوظة.</p>
        </div>
    </footer>
</body>

</html>