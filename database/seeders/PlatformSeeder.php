<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Platform;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Platform::factory()
            ->state([
                'title' => 'Atari Pong',
                'release_year' => '1975',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Magnavox Odyssey',
                'release_year' => '1972',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Magnavox Odyssey 100',
                'release_year' => '1975',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Magnavox Odyssey 200',
                'release_year' => '1976',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Philips Telespel ES2201',
                'release_year' => '1975',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Coleco Telstar',
                'release_year' => '1976',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'APF TV Fun',
                'release_year' => '1976',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Color TV Game',
                'release_year' => '1977',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Zanussi Ping-O-Tronic',
                'release_year' => '1974',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'RCA Studio II',
                'release_year' => '1976',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Fairchild Channel F',
                'release_year' => '1976',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Bally Astrocade',
                'release_year' => '1977',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Atari 2600',
                'release_year' => '1977',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Magnavox Odyssey²/Philips Videopac G7000',
                'release_year' => '1978',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Interton VC4000',
                'release_year' => '1978',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'APF Imagination Machine',
                'release_year' => '1979',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Mattel Intellivision',
                'release_year' => '1980',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'VTech CreatiVision',
                'release_year' => '1981',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'GCE Vectrex',
                'release_year' => '1982',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Emerson Arcadia 2001',
                'release_year' => '1982',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Atari 5200',
                'release_year' => '1982',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Coleco ColecoVision',
                'release_year' => '1982',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Sega SG-1000',
                'release_year' => '1983',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Smith Engineering Microvision',
                'release_year' => '1979',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Nintendo Game & Watch',
                'release_year' => '1980',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Vectrex MB',
                'release_year' => '1982',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'PV-1000',
                'release_year' => '1983',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Epoch Cassette Vision',
                'release_year' => '1984',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Nintendo Entertainment System',
                'release_year' => '1985',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Atari 7800',
                'release_year' => '1986',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Sega Mark III',
                'release_year' => '1985',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Sega Master System',
                'release_year' => '1986',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Supergame VG 3000',
                'release_year' => '1985',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Atari XEGS',
                'release_year' => '1987',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Amstrad GX4000',
                'release_year' => '1990',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Commodore 64 Games System',
                'release_year' => '1990',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Sega Mega Drive',
                'release_year' => '1989',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Sega Mega-CD',
                'release_year' => '1992',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Sega 32X',
                'release_year' => '1994',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'SNK Neo-Geo',
                'release_year' => '1990',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'SNK Neo-Geo CD',
                'release_year' => '1994',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Super Nintendo Entertainment System',
                'release_year' => '1991',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Nintendo Game Boy',
                'release_year' => '1989',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Atari Lynx',
                'release_year' => '1989',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'TurboExpress',
                'release_year' => '1990',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Sega Game Gear',
                'release_year' => '1991',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'CoreGrafx',
                'release_year' => '1989',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'TurboGrafx/PC Engine',
                'release_year' => '1990',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'SuperGrafx',
                'release_year' => '1990',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'TurboDuo',
                'release_year' => '1992',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Philips CD-i',
                'release_year' => '1991',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Watara Supervision',
                'release_year' => '1992',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Atari Panther',
                'release_year' => '1991',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Commodore Amiga CD32',
                'release_year' => '1993',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => '3DO',
                'release_year' => '1993',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Atari Jaguar',
                'release_year' => '1993',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Atari Jaguar CD',
                'release_year' => '1995',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Sega Saturn',
                'release_year' => '1994',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Sony PlayStation',
                'release_year' => '1995',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Nintendo 64',
                'release_year' => '1996',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Nintendo 64DD',
                'release_year' => '1999',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Mega Duck/Cougar Boy',
                'release_year' => '1993',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Bit Gamate',
                'release_year' => '1994',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Sega Nomad',
                'release_year' => '1995',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Game.com',
                'release_year' => '1997',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Nintendo Game Boy Colour',
                'release_year' => '1998',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Nintendo Game Boy Pocket',
                'release_year' => '1996',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Nintendo Game Boy Light',
                'release_year' => '1998',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'SNK Neo-Geo Pocket',
                'release_year' => '1998',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'WonderSwan',
                'release_year' => '1999',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'TurboDuo',
                'release_year' => '1992',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'PC-FX',
                'release_year' => '1994',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Bandai Playdia',
                'release_year' => '1994',
                'active'=> false
            ])
            ->create();
 
        Platform::factory()
            ->state([
                'title' => 'SNK Neo-Geo CD',
                'release_year' => '1994',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Casio Loopy',
                'release_year' => '1995',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Nintendo Virtual Boy',
                'release_year' => '1995',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Apple Pippin',
                'release_year' => '1995',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Sega Dreamcast',
                'release_year' => '1999',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Sony PlayStation 2',
                'release_year' => '2000',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Microsoft Xbox',
                'release_year' => '2001',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Nintendo GameCube',
                'release_year' => '2001',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Panasonic Q',
                'release_year' => '2001',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'SNK Neo-Geo Pocket Colour',
                'release_year' => '1999',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Bandai WonderSwan',
                'release_year' => '1999',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Bandai WonderSwan Color',
                'release_year' => '2001',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'GamePark GP32',
                'release_year' => '2001',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Nintendo Game Boy Advance',
                'release_year' => '2001',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Nintendo Game Boy Advance SP',
                'release_year' => '2003',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Nintendo Game Boy Micro',
                'release_year' => '2005',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Bandai SwanCrystal',
                'release_year' => '2002',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Infinium Labs Phantom',
                'release_year' => '2002',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Tapwave Zodiac',
                'release_year' => '2003',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Nokia N-Gage',
                'release_year' => '2003',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Nokia N-Gage QD',
                'release_year' => '2003',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Nuon',
                'release_year' => '2000',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Panasonic Q',
                'release_year' => '2002',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Xbox 360',
                'release_year' => '2005',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Xbox 360 S',
                'release_year' => '2010',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Wii',
                'release_year' => '2006',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'PlayStation 3',
                'release_year' => '2007',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'PlayStation 3 Slim',
                'release_year' => '2009',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Nintendo DS',
                'release_year' => '2004',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Nintendo DS Lite',
                'release_year' => '2006',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Nintendo DSi',
                'release_year' => '2009',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Nintendo DSi XL',
                'release_year' => '2010',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'PlayStation Portable',
                'release_year' => '2005',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'PSP Slim',
                'release_year' => '2006',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'PSP Slim & Lite',
                'release_year' => '2008',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'PSP Go',
                'release_year' => '2009',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Gizmondo',
                'release_year' => '2005',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'GamePark GP2X',
                'release_year' => '2005',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'GamePark GP2X Wiz',
                'release_year' => '2009',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Pandora',
                'release_year' => '2010',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'EVO Smart',
                'release_year' => '2006',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Pocket Dream Console',
                'release_year' => '2006',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Gemei X760+',
                'release_year' => '2008',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Dingoo A-320',
                'release_year' => '2009',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Pocket Dream Console Touch',
                'release_year' => '2009',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Zeebo',
                'release_year' => '2009',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Dingoo A-330',
                'release_year' => '2010',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Gemei A330',
                'release_year' => '2010',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Wii U',
                'release_year' => '2012',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Wii Mini',
                'release_year' => '2012',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Ouya',
                'release_year' => '2013',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'PlayStation 4',
                'release_year' => '2013',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'PlayStation 4 Slim',
                'release_year' => '2016',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'PlayStation 4 Pro',
                'release_year' => '2016',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Xbox One',
                'release_year' => '2013',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Xbox One S',
                'release_year' => '2016',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Xbox One X',
                'release_year' => '2017',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'PlayStation TV',
                'release_year' => '2014',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Nintendo Switch',
                'release_year' => '2017',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Nintendo 3DS',
                'release_year' => '2011',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'PSP Street',
                'release_year' => '2011',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'PlayStation Vita',
                'release_year' => '2011',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'PlayStation Vita Slim',
                'release_year' => '2011',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Nintendo 3DS XL',
                'release_year' => '2012',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Nintendo 2DS',
                'release_year' => '2013',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Nvidia Shield',
                'release_year' => '2013',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'New Nintendo 3DS',
                'release_year' => '2014',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'New Nintendo 3DS XL',
                'release_year' => '2014',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'New Nintendo 2DS XL',
                'release_year' => '2017',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Nintendo Switch Lite',
                'release_year' => '2019',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'PlayStation 5',
                'release_year' => '2020',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Xbox Series',
                'release_year' => '2020',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Nintendo Switch Oled',
                'release_year' => '2021',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Atari VCS',
                'release_year' => '2021',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Playdate',
                'release_year' => '2021',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Steam Deck',
                'release_year' => '2022',
                'active'=> false
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Microsoft Windows',
                'release_year' => '1985',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Linux',
                'release_year' => '1991',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'macOS',
                'release_year' => '2001',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'iOS',
                'release_year' => '2007',
                'active'=> true
            ])
            ->create();

        Platform::factory()
            ->state([
                'title' => 'Android',
                'release_year' => '2008',
                'active'=> true
            ])
            ->create();
    }
}
