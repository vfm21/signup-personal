<x-page>
    <x-valid class="hidden"></x-valid>
    <!--form ng personal here-->

    <!-- Sign Up - Personal Page -->
    <section class="p-14 lg:px-[250px]">
        <div class="container mx-auto md:container md:mx-auto w-full">
            <!--form-->
            <form class="">

                  <!--Full Name-->                 
                  <div class="flex flex-col md:flex-row gap-8 md:gap-5 pt-8 justify-between items-center w-full">
                    <!--First Name-->
                    <div class="flex w-full md:w-1/3 drop-shadow-md">
                      <span class="inline-flex items-center px-3 bg-white shrink rounded-l-md"> 
                          <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                             <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                          </svg>                                                            
                      </span>
                      <input type="text" class="font-montserrat text-sm bg-white border-0 pl-0 py-3  rounded-r-md text-black flex-1 w-full min-w-0"
                      placeholder="First name ">
                    </div>

                      <!--M.I-->
                    <div class="flex w-full md:w-1/3 drop-shadow-md">
                        <span class="inline-flex items-center px-3 bg-white shrink rounded-l-md">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                              <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                            </svg>                                                            
                        </span>
                        <input type="text" class="font-montserrat text-sm bg-white border-0 pl-0 py-3  rounded-r-md text-black flex-1 w-full min-w-0"
                        placeholder="M.I ">
                    </div>

                    <!--Last Name-->
                    <div class="flex w-full md:w-1/3 drop-shadow-md">
                        <span class="inline-flex items-center px-3 bg-white shrink rounded-l-md">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                              <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                            </svg>                                                            
                        </span>
                        <input type="text" class="font-montserrat text-sm bg-white border-0 pl-0 py-3  rounded-r-md text-black flex-1 w-full min-w-0"
                        placeholder="Last Name ">
                    </div>
                  </div>

                    <!--ID and Email-->                 
                    <div class="flex flex-col md:flex-row gap-8 md:gap-5 pt-8 justify-between items-center w-full">
                      <!--Application ID-->
                      <div class="flex w-full md:w-1/2 drop-shadow-md">
                        <span class="inline-flex items-center px-3 bg-white shrink rounded-l-md"> 
                              <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 9h3m-3 3h3m-3 3h3m-6 1c-.306-.613-.933-1-1.618-1H7.618c-.685 0-1.312.387-1.618 1M4 5h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Zm7 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"/>
                              </svg>                                                            
                        </span>
                        <input type="text" class="font-montserrat text-sm bg-white border-0 pl-0 py-3  rounded-r-md text-black flex-1 w-full min-w-0"
                        placeholder="Application ID ">
                      </div>

                      <!--Email-->
                      <div class="flex w-full md:w-full drop-shadow-md">
                         <span class="inline-flex items-center px-3 bg-white shrink rounded-l-md">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z"/>
                                </svg>                                                            
                          </span>
                          <input type="text" class="font-montserrat text-sm bg-white border-0 pl-0 py-3  rounded-r-md text-black flex-1 w-full min-w-0"
                          placeholder="Email ">
                      </div>
                    </div>

                    <!--No. and Bday-->                 
                    <div class="flex flex-col md:flex-row gap-8 md:gap-5 pt-8 justify-between items-center w-full">
                      <!--Mobile No.-->
                      <div class="flex w-full md:w-1/3 drop-shadow-md">
                        <span class="inline-flex items-center px-3 bg-white shrink rounded-l-md"> 
                              <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z"/>
                              </svg>                                                           
                        </span>
                        <input type="text" class="font-montserrat text-sm bg-white border-0 pl-0 py-3  rounded-r-md text-black flex-1 w-full min-w-0"
                        placeholder="Mobile No. ">
                      </div>

                      <!--Birthday-->
                      <div class="flex w-full md:w-1/3 relative drop-shadow-md">
                        <span class="inline-flex items-center px-3 bg-white shrink md:shrink rounded-l-md">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16M8 14h8m-4-7V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z"/>
                            </svg>                             
                        </span>
                        <input id="start-datepicker-autohide" datepicker datepicker-autohide type="text" class="font-montserrat text-sm md:text-md rounded-r-md pl-0 py-3  bg-white border-0 text-black focus:ring-blue-500 focus:border-blue-500 flex-1 w-full min-w-0" 
                        placeholder="mm/dd/yyyy">
                      </div>

                      <!--Gender-->
                      <div class="flex w-full md:w-1/3 drop-shadow-md">
                        <span class="inline-flex items-center px-3 bg-white shrink  md:shrink rounded-l-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48">
                              <path d="M44.5 15.67v6.72a.5.5 0 0 1-.5.5h-2.05a.5.5 0 0 1-.5-.5v-2.01l-2.03 2.03a11.081 11.081 0 0 1 2.23 6.67c0 .34-.02.68-.04 1.01a.584.584 0 0 1 .02.19 11.062 11.062 0 0 1-18.83 6.73 11.137 11.137 0 0 1-3.2-6.92c-.01-.11-.02-.22-.02-.33a12.2 12.2 0 0 0 3.14-2.1 7.428 7.428 0 0 0-.13 1.42 8.01 8.01 0 1 0 13.67-5.66 8.62 8.62 0 0 0-1.89-1.41h-.01a8.083 8.083 0 0 0-2.19-.79 8.192 8.192 0 0 0-1.57-.15 8.045 8.045 0 0 0-4.45 1.36 7.588 7.588 0 0 0-1.21.99 7.028 7.028 0 0 0-.52.57 7.632 7.632 0 0 0-.73 1.07c-.02.01-.03.02-.02.03a10.771 10.771 0 0 1-2.28 2.39 12.913 12.913 0 0 1-1.78 1.15c-.01.01-.02.01-.03.02a.612.612 0 0 1-.12.05 10.77 10.77 0 0 1-3.34 1.04.06.06 0 0 1-.04.01v2.29h2.22a.5.5 0 0 1 .5.5v2.05a.5.5 0 0 1-.5.5h-2.22v2.25a.508.508 0 0 1-.5.5h-2.05a.5.5 0 0 1-.5-.5v-2.25h-2.21a.5.5 0 0 1-.5-.5v-2.05a.5.5 0 0 1 .5-.5h2.21v-2.29A11 11 0 0 1 3.5 18.8a11.133 11.133 0 0 1 2.04-6.4 11 11 0 0 1 9.02-4.65 11.325 11.325 0 0 1 1.68.13 10.947 10.947 0 0 1 7.99 5.56v.01a10.937 10.937 0 0 1 1.32 4.26v.05c.01.12.03.24.03.36a9.971 9.971 0 0 0-1.33.72 11.331 11.331 0 0 0-1.82 1.38 8 8 0 1 0-14.77 2.65 8.113 8.113 0 0 0 4.65 3.62 8.632 8.632 0 0 0 .88.2 7.971 7.971 0 0 0 7.58-2.85c.01-.01.01-.01.01-.02.1-.12.2-.25.29-.38.01-.01.01-.02.03-.03.021-.043.308-.453.33-.52l.01-.01a11 11 0 0 1 2.81-2.85 8.913 8.913 0 0 1 .82-.52 9.739 9.739 0 0 1 1.92-.88 11.093 11.093 0 0 1 10.27 1.63l2.03-2.04h-2.01a.5.5 0 0 1-.5-.5v-2.05a.5.5 0 0 1 .5-.5H44a.5.5 0 0 1 .5.5Z"/>
                            </svg>                              
                        </span>
                        <select class="font-montserrat text-sm md:text-md bg-white border-0 rounded-r-md pl-0 py-3  text-gray-900 focus:ring-blue-500 focus:border-blue-500 flex-1 w-full min-w-0">
                            <option value="" disabled selected>Select Gender</option>
                            <option>Female</option>
                            <option>Male</option>
                            <option>Non-binary</option>
                            <option>I prefer not to say</option>
                        </select>
                      </div>
                    </div>

                    <!--Address-->                 
                  <div class="flex flex-col md:flex-row gap-8 md:gap-5 pt-8 justify-between items-center w-full">
                    <!--Street-->
                    <div class="flex w-full md:w-1/4 drop-shadow-md">
                      <span class="inline-flex items-center px-3 bg-white shrink rounded-l-md"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48">
                          <path fill="#4d4d4d" d="M39.3662 42.5h-8.9701a2.0651 2.0651 0 0 0 .2103-1.9473 2.238 2.238 0 0 0-1.9013-1.0498 1.857 1.857 0 0 1-1.3223-.5449c-.8252-1.207-3.3945-1.8584-5.3926-1.8584a9.9976 9.9976 0 0 0-5.8 1.79H15.79v-6.666h2.7959a.4997.4997 0 0 0 .5-.5v-4.7314a.4997.4997 0 0 0-.5-.5H15.79v-7.332h14.67a.505.505 0 0 0 .3164-.1123l4.7998-3.92a.5003.5003 0 0 0-.001-.7753l-4.7998-3.9102a.5002.5002 0 0 0-.3154-.1123h-.1682a1.0353 1.0353 0 0 0 .2004-.7422 1.442 1.442 0 0 0-.7754-.96 7.5048 7.5048 0 0 0-5.665-.459 12.7005 12.7005 0 0 0-.4375.1611 5.19 5.19 0 0 1-2.2236.456 4.9917 4.9917 0 0 1-1.5088-.293.6377.6377 0 0 0-.2041-.0292 2.1554 2.1554 0 0 0-1.962 1.0722 1.9445 1.9445 0 0 0-.1998.794H15.79V8.54a.4997.4997 0 0 0-.5-.5h-2.8095a.4997.4997 0 0 0-.5.5v1.79h-1.9502a.4997.4997 0 0 0-.5.5v7.83a.4997.4997 0 0 0 .5.5h1.9502v7.332H7.583a.5033.5033 0 0 0-.3379.131l-2.583 2.3661a.5013.5013 0 0 0 0 .7383l2.583 2.3653a.5033.5033 0 0 0 .3379.1308h4.3975v6.666H9.75a.4997.4997 0 0 0-.5.5v.1003a7.0012 7.0012 0 0 0-1.3916-.15 3.7578 3.7578 0 0 0-2.9893 1.0995 2.0793 2.0793 0 0 0-2.0713.7707 1.753 1.753 0 0 0-.279 1.29H2a.5.5 0 0 0 0 1h37.3662a.5.5 0 0 0 0-1zM18.6025 9.999a1.1705 1.1705 0 0 1 1.0264-.5351 5.9838 5.9838 0 0 0 1.7275.3222 6.3332 6.3332 0 0 0 2.6153-.5215c.1396-.0537.2734-.1045.4023-.1484 2.2637-.7715 4.9405.1504 5.129.5908-.0306.136-.3375.3999-.794.6616-.0076.0032-.0132.0089-.0206.0124a6.0018 6.0018 0 0 1-1.0448.4657 4.0205 4.0205 0 0 1-2.2823.0566 13.5045 13.5045 0 0 0-2.5107-.2422h-.0879a17.9296 17.9296 0 0 0-2.5986.2295c-.9092.1309-1.3877.1895-1.5518-.0303a.8912.8912 0 0 1-.0098-.8613zm1.3645 1.9287c.1114-.0151.224-.031.3406-.0478a17.0456 17.0456 0 0 1 2.461-.2188 13.5642 13.5642 0 0 1 2.4228.2276c.0842.0145.1644.0252.2468.039zm9.7459 1 2.2246 1.8154-2.2256 1.8184H12.126v-3.6338zM12.9805 9.04H14.79v1.29h-1.8095zm-2.4502 2.29h7.2147a1.4525 1.4525 0 0 0 .0685.1318 1.2537 1.2537 0 0 0 .683.4658H11.626a.4997.4997 0 0 0-.5.5v4.6338a.4997.4997 0 0 0 .5.5h18.2646a.505.505 0 0 0 .3164-.1123l2.838-2.3183a.5011.5011 0 0 0 0-.7754L30.207 12.04a.5049.5049 0 0 0-.3164-.1123h-2.4544a4.6702 4.6702 0 0 0 .5238-.1318 8.1122 8.1122 0 0 0 1.072-.4659h1.2503l4.1865 3.4102-4.1875 3.42h-19.751zm2.4502 7.83H14.79v7.332h-1.8095zM5.7402 29.3585l2.0371-1.8662H18.086v3.7314h-2.7764c-.0069-.0003-.0126-.0039-.0195-.0039s-.0125.0036-.0194.004H12.5c-.0069-.0004-.0125-.004-.0194-.004s-.0126.0036-.0194.004H7.7773zm7.2403 2.8652H14.79v6.666h-1.8095zM9.75 42.5H3.539a.8468.8468 0 0 1 .0792-.7188 1.0588 1.0588 0 0 1 .8945-.3671 2.0835 2.0835 0 0 1 .4775.0654.5047.5047 0 0 0 .5645-.2647c.2148-.4355 1.0107-.875 2.3037-.875 1.9375 0 3.583.9297 3.9043 1.7989a.7726.7726 0 0 1 .0498.3613zm5.9102 0h-2.8504a1.7815 1.7815 0 0 0-.1096-.709 3.77 3.77 0 0 0-2.1573-1.9014h6.9766V42.5zm2.8593 0v-3.1103a.4926.4926 0 0 0-.3922-.4783 9.6604 9.6604 0 0 1 3.863-.8118c2.1503 0 4.0966.7354 4.5683 1.4248a2.731 2.731 0 0 0 2.0332.9727c.5947.0693.9922.248 1.1201.5029a1.2324 1.2324 0 0 1-.2138 1.0684l-.0958.1699c-.0546.0967-.1015.1826-.1552.2617zM46 42.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1z"/>
                        </svg>                                                        
                      </span>
                      <input type="text" class="font-montserrat text-sm bg-white border-0 pl-0 py-3  rounded-r-md text-black flex-1 w-full min-w-0"
                      placeholder="Street ">
                    </div>

                      <!--Barangay-->
                    <div class="flex w-full md:w-1/4 drop-shadow-md">
                        <span class="inline-flex items-center px-3 bg-white shrink rounded-l-md">
                            <svg xmlns="http://www.w3.org/2000/svg" weight="24" height="24" viewBox="0 0 68 68">
                              <path fill="#010101" d="M60.583 9.4126a2.0242 2.0242 0 0 0-1.766-1.0371H9.1832A2.025 2.025 0 0 0 7.4166 9.413L1.2599 20.4536c-.3536.6333-.3453 1.3843.022 2.0093.3666.6255 1.0185.9985 1.7436.9985h3.8027v29.0513H4.9244c-1.1147 0-2.022.9072-2.022 2.0225v3.0668c0 1.1153.9073 2.0225 2.022 2.0225h58.1514c1.1147 0 2.022-.9072 2.022-2.0224v-3.067c0-1.1152-.9073-2.0224-2.022-2.0224H61.172V23.4614h3.8022c.7246 0 1.3765-.373 1.7437-.998s.376-1.376.023-2.0098L60.583 9.4126zM40.3679 30.994h13.126v21.5186h-13.126c-.0006-3.2984-.0013-21.6549 0-21.5186zm22.73 23.541v3.067a.0223.0223 0 0 1-.022.0224l-58.1734-.0224.022-3.0894 58.1733.0224zm-3.9258-2.0224h-3.6783V29.994c0-.5522-.4477-1-1-1h-15.126c-.5522 0-1 .4478-1 1v22.5186H8.8283V23.4614H59.172v29.0513zm5.8022-31.0513-61.9678-.0337 6.1768-11.0522 49.6533.0112 6.1485 11.0737s-.003.001-.0108.001z"/><path fill="#010101" d="M13.5064 45.5298H32.045c.5523 0 1-.4478 1-1v-13.086c0-.5522-.4477-1-1-1H13.5064c-.5522 0-1 .4478-1 1v13.086c0 .5522.4478 1 1 1zm17.5386-2h-7.269v-11.086h7.269v11.086zm-16.5386-11.086h7.2696v11.086h-7.2696v-11.086zM42.435 40.753h2.044v2h-2.044zM23.047 12.7427h-3.7574c-.5522 0-1 .4477-1 1s.4478 1 1 1h3.7574c.5522 0 1-.4478 1-1s-.4478-1-1-1zm-7.8692 0H12.047c-.5523 0-1 .4477-1 1s.4477 1 1 1h3.1308c.5523 0 1-.4478 1-1s-.4477-1-1-1z"/>
                            </svg>                                                         
                        </span>
                        <input type="text" class="font-montserrat text-sm bg-white border-0 pl-0 py-3  rounded-r-md text-black flex-1 w-full min-w-0"
                        placeholder="Barangay ">
                    </div>

                    <!--City-->
                    <div class="flex w-full md:w-1/4 drop-shadow-md">
                        <span class="inline-flex items-center px-3 bg-white shrink rounded-l-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26">
                              <path fill-rule="evenodd" d="M19 4v8.955h-4v-4h-2v-1H9v1H7v3H4.1v-6H0v24h1v-9.5h.95v2H5V30h1V17.955h2.412v-2h2.275v2H13v-1h-1.313v-2H7.412v2H5v4.5H2.95v-2H1v-12.5h2.1v6H8v-3h2v-1h2v1h2v4h6V5h4v9.955h4v-7h3v11h-2.5v-2H24v1h3.5v2H31v10h1v-23h-5v7h-2V4h-6zm-1.977 10.953a.5.5 0 0 0-.05.002.5.5 0 0 0-.313.13l-6.498 6a.5.5 0 0 0 .338.87h.5v7.498a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5v-7.498h.5a.5.5 0 0 0 .34-.87l-.84-.774v-2.85a.5.5 0 0 0-.508-.506.5.5 0 0 0-.492.506v1.926l-4.66-4.301a.5.5 0 0 0-.317-.133zM17 16.137l5.22 4.818H11.78L17 16.137zm-5 6.033h10v6.783h-3v-3.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v3.5h-3V22.17zm4 3.783h2v3h-2v-3z" color="#000" font-family="sans-serif" font-weight="400" overflow="visible" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;white-space:normal;isolation:auto;mix-blend-mode:normal;solid-color:#000;solid-opacity:1"/>
                            </svg>                                                            
                        </span>
                        <input type="text" class="font-montserrat text-sm bg-white border-0 pl-0 py-3  rounded-r-md text-black flex-1 w-full min-w-0"
                        placeholder="City ">
                    </div>

                    <!--Province-->
                    <div class="flex w-full md:w-1/4 drop-shadow-md">
                        <span class="inline-flex items-center px-3 bg-white shrink rounded-l-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                              <path d="M7.994-.002c-2.48 0-4.5 2.02-4.5 4.5a.5.5 0 0 0 .024.158c.042 1.579.726 2.96 1.53 4.24.832 1.323 1.795 2.563 2.413 3.829a.5.5 0 0 0 .894.01c.65-1.265 1.662-2.507 2.536-3.829.873-1.322 1.619-2.75 1.619-4.4a.5.5 0 0 0-.033-.186C12.38 1.925 10.413-.002 7.994-.002zm0 1c1.94 0 3.5 1.561 3.5 3.5a.5.5 0 0 0 .01.107c-.03 1.308-.634 2.52-1.447 3.75-.688 1.041-1.466 2.116-2.137 3.233-.637-1.112-1.371-2.185-2.024-3.223C5.103 7.102 4.51 5.86 4.51 4.505a.5.5 0 0 0-.008-.087A3.488 3.488 0 0 1 7.994.998zm0 2.002c-.822 0-1.5.678-1.5 1.5S7.172 6 7.994 6c.823 0 1.5-.678 1.5-1.5S8.817 3 7.994 3zm0 1c.282 0 .5.218.5.5 0 .282-.218.5-.5.5a.493.493 0 0 1-.5-.5c0-.282.218-.5.5-.5zm4.09 5.227a.5.5 0 0 0-.18.966c.997.404 1.638.933 1.914 1.42.277.487.27.908-.091 1.426-.725 1.036-3.036 1.954-5.674 1.965-2.639.01-4.982-.883-5.748-1.922-.383-.52-.402-.943-.145-1.428.258-.484.875-1.018 1.856-1.43a.5.5 0 1 0-.387-.921c-1.12.47-1.937 1.102-2.352 1.883-.415.78-.343 1.722.223 2.49 1.132 1.534 3.711 2.34 6.559 2.328 2.847-.012 5.402-.837 6.488-2.39.543-.777.58-1.723.14-2.495-.438-.772-1.273-1.394-2.408-1.853a.5.5 0 0 0-.195-.04z" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;white-space:normal;isolation:auto;mix-blend-mode:normal;solid-color:#000;solid-opacity:1" color="#000" font-weight="400" font-family="sans-serif" overflow="visible"/>
                            </svg>                                                            
                        </span>
                        <input type="text" class="font-montserrat text-sm bg-white border-0 pl-0 py-3  rounded-r-md text-black flex-1 w-full min-w-0"
                        placeholder="Province ">
                    </div>
                  </div>

                  <!---->
                  <div class="flex flex-col md:flex-row gap-8 md:gap-5 pt-8 justify-center items-center w-full">
                    <!--Civil Status-->
                    <div class="flex w-full md:w-1/4 drop-shadow-md">
                        <span class="inline-flex items-center px-3 bg-white shrink rounded-l-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48">
                              <path d="M44.5 15.67v6.72a.5.5 0 0 1-.5.5h-2.05a.5.5 0 0 1-.5-.5v-2.01l-2.03 2.03a11.081 11.081 0 0 1 2.23 6.67c0 .34-.02.68-.04 1.01a.584.584 0 0 1 .02.19 11.062 11.062 0 0 1-18.83 6.73 11.137 11.137 0 0 1-3.2-6.92c-.01-.11-.02-.22-.02-.33a12.2 12.2 0 0 0 3.14-2.1 7.428 7.428 0 0 0-.13 1.42 8.01 8.01 0 1 0 13.67-5.66 8.62 8.62 0 0 0-1.89-1.41h-.01a8.083 8.083 0 0 0-2.19-.79 8.192 8.192 0 0 0-1.57-.15 8.045 8.045 0 0 0-4.45 1.36 7.588 7.588 0 0 0-1.21.99 7.028 7.028 0 0 0-.52.57 7.632 7.632 0 0 0-.73 1.07c-.02.01-.03.02-.02.03a10.771 10.771 0 0 1-2.28 2.39 12.913 12.913 0 0 1-1.78 1.15c-.01.01-.02.01-.03.02a.612.612 0 0 1-.12.05 10.77 10.77 0 0 1-3.34 1.04.06.06 0 0 1-.04.01v2.29h2.22a.5.5 0 0 1 .5.5v2.05a.5.5 0 0 1-.5.5h-2.22v2.25a.508.508 0 0 1-.5.5h-2.05a.5.5 0 0 1-.5-.5v-2.25h-2.21a.5.5 0 0 1-.5-.5v-2.05a.5.5 0 0 1 .5-.5h2.21v-2.29A11 11 0 0 1 3.5 18.8a11.133 11.133 0 0 1 2.04-6.4 11 11 0 0 1 9.02-4.65 11.325 11.325 0 0 1 1.68.13 10.947 10.947 0 0 1 7.99 5.56v.01a10.937 10.937 0 0 1 1.32 4.26v.05c.01.12.03.24.03.36a9.971 9.971 0 0 0-1.33.72 11.331 11.331 0 0 0-1.82 1.38 8 8 0 1 0-14.77 2.65 8.113 8.113 0 0 0 4.65 3.62 8.632 8.632 0 0 0 .88.2 7.971 7.971 0 0 0 7.58-2.85c.01-.01.01-.01.01-.02.1-.12.2-.25.29-.38.01-.01.01-.02.03-.03.021-.043.308-.453.33-.52l.01-.01a11 11 0 0 1 2.81-2.85 8.913 8.913 0 0 1 .82-.52 9.739 9.739 0 0 1 1.92-.88 11.093 11.093 0 0 1 10.27 1.63l2.03-2.04h-2.01a.5.5 0 0 1-.5-.5v-2.05a.5.5 0 0 1 .5-.5H44a.5.5 0 0 1 .5.5Z"/>
                            </svg>                                                             
                        </span>
                        <select class="font-montserrat text-sm bg-white border-0 rounded-r-md pl-0 py-3  text-gray-900 focus:ring-blue-500 focus:border-blue-500 flex-1 w-full min-w-0">
                            <option value="" disabled selected>Civil Status</option>
                            <option>Single</option>
                            <option>Married</option>
                            <option>Widowed</option>
                            <option>Separated</option>
                        </select>
                     </div>

                     <!--Religion-->
                    <div class="flex w-full md:w-1/4 drop-shadow-md">
                        <span class="inline-flex items-center px-3 bg-white shrink rounded-l-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 100 100">
                              <path d="M70.5 18.9c-2.4 0-4.4 2-4.4 4.4 0 .9.3 1.8.8 2.5l-1.4 1.1c-.5-.2-1.1-.4-1.8-.4-2.4 0-4.4 2-4.4 4.4 0 .8.2 1.6.6 2.2l-1.4 1.1c-.8-.6-1.7-1-2.8-1-2.4 0-4.4 2-4.4 4.4 0 .7.2 1.3.4 1.8l-1.7 1c-.8-.7-1.8-1.1-2.9-1.1-2.4 0-4.4 2-4.4 4.4 0 .6.1 1.1.3 1.6l-1.8 1.1c-.8-1-2-1.7-3.4-1.7-.8 0-1.5.2-2.1.6l-.8-.9c1-.8 1.7-2 1.7-3.4 0-2.4-2-4.4-4.4-4.4-.2 0-.4 0-.7.1l-.3-1.1c1.8-.5 3.1-2.2 3.1-4.2 0-1.8-1.1-3.4-2.7-4l.2-1.2c2.3-.1 4.1-2 4.1-4.3 0-1.5-.7-2.7-1.8-3.5l.6-1.1c.6.3 1.2.5 1.9.5 2.4 0 4.4-2 4.4-4.4C41 11 39 9 36.6 9c-2.4 0-4.4 2-4.4 4.4 0 1 .3 1.9.9 2.6l-.9 1.6c-.2 0-.4-.1-.7-.1-2.4 0-4.4 2-4.4 4.4 0 1.8 1.1 3.3 2.6 4l.3 1.2c-2.3.1-4.1 2-4.1 4.3 0 2.1 1.6 3.9 3.6 4.3l.5 1.7c-1.1.8-1.8 2.1-1.8 3.5 0 2.4 2 4.4 4.4 4.4.3 0 .5 0 .8-.1l1.2 1.3c-.5.7-.8 1.6-.8 2.5 0 1.1.4 2 1 2.8-.6.4-1 1.1-1 1.9v7h-6.6c-1.2 0-2.1.9-2.1 2.1v4.4c0 1.2.9 2.1 2.1 2.1h6.6v19.4c0 1.3 1 2.3 2.3 2.3h4c1.3 0 2.3-1 2.3-2.3V69.3H49c1.2 0 2.1-.9 2.1-2.1v-4.4c0-1.2-.9-2.1-2.1-2.1h-6.6v-7c0-.8-.4-1.5-1-1.9.6-.8 1-1.7 1-2.8 0-.3 0-.5-.1-.8l2.1-1.3c.8.7 1.8 1.1 2.9 1.1 2.4 0 4.4-2 4.4-4.4 0-.6-.1-1.1-.3-1.6l1.8-1c.7.6 1.7.9 2.7.9 2.4 0 4.4-2 4.4-4.4 0-.6-.1-1.2-.4-1.8l1.6-1.3c.7.4 1.5.7 2.3.7 2.4 0 4.4-2 4.4-4.4 0-1-.4-2-1-2.7l1.2-1c.6.3 1.3.6 2.1.6 2.4 0 4.4-2 4.4-4.4 0-2.3-2-4.3-4.4-4.3zM37 11c1.3 0 2.4 1.1 2.4 2.4s-1.1 2.4-2.4 2.4c-1.3 0-2.4-1.1-2.4-2.4S35.7 11 37 11zm-5.1 8.5c1.3 0 2.4 1.1 2.4 2.4s-1.1 2.4-2.4 2.4c-1.3 0-2.4-1.1-2.4-2.4s1.1-2.4 2.4-2.4zm-4 11.9c0-1.3 1.1-2.4 2.4-2.4 1.3 0 2.4 1.1 2.4 2.4 0 1.3-1.1 2.4-2.4 2.4-1.4 0-2.4-1.1-2.4-2.4zm2.2 9.5c0-1.3 1.1-2.4 2.4-2.4 1.3 0 2.4 1.1 2.4 2.4s-1.1 2.4-2.4 2.4c-1.3 0-2.4-1.1-2.4-2.4zM40.4 49c0 1.3-1.1 2.4-2.4 2.4s-2.4-1.1-2.4-2.4 1.1-2.4 2.4-2.4 2.4 1.1 2.4 2.4zm8.5 13.7c.1 0 .1 0 0 0l.1 4.5s0 .1-.1.1h-7.6c-.6 0-1 .4-1 1v20.4c0 .2-.1.3-.3.3h-4c-.2 0-.3-.1-.3-.3V68.3c0-.6-.4-1-1-1h-7.6s-.1 0-.1-.1v-4.4s0-.1.1-.1h7.6c.6 0 1-.4 1-1v-8c0-.2.1-.3.3-.3h4c.2 0 .3.1.3.3v8c0 .6.4 1 1 1h7.6zM47.3 46C46 46 45 44.9 45 43.6c0-1.3 1.1-2.4 2.4-2.4 1.3 0 2.4 1.1 2.4 2.4-.1 1.3-1.2 2.4-2.5 2.4zm8.6-6.1c-1.3 0-2.4-1.1-2.4-2.4 0-1.3 1.1-2.4 2.4-2.4 1.3 0 2.4 1.1 2.4 2.4-.1 1.4-1.1 2.4-2.4 2.4zm7.9-6.7c-1.3 0-2.4-1.1-2.4-2.4 0-1.3 1.1-2.4 2.4-2.4 1.3 0 2.4 1.1 2.4 2.4 0 1.3-1.1 2.4-2.4 2.4zm6.7-7.5c-1.3 0-2.4-1.1-2.4-2.4 0-1.3 1.1-2.4 2.4-2.4 1.3 0 2.4 1.1 2.4 2.4 0 1.3-1.1 2.4-2.4 2.4z"/>
                            </svg>                                                           
                        </span>
                        <input type="text" class="font-montserrat text-sm bg-white border-0 pl-0 py-3  rounded-r-md text-black flex-1 w-full min-w-0"
                        placeholder="Religion ">
                    </div>
                  </div>


                <!-- BUTTON -->
                <div class="flex flex-col md:flex-row gap-8 md:gap-5 pt-9 justify-center items-center w-full">
                    <!-- NEXT BUTTON-->
                    <div class="flex justify-center w-auto">
                        <button type="button" class="font-montserrat font-bold text-[16px] bg-yinmn-blue text-white drop-shadow-lg w-44 h-12 rounded-md">
                            NEXT
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-page>
