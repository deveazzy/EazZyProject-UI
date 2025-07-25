<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto">

        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="log-in" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">
                    Login Akun
                </h1>
            </div>
        </div>

        <section class="flex flex-col md:flex-row min-h-[calc(100vh-300px)] border border-gray-200 rounded-lg overflow-hidden shadow-sm">
            <div class="w-full md:w-1/2 flex items-center justify-center bg-white p-8 lg:p-10">
                <div class="max-w-md w-full">                    
                    <form id="login-form" class="space-y-6">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <div class="flex items-center space-x-2">
                                <input type="email" id="email" name="email" required 
                                       class="w-11/12 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <div id="emailIcon" class="flex-shrink-0 w-1/12 flex justify-center items-center"></div>
                            </div>
                            <p id="emailFeedback" class="text-xs italic mt-1 leading-tight"></p>
                        </div>
                        
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                            <div class="flex items-center space-x-2">
                                <div class="relative w-11/12">
                                    <input type="password" id="password" name="password" required 
                                           class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 pr-10">
                                    <button type="button" id="password-toggle-btn" class="absolute top-1/2 right-0 -translate-y-1/2 p-2 text-gray-500 hover:text-blue-600">
                                        <i data-lucide="eye" class="w-5 h-5"></i>
                                    </button>
                                </div>
                                <div id="passwordIcon" class="flex-shrink-0 w-1/12 flex justify-center items-center"></div>
                            </div>
                            <p id="passwordFeedback" class="text-xs italic mt-1 leading-tight"></p>
                        </div>
                        
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center">
                                <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                <label for="remember-me" class="ml-2 block text-gray-900">Ingat Saya</label>
                            </div>
                            <a href="#" class="font-medium text-blue-600 hover:text-blue-500">Lupa Password?</a>
                        </div>
                        
                        <button type="submit" class="w-full bg-blue-600 text-white font-bold py-3 px-4 rounded-lg text-lg hover:bg-blue-700 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            Login
                        </button>

                        <div class="relative flex items-center justify-center my-6">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-300"></div>
                            </div>
                            <div class="relative bg-white px-4 text-sm text-gray-500">
                                Atau
                            </div>
                        </div>

                        <div class="space-y-4">
                            <button type="button" class="w-full flex items-center justify-center gap-2 p-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors duration-200">
                                <div class="gsi-material-button-content-wrapper flex items-center gap-2">
                                    <div class="gsi-material-button-icon">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: block; width: 20px; height: 20px;">
                                            <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>
                                            <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
                                            <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>
                                            <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>
                                            <path fill="none" d="M0 0h48v48H0z"></path>
                                        </svg>
                                    </div>
                                    <span class="gsi-material-button-contents">Login dengan Google</span>
                                    <span style="display: none;">Login dengan Google</span>
                                </div>
                            </button>
                            <button type="button" class="w-full flex items-center justify-center gap-2 p-3 bg-blue-700 text-white rounded-lg hover:bg-blue-800 transition-colors duration-200">
                                <i data-lucide="facebook" class="w-5 h-5"></i> Login dengan Facebook
                            </button>
                        </div>
                    </form>
                    
                    <p class="mt-8 text-center text-sm text-gray-600">
                        Belum punya akun? <a href="#" class="font-medium text-blue-600 hover:text-blue-500">Daftar Sekarang</a>
                    </p>
                </div>
            </div>

            <div class="w-full md:w-1/2 hidden md:flex items-center justify-center bg-blue-600 text-white p-8 lg:p-10 text-center">
                <div class="max-w-md">
                    <h2 class="text-3xl md:text-4xl font-extrabold mb-4 leading-tight">Selamat Datang di EazZy UI</h2>
                    <p class="text-base md:text-lg opacity-90 mb-6">
                        Platform terdepan untuk aset antarmuka pengguna modern dan pengembangan web cepat. Temukan komponen yang Anda butuhkan untuk membangun aplikasi luar biasa.
                    </p>
                    <img src="https://placehold.co/400x300/4a90e2/ffffff?text=EazZy+UI" alt="Welcome illustration" class="mx-auto rounded-lg shadow-lg">
                </div>
            </div>
        </section>

    </div>
</main>