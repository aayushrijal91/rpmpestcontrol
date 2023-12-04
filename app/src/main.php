<?php
$services = [
    [
        "title" => "End of lease",
        "description" => "<p>Planning to move? Don't let pests become an issue during your end of lease inspection. Our end of lease pest control service ensures you leave your property pest-free, meeting all requirements.</p>"
    ],
    [
        "title" => "Termite Warranty Inspections",
        "description" => "<p>Protect your property from silent invaders. Our termite warranty inspections offer peace of mind, ensuring your home remains termite-free.</p>"
    ],
    [
        "title" => "Bird Management",
        "description" => "<p>Bird problems?</p><p>We specialise in humane bird management solutions to keep your property clean and safe.</p>"
    ],
    [
        "title" => "Termite Management",
        "description" => "<p>Pre and Post-Construction</p><p>Prevent termite damage or treat existing infestations with our comprehensive termite management services. We're your shield against structural damage.</p>"
    ],
    [
        "title" => "Safe Possum Removal",
        "description" => "<p>Got noises in your roof? We'll safely and humanely relocate these creatures, so your property remains free of possums.</p>"
    ],
    [
        "title" => "Rodent Treatments",
        "description" => "<p>Mice or rats?</p><p>Our rodent treatments are designed to eliminate these pests, keeping your home or business free from health hazards.</p>"
    ],
    [
        "title" => "Ant, Bee, & Wasp Treatments",
        "description" => "<p>Our dedicated technicians are equipped to handle these common nuisances, ensuring that your family can enjoy the great outdoors and indoor serenity without the worry of stings or bites.</p>"
    ],
    [
        "title" => "Bird Baiting",
        "description" => "<p>Looking for a targeted bird control solution? Our bird baiting services are designed to deter birds from nesting on your property.</p>"
    ],
    [
        "title" => "Bed Bugs, Fleas, & Drain Flies",
        "description" => "<p>Don't let these pesky bugs disrupt your life. Our treatments will ensure you can rest easy without any unwelcome guests.</p>"
    ],
    [
        "title" => "Spiders & Carpet Beetles",
        "description" => "<p>We understand that a pest-free home is not just about comfort; it’s about keeping your family safe and healthy.</p>"
    ],
    [
        "title" => "Large & German Cockroaches",
        "description" => "<p>We eliminate crawling intruders, so you can enjoy a pest-free environment.</p>"
    ],
    [
        "title" => "Solar Panel Birdproofing",
        "description" => "<p>Protect your solar panels from bird damage. Our birdproofing solutions are designed to keep your investment safe.</p>"
    ],
];
?>

