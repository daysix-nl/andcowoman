<?php 
/**
 * The template for displaying the footer
 * 
 * @package Day Six theme
 */
 ?>
<footer class="bg-[#F2F2F2]">
   <div class="px-[12px] sm:px-[40px] md:px-[50px] xl:px-[85px] pt-8 pb-4">
        <section class="grid grid-cols-1  lg:grid-cols-3 gap-4 lg:gap-3">
            <div class="col-span-1 flex flex-row">
                <div class="w-1/2">
                    <img class="w-[90px]" src="/wp-content/themes/andcowoman/img/and-co-woman-logo-blk.png" alt="">
                    <div class="space-x-[13px] flex">
                        <a href="https://www.instagram.com/andcowoman/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                                <path id="Fill_1" data-name="Fill 1" d="M15,30A15,15,0,0,1,4.393,4.393,15,15,0,0,1,25.607,25.607,14.9,14.9,0,0,1,15,30ZM11.084,5a6.034,6.034,0,0,0-6.018,6.017v8.165A6.035,6.035,0,0,0,11.084,25.2h8.165a6.033,6.033,0,0,0,6.017-6.017V11.018A6.032,6.032,0,0,0,19.249,5Zm8.165,18.167H11.083A3.991,3.991,0,0,1,7.1,19.183V11.018a3.992,3.992,0,0,1,3.985-3.985h8.168a3.99,3.99,0,0,1,3.985,3.985v8.165A3.99,3.99,0,0,1,19.249,23.168Zm-4.082-13.3A5.226,5.226,0,1,0,20.392,15.1,5.232,5.232,0,0,0,15.167,9.871ZM20.4,8.662a1.252,1.252,0,1,0,1.252,1.251A1.253,1.253,0,0,0,20.4,8.662Zm-5.234,9.631A3.192,3.192,0,1,1,18.359,15.1,3.2,3.2,0,0,1,15.167,18.292Z"/>
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/people/Andcowoman/100055228670092/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                                <path id="Facebook" d="M15,30A15,15,0,0,1,4.393,4.393,15,15,0,0,1,25.607,25.607,14.9,14.9,0,0,1,15,30ZM8.555,12.754v4h3.457V27.025h4.139V16.758H19.6l.517-4H16.151V10.2c0-1.17.337-1.948,1.985-1.948h2.122V4.673a29.2,29.2,0,0,0-3.016-.157h-.076a5.157,5.157,0,0,0-3.724,1.361,5.365,5.365,0,0,0-1.43,3.929v2.948Z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="w-1/2">
                    <ul>
                        <?php foreach (wp_get_menu_array("footer-one") as $item) { ?>
                        <li>
                            <a class="text-12 leading-34 text-[#000000] font-poppins font-normal" href="<?php echo $item["url"]; ?>"><?php echo $item["title"]; ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-span-1 max-w-[300px]">
                <h3 class="font-12 font-bold font-poppins leading-22 uppercase">
                    <?php if(ICL_LANGUAGE_CODE=='nl'): ?>
                        BLIJF UP TO DATE
                    <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
                        STAY UP TO DATE
                    <?php elseif(ICL_LANGUAGE_CODE=='de'): ?>
                        AUF DEM LAUFENDEN BLEIBEN
                    <?php endif; ?>
                </h3>
                <p class="py-[20px] text-12 leading-34 text-[#000000] font-poppins font-normal footer-p-medium max-w-[250px]">
                    <?php if(ICL_LANGUAGE_CODE=='nl'): ?>
                        Schrijf je in voor onze nieuwsbrief en ontvang 10% korting
                    <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
                        Sign up for our newsletter and receive a 10% discount
                    <?php elseif(ICL_LANGUAGE_CODE=='de'): ?>
                        Melden Sie sich für unseren Newsletter an und erhalten Sie 10 % Rabatt
                    <?php endif; ?>
                </p>
                <div class="footer-form">
                    <?php echo do_shortcode( '[gravityform id="1" title="false" description="false"]' ); ?>
                </div>
            </div>
            <div class="col-span-1 flex">
                <div class="w-1/2">
                    <ul>
                        <?php foreach (wp_get_menu_array("footer-two") as $item) { ?>
                        <li>
                            <a class="text-12 leading-34 text-[#000000] font-poppins font-normal" href="<?php echo $item["url"]; ?>"><?php echo $item["title"]; ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="w-1/2">
                    <ul>
                        <?php foreach (wp_get_menu_array("footer-three") as $item) { ?>
                        <li>
                            <a class="text-12 leading-34 text-[#000000] font-poppins font-normal" href="<?php echo $item["url"]; ?>"><?php echo $item["title"]; ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </section>
        <section class="space-y-4 mt-7">

            <div class="w-full mx-auto flex justify-between max-w-[295px] md:max-w-[295px] xl:max-w-[295px]">
                <div class="border-[#EDEDED] border-[1px] rounded-[4px] h-[23px] w-[36.64px] overflow-hidden flex justify-center items-center bg-[#fff]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19.474" height="6.247" viewBox="0 0 19.474 6.247">
                        <g id="Group_75" data-name="Group 75" transform="translate(0 0)">
                            <path id="Path_66" data-name="Path 66" d="M19.668,57.661H18.079l.993-6.035h1.589Zm-2.926-6.035-1.515,4.151-.179-.894h0l-.535-2.714a.678.678,0,0,0-.754-.543h-2.5l-.029.1a5.984,5.984,0,0,1,1.662.69l1.381,5.243h1.656l2.528-6.035Zm12.5,6.035H30.7l-1.272-6.035H28.15a.729.729,0,0,0-.734.45l-2.37,5.585H26.7l.331-.9h2.02Zm-1.749-2.135.835-2.258.47,2.258Zm-2.321-2.449.227-1.3a4.632,4.632,0,0,0-1.429-.263c-.789,0-2.661.341-2.661,2,0,1.559,2.2,1.578,2.2,2.4s-1.971.672-2.622.156l-.236,1.355a4.5,4.5,0,0,0,1.794.341c1.084,0,2.72-.555,2.72-2.066,0-1.569-2.218-1.715-2.218-2.4S24.491,52.708,25.171,53.078Z" transform="translate(-11.226 -51.519)" fill="#2566af"></path>
                        </g>
                    </svg>
                </div>
                <div class="border-[#EDEDED] border-[1px] rounded-[4px] h-[23px] w-[36.64px] overflow-hidden flex justify-center items-center bg-[#fff]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21.211" height="13.467" viewBox="0 0 21.211 13.467">
                        <ellipse id="Ellipse_20" data-name="Ellipse 20" cx="6.749" cy="6.734" rx="6.749" ry="6.734" fill="#eb001b"></ellipse>
                        <ellipse id="Ellipse_21" data-name="Ellipse 21" cx="6.749" cy="6.734" rx="6.749" ry="6.734" transform="translate(7.713)" fill="#f79e1b"></ellipse>
                        <path id="Path_57" data-name="Path 57" d="M21.785,11.734A6.488,6.488,0,0,0,18.892,6.3,6.751,6.751,0,0,0,16,11.734a6.617,6.617,0,0,0,2.892,5.434,6.488,6.488,0,0,0,2.892-5.434Z" transform="translate(-8.287 -5)" fill="#ff5f00"></path>
                    </svg>

                </div>
                <div class="border-[#EDEDED] border-[1px] rounded-[4px] h-[23px] w-[36.64px] overflow-hidden flex justify-center items-center bg-[#fff]">
                   
                    <svg width="38px" height="25px" viewBox="0 0 38 25" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="h-full w-auto">
                        <g id="Meandco" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Meandco---About" transform="translate(-779, -4341)" fill-rule="nonzero">
                                <g id="Sofort" transform="translate(766, 4333)">
                                    <g id="sofort-logo-vector" transform="translate(13, 8)">
                                        <path d="M36.0394614,25 L1.96053859,25 C0.876416478,24.99 0,24.12 0,23.045 L0,1.955 C0,0.875 0.88654846,0 1.98080256,0 L36.0191974,0 C37.1134515,0 38,0.875 38,1.955 L38,23.05 C37.994934,24.12 37.1235835,24.99 36.0394614,25" id="Path" fill="#EF809F"></path>
                                        <path d="M11.4035462,22.345 C12.2647647,22.345 12.9233436,21.775 12.9233436,20.94 C12.9233436,20.165 12.3660845,19.83 11.6821757,19.63 C11.2465005,19.505 10.9729369,19.41 10.9729369,19.105 C10.9729369,18.85 11.1603786,18.65 11.4592721,18.65 C11.7125717,18.65 11.9000133,18.795 12.0367951,19.015 L12.7510999,18.57 C12.5281962,18.085 12.0266631,17.835 11.4846021,17.835 C10.6233835,17.835 10.0762565,18.445 10.0762565,19.155 C10.0762565,19.72 10.4207439,20.155 11.2667644,20.4 C11.7277696,20.53 12.0215971,20.62 12.0215971,20.98 C12.0215971,21.32 11.7733636,21.53 11.4136782,21.53 C11.0286628,21.53 10.7348354,21.285 10.5575257,21.06 L9.96480469,21.645 C10.2839621,22.075 10.8006932,22.345 11.4035462,22.345 M14.8838821,22.345 C13.9720037,22.345 13.232369,21.625 13.232369,20.75 C13.232369,19.875 13.9720037,19.155 14.8838821,19.155 C15.7957606,19.155 16.5353953,19.875 16.5353953,20.75 C16.5353953,21.625 15.7957606,22.345 14.8838821,22.345 M14.8838821,21.545 C15.3246234,21.545 15.6741768,21.2 15.6741768,20.75 C15.6741768,20.3 15.3246234,19.955 14.8838821,19.955 C14.4380749,19.955 14.0935875,20.3 14.0935875,20.75 C14.0935875,21.205 14.4431409,21.545 14.8838821,21.545 M18.6681776,18.69 L18.6681776,17.89 L18.5415278,17.89 C17.4928676,17.89 16.9761365,18.58 16.9761365,19.39 L16.9761365,22.265 L17.837355,22.265 L17.837355,21.005 C17.837355,20.585 18.1666444,20.285 18.6428476,20.275 L18.6428476,19.465 C18.3034262,19.465 18.0298627,19.565 17.837355,19.765 L17.837355,19.44 C17.837355,18.91 18.1869084,18.67 18.6681776,18.69 M20.5476603,22.345 C19.6357819,22.345 18.8961472,21.625 18.8961472,20.75 C18.8961472,19.875 19.6357819,19.155 20.5476603,19.155 C21.4595387,19.155 22.1991734,19.875 22.1991734,20.75 C22.1991734,21.625 21.4595387,22.345 20.5476603,22.345 M20.5476603,21.545 C20.9934675,21.545 21.3379549,21.2 21.3379549,20.75 C21.3379549,20.3 20.9884015,19.955 20.5476603,19.955 C20.1069191,19.955 19.7573657,20.3 19.7573657,20.75 C19.7573657,21.205 20.1069191,21.545 20.5476603,21.545 M23.5011332,19.585 L23.5011332,19.24 L22.6652446,19.24 L22.6652446,22.265 L23.5264631,22.265 L23.5264631,20.885 C23.5264631,20.385 23.8253566,20.105 24.3420877,20.105 L24.3420877,19.195 C23.9520064,19.18 23.6733769,19.31 23.5011332,19.585 M25.6997734,20.72 L25.6997734,19.98 C25.892281,20.18 26.1607786,20.28 26.505266,20.28 L26.505266,19.475 C26.0391948,19.465 25.6997734,19.155 25.6997734,18.745 L25.6997734,18.27 L24.8385549,18.27 L24.8385549,20.77 C24.8385549,21.58 25.35022,22.27 26.4039461,22.27 L26.5305959,22.27 L26.5305959,21.47 C26.0493268,21.485 25.6997734,21.25 25.6997734,20.72 M27.5589921,22.315 C27.8730836,22.315 28.1365151,22.06 28.1365151,21.745 C28.1365151,21.435 27.8781496,21.175 27.5589921,21.175 C27.2398347,21.175 26.9814691,21.43 26.9814691,21.745 C26.9814691,22.06 27.2398347,22.315 27.5589921,22.315" id="Shape" fill="#FFFFFF"></path>
                                        <path d="M17.6347154,11.62 C17.9032129,11.88 17.9082789,12.305 17.6448474,12.57 L17.5941874,12.625 C17.3307559,12.89 16.9001466,12.895 16.6316491,12.635 L15.1118518,11.15 C14.6913745,10.735 14.6356486,10.225 14.8990801,9.955 L14.94974,9.9 C15.1675777,9.675 15.527263,9.655 15.7754966,9.845 C15.8920144,9.935 16.0642581,9.915 16.1605119,9.8 C16.2516998,9.685 16.2314358,9.515 16.114918,9.42 C15.6437808,9.055 14.970004,9.1 14.5545927,9.52 L14.5039328,9.575 C14.0125317,10.075 14.1087855,10.92 14.7217704,11.525 L16.2466338,13.025 C16.7380349,13.49 17.5131316,13.48 17.9893348,13 L18.0450607,12.945 C18.5111318,12.465 18.5009999,11.705 18.0197307,11.235 C17.9133449,11.13 17.7411012,11.13 17.6347154,11.24 C17.5232636,11.345 17.5232636,11.515 17.6347154,11.62 M16.722837,3.565 L17.3459539,8.615 C17.3611518,8.76 17.4979336,8.87 17.6499133,8.85 C17.7968271,8.835 17.9082789,8.7 17.8880149,8.55 L17.264898,3.48 L17.259832,3.45 C17.1534462,3.03 17.4168777,2.56 17.7714971,2.485 C17.9690708,2.445 18.1767764,2.48 18.3439541,2.59 C18.5111318,2.7 18.6276496,2.87 18.6681776,3.065 L19.7522997,7.635 C19.7877616,7.78 19.9346754,7.87 20.0815891,7.835 C20.2285029,7.8 20.3196907,7.655 20.2842288,7.51 L19.2051726,2.955 C19.1393148,2.625 18.9366751,2.33 18.6479136,2.14 C18.3591521,1.95 17.9994667,1.885 17.6600453,1.955 C16.9913345,2.095 16.5556592,2.865 16.722837,3.565" id="Shape" fill="#FFFFFF"></path>
                                        <path d="M22.437275,9.495 L23.6683109,3.445 C23.8101586,2.795 23.4200773,2.14 22.7665645,1.95 C22.0370617,1.77 21.302493,2.19 21.1150513,2.9 L19.7522997,7.505 C19.7117718,7.65 19.7928276,7.8 19.9397414,7.84 C20.0866551,7.88 20.2386348,7.8 20.2791628,7.655 L21.6419144,3.045 C21.7584322,2.62 22.1941075,2.365 22.6196507,2.47 C22.9844021,2.58 23.2123717,2.955 23.1313158,3.335 L21.90028,9.39 C21.869884,9.535 21.9661378,9.68 22.1130516,9.71 C22.2650313,9.735 22.4119451,9.64 22.437275,9.495 M19.3419544,15.325 C17.3915478,15.325 15.7653646,13.915 15.7653646,11.91 C15.7653646,11.76 15.6437808,11.64 15.4918011,11.64 C15.3398214,11.64 15.2182376,11.76 15.2182376,11.91 C15.2182376,14.23 17.1078523,15.865 19.3419544,15.865 C19.4939341,15.865 19.6155179,15.745 19.6155179,15.595 C19.6155179,15.445 19.4939341,15.325 19.3419544,15.325 M18.3794161,10.61 C18.3388881,10.76 18.2426343,10.895 18.1109185,10.98 L18.0501266,11.015 C17.7360352,11.225 17.3104919,11.145 17.0977203,10.835 L15.9021464,9.08 C15.5779229,8.59 15.6184509,8.08 15.9325423,7.865 L15.9882682,7.825 C16.3935475,7.595 16.7329689,7.77 17.0825223,8.275 L18.0805226,9.745 C18.1666444,9.87 18.3338222,9.9 18.4604719,9.82 C18.5871217,9.74 18.6175177,9.57 18.5364618,9.445 L17.5384615,7.975 C17.0419944,7.265 16.4340755,6.95 15.6995067,7.37 L15.6235169,7.42 C15.0358619,7.815 14.964938,8.665 15.4462072,9.38 L16.6417811,11.14 C17.0267964,11.695 17.7866951,11.84 18.3490201,11.465 L18.409812,11.425 C18.6479136,11.265 18.8201573,11.025 18.9012132,10.75 C18.9417411,10.605 18.8556193,10.46 18.7087055,10.42 C18.5668578,10.38 18.419944,10.465 18.3794161,10.61" id="Shape" fill="#FFFFFF"></path>
                                        <path d="M20.1879749,11.5 C19.6205839,11.815 19.2659645,12.4 19.2254366,13.295 C19.2153046,13.445 19.3318224,13.57 19.4838022,13.58 C19.6357819,13.585 19.7624317,13.475 19.7725637,13.325 C19.8130916,12.515 20.132249,12.08 20.6439141,11.89 C20.9174777,11.79 21.2163712,11.77 21.4798027,11.795 L21.5456606,11.805 C21.895214,11.87 22.0066658,11.355 21.6571124,11.275 L19.554726,10.81 C18.5719237,10.545 18.419944,10.185 18.6023197,9.585 C18.6833755,9.325 18.8404213,9.19 19.0886548,9.135 C19.2507666,9.1 19.4280763,9.105 19.60032,9.135 C19.6509799,9.145 19.6864418,9.15 19.7016398,9.155 L22.8932142,9.89 L22.9540061,9.91 C23.004666,9.93 23.0603919,9.97 23.1161179,10.025 C23.3288895,10.25 23.4504733,10.675 23.3896814,11.375 C23.1819757,13.825 22.0269297,15.345 19.2811625,15.32 C19.1291828,15.32 19.007599,15.44 19.007599,15.585 C19.007599,15.735 19.1291828,15.855 19.2760965,15.855 C22.3562192,15.88 23.7037728,14.115 23.9317424,11.415 C24.0026663,10.575 23.8456206,10 23.5163312,9.655 C23.3339555,9.465 23.1414478,9.375 22.9945341,9.355 L19.8384215,8.63 C19.8181576,8.625 19.7674977,8.61 19.6965738,8.6 C19.4584722,8.56 19.2102386,8.555 18.9670711,8.605 C18.5415278,8.7 18.2173044,8.965 18.0805226,9.425 C17.8170911,10.29 18.0957206,10.97 19.4230103,11.325 L20.1879749,11.5 Z" id="Path" fill="#FFFFFF"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>

                </div>
                <div class="border-[#EDEDED] border-[1px] rounded-[4px] h-[23px] w-[36.64px] overflow-hidden flex justify-center items-center bg-[#fff]">
                   <svg id="ideal-logo" xmlns="http://www.w3.org/2000/svg" width="16.905" height="14.733" viewBox="0 0 16.905 14.733">
                        <g id="Group_72" data-name="Group 72">
                            <path id="Path_58" data-name="Path 58" d="M0,1.092V13.64a1.1,1.1,0,0,0,1.1,1.092H8.687c5.733,0,8.218-3.173,8.218-7.383C16.905,3.162,14.42,0,8.687,0H1.1A1.1,1.1,0,0,0,0,1.092Z" fill="#fff"></path>
                            <path id="Path_59" data-name="Path 59" d="M91.9,44.3v9.272h4.081c3.706,0,5.313-2.07,5.313-5,0-2.8-1.607-4.975-5.313-4.975H92.607A.7.7,0,0,0,91.9,44.3Z" transform="translate(-86.825 -41.219)" fill="#c06"></path>
                            <g id="Group_71" data-name="Group 71" transform="translate(1.033 1.005)">
                            <g id="Group_70" data-name="Group 70">
                                <path id="Path_60" data-name="Path 60" d="M26.355,31.129H19.76A1.055,1.055,0,0,1,18.7,30.08V19.448A1.055,1.055,0,0,1,19.76,18.4h6.594c6.257,0,7.191,3.981,7.191,6.351C33.545,28.862,30.988,31.129,26.355,31.129ZM19.76,18.749a.7.7,0,0,0-.707.7V30.08a.7.7,0,0,0,.707.7h6.594c4.407,0,6.837-2.141,6.837-6.028,0-5.22-4.286-6-6.837-6Z" transform="translate(-18.7 -18.4)"></path>
                            </g>
                            </g>
                        </g>
                        <g id="Group_73" data-name="Group 73" transform="translate(5.556 6.099)">
                            <path id="Path_61" data-name="Path 61" d="M101.555,111.705a1.223,1.223,0,0,1,.4.066.908.908,0,0,1,.326.2,1.115,1.115,0,0,1,.215.339,1.393,1.393,0,0,1,.077.481,1.627,1.627,0,0,1-.061.448,1.041,1.041,0,0,1-.188.355.911.911,0,0,1-.315.235,1.124,1.124,0,0,1-.447.087H100.6V111.7h.955Zm-.033,1.807a.7.7,0,0,0,.21-.033.412.412,0,0,0,.177-.115.635.635,0,0,0,.127-.208.857.857,0,0,0,.05-.311,1.252,1.252,0,0,0-.033-.3.594.594,0,0,0-.11-.229.5.5,0,0,0-.2-.147.821.821,0,0,0-.3-.049h-.353v1.4h.436Z" transform="translate(-100.6 -111.7)" fill="#fff"></path>
                            <path id="Path_62" data-name="Path 62" d="M143.873,111.705v.41h-1.182v.475h1.088v.377h-1.088v.541h1.21v.41h-1.7V111.7h1.673Z" transform="translate(-139.903 -111.7)" fill="#fff"></path>
                            <path id="Path_63" data-name="Path 63" d="M179.859,111.8l.839,2.217h-.514l-.171-.491h-.839l-.177.491h-.5l.845-2.217Zm.028,1.36-.282-.814H179.6l-.293.814Z" transform="translate(-174.198 -111.795)" fill="#fff"></path>
                            <path id="Path_64" data-name="Path 64" d="M224.392,111.8v1.807h1.093v.41H223.9V111.8Z" transform="translate(-217.09 -111.795)" fill="#fff"></path>
                        </g>
                        <g id="Group_74" data-name="Group 74" transform="translate(2.198 6.192)">
                            <ellipse id="Ellipse_22" data-name="Ellipse 22" cx="1.033" cy="1.021" rx="1.033" ry="1.021"></ellipse>
                        </g>
                        <path id="Path_65" data-name="Path 65" d="M45.863,165.128h0a1.553,1.553,0,0,1-1.563-1.545v-1.207a.779.779,0,0,1,.784-.775h0a.779.779,0,0,1,.784.775v2.752Z" transform="translate(-41.853 -152.776)"></path>
                    </svg>

                </div>
                <!-- <div class="border-[#EDEDED] border-[1px] rounded-[4px] h-[23px] w-[36.64px] overflow-hidden flex justify-center items-center bg-[#fff]">
                    <svg id="apple-pay-logo-svgrepo-com" xmlns="http://www.w3.org/2000/svg" width="21.784" height="9.217" viewBox="0 0 21.784 9.217">
                        <path id="Path_2" data-name="Path 2" d="M4.106,1.188A1.652,1.652,0,0,0,4.486,0a1.724,1.724,0,0,0-1.1.558,1.56,1.56,0,0,0-.4,1.134,1.3,1.3,0,0,0,1.122-.5m.38.612c-.616-.036-1.141.342-1.43.342s-.742-.324-1.231-.324a1.818,1.818,0,0,0-1.539.936A3.809,3.809,0,0,0,.757,6.481c.308.45.688.954,1.177.936.471-.018.652-.306,1.213-.306s.724.306,1.231.288.833-.45,1.141-.918a3.616,3.616,0,0,0,.507-1.044,1.627,1.627,0,0,1-.2-2.9A1.689,1.689,0,0,0,4.486,1.8" transform="translate(0.026)"></path>
                        <g id="Group_5" data-name="Group 5" transform="translate(7.265 0.522)">
                            <path id="Path_3" data-name="Path 3" d="M42.671,2.9a2.147,2.147,0,0,1,2.263,2.232,2.171,2.171,0,0,1-2.3,2.25H41.168V9.7H40.1V2.9Zm-1.5,3.6h1.213A1.28,1.28,0,0,0,43.83,5.15,1.272,1.272,0,0,0,42.381,3.8H41.15V6.5Zm4.037,1.818c0-.864.67-1.4,1.865-1.476l1.376-.072V6.392c0-.558-.38-.882-1-.882a.954.954,0,0,0-1.05.72h-.978c.054-.9.833-1.566,2.064-1.566,1.213,0,1.991.63,1.991,1.638v3.42H48.5v-.81h-.018a1.776,1.776,0,0,1-1.575.9A1.53,1.53,0,0,1,45.205,8.319Zm3.241-.45v-.4l-1.231.072c-.616.036-.96.306-.96.738s.362.72.905.72A1.194,1.194,0,0,0,48.446,7.869Zm1.937,3.69v-.828a1.979,1.979,0,0,0,.326.018.836.836,0,0,0,.887-.7c0-.018.091-.306.091-.306l-1.81-4.969h1.1l1.267,4.05h.018l1.267-4.05H54.62l-1.865,5.239c-.434,1.206-.923,1.584-1.955,1.584C50.727,11.577,50.474,11.577,50.383,11.559Z" transform="translate(-40.1 -2.9)"></path>
                        </g>
                    </svg>
                </div> -->
                <div class="border-[#EDEDED] border-[1px] rounded-[4px] h-[23px] w-[36.64px] overflow-hidden flex justify-center items-center bg-[#fff]">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21.706" height="8.624" viewBox="0 0 21.706 8.624">
                        <defs>
                            <linearGradient id="linear-gradient" x1="0.202" y1="0.546" x2="0.934" y2="-0.13" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#005ab9"></stop>
                            <stop offset="1" stop-color="#1e3764"></stop>
                            </linearGradient>
                            <linearGradient id="linear-gradient-2" x1="0.061" y1="1.087" x2="0.837" y2="0.427" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#fba900"></stop>
                            <stop offset="1" stop-color="#ffd800"></stop>
                            </linearGradient>
                        </defs>
                        <g id="Group_82" data-name="Group 82" transform="translate(0 0)">
                            <path id="blue-symbol" d="M113.449,149.829c3.271,0,4.906-2.156,6.541-4.312H109.138v4.312Z" transform="translate(-109.138 -141.205)" fill="url(#linear-gradient)"></path>
                            <path id="yellow-symbol" d="M206.214,109.138c-3.271,0-4.906,2.156-6.541,4.312h10.853v-4.312Z" transform="translate(-188.819 -109.138)" fill="url(#linear-gradient-2)"></path>
                        </g>
                    </svg>

                </div>
                <div class="border-[#EDEDED] border-[1px] rounded-[4px] h-[23px] w-[36.64px] overflow-hidden flex justify-center items-center bg-[#fff]">
                    
                    <svg width="279px" height="181px" viewBox="0 0 279 181" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="h-full w-auto">
                        <g id="Meandco" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <image id="url" x="0" y="0" width="279" height="181" xlink:href="data:image/png;base64,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"></image>
                        </g>
                    </svg>
                </div>
            </div>
            <p class="text-[#000000] footer-p-small text-center font-normal font-poppins "><?php echo date("Y"); ?> © Meandco B.V. <span class="mx-1">|</span> All rights reserved <span class="mx-1">|</span> KvK NL 625 344 16 <span class="mx-1">|</span> <a class="text-[#000000] text-center font-normal font-poppins footer-p-small" href="mailto:info@meandco.nl">info@meandco.nl</a> <span class="mx-1">|</span> <a class="text-[#000000] text-center font-normal font-poppins footer-p-small" href="tel:+31203670070">+31(0)20 3670070</a></p>
        </section>
   </div>
</footer>


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript">
$('.slider-for').slick({
    arrows: true,
    asNavFor: '.slider-nav',
    swipe: true,
    prevArrow: '.arrow_prev',
    nextArrow: '.next_arrow',
    slidesToShow: 1,
    slidesToScroll: 1,
    draggable: true,
    fade: true,
    infinite: true,
    slickGoTo: 0,
    centerMode: true,
    adaptiveHeight: true,
});
$('.slider-nav').slick({
    slidesToShow: 100,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    swipe: false,
    arrows: false,
});
</script>
<script>
$('.quantity').on('click', '.plus', function(e) {
    $input = $(this).prev('input.qty');
    var val = parseInt($input.val());
    $input.val(val + 1).change();
});
$('.quantity').on('click', '.minus',
    function(e) {
        $input = $(this).next('input.qty');
        var val = parseInt($input.val());
        if (val > 0) {
            $input.val(val - 1).change();
        }
    });
</script>
<script>
$('.menu-link').click(function(e) {
    e.preventDefault();
    jQuery.ajax({
        url: woocommerce_params.ajax_url,
        type: 'post',
        data: {
            'action': 'ajax_update_mini_cart'
        },
        success: function(response) {
            $('#mini-cart-container').html(response);
        }
    });
});
</script>
<script>
setTimeout(function() {
    jQuery('.message-good .woocommerce-message').slideUp()
}, 2000);
</script>
<script>
document.querySelectorAll('#order_comments').forEach((textarea) => {
    textarea.addEventListener('blur', function() {
        this.classList.toggle('border-text-focus', this.value.length > 0);
    });
});
</script>
<script>
window.onscroll = function() {
    scrollFunction()
};
function scrollFunction() {
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
        document.getElementById("navbar-id").style.width = "70px";
    } else {
        document.getElementById("navbar-id").style.width = "100px";
    }
}
</script>
<script>
function openNav1() {
    var element = document.getElementById("mySidebar-r");
    element.classList.add("mystyle-r");
    document.getElementById("overlay-r").style.display = "block";
    var elementCart = document.getElementById("move-mini-cart");
    elementCart.classList.add("transition-1");
}
function closeNav1() {
    var element = document.getElementById("mySidebar-r");
    element.classList.remove("mystyle-r");
    document.getElementById("overlay-r").style.display = "none";
    var elementCart = document.getElementById("move-mini-cart");
    elementCart.classList.remove("transition-1");
}
</script>
<script>
window.onscroll = function() {
    myFunctionscrollnav()
};
var navbar = document.getElementById("navbarscrol");
var content = document.getElementById("content");
var sticky = navbar.offsetTop;
function myFunctionscrollnav() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
        content.classList.add("sticky-padding")
    } else {
        navbar.classList.remove("sticky");
        content.classList.remove("sticky-padding");
    }
}
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
    var elementl = document.getElementById("move-2");
    elementl.classList.add("transition-1");
    var elementla = document.getElementById("move-3");
    elementla.classList.add("transition-1");
    var elementlb = document.getElementById("move-4");
    elementlb.classList.add("transition-1");
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    var elementl = document.getElementById("move-2");
    elementl.classList.remove("transition-1");
    var elementla = document.getElementById("move-3");
    elementla.classList.remove("transition-1");
    var elementlb = document.getElementById("move-4");
    elementlb.classList.remove("transition-1");
}
</script>
<script>
function openFilter() {
    var elementFilter = document.getElementById("mySidebarfilter");
    elementFilter.classList.add("mystyle-r");
    document.getElementById("overlayfilter").style.display = "block";
    var elementFilterT = document.getElementById("move-headerfilter");
    elementFilterT.classList.add("transition-1");
    var elementFilterTa = document.getElementById("move-headerfilter-1");
    elementFilterTa.classList.add("transition-1");
}
function closeFilter() {
    var elementFilter = document.getElementById("mySidebarfilter");
    elementFilter.classList.remove("mystyle-r");
    document.getElementById("overlayfilter").style.display = "none";
    var elementFilterT = document.getElementById("move-headerfilter");
    elementFilterT.classList.remove("transition-1");
    var elementFilterTa = document.getElementById("move-headerfilter-1");
    elementFilterTa.classList.remove("transition-1");
}
</script>
<!-- <script>
  var x, i, j, l, ll, selElmnt, a, b, c;
