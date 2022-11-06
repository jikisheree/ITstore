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
    
        $products = [
        
        //Product category : Monitor
        [
            'categoryID'=> 1,
            'Pname' => 'VIEWSONIC MONITOR VA2432-H (IPS 75 Hz)',
            'description' => '•	Size: 24.0 • Panel type: IPS • Max resolution: 1920 x 1080
            • Widescreen: 16:9 • Refresh rate: 75 Hz • Ports: VGA/HDMI • Respond time: 4 ms',
            'image' => '\assets\image\monitor\(1).jpg',
            'stock' => 999,
            'price' => 3990
        ],
        [
            'categoryID'=> 1,
            'Pname' => 'MSI MONITOR MP243W (24 IPS 75 Hz White)',
            'description' => '•	Size: 23.8 • Panel type: IPS • Max resolution: 1920 x 1080
            • Widescreen: 16:9 • Refresh rate: 75 Hz • Ports: Display Port/HDMI • Respond time: 5 ms',
            'image' => '\assets\image\monitor\(2).jpg',
            'stock' => 999,
            'price' => 4390
        ],
        [
            'categoryID'=> 1,
            'Pname' => 'SAMSUNG MONITOR LF24T350FHEXXT (IPS 75 Hz)',
            'description' => '•	Size: 24.0 • Panel type: IPS • Max resolution: 1920 x 1080
            • Widescreen: 16:9 • Refresh rate: 75 Hz • Ports: VGA/HDMI • Respond time: 5 ms',
            'image' => '\assets\image\monitor\(3).png',
            'stock' => 999,
            'price' => 4400
        ],
        [
            'categoryID'=> 1,
            'Pname' => 'ACER MONITOR Nitro Gaming VG252QXbmiipx (IPS 240Hz G-SYNC)',
            'description' => '•	Size: 24.5 • Panel type: IPS • Max resolution: 1920 x 1080
            • Widescreen: 16:9 • Refresh rate: 240 Hz • Ports: Display Port/HDMI/SPK/ Audio out • Respond time: 5 ms',
            'image' => '\assets\image\monitor\(4).jpg',
            'stock' => 999,
            'price' => 7990
        ],
        [
            'categoryID'=> 1,
            'Pname' => 'ASUS MONITOR ZenScreen MB16ACE 15.6 (IPS 60 Hz)',
            'description' => '•	Size: 15.6 • Panel type: IPS • Max resolution: 1920 x 1080
            • Widescreen: 16:9 • Refresh rate: 60 Hz • Ports: USB-C/PC Audio input • Respond time: 5 ms',
            'image' => '\assets\image\monitor\(5).jpg',
            'stock' => 999,
            'price' => 8990
        ],
        [
            'categoryID'=> 1,
            'Pname' => 'LG MONITOR 34WP65G-B (IPS 75Hz HDR USB-C UltraWide)',
            'description' => '•	Size: 34.0 • Panel type: IPS • Max resolution: 2560 x 1080
            • Widescreen: 21:9 • Refresh rate: 75 Hz • Ports: Display Port/HDMI/USB-C/ Headphone out • Respond time: 1 ms',
            'image' => '\assets\image\monitor\(6).png',
            'stock' => 999,
            'price' => 11500
        ],
        [
            'categoryID'=> 1,
            'Pname' => 'MSI MONITOR OPTIX G32CQ4 (VA 2K 165Hz CURVED) ',
            'description' => '•	Size: 31.5 • Panel type: VA Curved • Max resolution: 2560 x 1440
            • Widescreen: 16:9 • Refresh rate: 165 Hz • Ports: Display Port/HDMI • Respond time: 1 ms',
            'image' => '\assets\image\monitor\(7).png',
            'stock' => 999,
            'price' => 10900
        ],
        [
            'categoryID'=> 1,
            'Pname' => 'XIAOMI Mi Curved Gaming Monitor (WQHD 144Hz)',
            'description' => '•	Size: 34.0 • Panel type: Curved • Max resolution: 3440 x 1440
            • Widescreen: 21:9 • Refresh rate: 144 Hz • Ports: Display Port/HDMI • Respond time: 4 ms',
            'image' => '\assets\image\monitor\(8).jpg',
            'stock' => 999,
            'price' => 12900
        ],
        [
            'categoryID'=> 1,
            'Pname' => 'SKYWORTH MONITOR Ultrawide F34G3Q (IPS 144Hz HDR)',
            'description' => '•	Size: 34.0 • Panel type: IPS • Max resolution: 3440 x 1440
            • Widescreen: 21:9 • Refresh rate: 144 Hz • Ports: VGA/HDMI • Respond time: 1 ms',
            'image' => '\assets\image\monitor\(9).png',
            'stock' => 999,
            'price' => 19900
        ],
        [
            'categoryID'=> 1,
            'Pname' => 'ACER MONITOR NITRO GAMING EI491CRPBMIIIPX (VA 144Hz)',
            'description' => '•	Size: 49.0 • Panel type: VA curved • Max resolution: 3840 x 1440
            • Widescreen: 32:9 • Refresh rate: 120 Hz • Ports: Display Port/HDMI • Respond time: 4 ms',
            'image' => '\assets\image\monitor\(10).jpg',
            'stock' => 999,
            'price' => 24990
        ],

        //Product category : Mouse
        [
            'categoryID'=> 2,
            'Pname' => 'MOUSE DELL OPTICAL MS116 (BLACK)',
            'description' => '•	Interface: USB Cable (1.8 m) • Resolution: 1000 dpi • Buttons: 3 buttons • Sensing: Optical',
            'image' => '\assets\image\mouse\mouse(1).jpg',
            'stock' => 999,
            'price' => 130
        ],
        [
            'categoryID'=> 2,
            'Pname' => 'MOUSE NUBWO X7S RGB (WHITE)',
            'description' => '•	Interface: USB Cable (1.8 m) • Resolution: 1000 dpi • Buttons: 3 buttons • Sensing: Optical',
            'image' => '\assets\image\mouse\mouse(2).jpg',
            'stock' => 999,
            'price' => 389
        ],
        [
            'categoryID'=> 2,
            'Pname' => 'MOUSE RAPOO EV200 (BLACK)',
            'description' => '•	Interface: USB Cable (1.5 m) • Resolution: 1600 dpi • Buttons: 3 buttons • Sensing: Optical',
            'image' => '\assets\image\mouse\mouse(3).jpg',
            'stock' => 999,
            'price' => 389
        ],
        [
            'categoryID'=> 2,
            'Pname' => 'WIRELESS MOUSE LOGITECH M331 WIRELESS SILENT PLUS (BLACK)',
            'description' => '•	Interface: USB Wireless 2.4 GHz • Resolution: 1000 dpi • Buttons: 3 buttons • Sensing: Optical',
            'image' => '\assets\image\mouse\mouse(4).jpg',
            'stock' => 999,
            'price' => 590
        ],
        [
            'categoryID'=> 2,
            'Pname' => 'MOUSE MSI CLUTCH GM11 (BLACK-RGB)',
            'description' => '•	Interface: USB Cable (1.8 m) • Resolution: 5000 dpi • Buttons: 6 buttons • Sensing: Optical',
            'image' => '\assets\image\mouse\mouse(5).jpg',
            'stock' => 999,
            'price' => 850
        ],
        [
            'categoryID'=> 2,
            'Pname' => 'MOUSE ASUS ROG GLADIUS II RGB',
            'description' => '•	Interface: USB Cable (2.0 m) • Resolution: 12000 dpi • Buttons: 7 buttons • Sensing: Optical',
            'image' => '\assets\image\mouse\mouse(6).jpg',
            'stock' => 999,
            'price' => 1590
        ],
        [
            'categoryID'=> 2,
            'Pname' => 'WIRELESS MOUSE MICROSOFT SCULPT ERGONOMIC (MCS-L6V-00006)',
            'description' => '•	Interface: USB Wireless 2.4 GHz • Resolution: 10000 dpi • Buttons: 7 buttons • Sensing: BlueTrack',
            'image' => '\assets\image\mouse\mouse(7).jpg',
            'stock' => 999,
            'price' => 1790
        ],
        [
            'categoryID'=> 2,
            'Pname' => 'WIRELESS MOUSE CORSAIR HARPOON RGB (CH-9311011-AP)',
            'description' => '•	Interface: USB cable (1.8 m)/Wireless 2.4 GHz and Bluetooth 5.0 • Resolution: 10000 dpi • Buttons: 6 button • Sensing: Optical',
            'image' => '\assets\image\mouse\mouse(8).jpg',
            'stock' => 999,
            'price' => 1990
        ],
        [
            'categoryID'=> 2,
            'Pname' => 'MICROSOFT BLUETOOTH ARC TOUCH MOUSE (LILAC-RGB)(MCS-ELG-00022)',
            'description' => '•	Interface: USB Wireless 2.4 GHz and Bluetooth 5.0 •	Resolution: 1000 dpi • Buttons: 6 buttons • Sensing: Optical',
            'image' => '\assets\image\mouse\mouse(9).jpg',
            'stock' => 999,
            'price' => 2690
        ],
        [
            'categoryID'=> 2,
            'Pname' => 'GLORIOUS MOUSE MODEL O WIRELESS (MATTE WHITE-RGB)',
            'description' => '•	Interface: USB cable (2 m) • Resolution: 19000 dpi • Buttons: 6 buttons • Sensing: Glorious BAMF Sensor',
            'image' => '\assets\image\mouse\mouse(10).png',
            'stock' => 999,
            'price' => 3590
        ],

        //Product category : Keyboard
        [
            'categoryID'=> 3,
            'Pname' => 'HP USB GAMING KEYBOARD K110 BLACK',
            'description' => '•	Interface: USB Cable (1.8 m) • Keys: 104 keys • Backlighting: RGB
            • Numpad: yes',
            'image' => '\assets\image\keyboard\kb(1).jpg',
            'stock' => 999,
            'price' => 390
        ],
        [
            'categoryID'=> 3,
            'Pname' => 'NUBWO USB KEYBOARD GAMING (NK-18 SAVAGE) WHITE',
            'description' => '•	Interface: USB Cable (1.7 m) • Keys: 104 keys • Backlighting: RGB
            • Numpad: yes',
            'image' => '\assets\image\keyboard\kb(2).jpg',
            'stock' => 999,
            'price' => 429
        ],
        [
            'categoryID'=> 3,
            'Pname' => 'LONGITECH WIRELESS KEYBOARD K375S BLACK',
            'description' => '•	Interface: USB Wireless 2.4 GHz • Keys: 101 keys • Backlighting: no
            • Numpad: yes •	Notice: Waterproof',
            'image' => '\assets\image\keyboard\kb(3).jpg',
            'stock' => 999,
            'price' => 710
        ],
        [
            'categoryID'=> 3,
            'Pname' => 'OKER BLUETOOTH MULTI-DEVICE KEYBOARD (K-510) BLACK/WHITE ',
            'description' => '•	Interface: Bluetooth • Keys: 80 keys • Backlighting: RGB
            • Numpad: no • Notice: Multi-device connectable(3 devices)',
            'image' => '\assets\image\keyboard\kb(4).png',
            'stock' => 999,
            'price' => 890
        ],
        [
            'categoryID'=> 3,
            'Pname' => 'MOFII BLUETOOTH KEYBOARD (COTTON CANDY) A0144442',
            'description' => '•	Interface: Bluetooth • Keys: 84 keys • Backlighting: no
            • Numpad: no',
            'image' => '\assets\image\keyboard\kb(5).png',
            'stock' => 999,
            'price' => 1290
        ],
        [
            'categoryID'=> 3,
            'Pname' => 'MICROSOFT KEYBOARD WIRELESS (ALL-IN-ONE) BLACK N9Z-00027',
            'description' => '•	Interface: USB Wireless 2.4 GHz • Keys: 104 keys • Backlighting: no
            • Numpad: no • Notice: touchpad-included',
            'image' => '\assets\image\keyboard\kb(6).png',
            'stock' => 999,
            'price' => 1390
        ],
        [
            'categoryID'=> 3,
            'Pname' => 'SteelSeries GAMING KEYBOARD Mechanical Apex 5 Black',
            'description' => '•	Interface: USB Cable • Keys: 104 keys • Backlighting: RGB
            • Numpad: yes •	Notice: Software SteelSeries Engine 3.15+/Anti-Ghosting/Dynamic Per Key RGB Illumination',
            'image' => '\assets\image\keyboard\kb(7).jpg',
            'stock' => 999,
            'price' => 3390
        ],
        [
            'categoryID'=> 3,
            'Pname' => 'KEYCHRON GAMING KEYBOARD K4 V.2 Wireless Mechanical Black-grey',
            'description' => '•	Interface: Bluetooth 5.1 • Keys: 100 keys • Backlighting: RGB
            • Numpad: yes •	Notice: Multi-device connectable(3 devices)',
            'image' => '\assets\image\keyboard\kb(8).png',
            'stock' => 999,
            'price' => 4390
        ],
        [
            'categoryID'=> 3,
            'Pname' => 'HP USB GAMING KEYBOARD K110 BLACK',
            'description' => '•	Interface: USB Wireless 2.4 GHz and Bluetooth 5.1 • Keys: 85 keys • Backlighting: no
            • Numpad: no •	Notice: Multi-device connectable(3 devices)',
            'image' => '\assets\image\keyboard\kb(9).jpg',
            'stock' => 999,
            'price' => 4390
        ],
        [
            'categoryID'=> 3,
            'Pname' => 'HP USB GAMING KEYBOARD K110 BLACK',
            'description' => '•	Interface: USB Type-C/Wireless 2.4GHz&Bluetooth • Keys: 104 keys • Backlighting: RGB
            • Numpad: yes •	Notice: green/yellow switch',
            'image' => '\assets\image\keyboard\kb(10).jpg',
            'stock' => 999,
            'price' => 7790
        ],

        //Product category : Headset
        [
            'categoryID'=> 4,
            'Pname' => 'HEADSET NUBWO GAMER X98 7.1 (BLACK)',
            'description' => "Gaming headphones that give your gaming experience more realistic with 7.1 virtual surround sound system that simulates in-game sound in all directions and with 50 mm speakers that deliver powerful and clear sound. Will not let you miss the chance to win the game for sure. The headphones are beautifully designed, emphasizing elegance, decorated with Spectrum LED lights, there is a rolling switch to adjust the volume on the side of the headphones with a short microphone that picks up the sound around. direction Flexible and durable headband for added comfort.",
            'image' => '\assets\image\headset\headset1.jpg',
            'stock' => 999,
            'price' => 450
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
            'price' => 750
        ],[
            'categoryID'=> 4,
            'Pname' => 'HEADSET ONIKUMA X15 PRO RGB AUX 3.5 (PINK)',
            'description' => "ONIKUMA X15 PRO GAMING HEADSET : ONIKUMA X15 PRO Gaming Headset adopts unique transparent luminous head beam design to give the most gorgeous lighting effects when playing games, which will create a real battlefield surround players. The 50mm oversized speaker units and graphene diaphragm ensure perfect performance on Treble, Mid and Bass to deliver the truest sound. Ultimate pursuit of comfort: 268g lightweight design, breathable all-inclusive earmuffs, adaptive head beam, all those sweet design will make sure your comfort in long time wearing.\n
            VIRTUAL SURROUND SOUND : Accurate sound positioning, even in the face of complex battlefields, it can quickly locate the enemy's position. Whether it's a deafening explosion or silent footsteps, it can be truly captured, bringing a shocking gaming experience\n
            DYNAMIC RAINBOW LIGHT : Aluminum-steel mixed head beam, transparent head beam shell, with breathing gradient lighting effect, releasing gorgeous lighting effects",
            'image' => '\assets\image\headset\headset3.jpg',
            'stock' => 999,
            'price' => 750
        ],[
            'categoryID'=> 4,
            'Pname' => 'HEADSET FANTECH VALOR MH86 SPACE EDITION (WHITE)',
            'description' => "Fantech VALOR MH86 SPACE EDITION is one kind of Multi Platform Gaming Headset. It is flexible and incredibly durable. it has been tested extensively to withstand the rigors of pro-gaming. This gaming headset designed with Adjustable Steel Headband, Foldable Mircrophone, Adjustable Earcup Angle. The gaming headphone is Multi-Platform Compatibility type. Here, the microphone is featured with Microphone Frequency Response 100-10,000Hz, Microphone Pattern Omni-directional, Sensitivity -42dB, Impedance 2200 Ohm, Microphone Noise Cancellation, Foldable Microphone Design and Microphone Mute Toggle On Remote Control. This headphone desiogned with With only 280gr weight. but still flexible and incredibly durable. it has been tested extensively to withstand the rigors of pro-gaming. In this headphone, the speakers featured with Speaker Driver 50mm, Headset Frequency Response 20-20,000Hz, Headset Sensitivity 110dB, Headset Impedance 32 Ohm, Headset Total Harmonic Distortion <5%, Headset Volume Control On Remote control. This Headphone supports with PC, Playstation, Xbox, Mobile and Mac. The latest Fantech VALOR MH86 SPACE EDITION Gaming Headphone has 01 year warranty.",
            'image' => '\assets\image\headset\headset4.jpg',
            'stock' => 999,
            'price' => 790
        ],[
            'categoryID'=> 4,
            'Pname' => 'HEADSET RAZER BLACKSHARK V2 X (GREEN)',
            'description' => "RAZER™ TRIFORCE 50MM DRIVERS : Our all-new patented design allows our engineers to custom tune each driver as though there are three—allowing for the individual replications of high, mid and low audio frequencies to deliver on richer trebles, brighter sound and powerful bass.\n
            RAZER™ HYPERCLEAR CARDIOID MIC : Offering greater speech pickup and noise cancellation, the bendable mic on this lightweight esports headset has an optimized microphone housing which adopts a more open design for minimal obstruction—resulting in improved clarity for a closer recreation of your voice.\n
            ADVANCED PASSIVE NOISE CANCELLATION : From cheering crowds to the hum of your rig, shut noise out and enjoy uninterrupted focus with special closed earcups that fully cover your ears, aided by plush cushions that form a closer seal for greater sound isolation.',
            'image' => '\assets\image\headset\headset5.jpg",
            'stock' => 999,
            'price' => 1890
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
            'price' => 2090
        ],[
            'categoryID'=> 4,
            'Pname' => 'HEADSET RAZER KAIRA X FOR XBOX (WHITE)',
            'description' => "The Razer Kaira X for Xbox Gaming Headphone, a wired over-ear gaming headset dedicated to the Xbox console, uses 50 mm Razer™ TriForce drivers to deliver true-to-life sound. High, medium, low, well made, overpriced.\n
            The headphones are comfortable to wear. Not too heavy for the head with a total weight of only 283 grams. The ear cups use FlowKnit memory foam material that is soft to the touch. good ventilation does not accumulate sweat The headband area can be adjusted to fit the user's body.\n
            In addition to audio performance, the accompanying RAZER™ HYPERCLEAR CARDIOID MIC is equally good. It is a microphone that picks up sound from the front. with reduced noise from the back and sides Provides smooth and uninterrupted coordination in the game The Razer Kaira X for Xbox Gaming Headphone has a control panel on the left earcup. You can adjust the volume and turn the mic on and off directly. Anyone who is looking for Xbox console gaming headphones, especially with full sound and quality microphone.",
            'image' => '\assets\image\headset\headset7.jpg',
            'stock' => 999,
            'price' => 2490
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
            'price' => 3590
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
            'price' => 6790
        ],[
            'categoryID'=> 4,
            'Pname' => 'WIRELESS HEADSET CORSAIR VIRTUOSO RGB HIGH-FIDELITY GAMING PERL',
            'description' => 'The CORSAIR VIRTUOSO RGB Wireless delivers a high-fidelity audio experience, all-day comfort from its premium memory foam earpads, and hyper-fast connectivity with SLIPSTREAM WIRELESS technology.',
            'image' => '\assets\image\headset\headset10.jpg',
            'stock' => 999,
            'price' => 6790
        ],

        //Product category : mic
        [
            'categoryID'=> 5,
            'Pname' => 'MICROPHONE NUBWO M31 SCYTHER SPECTRUM DESKTOP',
            'description' => 'Nubwo M31 is a desktop gaming microphone. Distinctive with a cool design in the style of gaming gear with RGB lighting on the mic base, which is designed to be a built-in smartphone stand. Can be placed both vertically and horizontally This mic is a dynamic type. Get the sound straight ahead Sound receiving frequency range 100 to 10,000 Hz, comes with windproof sponge. Provides clear sound quality, fine details, responds to communication while playing games quickly.In addition, the mic stem area is flexible and free to adjust and there is a mute button on the mic for muting. This mic connects via USB cable and is easy to use with both Windows and MacOS computers. It is an ideal gaming mic for entry-level gamers who are looking for their first mic to use. Good quality at an affordable price. The basic functions are complete. Cool design meets gaming needs',
            'image' => '\assets\image\microphone\mic1.jpg',
            'stock' => 999,
            'price' => 240
        ],[
            'categoryID'=> 5,
            'Pname' => 'MICROPHONE Signo MP-701',
            'description' => "The Signo MP-701 is a budget gaming microphone from budget gaming brand Signo. It comes as a condenser mic with a complete set of professional stand and accessories. It's easy to use as it comes with a connection port. Aux 3.5mm connection, just plug the jack into your computer or notebook and it's ready to go.",
            'image' => '\assets\image\microphone\mic2.jpg',
            'stock' => 999,
            'price' => 750
        ],[
            'categoryID'=> 5,
            'Pname' => 'MICROPHONE HyperX SOLOCAST',
            'description' => "Plug N Play audio recording : Get quality audio recordings with this easy-to-use USB condenser microphone. The cardioid polar pattern prioritizes sound sources directly in front of the microphone./n
            Tap-to-Mute sensor with LED status indicator : Simply tap the top of the mic to mute, and the signature LED indicator lets you immediately see whether or not you're broadcasting./n
            Flexible, adjustable stand : The easy-to-position stand swivels to support a variety of setups. You can even fit it under a monitor if your setup is tight on space./n
            Boom arm and mic stand threading : Versatile microphone fits 3/8-inch and 5/8-inch threaded setups, making it compatible with most mic stands or boom arms1.
            Multi-device and program compatibility : Get great sound whether you're connecting to a PC, PS4™, or Mac®. SoloCast is certified by Discord and TeamSpeak™, and works on major streaming platforms like Streamlabs OBS, OBS Studio, and XSplit.
            ",
            'image' => '\assets\image\microphone\mic3.jpg',
            'stock' => 999,
            'price' => 1690
        ],[
            'categoryID'=> 5,
            'Pname' => 'MICROPHONE SARAMONIC SR-MV2000',
            'description' => "SR-MV2000 features studio mics, a built-in pop filter, a cardioid pickup pattern, and a high-quality 3.5mm headphone output, complete with precision volume control, allowing you to deliver warmth and presence for a clear, professional sound while easily monitoring your audio. A unique detachable magnetic desk stand makes SR-MV2000 easy to mitigate knocks and bumps while removing. What's better, integrated 360-degree swing mount design can be quick and easy positioning on a desk, mic stand, or studio arm.\n
            With a compact body and multi-color LED indicator, the SR-MV2000 has refined what's the quick and easy way to record. Just plug it in, and it works. Don't miss the best microphone you will ever have.",
            'image' => '\assets\image\microphone\mic4.jpg',
            'stock' => 999,
            'price' => 2800

        ],[
            'categoryID'=> 5,
            'Pname' => 'MICROPHONE HYPERX QUADCAST S WHITE',
            'description' => '• Radiant RGB lighting with dynamic effects • Anti-Vibration shock mount• Tap-to-Mute sensor with LED indicator • Four selectable polar patterns• Convenient gain control adjustment• Customizable via HyperX NGENUITY Software • Mount adapter, built-in pop filter, and headphone jack • Multi-device and program compatibility',
            'image' => '\assets\image\microphone\mic5.jpg',
            'stock' => 999,
            'price' => 5990
        ],[
            'categoryID'=> 5,
            'Pname' => 'MICROPHONE HYPERX DUOCAST USB',
            'description' => '• RGB Lighting • Customizable with NGENUITY software • Tap-to-mute sensor with LED status indicator • Cardioid, Omnidirectional',
            'image' => '\assets\image\microphone\mic6.jpg',
            'stock' => 999,
            'price' => 3290
        ],[
            'categoryID'=> 5,
            'Pname' => 'USB MICROPHONE BLUE YETI NANO (SHADOW GREY)',
            'description' => '• Legendary Blue broadcast sound qualit • Enhanced Blue VO!CE vocal effects • Cardioid and Omni pickup patterns',
            'image' => '\assets\image\microphone\mic7.jpg',
            'stock' => 999,
            'price' => 6990
        ],[
            'categoryID'=> 5,
            'Pname' => 'USB MICROPHONE BLUE YETI NANO (MIDNIGHT BLUE)',
            'description' => '• Legendary Blue broadcast sound qualit • Enhanced Blue VO!CE vocal effects • Cardioid and Omni pickup patterns',
            'image' => '\assets\image\microphone\mic8.jpg',
            'stock' => 999,
            'price' => 4500
        ],[
            'categoryID'=> 5,
            'Pname' => 'MICROPHONE HYPERX PROCAST XLR',
            'description' => '• Gold-sputtered large diaphragm condenser • Cardioid polar pattern • XLR Connection • Detachable HyperX Shield metal pop filter',
            'image' => '\assets\image\microphone\mic9.jpg',
            'stock' => 999,
            'price' => 4500
        ],[
            'categoryID'=> 5,
            'Pname' => 'MICROPHONE SHURE MV7 (SILVER)',
            'description' => '• MV7 • Dynamic podcast microphone with both USB and XLR outputs • for use with computers and professional interfaces.',
            'image' => '\assets\image\microphone\mic10.jpg',
            'stock' => 999,
            'price' => 4500
        ],

        //Product category : Speaker
        [
            'categoryID'=> 6,
            'Pname' => 'SPEAKER FANTECH SONAR GS202 MOBILE GAMING & MUSIC SPEAKER (BLACK)',
            'description' => '• Portable USB2.0 Speaker • 45MM Driver Unit • RGB Illumination
            ',
            'image' => '\assets\image\speaker\speaker1.jpg',
            'stock' => 999,
            'price' => 290
        ],[
            'categoryID'=> 6,
            'Pname' => 'SPEAKER FANTECH SONAR GS202 MOBILE GAMING & MUSIC (PINK)',
            'description' => '• Portable USB 2.0 + 3.5mm TRRS jack Speaker • 45MM Driver Unit •	RGB Illumination • Dimension : 80 x 80 x 100mm
            ',
            'image' => '\assets\image\speaker\speaker2.jpg',
            'stock' => 999,
            'price' => 320
        ],
        [
            'categoryID'=> 6,
            'Pname' => 'SPEAKER EDIFIER M101BT PREFERT FOR YOUR HOME THEATER SYDTEM (BLACK)',
            'description' => '• 2.1 Bluetooth multimedia speakers system • Supports AUX audio inputs for different types of media devices • 100% wooden subwoofer with 4" bass driver • Side-mounted volume adjustment for easy controls3.SPEAKER EDIFIER R12U 2.0 (WHITE)
            ',
            'image' => '\assets\image\speaker\speaker3.jpg',
            'stock' => 999,
            'price' => 1090
        ],[
            'categoryID'=> 6,
            'Pname' => 'BLUETOOTH SPEAKER SOUL S-STORM (BEIGE)',
            'description' => '•	Bluetooth 5.0 • Up to 20 Hours Play Time • Weatherproof & Floatable (IP68 Rating) •	For Music & Calls •	USB-C Quick Charge • Portable & Convenient
            ',
            'image' => '\assets\image\speaker\speaker4.jpg',
            'stock' => 999,
            'price' => 1590
        ],[
            'categoryID'=> 6,
            'Pname' => 'SPEAKER EDIFIER G2000 BLUETOOTH 2.0 GAMING RGB LIGHTING (WHITE)',
            'description' => '•	2.75 inch full-range unit with 16W RMS power output • Column-shaped cabinet with backward mega bass port • 12 light effects enhance gaming experience •	Mechanical shift lever easy to control volume •	Music, Game and Movie sound mode supported • Bluetooth/USB sound card/AUX input available •	Dedicated power adapter for stable and safety power supply • Subwoofer output interface included
            ',
            'image' => '\assets\image\speaker\speaker5.jpg',
            'stock' => 999,
            'price' => 2790
        ],[
            'categoryID'=> 6,
            'Pname' => 'BLUETOOTH SPEAKER ANKER SOUNDCORE MOTION+ (BLACK)',
            'description' => "•	Hi-res Audio: motion+ is equipped with stunning Hi-Res Audio which is further enhanced by Qualcomm aptX for lossless music reproduction when streaming via Bluetooth. •	Huge sound with intense bass: packed with two Ultra high-frequency tweeters, neodymium woofers, and passive radiators to fill every corner of your room with 30W of rich sound. Low frequencies are enhanced in real-time by our exclusive bassuptm technology. • Exceptional depth and clarity: motion+'s Ultra-wide frequency range stretches from 50 Hz to 40 kHz and is paired with an advanced DSP to ensure all the details and idiosyncrasies of a song are faithfully reproduced. •	IPX7 waterproof: fully-waterproof casing provides an impenetrable barrier against liquids. • 12-Hour playtime: motion+'s built-in 6, 700 mAh battery lets you effortlessly soundtrack wild weekends, cozy evenings, or long summer days outdoors.
            ",
            'image' => '\assets\image\speaker\speaker6.jpg',
            'stock' => 999,
            'price' => 4490
        ],[
            'categoryID'=> 6,
            'Pname' => 'BLUETOOTH SPEAKER SONOS ROAM (LUNAR WHITE)',
            'description' => '•	Waterproof (IP67) •	Apple AirPlay 2 • Drop resistant • Button controls • 10 hour battery life •	WiFi • Automatic Trueplay™ • Bluetooth® • Voice enabled
            ',
            'image' => '\assets\image\speaker\speaker7.jpg',
            'stock' => 999,
            'price' => 9990
        ],[
            'categoryID'=> 6,
            'Pname' => 'BLUETOOTH SPEAKER SONOS ONE GEN 2 (BLACK)',
            'description' => '•	Voice enabled •	Touch controls • Humidity resistant • WiFi • Apple AirPlay 2
            ',
            'image' => '\assets\image\speaker\speaker8.jpg',
            'stock' => 999,
            'price' => 10900
        ],[
            'categoryID'=> 6,
            'Pname' => 'BLUETOOTH SPEAKER JBL PARTYBOX 110 ',
            'description' => '•	Bluetooth 5.1 & 3.5mm Jack • Mic & Guitar inputs • 160W RMS • Dynamic light show
            ',
            'image' => '\assets\image\speaker\speaker9.jpg',
            'stock' => 999,
            'price' => 17900
        ],[
            'categoryID'=> 6,
            'Pname' => 'BLUETOOTH SPEAKER JBL PARTYBOX 710',
            'description' => '•	Bluetooth 5,1 •	800W RMS party speaker • Customizable lightshow • IPX4 splashproof
            ',
            'image' => '\assets\image\speaker\speaker10.jpg',
            'stock' => 999,
            'price' => 32900
        ]

    ];
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}