<header class="relative overflow-hidden">
    <?= renderImg('wasps.gif', 'lib', 'hidden lg:block absolute top-0 left-0 mix-blend-darken') ?>

    <div class="container relative">
        <div class="flex flex-wrap justify-between items-center py-5">
            <div class="w-3/12 md:w-fit">
                <a href="./">
                    <?= renderImg('logo.png', 'logo') ?>
                </a>
            </div>

            <div class="w-fit hidden md:block">
                <div class="flex flex-row justify-center gap-x-4">
                    <a href="tel:<?= $phone_number ?>" class="btn w-fit h-[48px] bg-secondary xl:bg-primary px-7 text-lg font-bold"><?= $phone_number ?></a>
                    <a href="#forms" class="btn w-fit h-[48px] bg-white px-7 text-lg font-bold uppercase">enquire today</a>
                </div>
            </div>

            <div class="w-fit md:hidden">
                <a href="tel:<?= $phone_number ?>" class="h-[43px] w-[43px] bg-secondary flex justify-center items-center">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.2952 0.814457C16.0341 0.32641 16.8736 0.0469322 17.7246 0.00543594C20.1997 -0.115629 22.1153 1.79993 21.9946 4.27571C21.7739 8.78776 19.8093 13.1159 16.4626 16.4626C13.1157 19.8093 8.78764 21.774 4.27538 21.9946C1.79995 22.1151 -0.115631 20.1998 0.00543404 17.7247C0.0471134 16.8736 0.326412 16.0341 0.81356 15.2967C0.815907 15.2933 0.818251 15.2897 0.820417 15.2863L7.52791 13.9075C7.87884 14.1915 8.17492 14.5326 8.41019 14.9247L8.73911 15.4728L9.35959 15.1623C10.5969 14.5431 11.7298 13.7238 12.7269 12.7268C13.7237 11.7299 14.5432 10.597 15.1624 9.35952L15.4729 8.73904L14.9248 8.41013C14.5327 8.17486 14.1917 7.87878 13.9076 7.52785L15.2864 0.820412C15.2894 0.818426 15.2923 0.816442 15.2954 0.814457H15.2952Z" fill="black" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="container header-container relative">
        <div class="flex flex-wrap mt-12">
            <div class="w-full xl:w-8/12 pb-6 xl:pb-0">
                <div class="px-4 xl:px-0">
                    <p class="text-lg md:text-2xl uppercase font-medium leading-none">Welcome to rpm pest<br class="md:hidden" /> control <?= $location ?></p>
                    <h1 class="text-35 md:text-65 leading-none font-bold pt-4 md:pt-0 xl:w-11/12">Your go-to experts in effective & reliable pest control solutions</h1>

                    <div class="flex mt-10">
                        <a href="#services" class="h-[50px] border-2 border-black inline-flex justify-center items-center uppercase text-lg font-bold px-10 md:px-16">Services</a>
                    </div>
                </div>

                <?= renderImg('wasps.gif', 'lib', 'lg:hidden mix-blend-darken') ?>

                <div class="flex flex-wrap lg:mt-36" id="ctaSlider">
                    <div class="w-full lg:w-1/3">
                        <div class="bg-secondary text-black p-4 h-full">
                            <div class="flex flex-wrap">
                                <div class="w-1/2">
                                    <p class="text-4xl font-bold leading-7">General pest service</p>
                                </div>
                                <div class="w-1/2 px-4 md:px-1">
                                    <p class="text-2xl font-medium">From</p>
                                    <p class="text-55 font-extrabold">$165</p>
                                </div>
                            </div>
                            <p class="text-2xl font-medium">Add rodent removal</p>
                            <p class="text-4xl font-bold leading-none">+ $80</p>

                            <div class="flex mt-10">
                                <a href="#forms" class="h-[50px] border-2 border-black inline-flex justify-center items-center uppercase text-lg font-bold px-7">Enquire Today</a>
                            </div>
                        </div>
                    </div>

                    <div class="w-full lg:w-1/3">
                        <div class="bg-black text-secondary flex flex-col items-center justify-center text-center h-full p-10">
                            <p class="text-4xl leading-7">We take care of our seniors!</p>
                            <p class="uppercase text-55 font-bold py-4">10% OFF</p>
                            <div class="flex mt-7">
                                <a href="#forms" class="h-[50px] border-2 border-secondary inline-flex justify-center items-center uppercase text-lg font-bold px-7">Claim Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="w-full lg:w-1/3">
                        <div class="bg-secondary flex flex-col items-center justify-center text-center h-full p-6">
                            <p class="text-4xl leading-7 font-medium">Refer a neighbour and get...</p>
                            <p class="uppercase text-55 font-bold py-5">20% OFF</p>
                            <div class="flex mt-7">
                                <a href="#forms" class="h-[50px] border-2 border-black inline-flex justify-center items-center uppercase text-lg font-bold px-7">Claim Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full xl:w-4/12 flex justify-end bg-black xl:bg-transparent">
                <div class="px-5 py-10 xl:p-0 xl:w-11/12">
                    <p class="text-2xl capitalize font-medium text-primary">Don't wait. Get your free quote now!</p>

                    <form action="./src/freeQuoteForm" method="POST" enctype="multipart/form-data" id="form1" class="form flex flex-wrap gap-y-4 -mx-1 pt-8">
                        <input type="hidden" name="token" id="recaptchaResponse1" class="recaptchaResponse" />

                        <div class="w-full md:w-1/2 px-1">
                            <input type="text" class="form-control" name="fullname" placeholder="Your name*" required />
                        </div>
                        <div class="w-full md:w-1/2 px-1">
                            <input type="tel" class="form-control" id="contactNumber1" name="phonenumber" placeholder="Contact no.*" required />
                            <p class="text-sm font-bold text-red-500 ps-5 hidden" id="phoneError1">Invalid Phone Number</p>
                        </div>
                        <div class="w-full px-1">
                            <input type="email" class="form-control" name="emailaddress" placeholder="Email address*" required />
                        </div>
                        <div class="w-full px-1">
                            <input type="text" class="form-control" name="streetaddress" placeholder="Street address*" required>
                        </div>
                        <div class="w-full md:w-1/2 px-1">
                            <input type="number" class="form-control" name="postcode" placeholder="Post code*">
                        </div>
                        <div class="w-full md:w-1/2 px-1">
                            <select class="form-control" name="service" required>
                                <option selected disabled>Select service/s*</option>
                                <option>General pest</option>
                                <option>End of Lease</option>
                                <option>Termite Warranty Inspections</option>
                                <option>Bird Management</option>
                                <option>Termite Management (pre and post-construction)</option>
                                <option>Safe possum removal</option>
                                <option>German Cockroaches</option>
                                <option>Rodent treatments</option>
                                <option>Ant treatment</option>
                                <option>Bee treatment</option>
                                <option>Wasp Treatment</option>
                                <option>Bird baiting</option>
                                <option>Mice treatment</option>
                                <option>Bed bugs</option>
                                <option>Fleas</option>
                                <option>Drain flies</option>
                                <option>Spiders</option>
                                <option>Large Cockroaches</option>
                                <option>Carpet Beetles</option>
                                <option>Solar panel birdproofing</option>
                            </select>
                        </div>
                        <div class="w-full px-1">
                            <textarea name="additionalInformation" class="w-full rounded-[20px] overflow-hidden p-3" placeholder="Type your enquiry here..." rows="5"></textarea>
                        </div>
                        <div class="w-full px-1">
                            <label for="fileUpload" class="flex flex-col justify-center items-center text-white cursor pointer text-xl">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.1688 13.026L13.9858 5.95972L7.80273 13.026H11.3359V20.0924H16.6356V13.026H20.1688Z" stroke="#FFE03B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M26.2542 19.4854V22.8313C26.2542 23.7187 25.9017 24.5698 25.2742 25.1973C24.6467 25.8248 23.7956 26.1773 22.9082 26.1773H19.5623" stroke="#FFE03B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M1.71716 19.4854V22.8313C1.71716 23.7187 2.06968 24.5698 2.69717 25.1973C3.32466 25.8248 4.17572 26.1773 5.06312 26.1773H8.40909" stroke="#FFE03B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M26.2542 8.33206V4.9861C26.2542 4.09869 25.9017 3.24764 25.2742 2.62015C24.6467 1.99266 23.7956 1.64014 22.9082 1.64014H19.5623" stroke="#FFE03B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M1.71716 8.33206V4.9861C1.71716 4.09869 2.06968 3.24764 2.69717 2.62015C3.32466 1.99266 4.17572 1.64014 5.06312 1.64014H8.40909" stroke="#FFE03B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p id="file-label">Upload Images (optional)</p>
                            </label>
                            <input type="file" id="fileUpload" name="uploadedFile" class="hidden" />
                        </div>
                        <div class="w-full px-1">
                            <button class="h-[59px] bg-secondary w-full text-black uppercase text-2xl font-bold rounded-1" type="submit">Get Free Quote</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="container py-14 md:py-28">
    <div class="flex flex-wrap gap-y-6">
        <div class="w-full lg:w-1/2">
            <p class="text-35 md:text-65 leading-none font-bold"><span class="text-primary">20+ years</span> of expertise</p>
            <p class="text-grey text-xl md:text-2xl leading-none pt-6 md:pt-10">Rest assured, you're in good hands. Take control today.</p>
        </div>

        <div class="w-full lg:w-1/2">
            <p class="text-xl md:text-2xl font-bold leading-none">Welcome to RPM Pest Control <?= $location ?></p>
            <p class="font-medium text-grey text-lg md:text-xl pt-5">At RPM Pest Control, we are your dedicated partners in pest management, proudly serving the <?= $location ?> and the surrounding areas. With over 25 years of experience, we have established ourselves as the go-to experts in providing effective and reliable pest control solutions. Whether you're dealing with general pests, termites, rodents, or any other unwelcome guests, you can trust us to safeguard your home or business.</p>
        </div>
    </div>

    <div class="flex items-center justify-center md:flex-col lg:flex-row flex-wrap mt-24 lg:gap-y-10">
        <div class="w-full md:w-1/2 xl:w-1/3 border-y-2 lg:border-y-0 lg:border-x-2 border-grey">
            <div class="flex flex-wrap justify-between items-center gap-x-4 py-6 lg:py-0 md:px-7">
                <div class="w-fit">
                    <?= renderImg('google.png', 'lib') ?>
                </div>
                <div class="w-fit">
                    <p class="text-55 font-bold">4.9</p>
                </div>
                <div class="w-fit">
                    <p class="text-2xl font-bold">70+ reviews</p>
                    <svg width="139" height="26" viewBox="0 0 139 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.863 0.208008L15.7049 8.95443H24.9014L17.4613 14.36L20.3032 23.1064L12.863 17.7009L5.42287 23.1064L8.26475 14.36L0.824602 8.95443H10.0211L12.863 0.208008Z" fill="#FFE03B" />
                        <path d="M41.2168 0.20752L44.0587 8.95394H53.2553L45.8151 14.3595L48.657 23.1059L41.2168 17.7004L33.7767 23.1059L36.6186 14.3595L29.1784 8.95394H38.375L41.2168 0.20752Z" fill="#FFE03B" />
                        <path d="M69.5707 0.20752L72.4126 8.95394H81.6091L74.169 14.3595L77.0109 23.1059L69.5707 17.7004L62.1306 23.1059L64.9725 14.3595L57.5323 8.95394H66.7288L69.5707 0.20752Z" fill="#FFE03B" />
                        <path d="M97.9245 0.20752L100.766 8.95394H109.963L102.523 14.3595L105.365 23.1059L97.9245 17.7004L90.4844 23.1059L93.3263 14.3595L85.8861 8.95394H95.0827L97.9245 0.20752Z" fill="#FFE03B" />
                        <path d="M126.278 0.20752L129.12 8.95394H138.317L130.877 14.3595L133.719 23.1059L126.278 17.7004L118.838 23.1059L121.68 14.3595L114.24 8.95394H123.437L126.278 0.20752Z" fill="#FFE03B" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/2 xl:w-1/3 border-b-2 lg:border-b-0 lg:border-r-2 border-grey">
            <div class="flex flex-wrap justify-between items-center gap-x-4 py-6 lg:py-0 md:px-7">
                <div class="w-fit">
                    <?= renderImg('facebook.png', 'lib') ?>
                </div>
                <div class="w-fit">
                    <p class="text-55 font-bold">5.0</p>
                </div>
                <div class="w-fit">
                    <p class="text-2xl font-bold">50+ reviews</p>
                    <svg width="139" height="26" viewBox="0 0 139 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.863 0.208008L15.7049 8.95443H24.9014L17.4613 14.36L20.3032 23.1064L12.863 17.7009L5.42287 23.1064L8.26475 14.36L0.824602 8.95443H10.0211L12.863 0.208008Z" fill="#FFE03B" />
                        <path d="M41.2168 0.20752L44.0587 8.95394H53.2553L45.8151 14.3595L48.657 23.1059L41.2168 17.7004L33.7767 23.1059L36.6186 14.3595L29.1784 8.95394H38.375L41.2168 0.20752Z" fill="#FFE03B" />
                        <path d="M69.5707 0.20752L72.4126 8.95394H81.6091L74.169 14.3595L77.0109 23.1059L69.5707 17.7004L62.1306 23.1059L64.9725 14.3595L57.5323 8.95394H66.7288L69.5707 0.20752Z" fill="#FFE03B" />
                        <path d="M97.9245 0.20752L100.766 8.95394H109.963L102.523 14.3595L105.365 23.1059L97.9245 17.7004L90.4844 23.1059L93.3263 14.3595L85.8861 8.95394H95.0827L97.9245 0.20752Z" fill="#FFE03B" />
                        <path d="M126.278 0.20752L129.12 8.95394H138.317L130.877 14.3595L133.719 23.1059L126.278 17.7004L118.838 23.1059L121.68 14.3595L114.24 8.95394H123.437L126.278 0.20752Z" fill="#FFE03B" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/2 xl:w-1/3 border-b-2 lg:border-b-0 lg:border-l-2 xl:border-l-0 lg:border-r-2 border-grey">
            <div class="flex flex-wrap justify-center items-center py-6 lg:py-0 md:px-7">
                <div class="w-4/12">
                    <p class="text-base leading-4">Servicing<br /> The <?= $location ?> & surrounding areas</p>
                </div>
                <div class="w-1/2">
                    <?= renderImg('the-hills.png', 'lib') ?>
                </div>
            </div>
        </div>
    </div>

    <p class="text-35 md:text-65 font-bold leading-none mt-14 md:mt-24"><span class="text-primary">Transparent & fair</span> pricing</p>
    <p class="text-grey text-xl md:text-2xl leading-none pt-6 md:pt-10">We believe in transparent pricing. You won't find any hidden fees when you choose RPM Pest Control <?= $location ?>.</p>

    <div class="md:h-[234px] w-full mt-12 call-out-fee p-6 flex flex-wrap justify-between items-center gap-y-60">
        <div class="w-full md:w-1/3 lg:w-3/12 xl:w-2/12 bg-dark flex flex-col justify-center items-center rounded-[10px] p-5">
            <p class="text-55 font-bold text-white">$0</p>
            <p class="text-secondary text-2xl pt-2 pb-5">Call out fee!</p>

            <svg width="103" height="52" viewBox="0 0 103 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M33.5411 40.4757C33.5557 40.6811 33.564 40.89 33.564 41.103V41.1227L33.563 41.1423C33.2797 46.5326 28.8336 50.8237 23.3692 50.8237C17.9049 50.8237 13.4588 46.5326 13.1755 41.1423L13.1745 41.1227V41.103C13.1745 41.0719 13.1747 41.041 13.175 41.0102L1.90787 39.6155L1.25 39.5341V38.8712V30.6444V29.8944H2H3.77635L4.70767 8.5798C4.70768 8.57963 4.70769 8.57946 4.7077 8.57929C4.86287 4.91828 7.77454 1.98146 11.4367 1.80174L33.5411 40.4757ZM33.5411 40.4757L72.4909 40.1891C72.0683 45.6262 76.6078 50.8164 82.6343 50.8164C87.9728 50.8164 92.3395 46.7206 92.8018 41.5055L97.415 41.6121L97.4236 41.6123H97.4323C99.7209 41.6123 101.581 39.7522 101.581 37.4636V31.1623V30.4486L100.868 30.4132L33.5411 40.4757ZM95.8557 28.2535H95.863V29.0035C95.863 29.0374 95.8863 29.2136 96.3635 29.472C96.8054 29.7112 97.4376 29.9047 98.1287 30.0523C98.8083 30.1975 99.4946 30.2882 100.015 30.3426C100.275 30.3696 100.49 30.3874 100.64 30.3984C100.677 30.4011 100.711 30.4034 100.74 30.4054C100.768 30.4073 100.793 30.4088 100.812 30.41L100.856 30.4125L100.866 30.4131L100.868 30.4132L100.868 30.4132L95.8557 28.2535ZM95.8557 28.2535V25.6911H97.4906H98.3473L98.234 24.842L98.1319 24.0762L98.1318 24.0753C97.8701 22.1299 96.39 20.5796 94.4691 20.2097L85.0271 18.1333L85.0168 18.1311L85.0064 18.1291C82.6612 17.682 80.4946 16.5678 78.7683 14.9242C78.7683 14.9241 78.7682 14.9241 78.7682 14.924L69.2071 5.8151L95.8557 28.2535ZM57.837 2.03209C62.8916 2.57457 66.8881 3.60402 69.2069 5.81487L57.837 2.03209ZM57.837 2.03209C53.1032 1.52405 47.2526 1.42976 40.6105 1.32271M57.837 2.03209L40.6105 1.32271M40.6105 1.32271C40.1014 1.3145 39.5877 1.30622 39.0694 1.29768M40.6105 1.32271L39.0694 1.29768M39.0694 1.29768C27.9905 1.11498 17.6017 1.49495 11.437 1.80172L39.0694 1.29768ZM23.3692 44.6779C21.1141 44.6779 19.2911 42.8548 19.2911 40.5997C19.2911 38.3446 21.1141 36.5216 23.3692 36.5216C25.6244 36.5216 27.4474 38.3446 27.4474 40.5997C27.4474 42.8548 25.6244 44.6779 23.3692 44.6779ZM56.2023 20.2746V9.22605L63.7428 9.54394L72.8591 20.2746H56.2023ZM82.627 44.6779C80.3718 44.6779 78.5488 42.8548 78.5488 40.5997C78.5488 38.3446 80.3718 36.5216 82.627 36.5216C84.8821 36.5216 86.7051 38.3446 86.7051 40.5997C86.7051 42.8549 84.8821 44.6779 82.627 44.6779Z" stroke="#FFE03B" stroke-width="1.5" />
            </svg>
        </div>

        <div class="w-full md:w-1/3 lg:w-3/12">
            <a href="#forms" class="btn h-[50px] bg-secondary px-16 text-lg font-bold uppercase w-full md:w-fit">Claim Now</a>
        </div>
    </div>
