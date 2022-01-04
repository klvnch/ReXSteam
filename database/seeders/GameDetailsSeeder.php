<?php

namespace Database\Seeders;

use App\Models\GameDetails;
use Illuminate\Database\Seeder;

class GameDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        GameDetails::create([
            'games_id' => 1,
            'imgurl' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1172470/header.jpg',
            'vidurl' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256832561/movie480_vp9.webm?t=1619624593',
            'description' => 'This is Apex Legends Description. Apex Legends is a battle royale game and bla bla bla. This is a super super long description about apex legends',
            'developer' => 'Respawn Entertainment',
            'publisher' => 'Electronic Arts',
            'releasedate' => '4 February 2019',
            'price' => '500000'
        ]);
        GameDetails::create([
            'games_id' => 2,
            'imgurl' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/227300/header.jpg',
            'vidurl' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256827292/movie480_vp9.webm?t=1616622379',
            'description' => 'This is Euro Truck Simulator 2 Description. Euro Truck Simulator 2 is a driving simulation game. This is a super super long description about euro truck simulator',
            'developer' => 'SCS Software',
            'publisher' => 'SCS Software',
            'releasedate' => '19 Oktober 2019',
            'price' => '350000'
        ]);
        GameDetails::create([
            'games_id' => 3,
            'imgurl' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/493340/header.jpg',
            'vidurl' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256674785/movie480.webm?t=1488290537',
            'description' => 'This is Planet Coaster Description. Planet Coaster is a blablablabla. This is a super super long description about planet coaster',
            'developer' => 'Frontier Developments',
            'publisher' => 'Frontier Developments',
            'releasedate' => '17 November 2016',
            'price' => '400000'
        ]);
        GameDetails::create([
            'games_id' => 4,
            'imgurl' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1293830/header.jpg',
            'vidurl' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256820720/movie480_vp9.webm?t=1612810706',
            'description' => 'This is Forza Horizon 4 Description. Forza Horizon 4 is a blablablabla game. This is a super super long description about forza horizon',
            'developer' => 'Turn 10 Studios',
            'publisher' => 'Turn 10 Studios',
            'releasedate' => '28 September 2018',
            'price' => '200000'
        ]);
        GameDetails::create([
            'games_id' => 5,
            'imgurl' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/271590/header.jpg',
            'vidurl' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256757115/movie480.webm?t=1563930864',
            'description' => 'This is Grand Theft Auto 5 Description. Grand Theft Auto 5 is a blablablabla game. This is a super super long description about grand theft auto',
            'developer' => 'Rockstar Games',
            'publisher' => 'Rockstar Games',
            'releasedate' => '17 September 2013',
            'price' => '800000'
        ]);
        GameDetails::create([
            'games_id' => 6,
            'imgurl' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/493520/header.jpg',
            'vidurl' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256832724/movie480_vp9.webm?t=1619710158',
            'description' => 'This is GTFO Description. GTFO is a blablablabla game. This is a super super long description about gtfo',
            'developer' => '10 Chambers',
            'publisher' => '10 Chambers',
            'releasedate' => '12 January 2019',
            'price' => '200000'
        ]);
        GameDetails::create([
            'games_id' => 7,
            'imgurl' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1426210/header_alt_assets_0.jpg',
            'vidurl' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256827093/movie480_vp9.webm?t=1616514535',
            'description' => 'This is It Takes Two Description. It Takes Two is a blablablabla game. This is a super super long description about it takes two',
            'developer' => 'Hazelight Studio',
            'publisher' => 'Electronic Arts',
            'releasedate' => '26 Maret 2021',
            'price' => '500000'
        ]);
        GameDetails::create([
            'games_id' => 8,
            'imgurl' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/582010/header.jpg',
            'vidurl' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256769022/movie480.webm?t=1596524406',
            'description' => 'This is Monster Hunter World Description. Monster Hunter World is a blablablabla game. This is a super super long description about monster hunter world',
            'developer' => 'Capcom',
            'publisher' => 'Capcom',
            'releasedate' => '26 January 2018',
            'price' => '500000'
        ]);
        GameDetails::create([
            'games_id' => 9,
            'imgurl' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/105600/header.jpg',
            'vidurl' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256785003/movie480_vp9.webm?t=1589654781',
            'description' => 'This is Terraria Description. Terraria is a blablablabla game. This is a super super long description about terraria',
            'developer' => 'Re-Logic',
            'publisher' => 'Re-Logic',
            'releasedate' => '16 May 2011',
            'price' => '120000'
        ]);
        GameDetails::create([
            'games_id' => 10,
            'imgurl' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/389730/header.jpg',
            'vidurl' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256807403/movie480_vp9.webm?t=1604043392',
            'description' => 'This is Tekken 7 Description. Tekken 7 is a blablablabla game. This is a super super long description about tekken 7',
            'developer' => 'Bandai Namco Entertainment',
            'publisher' => 'Bandai Namco Entertainment',
            'releasedate' => '18 Maret 2015',
            'price' => '100000'
        ]);
        GameDetails::create([
            'games_id' => 11,
            'imgurl' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/508440/header.jpg',
            'vidurl' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256828204/movie480_vp9.webm?t=1617300058',
            'description' => 'This is Totally Accurate Battle Simulator Description. Totally Accurate Battle Simulator is a blablablabla game. This is a super super long description about totally accurate battle simulator',
            'developer' => 'Landfall Games',
            'publisher' => 'Landfall Games',
            'releasedate' => '1 April 2019',
            'price' => '100000'
        ]);
        GameDetails::create([
            'games_id' => 12,
            'imgurl' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/892970/header.jpg',
            'vidurl' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256820008/movie480_vp9.webm?t=1612278985',
            'description' => 'This is Valheim Description. Valheim is a blablablabla game. This is a super super long description about valheim',
            'developer' => 'Iron Gate AB',
            'publisher' => 'Coffee Stain Studio',
            'releasedate' => '2 February 2021',
            'price' => '320000'
        ]);
        GameDetails::create([
            'games_id' => 13,
            'imgurl' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/359550/header.jpg',
            'vidurl' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256806810/movie480_vp9.webm?t=1603820794',
            'description' => 'This is Rainbow Six Siege Description. Rainbow Six Siege is a blablablabla game. This is a super super long description about rainbow six siege',
            'developer' => 'Ubisoft Montreal',
            'publisher' => 'Ubisoft Montreal',
            'releasedate' => '26 November 2015',
            'price' => '400000'
        ]);
    }
}
