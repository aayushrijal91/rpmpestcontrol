<header>
    <div class="container">
        <div class="flex flex-wrap justify-between items-center py-5">
            <div class="w-fit">
                <a href="./">
                    <?= renderImg('logo.png', 'logo') ?>
                </a>
            </div>
            <div class="w-fit">
                <div class="flex flex-row justify-center gap-x-4">
                    <a href="tel:<?= $phone_number ?>" class="btn w-fit h-[48px] bg-primary px-7 text-lg font-bold"><?= $phone_number ?></a>
                    <a href="#" class="btn w-fit h-[48px] bg-white px-7 text-lg font-bold uppercase">enquire today</a>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap mt-12">
            <div class="w-8/12">
                <p class="text-2xl uppercase font-medium">Welcome to rpm pest control hills district</p>
                <h1 class="text-65 leading-none font-bold xl:w-11/12">Your go-to experts in effective & reliable pest control solutions</h1>

                <div class="flex mt-10">
                    <a href="#" class="h-[50px] border-2 border-black inline-flex justify-center items-center uppercase text-lg font-bold px-16">Services</a>
                </div>

                <div class="flex flex-wrap bg-secondary mt-36">
                    <div class="w-1/3 bg-secondary text-black p-4">
                        <div class="flex flex-wrap">
                            <div class="w-1/2">
                                <p class="text-4xl font-bold leading-7">General pest service</p>
                            </div>
                            <div class="w-1/2">
                                <p class="text-2xl font-medium">From</p>
                                <p class="text-55 font-extrabold">$165</p>
                            </div>
                        </div>
                        <p class="text-2xl font-medium">Add rodent removal</p>
                        <p class="text-4xl font-bold leading-none">+ $80</p>

                        <div class="flex mt-10">
                            <a href="#" class="h-[50px] border-2 border-black inline-flex justify-center items-center uppercase text-lg font-bold px-7">Enquire Today</a>
                        </div>
                    </div>
                    <div class="w-1/3 bg-black text-secondary flex flex-col items-center justify-center text-center p-10">
                        <p class="text-4xl leading-7">We take care of our seniors!</p>
                        <p class="uppercase text-55 font-bold py-4">10% OFF</p>
                        <div class="flex mt-7">
                            <a href="#" class="h-[50px] border-2 border-secondary inline-flex justify-center items-center uppercase text-lg font-bold px-7">Claim Now</a>
                        </div>
                    </div>
                    <div class="w-1/3 flex flex-col items-center justify-center text-center p-6">
                        <p class="text-4xl leading-7 font-medium">Refer a neighbour and get...</p>
                        <p class="uppercase text-55 font-bold py-5">20% OFF</p>
                        <div class="flex mt-7">
                            <a href="#" class="h-[50px] border-2 border-black inline-flex justify-center items-center uppercase text-lg font-bold px-7">Claim Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-4/12 flex justify-end">
                <div class="w-11/12">
                    <p class="text-2xl capitalize font-medium text-primary">Don't wait. Get your free quote now!</p>

                    <form action="" id="form" class="form flex flex-wrap gap-y-4 -mx-1 pt-8">
                        <div class="w-1/2 px-1">
                            <input type="text" class="form-control" name="fullname" placeholder="Your name*" required />
                        </div>
                        <div class="w-1/2 px-1">
                            <input type="tel" class="form-control" name="phonenumber" placeholder="Contact no.*" required />
                        </div>
                        <div class="w-full px-1">
                            <input type="email" class="form-control" name="emailaddress" placeholder="Email address*" required />
                        </div>
                        <div class="w-full px-1">
                            <input type="text" class="form-control" name="streetaddress" placeholder="Street address*" required>
                        </div>
                        <div class="w-1/2 px-1">
                            <input type="number" class="form-control" name="postcode" placeholder="Post code*">
                        </div>
                        <div class="w-1/2 px-1">
                            <select class="form-control" name="service" required>
                                <option selected disabled>Select service/s*</option>
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
                                <p id="">Upload Images (optional)</p>
                            </label>
                            <input type="file" id="fileUpload" name="fileUpload" class="hidden" />
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


