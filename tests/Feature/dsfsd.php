<!DOCTYPE html>\r\n
<html lang="en">\r\n
    <head>\r\n
        <meta charset="utf-8">\r\n
        <meta name="viewport" content="width=device-width, initial-scale=1">\r\n
        <meta name="csrf-token" content="J07LL6lLQxSZZUjZLRaO7mDZ3aBGHaRnPU1sxAsG">\r\n
\r\n
        \r\n
        <title>Blade Test</title>\r\n
\r\n
        <!-- Fonts -->\r\n
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">\r\n
\r\n
        <!-- Styles -->\r\n
        <link rel="stylesheet" href="http://localhost/css/app.css">\r\n
\r\n
        <!-- Scripts -->\r\n
        <script src="http://localhost/js/app.js" defer></script>\r\n
    </head>\r\n
    <body class="font-sans antialiased">\r\n
        <div class="min-h-screen bg-gray-100">\r\n
            <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">\r\n
    <!-- Primary Navigation Menu -->\r\n
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">\r\n
        <div class="flex justify-between h-16">\r\n
            <div class="flex">\r\n
                <!-- Logo -->\r\n
                <div class="flex items-center flex-shrink-0">\r\n
                    <a href="http://localhost">\r\n
                        <svg viewBox="0 0 316 316" xmlns="http://www.w3.org/2000/svg" class="block w-auto h-10 text-gray-600 fill-current">\r\n
    <path d="M305.8 81.125C305.77 80.995 305.69 80.885 305.65 80.755C305.56 80.525 305.49 80.285 305.37 80.075C305.29 79.935 305.17 79.815 305.07 79.685C304.94 79.515 304.83 79.325 304.68 79.175C304.55 79.045 304.39 78.955 304.25 78.845C304.09 78.715 303.95 78.575 303.77 78.475L251.32 48.275C249.97 47.495 248.31 47.495 246.96 48.275L194.51 78.475C194.33 78.575 194.19 78.725 194.03 78.845C193.89 78.955 193.73 79.045 193.6 79.175C193.45 79.325 193.34 79.515 193.21 79.685C193.11 79.815 192.99 79.935 192.91 80.075C192.79 80.285 192.71 80.525 192.63 80.755C192.58 80.875 192.51 80.995 192.48 81.125C192.38 81.495 192.33 81.875 192.33 82.265V139.625L148.62 164.795V52.575C148.62 52.185 148.57 51.805 148.47 51.435C148.44 51.305 148.36 51.195 148.32 51.065C148.23 50.835 148.16 50.595 148.04 50.385C147.96 50.245 147.84 50.125 147.74 49.995C147.61 49.825 147.5 49.635 147.35 49.485C147.22 49.355 147.06 49.265 146.92 49.155C146.76 49.025 146.62 48.885 146.44 48.785L93.99 18.585C92.64 17.805 90.98 17.805 89.63 18.585L37.18 48.785C37 48.885 36.86 49.035 36.7 49.155C36.56 49.265 36.4 49.355 36.27 49.485C36.12 49.635 36.01 49.825 35.88 49.995C35.78 50.125 35.66 50.245 35.58 50.385C35.46 50.595 35.38 50.835 35.3 51.065C35.25 51.185 35.18 51.305 35.15 51.435C35.05 51.805 35 52.185 35 52.575V232.235C35 233.795 35.84 235.245 37.19 236.025L142.1 296.425C142.33 296.555 142.58 296.635 142.82 296.725C142.93 296.765 143.04 296.835 143.16 296.865C143.53 296.965 143.9 297.015 144.28 297.015C144.66 297.015 145.03 296.965 145.4 296.865C145.5 296.835 145.59 296.775 145.69 296.745C145.95 296.655 146.21 296.565 146.45 296.435L251.36 236.035C252.72 235.255 253.55 233.815 253.55 232.245V174.885L303.81 145.945C305.17 145.165 306 143.725 306 142.155V82.265C305.95 81.875 305.89 81.495 305.8 81.125ZM144.2 227.205L100.57 202.515L146.39 176.135L196.66 147.195L240.33 172.335L208.29 190.625L144.2 227.205ZM244.75 114.995V164.795L226.39 154.225L201.03 139.625V89.825L219.39 100.395L244.75 114.995ZM249.12 57.105L292.81 82.265L249.12 107.425L205.43 82.265L249.12 57.105ZM114.49 184.425L96.13 194.995V85.305L121.49 70.705L139.85 60.135V169.815L114.49 184.425ZM91.76 27.425L135.45 52.585L91.76 77.745L48.07 52.585L91.76 27.425ZM43.67 60.135L62.03 70.705L87.39 85.305V202.545V202.555V202.565C87.39 202.735 87.44 202.895 87.46 203.055C87.49 203.265 87.49 203.485 87.55 203.695V203.705C87.6 203.875 87.69 204.035 87.76 204.195C87.84 204.375 87.89 204.575 87.99 204.745C87.99 204.745 87.99 204.755 88 204.755C88.09 204.905 88.22 205.035 88.33 205.175C88.45 205.335 88.55 205.495 88.69 205.635L88.7 205.645C88.82 205.765 88.98 205.855 89.12 205.965C89.28 206.085 89.42 206.225 89.59 206.325C89.6 206.325 89.6 206.325 89.61 206.335C89.62 206.335 89.62 206.345 89.63 206.345L139.87 234.775V285.065L43.67 229.705V60.135ZM244.75 229.705L148.58 285.075V234.775L219.8 194.115L244.75 179.875V229.705ZM297.2 139.625L253.49 164.795V114.995L278.85 100.395L297.21 89.825V139.625H297.2Z"/>\r\n
