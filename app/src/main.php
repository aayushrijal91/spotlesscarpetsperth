<header>
    <nav>
        <div class="container">
            <div class="flex flex-wrap items-center justify-between py-6">
                <div class="w-fit">
                    <a href="./"><?= renderImg('logo.png', 'logo') ?></a>
                </div>
                <div class="w-fit">
                    <div class="flex flex-wrap items-center gap-x-4">
                        <div class="w-fit text-xl">
                            <p class="uppercase font-extrabold leading-none">We are open!</p>
                            <p class="font-medium">07:00-18:00</p>
                        </div>
                        <div class="w-fit">
                            <div class="flex flex-wrap gap-x-2">
                                <div class="w-fit">
                                    <a href="<?= $facebook ?>" target="_blank">
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.4814 25C5.52103 24.9783 -0.0646877 19.3708 0.000565956 12.3887C0.0701699 5.22816 5.99955 -0.157444 12.8164 0.00351484C19.5114 0.168824 25.158 5.73279 25.0014 12.7976C24.8492 19.5448 19.307 25.0261 12.4771 24.9957L12.4814 25ZM16.153 7.59904V4.75833C14.9785 4.81489 13.8213 4.78878 12.6859 4.94539C11.6288 5.08895 10.8588 5.72844 10.6239 6.83775C10.5325 7.25973 10.5064 7.70345 10.489 8.13412C10.4673 8.74751 10.4847 9.36524 10.4847 10.0134H8.84027V12.7193H10.4934V20.702H13.6995V12.6758H15.9355C16.0182 11.7709 16.0965 10.9052 16.1791 9.99603H13.7038C13.7038 9.3957 13.6908 8.83886 13.7038 8.27768C13.7169 7.76435 13.904 7.59469 14.4303 7.59034C15.0002 7.59034 15.5657 7.59034 16.153 7.59034V7.59904Z" fill="#ED3D3D" />
                                            <path d="M16.1531 7.59904C15.5658 7.59904 15.0003 7.59904 14.4304 7.59904C13.904 7.59904 13.717 7.77305 13.7039 8.28638C13.6909 8.84321 13.7039 9.40004 13.7039 10.0047H16.1792C16.0965 10.9139 16.0182 11.7796 15.9356 12.6845H13.6996V20.7107H10.4934V12.728H8.84033V10.0221H10.4847C10.4847 9.36959 10.4673 8.7562 10.4891 8.14282C10.5065 7.70779 10.5326 7.26842 10.6239 6.84645C10.8588 5.73713 11.6245 5.102 12.6859 4.95409C13.8214 4.79748 14.9785 4.82358 16.1531 4.76703V7.60774V7.59904Z" fill="white" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="w-fit">
                                    <a href="<?= $instagram ?>" target="_blank">
                                        <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.4983 24.9962C5.58142 25.0005 -0.00429581 19.4061 0.00440468 12.4718C0.0174554 5.42005 5.81198 -0.0351586 12.5505 0.0039936C19.4674 0.0431458 25.014 5.61581 25.014 12.6023C25.014 19.4104 19.3804 24.9875 12.494 24.9918L12.4983 24.9962ZM12.5114 20.0369C13.7512 19.9803 14.991 19.9673 16.2221 19.8585C17.81 19.7193 19.0759 18.6491 19.4718 17.0961C19.6414 16.4349 19.7023 15.7301 19.7023 15.0428C19.7067 13.0634 19.7328 11.0797 19.6066 9.10906C19.4848 7.16885 17.9666 5.71152 16.0133 5.64626C13.6598 5.56796 11.302 5.57231 8.94851 5.64626C7.06485 5.70717 5.55097 7.22105 5.40306 9.09166C5.2073 11.5278 5.2073 13.9726 5.40306 16.4088C5.55097 18.2489 6.96045 19.6758 8.79625 19.8498C10.0274 19.9673 11.2672 19.9716 12.507 20.0282L12.5114 20.0369Z" fill="#ED3D3D" />
                                            <path d="M12.5114 20.0369C11.2715 19.9803 10.0317 19.976 8.80059 19.8585C6.96479 19.6845 5.55531 18.2576 5.4074 16.4175C5.21164 13.9814 5.21599 11.5365 5.4074 9.10038C5.55531 7.22542 7.06919 5.71588 8.95285 5.65498C11.3063 5.57668 13.6642 5.57668 16.0177 5.65498C17.9709 5.72023 19.4848 7.17757 19.611 9.11778C19.7371 11.0928 19.711 13.0765 19.7067 15.0515C19.7067 15.7389 19.6458 16.4436 19.4761 17.1048C19.0802 18.6535 17.8143 19.728 16.2265 19.8672C14.9953 19.976 13.7555 19.989 12.5157 20.0456L12.5114 20.0369ZM18.3885 12.7502C18.3885 11.741 18.4103 10.7317 18.3842 9.72681C18.332 7.94756 17.3358 6.9296 15.5522 6.89045C13.525 6.84695 11.4934 6.8513 9.46618 6.89045C7.70868 6.92525 6.66897 7.99106 6.64722 9.74856C6.62112 11.7671 6.62112 13.7812 6.64722 15.7998C6.67332 17.5486 7.71303 18.597 9.45313 18.6231C11.5064 18.6535 13.5598 18.6579 15.6087 18.6231C17.3184 18.597 18.3276 17.5703 18.3798 15.852C18.4103 14.8209 18.3842 13.7856 18.3842 12.7546L18.3885 12.7502Z" fill="white" />
                                            <path d="M18.3884 12.7502C18.3884 13.7812 18.4145 14.8166 18.384 15.8476C18.3318 17.5703 17.3226 18.5926 15.6129 18.6187C13.5596 18.6535 11.5063 18.6491 9.45732 18.6187C7.71287 18.5926 6.67751 17.5442 6.65141 15.7954C6.62531 13.7768 6.62531 11.7627 6.65141 9.74416C6.67316 7.98232 7.71287 6.91651 9.47037 6.88605C11.4976 6.8469 13.5292 6.8469 15.5564 6.88605C17.3443 6.92086 18.3405 7.94316 18.3884 9.72241C18.4188 10.7317 18.3927 11.7409 18.3927 12.7458L18.3884 12.7502ZM16.2263 12.7502C16.1828 10.6055 14.5123 8.99157 12.3589 9.06553C10.2795 9.13513 8.74388 10.9274 8.81783 12.9372C8.89179 14.847 10.571 16.487 12.5242 16.4696C14.5776 16.4522 16.2698 14.7556 16.2263 12.7502ZM17.2269 8.90022C17.2269 8.41734 16.8484 8.03887 16.3786 8.03887C15.9131 8.03887 15.5303 8.43039 15.5303 8.90457C15.5303 9.37439 15.9131 9.76592 16.3829 9.76592C16.8484 9.76592 17.2312 9.37439 17.2312 8.90022H17.2269Z" fill="#ED3D3D" />
                                            <path d="M16.2265 12.7546C16.2656 14.7644 14.5777 16.461 12.5244 16.4741C10.5711 16.4871 8.89195 14.8514 8.81799 12.9417C8.74404 10.9362 10.2797 9.1439 12.3591 9.06995C14.5125 8.99599 16.183 10.6099 16.2265 12.7546ZM12.5244 10.362C11.1758 10.362 10.1231 11.406 10.1144 12.7546C10.1057 14.0945 11.2063 15.1951 12.5418 15.1864C13.8556 15.1777 14.9431 14.0771 14.9431 12.7546C14.9431 11.4278 13.8643 10.362 12.5244 10.362Z" fill="white" />
                                            <path d="M17.2268 8.90456C17.2268 9.37874 16.844 9.77461 16.3785 9.77026C15.9087 9.77026 15.5259 9.37874 15.5259 8.90891C15.5259 8.43473 15.9087 8.04321 16.3742 8.04321C16.8484 8.04321 17.2225 8.42168 17.2225 8.90456H17.2268Z" fill="white" />
                                            <path d="M12.5243 10.3619C13.8642 10.3619 14.9387 11.4277 14.9431 12.7546C14.9431 14.077 13.8599 15.1733 12.5417 15.1864C11.2062 15.1951 10.1056 14.0944 10.1143 12.7546C10.123 11.406 11.1758 10.3619 12.5243 10.3619Z" fill="#ED3D3D" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="w-fit">
                                    <a href="mailto:<?= $admin_email ?>">
                                        <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.4956 25C5.53519 24.9783 -0.0505276 19.3708 0.0147261 12.3887C0.08433 5.22816 6.01371 -0.157444 12.8305 0.00351484C19.5256 0.168824 25.1722 5.73279 25.0156 12.7976C24.8633 19.5448 19.3211 25.0261 12.4912 24.9957L12.4956 25Z" fill="#ED3D3D" />
                                            <path d="M7.43604 8H17.5923C18.3772 8 19.0142 8.588 19.0142 9.3125V15.6875C19.0142 16.0356 18.8644 16.3694 18.5977 16.6156C18.331 16.8617 17.9694 17 17.5923 17H7.43604C7.05893 17 6.69727 16.8617 6.43062 16.6156C6.16396 16.3694 6.01416 16.0356 6.01416 15.6875V9.3125C6.01416 8.588 6.65116 8 7.43604 8ZM7.23291 15.6883C7.23291 15.7918 7.32391 15.8758 7.43604 15.8758H17.5923C17.6462 15.8758 17.6978 15.856 17.7359 15.8208C17.774 15.7857 17.7954 15.738 17.7954 15.6883V10.8568L12.8229 13.5478C12.7293 13.5985 12.6227 13.6253 12.5142 13.6253C12.4056 13.6253 12.299 13.5985 12.2054 13.5478L7.23291 10.8568V15.6883ZM17.7954 9.5525V9.3125C17.7954 9.26277 17.774 9.21508 17.7359 9.17992C17.6978 9.14475 17.6462 9.125 17.5923 9.125H7.43604C7.38216 9.125 7.3305 9.14475 7.2924 9.17992C7.25431 9.21508 7.23291 9.26277 7.23291 9.3125V9.5525L12.5142 12.41L17.7954 9.5525Z" fill="white" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-fit">
                            <a href="" class="text-black text-lg font-extrabold">Get in Contact with Us</a>
                        </div>
                        <div class="w-fit">
                            <a href="tel:<?= $phone_number ?>" class="text-white bg-primary h-[33px] text-lg font-bold flex items-center gap-x-2 px-4">
                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.1859 11.021L10.4689 9.814C10.1866 9.68775 9.87039 9.65852 9.56973 9.73088C9.26906 9.80325 9.00081 9.97313 8.80687 10.214L8.02387 11.193C6.74017 10.3693 5.64741 9.2806 4.81887 8L5.79786 7.217C6.03852 7.02311 6.20825 6.75504 6.28061 6.45459C6.35296 6.15414 6.32387 5.83819 6.19787 5.556L4.99987 2.832C4.86524 2.52868 4.62725 2.28304 4.32834 2.1389C4.02943 1.99475 3.68903 1.96148 3.36787 2.045L1.06787 2.645C0.734188 2.73134 0.444085 2.93773 0.253112 3.22465C0.0621385 3.51157 -0.0162829 3.85886 0.0328652 4.2C0.461311 7.17477 1.84172 9.93077 3.96745 12.0554C6.09318 14.1801 8.84987 15.5591 11.8249 15.986C12.1658 16.0343 12.5126 15.9552 12.7989 15.7639C13.0852 15.5726 13.291 15.2825 13.3769 14.949L13.9769 12.649C14.0603 12.3279 14.0265 11.9876 13.8815 11.6892C13.7365 11.3908 13.4899 11.1538 13.1859 11.021Z" fill="white" />
                                    <path d="M16.0189 8H14.0189C14.0173 6.40919 13.3846 4.88399 12.2598 3.75911C11.1349 2.63424 9.60968 2.00159 8.01887 2V0C10.1399 0.00238211 12.1733 0.846002 13.6731 2.34578C15.1729 3.84555 16.0165 5.879 16.0189 8Z" fill="white" />
                                    <path d="M12.0189 8H10.0189C10.0189 7.46957 9.80815 6.96086 9.43308 6.58579C9.05801 6.21071 8.5493 6 8.01887 6V4C9.07973 4 10.0971 4.42143 10.8473 5.17157C11.5974 5.92172 12.0189 6.93913 12.0189 8Z" fill="white" />
                                </svg>

                                <?= $phone_number ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap justify-center">
                <article class="w-10/12 rounded-full bg-primary py-6 px-14 flex flex-wrap justify-between items-center">
                    <a href="#" class="text-lg font-bold text-white px-4">Home</a>
                    <a href="#" class="text-lg font-bold text-white px-4">About</a>
                    <a href="#" class="text-lg font-bold text-white px-4">Services</a>
                    <a href="#" class="text-lg font-bold text-white px-4">Pricing</a>
                    <a href="#" class="text-lg font-bold text-white px-4">Project</a>
                    <a href="#" class="text-lg font-bold text-white px-4">FAQ</a>
                    <a href="#" class="text-lg font-bold text-white px-4">Testimonials</a>
                    <a href="#" class="text-lg font-bold text-white px-4">Contact Us</a>
                </article>
            </div>
        </div>
    </nav>

    <section class="banner py-40">
        <div class="container">
            <div class="flex flex-wrap justify-end">
                <article class="w-5/12 text-white">
                    <p class="text-[27px] capitalize">Flawless floors, Radiant Smiles</p>
                    <?= renderImg('banner-logo.png', 'logo', 'ml-[-70px]') ?>
                    <p class="font-grandmas-television text-[108px] leading-none">Style</p>

                    <div class="flex justify-center pt-6">
                        <a href="#form" class="flex items-center font-grandmas-television text-white bg-primary h-[46px] py-2 px-8">Get a free quote</a>
                    </div>
                </article>
            </div>
        </div>
    </section>