<div class="container my-28">
    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2">
            <p class="text-65 font-bold"><span class="text-primary">20+ years</span> of expertise</p>
            <p class="text-grey text-2xl leading-none pt-10">Rest assured, you're in good hands. Take control today.</p>
        </div>

        <div class="w-full md:w-1/2">
            <p class="text-2xl font-bold">Welcome to RPM Pest Control Hills District</p>
            <p class="font-medium text-grey text-xl pt-5">At RPM Pest Control, we are your dedicated partners in pest management, proudly serving the Hills District and the surrounding areas. With over 25 years of experience, we have established ourselves as the go-to experts in providing effective and reliable pest control solutions. Whether you're dealing with general pests, termites, rodents, or any other unwelcome guests, you can trust us to safeguard your home or business.</p>
        </div>
    </div>

    <div class="flex flex-wrap mt-24">
        <div class="w-1/3 border-l-2 border-r-2 border-grey">
            <div class="flex flex-wrap justify-between items-center gap-x-4 px-7">
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

        <div class="w-1/3 border-r-2 border-grey">
            <div class="flex flex-wrap justify-between items-center gap-x-4 px-7">
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

        <div class="w-1/3 border-r-2 border-grey">
            <div class="flex flex-wrap justify-between items-center px-7">
                <div class="w-5/12">
                    <p class="text-base leading-4">Servicing<br /> The Hills District & surrounding areas</p>
                </div>
                <div class="w-1/2">
                    <?= renderImg('the-hills.png', 'lib') ?>
                </div>
            </div>
        </div>
    </div>

    <p class="text-65 font-bold mt-24"><span class="text-primary">Transparent & fair</span> pricing</p>
    <p class="text-grey text-2xl leading-none pt-10">We believe in transparent pricing. You won't find any hidden fees when you choose RPM Pest Control Hills District.</p>

    <div class="h-[234px] w-full mt-12 call-out-fee p-6 flex flex-wrap justify-between items-center">
        <div class="w-2/12 bg-dark flex flex-col justify-center items-center rounded-[10px] p-5">
            <p class="text-55 font-bold text-white">$0</p>
            <p class="text-secondary text-2xl pt-2 pb-5">Call out fee!</p>

            <svg width="103" height="52" viewBox="0 0 103 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M33.5411 40.4757C33.5557 40.6811 33.564 40.89 33.564 41.103V41.1227L33.563 41.1423C33.2797 46.5326 28.8336 50.8237 23.3692 50.8237C17.9049 50.8237 13.4588 46.5326 13.1755 41.1423L13.1745 41.1227V41.103C13.1745 41.0719 13.1747 41.041 13.175 41.0102L1.90787 39.6155L1.25 39.5341V38.8712V30.6444V29.8944H2H3.77635L4.70767 8.5798C4.70768 8.57963 4.70769 8.57946 4.7077 8.57929C4.86287 4.91828 7.77454 1.98146 11.4367 1.80174L33.5411 40.4757ZM33.5411 40.4757L72.4909 40.1891C72.0683 45.6262 76.6078 50.8164 82.6343 50.8164C87.9728 50.8164 92.3395 46.7206 92.8018 41.5055L97.415 41.6121L97.4236 41.6123H97.4323C99.7209 41.6123 101.581 39.7522 101.581 37.4636V31.1623V30.4486L100.868 30.4132L33.5411 40.4757ZM95.8557 28.2535H95.863V29.0035C95.863 29.0374 95.8863 29.2136 96.3635 29.472C96.8054 29.7112 97.4376 29.9047 98.1287 30.0523C98.8083 30.1975 99.4946 30.2882 100.015 30.3426C100.275 30.3696 100.49 30.3874 100.64 30.3984C100.677 30.4011 100.711 30.4034 100.74 30.4054C100.768 30.4073 100.793 30.4088 100.812 30.41L100.856 30.4125L100.866 30.4131L100.868 30.4132L100.868 30.4132L95.8557 28.2535ZM95.8557 28.2535V25.6911H97.4906H98.3473L98.234 24.842L98.1319 24.0762L98.1318 24.0753C97.8701 22.1299 96.39 20.5796 94.4691 20.2097L85.0271 18.1333L85.0168 18.1311L85.0064 18.1291C82.6612 17.682 80.4946 16.5678 78.7683 14.9242C78.7683 14.9241 78.7682 14.9241 78.7682 14.924L69.2071 5.8151L95.8557 28.2535ZM57.837 2.03209C62.8916 2.57457 66.8881 3.60402 69.2069 5.81487L57.837 2.03209ZM57.837 2.03209C53.1032 1.52405 47.2526 1.42976 40.6105 1.32271M57.837 2.03209L40.6105 1.32271M40.6105 1.32271C40.1014 1.3145 39.5877 1.30622 39.0694 1.29768M40.6105 1.32271L39.0694 1.29768M39.0694 1.29768C27.9905 1.11498 17.6017 1.49495 11.437 1.80172L39.0694 1.29768ZM23.3692 44.6779C21.1141 44.6779 19.2911 42.8548 19.2911 40.5997C19.2911 38.3446 21.1141 36.5216 23.3692 36.5216C25.6244 36.5216 27.4474 38.3446 27.4474 40.5997C27.4474 42.8548 25.6244 44.6779 23.3692 44.6779ZM56.2023 20.2746V9.22605L63.7428 9.54394L72.8591 20.2746H56.2023ZM82.627 44.6779C80.3718 44.6779 78.5488 42.8548 78.5488 40.5997C78.5488 38.3446 80.3718 36.5216 82.627 36.5216C84.8821 36.5216 86.7051 38.3446 86.7051 40.5997C86.7051 42.8549 84.8821 44.6779 82.627 44.6779Z" stroke="#FFE03B" stroke-width="1.5" />
            </svg>
        </div>

        <div class="w-3/12">
            <a href="#" class="btn h-[50px] bg-secondary px-16 text-lg font-bold uppercase">Claim Now</a>
        </div>
    </div>