</div>

<section class="bg-black py-14 md:py-24 lg:py-32" id="services">
    <div class="container">
        <p class="text-35 md:text-65 text-white font-bold leading-none"><span class="text-secondary">Explore</span> what we offer</p>

        <div class="flex flex-wrap mt-11 md:mt-24 mb-10">
            <div class="w-full lg:w-5/12 xl:w-1/3 bg-primary">
                <div class="bg-secondary p-8 leading-none">
                    <p class="text-base md:text-xl font-bold">Our services</p>
                    <p class="text-2xl md:text-4xl font-bold">General Pest Control</p>
                </div>
                <div class="p-8">
                    <p class="text-lg md:text-xl leading-none font-medium mb-12">
                        Put an end to your pest problems with our comprehensive general pest control services. From spiders and cockroaches to bed bugs and fleas, we have the expertise to keep your property pest-free.
                    </p>

                    <a href="#forms" class="btn h-[50px] bg-dark text-secondary px-7 text-lg font-bold uppercase">Make an enquiry</a>
                </div>
            </div>

            <div class="w-full lg:w-7/12 xl:w-2/3 flex justify-end items-center explore p-5 pt-[420px] md:p-14">
                <div class="w-full md:w-2/3 lg:w-8/12 xl:w-1/2 bg-dark text-white p-5">
                    <div class="flex flex-wrap">
                        <div class="w-7/12">
                            <p class="text-4xl font-bold leading-7">General pest control special offer</p>
                        </div>
                        <div class="w-5/12 text-secondary">
                            <p class="text-2xl font-medium">From</p>
                            <p class="text-55 font-extrabold">$165</p>
                        </div>
                    </div>
                    <p class="text-2xl font-medium pt-4">Add rodent removal</p>
                    <p class="text-4xl font-bold leading-none text-secondary">+ $80</p>

                    <div class="flex mt-10">
                        <a href="#forms" class="h-[50px] border-2 border-secondary text-secondary inline-flex justify-center items-center uppercase text-lg font-bold px-16">Claim Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap -mx-1.5 gap-y-5" id="servicesSlider">
            <?php foreach ($services as $key => $service) : ?>
                <div class="w-full lg:w-1/2 xl:w-1/3 px-1.5">
                    <div class="h-full flex flex-col">
                        <div class="bg-secondary pt-4 px-4 pb-6">
                            <div class="h-[312px] w-full rounded-lg overflow-hidden"><?= renderImg('service-' . ($key + 1) . '.jpg', 'lib', 'h-full w-full object-cover') ?></div>

                            <p class="text-lg md:text-xl font-medium pt-4">Our services</p>
                            <p class="text-2xl md:text-3xl font-bold leading-none"><?= $service['title'] ?></p>
                        </div>
                        <div class="p-6 bg-primary grow flex flex-col justify-between items-start">
                            <div class="description text-lg md:text-xl leading-none font-medium mb-5 md:mb-12">
                                <?= $service['description'] ?>
                            </div>

                            <a href="#forms" class="btn h-[50px] bg-dark text-secondary px-7 text-lg font-bold uppercase">Make an enquiry</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="flex justify-end gap-x-2 mt-5 lg:hidden">
            <div class="w-[50px] h-[50px] border-2 border-primary flex justify-center items-center bg-black cursor-pointer" id="service-prev">
                <svg width="21" height="13" viewBox="0 0 21 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.0454 5.3183C20.4931 5.3183 20.856 5.68122 20.856 6.12891C20.856 6.57659 20.4931 6.93951 20.0454 6.93951V5.3183ZM0.422983 6.70209C0.106421 6.38553 0.106421 5.87228 0.422983 5.55572L5.58165 0.397056C5.89821 0.0804944 6.41146 0.0804944 6.72802 0.397056C7.04458 0.713617 7.04458 1.22686 6.72802 1.54343L2.14254 6.12891L6.72802 10.7144C7.04458 11.0309 7.04458 11.5442 6.72802 11.8608C6.41146 12.1773 5.89821 12.1773 5.58165 11.8608L0.422983 6.70209ZM20.0454 6.93951H0.996168V5.3183H20.0454V6.93951Z" fill="#FFE03B" />
                </svg>
            </div>

            <div class="w-[50px] h-[50px] border-2 border-primary flex justify-center items-center bg-black cursor-pointer" id="service-next">
                <svg width="21" height="13" viewBox="0 0 21 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.848633 5.3183C0.400947 5.3183 0.0380268 5.68122 0.0380268 6.12891C0.0380268 6.57659 0.400947 6.93951 0.848633 6.93951V5.3183ZM20.4711 6.70209C20.7876 6.38553 20.7876 5.87228 20.4711 5.55572L15.3124 0.397056C14.9958 0.0804944 14.4826 0.0804944 14.166 0.397056C13.8495 0.713617 13.8495 1.22686 14.166 1.54343L18.7515 6.12891L14.166 10.7144C13.8495 11.0309 13.8495 11.5442 14.166 11.8608C14.4826 12.1773 14.9958 12.1773 15.3124 11.8608L20.4711 6.70209ZM0.848633 6.93951H19.8979V5.3183H0.848633V6.93951Z" fill="#FFE03B" />
                </svg>
            </div>
        </div>

        <p class="text-35 md:text-65 text-center font-bold text-white leading-none xl:leading-relaxed mt-16 md:mt-32 lg:mt-44">We've got <span class="text-primary">all your services</span> covered!</p>

        <div class="flex flex-row justify-center gap-x-4 mt-10">
            <a href="#form" class="btn w-fit h-[48px] bg-primary px-4 md:px-7 text-lg font-bold uppercase">enquire today</a>
            <a href="tel:<?= $phone_number ?>" class="btn w-fit h-[48px] bg-white px-4 md:px-7 text-lg font-bold uppercase">Call | <?= $phone_number ?></a>
        </div>

        <div class="pt-12 lg:hidden" id="propertyTypeSlider">
            <div class="w-full">
                <div class="bg-white h-[590px] overflow-hidden flex flex-col">
                    <div class="px-5 pt-16 pb-12 text-center grow">
                        <p class="text-65 font-bold text-dark">Residential</p>
                        <p class="leading-none text-grey pt-16 pb-12">Our residential pest control services offer peace of mind, ensuring your home is a sanctuary, free from unwanted guests.</p>

                        <div class="w-9/12 mx-auto h-[90px] relative">
                            <div class="w-full flex flex-wrap justify-center items-center gap-3">
                                <div class="w-fit">
                                    <p class="h-[38px] bg-primary rounded-full text-xl font-bold px-4 capitalize flex items-center">House</p>
                                </div>
                                <div class="w-fit">
                                    <p class="h-[38px] bg-primary rounded-full text-xl font-bold px-4 capitalize flex items-center">Duplex</p>
                                </div>
                                <div class="w-fit">
                                    <p class="h-[38px] bg-primary rounded-full text-xl font-bold px-4 capitalize flex items-center">Townhouse</p>
                                </div>
                                <div class="w-fit">
                                    <p class="h-[38px] bg-primary rounded-full text-xl font-bold px-4 capitalize flex items-center">Apartment</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?= renderImg('residential.png', 'lib') ?>
                </div>
            </div>

            <div class="w-full">
                <div class="bg-white h-[590px] overflow-hidden flex flex-col">
                    <div class="px-5 pt-16 pb-12 text-center grow">
                        <p class="text-65 font-bold text-dark duration-150">Strata</p>
                        <p class="leading-none text-grey pt-16 pb-12">Elevate your strata living with our comprehensive pest control solutions, creating a harmonious and pest-free community.</p>

                        <div class="w-full h-[38px] relative">
                            <div class="w-full flex flex-wrap justify-center items-center gap-3">
                                <div class="w-fit">
                                    <p class="h-[38px] bg-primary rounded-full text-xl font-bold px-4 capitalize flex items-center">Apartment compled</p>
                                </div>
                                <div class="w-fit">
                                    <p class="h-[38px] bg-primary rounded-full text-xl font-bold px-4 capitalize flex items-center">Townhouse</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?= renderImg('strata.png', 'lib') ?>
                </div>
            </div>

            <div class="w-full">
                <div class="bg-white h-[590px] overflow-hidden flex flex-col">
                    <div class="px-5 pt-16 pb-12 text-center grow">
                        <p class="text-65 font-bold text-dark duration-150">Commercial</p>
                        <p class="leading-none text-grey pt-16 pb-12">Our commercial pest control services are your shield against safeguarding your business and ensuring a pest-free environment.</p>

                        <div class="w-full h-[38px] relative">
                            <div class="w-full flex flex-wrap justify-center items-center gap-3">
                                <div class="w-fit">
                                    <p class="h-[38px] bg-primary rounded-full text-xl font-bold px-4 capitalize flex items-center">Office</p>
                                </div>
                                <div class="w-fit">
                                    <p class="h-[38px] bg-primary rounded-full text-xl font-bold px-4 capitalize flex items-center">Hospital</p>
                                </div>
                                <div class="w-fit">
                                    <p class="h-[38px] bg-primary rounded-full text-xl font-bold px-4 capitalize flex items-center">School</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?= renderImg('commercial.png', 'lib') ?>
                </div>
            </div>
        </div>

        <div class="hidden lg:flex flex-wrap pt-12 md:pt-28">
            <div class="w-full md:w-1/3 group">
                <div class="grayscale group-hover:grayscale-0 group-hover:bg-white duration-150 h-[590px] overflow-hidden flex flex-col">
                    <div class="px-5 pt-16 pb-12 text-center grow">
                        <p class="text-65 font-bold text-grey group-hover:text-dark duration-150">Residential</p>
                        <p class="leading-none text-grey pt-16 pb-12">Our residential pest control services offer peace of mind, ensuring your home is a sanctuary, free from unwanted guests.</p>

                        <div class="w-9/12 mx-auto h-[90px] relative">
                            <div class="w-full flex flex-wrap justify-center items-center gap-3 absolute -bottom-full opacity-0 group-hover:opacity-100 group-hover:bottom-0 duration-200">
                                <div class="w-fit">
                                    <p class="h-[38px] bg-primary rounded-full text-xl font-bold px-4 capitalize flex items-center">House</p>
                                </div>
                                <div class="w-fit">
                                    <p class="h-[38px] bg-primary rounded-full text-xl font-bold px-4 capitalize flex items-center">Duplex</p>
                                </div>
                                <div class="w-fit">
                                    <p class="h-[38px] bg-primary rounded-full text-xl font-bold px-4 capitalize flex items-center">Townhouse</p>
                                </div>
                                <div class="w-fit">
                                    <p class="h-[38px] bg-primary rounded-full text-xl font-bold px-4 capitalize flex items-center">Apartment</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?= renderImg('residential.png', 'lib', 'group-hover:scale-110 duration-200') ?>
                </div>
            </div>

            <div class="w-full md:w-1/3 group">
                <div class="grayscale group-hover:grayscale-0 group-hover:bg-white duration-150 h-[590px] overflow-hidden flex flex-col">
                    <div class="px-5 pt-16 pb-12 text-center grow">
                        <p class="text-65 font-bold text-grey group-hover:text-dark duration-150">Strata</p>
                        <p class="leading-none text-grey pt-16 pb-12">Elevate your strata living with our comprehensive pest control solutions, creating a harmonious and pest-free community.</p>

                        <div class="w-full h-[38px] relative">
                            <div class="w-full flex flex-wrap justify-center items-center gap-3 absolute -bottom-full opacity-0 group-hover:opacity-100 group-hover:bottom-0 duration-200">
                                <div class="w-fit">
                                    <p class="h-[38px] bg-primary rounded-full text-xl font-bold px-4 capitalize flex items-center">Apartment compled</p>
                                </div>
                                <div class="w-fit">
                                    <p class="h-[38px] bg-primary rounded-full text-xl font-bold px-4 capitalize flex items-center">Townhouse</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?= renderImg('strata.png', 'lib', 'group-hover:scale-110 duration-200 mx-auto') ?>
                </div>
            </div>

            <div class="w-full md:w-1/3 group">
                <div class="grayscale group-hover:grayscale-0 group-hover:bg-white duration-150 h-[590px] overflow-hidden flex flex-col">
                    <div class="px-5 pt-16 pb-12 text-center grow">
                        <p class="text-65 font-bold text-grey group-hover:text-dark duration-150">Commercial</p>
                        <p class="leading-none text-grey pt-16 pb-12">Our commercial pest control services are your shield against safeguarding your business and ensuring a pest-free environment.</p>

                        <div class="w-full h-[38px] relative">
                            <div class="w-full flex flex-wrap justify-center items-center gap-3 absolute -bottom-full opacity-0 group-hover:opacity-100 group-hover:bottom-0 duration-200">
                                <div class="w-fit">
                                    <p class="h-[38px] bg-primary rounded-full text-xl font-bold px-4 capitalize flex items-center">Office</p>
                                </div>
                                <div class="w-fit">
                                    <p class="h-[38px] bg-primary rounded-full text-xl font-bold px-4 capitalize flex items-center">Hospital</p>
                                </div>
                                <div class="w-fit">
                                    <p class="h-[38px] bg-primary rounded-full text-xl font-bold px-4 capitalize flex items-center">School</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?= renderImg('commercial.png', 'lib', 'group-hover:scale-110 duration-200') ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="flex flex-wrap">
    <div class="w-full lg:w-1/2 h-[375px] md:h-[690px] order-1">
        <?= renderImg('warranty.jpg', 'lib', 'object-cover h-full w-full') ?>
    </div>

    <div class="w-full lg:w-1/2 bg-primary order-2">
        <div class="py-14 lg:py-5 px-4 xl:px-32 h-full flex flex-col justify-center items-start xl:w-10/12">
            <div>
                <p class="text-35 md:text-65 font-bold leading-none">We offer warranty!</p>
                <p class="text-2xl md:text-35 leading-none py-8 md:pt-12 md:pb-16">We stand behind the quality of our work, offering warranty of up to 6 months on select services.</p>
                <a href="#forms" class="btn h-[50px] bg-dark text-primary px-7 text-lg font-bold uppercase">Make an enquiry</a>
            </div>
        </div>
    </div>
