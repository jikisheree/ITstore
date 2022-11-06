<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $products = [[
            'categoryID'=> 1,
            'Pname' => 'VIEWSONIC MONITOR VA2432-H (IPS 75 Hz)',
            'description' => 'Samsung CRG50 24 Curved Gaming Monitor 144Hz',
            'image' => '\assets\image\monitor1.jpg',
            'stock' => 999,
            'price' => 2800,
            'MSRP' => 3990
        ],
        [
            'categoryID'=> 1,
            'Pname' => 'MSI MONITOR MP243W (24 IPS 75 Hz White)',
            'description' => 'Samsung CRG50 24 Curved Gaming Monitor 144Hz',
            'image' => '\assets\image\monitor1.jpg',
            'stock' => 999,
            'price' => 3000,
            'MSRP' => 4390
        ],
        [
            'categoryID'=> 1,
            'Pname' => 'SAMSUNG MONITOR LF24T350FHEXXT (IPS 75 Hz)',
            'description' => 'Samsung CRG50 24 Curved Gaming Monitor 144Hz',
            'image' => '\assets\image\monitor1.jpg',
            'stock' => 999,
            'price' => 3000,
            'MSRP' => 4400
        ],
        [
            'categoryID'=> 1,
            'Pname' => 'ACER MONITOR Nitro Gaming VG252QXbmiipx (IPS 240Hz G-SYNC)',
            'description' => 'Samsung CRG50 24 Curved Gaming Monitor 144Hz',
            'image' => '\assets\image\monitor1.jpg',
            'stock' => 999,
            'price' => 6000,
            'MSRP' => 7990
        ],
        [
            'categoryID'=> 1,
            'Pname' => 'ASUS MONITOR ZenScreen MB16ACE 15.6 (IPS 60 Hz)',
            'description' => 'Samsung CRG50 24 Curved Gaming Monitor 144Hz',
            'image' => '\assets\image\monitor1.jpg',
            'stock' => 999,
            'price' => 7000,
            'MSRP' => 8990
        ],
        [
            'categoryID'=> 1,
            'Pname' => 'LG MONITOR 34WP65G-B (IPS 75Hz HDR USB-C UltraWide)',
            'description' => 'Samsung CRG50 24 Curved Gaming Monitor 144Hz',
            'image' => '\assets\image\monitor1.jpg',
            'stock' => 999,
            'price' => 8500,
            'MSRP' => 11500
        ],
        [
            'categoryID'=> 1,
            'Pname' => 'MSI MONITOR OPTIX G32CQ4 (VA 2K 165Hz CURVED) ',
            'description' => 'Samsung CRG50 24 Curved Gaming Monitor 144Hz',
            'image' => '\assets\image\monitor1.jpg',
            'stock' => 999,
            'price' => 8000,
            'MSRP' => 10900
        ],
        [
            'categoryID'=> 1,
            'Pname' => 'XIAOMI Mi Curved Gaming Monitor (WQHD 144Hz)',
            'description' => 'Samsung CRG50 24 Curved Gaming Monitor 144Hz',
            'image' => '\assets\image\monitor1.jpg',
            'stock' => 999,
            'price' => 10000,
            'MSRP' => 12900
        ],
        [
            'categoryID'=> 1,
            'Pname' => 'SKYWORTH MONITOR Ultrawide F34G3Q (IPS 144Hz HDR)',
            'description' => 'Samsung CRG50 24 Curved Gaming Monitor 144Hz',
            'image' => '\assets\image\monitor1.jpg',
            'stock' => 999,
            'price' => 15000,
            'MSRP' => 19900
        ],
        [
            'categoryID'=> 1,
            'Pname' => 'ACER MONITOR NITRO GAMING EI491CRPBMIIIPX (VA 144Hz)',
            'description' => 'Samsung CRG50 24 Curved Gaming Monitor 144Hz',
            'image' => '\assets\image\monitor1.jpg',
            'stock' => 999,
            'price' => 20000,
            'MSRP' => 24990
        ],
        [
            'categoryID'=> 4,
            'Pname' => 'headset',
            'description' => 'headset',
            'image' => '\assets\image\C_headset.png',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],
        [
            'categoryID'=> 3,
            'Pname' => 'keyboard',
            'description' => 'keyboard',
            'image' => '\assets\image\C_keyboard.jpg',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],
        [
            'categoryID'=> 5,
            'Pname' => 'microphone',
            'description' => 'microphone',
            'image' => '\assets\image\C_microphone.jpg',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],
        [
            'categoryID'=> 1,
            'Pname' => 'monitor',
            'description' => 'monitor',
            'image' => '\assets\image\C_monitor.jpg',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],
        [
            'categoryID'=> 2,
            'Pname' => 'mouse',
            'description' => 'mouse',
            'image' => '\assets\image\C_mouse.jpg',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],[
            'categoryID'=> 6,
            'Pname' => 'speaker',
            'description' => 'speaker',
            'image' => '\assets\image\C_speaker.jpg',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],
        //Product category : Headset
        [
            'categoryID'=> 4,
            'Pname' => 'HEADSET NUBWO GAMER X98 7.1 (BLACK)',
            'description' => "Gaming headphones that give your gaming experience more realistic with 7.1 virtual surround sound system that simulates in-game sound in all directions and with 50 mm speakers that deliver powerful and clear sound. Will not let you miss the chance to win the game for sure. The headphones are beautifully designed, emphasizing elegance, decorated with Spectrum LED lights, there is a rolling switch to adjust the volume on the side of the headphones with a short microphone that picks up the sound around. direction Flexible and durable headband for added comfort.",
            'image' => '\assets\image\headset\headset1.jpg',
            'stock' => 999,
            'price' => 200,
            'MSRP' => 450
        ],[
            'categoryID'=> 4,
            'Pname' => 'HEADSET ONIKUMA X15 PRO RGB (BLACK)',
            'description' => "1.The earphone adopts light material design, the double-head beam design is light and comfortable, focusing on the game wearing experience, and the head beam is cool and RGB light guide bar shines\n
            2.Use soft earmuffs, sweat-proof and sweat-proof, wear cool in the hot summer, and it is comfortable to wear for a long time. The adjustable headband is suitable for different head shapes.\n
            3.Highly sensitive microphone makes sound transmission more accurate, clearer andsmoother\n
            4.The ear shell is equipped with volume control keys and microphone switch keys\n
            5.Using 50mm super large sound unit, three-frequency balance, accurate positioning,left and right stereo speakers, to achieve three-dimensional sound quality.",
            'image' => '\assets\image\headset\headset2.jpg',
            'stock' => 999,
            'price' => 400,
            'MSRP' => 750
        ],[
            'categoryID'=> 4,
            'Pname' => 'HEADSET ONIKUMA X15 PRO RGB AUX 3.5 (PINK)',
            'description' => "ONIKUMA X15 PRO GAMING HEADSET : ONIKUMA X15 PRO Gaming Headset adopts unique transparent luminous head beam design to give the most gorgeous lighting effects when playing games, which will create a real battlefield surround players. The 50mm oversized speaker units and graphene diaphragm ensure perfect performance on Treble, Mid and Bass to deliver the truest sound. Ultimate pursuit of comfort: 268g lightweight design, breathable all-inclusive earmuffs, adaptive head beam, all those sweet design will make sure your comfort in long time wearing.\n
            VIRTUAL SURROUND SOUND : Accurate sound positioning, even in the face of complex battlefields, it can quickly locate the enemy's position. Whether it's a deafening explosion or silent footsteps, it can be truly captured, bringing a shocking gaming experience\n
            DYNAMIC RAINBOW LIGHT : Aluminum-steel mixed head beam, transparent head beam shell, with breathing gradient lighting effect, releasing gorgeous lighting effects",
            'image' => '\assets\image\headset\headset3.jpg',
            'stock' => 999,
            'price' => 500,
            'MSRP' => 750
        ],[
            'categoryID'=> 4,
            'Pname' => 'HEADSET FANTECH VALOR MH86 SPACE EDITION (WHITE)',
            'description' => "Fantech VALOR MH86 SPACE EDITION is one kind of Multi Platform Gaming Headset. It is flexible and incredibly durable. it has been tested extensively to withstand the rigors of pro-gaming. This gaming headset designed with Adjustable Steel Headband, Foldable Mircrophone, Adjustable Earcup Angle. The gaming headphone is Multi-Platform Compatibility type. Here, the microphone is featured with Microphone Frequency Response 100-10,000Hz, Microphone Pattern Omni-directional, Sensitivity -42dB, Impedance 2200 Ohm, Microphone Noise Cancellation, Foldable Microphone Design and Microphone Mute Toggle On Remote Control. This headphone desiogned with With only 280gr weight. but still flexible and incredibly durable. it has been tested extensively to withstand the rigors of pro-gaming. In this headphone, the speakers featured with Speaker Driver 50mm, Headset Frequency Response 20-20,000Hz, Headset Sensitivity 110dB, Headset Impedance 32 Ohm, Headset Total Harmonic Distortion <5%, Headset Volume Control On Remote control. This Headphone supports with PC, Playstation, Xbox, Mobile and Mac. The latest Fantech VALOR MH86 SPACE EDITION Gaming Headphone has 01 year warranty.",
            'image' => '\assets\image\headset\headset4.jpg',
            'stock' => 999,
            'price' => 500,
            'MSRP' => 790
        ],[
            'categoryID'=> 4,
            'Pname' => 'HEADSET RAZER BLACKSHARK V2 X (GREEN)',
            'description' => "RAZER™ TRIFORCE 50MM DRIVERS : Our all-new patented design allows our engineers to custom tune each driver as though there are three—allowing for the individual replications of high, mid and low audio frequencies to deliver on richer trebles, brighter sound and powerful bass.\n
            RAZER™ HYPERCLEAR CARDIOID MIC : Offering greater speech pickup and noise cancellation, the bendable mic on this lightweight esports headset has an optimized microphone housing which adopts a more open design for minimal obstruction—resulting in improved clarity for a closer recreation of your voice.\n
            ADVANCED PASSIVE NOISE CANCELLATION : From cheering crowds to the hum of your rig, shut noise out and enjoy uninterrupted focus with special closed earcups that fully cover your ears, aided by plush cushions that form a closer seal for greater sound isolation.',
            'image' => '\assets\image\headset\headset5.jpg",
            'stock' => 999,
            'price' => 1200,
            'MSRP' => 1890
        ],[
            'categoryID'=> 4,
            'Pname' => 'WIRELESS HEADSET HyperX CLOUD STINGER CORE WIRELESS',
            'description' => "Ready to Play: Wireless + DTS Headphone:X Spatial Audio : Experience wireless freedom and DTS® Headphone:X®[1] spatial audio at a price that's hard to beat. The HyperX Cloud Stinger Core is a lightweight gaming headset with great sound quality in a durable, reliable package. The noise-cancelling microphone lets you chat with your friends and helps ensure that you'll have clear communication with your squad. Cloud Stinger Core also features onboard controls so you can adjust headphone volume from the earcup and a convenient swivel-to-mute mic.\n
            Gaming-grade wireless :  Provides freedom from cords with its solid 2.4GHz gaming-grade wireless connection.\n
            DTS® Headphone:X®[1] Spatial Audio : DTS Spatial Audio will help amp up your audio advantage and immersion with its precise sound localization and virtual 3D sound stage.\n
            Lightweight comfort : Game longer with this lightweight headset and its soft, breathable ear cushions.\n
            Immersive in-game audio : The closed-cup design will help block out distractions while the 40mm drivers and enhanced bass keep you immersed in your game.\n
            Adjustable steel sliders : Built to be reliable with sturdy steel sliders that adjust to provide a comfortable fit.\n
            Onboard audio controls : Convenient onboard audio controls so you can adjust volume without having to dig into system menus.\n
            Swivel-to-mute noise-cancelling mic : The flexible, noise-cancelling mic will give you a clear line of communication with your squadmates and can be easily muted simply by swiveling it upwards.
            ",
            'image' => '\assets\image\headset\headset6.jpg',
            'stock' => 999,
            'price' => 1100,
            'MSRP' => 2090
        ],[
            'categoryID'=> 4,
            'Pname' => 'HEADSET RAZER KAIRA X FOR XBOX (WHITE)',
            'description' => "The Razer Kaira X for Xbox Gaming Headphone, a wired over-ear gaming headset dedicated to the Xbox console, uses 50 mm Razer™ TriForce drivers to deliver true-to-life sound. High, medium, low, well made, overpriced.\n
            The headphones are comfortable to wear. Not too heavy for the head with a total weight of only 283 grams. The ear cups use FlowKnit memory foam material that is soft to the touch. good ventilation does not accumulate sweat The headband area can be adjusted to fit the user's body.\n
            In addition to audio performance, the accompanying RAZER™ HYPERCLEAR CARDIOID MIC is equally good. It is a microphone that picks up sound from the front. with reduced noise from the back and sides Provides smooth and uninterrupted coordination in the game The Razer Kaira X for Xbox Gaming Headphone has a control panel on the left earcup. You can adjust the volume and turn the mic on and off directly. Anyone who is looking for Xbox console gaming headphones, especially with full sound and quality microphone.",
            'image' => '\assets\image\headset\headset7.jpg',
            'stock' => 999,
            'price' => 1500,
            'MSRP' => 2490
        ],[
            'categoryID'=> 4,
            'Pname' => 'BLUETOOTH HEADSET RAZER KRAKEN BT (KITTY EDITION) (QUARTZ)',
            'description' => "KITTY EARS AND EARCUPS POWERED BY RAZER CHROMA RGB : The style possibilities are endless—with 16.8 million colors and a suite of lighting effects, you'll be able to customize the headset to your heart's content\n
            BLUETOOTH 5.0 : When not in Gaming Mode, its wireless connection remains just as stable and uses less power—meaning the headset can last up to 20 hours with lighting on, or up to 50 hours with the lighting off\n.
            40MS LOW LATENCY CONNECTION : Activate Gaming Mode to boost the headset's wireless performance during competitive games, and be quicker to aim or react with audio and video that's even more in sync.\n
            CUSTOM-TUNED 40MM DRIVERS : At its core, the headset provides a rich audio experience that increases your gaming enjoyment, pushing out clear trebles and midrange as well as deep, impactful bass.\n
            BEAMFORMING MICROPHONE : With a sweet spot for your voice that's designed to pick up less noise from every other direction, the mic has no problems helping you sound as good as you look.",
            'image' => '\assets\image\headset\headset8.jpg',
            'stock' => 999,
            'price' => 2000,
            'MSRP' => 3590
        ],[
            'categoryID'=> 4,
            'Pname' => 'WIRELESS HEADSET CORSAIR VIRTUOSO RGB WIRELESS (CARBON)',
            'description' => 'COSAIR VIRTUOSO RGB WIRELESS WITH 7.1 SURROUND SOUND : Fusing high-fidelity sound with a broadcast-grade microphone to create the only gaming headset you will ever need.\n
            UNCOMPROMISING SOUND QUALITY : Power by a hand-matched pair of precisely tuned 50mm high-density neodymium speaker drivers\n
            HOURS OF LISTENING COMFORT : Play without fatigue thanks to premium memory foam earpads and a pillow-soft headband\n
            LIGHTWEIGHT : MACHINED ALUMINUM : For the long-lasting durability and comfort to wear the VIRTUOSO RGB Wireless anywhere\n
            DISCORD CERTIFIED : Throughly tested microphone and audio drivers for clear communication and outstanding sound',
            'image' => '\assets\image\headset\headset9.jpg',
            'stock' => 999,
            'price' => 4500,
            'MSRP' => 6790
        ],[
            'categoryID'=> 4,
            'Pname' => 'WIRELESS HEADSET CORSAIR VIRTUOSO RGB WIRELESS HIGH-FIDELITY GAMING HEADSET-PERL',
            'description' => 'The CORSAIR VIRTUOSO RGB Wireless delivers a high-fidelity audio experience, all-day comfort from its premium memory foam earpads, and hyper-fast connectivity with SLIPSTREAM WIRELESS technology.',
            'image' => '\assets\image\headset\headset10.jpg',
            'stock' => 999,
            'price' => 4500,
            'MSRP' => 6790
        ],
        //Product category : mic
        [
            'categoryID'=> 5,
            'Pname' => 'MICROPHONE NUBWO M31 SCYTHER SPECTRUM DESKTOP',
            'description' => 'Nubwo M31 is a desktop gaming microphone. Distinctive with a cool design in the style of gaming gear with RGB lighting on the mic base, which is designed to be a built-in smartphone stand. Can be placed both vertically and horizontally This mic is a dynamic type. Get the sound straight ahead Sound receiving frequency range 100 to 10,000 Hz, comes with windproof sponge. Provides clear sound quality, fine details, responds to communication while playing games quickly.In addition, the mic stem area is flexible and free to adjust and there is a mute button on the mic for muting. This mic connects via USB cable and is easy to use with both Windows and MacOS computers. It is an ideal gaming mic for entry-level gamers who are looking for their first mic to use. Good quality at an affordable price. The basic functions are complete. Cool design meets gaming needs',
            'image' => '\assets\image\microphone\mic1.jpg',
            'stock' => 999,
            'price' => 120,
            'MSRP' => 240
        ],[
            'categoryID'=> 5,
            'Pname' => 'USB MICROPHONE ARROW X YDK-M1',
            'description' => 'keyboard',
            'image' => '\assets\image\microphone\mic2.jpg',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],[
            'categoryID'=> 5,
            'Pname' => 'MICROPHONE HyperX SOLOCAST',
            'description' => 'keyboard',
            'image' => '\assets\image\microphone\mic3.jpg',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],[
            'categoryID'=> 5,
            'Pname' => 'MICROPHONE SARAMONIC SR-MV2000',
            'description' => 'keyboard',
            'image' => '\assets\image\microphone\mic4.jpg',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],[
            'categoryID'=> 5,
            'Pname' => 'MICROPHONE HYPERX QUADCAST S WHITE',
            'description' => 'keyboard',
            'image' => '\assets\image\microphone\mic5.jpg',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],[
            'categoryID'=> 5,
            'Pname' => 'MICROPHONE HYPERX DUOCAST USB',
            'description' => 'keyboard',
            'image' => '\assets\image\microphone\mic6.jpg',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],[
            'categoryID'=> 5,
            'Pname' => 'USB MICROPHONE BLUE YETI NANO (SHADOW GREY)',
            'description' => 'keyboard',
            'image' => '\assets\image\microphone\mic7.jpg',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],[
            'categoryID'=> 5,
            'Pname' => 'USB MICROPHONE BLUE YETI NANO (MIDNIGHT BLUE)',
            'description' => 'keyboard',
            'image' => '\assets\image\microphone\mic8.jpg',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],[
            'categoryID'=> 5,
            'Pname' => 'MICROPHONE HYPERX PROCAST XLR',
            'description' => 'keyboard',
            'image' => '\assets\image\microphone\mic9.jpg',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],[
            'categoryID'=> 5,
            'Pname' => 'MICROPHONE SHURE MV7 (SILVER)',
            'description' => 'keyboard',
            'image' => '\assets\image\microphone\mic10.jpg',
            'stock' => 999,
            'price' => 4000,
            'MSRP' => 4500
        ],

        ];
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}