</header>

<section class="service-type">
    <div class="container">
        <div class="w-10/12 mx-auto py-24">
            <div class="flex flex-wrap justify-between">
                <div class="w-fit md:w-1/3">
                    <div class="flex flex-col items-center justify-between h-full">
                        <?= renderImg('carpet-cleaning.png', 'lib') ?>
                        <article class="text-center uppercase text-2xl leading-none pt-4">
                            <p class="font-extrabold">Carpet</p>
                            <p class="font-normal">Cleaning</p>
                        </article>
                    </div>
                </div>
                <div class="w-fit md:w-1/3">
                    <div class="flex flex-col items-center justify-between h-full">
                        <?= renderImg('tile-and-grout.png', 'lib') ?>
                        <article class="text-center uppercase text-2xl leading-none pt-4">
                            <p class="font-extrabold">Tile & Grout</p>
                            <p class="font-normal">Cleaning</p>
                        </article>
                    </div>
                </div>
                <div class="w-fit md:w-1/3">
                    <div class="flex flex-col items-center justify-between h-full">
                        <?= renderImg('wet-carpet.png', 'lib') ?>
                        <article class="text-center uppercase text-2xl leading-none pt-4">
                            <p class="font-extrabold">Wet Carpet</p>
                            <p class="font-normal">Cleaning</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <section class="about drop-shadow-2xl">
        <div class="flex flex-wrap">
            <div class="w-6/12 flex justify-end bg-white rounded-l-[40px]">
                <article class="pt-5 pb-12 w-11/12 px-10">
                    <p class="font-vampiro-one text-[50px] rotate-[-8.637deg] ml-[-50px]">Elevate</p>
                    <h2 class="font-grandmas-television text-[44px] leading-none pt-10">Your cleaning <span class="text-primary text-[53px]">experience!</span></h2>
                    <article class="pt-4 pb-10 text-xl font-medium">

                        <p class="pb-4">
                            Spotless Carpet Cleaning, a renowned name in Perth for the past 30 years, sets the standard for residential and commercial cleaning services. With a steadfast commitment to excellence, we redefine cleanliness and hygiene across Perth's diverse landscapes.
                        </p>
                        <p>
                            We don't stop there – we take an extra step to ensure sanitisation and deodorisation, bestowing your premises with not just cleanliness, but a refreshing essence as well.
                        </p>
                    </article>
                    <a href="#form" class="inline-flex items-center font-grandmas-television text-white bg-primary h-[46px] py-2 px-8">Get a free quote</a>
                </article>
            </div>
            <div class="w-5/12 relative">
                <?= renderImg('tile-cleaning.png', 'lib', 'absolute h-full max-w-fit') ?>
            </div>
        </div>
    </section>
