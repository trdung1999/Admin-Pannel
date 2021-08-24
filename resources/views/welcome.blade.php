<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('assets/images/logo-me.png') }}" />

        <title>NTD Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg id="Capa_1" enable-background="new 0 0 497 497" height="512" viewBox="0 0 497 497" width="512" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m334.928.007c-34.951 0-63.281 28.332-63.281 63.281v177.124l-86.886-118.48h-58.198v134.658l157.335 214.547c12.149 16.568 31.261 25.863 51.039 25.863 6.563 0 13.201-1.023 19.679-3.146 26.006-8.513 43.593-32.777 43.593-60.141v-370.425c.001-34.949-28.33-63.281-63.281-63.281z" fill="#70dcba"/><path d="m184.761 121.932-70.449-96.066c-16.179-22.065-44.715-31.239-70.719-22.718-26.006 8.513-43.593 32.777-43.593 60.14v369.483c0 34.78 27.668 63.77 62.445 64.219 35.334.456 64.118-28.048 64.118-63.276v-177.124c0-48.956 19.448-95.907 54.065-130.524z" fill="#30cd9c"/></g><g><g><ellipse cx="124.816" cy="204.211" fill="#ff8e9e" rx="24.637" ry="30.938" transform="matrix(.707 -.707 .707 .707 -107.842 148.071)"/></g><g><ellipse cx="243.393" cy="322.788" fill="#ff8e9e" rx="24.637" ry="30.938" transform="matrix(.707 -.707 .707 .707 -156.958 266.648)"/></g><g><ellipse cx="197.49" cy="250.114" fill="#313d40" rx="18.377" ry="16.423" transform="matrix(.707 -.707 .707 .707 -119.014 212.906)"/></g></g><g fill="#313d40"><path d="m149.678 176.057-8.485 8.485c-2.929 2.93-2.929 7.678 0 10.607 1.464 1.464 3.384 2.196 5.303 2.196s3.839-.732 5.303-2.196l8.485-8.485c2.929-2.93 2.929-7.678 0-10.607-2.928-2.928-7.677-2.928-10.606 0z"/><path d="m271.547 287.319c-2.929-2.928-7.678-2.928-10.606 0l-8.485 8.485c-2.929 2.93-2.929 7.678 0 10.607 1.464 1.464 3.384 2.196 5.303 2.196s3.839-.732 5.303-2.196l8.485-8.485c2.929-2.929 2.929-7.677 0-10.607z"/></g><path d="m393.871 161.714c-8.284 0-15 6.716-15 15v50h30v-50c0-8.284-6.716-15-15-15z" fill="#ce857a"/><g><path d="m383.332 319.992v96.791h46.215c28.191-22.817 46.215-57.698 46.215-96.791l-46.215-11.892z" fill="#ffb39d"/><path d="m383.332 319.992-37.362-11.892-33.989 11.892c0 47.315 26.402 88.462 65.277 109.515 5.178 2.805 10.896 4.207 16.614 4.207s11.436-1.402 16.614-4.207c6.755-3.659 13.133-7.925 19.061-12.724-28.19-22.817-46.215-57.698-46.215-96.791z" fill="#ff8f71"/></g><g><g><path d="m496.558 294.433c-8.115-39.596-35.086-64.626-67.034-75.086h-27.612l-46.691 46.691v53.954h28.11 92.431c13.467 0 23.499-12.368 20.796-25.559z" fill="#e8b5b1"/></g><path d="m362.534 294.435c8.107-39.603 35.059-64.629 66.99-75.087-11.458-3.752-23.555-5.631-35.652-5.634-45.835-.01-91.67 26.89-102.689 80.721-2.699 13.187 7.324 25.557 20.798 25.557h71.351c-13.475 0-23.497-12.371-20.798-25.557z" fill="#ce857a"/></g><g><g><g><circle cx="393.871" cy="261.449" fill="#ac6757" r="7.5"/></g></g><g><g><circle cx="393.871" cy="291.449" fill="#ac6757" r="7.5"/></g></g><g fill="#ac6757"><g><circle cx="323.871" cy="280.449" r="7.5"/><circle cx="463.871" cy="280.449" r="7.5"/></g><g><circle cx="353.871" cy="250.449" r="7.5"/><circle cx="433.871" cy="250.449" r="7.5"/></g></g></g></g></svg>

                    <svg id="Capa_1" enable-background="new 0 0 497 497" height="512" viewBox="0 0 497 497" width="512" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m390.5 0h-60.438c-50.663.559-91.562 41.808-91.562 92.603v388.95h51.405c13.394-11.604 21.877-28.723 21.877-47.835v-307.153h78.718c34.951 0 63.283-28.333 63.283-63.282 0-34.95-28.332-63.283-63.283-63.283z" fill="#7ce3ff"/><path d="m248.5 404.384v-311.781c0-50.795 40.899-92.043 91.562-92.603h-233.562c-34.951 0-63.283 28.333-63.283 63.283s28.331 63.282 63.283 63.282h78.717v307.152c0 34.95 28.331 63.283 63.283 63.283 15.839 0 30.306-5.832 41.405-15.448-24.954-16.589-41.405-44.955-41.405-77.168z" fill="#2ed0fc"/></g><g><path d="m387.496 244.042c-3.534.023-7.067.377-10.551 1.03-28.557 5.359-49.192 30.445-49.932 59.491l-.117 4.6 37.697 5.768v-20.065c0-4.281.807-8.553 2.618-12.432 3.654-7.826 10.446-12.983 20.658-12.983 7.143 0 12.92-5.8 12.806-12.911-.112-7.009-6.112-12.544-13.179-12.498z" fill="#00b27a"/><path d="m371.03 304.239-10.361 4.925-3.844-10.808c-4.365-12.273-21.722-12.273-26.087 0l-3.844 10.808-10.361-4.925c-11.765-5.592-24.039 6.681-18.446 18.445l4.441 9.342 41.253 21.73 41.253-21.73 4.441-9.342c5.594-11.764-6.68-24.037-18.445-18.445z" fill="#00ce8e"/></g><g><g><path d="m382.953 328.791c-14.483-.016-27.937 4.975-39.171 13.539h-31.456v136.227l65.836 14.114c52.827-13.792 75.561-59.262 75.621-91.994.039-40.863-35.271-71.96-70.83-71.886z" fill="#ff8e9e"/></g><path d="m323.295 433.689c-10.009-31.925-2.195-66.765 20.488-91.359-11.233-8.563-24.687-13.555-39.171-13.539-35.418-.074-70.869 30.866-70.829 71.886.035 19.654 7.746 39.628 20.385 56.26 5.522 7.197 11.986 13.755 19.162 19.047 18.998 14.01 44.725 21.016 70.453 21.016 11.67 0 23.338-1.446 34.379-4.329-26.011-10.272-46.347-31.803-54.867-58.982z" fill="#ea5b70"/></g><g fill="#ff8e9e"><ellipse cx="168.943" cy="85.36" rx="29.355" ry="23.377"/><ellipse cx="328.057" cy="85.36" rx="29.355" ry="23.377"/></g><g fill="#313d40"><path d="m186.051 43.356c-4.143 0-7.5 3.358-7.5 7.5v12c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-12c0-4.142-3.358-7.5-7.5-7.5z"/><path d="m310.948 43.356c-4.143 0-7.5 3.358-7.5 7.5v12c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-12c0-4.142-3.357-7.5-7.5-7.5z"/><path d="m269.892 56.845c-3.125-2.721-7.862-2.396-10.582.727-2.729 3.131-6.669 4.928-10.81 4.928s-8.08-1.796-10.81-4.928c-2.722-3.123-7.46-3.448-10.582-.727-3.122 2.722-3.448 7.459-.727 10.582 5.58 6.402 13.641 10.073 22.119 10.073s16.539-3.671 22.118-10.073c2.722-3.123 2.396-7.86-.726-10.582z"/></g></g></svg>
                

                    <svg id="Capa_1" enable-background="new 0 0 497 497" height="512" viewBox="0 0 497 497" width="512" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m165.8 0-69.2 39.2v87.3h69.2c66.9 0 121.3 54.7 121.3 121.9s-54.4 121.9-121.3 121.9h-69.2v64.3l30 62.2h39.2c136.7 0 247.8-111.5 247.8-248.5s-111.1-248.3-247.8-248.3z" fill="#676fb2"/><path d="m126.6 94.7c0-35.5 14.1-69.6 39.2-94.7-11.7 0-93 0-102.5 0-35 0-63.3 28.3-63.3 63.3v370.4c0 35 28.3 63.3 63.3 63.3h102.5c-25.1-25.1-39.2-59.2-39.2-94.7 0-9.1 0-299.7 0-307.6z" fill="#4c5699"/></g><g fill="#ff8e9e"><ellipse cx="87.5" cy="95.1" rx="29.4" ry="23.4"/><ellipse cx="246.6" cy="95.1" rx="29.4" ry="23.4"/></g><g fill="#313d40"><path d="m104.6 53.1c-4.1 0-7.5 3.4-7.5 7.5v12c0 4.1 3.4 7.5 7.5 7.5s7.5-3.4 7.5-7.5v-12c0-4.2-3.4-7.5-7.5-7.5z"/><path d="m229.5 53.1c-4.1 0-7.5 3.4-7.5 7.5v12c0 4.1 3.4 7.5 7.5 7.5s7.5-3.4 7.5-7.5v-12c0-4.2-3.4-7.5-7.5-7.5z"/><path d="m188.4 66.5c-3.1-2.7-7.9-2.4-10.6.7-5.7 6.6-15.9 6.6-21.6 0-2.7-3.1-7.5-3.4-10.6-.7s-3.4 7.5-.7 10.6c11.7 13.4 32.5 13.4 44.2 0 2.8-3.1 2.4-7.8-.7-10.6z"/></g><g><path d="m485.1 369.9-6.6-6.6c-11.3-11.3-27-16.9-42.8-15.3l-27.4 2.7-57.6 57.6-2.7 27.4c-1.6 15.8 4 31.6 15.3 42.8l6.6 6.6c15.9 15.9 41.7 15.9 57.6 0l57.6-57.6c15.9-15.9 15.9-41.7 0-57.6z" fill="#ff8e9e"/><path d="m369.9 427.5 57.6-57.6c15.9-15.9 41.7-15.9 57.6 0l-57.6-57.6c-15.9-15.9-41.7-15.9-57.6 0l-57.6 57.6c-15.9 15.9-15.9 41.7 0 57.6l57.6 57.6c-15.9-15.9-15.9-41.8 0-57.6z" fill="#ea5b70"/></g><g fill="#efedff"><circle cx="398.6" cy="398.7" r="10.2"/><circle cx="398.6" cy="341" r="10.2"/><circle cx="341" cy="398.7" r="10.2"/><circle cx="456.3" cy="398.7" r="10.2"/><circle cx="398.6" cy="456.3" r="10.2"/></g></g></svg>
                </div>
            </div>
        </div>
    </body>
</html>
