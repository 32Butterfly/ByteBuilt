<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'superuser',
        ]);

        User::create(['name' => 'Evaldas', 'email' => 'evaldas@example.com', 'password' => bcrypt('Sunny12')]);
        User::create(['name' => 'Jonas', 'email' => 'jonas@example.com', 'password' => bcrypt('Moon34')]);
        User::create(['name' => 'Mantas', 'email' => 'mantas@example.com', 'password' => bcrypt('Tree56')]);
        User::create(['name' => 'Greta', 'email' => 'greta@example.com', 'password' => bcrypt('River78')]);
        User::create(['name' => 'Tomas', 'email' => 'tomas@example.com', 'password' => bcrypt('Cloud90')]);
        User::create(['name' => 'Ieva', 'email' => 'ieva@example.com', 'password' => bcrypt('Sky321')]);
        User::create(['name' => 'Karolis', 'email' => 'karolis@example.com', 'password' => bcrypt('Stone43')]);
        User::create(['name' => 'Justina', 'email' => 'justina@example.com', 'password' => bcrypt('Leaf65')]);
        User::create(['name' => 'Dovydas', 'email' => 'dovydas@example.com', 'password' => bcrypt('Star87')]);
        User::create(['name' => 'Lukas', 'email' => 'lukas@example.com', 'password' => bcrypt('Wind09')]);
        User::create(['name' => 'Eglė', 'email' => 'egle@example.com', 'password' => bcrypt('Fire32')]);
        User::create(['name' => 'Paulius', 'email' => 'paulius@example.com', 'password' => bcrypt('Wave54')]);
        User::create(['name' => 'Austeja', 'email' => 'austeja@example.com', 'password' => bcrypt('Snow76')]);
        User::create(['name' => 'Simas', 'email' => 'simas@example.com', 'password' => bcrypt('Rain98')]);
        User::create(['name' => 'Agnė', 'email' => 'agne@example.com', 'password' => bcrypt('Leaf13')]);
        User::create(['name' => 'Rokas', 'email' => 'rokas@example.com', 'password' => bcrypt('Hill35')]);
        User::create(['name' => 'Viltė', 'email' => 'vilte@example.com', 'password' => bcrypt('Star57')]);
        User::create(['name' => 'Edvinas', 'email' => 'edvinas@example.com', 'password' => bcrypt('Sunny79')]);
        User::create(['name' => 'Inga', 'email' => 'inga@example.com', 'password' => bcrypt('Cloud91')]);
        User::create(['name' => 'Dainius', 'email' => 'dainius@example.com', 'password' => bcrypt('Sky24')]);
        User::create(['name' => 'Neringa', 'email' => 'neringa@example.com', 'password' => bcrypt('Stone46')]);
        User::create(['name' => 'Vytautas', 'email' => 'vytautas@example.com', 'password' => bcrypt('Leaf68')]);
        User::create(['name' => 'Laura', 'email' => 'laura@example.com', 'password' => bcrypt('Fire80')]);
        User::create(['name' => 'Marius', 'email' => 'marius@example.com', 'password' => bcrypt('Wave02')]);
        User::create(['name' => 'Aidas', 'email' => 'aidas@example.com', 'password' => bcrypt('Rain36')]);
        User::create(['name' => 'Monika', 'email' => 'monika@example.com', 'password' => bcrypt('Leaf58')]);
        User::create(['name' => 'Tadas', 'email' => 'tadas@example.com', 'password' => bcrypt('Hill70')]);
        User::create(['name' => 'Indrė', 'email' => 'indre@example.com', 'password' => bcrypt('Star81')]);
        User::create(['name' => 'Justas', 'email' => 'justas@example.com', 'password' => bcrypt('Sun03')]);
        User::create(['name' => 'Rūta', 'email' => 'ruta@example.com', 'password' => bcrypt('Cloud25')]);
        User::create(['name' => 'Vilius', 'email' => 'vilius@example.com', 'password' => bcrypt('Skyis47')]);
        User::create(['name' => 'Gabija', 'email' => 'gabija@example.com', 'password' => bcrypt('Stone69')]);
        User::create(['name' => 'Ignas', 'email' => 'ignas@example.com', 'password' => bcrypt('Leaf81')]);
        User::create(['name' => 'Ona', 'email' => 'ona@example.com', 'password' => bcrypt('Fire04')]);
        User::create(['name' => 'Deividas', 'email' => 'deividas@example.com', 'password' => bcrypt('Wave26')]);
        User::create(['name' => 'Simona', 'email' => 'simona@example.com', 'password' => bcrypt('Snow48')]);
        User::create(['name' => 'Raimondas', 'email' => 'raimondas@example.com', 'password' => bcrypt('Rain60')]);
        User::create(['name' => 'Dovilė', 'email' => 'dovile@example.com', 'password' => bcrypt('Leaf82')]);
        User::create(['name' => 'Arnas', 'email' => 'arnas@example.com', 'password' => bcrypt('Hill05')]);
        User::create(['name' => 'Jolanta', 'email' => 'jolanta@example.com', 'password' => bcrypt('Star27')]);
        User::create(['name' => 'Mindaugas', 'email' => 'mindaugas@example.com', 'password' => bcrypt('Suna49')]);
        User::create(['name' => 'Lina', 'email' => 'lina@example.com', 'password' => bcrypt('Cloud61')]);
        User::create(['name' => 'Meda', 'email' => 'meda@example.com', 'password' => bcrypt('Skies83')]);
        User::create(['name' => 'Žygimantas', 'email' => 'zygimantas@example.com', 'password' => bcrypt('Stone06')]);
        User::create(['name' => 'Viktorija', 'email' => 'viktorija@example.com', 'password' => bcrypt('Leaf28')]);
        User::create(['name' => 'Kęstutis', 'email' => 'kestutis@example.com', 'password' => bcrypt('Fire50')]);
        User::create(['name' => 'Aistė', 'email' => 'aiste@example.com', 'password' => bcrypt('Wave62')]);
        User::create(['name' => 'Vaidas', 'email' => 'vaidas@example.com', 'password' => bcrypt('Snow84')]);
        User::create(['name' => 'Elena', 'email' => 'elena@example.com', 'password' => bcrypt('Rain07')]);
        User::create(['name' => 'Dainė', 'email' => 'daine@example.com', 'password' => bcrypt('Leaf29')]);
        User::create(['name' => 'Audrius', 'email' => 'audrius@example.com', 'password' => bcrypt('Hill51')]);
        User::create(['name' => 'Giedrė', 'email' => 'giedre@example.com', 'password' => bcrypt('Star63')]);
        User::create(['name' => 'Tautvydas', 'email' => 'tautvydas@example.com', 'password' => bcrypt('Sun85')]);
        User::create(['name' => 'Aurelija', 'email' => 'aurelija@example.com', 'password' => bcrypt('Cloud07')]);
        User::create(['name' => 'Saulius', 'email' => 'saulius@example.com', 'password' => bcrypt('Sky29')]);
        User::create(['name' => 'Rasa', 'email' => 'rasa@example.com', 'password' => bcrypt('Stone52')]);
        User::create(['name' => 'Vytas', 'email' => 'vytas@example.com', 'password' => bcrypt('Leaf64')]);
        User::create(['name' => 'Julija', 'email' => 'julija@example.com', 'password' => bcrypt('Fire76')]);
        User::create(['name' => 'Domas', 'email' => 'domas@example.com', 'password' => bcrypt('Wave86')]);
        User::create(['name' => 'ShadowWolf', 'email' => 'shadowwolf@example.com', 'password' => bcrypt('Alpha23')]);
        User::create(['name' => 'FireFly99', 'email' => 'firefly99@example.com', 'password' => bcrypt('Buzz45')]);
        User::create(['name' => 'VilkasX', 'email' => 'vilkasx@example.com', 'password' => bcrypt('Moon67')]);
        User::create(['name' => 'PixelPirate', 'email' => 'pixelpirate@example.com', 'password' => bcrypt('Star89')]);
        User::create(['name' => 'RytasSun', 'email' => 'rytassun@example.com', 'password' => bcrypt('Sunna01')]);
        User::create(['name' => 'NeonTiger', 'email' => 'neontiger@example.com', 'password' => bcrypt('Glow12')]);
        User::create(['name' => 'Vytukas', 'email' => 'vytukas@example.com', 'password' => bcrypt('Wave34')]);
        User::create(['name' => 'EchoStorm', 'email' => 'echostorm@example.com', 'password' => bcrypt('Rain56')]);
        User::create(['name' => 'LunaKitty', 'email' => 'lunakitty@example.com', 'password' => bcrypt('Leaf78')]);
        User::create(['name' => 'ŽaibasX', 'email' => 'zaibasx@example.com', 'password' => bcrypt('Fire90')]);
        User::create(['name' => 'SilentFox', 'email' => 'silentfox@example.com', 'password' => bcrypt('Cloud21')]);
        User::create(['name' => 'Klevas123', 'email' => 'klevas123@example.com', 'password' => bcrypt('Skies43')]); 
        User::create(['name' => 'CrimsonRaven', 'email' => 'crimsonraven@example.com', 'password' => bcrypt('Stone65')]);
        User::create(['name' => 'Bomba99', 'email' => 'bomba99@example.com', 'password' => bcrypt('Leaf87')]);
        User::create(['name' => 'FrostByte', 'email' => 'frostbyte@example.com', 'password' => bcrypt('Star09')]);
        User::create(['name' => 'ViliusX', 'email' => 'viliusx@example.com', 'password' => bcrypt('Wind32')]);
        User::create(['name' => 'NovaBlaze', 'email' => 'novablaze@example.com', 'password' => bcrypt('Wave54')]);
        User::create(['name' => 'Sargas01', 'email' => 'sargas01@example.com', 'password' => bcrypt('Snow76')]);
        User::create(['name' => 'TurboNeko', 'email' => 'turboneko@example.com', 'password' => bcrypt('Rain98')]);
        User::create(['name' => 'MėnulisX', 'email' => 'menulisx@example.com', 'password' => bcrypt('Leaf13')]);
        User::create(['name' => 'ZapShot', 'email' => 'zapshot@example.com', 'password' => bcrypt('Hill35')]);
        User::create(['name' => 'LynxEye', 'email' => 'lynxeye@example.com', 'password' => bcrypt('Star57')]);
        User::create(['name' => 'DžiugasX', 'email' => 'dziugasx@example.com', 'password' => bcrypt('Sunasd79')]);
        User::create(['name' => 'StealthVyt', 'email' => 'stealthvyt@example.com', 'password' => bcrypt('Cloud91')]);
        User::create(['name' => 'JungleBeat', 'email' => 'junglebeat@example.com', 'password' => bcrypt('Sky24')]);
        User::create(['name' => 'Griffin9', 'email' => 'griffin9@example.com', 'password' => bcrypt('Stone46')]);
        User::create(['name' => 'Auksa', 'email' => 'auksa@example.com', 'password' => bcrypt('Leaf68')]);
        User::create(['name' => 'PixelShade', 'email' => 'pixelshade@example.com', 'password' => bcrypt('Fire80')]);
        User::create(['name' => 'Vortex99', 'email' => 'vortex99@example.com', 'password' => bcrypt('Wave02')]);
        User::create(['name' => 'Zodiakas', 'email' => 'zodiakas@example.com', 'password' => bcrypt('Rain36')]);
        User::create(['name' => 'SilentDrake', 'email' => 'silentdrake@example.com', 'password' => bcrypt('Leaf58')]);
        User::create(['name' => 'Mistikas', 'email' => 'mistikas@example.com', 'password' => bcrypt('Hill70')]); 
        User::create(['name' => 'BlazeStorm', 'email' => 'blazestorm@example.com', 'password' => bcrypt('Star81')]);
        User::create(['name' => 'FierceVyt', 'email' => 'fiercevyt@example.com', 'password' => bcrypt('Sun3303')]);
        User::create(['name' => 'GhostlyFox', 'email' => 'ghostlyfox@example.com', 'password' => bcrypt('Cloud25')]);
        User::create(['name' => 'DarkKarys', 'email' => 'darkkarys@example.com', 'password' => bcrypt('Sky6647')]);
        User::create(['name' => 'NeonPulse', 'email' => 'neonpulse@example.com', 'password' => bcrypt('Stone69')]);
        User::create(['name' => 'GintareX', 'email' => 'gintarex@example.com', 'password' => bcrypt('Leaf81')]);
        User::create(['name' => 'Sparrow99', 'email' => 'sparrow99@example.com', 'password' => bcrypt('Fire04')]);
        User::create(['name' => 'IronClaw', 'email' => 'ironclaw@example.com', 'password' => bcrypt('Wave26')]);
        User::create(['name' => 'ShadowNox', 'email' => 'shadownox@example.com', 'password' => bcrypt('Snow48')]);
        User::create(['name' => 'LynxRider', 'email' => 'lynxrider@example.com', 'password' => bcrypt('Rain60')]);
        User::create(['name' => 'VejasX', 'email' => 'vejasx@example.com', 'password' => bcrypt('Leaf82')]); 
        User::create(['name' => 'Thunder01', 'email' => 'thunder01@example.com', 'password' => bcrypt('Hill05')]);
        User::create(['name' => 'NovaSpark', 'email' => 'novaspark@example.com', 'password' => bcrypt('Star27')]);
        User::create(['name' => 'WolfCub', 'email' => 'wolfcub@example.com', 'password' => bcrypt('Sun1449')]);
        User::create(['name' => 'BlueNova', 'email' => 'bluenova@example.com', 'password' => bcrypt('Cloud61')]);
        User::create(['name' => 'StormVyt', 'email' => 'stormvyt@example.com', 'password' => bcrypt('Sky8663')]);
        User::create(['name' => 'IceFalcon', 'email' => 'icefalcon@example.com', 'password' => bcrypt('Stone06')]);
        User::create(['name' => 'SilkShadow', 'email' => 'silkshadow@example.com', 'password' => bcrypt('Leaf28')]);
        User::create(['name' => 'NightWolf', 'email' => 'nightwolf@example.com', 'password' => bcrypt('Fire50')]);
        User::create(['name' => 'KamikazeX', 'email' => 'kamikazex@example.com', 'password' => bcrypt('Wave62')]);
        User::create(['name' => 'SkyBlaze', 'email' => 'skyblaze@example.com', 'password' => bcrypt('Snow84')]);
        User::create(['name' => 'NovaBlade', 'email' => 'novablade@example.com', 'password' => bcrypt('Rain07')]);
        User::create(['name' => 'SteelWolf', 'email' => 'steelwolf@example.com', 'password' => bcrypt('Leaf29')]);
        User::create(['name' => 'EchoWolf', 'email' => 'echowolf@example.com', 'password' => bcrypt('Hill51')]);
        User::create(['name' => 'VenomFox', 'email' => 'venomfox@example.com', 'password' => bcrypt('Star63')]);
        User::create(['name' => 'VytasX', 'email' => 'vytasx@example.com', 'password' => bcrypt('Sun25685')]);
        User::create(['name' => 'FrostVyt', 'email' => 'frostvyt@example.com', 'password' => bcrypt('Wind47')]);
        User::create(['name' => 'LoneWolf99', 'email' => 'lonewolf99@example.com', 'password' => bcrypt('Storm02')]);
    }
}
