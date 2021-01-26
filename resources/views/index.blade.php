<!--
 API Documentation HTML Template  - 1.0.1
 Copyright © 2016 Florian Nicolas
 Licensed under the MIT license.
 https://github.com/ticlekiwi/API-Documentation-HTML-Template
 !-->
 <!DOCTYPE html>
 <html class="no-js" lang="en">
 <head>
     <meta charset="utf-8">
     <title>HaditsTECH - API Documentation</title>
     <meta name="description" content="">
     <meta name="author" content="ticlekiwi">
 
     <meta http-equiv="cleartype" content="on">
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
     <link rel="stylesheet" href="css/hightlightjs-dark.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/highlight.min.js"></script>
     <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,500|Source+Code+Pro:300" rel="stylesheet">
     <link rel="stylesheet" href="{{ url('css/style.css') }}" media="all">
     <script>hljs.initHighlightingOnLoad();</script>
 </head>
 
 <body>
 <div class="left-menu">
     <div class="content-logo">
         <img alt="platform by Emily van den Heever from the Noun Project" title="platform by Emily van den Heever from the Noun Project" src="images/logo.png" height="32" />
         <span>API Documentation</span>
     </div>
     <div class="content-menu">
         <ul>
             <li class="scroll-to-link active" data-target="get-started">
                 <a>Get Started</a>
             </li>
             <li class="scroll-to-link" data-target="get-all-kitab">
                 <a>Get All Kitab</a>
             </li>
             <li class="scroll-to-link" data-target="get-random-hadits">
                 <a>Get Random Hadits</a>
             </li>
             <li class="scroll-to-link" data-target="get-random-hadits-by-id">
                 <a>Get Random Hadits By Kitab Id</a>
             </li>
             <li class="scroll-to-link" data-target="get-hadits-by-paginate">
                 <a>Get Hadits by Paginate</a>
             </li>
             <li class="scroll-to-link" data-target="search-hadits">
                 <a>Search Hadits</a>
             </li>
             <!-- <li class="scroll-to-link" data-target="errors">
                 <a>Errors</a>
             </li> -->
         </ul>
     </div>
 </div>
 <div class="content-page">
     <div class="content-code"></div>
     <div class="content">
         <div class="overflow-hidden content-section" id="content-get-started">
             <h1 id="get-started">Get started</h1>
             <pre>
     API Endpoint
 
         {{ url('') }}
                 </pre>
             <p>
                 Simple Hadits API
             </p>
         </div>
         <div class="overflow-hidden content-section" id="content-get-all-kitab">
             <h2 id="get-all-kitab">get all kitab</h2>
             <pre><code class="bash">
 # Here is a curl example
 curl {{ url('kitab') }}
                 </code></pre>
             <p>
                  url :<br>
                 <code class="higlighted">{{ url('kitab') }}</code>
             </p>
             <br>
             <pre><code class="json">
 Result example :
 
 {
     "status": 1,
     "data": [
         {
             "id": 1,
             "nama": "Abu Dawud",
             "created_at": "2021-01-25T12:46:54.000000Z",
             "updated_at": "2021-01-25T12:46:54.000000Z"
         },
         {
             "id": 2,
             "nama": "al-Musnad atau Musnad Ahmad",
             "created_at": "2021-01-25T12:46:54.000000Z",
             "updated_at": "2021-01-25T12:46:54.000000Z"
         },
         {
             "id": 3,
             "nama": "Muhammad bin Ismail al-Bukhari",
             "created_at": "2021-01-25T12:46:55.000000Z",
             "updated_at": "2021-01-25T12:46:55.000000Z"
         },
         {
             "id": 4,
             "nama": "Ad-Darimi",
             "created_at": "2021-01-25T12:46:55.000000Z",
             "updated_at": "2021-01-25T12:46:55.000000Z"
         },
         {
             "id": 5,
             "nama": "Imam Ibnu Majah",
             "created_at": "2021-01-25T12:46:55.000000Z",
             "updated_at": "2021-01-25T12:46:55.000000Z"
         },
         {
             "id": 6,
             "nama": "Al-Muwatta, Al-Muwaththa atau Muwatta Malik",
             "created_at": "2021-01-25T12:46:55.000000Z",
             "updated_at": "2021-01-25T12:46:55.000000Z"
         },
         {
             "id": 7,
             "nama": "Muslim",
             "created_at": "2021-01-25T12:46:55.000000Z",
             "updated_at": "2021-01-25T12:46:55.000000Z"
         },
         {
             "id": 8,
             "nama": "Sunan An-Nasa'i atau Al-Mujtaba",
             "created_at": "2021-01-25T12:46:55.000000Z",
             "updated_at": "2021-01-25T12:46:55.000000Z"
         },
         {
             "id": 9,
             "nama": "Muhammad bin Isa at-Tirmidzi",
             "created_at": "2021-01-25T12:46:55.000000Z",
             "updated_at": "2021-01-25T12:46:55.000000Z"
         }
     ]
 }
                 </code></pre>
         </div>
         <div class="overflow-hidden content-section" id="content-get-random-hadits">
             <h2 id="get-random-hadits">get random hadits</h2>
             <pre><code class="bash">
 # Here is a curl example
 curl {{ url('hadits') }}
                 </code></pre>
             <p>
                  url :<br>
                 <code class="higlighted">{{ url('hadits') }}</code>
             </p>
             <br>
             <pre><code class="json">
 Result example :
 
 {
     "status": 1,
     "data": {
         "id": 37512,
         "isi": "حَدَّثَنَا نَصْرُ بْنُ عَلِيٍّ الْجَهْضَمِيُّ حَدَّثَنَا إِسْحَقُ بْنُ يُوسُفَ عَنْ الْعَوَّامِ بْنِ حَوْشَبٍ عَنْ أَبِي مُحَمَّدٍ مَوْلَى عُمَرَ بْنِ الْخَطَّابِ عَنْ أَبِي عُبَيْدَةَ عَنْ عَبْدِ اللَّهِ قَالَقَالَ رَسُولُ اللَّهِ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ مَنْ قَدَّمَ ثَلَاثَةً مِنْ الْوَلَدِ لَمْ يَبْلُغُوا الْحِنْثَ كَانُوا لَهُ حِصْنًا حَصِينًا مِنْ النَّارِ فَقَالَ أَبُو ذَرٍّ قَدَّمْتُ اثْنَيْنِ قَالَ وَاثْنَيْنِ فَقَالَ أُبَيُّ بْنُ كَعْبٍ سَيِّدُ الْقُرَّاءِ قَدَّمْتُ وَاحِدًا قَالَ وَوَاحِدًا",
         "artinya": "Telah menceritakan kepada kami [Nashr bin Ali Al Jahdlami] berkata, telah menceritakan kepada kami [Ishaq bin Yunuf] dari [Al Awwam bin Haisyab] dari [Abu Muhammad] mantan pelayan Umar Ibnul Khaththab, dari [Abu Ubaidah] dari [Abdullah] ia berkata, \"Rasulullah shallallahu 'alaihi wasallam bersabda: \"Barangsiapa memberikan (ditinggal mati) tiga anak laki-laki yang belum berumur baligh, maka mereka akan menjadi benteng penghalang baginya dari api neraka. \" Abu Dzar berkata, \"Aku telah memberikan dua orang anak?\" beliau bersabda: \"Dan dua anak. \" Ubai bin Ka'b, tuannya ahli Qur'an, berkata, \"Aku telah memberikan satu anak?\" beliau bersabda: \"Dan satu anak. \"",
         "kitab_id": 5,
         "kitab": {
             "id": 5,
             "nama": "Imam Ibnu Majah",
             "created_at": "2021-01-25T12:46:55.000000Z",
             "updated_at": "2021-01-25T12:46:55.000000Z"
         }
     }
 }
                 </code></pre>
         </div>
 
         <div class="overflow-hidden content-section" id="content-get-random-hadits-by-id">
             <h2 id="get-random-hadits-by-id">get random hadits by kitab id</h2>
             <pre><code class="bash">
 # Here is a curl example
 curl {{ url('hadits/1') }}
                 </code></pre>
             <p>
                  url :<br>
                 <code class="higlighted">{{ url('hadits/{kitab_id}') }}</code>
             </p>
             <br>
             <pre><code class="json">
 Result example :
 
 {
     "status": 1,
     "kitab": "Abu Dawud",
     "data": {
         "id": 4060,
         "isi": "حَدَّثَنَا مُحَمَّدُ بْنُ سُلَيْمَانَ الْأَنْبَارِيُّ وَعُثْمَانُ بْنُ أَبِي شَيْبَةَ الْمَعْنَى قَالَا حَدَّثَنَا وَكِيعٌ عَنْ سُفْيَانَ عَنْ سِمَاكٍ عَنْ عِكْرِمَةَ عَنْ ابْنِ عَبَّاسٍ قَالَلَمَّا تَوَجَّهَ النَّبِيُّ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ إِلَى الْكَعْبَةِ قَالُوا يَا رَسُولَ اللَّهِ فَكَيْفَ الَّذِينَ مَاتُوا وَهُمْ يُصَلُّونَ إِلَى بَيْتِ الْمَقْدِسِ فَأَنْزَلَ اللَّهُ تَعَالَى{ وَمَا كَانَ اللَّهُ لِيُضِيعَ إِيمَانَكُمْ }",
         "artinya": "Telah menceritakan kepada kami [Muhammad bin Sulaiman Al Anbari] dan [Utsman bin Abu Syaibah] secara makna, keduanya berkata; telah menceritakan kepada kami [Waki'] dari [Sufyan] dari [Simak] dari [Ikrimah] dari [Ibnu Abbas] ia berkata, \"Ketika Nabi shallallahu 'alaihi wasallam (Shalat) menghadap ke arah Ka'bah orang-orang bertanya, \"Wahai Rasulullah, bagaimana dengan orang-orang yang telah meninggal, sementara mereka (dahulu) shalat menghadap ke arah Baitul Maqdis?\" Maka Allah Azza Wa Jalla kemudian menurunkan ayat: '(dan Allah tidak akan menyia-nyiakan imanmu) ' -Qs. Al Baqarah: 143-",
         "kitab_id": 1
     }
 }
                 </code></pre>
         </div>
         
         <div class="overflow-hidden content-section" id="content-get-hadits-by-paginate">
             <h2 id="get-hadits-by-paginate">get hadits by paginate</h2>
             <pre><code class="bash">
 # Here is a curl example
 curl {{ url('hadits/6/5') }}
                 </code></pre>
             <p>
                  url :<br>
                 <code class="higlighted">{{ url('hadits/{kitab_id}/{paginate}') }}</code>
             </p>
             <br>
             <pre><code class="json">
 Result example :
 
 {
     "status": 1,
     "kitab": "Al-Muwatta, Al-Muwaththa atau Muwatta Malik",
     "data": {
         "current_page": 1,
         "data": [
             {
                 "id": 40236,
                 "isi": "قَالَ حَدَّثَنِي اللَّيْثِيّ عَنْ مَالِك بْن أَنَس عَنْ ابْنِ شِهَابٍ أَنَّ عُمَرَ بْنَ عَبْدِ الْعَزِيزِ أَخَّرَ الصَّلَاةَ يَوْمًا فَدَخَلَ عَلَيْهِ عُرْوَةُ بْنُ الزُّبَيْرِ فَأَخْبَرَهُ أَنَّ الْمُغِيرَةَ بْنَ شُعْبَةَ أَخَّرَ الصَّلَاةَ يَوْمًا وَهُوَ بِالْكُوفَةِ فَدَخَلَ عَلَيْهِ أَبُو مَسْعُودٍ الْأَنْصَارِيُّ فَقَالَمَا هَذَا يَا مُغِيرَةُ أَلَيْسَ قَدْ عَلِمْتَ أَنَّ جِبْرِيلَ نَزَلَ فَصَلَّى فَصَلَّى رَسُولُ اللَّهِ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ ثُمَّ صَلَّى فَصَلَّى رَسُولُ اللَّهِ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ ثُمَّ صَلَّى فَصَلَّى رَسُولُ اللَّهِ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ ثُمَّ صَلَّى فَصَلَّى رَسُولُ اللَّهِ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ ثُمَّ صَلَّى فَصَلَّى رَسُولُ اللَّهِ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ ثُمَّ قَالَ بِهَذَا أُمِرْتُ فَقَالَ عُمَرُ بْنُ عَبْدِ الْعَزِيزِ اعْلَمْ مَا تُحَدِّثُ بِهِ يَا عُرْوَةُ أَوَ إِنَّ جِبْرِيلَ هُوَ الَّذِي أَقَامَ لِرَسُولِ اللَّهِ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ وَقْتَ الصَّلَاةِقَالَ عُرْوَةُ كَذَلِكَ كَانَ بَشِيرُ بْنُ أَبِي مَسْعُودٍ الْأَنْصَارِيُّ يُحَدِّثُ عَنْ أَبِيهِ قَالَ عُرْوَةُ وَلَقَدْ حَدَّثَتْنِي عَائِشَةُ زَوْجُ النَّبِيِّ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ أَنَّ رَسُولَ اللَّهِ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ كَانَ يُصَلِّي الْعَصْرَ وَالشَّمْسُ فِي حُجْرَتِهَا قَبْلَ أَنْ تَظْهَرَ",
                 "artinya": "Perawi berkata; Telah menceritakan kepadaku Al Laitsi dari Malik bin Anas dari [Ibnu Syihab]; Suatu hari Umar bin Abdul Aziz pernah mengakhirkan shalat, maka Urwah bin Az Zubair menemuinya dan memberitahukan kepadanya, bahwa suatu hari Mughirah bin Syu'bah mengakhirkan shalat ketika berada di Kufah, sehingga Ibnu Mas'ud menemuinya dan menegurnya; \"Apa maksudmu, hai Mughirah? bukankah kamu tahu, Jibril telah turun kemudian shalat dan Rasulullah shallallahu 'alaihi wasallam ikut shalat, kemudian dia shalat dan Rasulullah shallallahu 'alaihi wasallam ikut shalat, kemudian dia shalat dan Rasulullah shallallahu 'alaihi wasallam ikut shalat juga, kemudian dia shalat dan Rasulullah shallallahu 'alaihi wasallam ikut shalat. Lalu Jibril berkata; \"Seperti ini aku diperintahkan, \" maka Umar bin Abdul Aziz bertanya, \"perhatikanlah apa yang kamu riwayatkan hai Urwah! Apakah Jibril yang mengajarkan waktu shalat untuk Rasulullah shallallahu 'alaihi wasallam?\" [Urwah] menjawab; \" [Basyir bin Mas'ud al Anshari] menceritakan dari [Bapaknya] seperti itu juga\" kemudian [Urwah] menegaskan; dan telah menceritakan kepadaku [Aisyah], istri Nabi shallallahu 'alaihi wasallam, bahwa Rasulullah shallallahu 'alaihi wasallam shalat ashar ketika matahari masih di tempatnya belum tampak.",
                 "kitab_id": 6
             },
             {
                 "id": 40237,
                 "isi": "و حَدَّثَنِي يَحْيَى عَنْ مَالِك عَنْ زَيْدِ بْنِ أَسْلَمَ عَنْ عَطَاءِ بْنِ يَسَارٍأَنَّهُ قَالَ جَاءَ رَجُلٌ إِلَى رَسُولِ اللَّهِ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ فَسَأَلَهُ عَنْ وَقْتِ صَلَاةِ الصُّبْحِ قَالَ فَسَكَتَ عَنْهُ رَسُولُ اللَّهِ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ حَتَّى إِذَا كَانَ مِنْ الْغَدِ صَلَّى الصُّبْحَ حِينَ طَلَعَ الْفَجْرُ ثُمَّ صَلَّى الصُّبْحَ مِنْ الْغَدِ بَعْدَ أَنْ أَسْفَرَ ثُمَّ قَالَ أَيْنَ السَّائِلُ عَنْ وَقْتِ الصَّلَاةِ قَالَ هَأَنَذَا يَا رَسُولَ اللَّهِ فَقَالَ مَا بَيْنَ هَذَيْنِ وَقْتٌ",
                 "artinya": "Telah menceritakan kepadaku Yahya dari Malik dari [Zaid bin Aslam] dari ['Atho` bin Yasar], dia berkata; seorang laki-laki datang kepada Rasulullah shallallahu 'alaihi wasallam lalu bertanya tentang waktu shalat subuh. ('Atho` bin Yasar) berkata; lalu Rasulullah shallallahu 'alaihi wasallam diam, hingga esok harinya beliau shalat subuh ketika terbit fajar, besoknya beliau shalat ketika langit telah menguning. lalu (Rasulullah shallallahu 'alaihi wasallam) bertanya: \"Dimana laki-laki yang bertanya kepadaku tentang waktu shalat subuh?\" (Laki-laki itu) menjawab; \"Saya, Wahai Rasulullah, \" maka beliau bersabda: \" waktu shalat subuh diantara dua waktu ini.\"",
                 "kitab_id": 6
             },
             {
                 "id": 40238,
                 "isi": "و حَدَّثَنِي يَحْيَى عَنْ مَالِك عَنْ يَحْيَى بْنِ سَعِيدٍ عَنْ عَمْرَةَ بِنْتِ عَبْدِ الرَّحْمَنِ عَنْ عَائِشَةَ زَوْجِ النَّبِيِّ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ أَنَّهَا قَالَتْإِنْ كَانَ رَسُولُ اللَّهِ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ لَيُصَلِّي الصُّبْحَ فَيَنْصَرِفُ النِّسَاءُ مُتَلَفِّعَاتٍ بِمُرُوطِهِنَّ مَا يُعْرَفْنَ مِنْ الْغَلَسِ",
                 "artinya": "Telah menceritakan kepadaku Yahya dari Malik dari [Yahya bin Sa'id] dari ['Amrah binti Abdurrahman] dari [Aisyah] istri Nabi shallallahu 'alaihi wasallam dia berkata; \"ketika Rasulullah shallallahu 'alaihi wasallam selesai shalat subuh, kaum wanita keluar dengan keadaan tertutup dengan kain mereka, dan mereka masih tidak terinditifikasi karena gelap.\"",
                 "kitab_id": 6
             },
             {
                 "id": 40239,
                 "isi": "و حَدَّثَنِي عَنْ مَالِك عَنْ زَيْدِ بْنِ أَسْلَمَ عَنْ عَطَاءِ بْنِ يَسَارٍ وَعَنْ بُسْرِ بْنِ سَعِيدٍ وَعَنْ الْأَعْرَجِ كُلُّهُمْ يُحَدِّثُونَهُ عَنْ أَبِي هُرَيْرَةَأَنَّ رَسُولَ اللَّهِ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ قَالَ مَنْ أَدْرَكَ رَكْعَةً مِنْ الصُّبْحِ قَبْلَ أَنْ تَطْلُعَ الشَّمْسُ فَقَدْ أَدْرَكَ الصُّبْحَ وَمَنْ أَدْرَكَ رَكْعَةً مِنْ الْعَصْرِ قَبْلَ أَنْ تَغْرُبَ الشَّمْسُ فَقَدْ أَدْرَكَ الْعَصْرَ",
                 "artinya": "Telah menceritakan kepadaku dari Malik dari [Zaid bin Aslam] dari ['Atho` bin Yasar], [Busr bin Said] dan [Al A'raj], semuanya menceritakannya dari [Abu Hurairah], Rasulullah shallallahu 'alaihi wasallam bersabda: \"Barangsiapa mendapatkan satu raka'at shalat subuh sebelum matahari terbit, dia telah mendapatkan shalat subuh. Barangsiapa mendapatkan satu raka'at shalat Ashar sebelum matahari terbenam maka dia telah mendapatkan shalat ashar.\"",
                 "kitab_id": 6
             },
             {
                 "id": 40240,
                 "isi": "و حَدَّثَنِي عَنْ مَالِك عَنْ نَافِعٍ مَوْلَى عَبْدِ اللَّهِ بْنِ عُمَرَأَنَّ عُمَرَ بْنَ الْخَطَّابِ كَتَبَ إِلَى عُمَّالِهِ إِنَّ أَهَمَّ أَمْرِكُمْ عِنْدِي الصَّلَاةُ فَمَنْ حَفِظَهَا وَحَافَظَ عَلَيْهَا حَفِظَ دِينَهُ وَمَنْ ضَيَّعَهَا فَهُوَ لِمَا سِوَاهَا أَضْيَعُ ثُمَّ كَتَبَ أَنْ صَلُّوا الظُّهْرَ إِذَا كَانَ الْفَيْءُ ذِرَاعًا إِلَى أَنْ يَكُونَ ظِلُّ أَحَدِكُمْ مِثْلَهُ وَالْعَصْرَ وَالشَّمْسُ مُرْتَفِعَةٌ بَيْضَاءُ نَقِيَّةٌ قَدْرَ مَا يَسِيرُ الرَّاكِبُ فَرْسَخَيْنِ أَوْ ثَلَاثَةً قَبْلَ غُرُوبِ الشَّمْسِ وَالْمَغْرِبَ إِذَا غَرَبَتْ الشَّمْسُ وَالْعِشَاءَ إِذَا غَابَ الشَّفَقُ إِلَى ثُلُثِ اللَّيْلِ فَمَنْ نَامَ فَلَا نَامَتْ عَيْنُهُ فَمَنْ نَامَ فَلَا نَامَتْ عَيْنُهُ فَمَنْ نَامَ فَلَا نَامَتْ عَيْنُهُ وَالصُّبْحَ وَالنُّجُومُ بَادِيَةٌ مُشْتَبِكَةٌ",
                 "artinya": "Telah menceritakan kepadaku dari Malik dari [Nafi'] mantan budak Abdullah bin Umar; [Umar bin Al Khatthab] pernah menulis surat kepada para pegawainya, \"Menurutku yang paling penting dari urusan kalian adalah shalat. Barangsiapa yang menjaganya dan memeliharanya maka dia telah menjaga agamanya. Barangsiapa menyia-nyiakannya, maka amalan yang lainnya akan lebih terabaikan, \" lalu dia menulis; \"Hendaklah kalian shalat zhuhur ketika bayangan kalian sehasta hingga bayangan kalian seukuran persis dengan tubuh kalian. Hendaklah kalian shalat ashar ketika matahari masih tinggi dan putih jernih dengan ukuran perjalanan berkendara sekitar dua atau tiga farsakh sebelum matahari terbenam. laksanakanlah shalat maghrib ketika terbenamnya matahari, dan isya` ketika syafaq (mega merah di langit setelah terbenamnya matahari) telah hilang hingga sepertiga malam. Barangsiapa yang tidur, maka tidak terlelap matanya, barangsiapa yang tidur, tidak terlelap matanya. Dan laksanakanlah shalat subuh ketika bintang-bintang terlihat saling bercampur.\"",
                 "kitab_id": 6
             }
         ],
         "first_page_url": "http://localhost:8000/hadits/6/5?page=1",
         "from": 1,
         "last_page": 318,
         "last_page_url": "http://localhost:8000/hadits/6/5?page=318",
         "links": [
             {
                 "url": null,
                 "label": "pagination.previous",
                 "active": false
             },
             {
                 "url": "http://localhost:8000/hadits/6/5?page=1",
                 "label": 1,
                 "active": true
             },
             {
                 "url": "http://localhost:8000/hadits/6/5?page=2",
                 "label": 2,
                 "active": false
             },
             {
                 "url": "http://localhost:8000/hadits/6/5?page=3",
                 "label": 3,
                 "active": false
             },
             {
                 "url": "http://localhost:8000/hadits/6/5?page=4",
                 "label": 4,
                 "active": false
             },
             {
                 "url": "http://localhost:8000/hadits/6/5?page=5",
                 "label": 5,
                 "active": false
             },
             {
                 "url": "http://localhost:8000/hadits/6/5?page=6",
                 "label": 6,
                 "active": false
             },
             {
                 "url": "http://localhost:8000/hadits/6/5?page=7",
                 "label": 7,
                 "active": false
             },
             {
                 "url": "http://localhost:8000/hadits/6/5?page=8",
                 "label": 8,
                 "active": false
             },
             {
                 "url": "http://localhost:8000/hadits/6/5?page=9",
                 "label": 9,
                 "active": false
             },
             {
                 "url": "http://localhost:8000/hadits/6/5?page=10",
                 "label": 10,
                 "active": false
             },
             {
                 "url": null,
                 "label": "...",
                 "active": false
             },
             {
                 "url": "http://localhost:8000/hadits/6/5?page=317",
                 "label": 317,
                 "active": false
             },
             {
                 "url": "http://localhost:8000/hadits/6/5?page=318",
                 "label": 318,
                 "active": false
             },
             {
                 "url": "http://localhost:8000/hadits/6/5?page=2",
                 "label": "pagination.next",
                 "active": false
             }
         ],
         "next_page_url": "http://localhost:8000/hadits/6/5?page=2",
         "path": "http://localhost:8000/hadits/6/5",
         "per_page": "5",
         "prev_page_url": null,
         "to": 5,
         "total": 1587
     }
 }
                 </code></pre>
         </div>
 
         <div class="overflow-hidden content-section" id="content-search-hadits">
             <h2 id="search-hadits">search hadits</h2>
             <pre><code class="bash">
 # Here is a curl example
 curl {{ url('hadits/search?q=QUL YAA...') }}
                 </code></pre>
             <p>
                  url :<br>
                 <code class="higlighted">{{ url('hadits/search') }}</code>
             </p>
             <br>
             <pre><code class="json">
 Result example :
 
 {
     "status": 1,
     "kitab": "Ad-Darimi",
     "data": {
         "id": 34054,
         "isi": "أَخْبَرَنَا سَعِيدُ بْنُ عَامِرٍ عَنْ هِشَامٍ عَنْ مُحَمَّدٍ عَنْ عَائِشَةَ قَالَتْ كَانَ رَسُولُ اللَّهِ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ يُخْفِي مَا يَقْرَأُ فِيهِمَا وَذَكَرَتْ قُلْ يَا أَيُّهَا الْكَافِرُونَ وَقُلْ هُوَ اللَّهُ أَحَدٌ قَالَ سَعِيدٌ فِي رَكْعَتَيْ الْفَجْرِ",
         "artinya": "Telah mengabarkan kepada kami [Sa'id? bin 'Amir] dari [Hisyam] dari [Muhammad] dari [Aisyah] ia berkata, \"Rasulullah shallallahu 'alaihi wasallam tidak mengeraskan apa yang beliau baca pada keduanya. Dan Aisyah menyebutkan; QUL YAA AYYUHAL KAAFIRUUN dan QUL HUWALLAAHU AHAD.\" Sa'id berkata, \"Yakni dalam shalat dua rakaat fajar.\"",
         "kitab_id": 4
     }
 }
                 </code></pre>
                 <h4>QUERY PARAMETERS</h4>
             <table>
                 <thead>
                 <tr>
                     <th>Field</th>
                     <th>Type</th>
                     <th>Description</th>
                 </tr>
                 </thead>
                 <tbody>
                 <tr>
                     <td>q</td>
                     <td>String</td>
                     <td>Your query.</td>
                 </tr>
                 </tbody>
             </table>
         </div>
 
         <!-- <div class="overflow-hidden content-section" id="content-errors">
             <h2 id="errors">Errors</h2>
             <p>
                 The Westeros API uses the following error codes:
             </p>
             <table>
                 <thead>
                 <tr>
                     <th>Error Code</th>
                     <th>Meaning</th>
                 </tr>
                 </thead>
                 <tbody>
                 <tr>
                     <td>X000</td>
                     <td>
                         Some parameters are missing. This error appears when you don't pass every mandatory parameters.
                     </td>
                 </tr>
                 <tr>
                     <td>X001</td>
                     <td>
                         Unknown or unvalid <code class="higlighted">secret_key</code>. This error appears if you use an unknow API key or if your API key expired.
                     </td>
                 </tr>
                 <tr>
                     <td>X002</td>
                     <td>
                         Unvalid <code class="higlighted">secret_key</code> for this domain. This error appears if you use an  API key non specified for your domain. Developper or Universal API keys doesn't have domain checker.
                     </td>
                 </tr>
                 <tr>
                     <td>X003</td>
                     <td>
                         Unknown or unvalid user <code class="higlighted">token</code>. This error appears if you use an unknow user <code class="higlighted">token</code> or if the user <code class="higlighted">token</code> expired.
                     </td>
                 </tr>
                 </tbody>
             </table>
         </div> -->
     </div>
     <div class="content-code"></div>
 </div>
 <!-- Github Corner Ribbon - to remove (Ribbon created with : http://tholman.com/github-corners/ )-->
 <a href="https://github.com/ticlekiwi/API-Documentation-HTML-Template" class="github-corner" aria-label="View source on Github" title="View source on Github"><svg width="80" height="80" viewBox="0 0 250 250" style="z-index:99999; fill:#70B7FD; color:#fff; position: fixed; top: 0; border: 0; right: 0;" aria-hidden="true"><path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path><path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path><path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path></svg></a><style>.github-corner:hover .octo-arm{animation:octocat-wave 560ms ease-in-out}@keyframes octocat-wave{0%,100%{transform:rotate(0)}20%,60%{transform:rotate(-25deg)}40%,80%{transform:rotate(10deg)}}@media (max-width:500px){.github-corner:hover .octo-arm{animation:none}.github-corner .octo-arm{animation:octocat-wave 560ms ease-in-out}}</style>
 <!-- END Github Corner Ribbon - to remove -->
 <script src="{{ url('js/script.js') }}"></script>
 </body>
 </html>