</div>

<section class="section">
    <div class="container">
        <p class="font-vampiro-one text-[50px] rotate-[-8.637deg] ml-[-50px]">Why Choose</p>
        <h2 class="text-5xl font-grandmas-television text-center pt-20"><span class="text-primary">Spotless</span> Carpet Cleaning?</h2>

        <div class="flex flex-wrap pt-9">
            <div class="w-1/4 px-2">
                <article class="rounded-2xl h-[525px] bg-slate-100 w-full relative overflow-hidden group text-white text-center hover:scale-105 duration-300">
                    <?= renderImg('why-us-1.jpg', 'lib', 'object-cover w-full h-full') ?>

                    <p class="absolute bottom-0 group-hover:bottom-24 duration-300 text-3xl font-extrabold px-4 py-6 capitalize leading-8">
                        Expertly trained & well-equipped professionals
                    </p>

                    <p class="opacity-0 group-hover:opacity-100 duration-300 bg-gradient-to-b from-transparent to-primary absolute z-1 bottom-0 text-center px-4 pt-36 pb-4 text-base leading-5">
                        Each of our technicians arraves on-site fully equipped with the essential cleaning machinery, backed by comprehensive training
                    </p>
                </article>
            </div>

            <div class="w-1/4 px-2">
                <article class="rounded-2xl h-[525px] bg-slate-100 w-full relative overflow-hidden group text-white text-center hover:scale-105 duration-300">
                    <?= renderImg('why-us-2.jpg', 'lib', 'object-cover w-full h-full') ?>

                    <p class="absolute bottom-0 group-hover:bottom-16 duration-300 text-3xl font-extrabold px-4 py-6 capitalize leading-8">
                        Affordable Quality Work
                    </p>

                    <p class="opacity-0 group-hover:opacity-100 duration-300 bg-gradient-to-b from-transparent to-primary absolute z-1 bottom-0 text-center px-4 pt-36 pb-4 text-base leading-5">
                        Covering every corner of Perth with our budget-friendly rates, we seamlessly merge top-notch quality with cost-effectiveness.
                    </p>
                </article>
            </div>

            <div class="w-1/4 px-2">
                <article class="rounded-2xl h-[525px] bg-slate-100 w-full relative overflow-hidden group text-white text-center hover:scale-105 duration-300">
                    <?= renderImg('why-us-3.jpg', 'lib', 'object-cover w-full h-full') ?>

                    <p class="absolute bottom-0 group-hover:bottom-20 duration-300 text-3xl font-extrabold px-4 py-6 capitalize leading-8">
                        Rapid and Efficient Cleaning Solutions
                    </p>

                    <p class="opacity-0 group-hover:opacity-100 duration-300 bg-gradient-to-b from-transparent to-primary absolute z-1 bottom-0 text-center px-4 pt-36 pb-4 text-base leading-5">
                        Benefit from the swift expertise of our experienced technicians. Years of hands-on experience enable them to deliver speedy and efficient services consistently.
                    </p>
                </article>
            </div>

            <div class="w-1/4 px-2">
                <article class="rounded-2xl h-[525px] bg-slate-100 w-full relative overflow-hidden group text-white text-center hover:scale-105 duration-300">
                    <?= renderImg('why-us-4.jpg', 'lib', 'object-cover w-full h-full') ?>

                    <p class="absolute bottom-0 group-hover:bottom-32 duration-300 text-3xl font-extrabold px-4 py-6 capitalize leading-8">
                        Cutting-Edge Cleaning Equipment
                    </p>

                    <p class="opacity-0 group-hover:opacity-100 duration-300 bg-gradient-to-b from-transparent to-primary absolute z-1 bottom-0 text-center px-4 pt-36 pb-4 text-base leading-5">
                        Our Arsenal of state-of-the-art equipment, tools, and eco-friendly chemicals guarantees consistently efficient outcomes. All our cleaning solutions are entirely non-toxic, ensuring a safe environment for both children and pets.
                    </p>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="brands pt-32 pb-24">
    <div class="container">
        <div class="flex justify-center">
            <h2 class="font-grandmas-television text-5xl text-center relative">
                Brands we <span class="text-primary">work</span>
                <p class="absolute font-vampiro-one text-[50px] rotate-[-8.637deg] bottom-[-30px] right-[-100px]">with</p>
            </h2>
        </div>

        <div id="brands_slider" class="brands_slider pt-16">
            <div><?= renderImg('qantas.png', 'logo') ?></div>
            <div><?= renderImg('bhp.png', 'logo') ?></div>
            <div><?= renderImg('westpac.png', 'logo') ?></div>
            <div><?= renderImg('kfc.png', 'logo') ?></div>
            <div><?= renderImg('bigw.png', 'logo') ?></div>
            <div><?= renderImg('toyota.png', 'logo') ?></div>
            <div><?= renderImg('commonwealth_bank.png', 'logo') ?></div>
        </div>
    </div>
