<?php include './components/header.php' ?>

<section class="page-title bg-slate-900 h-[20vh] flex items-center justify-center">
    <div class="container">
        <h1 class="text-3xl font-mono font-bold text-center underline underline-offset-8"> About Me</h1>
    </div>
</section>

<section
    class="hero section min-h-[70vh] flex flex-col md:flex-row gap-4 lg:gap-12 mx-auto items-center justify-center my-12">
    <div class="flex flex-col gap-4">
        <div class="intro-image overflow-hidden rounded-full mx-auto">
            <img src="/images/profile.jpeg" alt="Profile photo" class="w-full max-w-[300px]">
        </div>
        <div class="details text-center">
            <h1 class="text-3xl font-bold font-mono">Al Amin</h1>
            <p class="text-slate-100">Web Developer</p>
            <p>Brothers' Dev co.</p>
        </div>
    </div>
    <div class="intro flex flex-col gap-8 p-4 md:max-w-[60%] lg:max-w-[800px]">
        <h1 class="text-2xl font-mono font-semibold">Biography</h1>
        <div class="text-lg/8 font-mono text-slate-200 text-justify">
            <p><span class="font-semibold">I'm Al Amin</span> This is some individual introduction. Lorem ipsum dolor,
                sit amet consectetur adipisicing elit.
                Veniam, dolores eos voluptatem temporibus eum soluta eaque ratione quo, laborum ullam in accusamus
                provident, placeat repudiandae quidem dolorem veritatis fugiat. Debitis?Lorem ipsum dolor sit amet
                consectetur, adipisicing elit. Temporibus voluptate quidem provident eius praesentium ut, quod
                minima maiores mollitia! Optio eius sit ducimus saepe ipsum iusto minus ratione, tenetur dolorum.
            </p>
        </div>
        <a href="/resume.pdf" class="px-4 py-2 bg-slate-900 hover:bg-slate-100 hover:text-slate-900 w-max rounded-md"><i
                class="fa fa-download"></i> Download Resume</a>
        <div class="flex flex-col md:flex-row p-4 justify-around">
            <div class="interests">
                <h1 class="text-xl font-mono font-semibold underline underline-offset-8 mb-4">Interests</h1>
                <ul class="list-disc *:py-1">
                    <li>Artificial Intelligence</li>
                    <li>Computational Linguistics</li>
                    <li>Informational Retrieval</li>
                    <li>Programming</li>
                    <li>Anime</li>
                </ul>
            </div>
            <div class="education mt-4 md:mt-0">
                <h1 class="text-xl font-mono font-semibold underline underline-offset-8 mb-4">Education</h1>
                <ul class="*:py-1">
                    <li><i class="fa-solid fa-graduation-cap text-xl"></i> Barnamala Adarsha High School & College</li>
                    <li><i class="fa-solid fa-graduation-cap text-xl"></i> Donia College</li>
                    <li><i class="fa-solid fa-graduation-cap text-xl"></i> University of Dhaka</li>

                </ul>
            </div>
        </div>
    </div>
</section>

<section class="skill-info my-12 py-12 min-h-[70vh]">
    <div class="container mx-auto">
        <h1 class="text-2xl text-center font-bold font-mono underline underline-offset-8">
            Skill Information
        </h1>
        <div>
            <div class="space-y-5 max-w-[80%] mx-auto">
                <!-- Progress -->
                <div>
                    <div class="mb-2 flex justify-between items-center">
                        <h3 class="text-sm font-semibold text-white">React</h3>
                        <span class="text-sm text-white">25%</span>
                    </div>
                    <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700"
                        role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="flex flex-col justify-center rounded-full overflow-hidden bg-blue-600 text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-blue-500"
                            style="width: 25%"></div>
                    </div>
                </div>
                <!-- End Progress -->

                <!-- Progress -->
                <div>
                    <div class="mb-2 flex justify-between items-center">
                        <h3 class="text-sm font-semibold text-white">Laravel</h3>
                        <span class="text-sm text-white">50%</span>
                    </div>
                    <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700"
                        role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <div class="flex flex-col justify-center rounded-full overflow-hidden bg-blue-600 text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-blue-500"
                            style="width: 50%"></div>
                    </div>
                </div>
                <!-- End Progress -->

                <!-- Progress -->
                <div>
                    <div class="mb-2 flex justify-between items-center">
                        <h3 class="text-sm font-semibold text-white">PHP</h3>
                        <span class="text-sm text-white">75%</span>
                    </div>
                    <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700"
                        role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        <div class="flex flex-col justify-center rounded-full overflow-hidden bg-blue-600 text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-blue-500"
                            style="width: 75%"></div>
                    </div>
                </div>
                <!-- End Progress -->

                <!-- Progress -->
                <div>
                    <div class="mb-2 flex justify-between items-center">
                        <h3 class="text-sm font-semibold text-white">JavaScript</h3>
                        <span class="text-sm text-white">100%</span>
                    </div>
                    <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700"
                        role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        <div class="flex flex-col justify-center rounded-full overflow-hidden bg-blue-600 text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-blue-500"
                            style="width: 100%"></div>
                    </div>
                </div>
                <!-- End Progress -->

                <!-- Progress -->
                <div>
                    <div class="mb-2 flex justify-between items-center">
                        <h3 class="text-sm font-semibold text-white">CSS</h3>
                        <span class="text-sm text-white">100%</span>
                    </div>
                    <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700"
                        role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        <div class="flex flex-col justify-center rounded-full overflow-hidden bg-blue-600 text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-blue-500"
                            style="width: 100%"></div>
                    </div>
                </div>
                <!-- End Progress -->

                <!-- Progress -->
                <div>
                    <div class="mb-2 flex justify-between items-center">
                        <h3 class="text-sm font-semibold text-white">HTML</h3>
                        <span class="text-sm text-white">100%</span>
                    </div>
                    <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700"
                        role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        <div class="flex flex-col justify-center rounded-full overflow-hidden bg-blue-600 text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-blue-500"
                            style="width: 100%"></div>
                    </div>
                </div>
                <!-- End Progress -->
            </div>
        </div>
    </div>
