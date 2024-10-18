<footer class="relative w-full mx-auto z-10 overflow-hidden bg-gray-950">
    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-8 xl:px-0">
        <div class="flex flex-wrap items-center justify-between gap-8 border-b border-white/[0.15] pb-10 pt-10">
            <div class="w-full max-w-[350px]">
                <h4 class="mb-2.5 text-custom-2xl font-bold leading-[30px] text-white">Join Our Newsletter</h4>
                <p class="text-custom-sm text-white/50">We'll send you a friendly newsletter on updates, once a month.
                    No spam.</p>
            </div>
            <div class="w-full max-w-[452px]">
                <form action="" method="POST" accept-charset="utf-8">
                    @csrf
                    <div class="flex">
                        <input id="newsLatterEmail" placeholder="Enter your email"
                            class="w-full rounded-l-lg border border-gray-3 bg-white px-6 py-2 outline-none placeholder:text-dark-4"
                            type="email" name="email">
                        <button type="submit"
                            class="inline-flex rounded-r-lg bg-blue-900 shadow-sm px-6 py-2 text-custom-sm font-medium text-white duration-200 ease-out">
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="flex flex-wrap gap-10 pb-10 pt-10 xl:flex-nowrap xl:justify-between xl:gap-10 xl:pb-20">
            <div class="w-full max-w-[330px]">
                <a class="inline-block primary-color font-extrabold text-3xl" href="/">
                    Static blog laravel
                </a>
                <p class="mt-6 text-white/50">Handcrafted HTML, Tailwind and Bootstrap Templates and UI Kits</p>
                <div class="mt-9 flex items-center gap-6"><a href="https://pimjo.com/community" aria-label="Discord"
                        target="_blank" rel="noopener noreferrer"
                        class="flex text-white/50 transition-all duration-200 hover:text-white">
                        <svg class="fill-current" width="26" height="26" viewBox="0 0 26 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.7744 6.12459C20.7684 6.11289 20.7584 6.10373 20.7462 6.09874C19.3388 5.45285 17.8536 4.99216 16.3278 4.72818C16.3139 4.7256 16.2996 4.72746 16.2868 4.7335C16.2741 4.73953 16.2636 4.74943 16.2568 4.76179C16.0544 5.129 15.8708 5.50619 15.7065 5.89191C14.0613 5.64221 12.3879 5.64221 10.7428 5.89191C10.5773 5.50521 10.3907 5.12792 10.1836 4.76179C10.1765 4.7497 10.166 4.74003 10.1533 4.73403C10.1406 4.72804 10.1264 4.726 10.1126 4.72818C8.58561 4.99136 7.09938 5.45207 5.6913 6.09874C5.67925 6.10384 5.66908 6.11257 5.6622 6.1237C2.84641 10.3297 2.07527 14.4292 2.45345 18.4806C2.45452 18.4906 2.45757 18.5002 2.46242 18.5089C2.46728 18.5176 2.47383 18.5253 2.48171 18.5314C4.12099 19.7443 5.95433 20.67 7.90354 21.269C7.91727 21.2731 7.93193 21.2729 7.94555 21.2685C7.95918 21.264 7.9711 21.2555 7.97973 21.244C8.39844 20.6745 8.76948 20.0714 9.08907 19.4409C9.09346 19.4322 9.09596 19.4227 9.09642 19.413C9.09688 19.4033 9.09528 19.3937 9.09172 19.3846C9.08817 19.3756 9.08274 19.3674 9.07579 19.3606C9.06885 19.3539 9.06055 19.3486 9.05143 19.3453C8.46632 19.1215 7.89985 18.8516 7.35735 18.5383C7.3475 18.5325 7.33922 18.5244 7.33325 18.5146C7.32729 18.5049 7.32381 18.4938 7.32314 18.4824C7.32246 18.471 7.32461 18.4596 7.32938 18.4492C7.33416 18.4388 7.34142 18.4298 7.35052 18.4229C7.46434 18.3376 7.57824 18.2489 7.68693 18.1593C7.69659 18.1513 7.70828 18.1462 7.72067 18.1446C7.73307 18.1429 7.74569 18.1447 7.75711 18.1498C11.3111 19.7719 15.1583 19.7719 18.6706 18.1498C18.682 18.1444 18.6948 18.1423 18.7074 18.1438C18.7199 18.1454 18.7318 18.1504 18.7416 18.1584C18.8504 18.248 18.9642 18.3376 19.0789 18.4229C19.0881 18.4297 19.0954 18.4387 19.1002 18.4491C19.1051 18.4594 19.1073 18.4708 19.1067 18.4822C19.1061 18.4936 19.1027 18.5047 19.0968 18.5145C19.0909 18.5243 19.0827 18.5325 19.0729 18.5383C18.5317 18.8543 17.9647 19.124 17.3781 19.3445C17.369 19.348 17.3607 19.3534 17.3538 19.3603C17.3469 19.3671 17.3415 19.3754 17.3381 19.3845C17.3346 19.3936 17.333 19.4033 17.3336 19.4131C17.3341 19.4228 17.3367 19.4323 17.3412 19.441C17.666 20.0682 18.0365 20.6707 18.4495 21.2436C18.4579 21.2554 18.4698 21.2642 18.4834 21.2689C18.4971 21.2735 18.5119 21.2737 18.5257 21.2695C20.4792 20.6717 22.3164 19.7448 23.958 18.5286C23.966 18.5228 23.9726 18.5153 23.9775 18.5067C23.9824 18.4981 23.9853 18.4886 23.9862 18.4787C24.4381 13.7976 23.2267 9.73139 20.7744 6.12459ZM9.62089 16.0136C8.55096 16.0136 7.66939 15.0315 7.66939 13.8257C7.66939 12.6199 8.53508 11.6371 9.62089 11.6371C10.7167 11.6371 11.5897 12.6276 11.5724 13.825C11.5709 14.9979 10.7067 16.0136 9.62089 16.0136ZM16.8374 16.0136C15.7675 16.0136 14.8859 15.0315 14.8859 13.8257C14.8859 12.6199 15.7479 11.6371 16.8374 11.6371C17.9332 11.6371 18.8063 12.6276 18.7889 13.825C18.7875 14.9979 17.9306 16.0136 16.8374 16.0136Z"
                                fill="" fill-opacity=""></path>
                        </svg>
                    </a>
                    <a href="https://twitter.com/uideckHQ" aria-label="twitter social link" target="_blank"
                        rel="noopener noreferrer"
                        class="flex text-white/50 transition-all duration-200 hover:text-white">
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.063 0.830078L8.558 5.30508L12.601 0.830078H15.055L9.696 6.76108L16 14.8301H11.062L7.196 9.93708L2.771 14.8301H0.316L6.051 8.48808L0 0.830078H5.063ZM4.323 2.17708H2.866L11.741 13.4091H13.101L4.323 2.17708Z"
                                fill="currentColor"></path>
                        </svg>
                    </a>
                    <a href="https://github.com/uideck" aria-label="github social link" target="_blank"
                        rel="noopener noreferrer"
                        class="flex text-white/50 transition-all duration-200 hover:text-white"><svg
                            class="fill-current" width="26" height="26" viewBox="0 0 26 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.2535 3C7.5916 3 3 7.5904 3 13.2535C3 17.7836 5.93783 21.6272 10.012 22.9828C10.5244 23.0778 10.7126 22.7604 10.7126 22.4895C10.7126 22.2451 10.703 21.4373 10.6986 20.5807C7.84586 21.2008 7.24407 19.3709 7.24407 19.3709C6.77773 18.1856 6.10557 17.8704 6.10557 17.8704C5.1753 17.2342 6.17546 17.2472 6.17546 17.2472C7.20527 17.3195 7.74753 18.304 7.74753 18.304C8.6619 19.8715 10.1462 19.4181 10.7312 19.1562C10.8235 18.4934 11.089 18.0408 11.3823 17.7849C9.10486 17.5258 6.71073 16.6464 6.71073 12.7175C6.71073 11.598 7.11128 10.6834 7.76729 9.96525C7.66077 9.70689 7.30987 8.66383 7.86658 7.25155C7.86658 7.25155 8.72745 6.97632 10.6863 8.30305C11.5045 8.07578 12.3818 7.96178 13.253 7.95793C14.1245 7.96203 15.0022 8.07602 15.8216 8.30305C17.7786 6.97656 18.6385 7.25179 18.6385 7.25179C19.1966 8.66407 18.8457 9.70689 18.7392 9.96549C19.3967 10.6832 19.7943 11.598 19.7943 12.7178C19.7943 16.6558 17.3956 17.5229 15.1124 17.7764C15.4801 18.0945 15.8079 18.7187 15.8079 19.6755C15.8079 21.0473 15.7963 22.1514 15.7963 22.489C15.7963 22.7613 15.9809 23.0814 16.5005 22.9807C20.5725 21.6233 23.5065 17.7812 23.5065 13.2525C23.507 7.59064 18.9164 3 13.2535 3Z"
                                fill=""></path>
                            <path
                                d="M6.88521 17.7216C6.86231 17.7727 6.78206 17.7879 6.70928 17.7529C6.63456 17.7192 6.59311 17.65 6.61721 17.5987C6.6389 17.5466 6.7194 17.5319 6.79387 17.5669C6.86858 17.6006 6.91075 17.6705 6.88521 17.7216ZM7.30046 18.1853C7.25153 18.2304 7.15586 18.2094 7.09078 18.1376C7.02379 18.066 7.01125 17.9703 7.0609 17.9245C7.11103 17.8792 7.20381 17.9004 7.27057 17.972C7.33805 18.0443 7.35131 18.139 7.30022 18.185L7.30046 18.1853ZM7.70462 18.7753C7.64196 18.8191 7.53905 18.7782 7.47567 18.6868C7.41252 18.596 7.41252 18.4868 7.47687 18.4427C7.5405 18.3988 7.64172 18.4383 7.70583 18.5287C7.76897 18.6215 7.76897 18.7309 7.70462 18.7753ZM8.25845 19.346C8.20229 19.4079 8.08251 19.3913 7.99503 19.3067C7.90538 19.224 7.88055 19.1066 7.93671 19.0447C7.99382 18.9828 8.11409 19.0001 8.20229 19.084C8.29146 19.1664 8.31846 19.2843 8.25845 19.346ZM9.02291 19.6771C8.99785 19.7576 8.88265 19.794 8.76648 19.76C8.65032 19.7248 8.57464 19.6308 8.59778 19.5499C8.62188 19.4689 8.73804 19.431 8.85493 19.4674C8.97061 19.5021 9.04677 19.5952 9.02291 19.6771ZM9.8616 19.7386C9.86474 19.8229 9.76617 19.8933 9.64422 19.8947C9.52179 19.8976 9.42249 19.8292 9.42105 19.7458C9.42105 19.6605 9.51745 19.5911 9.63988 19.5891C9.76183 19.5867 9.8616 19.6547 9.8616 19.7386ZM10.6425 19.6058C10.6569 19.6882 10.5726 19.773 10.4513 19.7954C10.3323 19.8176 10.2224 19.7665 10.207 19.6846C10.1925 19.6002 10.2785 19.5159 10.3974 19.4937C10.5186 19.4725 10.627 19.5219 10.6425 19.6058Z"
                                fill=""></path>
                        </svg></a><a href="https://facebook.com/uideckHQ" aria-label="facebook social link"
                        target="_blank" rel="noopener noreferrer"
                        class="flex text-white/50 transition-all duration-200 hover:text-white"><svg width="22"
                            height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.1 10.494V7.42717C12.1 6.23996 13.085 5.27753 14.3 5.27753H16.5V2.05308L13.5135 1.84464C10.9664 1.66688 8.8 3.63794 8.8 6.13299V10.494H5.5V13.7184H8.8V20.1668H12.1V13.7184H15.4L16.5 10.494H12.1Z"
                                fill="currentColor"></path>
                        </svg></a>
                </div>
            </div>
            <div class="w-full sm:w-auto">
                <h4 class="mb-9 whitespace-nowrap text-xl font-semibold text-white">Quick Links</h4>
                <ul class="flex flex-col gap-3.5">
                    <li><a class="whitespace-nowrap text-white/50 duration-200 ease-out hover:text-white"
                            target="_blank" rel="noopener noreferrer" href="https://pimjo.com/about">About Us</a>
                    </li>
                    <li><a class="whitespace-nowrap text-white/50 duration-200 ease-out hover:text-white"
                            target="_blank" rel="noopener noreferrer" href="https://pimjo.com/#products">Products</a>
                    </li>
                    <li><a class="whitespace-nowrap text-white/50 duration-200 ease-out hover:text-white" target="_self"
                            rel="" href="/all-access">Pricing</a></li>
                    <li><a class="whitespace-nowrap text-white/50 duration-200 ease-out hover:text-white" target="_self"
                            rel="" href="/docs">Docs</a></li>
                </ul>
            </div>
            <div class="w-full sm:w-auto">
                <h4 class="mb-9 text-xl font-semibold text-white">Support</h4>
                <ul class="flex flex-col gap-3.5">
                    <li><a class="whitespace-nowrap text-white/50 duration-200 ease-out hover:text-white" target="_self"
                            rel="" href="/support">Open a Ticket</a></li>
                    <li><a class="whitespace-nowrap text-white/50 duration-200 ease-out hover:text-white"
                            target="_self" rel="" href="/all-access">All Access Pass</a></li>
                    <li><a class="whitespace-nowrap text-white/50 duration-200 ease-out hover:text-white"
                            target="_self" rel="" href="/support-policy">Support Policy</a></li>
                    <li><a class="whitespace-nowrap text-white/50 duration-200 ease-out hover:text-white"
                            target="_self" rel="" href="/blog">UIdeck Blog</a></li>
                </ul>
            </div>
            <div class="w-full sm:w-auto">
                <h4 class="mb-9 text-xl font-semibold text-white">FAQ’s</h4>
                <ul class="flex flex-col gap-3.5">
                    <li><a class="whitespace-nowrap text-white/50 duration-200 ease-out hover:text-white"
                            target="_self" rel="" href="/terms-conditions">Terms &amp; Conditions</a></li>
                    <li><a class="whitespace-nowrap text-white/50 duration-200 ease-out hover:text-white"
                            target="_self" rel="" href="/license">License &amp; Copyright</a></li>
                    <li><a class="whitespace-nowrap text-white/50 duration-200 ease-out hover:text-white"
                            target="_self" rel="" href="/refund-policy">Refund Policy</a></li>
                    <li><a class="whitespace-nowrap text-white/50 duration-200 ease-out hover:text-white"
                            target="_self" rel="" href="/privacy-policy">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="w-full sm:w-auto">
                <h4 class="mb-9 text-xl font-semibold text-white">Templates</h4>
                <ul class="flex flex-col gap-3.5">
                    <li><a class="whitespace-nowrap text-white/50 duration-200 ease-out hover:text-white"
                            target="_self" rel="" href="/templates">All Templates</a></li>
                    <li><a class="whitespace-nowrap text-white/50 duration-200 ease-out hover:text-white"
                            target="_self" rel="" href="/bootstrap-templates">HTML Templates</a></li>
                    <li><a class="whitespace-nowrap text-white/50 duration-200 ease-out hover:text-white"
                            target="_self" rel="" href="/tailwind-templates">Tailwind Templates</a></li>
                    <li><a class="whitespace-nowrap text-white/50 duration-200 ease-out hover:text-white"
                            target="_self" rel="" href="/react-templates">React Templates</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-white/[0.15] py-5">
            <p class="text-center text-white/50">© 2024 TuanTQ, all rights reserved — A Product by TuanTQ</p>
        </div>
    </div>
</footer>