</section>

<section class="faqs py-24">
    <div class="flex flex-wrap">
        <div class="w-1/2">
            <div class="flex justify-end">
                <div class="flex justify-center">
                    <h2 class="text-dark font-grandmas-television text-5xl relative">your<br />interest?
                        <p class="absolute font-vampiro-one text-primary text-[50px] rotate-[-8.637deg] top-[-40px] left-[-100px]">What's</p>
                    </h2>
                </div>
            </div>
            <?= renderImg('whats-your-interest.png', 'lib', 'w-full pt-10') ?>
        </div>
        <div class="w-1/2 px-14">
            <?php $faqs = [
                [
                    'question' => 'How often should I have my carpets cleaned?',
                    'answer' => 'On average household carpets should be cleaned at least once a year. In some cases (pets, children, allergies) carpets may require more frequent cleaning. Commercial cleaning services are usually performed more regularly due to the importance of image and hygiene in the workplace.'
                ],
                [
                    'question' => 'How can I keep my carpets looking nice?',
                    'answer' => 'On average household carpets should be cleaned at least once a year. In some cases (pets, children, allergies) carpets may require more frequent cleaning. Commercial cleaning services are usually performed more regularly due to the importance of image and hygiene in the workplace.'
                ],
                [
                    'question' => 'Why do some carpet cleaners advertise extremely low prices and when they arrive to clean my carpets the price always increases?',
                    'answer' => 'On average household carpets should be cleaned at least once a year. In some cases (pets, children, allergies) carpets may require more frequent cleaning. Commercial cleaning services are usually performed more regularly due to the importance of image and hygiene in the workplace.'
                ],
                [
                    'question' => 'Do you guarantee your work?',
                    'answer' => 'On average household carpets should be cleaned at least once a year. In some cases (pets, children, allergies) carpets may require more frequent cleaning. Commercial cleaning services are usually performed more regularly due to the importance of image and hygiene in the workplace.'
                ],
                [
                    'question' => 'What services do you provide?',
                    'answer' => 'On average household carpets should be cleaned at least once a year. In some cases (pets, children, allergies) carpets may require more frequent cleaning. Commercial cleaning services are usually performed more regularly due to the importance of image and hygiene in the workplace.'
                ],
            ];
            ?>
            <div class="w-10/12">
                <div class="accordion">
                    <?php foreach ($faqs as $index => $faq) : ?>
                        <article class="accordion-card py-8 <?= (count($faqs) - 1) == $index ? '' : 'border-b border-black' ?>">
                            <a href="javascript:void(0)" class="flex question items-center">
                                <p class="text-[28px] font-bold flex-auto"><?= $faq['question'] ?></p>
                                <div class="flex-none">
                                    <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="20.5" cy="20.5" r="20.5" fill="black" />
                                        <path d="M12.6729 16.4001L20.8729 24.6001L29.0729 16.4001" stroke="white" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </div>
                            </a>

                            <p class="answer font-medium text-lg pt-3 <?= $index !== 0 ? 'hidden' : '' ?>"><?= $faq['answer'] ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>

                <a href="#form" class="flex justify-center items-center text-center font-grandmas-television text-white bg-primary h-[46px] py-2 px-8">Get a free quote</a>
            </div>
        </div>
    </div>
