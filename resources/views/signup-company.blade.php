<x-page>
    <!-- SING UP - COMPANY PAGE -->
    <section class="p-14 lg:px-[250px]">
        <div class="container mx-auto md:container md:mx-auto w-full">
            <!--form-->
            <form class="">

                <!--ROW 1: SELECT COMPANY & ASSIGNED DEPARTMENT-->
                <div class="flex flex-col md:flex-row gap-8 md:gap-5 justify-center items-center w-full">
                    
                    <!--SELECT COMPANY-->
                    <div class="flex w-full md:w-full drop-shadow-md">
                        <span class="inline-flex items-center px-3 bg-white shrink rounded-l-md">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000">
                                <path d="M154-160.92v-508h144v-144h340v288h168v364H538v-144H422v144H154Zm52-52h92v-92h-92v92Zm0-156h92v-92h-92v92Zm0-156h92v-92h-92v92Zm144 156h92v-92h-92v92Zm0-156h92v-92h-92v92Zm0-144h92v-92h-92v92Zm144 300h92v-92h-92v92Zm0-156h92v-92h-92v92Zm0-144h92v-92h-92v92Zm168 456h92v-92h-92v92Zm0-156h92v-92h-92v92Z"/>
                            </svg>                              
                        </span>
                        <select class="font-montserrat text-sm md:text-md pl-0 bg-white border-0 rounded-r-md py-3 flex-1 w-full min-w-0">
                            <option value="" disabled selected>Select Company</option>
                            <option>Company A</option>
                            <option>Company B</option>
                            <option>Company C</option>
                        </select>
                    </div>

                    <!--ASSIGNED DEPARTMENT-->
                    <div class="flex w-full md:w-full drop-shadow-md">
                        <span class="inline-flex items-center px-3 bg-white shrink rounded-l-md">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000">
                                <path d="M20-248.46v-44.77q0-47.92 42.69-75.58 42.7-27.65 115.7-27.65 13.07 0 27.3 1.69t29.62 4.69q-14.69 17.7-22.85 39.81-8.15 22.12-8.15 43.83v57.98H20Zm240 0v-51q0-23.95 12.77-43.78 12.77-19.84 34.46-29.14 41.69-19.31 84.66-29.46Q434.85-412 479.38-412q45.39 0 88.35 10.16 42.96 10.15 84.65 29.46 21.7 9.3 34.66 29.14Q700-323.41 700-299.46v51H260Zm495.69 0v-58.8q0-23.52-8.34-44.32-8.35-20.8-23.04-38.5 17.77-3 31.5-4.69 13.73-1.69 26.19-1.69 73 0 115.5 27.85 42.5 27.84 42.5 75.38v44.77H755.69Zm-443.61-52h335.46v-4.23q-3.15-21.23-55.08-38.27Q540.54-360 480-360q-60.54 0-112.46 17.04-51.93 17.04-55.46 38.27v4.23ZM178.07-443.31q-25.07 0-42.61-17.63-17.54-17.64-17.54-42.41 0-25.03 17.64-42.76 17.64-17.73 42.4-17.73 25.04 0 42.96 17.49 17.93 17.49 17.93 42.91 0 24.67-17.48 42.4-17.47 17.73-43.3 17.73Zm603.72 0q-24.79 0-42.52-17.75-17.73-17.76-17.73-42.17 0-25.15 17.76-42.88 17.75-17.73 42.35-17.73 25.35 0 43.08 17.49 17.73 17.49 17.73 42.79 0 25.03-17.44 42.64-17.45 17.61-43.23 17.61ZM479.64-460q-42.72 0-73.1-30.29-30.38-30.28-30.38-73.55 0-43.14 30.28-73.49 30.29-30.36 73.56-30.36 43.13 0 73.49 30.32 30.35 30.31 30.35 73.89 0 42.71-30.31 73.1Q523.21-460 479.64-460Zm.55-52q21.75 0 36.7-15.14 14.96-15.15 14.96-36.9 0-21.74-14.91-36.7-14.91-14.95-36.94-14.95-21.55 0-36.7 14.91-15.15 14.9-15.15 36.94 0 21.55 15.15 36.7Q458.45-512 480.19-512Zm-.57 211.54Zm.38-263.38Z"/>
                            </svg>
                        </span>
                        <select class="font-montserrat text-sm md:text-md pl-0 py-3  bg-white border-0 rounded-r-md text-black focus:ring-blue-500 focus:border-blue-500 flex-1 w-full min-w-0">
                            <option value="" disabled selected>Assigned Department</option>
                            <option>Department A</option>
                            <option>Department B</option>
                            <option>Department C</option>
                        </select>
                    </div>
                </div>



                <!--ROW 2: SELECT COMPANY & ASSIGNED DEPARTMENT-->
                <div class="flex flex-col md:flex-row gap-8 md:gap-5 pt-8 justify-between items-center w-full">
                    
                    <!--START DATE-->
                    <div class="flex w-full md:w-1/4 relative drop-shadow-md">
                        <span class="inline-flex items-center px-3 bg-white shrink md:shrink rounded-l-md">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000">
                                <path d="M228.31-116q-27.01 0-45.66-19Q164-154 164-180.31v-503.38Q164-710 182.65-729q18.65-19 45.66-19h87.38v-100.61h53.54V-748h223.08v-100.61h52V-748h87.38q27.01 0 45.66 19Q796-710 796-683.69v503.38Q796-154 777.35-135q-18.65 19-45.66 19H228.31Zm0-52h503.38q4.62 0 8.46-3.85 3.85-3.84 3.85-8.46v-335.38H216v335.38q0 4.62 3.85 8.46 3.84 3.85 8.46 3.85ZM216-567.69h528v-116q0-4.62-3.85-8.46-3.84-3.85-8.46-3.85H228.31q-4.62 0-8.46 3.85-3.85 3.84-3.85 8.46v116Zm0 0V-696v128.31Zm264.21 186.77q-12.9 0-22.25-9.14-9.34-9.13-9.34-22.04 0-12.9 9.13-22.25 9.14-9.34 22.04-9.34 12.9 0 22.25 9.13 9.34 9.14 9.34 22.04 0 12.91-9.13 22.25-9.14 9.35-22.04 9.35Zm-156 0q-12.9 0-22.25-9.14-9.34-9.13-9.34-22.04 0-12.9 9.13-22.25 9.14-9.34 22.04-9.34 12.9 0 22.25 9.13 9.34 9.14 9.34 22.04 0 12.91-9.13 22.25-9.14 9.35-22.04 9.35Zm312 0q-12.9 0-22.25-9.14-9.34-9.13-9.34-22.04 0-12.9 9.13-22.25 9.14-9.34 22.04-9.34 12.9 0 22.25 9.13 9.34 9.14 9.34 22.04 0 12.91-9.13 22.25-9.14 9.35-22.04 9.35ZM480.21-240q-12.9 0-22.25-9.14-9.34-9.13-9.34-22.03 0-12.91 9.13-22.25 9.14-9.35 22.04-9.35 12.9 0 22.25 9.14 9.34 9.13 9.34 22.04 0 12.9-9.13 22.24-9.14 9.35-22.04 9.35Zm-156 0q-12.9 0-22.25-9.14-9.34-9.13-9.34-22.03 0-12.91 9.13-22.25 9.14-9.35 22.04-9.35 12.9 0 22.25 9.14 9.34 9.13 9.34 22.04 0 12.9-9.13 22.24-9.14 9.35-22.04 9.35Zm312 0q-12.9 0-22.25-9.14-9.34-9.13-9.34-22.03 0-12.91 9.13-22.25 9.14-9.35 22.04-9.35 12.9 0 22.25 9.14 9.34 9.13 9.34 22.04 0 12.9-9.13 22.24-9.14 9.35-22.04 9.35Z"/>
                            </svg>                              
                        </span>
                        <input id="start-datepicker-autohide" datepicker datepicker-autohide type="text" class="font-montserrat text-sm md:text-md rounded-r-md pl-0 py-3  bg-white border-0 text-black focus:ring-blue-500 focus:border-blue-500 flex-1 w-full min-w-0" 
                        placeholder="Start Date">
                    </div>

                    <!--END DATE-->
                    <div class="flex w-full md:w-1/4 relative drop-shadow-md">
                        <span class="inline-flex items-center px-3 bg-white shrink  md:shrink rounded-l-md">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000">
                                <path d="M228.31-116q-27.01 0-45.66-19Q164-154 164-180.31v-503.38Q164-710 182.65-729q18.65-19 45.66-19h87.38v-100.61h53.54V-748h223.08v-100.61h52V-748h87.38q27.01 0 45.66 19Q796-710 796-683.69v503.38Q796-154 777.35-135q-18.65 19-45.66 19H228.31Zm0-52h503.38q4.62 0 8.46-3.85 3.85-3.84 3.85-8.46v-335.38H216v335.38q0 4.62 3.85 8.46 3.84 3.85 8.46 3.85ZM216-567.69h528v-116q0-4.62-3.85-8.46-3.84-3.85-8.46-3.85H228.31q-4.62 0-8.46 3.85-3.85 3.84-3.85 8.46v116Zm0 0V-696v128.31Zm264.21 186.77q-12.9 0-22.25-9.14-9.34-9.13-9.34-22.04 0-12.9 9.13-22.25 9.14-9.34 22.04-9.34 12.9 0 22.25 9.13 9.34 9.14 9.34 22.04 0 12.91-9.13 22.25-9.14 9.35-22.04 9.35Zm-156 0q-12.9 0-22.25-9.14-9.34-9.13-9.34-22.04 0-12.9 9.13-22.25 9.14-9.34 22.04-9.34 12.9 0 22.25 9.13 9.34 9.14 9.34 22.04 0 12.91-9.13 22.25-9.14 9.35-22.04 9.35Zm312 0q-12.9 0-22.25-9.14-9.34-9.13-9.34-22.04 0-12.9 9.13-22.25 9.14-9.34 22.04-9.34 12.9 0 22.25 9.13 9.34 9.14 9.34 22.04 0 12.91-9.13 22.25-9.14 9.35-22.04 9.35ZM480.21-240q-12.9 0-22.25-9.14-9.34-9.13-9.34-22.03 0-12.91 9.13-22.25 9.14-9.35 22.04-9.35 12.9 0 22.25 9.14 9.34 9.13 9.34 22.04 0 12.9-9.13 22.24-9.14 9.35-22.04 9.35Zm-156 0q-12.9 0-22.25-9.14-9.34-9.13-9.34-22.03 0-12.91 9.13-22.25 9.14-9.35 22.04-9.35 12.9 0 22.25 9.14 9.34 9.13 9.34 22.04 0 12.9-9.13 22.24-9.14 9.35-22.04 9.35Zm312 0q-12.9 0-22.25-9.14-9.34-9.13-9.34-22.03 0-12.91 9.13-22.25 9.14-9.35 22.04-9.35 12.9 0 22.25 9.14 9.34 9.13 9.34 22.04 0 12.9-9.13 22.24-9.14 9.35-22.04 9.35Z"/>
                            </svg>                              
                        </span>
                        <input id="end-datepicker-autohide" datepicker datepicker-autohide type="text" class="font-montserrat text-sm md:text-md rounded-r-md pl-0 py-3  bg-white border-0 text-black focus:ring-blue-500 focus:border-blue-500 flex-1 w-full min-w-0" 
                        placeholder="End Date">
                    </div>

                    <!--START SHIFT-->
                    <div class="flex w-full md:w-1/4 drop-shadow-md">
                        <span class="inline-flex items-center px-3 bg-white shrink md:shrink rounded-l-md">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000">
                                <path d="m620.92-316.92 37.16-37.16L506-506.16V-720h-52v236.15l166.92 166.93ZM480.07-116q-75.21 0-141.4-28.42-66.18-28.42-115.99-78.21-49.81-49.79-78.25-116.09Q116-405.01 116-480.39q0-75.38 28.42-141.75t78.21-115.68q49.79-49.31 116.09-77.75Q405.01-844 480.39-844q75.38 0 141.75 28.66 66.38 28.66 115.48 77.79 49.1 49.13 77.74 115.55Q844-555.58 844-480.07q0 75.21-28.42 141.4-28.42 66.18-77.71 115.99-49.29 49.81-115.76 78.25Q555.64-116 480.07-116ZM480-480Zm.48 312q129.47 0 220.5-91.5Q792-351 792-480.48q0-129.47-91.02-220.5Q609.95-792 480.48-792 351-792 259.5-700.98 168-609.95 168-480.48 168-351 259.5-259.5T480.48-168Z"/>
                            </svg>                              
                        </span>
                        <select class="font-montserrat text-sm md:text-md bg-white border-0 rounded-r-md pl-0 py-3  text-gray-900 focus:ring-blue-500 focus:border-blue-500 flex-1 w-full min-w-0">
                            <option value="" disabled selected>Start Shift</option>
                            <option>Start Shift A</option>
                            <option>Start Shift B</option>
                            <option>Start Shift C</option>
                        </select>
                        <!--
                        <input type="text" class="bg-white border-0 rounded-r-md text-sm md:text-md pl-0 py-3  text-black flex-1 w-full min-w-0"
                        placeholder="No. of Required "> -->
                     </div>


                    <!--END SHIFT-->
                    <div class="flex w-full md:w-1/4 drop-shadow-md">
                        <span class="inline-flex items-center px-3 bg-white shrink  md:shrink rounded-l-md">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000">
                                <path d="m620.92-316.92 37.16-37.16L506-506.16V-720h-52v236.15l166.92 166.93ZM480.07-116q-75.21 0-141.4-28.42-66.18-28.42-115.99-78.21-49.81-49.79-78.25-116.09Q116-405.01 116-480.39q0-75.38 28.42-141.75t78.21-115.68q49.79-49.31 116.09-77.75Q405.01-844 480.39-844q75.38 0 141.75 28.66 66.38 28.66 115.48 77.79 49.1 49.13 77.74 115.55Q844-555.58 844-480.07q0 75.21-28.42 141.4-28.42 66.18-77.71 115.99-49.29 49.81-115.76 78.25Q555.64-116 480.07-116ZM480-480Zm.48 312q129.47 0 220.5-91.5Q792-351 792-480.48q0-129.47-91.02-220.5Q609.95-792 480.48-792 351-792 259.5-700.98 168-609.95 168-480.48 168-351 259.5-259.5T480.48-168Z"/>
                            </svg>                              
                        </span>
                        <select class="font-montserrat text-sm md:text-md bg-white border-0 rounded-r-md pl-0 py-3  text-gray-900 focus:ring-blue-500 focus:border-blue-500 flex-1 w-full min-w-0">
                            <option value="" disabled selected>End Shift</option>
                            <option>End Shift A</option>
                            <option>End Shift B</option>
                            <option>End Shift C</option>
                        </select>
                        <!--
                        <input type="text" class="bg-white border-0 rounded-r-md text-sm md:text-md pl-0 py-3  text-black flex-1 w-full min-w-0"
                        placeholder="No. of Required "> -->
                     </div>
                </div>



                <!--ROW 3: OJT SCHE, UNIV NAME, REQUIRED HRS-->
                <div class="flex flex-col md:flex-row gap-8 md:gap-5 pt-8 justify-center items-center w-full">
                    
                    <!--SELECT OJT SCHEDULE-->
                    <div class="flex w-full md:w-1/4 drop-shadow-md">
                        <span class="inline-flex items-center px-3 bg-white shrink rounded-l-md">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000">
                                <path d="M216-567.69h528v-116q0-4.62-3.85-8.46-3.84-3.85-8.46-3.85H228.31q-4.62 0-8.46 3.85-3.85 3.84-3.85 8.46v116Zm0 0V-696v128.31ZM228.31-116q-27.01 0-45.66-18.65Q164-153.3 164-180.31v-503.38Q164-710 183-729q19-19 45.31-19h87.38v-100.61h53.54V-748h223.08v-100.61h52V-748h87.38Q758-748 777-729q19 19 19 45.31v201.54q-12.39-4.31-25.42-6.2-13.03-1.88-26.58-3.11v-24.23H216v335.38q0 4.62 3.85 8.46 3.84 3.85 8.46 3.85h258.08q3.07 14.61 9.27 26.92Q501.85-128.77 509-116H228.31Zm499.16 48q-71.7 0-121.74-50.27-50.04-50.26-50.04-121.96 0-71.69 50.27-121.73Q656.22-412 727.92-412q71.7 0 121.73 50.27 50.04 50.26 50.04 121.96 0 71.69-50.26 121.73Q799.16-68 727.47-68Zm54.84-86.46 30.92-30.92-63.84-63.85v-84.46H706v102.92l76.31 76.31Z"/>
                            </svg>                                                            
                        </span>
                        <select class="font-montserrat text-sm bg-white border-0 rounded-r-md pl-0 py-3  text-gray-900 focus:ring-blue-500 focus:border-blue-500 flex-1 w-full min-w-0">
                            <option value="" disabled selected>Select OJT Schedule</option>
                            <option>Schedule A</option>
                            <option>Schedule B</option>
                            <option>Schedule C</option>
                        </select>
                     </div>

                    <!--SCHOOL/UNIVERISTY NAME-->
                    <div class="flex w-full md:w-1/2 drop-shadow-md">
                        <span class="inline-flex items-center px-3 bg-white shrink rounded-l-md">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000">
                                <path d="M480-190.16 236-311.39v-216.92L89.54-600 480-792.92 870.46-600v279.69h-52v-254.46L724-528.31v216.92L480-190.16ZM480-465l270.62-135L480-735 209.38-600 480-465Zm0 216.54 192-96v-157.85l-192 95.16-192-95.16v157.85l192 96ZM480-465Zm0 63.31Zm0 0Z"/>
                            </svg>                              
                        </span>
                        <input type="text" class="font-montserrat text-sm bg-white border-0 pl-0  py-3 rounded-r-md text-black flex-1 w-full min-w-0"
                        placeholder="School/University Name">
                    </div>

                    <!--REQUIRED HOURS-->
                    <div class="flex w-full md:w-1/4 drop-shadow-md">
                        <span class="inline-flex items-center px-3 bg-white shrink rounded-l-md">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000">
                                <path d="M431.98-164q-65.75 0-123.12-24.94-57.38-24.94-100.17-67.71-42.79-42.77-67.74-100.19Q116-414.27 116-480.02t24.95-123.12q24.94-57.38 67.72-100.17t100.18-67.74Q366.26-796 432-796q12 0 23.9 1 11.9 1 24.1 3v53q-11-2-23.5-3.5T432-744q-108.23 0-186.12 77.88Q168-588.23 168-480t77.88 186.12Q323.77-216 432-216t186.12-77.88Q696-371.77 696-480.07q0-11.93-1.5-25.58-1.5-13.66-3.88-24.66h52.22q2 11.23 3.58 24.77T748-480q0 65.74-24.94 123.15-24.94 57.4-67.71 100.18-42.77 42.78-100.19 67.72Q497.73-164 431.98-164Zm119.94-155.92L406-465.85V-672h52v183.85l131.08 131.07-37.16 37.16ZM684-626.31v-108H576v-52h108v-108h52v108h108v52H736v108h-52Z"/>
                            </svg>                                                            
                        </span>
                        <input type="text" class="font-montserrat text-sm bg-white border-0 pl-0 py-3  rounded-r-md text-black flex-1 w-full min-w-0"
                        placeholder="No. of Required ">
                    </div>
                </div>



                <!--ROW 4: INSERT FILE & DRIVE LINK-->
                <div class="flex flex-col md:flex-row gap-8 md:gap-5 pt-8 justify-center items-center w-full">
                    
                    <!--INSERT FILE-->
                    <div class="flex w-full md:w-1/2 drop-shadow-md">
                        <span class="inline-flex items-center px-3 bg-white shrink rounded-l-md">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000">
                                <path d="M228.31-164q-27.01 0-45.66-19Q164-202 164-228.31v-503.38Q164-758 182.65-777q18.65-19 45.66-19h503.38q27.01 0 45.66 19Q796-758 796-731.69v503.38Q796-202 777.35-183q-18.65 19-45.66 19H228.31Zm0-52h503.38q4.62 0 8.46-3.85 3.85-3.84 3.85-8.46v-503.38q0-4.62-3.85-8.46-3.84-3.85-8.46-3.85H228.31q-4.62 0-8.46 3.85-3.85 3.84-3.85 8.46v503.38q0 4.62 3.85 8.46 3.84 3.85 8.46 3.85ZM294-298h375.07L543.54-465.38 443.23-335.23l-62-78.31L294-298Zm-78 82v-528 528Z"/>
                            </svg>                                                      
                        </span>
                        <input class=" block font-montserrat text-sm md:text-md  pl-0  py-1 w-full text-black border-0 rounded-r-md bg-white" 
                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                    </div>

                    <!--DRIVE LINK-->
                    <div class="flex w-full md:w-1/2 drop-shadow-md">
                        <span class="inline-flex items-center px-3 bg-white shrink rounded-l-md">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000">
                                <path d="M239.69-140q-15.46 0-28.23-7.35-12.77-7.34-19.79-19.78l-89.72-156.36q-7.03-12.43-7.22-27.32-.19-14.88 7.43-27.73l240.3-413.92q7.62-12.85 20.19-20.19 12.58-7.35 27.61-7.35h179.48q15.03 0 27.61 7.35 12.57 7.34 20.1 20.06l167.78 288.36q-15.23-2.69-29.5-1.04t-29.11 4.5L571-768H389L146-351l92 159h335.85q7.92 15.4 18.19 28.62 10.27 13.22 23.88 23.38H239.69Zm66.08-161-21.23-38 169.49-295.85h51.89l109.62 191.62q-9.7 9.92-18.26 21.58-8.56 11.65-15.51 24.03L480-576 351.69-352h209.08q-4.08 12.39-6.62 24.9-2.53 12.51-2.92 26.1H305.77ZM742-154v-108H634v-52h108v-108h52v108h108v52H794v108h-52Z"/>
                            </svg>                                                           
                        </span>
                        <input type="url" class="font-montserrat text-sm md:text-md pl-0 py-3  bg-white border-0 rounded-r-md text-black flex-1 w-full min-w-0"
                        placeholder="Insert Google Drive Link">
                    </div>
                </div>



                <!-- BUTTONS -->
                <div class="flex flex-col md:flex-row gap-8 md:gap-5 pt-9 justify-center items-center w-full">
                    
                    <!-- PREVIOUS BUTTON -->
                    <div class="flex justify-center w-auto">
                        <button type="button" class="font-montserrat font-medium text-[16px] text-yinmn-blue bg-ghost-white drop-shadow-lg w-44 h-12 rounded-md">
                            PREVIOUS
                        </button>
                    </div>

                    <!-- SIGNUP BUTTON-->
                    <div class="flex justify-center w-auto">
                        <button type="button" class="font-montserrat font-medium text-[16px] bg-yinmn-blue text-white drop-shadow-lg w-44 h-12 rounded-md">
                            SIGN UP
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-page>