</svg>\r\n
                    </a>\r\n
                </div>\r\n
\r\n
                <!-- Navigation Links -->\r\n
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">\r\n
                    <a class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out border-b-2 border-transparent hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300" href="http://localhost/users">\r\n
    Users\r\n
</a>\r\n
                    <a class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-900 transition duration-150 ease-in-out border-b-2 border-indigo-400 focus:outline-none focus:border-indigo-700" href="http://localhost/alert">\r\n
    Security alert\r\n
</a>\r\n
                    <a class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out border-b-2 border-transparent hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300" href="http://localhost/table">\r\n
    Table\r\n
</a>\r\n
                    <a class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out border-b-2 border-transparent hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300" href="http://localhost/rows">\r\n
    Rows\r\n
</a>\r\n
                    <a class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out border-b-2 border-transparent hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300" href="http://localhost/authenticated">\r\n
    Authenticated?\r\n
</a>\r\n
                    <a class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out border-b-2 border-transparent hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300" href="http://localhost/include">\r\n
    Include\r\n
</a>\r\n
                    <a class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out border-b-2 border-transparent hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300" href="http://localhost/layout">\r\n
    Layout\r\n
</a>\r\n
                </div>\r\n
            </div>\r\n
\r\n
            <!-- Hamburger -->\r\n
            <div class="flex items-center -mr-2 sm:hidden">\r\n
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">\r\n
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">\r\n
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />\r\n
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />\r\n
                    </svg>\r\n
                </button>\r\n
            </div>\r\n
        </div>\r\n
    </div>\r\n
\r\n
    <!-- Responsive Navigation Menu -->\r\n
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">\r\n
        <div class="pt-2 pb-3 space-y-1">\r\n
            <a class="block py-2 pl-3 pr-4 text-base font-medium text-gray-600 transition duration-150 ease-in-out border-l-4 border-transparent hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300" href="http://localhost">\r\n
    Dashboard\r\n
</a>\r\n
        </div>\r\n
    </div>\r\n
</nav>\r\n
\r\n
            <!-- Page Heading -->\r\n
            <header class="bg-white shadow">\r\n
                <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">\r\n
                    <h2 class="text-xl font-semibold leading-tight text-gray-800">\n
            Security alert\n
        </h2>\r\n
                </div>\r\n
            </header>\r\n
\r\n
            <!-- Page Content -->\r\n
            <main>\r\n
                <div class="py-12">\n
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">\n
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">\n
                <div class="p-6 bg-white border-b border-gray-200">\n
                    Your task is to change the code of alert.blade.php, to avoid that JavaScript alert.\n
                </div>\n
            </div>\n
        </div>\n
    </div>\r\n
            </main>\r\n
        </div>\r\n
    </body>\r\n
</html>\r\n
