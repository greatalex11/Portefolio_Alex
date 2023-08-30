<?php
require __DIR__ . './../vendor/autoload.php';
require "repository.php";
require "lib.php";

$envFilePath = __DIR__ . '/.env';

if (file_exists($envFilePath)) {
  $dotenvValues = parse_ini_file($envFilePath);
  $myPublicKey = $dotenvValues['myKeyPublic'];
  $myKeyPrivate = $dotenvValues['myKeyPrivate'];
}

?>




<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


  <script src="https://www.google.com/recaptcha/enterprise.js?render=<?= $myPublicKey ?>"></script>


  <link href="" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="./../dist/output.css" />

  <script src="index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="swiper.js"></script>
  <script async src="https://unpkg.com/es-module-shims@1.6.3/dist/es-module-shims.js"></script>
  <script type="importmap">
    {
        "imports": {
          "three": "https://unpkg.com/three@v0.155.0/build/three.module.js",
          "three/addons/": "https://unpkg.com/three@v0.155.0/examples/jsm/"
        }
      }
    </script>
  <script type="module" src="main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

  <title>Portefolio Alex G</title>
</head>

<body class="m-0">


  <header class="fixed w-full h-[47px] bg-orange-300 bg-opacity-7 text-white shadow-lg hidden md:block">
    <div class=" top-0 container mx-auto flex items-center h-12">
      <a href="" class="flex items-center justify-center">
        <img class="h-12" src="./Assets/floatin.png" alt="sphere metalique dans le desert" />
        <span class="ml-2 mr-36 text-xs uppercase font-black">Reach<br />the impossible!</span>
      </a>
      <nav class="contents font-semibold text-base lg:text-lg">
        <ul class="mx-auto flex items-center">
          <li class="p-5 xl:p-8 active">
            <a href="">
              <span>Home</span>
            </a>
          </li>
          <li class="p-5 xl:p-8">
            <a href="">
              <span>About</span>
            </a>
          </li>
          <li class="p-5 xl:p-8">
            <a href="">
              <span>Projects</span>
            </a>
          </li>
          <li class="p-5 xl:p-8">
            <a href="">
              <span>Services</span>
            </a>
          </li>
          <li class="p-5 xl:p-8">
            <a href="">
              <span>Blog</span>
            </a>
          </li>
        </ul>
      </nav>
      <button class="border border-white rounded-full font-bold px-9 py-1">Contact me</button>
    </div>
  </header>

  <div class="quality-select">

  </div>

  <div id="terre"></div>

  <div id="main" class="mb-16">
    <!--Container principal-->

    <!--Container de mon intro -->

    <div id="home" class="flex flex-col justify-center align-middle w-full h-[450px] bg-center bg-no-repeat object-contain bg-fond-redblack">


      <div class="flex justify-end">
        <img class="scale-150 skew-x-6 mr-40">
      </div>
      <div id="presentation" class="flex flex-col justify-center items-center text-center">
        <h1 class="font-screen text-3xl decoration-white tracking-widest my-8">
          Alexandre GUERILLOT
        </h1>

        <p class="w-[450px] font-screen text-3xl capitalize text-[#c2410c] my-8 leading-10m-24">
          Développeur Full stack
        </p>
        <span class="w-[600px] font-screen text-3xl capitalize text-[#c2410c] my-8 leading-10m-24 animate-pulse">Javascript</span>

      </div>
    </div>

    <div class="bg-slate-300 bg-opacity-70 border-x-rose-500w-screen  w-full h-[400px] flex flex-col justify-center items-center">
      <h3 class="font-screen text-2xl underline m-6 w-[600px] text-center my-4">
        Résumé
      </h3>
      <p class="font-dev tracking-wider text-justify w-[600px] leading-10 decoration-solid indent-8">

        J'ai choisi le métier de Développeur
        Web pour la créativité et la rigueur nécessaire à la mise en oeuvre de
        solutions. Pragmatique et ouvert d'esprit, rejoindre une commnauté où
        les savoirs se partagent à du sens pour moi. Les nouvelles technologies nous permettent de répondre plus vite
        et plus certaineement au défis de notre temps. Très prochainement, j'intégrerai la réalité augmentée à mon "scope"
        professionnel.

      </p>

    </div>

    <!--  animation css pour affichage lang dev'-->

    <div id="competences-animation" class="w-full h-[700px] flex flex-col justify-items-center align-middle m-auto p-16">

      <div class="text-center">
        <h3 class="font-screen inline text-2xl underline m-auto w-[600px] text-center my-4 ">
          Compétences
        </h3>
      </div>



      <div id="indicateurCompetences" class=" flex flex-row  m-auto">

        <div id="competences" class="animate w-1/2 h-auto relative left-[150px] m-auto ">

          <span style=" --i: 0">
            <p>JS</p>
          </span>

          <span style="--i: 1">
            <p>PHP</p>
          </span>

          <span style="--i: 2">
            <p>HTML5</p>
          </span>

          <span style="--i: 3">
            <p>CSS3</p>
          </span>

          <span style="--i: 4">
            <p>MySQL</p>
          </span>

          <span style="--i: 5">
            <P>AR.JS</P>
          </span>

          <span style="--i: 6">
            <P id="three">THREE.JS</P>
          </span>

          <span style="--i: 7">
            <P>Tailwind</P>
          </span>

          <span style="--i: 8">
            <P>React</P>
          </span>

          <span style="--i: 9">
            <P>Figma</P>
          </span>

          <span style="--i: 10">
            <P>Symfony</P>
          </span>

        </div>

        <div id="explication" class="w-1/2 text-justify mt-auto mb-auto  p-10 indent-8">
          Inter has ruinarum varietates a Nisibi quam tuebatur accitus Vrsicinus, cui nos obsecuturos iunxerat imperiale praeceptum, dispicere litis exitialis certamina cogebatur abnuens et reclamans, adulatorum oblatrantibus turmis, bellicosus sane milesque semper et militum ductor sed forensibus iurgiis longe discretus, qui metu sui discriminis anxius cum accusatores quaesitoresque subditivos sibi consociatos ex isdem foveis cerneret emergentes, quae clam palamve agitabantur,
          occultis Constantium litteris edocebat inplorans subsidia, quorum metu tumor notissimus Caesaris exhalaret.
        </div>

      </div>




    </div>


    <section id="projets" class="w-screen h-[500px] mt-72 ">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">Slide 1</div>
          <div class="swiper-slide">Slide 2</div>
          <div class="swiper-slide">Slide 3</div>
          <div class="swiper-slide">Slide 4</div>
          <div class="swiper-slide">Slide 5</div>
          <div class="swiper-slide">Slide 6</div>
          <div class="swiper-slide">Slide 7</div>
          <div class="swiper-slide">Slide 8</div>
          <div class="swiper-slide">Slide 9</div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>



    <section id="contact">

      <div class=" container my-30 mx-auto md:px-6">


        <!-- Section: Design Block -->
        <section class="mb-16 mt-16">

          <div class="relative h-[500px] overflow-hidden bg-cover bg-[50%] bg-no-repeat bg-fond-redblack mb-[20px]"></div>
          <div class="container px-6 md:px-12">
            <div class="block rounded-lg bg-[hsla(0,0%,100%,0.8)] px-6 py-12 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-[hsla(0,0%,5%,0.7)] dark:shadow-black/20 md:py-16 md:px-12 -mt-[100px] backdrop-blur-[30px]">
              <div class="flex flex-wrap">
                <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:px-3 lg:mb-0 lg:w-5/12 lg:px-6">

                  <form id='contactForm' action="contact.php" method="post">
                    <input type="hidden" id="recaptchaResponse" name="recaptcha-response">

                    <div class="relative mb-6" data-te-input-wrapper-init>
                      <input name="form[nom]" type="text" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent  uppercase py-[1.8rem] px-10 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="exampleInput90" placeholder="Nom" />
                      <label class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary" for="exampleInput90">Nom
                      </label>
                    </div>
                    <div class="relative mb-6" data-te-input-wrapper-init>
                      <input name="form[prenom]" type="text" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent capitalize py-[1.8rem] px-10 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="exampleInput90" placeholder="Prénom" />
                      <label class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary" for="exampleInput90">Prénom
                      </label>
                    </div>
                    <div class="relative mb-6" data-te-input-wrapper-init>
                      <input name="form[email]" type="email" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[1.8rem] px-10 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="exampleInput91" placeholder="Email" />
                      <label class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary" for="exampleInput91">Email
                      </label>
                    </div>

                    <div class="relative mb-6" data-te-input-wrapper-init>
                      <input name="form[msg]" type="text" class="text-clip overflow-hidden  peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[1.8rem] px-10 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="exampleFormControlTextarea1" rows="3" placeholder="Your message"></textarea>
                      <label for="exampleFormControlTextarea1" class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Message</label>
                    </div>

                    <div class="mb-6 inline-block min-h-[1.5rem] justify-center  md:flex">
                      <input type="checkbox" value="checked" name=" form[sendCopyMail] class=" relative float-left mt-[0.05rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:ml-[0.25rem] checked:after:-mt-px checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-t-0 checked:after:border-l-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:ml-[0.25rem] checked:focus:after:-mt-px checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-t-0 checked:focus:after:border-l-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]" type="checkbox" value="" id="exampleCheck96" checked ">
                      <label class=" inline-block pl-[0.15rem] hover:cursor-pointer" for="exampleCheck96">
                      Envoyez-moi une copie de ce message
                      </label>

                    </div>
                    <button id="ok" type="submit" data-te-ripple-init data-te-ripple-color="light" class="mb-6 inline-block w-full rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-black shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] lg:mb-0">
                      Send
                    </button>
                  </form>
                  <div style="display:none;" id="return-message" class=""></div>
                </div>


                <div class="w-full shrink-0 grow-0 basis-auto lg:w-7/12">
                  <div class="flex flex-wrap">
                    <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:w-full lg:px-6 xl:w-6/12">
                      <div class="flex items-start">
                        <div class="shrink-0">
                          <div class="inline-block rounded-md bg-primary-100 p-4 text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-6 w-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />
                            </svg>
                          </div>
                        </div>
                        <div class="ml-6 grow">
                          <p class="mb-2 font-bold dark:text-white">
                            Applez-moi
                          </p>
                          <p class="text-neutral-500 dark:text-neutral-200">
                            +33 07.86.15.97.83
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:w-full lg:px-6 xl:w-6/12">
                      <div class="flex items-start">
                        <div class="shrink-0">
                          <div class="inline-block rounded-md bg-primary-100 p-4 text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-6 w-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                            </svg>
                          </div>
                        </div>
                        <div class="ml-6 grow">
                          <p class="mb-2 font-bold dark:text-white">
                            e-mail
                          </p>
                          <p class="text-neutral-500 dark:text-neutral-200">
                            alexguerillot1@gmail.com
                          </p>

                        </div>
                      </div>
                    </div>
                    <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:mb-0 md:w-6/12 md:px-3 lg:mb-12 lg:w-full lg:px-6 xl:w-6/12">
                      <div class="align-start flex">
                        <div class="shrink-0">
                          <div class="inline-block rounded-md bg-primary-100 p-4 text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-6 w-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                            </svg>
                          </div>
                        </div>
                        <div class="ml-6 grow">
                          <p class="mb-2 font-bold dark:text-white">Press</p>
                          <p class="text-neutral-500 dark:text-neutral-200">
                            A venir prochainement
                          </p>

                        </div>
                      </div>
                    </div>
                    <div class="w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:w-full lg:px-6 xl:mb-12 xl:w-6/12">
                      <div class="align-start flex">
                        <div class="shrink-0">
                          <div class="inline-block rounded-md bg-primary-100 p-4 text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-6 w-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M12 12.75c1.148 0 2.278.08 3.383.237 1.037.146 1.866.966 1.866 2.013 0 3.728-2.35 6.75-5.25 6.75S6.75 18.728 6.75 15c0-1.046.83-1.867 1.866-2.013A24.204 24.204 0 0112 12.75zm0 0c2.883 0 5.647.508 8.207 1.44a23.91 23.91 0 01-1.152 6.06M12 12.75c-2.883 0-5.647.508-8.208 1.44.125 2.104.52 4.136 1.153 6.06M12 12.75a2.25 2.25 0 002.248-2.354M12 12.75a2.25 2.25 0 01-2.248-2.354M12 8.25c.995 0 1.971-.08 2.922-.236.403-.066.74-.358.795-.762a3.778 3.778 0 00-.399-2.25M12 8.25c-.995 0-1.97-.08-2.922-.236-.402-.066-.74-.358-.795-.762a3.734 3.734 0 01.4-2.253M12 8.25a2.25 2.25 0 00-2.248 2.146M12 8.25a2.25 2.25 0 012.248 2.146M8.683 5a6.032 6.032 0 01-1.155-1.002c.07-.63.27-1.222.574-1.747m.581 2.749A3.75 3.75 0 0115.318 5m0 0c.427-.283.815-.62 1.155-.999a4.471 4.471 0 00-.575-1.752M4.921 6a24.048 24.048 0 00-.392 3.314c1.668.546 3.416.914 5.223 1.082M19.08 6c.205 1.08.337 2.187.392 3.314a23.882 23.882 0 01-5.223 1.082" />
                            </svg>
                          </div>
                        </div>
                        <!--<div class="ml-6 grow">
                            <p class="mb-2 font-bold dark:text-white">Info utiles</p>
                            <p class="text-neutral-500 dark:text-neutral-200">
                              lefute.com
                            </p>
                           
                          </div> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Section: Design Block -->
      </div>

      <div class="bg-white w-full h-[50px]"></div>

    </section>


  </div>

  <footer>

  </footer>



  <script>
    addEventListener("load", (event) => {
      function reloadCaptcha() {
        grecaptcha.enterprise.ready(async () => {
          const token = await grecaptcha.enterprise.execute('<?= $myPublicKey ?>', {
            action: 'LOGIN'
          });
          document.getElementById("recaptchaResponse").value = token
        });
      }
      reloadCaptcha();

      let contactForm = document.getElementById("contactForm");
      contactForm.addEventListener('submit', (event) => {
        event.preventDefault();

        //creation d'une FormData API par Axios//

        let data = new FormData(contactForm);
        axios.post('contact.php', data)
          .then(function(response) {
            let data = response.data;


            let returnDiv = document.getElementById("return-message");
            console.log(data);
            if (data.success) {
              returnDiv.style.display = "block";
              returnDiv.innerHTML = data.message;
              returnDiv.classList.add("success");
              returnDiv.classList.remove("error");
            } else {
              returnDiv.style.display = "block";
              returnDiv.innerHTML = data.message;
              returnDiv.classList.add("error");
              returnDiv.classList.remove("success")
            }
          })
          .catch(function(error) {

          }).then(() => {
            reloadCaptcha();
          });
      })
    })
  </script>




</body>



</html>