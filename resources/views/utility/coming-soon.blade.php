<x-guest-layout>
    <div class="min-h-screen">
        <div class="xl:absolute left-0 top-0 w-full">
            <div class="flex flex-wrap justify-between items-center py-6 container">
                <div>
                    <a href="index.hhtml">
                        <img src="images/logo/logo.svg" alt="" class="mb-10 dark_logo">
                        <img src="images/logo/logo-white.svg" alt="" class="mb-10 white_logo">
                    </a>
                </div>
                <div>
                    <button class="btn  btn-outline-dark btn-sm">
                        Contact us
                    </button>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="flex justify-between flex-wrap items-center min-h-screen">
                <div class="max-w-[500px] space-y-4">
                    <div class="relative flex space-x-3 items-center text-2xl text-slate-900 dark:text-white">
                        <span class="inline-block w-[25px] bg-secondary-500 h-[1px]"></span>
                        <span>Coming soon</span>
                    </div>
                    <div class="xl:text-[70px] xl:leading-[70px] text-4xl font-semibold text-slate-900 dark:text-white">
                        Get notified when we launch
                    </div>
                    <p class="font-normal text-slate-600 dark:text-slate-300 max-w-[400px]">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                    </p>
                    <div class="bg-white flex items-center px-3 rounded">
                        <input
                            type="text"
                            placeholder="Enter your email"
                            class="flex-1 bg-transparent h-full block w-full py-6 placeholder:text-secondary-500 text-base focus:outline-none
                                focus:ring-0"/>
                        <div class="flex-none">
                            <button type="button" class="btn btn-dark btn-sm px-6">
                                Notify me
                            </button>
                        </div>
                    </div>
                    <div class="text-sm text-slate-500 dark:text-slate-400">
                        *Don’t worry we will not spam you :)
                    </div>
                </div>
                <div>
                    <img src="images/svg/img-1.svg" alt="">
                </div>
            </div>
        </div>
        <div class="xl:fixed bottom-0 w-full">
            <div class="container">
                <div class="md:flex justify-between items-center flex-wrap space-y-4 py-6">
                    <div>
                        <ul class="flex md:justify-start justify-center space-x-3">
                            <li>
                                <a href="#" class="social-link">
                                    <iconify-icon icon="icomoon-free:facebook"></iconify-icon>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-link">
                                    <iconify-icon icon="icomoon-free:twitter"></iconify-icon>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-link">
                                    <iconify-icon icon="icomoon-free:linkedin2"></iconify-icon>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-link">
                                    <iconify-icon icon="icomoon-free:google"></iconify-icon>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul class="flex md:justify-start justify-center space-x-3">
                            <li>
                                <a href="#" class="text-slate-500 dark:text-slate-400 text-sm transition duration-150 hover:text-slate-900">Privacy
                                    policy</a>
                            </li>
                            <li>
                                <a href="#" class="text-slate-500 dark:text-slate-400 text-sm transition duration-150 hover:text-slate-900">Faq</a>
                            </li>
                            <li>
                                <a href="#" class="text-slate-500 dark:text-slate-400 text-sm transition duration-150 hover:text-slate-900">Email us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