</div>

<section class="bg-black py-32">
    <div class="container">
        <p class="text-65 text-white font-bold leading-none"><span class="text-secondary">Explore</span> what we offer</p>

        <div class="flex flex-wrap mt-24 mb-10">
            <div class="w-1/3 bg-primary">
                <div class="bg-secondary p-8 leading-none">
                    <p class="text-xl font-bold">Our services</p>
                    <p class="text-4xl font-bold">General Pest Control</p>
                </div>
                <div class="p-8">
                    <p class="text-xl leading-none font-medium mb-12">
                        Put an end to your pest problems with our comprehensive general pest control services. From spiders and cockroaches to bed bugs and fleas, we have the expertise to keep your property pest-free.
                    </p>

                    <a href="#" class="btn h-[50px] bg-dark text-secondary px-7 text-lg font-bold uppercase">Make an enquiry</a>
                </div>
            </div>

            <div class="w-2/3 flex justify-end items-center explore p-14">
                <div class="w-1/2 bg-dark text-white p-5">
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
                        <a href="#" class="h-[50px] border-2 border-secondary text-secondary inline-flex justify-center items-center uppercase text-lg font-bold px-16">Claim Now</a>
                    </div>
                </div>
            </div>
        </div>

        <?php $services = [
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
        ]; ?>

        <div class="flex flex-wrap -mx-1.5 gap-y-5">
            <?php foreach ($services as $key => $service) : ?>
                <div class="w-1/3 px-1.5">
                    <div class="h-full flex flex-col">
                        <div class="bg-secondary pt-4 px-4 pb-6">
                            <div class="h-[312px] w-full rounded-lg overflow-hidden"><?= renderImg('service-' . $key + 1 . '.jpg', 'lib', 'h-full w-full object-cover') ?></div>

                            <p class="text-xl font-medium pt-4">Our services</p>
                            <p class="text-3xl font-bold leading-none"><?= $service['title'] ?></p>
                        </div>
                        <div class="p-6 bg-primary grow flex flex-col justify-between items-start">
                            <div class="description text-xl leading-none font-medium mb-12">
                                <?= $service['description'] ?>
                            </div>

                            <a href="#form" class="btn h-[50px] bg-dark text-secondary px-7 text-lg font-bold uppercase">Make an enquiry</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <p class="text-65 text-center font-bold text-white leading-relaxed mt-44">We've got <span class="text-primary">all your services</span> covered!</p>
        <div class="flex flex-row justify-center gap-x-4 mt-10">
            <a href="#form" class="btn w-fit h-[48px] bg-primary px-7 text-lg font-bold uppercase">enquire today</a>
            <a href="tel:<?= $phone_number ?>" class="btn w-fit h-[48px] bg-white px-7 text-lg font-bold uppercase">Call | <?= $phone_number ?></a>
        </div>

        <div class="flex flex-wrap pt-28">
            <div class="w-1/3 group">
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

            <div class="w-1/3 group">
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

            <div class="w-1/3 group">
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
    <div class="w-1/2 h-[690px] order-1">
        <?= renderImg('warranty.jpg', 'lib', 'object-cover h-full w-full') ?>
    </div>

    <div class="w-1/2 bg-primary order-2">
        <div class="px-32 h-full flex flex-col justify-center items-start  lg:w-10/12">
            <div>
                <p class="text-65 font-bold leading-none">We offer warranty!</p>
                <p class="text-35 leading-none pt-12 pb-16">We stand behind the quality of our work, offering warranty of up to 6 months on select services.</p>
                <a href="#form" class="btn h-[50px] bg-dark text-primary px-7 text-lg font-bold uppercase">Make an enquiry</a>
            </div>
        </div>
    </div>
