<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\Neighborhood;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinces = '[
            {
                "id": 1,
                "name": "Maputo (Cidade)",
                "districts": [
                    {
                        "id": 1,
                        "name": "KaMpfumo",
                        "neighborhoods": [
                            {
                                "id": 1,
                                "name": "Central A"
                            },
                            {
                                "id": 2,
                                "name": "Central B"
                            },
                            {
                                "id": 3,
                                "name": "Central C"
                            },
                            {
                                "id": 4,
                                "name": "Alto Maé A"
                            },
                            {
                                "id": 5,
                                "name": "Alto Maé B"
                            },
                            {
                                "id": 6,
                                "name": "Malhangalene A"
                            },
                            {
                                "id": 7,
                                "name": "Malhangalene B"
                            },
                            {
                                "id": 8,
                                "name": "Polana Cimento A"
                            },
                            {
                                "id": 9,
                                "name": "Polana Cimento B"
                            },
                            {
                                "id": 10,
                                "name": "Coop"
                            },
                            {
                                "id": 11,
                                "name": "Sommerschield"
                            }
                        ]
                    },
                    {
                        "id": 2,
                        "name": "Chamanculo",
                        "neighborhoods": [
                            {
                                "id": 12,
                                "name": "Aeroporto A"
                            },
                            {
                                "id": 13,
                                "name": "Aeroporto B"
                            },
                            {
                                "id": 14,
                                "name": "Xipamanine"
                            },
                            {
                                "id": 15,
                                "name": "Minkadjuíne"
                            },
                            {
                                "id": 16,
                                "name": "Unidade 7"
                            },
                            {
                                "id": 17,
                                "name": "Chamanculo A"
                            },
                            {
                                "id": 18,
                                "name": "Chamanculo B"
                            },
                            {
                                "id": 19,
                                "name": "Chamanculo C"
                            },
                            {
                                "id": 20,
                                "name": "Chamanculo D"
                            },
                            {
                                "id": 21,
                                "name": "Malanga"
                            },
                            {
                                "id": 22,
                                "name": "Munhuana"
                            }
                        ]
                    },
                    {
                        "id": 3,
                        "name": "Maxaquene",
                        "neighborhoods": [
                            {
                                "id": 23,
                                "name": "Mafalala"
                            },
                            {
                                "id": 24,
                                "name": "Maxaquene A"
                            },
                            {
                                "id": 25,
                                "name": "Maxaquene B"
                            },
                            {
                                "id": 26,
                                "name": "Maxaquene C"
                            },
                            {
                                "id": 27,
                                "name": "Maxaquene D"
                            },
                            {
                                "id": 28,
                                "name": "Polana Caniço A"
                            },
                            {
                                "id": 29,
                                "name": "Polana Caniço B"
                            },
                            {
                                "id": 30,
                                "name": "Urbanização"
                            }
                        ]
                    },
                    {
                        "id": 4,
                        "name": "Mavota",
                        "neighborhoods": [
                            {
                                "id": 31,
                                "name": "Mavalane A"
                            },
                            {
                                "id": 32,
                                "name": "Mavalane B"
                            },
                            {
                                "id": 33,
                                "name": "FPLM"
                            },
                            {
                                "id": 34,
                                "name": "Hulene A"
                            },
                            {
                                "id": 35,
                                "name": "Hulene B"
                            },
                            {
                                "id": 36,
                                "name": "Ferroviário"
                            },
                            {
                                "id": 37,
                                "name": "Laulane"
                            },
                            {
                                "id": 38,
                                "name": "3 de fevereiro"
                            },
                            {
                                "id": 39,
                                "name": "Mahotas"
                            },
                            {
                                "id": 40,
                                "name": "Albazine"
                            },
                            {
                                "id": 41,
                                "name": "Costa do Sol"
                            }
                        ]
                    },
                    {
                        "id": 5,
                        "name": "Mubukwane",
                        "neighborhoods": [
                            {
                                "id": 42,
                                "name": "Bagamoyo"
                            },
                            {
                                "id": 43,
                                "name": "George Dimitrov (Benfica)"
                            },
                            {
                                "id": 44,
                                "name": "Inhagoia A"
                            },
                            {
                                "id": 45,
                                "name": "Inhagoia B"
                            },
                            {
                                "id": 46,
                                "name": "Jardim"
                            },
                            {
                                "id": 47,
                                "name": "Luís Cabral"
                            },
                            {
                                "id": 48,
                                "name": "Magoanine"
                            },
                            {
                                "id": 49,
                                "name": "Malhazine"
                            },
                            {
                                "id": 50,
                                "name": "Nsalane"
                            },
                            {
                                "id": 51,
                                "name": "25 de Junho A"
                            },
                            {
                                "id": 52,
                                "name": "25 de Junho B"
                            },
                            {
                                "id": 53,
                                "name": "Zimpeto"
                            }
                        ]
                    },
                    {
                        "id": 6,
                        "name": "KaTembe",
                        "neighborhoods": [
                            {
                                "id": 54,
                                "name": "Guachene"
                            },
                            {
                                "id": 55,
                                "name": "Chalí"
                            },
                            {
                                "id": 56,
                                "name": "Inguide"
                            },
                            {
                                "id": 57,
                                "name": "Incassane"
                            },
                            {
                                "id": 58,
                                "name": "Chamissava"
                            }
                        ]
                    },
                    {
                        "id": 7,
                        "name": "Inhaca",
                        "neighborhoods": [
                            {
                                "id": 59,
                                "name": "Ingwane"
                            },
                            {
                                "id": 60,
                                "name": "Ribjene"
                            },
                            {
                                "id": 61,
                                "name": "Nhaquene"
                            }
                        ]
                    }
                ]
            },
            {
                "id": 2,
                "name": "Sofala",
                "districts": [
                    {
                        "id": 8,
                        "name": "Beira",
                        "neighborhoods": [
                            {
                                "id": 62,
                                "name": "Macuti"
                            },
                            {
                                "id": 63,
                                "name": "Palmeiras"
                            },
                            {
                                "id": 64,
                                "name": "Ponta-Gêa"
                            },
                            {
                                "id": 65,
                                "name": "Chaimite"
                            },
                            {
                                "id": 66,
                                "name": "Pioneiros"
                            },
                            {
                                "id": 67,
                                "name": "Esturro"
                            },
                            {
                                "id": 68,
                                "name": "Matacuane"
                            },
                            {
                                "id": 69,
                                "name": "Macurungo"
                            },
                            {
                                "id": 70,
                                "name": "Munhava-Central"
                            },
                            {
                                "id": 71,
                                "name": "Mananga"
                            },
                            {
                                "id": 72,
                                "name": "Vaz"
                            },
                            {
                                "id": 73,
                                "name": "Maraza"
                            },
                            {
                                "id": 74,
                                "name": "Chota"
                            },
                            {
                                "id": 75,
                                "name": "Alto da Manga"
                            },
                            {
                                "id": 76,
                                "name": "Nhaconjua"
                            },
                            {
                                "id": 77,
                                "name": "Chingussura"
                            },
                            {
                                "id": 78,
                                "name": "Vila Massane"
                            },
                            {
                                "id": 79,
                                "name": "Inhamízua"
                            },
                            {
                                "id": 80,
                                "name": "Matadouro"
                            },
                            {
                                "id": 81,
                                "name": "Mungassa"
                            },
                            {
                                "id": 82,
                                "name": "Ndunda"
                            },
                            {
                                "id": 83,
                                "name": "Manga Mascarenha"
                            },
                            {
                                "id": 84,
                                "name": "Muave"
                            },
                            {
                                "id": 85,
                                "name": "Nhangau"
                            },
                            {
                                "id": 86,
                                "name": "Nhangoma"
                            },
                            {
                                "id": 87,
                                "name": "Tchonja"
                            }
                        ]
                    },
                    {
                        "id": 9,
                        "name": "Buzi",
                        "neighborhoods": [
                            {
                                "id": 88,
                                "name": "Búzi Sede"
                            },
                            {
                                "id": 89,
                                "name": "Bândua"
                            },
                            {
                                "id": 90,
                                "name": "Grudja"
                            },
                            {
                                "id": 91,
                                "name": "Guara-Guara"
                            },
                            {
                                "id": 92,
                                "name": "Inharongue"
                            },
                            {
                                "id": 93,
                                "name": "Inhamuchindo"
                            },
                            {
                                "id": 94,
                                "name": "Sofala"
                            },
                            {
                                "id": 95,
                                "name": "Ampara"
                            },
                            {
                                "id": 96,
                                "name": "Estaquinha Sede"
                            },
                            {
                                "id": 97,
                                "name": "Chissinguana"
                            }
                        ]
                    },
                    {
                        "id": 10,
                        "name": "Caia",
                        "neighborhoods": [
                            {
                                "id": 98,
                                "name": "Vila de Caia"
                            },
                            {
                                "id": 99,
                                "name": "Ndoro"
                            },
                            {
                                "id": 100,
                                "name": "Murraça-Sede"
                            },
                            {
                                "id": 101,
                                "name": "Sena-Sede"
                            },
                            {
                                "id": 102,
                                "name": "Licoma"
                            }
                        ]
                    },
                    {
                        "id": 11,
                        "name": "Chemba",
                        "neighborhoods": [
                            {
                                "id": 103,
                                "name": "Chemba"
                            },
                            {
                                "id": 104,
                                "name": "3 de Fevereiro"
                            },
                            {
                                "id": 105,
                                "name": "Chiramba"
                            },
                            {
                                "id": 106,
                                "name": "Goe"
                            },
                            {
                                "id": 107,
                                "name": "Mulima"
                            }
                        ]
                    },
                    {
                        "id": 12,
                        "name": "Cheringoma",
                        "neighborhoods": [
                            {
                                "id": 108,
                                "name": "Vila de Inhaminga"
                            },
                            {
                                "id": 109,
                                "name": "Inhaminga"
                            },
                            {
                                "id": 110,
                                "name": "Inhamitanga"
                            }
                        ]
                    },
                    {
                        "id": 13,
                        "name": "Chibabava",
                        "neighborhoods": [
                            {
                                "id": 111,
                                "name": "Chibabava"
                            },
                            {
                                "id": 112,
                                "name": "Goonda"
                            },
                            {
                                "id": 113,
                                "name": "Tronga"
                            },
                            {
                                "id": 114,
                                "name": "Mucheve"
                            },
                            {
                                "id": 115,
                                "name": "Muxúngue"
                            }
                        ]
                    },
                    {
                        "id": 14,
                        "name": "Dondo",
                        "neighborhoods": [
                            {
                                "id": 116,
                                "name": "Chinamacondo"
                            },
                            {
                                "id": 117,
                                "name": "Savana"
                            },
                            {
                                "id": 118,
                                "name": "Mafambisse"
                            },
                            {
                                "id": 119,
                                "name": "Mutua"
                            }
                        ]
                    },
                    {
                        "id": 15,
                        "name": "Gorongosa",
                        "neighborhoods": [
                            {
                                "id": 120,
                                "name": "Vila de Gorongosa"
                            },
                            {
                                "id": 121,
                                "name": "Pungué"
                            },
                            {
                                "id": 122,
                                "name": "Tambarara"
                            },
                            {
                                "id": 123,
                                "name": "Nhamadzi"
                            },
                            {
                                "id": 124,
                                "name": "Vunduzi"
                            }
                        ]
                    },
                    {
                        "id": 16,
                        "name": "Machanga",
                        "neighborhoods": [
                            {
                                "id": 125,
                                "name": "Mavinga"
                            },
                            {
                                "id": 126,
                                "name": "Djavane"
                            },
                            {
                                "id": 127,
                                "name": "Zimuala"
                            },
                            {
                                "id": 128,
                                "name": "Chiloane"
                            },
                            {
                                "id": 129,
                                "name": "Inharingue"
                            },
                            {
                                "id": 130,
                                "name": "Divinhe"
                            },
                            {
                                "id": 131,
                                "name": "Buéne"
                            },
                            {
                                "id": 132,
                                "name": "Maropanhe"
                            }
                        ]
                    },
                    {
                        "id": 17,
                        "name": "Maríngue",
                        "neighborhoods": [
                            {
                                "id": 133,
                                "name": "Canxixe"
                            },
                            {
                                "id": 134,
                                "name": "Senga-Senga"
                            },
                            {
                                "id": 135,
                                "name": "Gumbalaçai"
                            },
                            {
                                "id": 136,
                                "name": "Maríngue"
                            },
                            {
                                "id": 137,
                                "name": "Subui"
                            }
                        ]
                    },
                    {
                        "id": 18,
                        "name": "Marromeu",
                        "neighborhoods": [
                            {
                                "id": 138,
                                "name": "Chupanga"
                            },
                            {
                                "id": 139,
                                "name": "Vila de Marromeu"
                            },
                            {
                                "id": 140,
                                "name": "Marromeu"
                            },
                            {
                                "id": 141,
                                "name": "Quama"
                            }
                        ]
                    },
                    {
                        "id": 19,
                        "name": "Muanza",
                        "neighborhoods": [
                            {
                                "id": 142,
                                "name": "Galinha"
                            },
                            {
                                "id": 143,
                                "name": "Muanza"
                            }
                        ]
                    },
                    {
                        "id": 20,
                        "name": "Nhamatanda",
                        "neighborhoods": [
                            {
                                "id": 144,
                                "name": "Vila de Nhamatanda"
                            },
                            {
                                "id": 145,
                                "name": "Nhamatanda"
                            },
                            {
                                "id": 146,
                                "name": "Nhampoca"
                            },
                            {
                                "id": 147,
                                "name": "Tica"
                            }
                        ]
                    }
                ]
            }
        ]';

        $provinces = (array) json_decode($provinces, true);

        foreach ($provinces as $province) {

            Province::updateOrInsert(['id' => $province['id']], [
                'id' => $province['id'],
                'name' => $province['name'],
                'created_at' => now(),
            'updated_at' => now()
            ]);

            $provinceModel = Province::whereId($province['id'])->first();

            foreach ($province['districts'] as $district) {
                $provinceModel->districts()->updateOrCreate(['id' => $district['id']], [
                    'id' =>  $district['id'],
                    'name' =>  $district['name'],
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
                $districtModel = District::whereId($district['id'])->first();

                foreach ($district['neighborhoods'] as $neighborhood) {
                    $districtModel->neighborhoods()->updateOrCreate([
                        'id' => $neighborhood['id']],[
                            'id' => $neighborhood['id'],
                            'name' => $neighborhood['name'],
                            'created_at' => now(),
                            'updated_at' => now()
                        ]
                    );
                }
            }
        }
    }
}