</section>

<section class="clients my-12 min-h-[70vh] py-12">
    <div class="container mx-auto flex flex-col items-center">
        <h1 class="mb-8 font-bold font-mono text-3xl text-center underline underline-offset-8">Existing Clients</h1>
        <div class="client-cards *:w-[90%] sm:*:w-[320px] md:*:w-[25%] flex flex-wrap gap-4 py-4 justify-center">
            <div class="card flex flex-col overflow-hidden rounded-xl shadow-md shadow-slate-400">
                <div class="flex flex-1 flex-col justify-between p-6 lg:px-7 lg:py-8">
                    <div class="flex-1">
                        <div class="mt-8 flex items-center">
                            <img class="h-11 w-11 flex-shrink-0 rounded-full object-cover" src="/images/client.jpg"
                                alt="client" />
                            <div class="ml-4">
                                <p class="text-base font-bold">Akorn Veesle</p>
                                <p class="mt-0.5 text-sm text-slate-400">CEO Lufthansa Corp</p>
                            </div>
                        </div>
                        <blockquote class="mt-8 flex-1">
                            <p class="font-[400] text-xl italic line-clamp-3">“Lorem ipsum
                                dolor sit amet consectetur adipisicing elit. Animi ducimus
                                repellat aperiam quam consequatur eligendi totam vitae iusto
                                mollitia esse.”</p>
                        </blockquote>
                    </div>
                </div>
            </div>

            <div class="card flex flex-col overflow-hidden rounded-xl shadow-md shadow-slate-400">
                <div class="flex flex-1 flex-col justify-between p-6 lg:px-7 lg:py-8">
                    <div class="flex-1">
                        <div class="mt-8 flex items-center">
                            <img class="h-11 w-11 flex-shrink-0 rounded-full object-cover" src="/images/client-2.jpg"
                                alt="client" />
                            <div class="ml-4">
                                <p class="text-base font-bold">Akorn Veesle</p>
                                <p class="mt-0.5 text-sm text-slate-400">CEO Lufthansa Corp</p>
                            </div>
                        </div>
                        <blockquote class="mt-8 flex-1">
                            <p class="font-[400] text-xl italic line-clamp-3">“Lorem ipsum
                                dolor sit amet consectetur adipisicing elit. Animi ducimus
                                repellat aperiam quam consequatur eligendi totam vitae iusto
                                mollitia esse.”</p>
                        </blockquote>
                    </div>
                </div>
            </div>

            <div class="card flex flex-col overflow-hidden rounded-xl shadow-md shadow-slate-400">
                <div class="flex flex-1 flex-col justify-between p-6 lg:px-7 lg:py-8">
                    <div class="flex-1">
                        <div class="mt-8 flex items-center">
                            <img class="h-11 w-11 flex-shrink-0 rounded-full object-cover" src="/images/client.jpg"
                                alt="client" />
                            <div class="ml-4">
                                <p class="text-base font-bold">Akorn Veesle</p>
                                <p class="mt-0.5 text-sm text-slate-400">CEO Lufthansa Corp</p>
                            </div>
                        </div>
                        <blockquote class="mt-8 flex-1">
                            <p class="font-[400] text-xl italic line-clamp-3">“Lorem ipsum
                                dolor sit amet consectetur adipisicing elit. Animi ducimus
                                repellat aperiam quam consequatur eligendi totam vitae iusto
                                mollitia esse.”</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="px-6 py-2 bg-slate-900 hover:bg-slate-100 hover:text-slate-900 w-max rounded-md mt-8 shadow-sm shadow-slate-600">More</a>
    </div>
</section>




<?php include './components/footer.php' ?>