</section>

<section class="flex flex-wrap">
    <div class="w-1/2 h-[690px] order-2">
        <?= renderImg('experience.jpg', 'lib', 'object-cover h-full w-full') ?>
    </div>

    <div class="w-1/2 bg-primary order-1">
        <div class="px-32 h-full flex flex-col justify-center items-start ms-auto lg:w-10/12">
            <div>
                <p class="text-65 font-bold leading-none">With over 20 years of experience</p>
                <p class="text-35 leading-none pt-12 pb-16">We stand behind the quality of our work, offering warranty of up to 6 months on select services.</p>
                <a href="#form" class="btn h-[50px] bg-dark text-primary px-7 text-lg font-bold uppercase">Make an enquiry</a>
            </div>
        </div>
    </div>
</section>

<section class="flex flex-wrap">
    <div class="w-1/2 h-[690px] order-1">
        <?= renderImg('free-quote.jpg', 'lib', 'object-cover h-full w-full') ?>
    </div>

    <div class="w-1/2 bg-primary order-2">
        <div class="px-32 h-full flex flex-col justify-center items-start  lg:w-10/12">
            <div>
                <p class="text-65 font-bold leading-none">Know your options with a free quote.</p>
                <p class="text-35 leading-none pt-12 pb-16">Contact us today for a free, no-obligation quote. We believe in transparency and helping you make an informed decision.</p>
                <a href="#form" class="btn h-[50px] bg-dark text-primary px-7 text-lg font-bold uppercase">Make an enquiry</a>
            </div>
        </div>
    </div>
</section>

<section class="form py-36" id="form">
    <div class="container">
        <form class="bg-primary flex flex-wrap gap-y-24 form py-11 ps-28 pe-11">
            <div class="w-1/2">
                <div class="xl:w-9/12">
                    <p class="text-65 font-bold leading-none">Get in touch with our experts!</p>
                    <div class="description text-2xl py-10">
                        <p>Simply fill out your information and we will get back to you ASAP.</p>
                        <p>Or speak to us today!</p>
                    </div>
                    <a href="tel:<?= $phone_number ?>" class="h-[50px] border-2 border-black inline-flex justify-center items-center uppercase text-lg font-bold px-7">call | <?= $phone_number ?></a>
                </div>
            </div>
            <div class="w-1/2">
                <div class="flex flex-wrap gap-y-4">
                    <div class="w-1/2 px-2">
                        <input type="text" class="form-control" name="fullname" placeholder="Your name*" required />
                    </div>
                    <div class="w-1/2 px-2">
                        <input type="tel" class="form-control" name="phonenumber" placeholder="Contact no.*" required />
                    </div>
                    <div class="w-full px-2">
                        <input type="email" class="form-control" name="emailaddress" placeholder="Email address*" required />
                    </div>
                    <div class="w-full px-2">
                        <textarea name="additionalInformation" class="w-full rounded-[20px] overflow-hidden py-5 px-4" placeholder="Type your enquiry here..." rows="7"></textarea>
                    </div>
                    <div class="w-full px-1">
                    </div>
                </div>
            </div>
            <div class="w-1/2 flex gap-x-5">
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
            <div class="w-1/2">
                <button class="h-[59px] bg-secondary w-full text-black uppercase text-2xl font-bold rounded-1" type="submit">Get Free Quote</button>
            </div>
        </form>
    </div>
</section>

<section class="testimonials pb-36">
    <div class="container">
        <div class="flex flex-wrap justify-between items-center">
            <div class="w-1/2">
                <p class="text-65 font-bold">Our <span class="text-primary">happy</span> clients</p>
                <p class="text-grey text-2xl leading-none pt-10">Don't take our word for it; see what our clients have to say...</p>
            </div>
            <div class="w-3/12">
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
            "name" => "Jane Doe",
            "comment" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.",
        ],
        [
            "name" => "Jane Doe",
            "comment" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.",
        ],
        [
            "name" => "Jane Doe",
            "comment" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.",
        ],
        [
            "name" => "Jane Doe",
            "comment" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.",
        ],
        [
            "name" => "Jane Doe",
            "comment" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.",
        ],
        [
            "name" => "Jane Doe",
            "comment" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.",
        ],
        [
            "name" => "Jane Doe",
            "comment" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.",
        ],
        [
            "name" => "Jane Doe",
            "comment" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.",
        ],
        [
            "name" => "Jane Doe",
            "comment" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.",
        ],

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