</section>

<section class="testimonials py-16">
    <div class="container">
        <div class="flex justify-center">
            <div class="flex justify-center">
                <h2 class="text-dark font-grandmas-television text-5xl relative">happy clients
                    <p class="absolute font-vampiro-one text-primary text-[50px] rotate-[-8.637deg] top-[-40px] left-[-100px]">Our</p>
                </h2>
            </div>
        </div>

        <div class="drop-shadow-xl">
            <div class="bg-white py-12 mt-10 flex justify-center">
                <div class="flex flex-wrap w-11/12">
                    <div class="w-1/12 py-3">
                        <svg width="72" height="57" viewBox="0 0 72 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.11163 48.8348C-0.676506 41.5387 0.00698853 32.1694 0.0285721 32.0625V3.5625C0.0285721 2.61767 0.40757 1.71153 1.0822 1.04343C1.75682 0.375334 2.67181 0 3.62589 0H25.2098C29.1776 0 32.4044 3.19556 32.4044 7.125V32.0625C32.4044 33.0073 32.0254 33.9135 31.3508 34.5816C30.6761 35.2497 29.7611 35.625 28.8071 35.625H17.7345C17.8105 37.3863 18.3419 39.0987 19.2778 40.5983C21.1052 43.4518 24.5479 45.4005 29.5157 46.3838L32.4044 46.9538V57H28.8071C18.7957 57 11.1587 54.2533 6.11163 48.8348ZM45.7072 48.8348C38.9155 41.5387 39.6026 32.1694 39.6242 32.0625V3.5625C39.6242 2.61767 40.0032 1.71153 40.6778 1.04343C41.3524 0.375334 42.2674 0 43.2215 0H64.8054C68.7732 0 72 3.19556 72 7.125V32.0625C72 33.0073 71.621 33.9135 70.9464 34.5816C70.2717 35.2497 69.3568 35.625 68.4027 35.625H57.3302C57.4062 37.3863 57.9375 39.0987 58.8734 40.5983C60.7008 43.4518 64.1435 45.4005 69.1114 46.3838L72 46.9538V57H68.4027C58.3914 57 50.7543 54.2533 45.7072 48.8348Z" fill="#F0F0F0" />
                        </svg>
                    </div>
                    <div class="w-1/12 flex justify-center">
                        <div class="w-[2px] bg-[#f0f0f0] min-h-[148px] h-full"></div>
                    </div>
                    <div class="w-10/12">
                        <div id="testimonial_slider">
                            <div class="text-2xl font-medium py-2">You’re prompt, dependable and quality service makes my job easier and brings peace of mind knowing that those I refer to you will be handled with the utmost care and professionalism.</div>
                            <div class="text-2xl font-medium py-2">You’re prompt, dependable and quality service makes my job easier and brings peace of mind knowing that those I refer to you will be handled with the utmost care and professionalism.</div>
                            <div class="text-2xl font-medium py-2">You’re prompt, dependable and quality service makes my job easier and brings peace of mind knowing that those I refer to you will be handled with the utmost care and professionalism.</div>
                            <div class="text-2xl font-medium py-2">You’re prompt, dependable and quality service makes my job easier and brings peace of mind knowing that those I refer to you will be handled with the utmost care and professionalism.</div>
                            <div class="text-2xl font-medium py-2">You’re prompt, dependable and quality service makes my job easier and brings peace of mind knowing that those I refer to you will be handled with the utmost care and professionalism.</div>
                            <div class="text-2xl font-medium py-2">You’re prompt, dependable and quality service makes my job easier and brings peace of mind knowing that those I refer to you will be handled with the utmost care and professionalism.</div>
                            <div class="text-2xl font-medium py-2">You’re prompt, dependable and quality service makes my job easier and brings peace of mind knowing that those I refer to you will be handled with the utmost care and professionalism.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <?= renderImg('triangle.png', 'lib') ?>
            </div>
        </div>

        <div id="client_slider" class="pt-5">
            <article>
                <div class="name text-6xl">M</div>
                <div class="info pl-7">
                    <p class="text-3xl font-bold">Roberto</p>
                    <p class="text-[#9c9c9c] leading-none">Elders Real Estate</p>
                </div>
            </article>

            <article>
                <div class="name text-6xl">G</div>
                <div class="info pl-7">
                    <p class="text-3xl font-bold">Roberto</p>
                    <p class="text-[#9c9c9c] leading-none">Elders Real Estate</p>
                </div>
            </article>

            <article>
                <div class="name text-6xl">S</div>
                <div class="info pl-7">
                    <p class="text-3xl font-bold">Roberto</p>
                    <p class="text-[#9c9c9c] leading-none">Elders Real Estate</p>
                </div>
            </article>

            <article>
                <div class="name text-6xl">R</div>
                <div class="info pl-7">
                    <p class="text-3xl font-bold">Roberto</p>
                    <p class="text-[#9c9c9c] leading-none">Elders Real Estate</p>
                </div>
            </article>

            <article>
                <div class="name text-6xl">SM</div>
                <div class="info pl-7">
                    <p class="text-3xl font-bold">Roberto</p>
                    <p class="text-[#9c9c9c] leading-none">Elders Real Estate</p>
                </div>
            </article>

            <article>
                <div class="name text-6xl">CJ</div>
                <div class="info pl-7">
                    <p class="text-3xl font-bold">Roberto</p>
                    <p class="text-[#9c9c9c] leading-none">Elders Real Estate</p>
                </div>
            </article>

            <article>
                <div class="name text-6xl">M</div>
                <div class="info pl-7">
                    <p class="text-3xl font-bold">Roberto</p>
                    <p class="text-[#9c9c9c] leading-none">Elders Real Estate</p>
                </div>
            </article>

            <article>
                <div class="name text-6xl">R</div>
                <div class="info pl-7">
                    <p class="text-3xl font-bold">Roberto</p>
                    <p class="text-[#9c9c9c] leading-none">Elders Real Estate</p>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="bg-dark py-20">
    <div class="container">
        <div class="flex justify-center">
            <h2 class="text-white font-grandmas-television text-5xl text-center relative">Projects
                <p class="absolute font-vampiro-one text-primary text-[50px] rotate-[-8.637deg] top-[-40px] left-[-100px]">Recent</p>
            </h2>
        </div>

        <div class="flex flex-wrap pt-9">
            <div class="w-1/3 px-1.5">
                <?= renderImg('projects_1.jpg', 'lib', 'h-full object-cover object-center') ?>
            </div>
            <div class="w-1/3 px-1.5">
                <div class="flex flex-wrap gap-y-3 h-full">
                    <div class="w-full"><?= renderImg("projects_2.jpg", 'lib', 'h-full object-cover object-center') ?></div>
                    <div class="w-full"><?= renderImg("projects_3.jpg", 'lib', 'h-full object-cover object-center') ?></div>
                </div>
            </div>
            <div class="w-1/3 px-1.5">
                <div class="flex flex-wrap gap-y-3">
                    <div class="w-full"><?= renderImg("projects_4.jpg", 'lib', 'h-full object-cover object-center') ?></div>
                    <div class="w-full"><?= renderImg("projects_5.jpg", 'lib', 'h-full object-cover object-center') ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary">
    <div id="cta_slider" class="font-grandmas-television text-3xl text-white py-4">
        <p>Call Us Today on <a href=""><?= $phone_number ?></a></p>
        <p>Get Free quote today</p>
        <p>Carpet Cleaning Start From $89</p>
    </div>