/* Look for any elements with the class "value": */
x = document.getElementsByClassName("value");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /* When an item is clicked, update the original select box,
        and the selected item: */
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}
function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener("click", closeAllSelect);
</script> -->
<script>
var button = document.querySelector(".balk-icon");
var elementBalk = document.querySelector(".balk");
var elementNone = document.querySelector(".header-add");
var elementTop = document.querySelector(".header-top");
var elementCart = document.querySelector(".cart-add");
var elementNavi = document.querySelector(".navi");
var elementMain = document.querySelector(".overlay-header");
var elementSearch = document.querySelector(".button-search-add");
var elementSearchOne = document.querySelector(".button-one-search");
var elementSearchNoneimg = document.querySelector(".img-close");
button.addEventListener("click", function() {
    elementBalk.classList.add("balk-big");
    elementNone.classList.add("none-op");
    elementTop.classList.add("none-fixed");
    elementNavi.classList.add("fixed-navi");
    elementCart.classList.add("none");
    elementSearchOne.classList.add("none");
    elementMain.classList.add("overlay-grey");
    elementSearch.classList.add("add");
    elementSearchNoneimg.classList.add("addop");
});
elementMain.addEventListener("click", function() {
    elementBalk.classList.remove("balk-big");
    elementNone.classList.remove("none-op");
    elementTop.classList.remove("none-fixed");
    elementNavi.classList.remove("fixed-navi");
    elementCart.classList.remove("none");
    elementSearchOne.classList.remove("none");
    elementMain.classList.remove("overlay-grey");
    elementSearch.classList.remove("add");
    elementSearchNoneimg.classList.remove("addop");
});
elementSearchNoneimg.addEventListener("click", function() {
    elementBalk.classList.remove("balk-big");
    elementNone.classList.remove("none-op");
    elementTop.classList.remove("none-fixed");
    elementNavi.classList.remove("fixed-navi");
    elementCart.classList.remove("none");
    elementSearchOne.classList.remove("none");
    elementMain.classList.remove("overlay-grey");
    elementSearch.classList.remove("add");
    elementSearchNoneimg.classList.remove("addop");
});
</script>
<script>
const currentLocation = location.href;
const menuItem = document.querySelectorAll('li.cat-item a')
const menuLength = menuItem.length
for (let i = 0; i < menuLength; i++) {
    if (menuItem[i].href === currentLocation) {
        menuItem[i].className = "active-marker"
    }
}
</script>
<script>
$('.widget-container.woocommerce.widget_product_categories .buttonwidget button').click(function() {
    $('.product-categories li.cat-item').toggleClass('blockwidget')
    $('.buttonwidget').toggleClass('widgetbuttonstyle')
});
</script>
<script>
const currentLocationA = location.href;
const menuItemA = document.querySelectorAll('li.woocommerce-widget-layered-nav-list__item.wc-layered-nav-term  a')
const menuLengthA = menuItemA.length
for (let i = 0; i < menuLengthA; i++) {
    if (menuItemA[i].href === currentLocatioA) {
        menuItemA[i].className = "active-marker"
    }
}
</script>
<?php wp_footer(); ?>
</body>
</html>