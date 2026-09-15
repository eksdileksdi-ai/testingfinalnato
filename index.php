<?php
// Pink Help Desk Knowledge Base System
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pink Help Desk - Knowledge Base & Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-pink-50 text-pink-900 flex flex-col min-h-screen relative overflow-x-hidden">

    <!-- LANDING VIEW WRAPPER -->
    <div id="landing-view-wrapper" class="flex flex-col min-h-screen">
        <div class="absolute top-[-10%] left-[-10%] w-96 h-96 bg-pink-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-float z-0"></div>
        <div class="absolute bottom-[10%] right-[-5%] w-96 h-96 bg-rose-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-float z-0" style="animation-delay: 2s;"></div>

        <!-- LANDING HEADER / NAVIGATION -->
        <header class="relative py-4 px-4 md:px-8 shadow-2xl sticky top-0 z-50 bg-pink-700" 
                style="background-image: url('0cd47f88-9477-426b-ad25-fc5794e60b8a.jpg'); background-size: cover; background-position: center;">
            <div class="absolute inset-0 bg-gradient-to-r from-pink-900/90 to-pink-800/70 z-0 backdrop-blur-sm"></div>
            
            <div class="max-w-7xl mx-auto flex justify-between items-center relative z-10">
                <button onclick="changePage('login')" class="text-white text-xl md:text-2xl font-extrabold hover:text-pink-200 transition-colors focus:outline-none flex items-center gap-3 tracking-tight">
                    <div class="bg-white/20 p-2 rounded-xl backdrop-blur-md">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"/><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3z"/><path d="M3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/></svg>
                    </div>
                    KLD Self-Service Help Desk System
                </button>
                
                <div class="flex items-center bg-white/10 rounded-full pr-2 pl-4 backdrop-blur-md border border-white/20 shadow-lg" onmouseleave="closeMenu()">
                    <div id="nav-links" class="nav-spread flex items-center space-x-2 md:space-x-4 text-sm font-semibold tracking-wide">
                        <button onclick="changePage('login')" class="text-white hover:text-pink-200 px-3 py-1.5 rounded-lg hover:bg-white/10 transition">Login</button>
                        <button onclick="changePage('register')" class="text-white hover:text-pink-200 px-3 py-1.5 rounded-lg hover:bg-white/10 transition">Register</button>
                        <button onclick="changePage('about-team')" class="text-white hover:text-pink-200 px-3 py-1.5 rounded-lg hover:bg-white/10 transition">About Us</button>
                        <button onclick="changePage('privacy')" class="text-white hover:text-pink-200 px-3 py-1.5 rounded-lg hover:bg-white/10 transition">Privacy</button>
                        <button onclick="changePage('terms')" class="text-white hover:text-pink-200 px-3 py-1.5 rounded-lg hover:bg-white/10 transition">Terms</button>
                    </div>
                    <button onclick="toggleMenu()" class="text-white hover:text-pink-200 transition-transform hover:scale-110 p-2 focus:outline-none" title="Toggle Menu">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                    </button>
                </div>
            </div>
        </header>

        <!-- LANDING MAIN APP CONTAINER -->
        <main class="flex-grow max-w-7xl mx-auto px-4 md:px-8 py-12 w-full flex flex-col lg:flex-row gap-12 items-center lg:items-start justify-center relative z-10">
            
            <!-- INALIS NA ANG QUICK ANSWERS DITO SA LANDING HERO -->
            <div id="landing-hero" class="w-full lg:w-1/2 flex flex-col space-y-8 animate-fade-in-up lg:sticky lg:top-32">
                <div>
                    <h1 class="text-4xl md:text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-pink-800 to-rose-500 mb-4 tracking-tight">
                        Empowering Your Academic Journey.
                    </h1>
                    <p class="text-lg text-pink-700/80 font-medium leading-relaxed max-w-lg">
                        A centralized, smart support portal and knowledge base designed to resolve your technical and administrative inquiries instantly.
                    </p>
                </div>
            </div>
            
            <div id="main-app-container" class="w-full lg:w-1/2 flex justify-center animate-fade-in-up" style="animation-delay: 0.1s;"></div>
            
        </main>

        <!-- LANDING FOOTER -->
        <footer class="bg-white/50 backdrop-blur-sm border-t border-pink-200/60 py-6 px-4 md:px-8 mt-auto relative z-10">
            <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center text-sm text-pink-700 font-medium">
                <p>© 2026 Pink Help Desk Knowledge Base. All rights reserved.</p>
                <div class="space-x-6 mt-3 md:mt-0">
                    <button onclick="changePage('privacy')" class="hover:text-pink-900 hover:underline transition">Data Privacy</button>
                    <button onclick="changePage('terms')" class="hover:text-pink-900 hover:underline transition">Terms of Service</button>
                </div>
            </div>
        </footer>
    </div>

    <!-- DASHBOARD VIEW WRAPPER -->
    <div id="dashboard-view-wrapper" class="flex flex-col min-h-screen hidden">
        <header class="relative py-4 px-4 md:px-8 shadow-lg sticky top-0 z-50 bg-pink-700" 
                style="background-image: url('0cd47f88-9477-426b-ad25-fc5794e60b8a.jpg'); background-size: cover; background-position: center;">
            <div class="absolute inset-0 bg-pink-900/70 z-0"></div>
            
            <div class="max-w-6xl mx-auto flex justify-between items-center relative z-10">
                <button onclick="changeDashPage('categories')" class="text-white text-xl md:text-2xl font-extrabold hover:text-pink-200 transition-colors focus:outline-none flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"/><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3z"/><path d="M3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/></svg>
                      Help Desk Knowledge Base System
                </button>
                
                <div class="relative flex items-center">
                    <div class="flex items-center bg-white/10 rounded-full pr-2 pl-4 backdrop-blur-sm" onmouseleave="closeDashMenu()">
                        <div id="dash-nav-links" class="nav-spread flex items-center space-x-2 md:space-x-4 text-sm font-semibold">
                            <button onclick="changeDashPage('categories')" class="text-white hover:text-pink-200 px-2 py-1">Home</button>
                            <button onclick="changeDashPage('about-team')" class="text-white hover:text-pink-200 px-2 py-1">About Us</button>
                            
                            <button onclick="changeDashPage('submit-ticket')" class="bg-pink-500 hover:bg-pink-600 text-white px-3 py-1.5 rounded-full transition-colors flex items-center space-x-1 shadow">
                                <span class="hidden sm:inline">Submit Ticket</span>
                            </button>

                            <button onclick="changeDashPage('my-tickets')" class="relative p-2 rounded-full text-white hover:bg-pink-600 transition-colors flex items-center gap-1" title="My Submitted Tickets">
                                Tickets
                                <span id="ticket-count-nav" class="inline-flex items-center justify-center px-1.5 py-0.5 text-xs font-bold text-white bg-red-600 rounded-full">0</span>
                            </button>

                            <button onclick="changeDashPage('account')" class="p-2 rounded-full text-white hover:bg-pink-600 transition-colors" title="Profile">
                                Profile
                            </button>
                            
                            <button onclick="handleLogout()" class="text-red-300 hover:text-red-200 px-2 py-1 ml-2 font-bold">Logout</button>
                        </div>

                        <button onclick="toggleDashMenu()" class="text-white hover:text-pink-200 transition-colors p-2 focus:outline-none" title="Toggle Menu">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-grow max-w-6xl mx-auto px-4 md:px-8 py-8 w-full">
            <div id="dash-main-app-container"></div>
        </main>

        <footer class="bg-pink-100 border-t border-pink-200 py-6 px-4 md:px-8 mt-auto">
            <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center text-sm text-pink-700 font-medium">
                <p>© 2026 Pink Help Desk Knowledge Base System. All rights reserved.</p>
                <div class="space-x-4 mt-2 md:mt-0">
                    <button onclick="changeDashPage('privacy')" class="hover:text-pink-900 hover:underline">Data Privacy</button>
                    <button onclick="changeDashPage('terms')" class="hover:text-pink-900 hover:underline">Terms of Service</button>
                </div>
            </div>
        </footer>
    </div>

    <!-- SHARED NOTIFICATION CONTAINER -->
    <div id="notification-message-container"></div>

    <script>
        window.toggleMenu = () => document.getElementById('nav-links').classList.toggle('open');
        window.closeMenu = () => document.getElementById('nav-links').classList.remove('open');

        const showNotification = (message) => {
            const container = document.getElementById('notification-message-container');
            container.innerHTML = `
                <div class="fixed bottom-6 right-6 bg-pink-800 text-white px-6 py-4 rounded-2xl shadow-2xl z-50 animate-fade-in-up flex items-center gap-3 font-semibold">
                    <svg class="w-5 h-5 text-pink-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    ${message}
                </div>
            `;
            setTimeout(() => { container.innerHTML = ''; }, 3500);
        };

        window.togglePasswordVisibility = (inputId, iconId) => {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />`;
            } else {
                input.type = 'password';
                icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858-5.908a10.02 10.02 0 014.122-.963c4.478 0 8.268 2.943 9.542 7a9.97 9.97 0 01-2.553 4.058M9.88 9.88a3 3 0 104.24 4.24M3 3l18 18" />`;
            }
        };

        window.handleLogin = (e) => {
            e.preventDefault();
            localStorage.setItem('helpDeskAuth', 'true');
            showDashboardView();
        };

        window.handleRegisterSubmit = (e) => {
            e.preventDefault();
            const pass = document.getElementById('reg-password').value;
            const confirmPass = document.getElementById('reg-confirm-password').value;

            if (pass !== confirmPass) {
                showNotification("❌ Passwords do not match!");
                return;
            }

            showNotification('Registration complete! Please log in.');
            changePage('login');
        };

        const renderLoginPage = () => `
            <div class="w-full max-w-md glass-panel p-8 md:p-10 rounded-3xl animate-float" style="animation-duration: 8s;">
                <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-rose-500 rounded-2xl mx-auto mb-6 flex items-center justify-center shadow-lg shadow-pink-500/30 transform rotate-3">
                    <svg class="w-8 h-8 text-white transform -rotate-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                </div>
                <h2 class="text-3xl font-extrabold text-pink-900 text-center mb-2 tracking-tight">Welcome Back</h2>
                <p class="text-sm text-pink-600/80 text-center mb-8 font-medium">Access your student support dashboard</p>
                
                <form onsubmit="handleLogin(event)" class="space-y-5">
                    <div>
                        <label class="block text-sm font-bold text-pink-800 mb-1.5 ml-1">Email Address</label>
                        <input type="email" placeholder="student@school.edu" class="w-full p-3.5 bg-white/80 border border-pink-200 rounded-xl focus:ring-4 focus:ring-pink-500/20 focus:border-pink-500 transition-all outline-none" required>
                    </div>
                    <div>
                        <div class="flex justify-between items-center mb-1.5 ml-1 mr-1">
                            <label class="block text-sm font-bold text-pink-800">Password</label>
                            <button type="button" onclick="changePage('forgot-password')" class="text-xs text-pink-600 hover:text-pink-900 font-bold transition-colors">Forgot?</button>
                        </div>
                        <div class="relative">
                            <input type="password" id="login-password" placeholder="••••••••" class="w-full p-3.5 pr-11 bg-white/80 border border-pink-200 rounded-xl focus:ring-4 focus:ring-pink-500/20 focus:border-pink-500 transition-all outline-none" required>
                            <button type="button" onclick="togglePasswordVisibility('login-password', 'eye-login')" class="absolute right-3.5 top-1/2 -translate-y-1/2 text-pink-600 hover:text-pink-900 focus:outline-none">
                                <svg id="eye-login" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858-5.908a10.02 10.02 0 014.122-.963c4.478 0 8.268 2.943 9.542 7a9.97 9.97 0 01-2.553 4.058M9.88 9.88a3 3 0 104.24 4.24M3 3l18 18" /></svg>
                            </button>
                        </div>
                    </div>
                    <button type="submit" class="btn-gradient w-full py-4 rounded-xl font-bold text-white tracking-wide mt-2">Sign In to Dashboard</button>
                </form>
                
                <p class="text-center text-sm text-pink-700 mt-8 font-medium">
                    New student? <button onclick="changePage('register')" class="text-pink-900 font-extrabold hover:underline">Create an account</button>
                </p>
            </div>
        `;

        const renderRegisterPage = () => `
            <div class="w-full max-w-md glass-panel p-8 md:p-10 rounded-3xl">
                <h2 class="text-3xl font-extrabold text-pink-900 text-center mb-2 tracking-tight">Create Account</h2>
                <p class="text-sm text-pink-600/80 text-center mb-8 font-medium">Register to submit and track support tickets</p>
                <form onsubmit="handleRegisterSubmit(event)" class="space-y-4">
                    <div>
                        <label class="block text-sm font-bold text-pink-800 mb-1 ml-1">Full Name</label>
                        <input type="text" placeholder="Full Name" class="w-full p-3 bg-white/80 border border-pink-200 rounded-xl focus:ring-4 focus:ring-pink-500/20 outline-none" required>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-pink-800 mb-1 ml-1">Email Address</label>
                        <input type="email" placeholder="student@school.edu" class="w-full p-3 bg-white/80 border border-pink-200 rounded-xl focus:ring-4 focus:ring-pink-500/20 outline-none" required>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-pink-800 mb-1 ml-1">Password</label>
                        <div class="relative">
                            <input type="password" id="reg-password" placeholder="••••••••" class="w-full p-3 pr-11 bg-white/80 border border-pink-200 rounded-xl focus:ring-4 focus:ring-pink-500/20 outline-none" required>
                            <button type="button" onclick="togglePasswordVisibility('reg-password', 'eye-reg')" class="absolute right-3.5 top-1/2 -translate-y-1/2 text-pink-600 hover:text-pink-900 focus:outline-none">
                                <svg id="eye-reg" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858-5.908a10.02 10.02 0 014.122-.963c4.478 0 8.268 2.943 9.542 7a9.97 9.97 0 01-2.553 4.058M9.88 9.88a3 3 0 104.24 4.24M3 3l18 18" /></svg>
                            </button>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-pink-800 mb-1 ml-1">Confirm Password</label>
                        <div class="relative">
                            <input type="password" id="reg-confirm-password" placeholder="••••••••" class="w-full p-3 pr-11 bg-white/80 border border-pink-200 rounded-xl focus:ring-4 focus:ring-pink-500/20 outline-none" required>
                            <button type="button" onclick="togglePasswordVisibility('reg-confirm-password', 'eye-confirm')" class="absolute right-3.5 top-1/2 -translate-y-1/2 text-pink-600 hover:text-pink-900 focus:outline-none">
                                <svg id="eye-confirm" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858-5.908a10.02 10.02 0 014.122-.963c4.478 0 8.268 2.943 9.542 7a9.97 9.97 0 01-2.553 4.058M9.88 9.88a3 3 0 104.24 4.24M3 3l18 18" /></svg>
                            </button>
                        </div>
                    </div>
                    <button type="submit" class="btn-gradient w-full py-3.5 rounded-xl font-bold text-white tracking-wide mt-2">Register Now</button>
                </form>
                <button onclick="changePage('login')" class="w-full text-center text-sm text-pink-700 font-bold mt-5 hover:text-pink-900 transition">← Back to Login</button>
            </div>
        `;

        window.handleResetRequest = (e) => {
            e.preventDefault();
            document.getElementById('reset-request-card').classList.add('hidden');
            document.getElementById('reset-sent-card').classList.remove('hidden');
        };

        window.handleNewPassword = (e) => {
            e.preventDefault();
            const password = document.getElementById('new-password').value;
            const confirm = document.getElementById('confirm-new-password').value;
            const error = document.getElementById('reset-password-error');

            if (password !== confirm) {
                error.textContent = 'Passwords do not match.';
                error.classList.remove('hidden');
                return;
            }

            if (password.length < 6) {
                error.textContent = 'Password must be at least 6 characters.';
                error.classList.remove('hidden');
                return;
            }

            error.classList.add('hidden');
            document.getElementById('reset-change-card').classList.add('hidden');
            document.getElementById('reset-success-card').classList.remove('hidden');
        };

        const renderForgotPasswordPage = () => `
            <div class="w-full max-w-md">
                <div id="reset-request-card" class="glass-panel p-8 md:p-10 rounded-3xl animate-fade-in-up">
                    <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-rose-500 rounded-2xl mx-auto mb-6 flex items-center justify-center shadow-lg shadow-pink-500/30 transform -rotate-3">
                        <svg class="w-8 h-8 text-white transform rotate-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h2 class="text-3xl font-extrabold text-pink-900 text-center mb-2 tracking-tight">Reset Password</h2>
                    <p class="text-sm text-pink-600/80 text-center mb-8 font-medium">Enter your registered email to receive a secure reset link.</p>
                    <form onsubmit="handleResetRequest(event)" class="space-y-5">
                        <div>
                            <label class="block text-sm font-bold text-pink-800 mb-1.5 ml-1">Registered Email</label>
                            <input type="email" placeholder="student@school.edu" class="w-full p-3.5 bg-white/80 border border-pink-200 rounded-xl focus:ring-4 focus:ring-pink-500/20 focus:border-pink-500 transition-all outline-none" required>
                        </div>
                        <button type="submit" class="btn-gradient w-full py-4 rounded-xl font-bold text-white tracking-wide mt-2">Send Reset Link</button>
                    </form>
                    <button onclick="changePage('login')" class="w-full text-center text-sm text-pink-700 font-bold mt-6 hover:text-pink-900 transition">← Back to Login</button>
                </div>

                <div id="reset-sent-card" class="glass-panel p-8 md:p-10 rounded-3xl animate-fade-in-up hidden text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-rose-500 rounded-2xl mx-auto mb-6 flex items-center justify-center shadow-lg shadow-pink-500/30 transform rotate-3">
                        <svg class="w-8 h-8 text-white transform -rotate-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h2 class="text-3xl font-extrabold text-pink-900 mb-2 tracking-tight">Reset Link Sent!</h2>
                    <p class="text-sm text-pink-600/80 mb-6 font-medium">A password reset link has been sent to your registered email address.</p>
                    <div class="bg-pink-50 border border-pink-200 rounded-2xl p-4 mb-6 text-left">
                        <p class="text-xs text-pink-700 leading-relaxed"><strong>Demo Mode:</strong> For testing, click the button below to open the reset link.</p>
                    </div>
                    <button onclick="document.getElementById('reset-sent-card').classList.add('hidden'); document.getElementById('reset-change-card').classList.remove('hidden');" class="btn-gradient w-full py-4 rounded-xl font-bold text-white tracking-wide">Open Reset Link</button>
                    <button onclick="changePage('login')" class="w-full text-center text-sm text-pink-700 font-bold mt-6 hover:text-pink-900 transition">← Back to Login</button>
                </div>

                <div id="reset-change-card" class="glass-panel p-8 md:p-10 rounded-3xl animate-fade-in-up hidden">
                    <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-rose-500 rounded-2xl mx-auto mb-6 flex items-center justify-center shadow-lg shadow-pink-500/30 transform rotate-3">
                        <svg class="w-8 h-8 text-white transform -rotate-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    </div>
                    <h2 class="text-3xl font-extrabold text-pink-900 text-center mb-2 tracking-tight">Create New Password</h2>
                    <p class="text-sm text-pink-600/80 text-center mb-8 font-medium">Choose a new password for your account.</p>
                    <form onsubmit="handleNewPassword(event)" class="space-y-5">
                        <div>
                            <label class="block text-sm font-bold text-pink-800 mb-1.5 ml-1">New Password</label>
                            <div class="relative">
                                <input type="password" id="new-password" placeholder="••••••••" class="w-full p-3.5 pr-11 bg-white/80 border border-pink-200 rounded-xl focus:ring-4 focus:ring-pink-500/20 focus:border-pink-500 transition-all outline-none" required>
                                <button type="button" onclick="togglePasswordVisibility('new-password', 'eye-new-password')" class="absolute right-3.5 top-1/2 -translate-y-1/2 text-pink-600 hover:text-pink-900 focus:outline-none">
                                    <svg id="eye-new-password" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858-5.908a10.02 10.02 0 014.122-.963c4.478 0 8.268 2.943 9.542 7a9.97 9.97 0 01-2.553 4.058M9.88 9.88a3 3 0 104.24 4.24M3 3l18 18" /></svg>
                                </button>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-pink-800 mb-1.5 ml-1">Confirm New Password</label>
                            <div class="relative">
                                <input type="password" id="confirm-new-password" placeholder="••••••••" class="w-full p-3.5 pr-11 bg-white/80 border border-pink-200 rounded-xl focus:ring-4 focus:ring-pink-500/20 focus:border-pink-500 transition-all outline-none" required>
                                <button type="button" onclick="togglePasswordVisibility('confirm-new-password', 'eye-confirm-new-password')" class="absolute right-3.5 top-1/2 -translate-y-1/2 text-pink-600 hover:text-pink-900 focus:outline-none">
                                    <svg id="eye-confirm-new-password" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858-5.908a10.02 10.02 0 014.122-.963c4.478 0 8.268 2.943 9.542 7a9.97 9.97 0 01-2.553 4.058M9.88 9.88a3 3 0 104.24 4.24M3 3l18 18" /></svg>
                                </button>
                            </div>
                        </div>
                        <p id="reset-password-error" class="hidden text-sm text-red-600 font-semibold text-center"></p>
                        <button type="submit" class="btn-gradient w-full py-4 rounded-xl font-bold text-white tracking-wide">Change Password</button>
                    </form>
                </div>

                <div id="reset-success-card" class="glass-panel p-8 md:p-10 rounded-3xl animate-fade-in-up hidden text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-rose-500 rounded-2xl mx-auto mb-6 flex items-center justify-center shadow-lg shadow-pink-500/30 transform -rotate-3">
                        <svg class="w-9 h-9 text-white transform rotate-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <h2 class="text-3xl font-extrabold text-pink-900 mb-2 tracking-tight">Password Changed!</h2>
                    <p class="text-sm text-pink-600/80 mb-8 font-medium">Your password has been successfully updated. You can now sign in with your new password.</p>
                    <button onclick="changePage('login')" class="btn-gradient w-full py-4 rounded-xl font-bold text-white tracking-wide">Back to Login</button>
                </div>
            </div>
        `;

        const renderFullPageContent = (title, content) => `
            <div class="glass-panel p-8 md:p-12 rounded-3xl w-full max-w-4xl mx-auto shadow-2xl my-4">
                <h1 class="text-3xl md:text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-pink-800 to-rose-600 mb-6 tracking-tight">${title}</h1>
                ${content}
            </div>
        `;

        const renderLandingAboutTeamPage = () => renderFullPageContent("Meet the Developers", `
            <p class="text-lg text-pink-700/90 mb-10 leading-relaxed font-medium">The dedicated team engineering your academic and technical support experience.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                ${[
                    {img: "https://i.imgur.com/KgYwm3e.jpeg", name: "Fracy Ala", role: "Support Leader lang po"},
                    {img: "https://i.imgur.com/ESUm79E.jpeg", name: "Gian Baladula", role: "Support Assistant Lang Po"},
                    {img: "https://i.imgur.com/2qRmcZ3.jpeg", name: "Alexander Maigue", role: "Support Lang Po"}
                ].map(dev => `
                    <div class="bg-white/60 p-6 rounded-2xl text-center border border-white hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                        <div class="relative w-32 h-32 mx-auto mb-5">
                            <div class="absolute inset-0 bg-gradient-to-br from-pink-400 to-rose-400 rounded-full blur-md opacity-50 group-hover:opacity-100 transition-opacity"></div>
                            <img src="${dev.img}" class="relative w-32 h-32 object-cover rounded-full border-4 border-white shadow-lg" alt="${dev.name}">
                        </div>
                        <h3 class="text-xl font-bold text-pink-900">${dev.name}</h3>
                        <p class="text-sm font-semibold text-pink-600 mt-1">${dev.role}</p>
                    </div>
                `).join('')}
            </div>
        `);

        const getDetailedPrivacyHTML = () => `
            <div class="space-y-6 text-pink-900/90 leading-relaxed font-medium text-sm md:text-base">
                <p class="text-xs text-pink-500 uppercase tracking-widest font-bold">Last Updated: September 2026</p>
                <p>At <strong>Pink Help Desk Knowledge Base System</strong>, we treat your personal privacy with the highest priority. This Privacy Policy details our comprehensive framework regarding how we collect, store, utilize, share, and safeguard your personal information when you register, access, or interact with our support infrastructure.</p>

                <div class="bg-white/60 p-6 rounded-2xl border border-pink-200/60 shadow-sm space-y-3">
                    <h3 class="text-lg font-bold text-pink-900">1. Information We Collect</h3>
                    <p>To deliver seamless assistance and process support tickets effectively, we collect several types of data:</p>
                    <ul class="list-disc pl-5 space-y-2">
                        <li><strong>Personal Identification Data:</strong> Full Name, Official Institutional Email Address, Student/Employee ID, Program, and Year Level upon registration.</li>
                        <li><strong>Support & Interaction Content:</strong> Information included in ticket submissions, descriptions of technical issues, system screenshots, attached logs, and correspondence histories with support agents.</li>
                        <li><strong>Technical & Usage Metadata:</strong> IP address, browser specification, device type, operating system version, session timestamps, and page interaction logs recorded during navigation.</li>
                    </ul>
                </div>

                <div class="bg-white/60 p-6 rounded-2xl border border-pink-200/60 shadow-sm space-y-3">
                    <h3 class="text-lg font-bold text-pink-900">2. How We Use Your Information</h3>
                    <p>We process your data strictly in accordance with applicable data privacy statutes and for legitimate administrative purposes:</p>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>To verify identity and confirm active institutional membership prior to offering technical assistance.</li>
                        <li>To track, route, escalate, and resolve user-submitted technical, academic, or administrative support requests.</li>
                        <li>To update and optimize Knowledge Base articles through statistical analysis of common search queries and system issues.</li>
                        <li>To send automated email notifications regarding ticket status updates, security advisories, or system maintenance schedules.</li>
                    </ul>
                </div>

                <div class="bg-white/60 p-6 rounded-2xl border border-pink-200/60 shadow-sm space-y-3">
                    <h3 class="text-lg font-bold text-pink-900">3. Data Sharing & Third-Party Disclosure</h3>
                    <p>We maintain a strict stance against selling, renting, or trading your personal data to external advertisers or third parties. Disclosure only occurs under the following controlled circumstances:</p>
                    <ul class="list-disc pl-5 space-y-2">
                        <li><strong>Authorized Administrative Staff:</strong> Assigned IT administrators and designated support personnel who require access to handle specific support cases.</li>
                        <li><strong>Legal & Regulatory Compliance:</strong> When required by lawful court orders, university directives, or legal processes to protect student safety and institutional security.</li>
                    </ul>
                </div>

                <div class="bg-white/60 p-6 rounded-2xl border border-pink-200/60 shadow-sm space-y-3">
                    <h3 class="text-lg font-bold text-pink-900">4. Data Security & Storage</h3>
                    <p>We implement industry-standard administrative, physical, and technical safeguards. All data transfers across our networks are encrypted via Secure Sockets Layer (SSL) technologies. Passwords and credentials stored within our databases undergo secure hashing protocols.</p>
                </div>

                <div class="bg-white/60 p-6 rounded-2xl border border-pink-200/60 shadow-sm space-y-3">
                    <h3 class="text-lg font-bold text-pink-900">5. User Rights & Data Protection</h3>
                    <p>As a registered user, you hold specific rights regarding your personal information:</p>
                    <ul class="list-disc pl-5 space-y-2">
                        <li><strong>Right to Access:</strong> You may request a copy of the personal data stored in your system profile.</li>
                        <li><strong>Right to Correction:</strong> You may update inaccurate personal details directly via your Profile setting or via administrative appeal.</li>
                        <li><strong>Right to Erasure:</strong> Upon graduation or institutional separation, you may request account archiving or deletion subject to mandatory record retention laws.</li>
                    </ul>
                </div>

                <div class="bg-white/60 p-6 rounded-2xl border border-pink-200/60 shadow-sm space-y-3">
                    <h3 class="text-lg font-bold text-pink-900">6. Policy Updates & Contact</h3>
                    <p>We reserve the right to modify this Data Privacy Policy periodically. Significant updates will be announced via system notifications. For privacy queries, email us at <span class="text-pink-600 font-bold underline">privacy@helpdesk.edu.ph</span>.</p>
                </div>
            </div>
        `;

        const getDetailedTermsHTML = () => `
            <div class="space-y-6 text-pink-900/90 leading-relaxed font-medium text-sm md:text-base">
                <p class="text-xs text-pink-500 uppercase tracking-widest font-bold">Last Updated: September 2026</p>
                <p>Welcome to the <strong>Pink Help Desk Knowledge Base System</strong>. By registering, accessing, or using any feature of this platform, you enter into a binding agreement to adhere strictly to the terms, conditions, and operational policies detailed herein.</p>

                <div class="bg-white/60 p-6 rounded-2xl border border-pink-200/60 shadow-sm space-y-3">
                    <h3 class="text-lg font-bold text-pink-900">1. Acceptance of Terms & Eligibility</h3>
                    <p>Use of this portal is restricted exclusively to active students, faculty, and authorized staff members of the institution. By logging in or submitting requests, you certify that all information provided is true, accurate, and belongs solely to you.</p>
                </div>

                <div class="bg-white/60 p-6 rounded-2xl border border-pink-200/60 shadow-sm space-y-3">
                    <h3 class="text-lg font-bold text-pink-900">2. User Account Responsibilities & Security</h3>
                    <p>To ensure system integrity and security, users must uphold strict credential management standards:</p>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>You are solely responsible for maintaining the confidentiality of your login password and account credentials.</li>
                        <li>Sharing account credentials with fellow students, external third parties, or unauthorized individuals is strictly prohibited.</li>
                        <li>You agree to notify technical support immediately if you suspect unauthorized access or any breach of security involving your account.</li>
                    </ul>
                </div>

                <div class="bg-white/60 p-6 rounded-2xl border border-pink-200/60 shadow-sm space-y-3">
                    <h3 class="text-lg font-bold text-pink-900">3. Code of Conduct & Acceptable Use</h3>
                    <p>Users must maintain standard academic integrity and professional decorum when interacting with support agents or using knowledge resources. You strictly agree NOT to:</p>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>Submit fraudulent, frivolous, offensive, abusive, harassing, or defamatory support tickets or communications.</li>
                        <li>Attempt to upload harmful computer viruses, malicious scripts, malware, or exploit software vulnerabilities in the portal.</li>
                        <li>Interfere with or disrupt the performance, server operations, or network connections supporting the Help Desk platform.</li>
                        <li>Scrape, reverse-engineer, or systematically harvest data and solutions from the portal without written authorization.</li>
                    </ul>
                </div>

                <div class="bg-white/60 p-6 rounded-2xl border border-pink-200/60 shadow-sm space-y-3">
                    <h3 class="text-lg font-bold text-pink-900">4. Service Availability & Ticket Resolutions</h3>
                    <p>While our team strives for continuous availability and prompt resolution times:</p>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>The system is provided on an "AS IS" and "AS AVAILABLE" basis. Temporary downtime for scheduled system upgrades or unforeseen technical maintenance may occur without advance notice.</li>
                        <li>Ticket response times vary based on ticket severity, queue volume, and operating hours. Submission does not guarantee an instantaneous resolution.</li>
                    </ul>
                </div>

                <div class="bg-white/60 p-6 rounded-2xl border border-pink-200/60 shadow-sm space-y-3">
                    <h3 class="text-lg font-bold text-pink-900">5. Intellectual Property Rights</h3>
                    <p>All materials contained within the Knowledge Base, including branding, article content, layout graphics, UI components, code, and documentation, are the exclusive intellectual property of the Help Desk Development Team and the educational institution.</p>
                </div>

                <div class="bg-white/60 p-6 rounded-2xl border border-pink-200/60 shadow-sm space-y-3">
                    <h3 class="text-lg font-bold text-pink-900">6. Account Termination & Sanctions</h3>
                    <p>Failure to comply with these terms may result in formal warnings, temporary account suspension, or permanent revocation of access to the support portal, alongside administrative action under student conduct guidelines.</p>
                </div>
            </div>
        `;

        const renderLandingDataPrivacyPage = () => renderFullPageContent("Data Privacy Policy", getDetailedPrivacyHTML());
        const renderLandingTermsPage = () => renderFullPageContent("Terms of Service", getDetailedTermsHTML());

        window.changePage = (page) => {
            closeMenu();
            window.scrollTo({ top: 0, behavior: 'smooth' });
            const container = document.getElementById('main-app-container');
            const hero = document.getElementById('landing-hero');
            
            if (['login', 'register', 'forgot-password'].includes(page)) {
                hero.classList.remove('hidden');
                hero.classList.add('flex');
                container.className = 'w-full lg:w-1/2 flex justify-center animate-fade-in-up';
            } else {
                hero.classList.remove('flex');
                hero.classList.add('hidden');
                container.className = 'w-full flex justify-center animate-fade-in-up';
            }

            if (page === 'login') container.innerHTML = renderLoginPage();
            else if (page === 'register') container.innerHTML = renderRegisterPage();
            else if (page === 'forgot-password') container.innerHTML = renderForgotPasswordPage();
            else if (page === 'about-team') container.innerHTML = renderLandingAboutTeamPage();
            else if (page === 'privacy') container.innerHTML = renderLandingDataPrivacyPage();
            else if (page === 'terms') container.innerHTML = renderLandingTermsPage();
        };

        const categories = [
            {
                id: 'accounts-login', name: 'Accounts & Portal Access',
                description: 'Password resets, 2FA login issues, student ID creation, and portal troubleshooting.',
                logo: 'https://cdn.manilastandard.net/wp-content/uploads/2025/09/story-foto-1-1.jpg',
                articles: [
                    { id: 'reset-pwd', title: 'How to Reset Your School Portal Password', views: 1420, solution: 'Navigate to the portal homepage, click "Forgot Password", enter your school email, and follow the recovery link.' },
                    { id: '2fa-setup', title: 'Setting Up Two-Factor Authentication (2FA)', views: 890, solution: 'Log into profile settings, select Security -> Enable 2FA, and scan the QR code using Google Authenticator.' }
                ]
            },
            {
                id: 'wifi-network', name: 'Campus Wi-Fi & Infrastructure',
                description: 'Connecting to Campus Wi-Fi, VPN usage, and hardware support.',
                logo: 'https://static.wikia.nocookie.net/love-talk/images/3/37/Le-sserafim-kim-chae-won-source-music-girl-group-2022.jpg/revision/latest/scale-to-width-down/1000?cb=20230307142319',
                articles: [
                    { id: 'wifi-connect', title: 'Connecting to "Student-Secure" Wi-Fi', views: 3200, solution: 'Select "Student-Secure" network, enter your portal email as the username, and use your student password.' }
                ]
            },
            {
                id: 'enrolment-grades', name: 'Enrolment & Academic Records',
                description: 'Class registration, transcript requests, and subject add/drop.',
                logo: 'https://staticg.sportskeeda.com/editor/2025/08/61fb0-17558696348449-1920.jpg?w=640',
                articles: [
                    { id: 'transcript-req', title: 'Requesting Official Transcripts Online', views: 2150, solution: 'Go to Student Services -> Registrar -> Request Transcript. E-transcripts take 1-3 business days.' }
                ]
            },
            {
                id: 'tuition-fees', name: 'Tuition & Billing Support',
                description: 'Payment channels, fee breakdowns, and scholarship queries.',
                logo: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_XjkHcMW2UM5WEvrWEG_pDcbB4U4A62SXgrADbQKiEYg0Tor7YI-gA8FS&s=10',
                articles: [
                    { id: 'payment-channels', title: 'Available Online Payment Channels', views: 1950, solution: 'We accept OTC bank deposits, Online Banking, and GCash/Maya via the Student Finance Gateway.' }
                ]
            }
        ];

        let state = {
            currentPage: 'categories', activeCategoryIndex: 0, searchQuery: '', submittedTickets: [],
            user: { name: 'Fracy Ala', email: 'fracy@kld.edu.ph', studentId: '2025-2-000014', course: 'BS Information Systems' }
        };

        window.handleLogout = () => {
            localStorage.removeItem('helpDeskAuth');
            showLandingView();
        };

        window.toggleDashMenu = () => document.getElementById('dash-nav-links').classList.toggle('open');
        window.closeDashMenu = () => document.getElementById('dash-nav-links').classList.remove('open');

        const updateTicketCount = () => {
            const countNav = document.getElementById('ticket-count-nav');
            if (countNav) countNav.textContent = state.submittedTickets.length;
        };

        let carouselInterval;
        const startCarousel = () => {
            clearInterval(carouselInterval);
            carouselInterval = setInterval(() => { changeCarouselCard(1); }, 4000);
        };

        const changeCarouselCard = (delta) => {
            let nextIndex = state.activeCategoryIndex + delta;
            if (nextIndex < 0) nextIndex = categories.length - 1;
            if (nextIndex >= categories.length) nextIndex = 0;
            state.activeCategoryIndex = nextIndex;
            renderCategories();
            startCarousel();
        };

        window.handleTicketSubmit = () => {
            const subject = document.getElementById('ticket-subject').value;
            const categoryId = document.getElementById('ticket-category').value;
            const details = document.getElementById('ticket-details').value;

            if (!subject || !details) { showNotification("⚠️ Please fill out all required ticket fields."); return; }

            const newTicket = {
                id: 'TICK-' + Math.floor(1000 + Math.random() * 9000),
                subject, category: categories.find(c => c.id === categoryId)?.name || 'General Query',
                details, date: new Date().toLocaleDateString(), status: 'Open'
            };

            state.submittedTickets.unshift(newTicket);
            updateTicketCount();
            showNotification(`🎟️ Ticket ${newTicket.id} submitted successfully!`);
            changeDashPage('my-tickets');
        };

        // DITO NA INILAGAY ANG QUICK ANSWERS SA LOOB NG DASHBOARD VIEW
        const renderCategoriesPage = () => `
            <div class="bg-white p-6 md:p-8 rounded-xl shadow-xl mb-8 border-4 border-pink-300 animate-fade-in-up">
                <h1 class="text-2xl md:text-3xl font-extrabold text-pink-800 mb-2">Welcome to Help Desk Knowledge Base System</h1>
                <p class="text-pink-700 leading-relaxed">Search our self-service knowledge base articles first. If you cannot find a solution to your concern, you can submit a support ticket directly to our team.</p>
            </div>

            <!-- QUICK ANSWERS SECTION (INSIDE DASHBOARD) -->
            <div class="bg-white p-6 md:p-8 rounded-2xl shadow-lg mb-8 border border-pink-200 animate-fade-in-up">
                <h2 class="text-xl font-bold text-pink-900 mb-4 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-pink-500"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
                    Quick Answers
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="p-4 rounded-xl bg-pink-50 border border-pink-100">
                        <h3 class="font-bold text-pink-900 text-sm mb-1">What is the Pink Help Desk?</h3>
                        <p class="text-xs text-pink-700 leading-relaxed">A centralized support portal to assist students with technical and academic inquiries.</p>
                    </div>
                    <div class="p-4 rounded-xl bg-pink-50 border border-pink-100">
                        <h3 class="font-bold text-pink-900 text-sm mb-1">How do I access my portal?</h3>
                        <p class="text-xs text-pink-700 leading-relaxed">Log in using your registered school email address and password.</p>
                    </div>
                    <div class="p-4 rounded-xl bg-pink-50 border border-pink-100">
                        <h3 class="font-bold text-pink-900 text-sm mb-1">Forgot your password?</h3>
                        <p class="text-xs text-pink-700 leading-relaxed">Click 'Forgot Password' on the login screen to receive a secure reset link.</p>
                    </div>
                    <div class="p-4 rounded-xl bg-pink-50 border border-pink-100">
                        <h3 class="font-bold text-pink-900 text-sm mb-1">Can I track my tickets?</h3>
                        <p class="text-xs text-pink-700 leading-relaxed">Yes, you can view the real-time status of all tickets in the 'My Tickets' section.</p>
                    </div>
                    <div class="p-4 rounded-xl bg-pink-50 border border-pink-100">
                        <h3 class="font-bold text-pink-900 text-sm mb-1">What is the response time?</h3>
                        <p class="text-xs text-pink-700 leading-relaxed">Standard response times range from 24 to 48 hours depending on urgency.</p>
                    </div>
                    <div class="p-4 rounded-xl bg-pink-50 border border-pink-100">
                        <h3 class="font-bold text-pink-900 text-sm mb-1">What issues can I report?</h3>
                        <p class="text-xs text-pink-700 leading-relaxed">Wi-Fi, enrollment, grades, tuition, and portal access problems.</p>
                    </div>
                </div>
            </div>

            <div class="mb-8 animate-fade-in-up">
                <input type="text" id="kb-search-input" placeholder="Search FAQs, solutions, or topics (e.g. Wi-Fi, password, grades)..." 
                    value="${state.searchQuery}" oninput="state.searchQuery = this.value; renderSearchResults();"
                    class="w-full p-4 text-lg border-2 border-pink-300 rounded-xl focus:ring-2 focus:ring-pink-500 bg-white shadow-md text-pink-900" />
            </div>

            <div id="kb-dynamic-container">
                <h2 class="text-2xl font-bold mb-6 text-pink-800">Browse Knowledge Categories</h2>
                <div id="categories-container" class="relative group"></div>
            </div>
        `;

        const renderCategories = () => {
            const container = document.getElementById('categories-container');
            if (!container) return;
            const cat = categories[state.activeCategoryIndex];
            
            container.innerHTML = `
                <div class="artist-square h-[28rem] md:h-[24rem] w-full rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 transform hover:scale-[1.02] text-left cursor-pointer animate-slide-rtl flex flex-col justify-end p-6 md:p-8"
                     onclick="changeDashPage('category-articles', '${cat.id}')" style="background-image: url('${cat.logo}');">
                    <div class="artist-name-text text-white relative z-10 space-y-3">
                        <h2 class="text-2xl md:text-3xl font-extrabold tracking-tight">${cat.name}</h2>
                        <p class="text-sm md:text-md text-pink-100 max-w-2xl line-clamp-2 md:line-clamp-none">${cat.description}</p>
                        <button class="lazada-btn font-bold py-2.5 px-6 rounded-full shadow-md mt-2 flex items-center gap-2 text-sm uppercase tracking-wider">
                            Browse Category
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                        </button>
                    </div>
                </div>

                <button onclick="changeCarouselCard(-1)" class="absolute top-1/2 -left-4 md:-left-6 transform -translate-y-1/2 bg-white/80 text-pink-700 p-3 md:p-4 rounded-full shadow-lg hover:bg-white hover:text-pink-900 transition-colors focus:outline-none z-20 group-hover:opacity-100 opacity-90">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                </button>
                <button onclick="changeCarouselCard(1)" class="absolute top-1/2 -right-4 md:-right-6 transform -translate-y-1/2 bg-white/80 text-pink-700 p-3 md:p-4 rounded-full shadow-lg hover:bg-white hover:text-pink-900 transition-colors focus:outline-none z-20 group-hover:opacity-100 opacity-90">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </button>
            `;
        };

        const renderSearchResults = () => {
            const container = document.getElementById('kb-dynamic-container');
            if (!container) return;
            const query = state.searchQuery.toLowerCase().trim();
            if (!query) {
                container.innerHTML = `<h2 class="text-2xl font-bold mb-6 text-pink-800">Browse Knowledge Categories</h2><div id="categories-container" class="relative group"></div>`;
                renderCategories();
                return;
            }

            let results = [];
            categories.forEach(cat => {
                cat.articles.forEach(art => {
                    if (art.title.toLowerCase().includes(query) || art.solution.toLowerCase().includes(query)) {
                        results.push({ ...art, categoryName: cat.name, categoryId: cat.id });
                    }
                });
            });

            if (results.length === 0) {
                container.innerHTML = `
                    <div class="bg-white p-8 rounded-xl border-2 border-pink-200 text-center text-pink-700 animate-fade-in-up">
                        <p class="text-lg font-semibold mb-2">No direct solution articles found for "${query}"</p>
                        <button onclick="changeDashPage('submit-ticket')" class="lazada-btn font-bold py-2 px-6 rounded-full shadow-md mt-2">Submit a Support Ticket</button>
                    </div>`;
                return;
            }

            container.innerHTML = `
                <h2 class="text-xl font-bold mb-4 text-pink-800">Matching Articles (${results.length})</h2>
                <div class="space-y-3">
                    ${results.map(art => `
                        <div onclick="changeDashPage('article-detail', '${art.categoryId}', '${art.id}')" class="product-card-button cursor-pointer">
                            <span class="text-xs font-bold text-pink-500 uppercase">${art.categoryName}</span>
                            <h3 class="text-md font-bold text-pink-900">${art.title}</h3>
                            <p class="text-pink-700 text-sm line-clamp-2">${art.solution}</p>
                        </div>
                    `).join('')}
                </div>`;
        };

        const renderSubmitTicketPage = () => `
            <div class="bg-white p-8 rounded-xl shadow-2xl max-w-2xl mx-auto border-4 border-pink-300 animate-fade-in-up">
                <h1 class="text-2xl font-bold text-pink-800 mb-2">Submit Support Ticket</h1>
                <form onsubmit="event.preventDefault(); handleTicketSubmit();" class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-pink-700 mb-1">Category</label>
                        <select id="ticket-category" class="w-full p-3 border border-pink-300 rounded-lg bg-white">
                            ${categories.map(c => `<option value="${c.id}">${c.name}</option>`).join('')}
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-pink-700 mb-1">Subject</label>
                        <input type="text" id="ticket-subject" placeholder="Summary of your issue..." class="w-full p-3 border border-pink-300 rounded-lg" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-pink-700 mb-1">Details</label>
                        <textarea id="ticket-details" rows="4" placeholder="Describe your concern..." class="w-full p-3 border border-pink-300 rounded-lg" required></textarea>
                    </div>
                    <button type="submit" class="lazada-btn w-full py-3 rounded-full font-bold uppercase tracking-wider">Submit Request</button>
                </form>
            </div>
        `;

        const renderMyTicketsPage = () => `
            <h1 class="text-3xl font-extrabold mb-6 text-pink-800">Submitted Tickets (${state.submittedTickets.length})</h1>
            ${state.submittedTickets.length === 0 ? `
                <div class="text-center py-12 bg-white p-8 rounded-xl border-2 border-pink-200">
                    <p class="text-lg text-pink-600 mb-4">No tickets submitted yet.</p>
                    <button onclick="changeDashPage('submit-ticket')" class="lazada-btn py-2 px-6 rounded-full font-bold">Submit First Ticket</button>
                </div>
            ` : `
                <div class="space-y-4">
                    ${state.submittedTickets.map(t => `
                        <div class="bg-white p-4 rounded-xl shadow border border-pink-200">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="font-bold text-pink-900">${t.subject}</h3>
                                <span class="text-xs bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full font-bold">${t.status}</span>
                            </div>
                            <p class="text-sm text-pink-700">${t.details}</p>
                        </div>
                    `).join('')}
                </div>
            `}
        `;

        const renderAccountPage = () => `
            <div class="bg-white p-8 rounded-xl shadow-2xl max-w-xl mx-auto border-4 border-pink-300 animate-fade-in-up text-center">
                <div class="w-20 h-20 bg-pink-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">${state.user.name.charAt(0)}</div>
                <h2 class="text-2xl font-bold text-pink-900">${state.user.name}</h2>
                <p class="text-pink-600 text-sm mb-4">${state.user.email}</p>
                <div class="text-left border-t border-pink-200 pt-4 space-y-2 text-sm">
                    <p><strong>Student ID:</strong> ${state.user.studentId}</p>
                    <p><strong>Course:</strong> ${state.user.course}</p>
                </div>
            </div>
        `;

        const renderCategoryArticlesPage = (catId) => {
            const cat = categories.find(c => c.id === catId);
            if (!cat) return changeDashPage('categories');
            return `
                <div class="animate-fade-in-up">
                    <button onclick="changeDashPage('categories')" class="text-pink-700 font-bold flex items-center gap-1.5 mb-6 hover:text-pink-900">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg> Back to Categories
                    </button>
                    <div class="flex items-center gap-6 mb-8 bg-white p-6 rounded-xl shadow-lg border border-pink-200">
                        <img src="${cat.logo}" alt="${cat.name}" class="w-24 h-24 rounded-full object-cover shadow-md border-4 border-white ring-2 ring-pink-300">
                        <div><h1 class="text-3xl font-extrabold text-pink-800 mb-1.5">${cat.name}</h1><p class="text-pink-700 text-md max-w-3xl">${cat.description}</p></div>
                    </div>
                    <h2 class="text-xl font-bold mb-5 text-pink-800">Support Articles</h2>
                    <div class="space-y-4">
                        ${cat.articles.map(art => `
                            <div onclick="changeDashPage('article-detail', '${cat.id}', '${art.id}')" class="product-card-button cursor-pointer">
                                <h3 class="text-md md:text-lg font-bold text-pink-900">${art.title}</h3>
                                <div class="text-pink-500 text-xs font-semibold flex items-center gap-3 mt-1 mb-2"><span>Views: ${art.views.toLocaleString()}</span><span>Last Updated: Aug 15, 2026</span></div>
                                <p class="text-pink-700 text-sm md:text-md line-clamp-2">${art.solution}</p>
                            </div>
                        `).join('')}
                    </div>
                </div>
            `;
        };

        const renderArticleDetailPage = (catId, artId) => {
            const cat = categories.find(c => c.id === catId);
            const art = cat?.articles.find(a => a.id === artId);
            if (!art) return changeDashPage('category-articles', catId);
            return `
                <div class="animate-fade-in-up">
                    <button onclick="changeDashPage('category-articles', '${cat.id}')" class="text-pink-700 font-bold flex items-center gap-1.5 mb-6 hover:text-pink-900">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg> Back to ${cat.name} Articles
                    </button>
                    <div class="bg-white p-8 md:p-10 rounded-2xl shadow-2xl border-4 border-pink-300 mb-8">
                        <div class="flex items-center justify-between mb-4 pb-4 border-b border-pink-100">
                             <h1 class="text-2xl md:text-3xl font-extrabold text-pink-900">${art.title}</h1>
                             <div class="text-pink-600 text-sm font-semibold flex items-center gap-4 text-right">
                                <span>Updated: Aug 15, 2026</span>
                                <div class="bg-pink-100 text-pink-700 px-3 py-1.5 rounded-full flex items-center gap-1.5 shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg> ${art.views.toLocaleString()} Views
                                </div>
                             </div>
                        </div>
                        <h2 class="text-lg font-bold mb-4 text-pink-800 uppercase tracking-wider">Locate solution</h2>
                        <div class="bg-pink-50 p-6 md:p-8 rounded-xl border border-pink-200 text-pink-800 leading-relaxed space-y-4 shadow-inner">
                            <p class="text-md md:text-lg">${art.solution}</p><p class="text-sm">For further assistance, please submit a support ticket via the main navigation bar.</p>
                        </div>
                    </div>
                </div>
            `;
        };

        const renderDashAboutTeamPage = () => `
            <div class="text-center animate-fade-in-up">
                <h1 class="text-3xl font-extrabold text-pink-800 mb-2">About Our Help Desk Team</h1>
                <p class="text-pink-600 mb-8">Meet the developers dedicated to assisting your academic and technical needs.</p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                    ${[
                        { img: "https://i.imgur.com/KgYwm3e.jpeg", name: "Fracy Ala", role: "Front-End Developer", quote: '"HTML • CSS"' },
                        { img: "https://i.imgur.com/ESUm79E.jpeg", name: "Gian Baladula", role: "Back-End Developer", quote: '"PHP  • Database Management"' },
                        { img: "https://i.imgur.com/2qRmcZ3.jpeg", name: "Alexander Maigue", role: "Technical Support Specialist", quote: '"Troubleshooting • User Assistance • Technical Support"' }
                    ].map(dev => `
                        <div class="bg-white p-6 rounded-xl shadow-lg border-2 border-pink-200 text-center">
                            <img src="${dev.img}" alt="${dev.name}" class="w-32 h-32 object-cover mx-auto mb-4 border-4 border-pink-500 rounded-full">
                            <h3 class="text-xl font-bold text-pink-900">${dev.name}</h3>
                            <p class="text-sm font-semibold text-pink-600 mb-2">${dev.role}</p>
                            <p class="text-sm italic text-pink-700">"${dev.quote.replace(/^"|"$/g, '')}"</p>
                        </div>
                    `).join('')}
                </div>
            </div>
        `;

        const renderDashDataPrivacyPage = () => `
            <div class="bg-white p-8 md:p-12 rounded-xl shadow-2xl max-w-4xl mx-auto border-4 border-pink-300 animate-fade-in-up">
                <h1 class="text-3xl font-bold text-pink-900 mb-6">Data Privacy Policy</h1>
                ${getDetailedPrivacyHTML()}
            </div>
        `;

        const renderDashTermsPage = () => `
            <div class="bg-white p-8 md:p-12 rounded-xl shadow-2xl max-w-4xl mx-auto border-4 border-pink-300 animate-fade-in-up">
                <h1 class="text-3xl font-bold text-pink-900 mb-6">Terms of Service</h1>
                ${getDetailedTermsHTML()}
            </div>
        `;

        window.changeDashPage = (page, catId = null, artId = null) => {
            closeDashMenu();
            window.scrollTo({ top: 0, behavior: 'smooth' });
            state.currentPage = page;
            const container = document.getElementById('dash-main-app-container');
            
            if (page === 'categories') container.innerHTML = renderCategoriesPage();
            else if (page === 'submit-ticket') container.innerHTML = renderSubmitTicketPage();
            else if (page === 'my-tickets') container.innerHTML = renderMyTicketsPage();
            else if (page === 'account') container.innerHTML = renderAccountPage();
            else if (page === 'about-team') container.innerHTML = renderDashAboutTeamPage();
            else if (page === 'privacy') container.innerHTML = renderDashDataPrivacyPage();
            else if (page === 'terms') container.innerHTML = renderDashTermsPage();
            else if (page === 'category-articles') container.innerHTML = renderCategoryArticlesPage(catId);
            else if (page === 'article-detail') container.innerHTML = renderArticleDetailPage(catId, artId);
            
            updateTicketCount();
            if (page === 'categories') renderCategories();
        };

        const showLandingView = () => {
            clearInterval(carouselInterval);
            document.getElementById('dashboard-view-wrapper').classList.add('hidden');
            document.getElementById('landing-view-wrapper').classList.remove('hidden');
            changePage('login');
        };

        const showDashboardView = () => {
            document.getElementById('landing-view-wrapper').classList.add('hidden');
            document.getElementById('dashboard-view-wrapper').classList.remove('hidden');
            changeDashPage('categories');
            startCarousel();
        };

        window.onload = () => {
            if (localStorage.getItem('helpDeskAuth') === 'true') {
                showDashboardView();
            } else {
                showLandingView();
            }
        };
    </script>
</body>
</html>