</section>

<section class="flex flex-wrap">
    <div class="w-full lg:w-1/2 h-[375px] md:h-[690px] lg:order-2">
        <?= renderImg('experience.jpg', 'lib', 'object-cover h-full w-full') ?>
    </div>

    <div class="w-full lg:w-1/2 bg-primary lg:order-1">
        <div class="py-14 lg:py-5 px-4 xl:px-32 h-full flex flex-col justify-center items-start ms-auto xl:w-10/12">
            <div>
                <p class="text-35 md:text-65 font-bold leading-none">With over 20 years of experience</p>
                <p class="text-2xl md:text-35 leading-none py-8 md:pt-12 md:pb-16">We stand behind the quality of our work, offering warranty of up to 6 months on select services.</p>
                <a href="#forms" class="btn h-[50px] bg-dark text-primary px-7 text-lg font-bold uppercase">Make an enquiry</a>
            </div>
        </div>
    </div>
</section>

<section class="flex flex-wrap">
    <div class="w-full lg:w-1/2 h-[375px] md:h-[690px] order-1">
        <?= renderImg('free-quote.jpg', 'lib', 'object-cover h-full w-full') ?>
    </div>

    <div class="w-full lg:w-1/2 bg-primary order-2">
        <div class="py-14 lg:py-5 px-4 xl:px-32 h-full flex flex-col justify-center items-start xl:w-10/12">
            <div>
                <p class="text-35 md:text-65 font-bold leading-none">Know your options with a free quote.</p>
                <p class="text-2xl md:text-35 leading-none py-8 md:pt-12 md:pb-16">Contact us today for a free, no-obligation quote. We believe in transparency and helping you make an informed decision.</p>
                <a href="#forms" class="btn h-[50px] bg-dark text-primary px-7 text-lg font-bold uppercase">Make an enquiry</a>
            </div>
        </div>
    </div>