</section>

<section class="location py-16 bg-dark">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-1/2 lg:px-2">
                <article class="">
                    <a href="./"><?= renderImg('footer-logo.png', 'logo') ?></a>
                    <div class="py-9">
                        <table cellspacing="0" cellpadding="0" class="text-white">
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="font-bold">Trading Hours</p>
                                    </td>
                                    <td>
                                        <p><span class="px-4 font-bold">:</span>Monday - Saturday 7am to 6pm</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p class="font-bold">Postal</p>
                                    </td>
                                    <td>
                                        <p><span class="px-4 font-bold">:</span>PO Box 1585 Ashfield, NSW 1800</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p class="font-bold">Email</p>
                                    </td>
                                    <td><span class="px-4 font-bold">:</span><a href="mailto:<?= $admin_email ?>"><?= $admin_email ?></a></td>
                                </tr>

                                <tr>
                                    <td>
                                        <p class="font-bold">Phone</p>
                                    </td>
                                    <td><span class="px-4 font-bold">:</span><a href="tel:<?= $phone_number ?>"><?= $phone_number ?></a></td>
                                </tr>

                                <tr>
                                    <td>
                                        <p class="font-bold">Fax</p>
                                    </td>
                                    <td>
                                        <p><span class="px-4 font-bold">:</span>(02) 9709 2456</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <ol class="text-white list-decimal py-8 pl-5">
                        <li>When our technicians arrive at your premises they will inspect and measure the areas you have told us about. The technician will then confirm your quoted price and inspect the carpet and stains before work commences.</li>
                        <li>There are certain stains, that are impossible to be removed and certain conditions caused by wear and tear that are not apparent until completion of cleaning.</li>
                        <li>All complaints if any must be reported within 24hrs after cleaning.</li>
                        <li>All prices exclude GST.</li>
                        <li>Carpet Dry Cleaning or Carpet Steam Cleaning is the same price.</li>
                        <li>Prices for a room are to a maximum of 12m2.</li>
                        <li>A small hallway is to a maximum of 5m2.</li>
                        <li>Lounge dining area is considered as 2 rooms.</li>
                        <li>Deluxe carpet cleaning is for extremely soiled, trashed carpets or for those requiring the best possible results. If our technician considers your carpet to be in this category he will inform you before work commences. The job will need to be requoted if necessary.</li>
                        <li>Our minimum charge for carpet and everything else is $89</li>
                    </ol>
                    <div class="flex flex-wrap gap-x-2">
                        <p class="w-fit text-white font-bold text-lg">Get in Contact with Us on</p>
                        <div class="w-fit">
                            <a href="<?= $facebook ?>" target="_blank">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.4814 25C5.52103 24.9783 -0.0646877 19.3708 0.000565956 12.3887C0.0701699 5.22816 5.99955 -0.157444 12.8164 0.00351484C19.5114 0.168824 25.158 5.73279 25.0014 12.7976C24.8492 19.5448 19.307 25.0261 12.4771 24.9957L12.4814 25ZM16.153 7.59904V4.75833C14.9785 4.81489 13.8213 4.78878 12.6859 4.94539C11.6288 5.08895 10.8588 5.72844 10.6239 6.83775C10.5325 7.25973 10.5064 7.70345 10.489 8.13412C10.4673 8.74751 10.4847 9.36524 10.4847 10.0134H8.84027V12.7193H10.4934V20.702H13.6995V12.6758H15.9355C16.0182 11.7709 16.0965 10.9052 16.1791 9.99603H13.7038C13.7038 9.3957 13.6908 8.83886 13.7038 8.27768C13.7169 7.76435 13.904 7.59469 14.4303 7.59034C15.0002 7.59034 15.5657 7.59034 16.153 7.59034V7.59904Z" fill="#ED3D3D" />
                                    <path d="M16.1531 7.59904C15.5658 7.59904 15.0003 7.59904 14.4304 7.59904C13.904 7.59904 13.717 7.77305 13.7039 8.28638C13.6909 8.84321 13.7039 9.40004 13.7039 10.0047H16.1792C16.0965 10.9139 16.0182 11.7796 15.9356 12.6845H13.6996V20.7107H10.4934V12.728H8.84033V10.0221H10.4847C10.4847 9.36959 10.4673 8.7562 10.4891 8.14282C10.5065 7.70779 10.5326 7.26842 10.6239 6.84645C10.8588 5.73713 11.6245 5.102 12.6859 4.95409C13.8214 4.79748 14.9785 4.82358 16.1531 4.76703V7.60774V7.59904Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                        <div class="w-fit">
                            <a href="<?= $instagram ?>" target="_blank">
                                <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.4983 24.9962C5.58142 25.0005 -0.00429581 19.4061 0.00440468 12.4718C0.0174554 5.42005 5.81198 -0.0351586 12.5505 0.0039936C19.4674 0.0431458 25.014 5.61581 25.014 12.6023C25.014 19.4104 19.3804 24.9875 12.494 24.9918L12.4983 24.9962ZM12.5114 20.0369C13.7512 19.9803 14.991 19.9673 16.2221 19.8585C17.81 19.7193 19.0759 18.6491 19.4718 17.0961C19.6414 16.4349 19.7023 15.7301 19.7023 15.0428C19.7067 13.0634 19.7328 11.0797 19.6066 9.10906C19.4848 7.16885 17.9666 5.71152 16.0133 5.64626C13.6598 5.56796 11.302 5.57231 8.94851 5.64626C7.06485 5.70717 5.55097 7.22105 5.40306 9.09166C5.2073 11.5278 5.2073 13.9726 5.40306 16.4088C5.55097 18.2489 6.96045 19.6758 8.79625 19.8498C10.0274 19.9673 11.2672 19.9716 12.507 20.0282L12.5114 20.0369Z" fill="#ED3D3D" />
                                    <path d="M12.5114 20.0369C11.2715 19.9803 10.0317 19.976 8.80059 19.8585C6.96479 19.6845 5.55531 18.2576 5.4074 16.4175C5.21164 13.9814 5.21599 11.5365 5.4074 9.10038C5.55531 7.22542 7.06919 5.71588 8.95285 5.65498C11.3063 5.57668 13.6642 5.57668 16.0177 5.65498C17.9709 5.72023 19.4848 7.17757 19.611 9.11778C19.7371 11.0928 19.711 13.0765 19.7067 15.0515C19.7067 15.7389 19.6458 16.4436 19.4761 17.1048C19.0802 18.6535 17.8143 19.728 16.2265 19.8672C14.9953 19.976 13.7555 19.989 12.5157 20.0456L12.5114 20.0369ZM18.3885 12.7502C18.3885 11.741 18.4103 10.7317 18.3842 9.72681C18.332 7.94756 17.3358 6.9296 15.5522 6.89045C13.525 6.84695 11.4934 6.8513 9.46618 6.89045C7.70868 6.92525 6.66897 7.99106 6.64722 9.74856C6.62112 11.7671 6.62112 13.7812 6.64722 15.7998C6.67332 17.5486 7.71303 18.597 9.45313 18.6231C11.5064 18.6535 13.5598 18.6579 15.6087 18.6231C17.3184 18.597 18.3276 17.5703 18.3798 15.852C18.4103 14.8209 18.3842 13.7856 18.3842 12.7546L18.3885 12.7502Z" fill="white" />
                                    <path d="M18.3884 12.7502C18.3884 13.7812 18.4145 14.8166 18.384 15.8476C18.3318 17.5703 17.3226 18.5926 15.6129 18.6187C13.5596 18.6535 11.5063 18.6491 9.45732 18.6187C7.71287 18.5926 6.67751 17.5442 6.65141 15.7954C6.62531 13.7768 6.62531 11.7627 6.65141 9.74416C6.67316 7.98232 7.71287 6.91651 9.47037 6.88605C11.4976 6.8469 13.5292 6.8469 15.5564 6.88605C17.3443 6.92086 18.3405 7.94316 18.3884 9.72241C18.4188 10.7317 18.3927 11.7409 18.3927 12.7458L18.3884 12.7502ZM16.2263 12.7502C16.1828 10.6055 14.5123 8.99157 12.3589 9.06553C10.2795 9.13513 8.74388 10.9274 8.81783 12.9372C8.89179 14.847 10.571 16.487 12.5242 16.4696C14.5776 16.4522 16.2698 14.7556 16.2263 12.7502ZM17.2269 8.90022C17.2269 8.41734 16.8484 8.03887 16.3786 8.03887C15.9131 8.03887 15.5303 8.43039 15.5303 8.90457C15.5303 9.37439 15.9131 9.76592 16.3829 9.76592C16.8484 9.76592 17.2312 9.37439 17.2312 8.90022H17.2269Z" fill="#ED3D3D" />
                                    <path d="M16.2265 12.7546C16.2656 14.7644 14.5777 16.461 12.5244 16.4741C10.5711 16.4871 8.89195 14.8514 8.81799 12.9417C8.74404 10.9362 10.2797 9.1439 12.3591 9.06995C14.5125 8.99599 16.183 10.6099 16.2265 12.7546ZM12.5244 10.362C11.1758 10.362 10.1231 11.406 10.1144 12.7546C10.1057 14.0945 11.2063 15.1951 12.5418 15.1864C13.8556 15.1777 14.9431 14.0771 14.9431 12.7546C14.9431 11.4278 13.8643 10.362 12.5244 10.362Z" fill="white" />
                                    <path d="M17.2268 8.90456C17.2268 9.37874 16.844 9.77461 16.3785 9.77026C15.9087 9.77026 15.5259 9.37874 15.5259 8.90891C15.5259 8.43473 15.9087 8.04321 16.3742 8.04321C16.8484 8.04321 17.2225 8.42168 17.2225 8.90456H17.2268Z" fill="white" />
                                    <path d="M12.5243 10.3619C13.8642 10.3619 14.9387 11.4277 14.9431 12.7546C14.9431 14.077 13.8599 15.1733 12.5417 15.1864C11.2062 15.1951 10.1056 14.0944 10.1143 12.7546C10.123 11.406 11.1758 10.3619 12.5243 10.3619Z" fill="#ED3D3D" />
                                </svg>
                            </a>
                        </div>
                        <div class="w-fit">
                            <a href="mailto:<?= $admin_email ?>">
                                <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.4956 25C5.53519 24.9783 -0.0505276 19.3708 0.0147261 12.3887C0.08433 5.22816 6.01371 -0.157444 12.8305 0.00351484C19.5256 0.168824 25.1722 5.73279 25.0156 12.7976C24.8633 19.5448 19.3211 25.0261 12.4912 24.9957L12.4956 25Z" fill="#ED3D3D" />
                                    <path d="M7.43604 8H17.5923C18.3772 8 19.0142 8.588 19.0142 9.3125V15.6875C19.0142 16.0356 18.8644 16.3694 18.5977 16.6156C18.331 16.8617 17.9694 17 17.5923 17H7.43604C7.05893 17 6.69727 16.8617 6.43062 16.6156C6.16396 16.3694 6.01416 16.0356 6.01416 15.6875V9.3125C6.01416 8.588 6.65116 8 7.43604 8ZM7.23291 15.6883C7.23291 15.7918 7.32391 15.8758 7.43604 15.8758H17.5923C17.6462 15.8758 17.6978 15.856 17.7359 15.8208C17.774 15.7857 17.7954 15.738 17.7954 15.6883V10.8568L12.8229 13.5478C12.7293 13.5985 12.6227 13.6253 12.5142 13.6253C12.4056 13.6253 12.299 13.5985 12.2054 13.5478L7.23291 10.8568V15.6883ZM17.7954 9.5525V9.3125C17.7954 9.26277 17.774 9.21508 17.7359 9.17992C17.6978 9.14475 17.6462 9.125 17.5923 9.125H7.43604C7.38216 9.125 7.3305 9.14475 7.2924 9.17992C7.25431 9.21508 7.23291 9.26277 7.23291 9.3125V9.5525L12.5142 12.41L17.7954 9.5525Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="w-full lg:w-1/2 lg:px-2">
                <iframe class="w-full h-full rounded-[20px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d432910.82949746907!2d115.63189744744871!3d-32.03905537345496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32966cdb47733d%3A0x304f0b535df55d0!2sPerth%20WA!5e0!3m2!1sen!2sau!4v1697799195512!5m2!1sen!2sau" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>