</section>

<section class="py-14 md:py-36" id="forms">
    <div class="container">
        <div class="bg-secondary flex justify-end">
            <div class="w-full lg:w-1/2 flex">
                <div class="w-fit">
                    <button class="formToggleButton active" data-target="enquiryForm">
                        Make an enquiry
                    </button>
                </div>
                <div class="w-fit">
                    <button class="formToggleButton" data-target="freeQuoteForm">
                        Request a free quote
                    </button>
                </div>
            </div>
        </div>

        <div id="enquiryForm" class="formwrapper">
            <form action="./src/form" method="POST" enctype="multipart/form-data" id="form2" class="bg-primary flex flex-wrap gap-y-16 form px-3 py-11 md:p-11">
                <input type="hidden" name="token" id="recaptchaResponse2" class="recaptchaResponse" />

                <div class="w-full lg:w-1/2 order-1">
                    <div class="xl:w-9/12">
                        <p class="text-35 md:text-65 font-bold leading-none">Get in touch with our experts!</p>

                        <div class="description text-xl md:text-2xl py-6 md:py-10">
                            <p>Simply fill out your information and we will get back to you ASAP.</p>
                            <p>Or speak to us today!</p>
                        </div>

                        <a href="tel:<?= $phone_number ?>" class="h-[50px] border-2 border-black inline-flex justify-center items-center uppercase text-lg font-bold px-7">call | <?= $phone_number ?></a>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 order-2">
                    <div class="flex flex-wrap gap-y-4 -mx-2">
                        <div class="w-full md:w-1/2 px-2">
                            <input type="text" class="form-control" name="fullname" placeholder="Your name*" required />
                        </div>
                        <div class="w-full md:w-1/2 px-2">
                            <input type="tel" class="form-control" name="phonenumber" id="contactNumber2" placeholder="Contact no.*" required />
                            <p class="text-sm font-bold text-red-500 ps-5 hidden" id="phoneError2">Invalid Phone Number</p>
                        </div>
                        <div class="w-full px-2">
                            <input type="email" class="form-control" name="emailaddress" placeholder="Email address*" required />
                        </div>
                        <div class="w-full px-2">
                            <textarea name="additionalInformation" class="w-full rounded-[20px] overflow-hidden py-5 px-4" placeholder="Type your enquiry here..." rows="7"></textarea>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 flex gap-x-5 order-4 lg:order-3">
                    <svg width="42" height="43" viewBox="0 0 42 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.00012207" y="0.59668" width="41.9711" height="41.9711" rx="10" fill="#0F0D03" />
                        <path d="M11.8549 33.418C12.6954 33.418 13.3767 32.7556 13.3767 31.9384C13.3767 31.1213 12.6954 30.4589 11.8549 30.4589C11.0145 30.4589 10.3331 31.1213 10.3331 31.9384C10.3331 32.7556 11.0145 33.418 11.8549 33.418Z" fill="#FFE03B" />
                        <path d="M17.9421 33.418C18.7826 33.418 19.4639 32.7556 19.4639 31.9384C19.4639 31.1213 18.7826 30.4589 17.9421 30.4589C17.1016 30.4589 16.4203 31.1213 16.4203 31.9384C16.4203 32.7556 17.1016 33.418 17.9421 33.418Z" fill="#FFE03B" />
                        <path d="M24.0293 33.418C24.8697 33.418 25.5511 32.7556 25.5511 31.9384C25.5511 31.1213 24.8697 30.4589 24.0293 30.4589C23.1888 30.4589 22.5075 31.1213 22.5075 31.9384C22.5075 32.7556 23.1888 33.418 24.0293 33.418Z" fill="#FFE03B" />
                        <path d="M30.1165 33.418C30.9569 33.418 31.6382 32.7556 31.6382 31.9384C31.6382 31.1213 30.9569 30.4589 30.1165 30.4589C29.276 30.4589 28.5947 31.1213 28.5947 31.9384C28.5947 32.7556 29.276 33.418 30.1165 33.418Z" fill="#FFE03B" />
                        <path d="M27.0729 17.1432H25.5511V14.1842C25.5511 13.007 25.0701 11.878 24.2139 11.0456C23.3577 10.2132 22.1965 9.74561 20.9857 9.74561C19.7749 9.74561 18.6137 10.2132 17.7575 11.0456C16.9013 11.878 16.4203 13.007 16.4203 14.1842V17.1432H14.8985C14.4949 17.1432 14.1078 17.2991 13.8224 17.5766C13.537 17.854 13.3767 18.2303 13.3767 18.6227V26.0203C13.3767 26.4127 13.537 26.7891 13.8224 27.0665C14.1078 27.344 14.4949 27.4999 14.8985 27.4999H27.0729C27.4765 27.4999 27.8635 27.344 28.1489 27.0665C28.4343 26.7891 28.5947 26.4127 28.5947 26.0203V18.6227C28.5947 18.2303 28.4343 17.854 28.1489 17.5766C27.8635 17.2991 27.4765 17.1432 27.0729 17.1432ZM19.4639 17.1432V14.1842C19.4639 13.7918 19.6242 13.4155 19.9096 13.138C20.195 12.8605 20.5821 12.7046 20.9857 12.7046C21.3893 12.7046 21.7764 12.8605 22.0618 13.138C22.3471 13.4155 22.5075 13.7918 22.5075 14.1842V17.1432H19.4639Z" fill="#FFE03B" />
                    </svg>

                    <div>
                        <p class="text-xl font-bold leading-none">Privacy & Security Protection</p>
                        <p class="text-lg leading-none">All information provided will be kept 100% private &amp; secure.</p>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 order-3 lg:order-4">
                    <button class="h-[59px] bg-black w-full text-primary uppercase text-xl md:text-2xl font-bold rounded-1" type="submit">Submit Now</button>
                </div>
            </form>
        </div>

        <div id="freeQuoteForm" class="formwrapper hidden">
            <form action="./src/freeQuoteForm" method="POST" id="form3" enctype="multipart/form-data" class="bg-primary flex flex-wrap gap-y-16 form px-3 py-11 md:p-11">
                <input type="hidden" name="token" id="recaptchaResponse3" class="recaptchaResponse" />

                <div class="w-full lg:w-1/2 order-1">
                    <div class="xl:w-10/12">
                        <p class="text-35 md:text-65 font-bold leading-none">Ready to rid your property of pests?</p>

                        <div class="description text-xl md:text-2xl py-10">
                            <p>Contact RPM Pest Control <?= $location ?> today for a free quote. Our experienced team is dedicated to keeping your home or business pest-free and safe. Your satisfaction is our guarantee.</p>
                        </div>

                        <a href="tel:<?= $phone_number ?>" class="h-[50px] border-2 border-black inline-flex justify-center items-center uppercase text-lg font-bold px-7">call | <?= $phone_number ?></a>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 order-2">
                    <div class="flex flex-wrap gap-y-4 -mx-2">
                        <div class="w-full md:w-1/2 px-2">
                            <input type="text" class="form-control" name="fullname" placeholder="Your name*" required />
                        </div>
                        <div class="w-full md:w-1/2 px-2">
                            <input type="tel" class="form-control" id="contactNumber3" name="phonenumber" placeholder="Contact no.*" required />
                            <p class="text-sm font-bold text-red-500 ps-5 hidden" id="phoneError3">Invalid Phone Number</p>
                        </div>
                        <div class="w-full md:w-1/2 px-2">
                            <input type="email" class="form-control" name="emailaddress" placeholder="Email address*" required />
                        </div>
                        <div class="w-full md:w-1/2 px-2">
                            <select class="form-control" name="service" required>
                                <option selected disabled>Select service/s*</option>
                                <option>General pest</option>
                                <option>End of Lease</option>
                                <option>Termite Warranty Inspections</option>
                                <option>Bird Management</option>
                                <option>Termite Management (pre and post-construction)</option>
                                <option>Safe possum removal</option>
                                <option>German Cockroaches</option>
                                <option>Rodent treatments</option>
                                <option>Ant treatment</option>
                                <option>Bee treatment</option>
                                <option>Wasp Treatment</option>
                                <option>Bird baiting</option>
                                <option>Mice treatment</option>
                                <option>Bed bugs</option>
                                <option>Fleas</option>
                                <option>Drain flies</option>
                                <option>Spiders</option>
                                <option>Large Cockroaches</option>
                                <option>Carpet Beetles</option>
                                <option>Solar panel birdproofing</option>
                            </select>
                        </div>
                        <div class="w-full md:w-2/3 px-2">
                            <input type="text" class="form-control" name="streetaddress" placeholder="Street address" />
                        </div>
                        <div class="w-full md:w-1/3 px-2">
                            <input type="number" class="form-control" name="postcode" placeholder="Post code" />
                        </div>
                        <div class="w-full px-2">
                            <textarea name="additionalInformation" class="w-full rounded-[20px] overflow-hidden py-5 px-4" placeholder="Type your enquiry here..." rows="4"></textarea>
                        </div>
                        <div class="w-full px-2">
                            <label for="fileUpload2" class="flex flex-col justify-center items-center text-black cursor pointer text-xl font-medium">
                                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.8508 15.5463L16.5804 7.2373L9.30997 15.5463H13.4645V23.8554H19.6962V15.5463H23.8508Z" stroke="#0F0D03" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M31.0063 23.1411V27.0755C31.0063 28.119 30.5918 29.1197 29.854 29.8575C29.1161 30.5954 28.1154 31.0099 27.0719 31.0099H23.1375" stroke="#0F0D03" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M2.15417 23.1411V27.0755C2.15417 28.119 2.56869 29.1197 3.30653 29.8575C4.04437 30.5954 5.0451 31.0099 6.08856 31.0099H10.0229" stroke="#0F0D03" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M31.0063 10.0265V6.0921C31.0063 5.04864 30.5918 4.04791 29.854 3.31007C29.1161 2.57223 28.1154 2.15771 27.0719 2.15771H23.1375" stroke="#0F0D03" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M2.15417 10.0265V6.0921C2.15417 5.04864 2.56869 4.04791 3.30653 3.31007C4.04437 2.57223 5.0451 2.15771 6.08856 2.15771H10.0229" stroke="#0F0D03" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p id="file-label-2">Upload Images (optional)</p>
                            </label>
                            <input type="file" id="fileUpload2" name="uploadedFile" class="hidden" />
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 flex gap-x-5 order-4 lg:order-3">
                    <svg width="42" height="43" viewBox="0 0 42 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.00012207" y="0.59668" width="41.9711" height="41.9711" rx="10" fill="#0F0D03" />
                        <path d="M11.8549 33.418C12.6954 33.418 13.3767 32.7556 13.3767 31.9384C13.3767 31.1213 12.6954 30.4589 11.8549 30.4589C11.0145 30.4589 10.3331 31.1213 10.3331 31.9384C10.3331 32.7556 11.0145 33.418 11.8549 33.418Z" fill="#FFE03B" />
                        <path d="M17.9421 33.418C18.7826 33.418 19.4639 32.7556 19.4639 31.9384C19.4639 31.1213 18.7826 30.4589 17.9421 30.4589C17.1016 30.4589 16.4203 31.1213 16.4203 31.9384C16.4203 32.7556 17.1016 33.418 17.9421 33.418Z" fill="#FFE03B" />
                        <path d="M24.0293 33.418C24.8697 33.418 25.5511 32.7556 25.5511 31.9384C25.5511 31.1213 24.8697 30.4589 24.0293 30.4589C23.1888 30.4589 22.5075 31.1213 22.5075 31.9384C22.5075 32.7556 23.1888 33.418 24.0293 33.418Z" fill="#FFE03B" />
                        <path d="M30.1165 33.418C30.9569 33.418 31.6382 32.7556 31.6382 31.9384C31.6382 31.1213 30.9569 30.4589 30.1165 30.4589C29.276 30.4589 28.5947 31.1213 28.5947 31.9384C28.5947 32.7556 29.276 33.418 30.1165 33.418Z" fill="#FFE03B" />
                        <path d="M27.0729 17.1432H25.5511V14.1842C25.5511 13.007 25.0701 11.878 24.2139 11.0456C23.3577 10.2132 22.1965 9.74561 20.9857 9.74561C19.7749 9.74561 18.6137 10.2132 17.7575 11.0456C16.9013 11.878 16.4203 13.007 16.4203 14.1842V17.1432H14.8985C14.4949 17.1432 14.1078 17.2991 13.8224 17.5766C13.537 17.854 13.3767 18.2303 13.3767 18.6227V26.0203C13.3767 26.4127 13.537 26.7891 13.8224 27.0665C14.1078 27.344 14.4949 27.4999 14.8985 27.4999H27.0729C27.4765 27.4999 27.8635 27.344 28.1489 27.0665C28.4343 26.7891 28.5947 26.4127 28.5947 26.0203V18.6227C28.5947 18.2303 28.4343 17.854 28.1489 17.5766C27.8635 17.2991 27.4765 17.1432 27.0729 17.1432ZM19.4639 17.1432V14.1842C19.4639 13.7918 19.6242 13.4155 19.9096 13.138C20.195 12.8605 20.5821 12.7046 20.9857 12.7046C21.3893 12.7046 21.7764 12.8605 22.0618 13.138C22.3471 13.4155 22.5075 13.7918 22.5075 14.1842V17.1432H19.4639Z" fill="#FFE03B" />
                    </svg>

                    <div>
                        <p class="text-xl font-bold leading-none">Privacy & Security Protection</p>
                        <p class="text-lg leading-none">All information provided will be kept 100% private &amp; secure.</p>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 order-3 lg:order-4">
                    <button class="h-[59px] bg-black w-full text-primary uppercase text-xl md:text-2xl font-bold rounded-1" type="submit">Get Free Quote</button>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="testimonials pb-16 md:pb-24 lg:pb-36">
    <div class="container">
        <div class="flex flex-wrap justify-between items-center gap-y-8">
            <div class="w-full md:w-1/2">
                <p class="text-35 md:text-65 leading-none font-bold">Our <span class="text-primary">happy</span> clients</p>
                <p class="text-grey text-xl md:text-2xl leading-none pt-6 md:pt-10">Don't take our word for it; see what our clients have to say...</p>
            </div>

            <div class="w-full md:w-1/2 lg:w-5/12 xl:w-3/12">
                <div class="w-full bg-light flex justify-between items-center gap-x-4 p-5 rounded-2xl">
                    <div class="w-fit">
                        <?= renderImg('google.png', 'lib') ?>
                    </div>
                    <div class="w-fit">
                        <p class="font-bold text-55">4.9</p>
                    </div>
                    <div class="w-fit">
                        <p class="text-2xl font-medium">70+ reviews</p>
                        <svg width="140" height="26" viewBox="0 0 140 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.2602 0.116699L16.1021 8.86312H25.2987L17.8585 14.2687L20.7004 23.0151L13.2602 17.6095L5.82008 23.0151L8.66197 14.2687L1.22182 8.86312H10.4184L13.2602 0.116699Z" fill="#FFE03B" />
                            <path d="M41.6141 0.116211L44.456 8.86263H53.6525L46.2124 14.2682L49.0543 23.0146L41.6141 17.6091L34.174 23.0146L37.0159 14.2682L29.5757 8.86263H38.7722L41.6141 0.116211Z" fill="#FFE03B" />
                            <path d="M69.9679 0.116211L72.8098 8.86263H82.0063L74.5661 14.2682L77.408 23.0146L69.9679 17.6091L62.5277 23.0146L65.3696 14.2682L57.9295 8.86263H67.126L69.9679 0.116211Z" fill="#FFE03B" />
                            <path d="M98.3218 0.116211L101.164 8.86263H110.36L102.92 14.2682L105.762 23.0146L98.3218 17.6091L90.8816 23.0146L93.7235 14.2682L86.2833 8.86263H95.4799L98.3218 0.116211Z" fill="#FFE03B" />
                            <path d="M126.676 0.116211L129.518 8.86263H138.714L131.274 14.2682L134.116 23.0146L126.676 17.6091L119.235 23.0146L122.077 14.2682L114.637 8.86263H123.834L126.676 0.116211Z" fill="#FFE03B" />
                        </svg>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $testimonials = [
        [
            "name" => "Lux Admin",
            "comment" => "Hank and his team were amazing, I couldn't be happier with the service I received! From start to finish, the professionalism and attention to detail were outstanding. The team went above and beyond, their expertise was evident in the exceptional quality service provided. Highly recommend to anyone seeking top-notch service!"
        ],
        [
            "name" => "Lyna Hoang",
            "comment" => "Professional, efficient, knowledgeable and great communication. They use the best quality products that keep pests away for months. Very friendly staff, great price for excellent quality of service. 100% highly recommend RPM Pest Control to anyone who needs to get rid of pests. They helped get rid of roaches, spiders and bird lice. Very Happy Customer 😊"
        ],
        [
            "name" => "Anthony",
            "comment" => "Been using RPM Pest Control for years now. Calls are always friendly, Hank and the  technicians are very professional, always following up on their work after. Never had an issue with their services. Highly recommended and will be using them again when needed. Thanks RPM for your services."
        ],
        [
            "name" => "Frances Grande",
            "comment" => "10/10!! The team at RPM are friendly, prompt, professional, thorough & knowledgeable. I very highly recommend their services & will definitely use them on a regular basis. So pleased with the results. Awesome job guys 😊"
        ],
        [
            "name" => "Kimee Trinh",
            "comment" => "I've used RPM for years and Hank is the best in the business. He is so friendly, knowledgeable and communication is super easy. Always does the job right, everytime I have a problem. Highly recommend"
        ],
        [
            "name" => "Jordan Cavaliere",
            "comment" => "RPM Pest control serviced my apartment at Rosebery.
        They were prompt, professional and did an amazing job.
        I have used other pest control services in the past and they could not match the service that I received from RPM."
        ],
        [
            "name" => "Behrouz Taji",
            "comment" => "We used RPM's services last year to get rid of some cockroaches in our apartment. It worked! It's been a year and no trace of cockroaches. We were impressed so we have asked to come back this year for a repeat. Very professional and friendly staff."
        ]
    ];
    ?>

    <div id="testimonialSlider" class="mt-12">
        <?php foreach ($testimonials as $testimonial) : ?>
            <div>
                <p class="font-bold text-35"><?= $testimonial['name'] ?></p>

                <div class="flex justify-between items-center py-6">
                    <div class="w-fit">
                        <svg width="50" height="39" viewBox="0 0 50 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.561523 21.6349H11.0945L8.23766 38.2521H12.9668L21.6242 21.6349V0.572266H0.561523V21.6349Z" fill="#8C8A89" />
                            <path d="M28.5662 0.572266V21.6349H39.0992L36.2423 38.2521H40.9715L49.6288 21.6349V0.572266H28.5662Z" fill="#8C8A89" />
                        </svg>
                    </div>

                    <div class="w-fit">
                        <svg width="189" height="37" viewBox="0 0 189 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.4001 0.806152L22.3529 12.9716H35.1444L24.7959 20.4903L28.7487 32.6558L18.4001 25.1371L8.05153 32.6558L12.0043 20.4903L1.65577 12.9716H14.4473L18.4001 0.806152Z" fill="#FFC736" />
                            <path d="M56.6121 0.805664L60.5649 12.9711H73.3565L63.0079 20.4898L66.9607 32.6553L56.6121 25.1366L46.2636 32.6553L50.2164 20.4898L39.8678 12.9711H52.6593L56.6121 0.805664Z" fill="#FFC736" />
                            <path d="M94.8242 0.805664L98.777 12.9711H111.569L101.22 20.4898L105.173 32.6553L94.8242 25.1366L84.4756 32.6553L88.4284 20.4898L78.0798 12.9711H90.8714L94.8242 0.805664Z" fill="#FFC736" />
                            <path d="M133.036 0.805664L136.989 12.9711H149.781L139.432 20.4898L143.385 32.6553L133.036 25.1366L122.688 32.6553L126.64 20.4898L116.292 12.9711H129.083L133.036 0.805664Z" fill="#FFC736" />
                            <path d="M171.248 0.805664L175.201 12.9711H187.993L177.644 20.4898L181.597 32.6553L171.248 25.1366L160.9 32.6553L164.852 20.4898L154.504 12.9711H167.295L171.248 0.805664Z" fill="#FFC736" />
                        </svg>
                    </div>
                </div>

                <p class="text-xl text-grey leading-none">
                    <?= $testimonial['comment'] ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</section>